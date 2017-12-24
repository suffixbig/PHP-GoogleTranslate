<?php
//2017-12-06
//送出訊息
//支援SSH的抓檔
function curl_get($url)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
}
//送出訊息-參數3字串長度上限
function curl_post($url, $fields, $s = 2600)
{
    //將$post 組成要送過去的字
    $fields_string = "";
    foreach ($fields as $key => $value) {
        $fields_string .= 'q=' . urlencode($value) . '&';
        //不做urlencode處理也會自動有處理
        //長度超過5000字元就中斷 經過測試只能2600
        if (strlen($fields_string) >= $s) {
            break;
        }

    }
    $fields_string = rtrim($fields_string, '&'); //去掉最尾的&

    // Open connection
    $ch = curl_init();
    // Set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    //curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');
    // Execute post
    $result = curl_exec($ch);
    // Close connection
    curl_close($ch);
    return $result;
}

//獲取目錄下所有文件，包括子目錄
function get_allfiles($path, &$files)
{
    if (is_dir($path)) {
        $dp = dir($path);
        while ($file = $dp->read()) {
            if ($file != "." && $file != "..") {
                get_allfiles($path . "/" . $file, $files); //呼叫自己
            }
        }
        $dp->close();
    }
    if (is_file($path)) {
        $files[] = $path; //只把檔案加進去
    }
}

function get_filenamesbydir($dir)
{
    $files = array();
    get_allfiles($dir, $files);
    return $files;
}

//翻譯後的取代工作
function translated_and_replaced($str)
{
    if (empty($str)) {
        return '';
    }
    $str = urldecode($str); //解回
    $str = str_replace('％', '%', $str);
    $str = str_replace('？', '?', $str);
    $str = str_replace('＆', '&', $str);
    $str = str_replace('！', '!', $str);
    $str = str_replace('：', ': ', $str); //這是1個:號加空格
    $str = str_replace('＃', '# ', $str);
    $str = str_replace('。', '.', $str);
    $str = str_replace('”&gt;“', ' > ', $str);
    $str = str_replace('&gt; =', ' >= ', $str);
    $str = str_replace('&lt; =', ' <= ', $str);
    $str = str_replace('&lt;', ' < ', $str);

    return $str;
}
//去除換行字元
function no_r_n($str)
{
    $str = str_replace(array("\r\n", "\r", "\n"), "", $str);
    return $str;
}
//整篇文章要翻譯的字
function get_translated_word_test($file)
{
    $files = array();
    $file = fopen($file, "r");
    //輸出文本中所有的行，直到文件結束為止。
    $key = "=";
    while (!feof($file)) {
        $strs = fgets($file);
        //找出字原位置
        $leng = strlen($strs);
        $place = 0;
        for ($i = 0; $i < $leng; $i++) {
            $word[$i] = substr($strs, $i, 1);
            if ($word[$i] == $key) {
                $place = $i;
                break;
            }
        }
        if ($place) {
            //該行不空白的話
            $a = no_r_n(substr($strs, 0, $place)); //換行字元要拿掉
            $b = trim(substr($strs, $place + 3)); //要翻譯的字
            $t = array('a' => $a, 'b' => substr($b, 0, -2));
        } else {
            //沒有=就用原本的字 有可能是<?php或註解
            $t = array('a' => no_r_n($strs), 'b' => ''); //換行字元要拿掉
        }
        $files[] = $t;
    }
    $a = array();
    $b = array();
    fclose($file);
    for ($i = 0; $i < count($files); $i++) {
        $a[] = $files[$i]['a'];
        $b[] = $files[$i]['b'];
    }
    $files2 = array('a' => $a, 'b' => $b);
    return $files2;
}

//單引號處理
function addslashesB($str)
{
    $str = str_replace("\'", "'", $str);
    $str = str_replace("'", "\'", $str);
    return $str;
}

