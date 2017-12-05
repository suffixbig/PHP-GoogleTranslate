<?php
/* Version 0.9, 2017/12/2 10號工程師
AUTO translation file googleapi
功能:把目錄下的檔案全翻譯完
2017/12/5 完工會用資料庫比對查
2017/12/6 多做沒翻完的提醒
 */
$thisDir = "."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
require $thisDir . "/config.php"; // 載入主參數設定檔
//==========================================================================
//require_once INCLUDE_PATH . "/inc_password_admin.php"; // 載入管理員密碼驗證
//==========================================================================
require_once INCLUDE_PATH . "/mysql.inc.php"; // 載入資料庫函式
/* ********************************************************************************************* */
/* 參數設置
/* ********************************************************************************************* */
$i_my = '後台';
$br = "<br>\n";
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
//送出訊息
function curl_post($url, $fields)
{
    //將$post 組成要送過去的字
    $fields_string = "";
    foreach ($fields as $key => $value) {
        $fields_string .= 'q=' . urlencode($value) . '&';
        //不做urlencode處理也會自動有處理
        //長度超過5000字元就中斷 經過測試只能2600
        if (strlen($fields_string) >= 2600) {
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
                //新增資料紀錄
                $sql = "INSERT INTO $db_name (`t_id`, `project_name`, `version`, `dirname`, `basename`, `sourcelanguage`, `sourcetext`, `targetlanguage`, `targettext`, `priority`, `add_date`) VALUES (NULL, '$project_name', '$version','$dirname','$basename','$sourcelanguage','$sourcetext','$targetlanguage','$targettext','20', NOW());";
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
    $text_array = array(); //翻譯後的
    for ($i = 0; $i < count($ap['b']); $i++) {
        if (trim($ap['b'][$i])) {
            //有內容的行
            $need_s[] = $i; //要翻譯的行號
        } else {
            //空白行不翻
        }

    }

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
                $sms .= "。 | 翻譯參數有問題" . json_encode($data['error']);
                $a['sms'] = $sms;
                $a['error'] = 1;
                return $a;
            } else {
                //翻譯成功
                $sms .= "翻譯成功";
                //把翻譯內容處理一遍
                for ($i = 0; $i < count($data['data']['translations']); $i++) {
                    $text_array[] = translated_and_replaced($data['data']['translations'][$i]['translatedText']); //翻譯後的取代工作
                }

                $sms .= " 新增資料紀錄";
                $apend = array();
                $apend['f'] = $ap['f'];
                $apend['b'] = $before_translation; //翻譯前的
                $apend['c'] = $text_array; //翻譯後的 入資料庫的字要是處理過的
                $ss = add_mysqltranslation($apend, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms); //新增資料紀錄
                $sms .= $ss . "筆";
            }

            $not_finished=count($need_s2)-count($text_array);
            if($not_finished){
            //數量有差表示沒翻譯完要紅字提醒
            $sms .="<span style=\"color:red\"> 因GOOGLE翻譯字數上限本次尚有 ".$not_finished."筆未翻譯. </span>";
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
    }else{
    //全部翻譯資料庫都有自建好
        $ap['c'] = $yourself_translated; //查過自己翻譯過的就好
        $a['sms'] = $sms;
        $a['ai_result'] = $ap;
        $a['error'] = 0; //此次沒問題
        return $a;
    }
}
/*********************************************************************************************/
/*
翻譯超簡單使用
如果你有申請過該API-網址直打就會有返回值
//$url='https://translation.googleapis.com/language/translate/v2?key=[請自己去申請KEY]&q=fuck&q=language&target=zh-TW';
申請KEY的位置
請通過訪問https://console.developers.google.com/apis/api/translate.googleapis來啟用它  這個 AIP名字叫 Google Cloud Translation API
KEY不能用別人的
 */

$url = 'https://translation.googleapis.com/language/translate/v2?key=' . googleApiKEY;
define('googleapi_url', $url);
/*********************************************************************************************/
$sourcelanguage = 'en-gb'; //來源語言
$targetlanguage = 'zh-TW'; //目標語言

$dir = dirname(__FILE__) . "\\01"; //要開啟的路徑
$dir1 = $dir . "a"; //來源目錄 放有英文檔案
$dir2 = $dir . "b"; //放有 翻譯過的中文檔案

/*********************************************************************************************/

$filenamesA = get_filenamesbydir($dir1); //獲取目錄下所有文件，包括子目錄
$filenamesB = get_filenamesbydir($dir2); //獲取目錄下所有文件，包括子目錄
/*********************************************************************************************/
/* ********************************************************************************************* */
$CT_CONFIG['db_name'] = 't_translation_googleapi'; //要開啟的資料庫
$CT_CONFIG['db_sheet'] = DB_PREFIX . 't'; //子資料表

$CT_CONFIG['project_name'] = 'opencart'; //專案名稱
$CT_CONFIG['version'] = '2.3.0.2'; //版本號一律4碼

$linkID = omysql($CT_CONFIG['db_name']); //開資料庫================================================
$CT_CONFIG['linkID'] = $linkID;

$z = array('y1' => 0, 'y2' => 0);
//打印所有文件名，包括路徑
foreach ($filenamesA as $value) {
    $ss = 0;
    //這裡不會有目錄名
    echo "來源" . $value; //開啟檔案
    $sms = '';
    $f = array();
    //這裡不會有目錄名只有檔案名
    $value2 = str_replace($dir1, $dir2, $value); //要找的檔名
    $value2 = str_replace('/', '\\', $value2); //要找的檔名
    $value2 = str_replace($sourcelanguage, $targetlanguage, $value2); //要找的檔名
    $sms .= "目標檔案可寫入檢查";
    $sms .= " |結果:";
    if (is_file($value2)) {
        $sms .= "找到檔案" . $br;
        $f['target'] = $value2; //目標檔名
        $f['dirname'] = substr(dirname($value2), strlen($dir2) + 1); //路徑要去掉相同部分
        $f['basename'] = basename($value2); //檔名
        //print_r($f);

        $ap = get_translated_word_test($value); //開檔案
        $ap['f'] = $f; //檔案相關資訊

        $ap = ai_translated($ap, $sourcelanguage, $targetlanguage, $CT_CONFIG, $sms); //AI翻譯

        //有錯就不做下一步了
        if ($ap['error']) {
            $sms = $ap['sms'];
        } else {
            //沒錯才做下一步了
            $apend = $ap['ai_result'];
            $sms = $ap['sms'];

            //組出檔案內容
            $context = '';
            $context1p = '';
            for ($i = 0; $i < count($apend['a']); $i++) {
                $context1p = $apend['a'][$i]; //這沒有換行的
                if (trim($apend['c'][$i])) {
                    //有翻譯才有
                    $context1p .= " = '" . addslashesB($apend['c'][$i]) . "';"; //由於都用'包覆所以原本有'的要處理
                }
                if ($context1p == '\n') {
                    //如果該行是空白只有1個\n
                } else {
                    $context .= $context1p . "\n"; //換行都用\n
                }

            }
            //有內容才寫檔案
            if(trim($context)){
            $sms .= " 寫入檔案";
            file_put_contents($value2, $context); //寫入檔案
            }
        }

        echo $sms . $br;
        //exit; //測試做1次就停止
        $z['y1']++; //處理檔案次數
    } else {
        echo "沒找到檔案" . $br;
        $z['y2']++;
    }
}
cmysql($linkID); //關資料庫==============================================================
echo "<hr>" . $br;
echo "處理" . $z['y1'] . "個檔案" . $br;