//新增資料
function add_mysqltranslation($apend, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms = '')
{
    $ss = 0;
    $db_name = $CT_CONFIG['db_name'] . '.' . $CT_CONFIG['db_sheet']; //資料表名稱
    $linkID = $CT_CONFIG['linkID'];
    $project_name = $CT_CONFIG['project_name']; //專案名稱
    $version = $CT_CONFIG['project_name']; //版本號
    $priority = 20;//優先權

    for ($i = 0; $i < count($apend['b']); $i++) {
        if ($apend['b'][$i]) {
            $dirname = addslashes($apend['f']['dirname']);
            $basename = $apend['f']['basename'];
            $sourcelanguage = $sourcelanguage; //來源語言
            $sourcetext = $apend['b'][$i];
            $targetlanguage = $targetlanguage; //目標語言;

            //可能會有沒有翻譯的情況這種不要記錄
            if (empty($apend['c'][$i])) {
                $sms .= "發生GOOGLE翻譯無回傳:" . $sourcetext . "\n";
            } else {
                $targettext = $apend['c'][$i];

                $var2 = trim($apend['a'][$i]); //比對一定要去除空格
                $var = substr($var2, 4, strlen($var2) - 6); //變數名//以目標版為準
                //新增資料紀錄
                $sql = "INSERT INTO $db_name (`t_id`, `project_name`, `version`, `dirname`, `basename`, `var` ,`sourcelanguage`, `sourcetext`, `targetlanguage`, `targettext`, `priority`, `add_date`) VALUES (NULL, '$project_name', '$version','$dirname','$basename','$var','$sourcelanguage','$sourcetext','$targetlanguage','$targettext','$priority', NOW());";
                $ok = mysql_insert_i($sql, $linkID);
                $oki = ($ok == 1) ? "成功" : "失敗!";
                //$sms.="新增資料:".$oki;
                $ss++;
                if ($ok != 1) {
                    $sms .= "新增資料錯誤訊息:" . $ok;
                }
            }
        }
    }
    return $ss;
}

//查詢資料庫的翻譯 這沒辦法整批查 只能1行1行查
function q_data_translation($sourcetext, $sourcelanguage, $targetlanguage, $CT_CONFIG, $f = array('dirname' => '', 'basename' => ''))
{
    $dirname = $f['dirname'];
    $basename = $f['basename'];
    $db_name = $CT_CONFIG['db_name'] . '.' . $CT_CONFIG['db_sheet']; //資料表名稱
    $linkID = $CT_CONFIG['linkID'];
    $sourcetext = addslashes($sourcetext);
    $sql = "SELECT `targettext` FROM `oc_t` WHERE `sourcelanguage` = '$sourcelanguage' AND `targetlanguage` = '$targetlanguage' AND `sourcetext` = '$sourcetext' ORDER BY `oc_t`.`priority` ASC";
    $date = row_sql1p($sql, 0, $linkID);
    return $date;
}

//智慧翻譯
function ai_translated($ap, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms)
{
    $need_s = array(); //紀錄要翻譯的行數由0開始
    $before_translation = array(); //送去GOOGLE翻譯前的
    $aa = array(); //原本變數名稱
    $text_array = array(); //翻譯後的
    for ($i = 0; $i < count($ap['b']); $i++) {
        if (trim($ap['b'][$i])) {
            //有內容的行
            $need_s[] = $i; //要翻譯的行號
        } else {
            //空白行不翻
        }

    }
    //print_r($ap);exit;
    //查資料庫-看是否翻譯過
    $rs = array();
    $yourself_translated = $ap['b'];
    for ($i = 0; $i < count($need_s); $i++) {
        //只挑要送出去的行數
        $sourcetext = $ap['b'][$need_s[$i]];
        //查詢資料庫
        $r = q_data_translation($sourcetext, $sourcelanguage, $targetlanguage, $CT_CONFIG, $ap['f']);
        if ($r) {
            //有查道的話
            $yourself_translated[$need_s[$i]] = $r; //取代字
            $rs[] = $need_s[$i]; //放查到的行數
        }
    }

    $need_s2 = array();
    //去除資料庫已有的翻譯的行
    for ($i = 0; $i < count($need_s); $i++) {
        if (in_array($need_s[$i], $rs)) {
        } else {
            $need_s2[] = $need_s[$i];
        }
    }

    $sms .= "一共" . count($ap['b']) . "行,";
    $sms .= count($ap['b']) - count($need_s) . "行是註解或空白";
    $sms .= count($rs) . "行翻譯過";
    $sms .= count($need_s2) . "行要送翻譯";

    $a['error'] = 1;
    //有要翻譯的才送
    if (count($need_s2)) {
        $iurlq = "&target=" . $targetlanguage;
        //一次送多組
        for ($i = 0; $i < count($need_s2); $i++) {
            //只挑要送出去的行數
            $text = $ap['b'][$need_s2[$i]];
            $before_translation[] = $text; //這個下面要用
            $aa[]= $ap['a'][$need_s2[$i]]; //這個下面要用原本變數名稱
        }
        $iurl = googleapi_url . $iurlq;
        $response = curl_post($iurl, $before_translation); //送翻譯
        //print_r($iurl);
        if (preg_match("@<title>Error 413@", $response)) {
            $sms .= "。 | 客戶發出的請求太大 GOOGLE 拒絕翻譯 Error 413";
            $a['sms'] = $sms;
            $a['error'] = 1;
            return $a;
        } else if (preg_match("@<title>Error 400@", $response)) {
            $sms .= "。 | 您的客戶發出格式不正確或非法的請求。 Error 400";
            $a['sms'] = $sms;
            $a['error'] = 1;
            return $a;
        } else {
            $data = json_decode($response, true); //接收;
            if (isset($data['error'])) {
                if ($data['error']['code'] == 400) {
                    //再送1次翻譯
                    echo "再送1次翻譯";
                    $response = curl_post($iurl, $before_translation, 1000); //送翻譯
                    $data = json_decode($response, true); //接收;

                    if ($data['error']['code'] == 400) {
                        $sms .= "。 | 翻譯參數有問題" . json_encode($data['error']);
                        $a['sms'] = $sms;
                        $a['error'] = 1;
                        return $a;
                    } else {
                        $sms .= "翻譯成功";
                        //把翻譯內容處理一遍
                        for ($i = 0; $i < count($data['data']['translations']); $i++) {
                            $text_array[] = translated_and_replaced($data['data']['translations'][$i]['translatedText']); //翻譯後的取代工作
                        }
                        //注意這相同有2段
                        $sms .= " 新增資料紀錄";
                        $apend = array();
                        $apend['a'] = $aa;//變數名稱
                        $apend['f'] = $ap['f'];
                        $apend['b'] = $before_translation; //翻譯前的
                        $apend['c'] = $text_array; //翻譯後的 入資料庫的字要是處理過的
                        $ss = add_mysqltranslation($apend, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms); //新增資料紀錄
                        $sms .= $ss . "筆";

                    }
                }
            } else {
                //翻譯成功
                $sms .= "翻譯成功";
                //把翻譯內容處理一遍
                for ($i = 0; $i < count($data['data']['translations']); $i++) {
                    $text_array[] = translated_and_replaced($data['data']['translations'][$i]['translatedText']); //翻譯後的取代工作
                }

                $sms .= " 新增資料紀錄";
                $apend = array();
                $apend['a'] = $aa;//變數名稱
                $apend['f'] = $ap['f'];
                $apend['b'] = $before_translation; //翻譯前的
                $apend['c'] = $text_array; //翻譯後的 入資料庫的字要是處理過的
                $ss = add_mysqltranslation($apend, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms); //新增資料紀錄
                $sms .= $ss . "筆";
            }

            $not_finished = count($need_s2) - count($text_array);
            if ($not_finished) {
                //數量有差表示沒翻譯完要紅字提醒
                $sms .= "<span style=\"color:red\"> 因GOOGLE翻譯字數上限本次尚有 " . $not_finished . "筆未翻譯. </span>";
            }

            //挑回內容
            $cc1 = $yourself_translated; //查過自己翻譯後剩下
            //只挑要送出去的行數取代
            //如果翻譯不完全就會有只有部分 所以次數用$text_array
            for ($i = 0; $i < count($text_array); $i++) {
                $cc1[$need_s2[$i]] = $text_array[$i];
            }

            /*
            echo $sms;
            print_r($cc1);
            print_r($need_s2);
            print_r($text_array);
            exit;
             */
            $ap['c'] = $cc1; //原數組增加
            $a['sms'] = $sms;
            $a['ai_result'] = $ap;
            $a['error'] = 0; //此次沒問題
            return $a;
        }
    } else {
        //全部翻譯資料庫都有自建好
        $ap['c'] = $yourself_translated; //查過自己翻譯過的就好
        $a['sms'] = $sms;
        $a['ai_result'] = $ap;
        $a['error'] = 0; //此次沒問題
        return $a;
    }
}

//查路徑目錄在不在，不在就建立目錄
//一層一層    建好目錄
function auto_mkdir($file)
{
    $path = '';
    $dir = dirname($file);
    if (is_dir($dir)) {
        //echo "目錄在";
    } else {
        //echo "目錄不在";
        $file = str_replace('\\', '/', $file);
        $directories = explode('/', dirname($file));
        $s = 0;
        foreach ($directories as $directory) {
            if ($s == 0) {
                $path = $directory;
            } else {
                $path .= '/' . $directory;
                if (!is_dir($path)) {
                    @mkdir($path, 0777);
                }
            }
            $s++;
        }
    }
}
