<?php
/* Version 0.9, 2017/12/2 10號工程師
以翻譯過的字做比對
 */
$thisDir = "."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
require $thisDir . "/config.php"; // 載入主參數設定檔
//==========================================================================
//require_once INCLUDE_PATH . "/inc_password_admin.php"; // 載入管理員密碼驗證
//==========================================================================
require_once INCLUDE_PATH . "/mysql.inc.php"; // 載入資料庫函式
require_once INCLUDE_PATH . "/toolsfunction.php"; // 載入工具庫函式
/* ********************************************************************************************* */
/* 參數設置
/* ********************************************************************************************* */
//set_time_limit(0); //執行不限秒數
$i_my = '後台';
$br = "<br>\n";

/*********************************************************************************************/
/*
以翻譯過的字做比對
 */
/*********************************************************************************************/
$sourcelanguage = 'en-gb'; //來源語言
$targetlanguage = 'zh-TW'; //目標語言

$dir = dirname(__FILE__) . "\\01"; //要開啟的路徑
$dir1 = $dir . $sourcelanguage; //來源目錄 放有英文檔案
$dir2 = $dir . $targetlanguage; //放有 翻譯過的中文檔案

/*********************************************************************************************/

$filenamesA = get_filenamesbydir($dir1); //獲取目錄下所有文件，包括子目錄
$filenamesB = get_filenamesbydir($dir2); //獲取目錄下所有文件，包括子目錄
/*********************************************************************************************/
/* ********************************************************************************************* */
$CT_CONFIG['db_name'] = 't_translation_googleapi'; //要開啟的資料庫
$CT_CONFIG['db_sheet'] = DB_PREFIX . 't'; //子資料表

$CT_CONFIG['project_name'] = 'opencart'; //專案名稱
$CT_CONFIG['version'] = '2.3.0.2'; //版本號一律4碼

//查是否有資料 4 項資料要完全相同
function select_oc_t($dirname, $basename, $var, $targetlanguage, $linkID)
{
    $sql = "SELECT * FROM `oc_t` WHERE `dirname` = '$dirname' AND `basename` ='$basename' AND `var` = '$var' AND `targetlanguage` = '$targetlanguage'";
    $a = assoc_sql1p($sql, $linkID);
    return $a;
}

echo "比對目錄1:" . $dir1 . "有檔案" . count($filenamesA) . "個" . $br;
echo "比對目錄2:" . $dir2 . "有檔案" . count($filenamesB) . "個" . $br;
echo "<hr>" . $br;
$linkID = omysql($CT_CONFIG['db_name']); //開資料庫================================================
$CT_CONFIG['linkID'] = $linkID;

$z = array('y1' => 0, 'y2' => 0);
$ss = 0;

//打印所有文件名，包括路徑
foreach ($filenamesA as $value) {
    $sss = 0;
    //這裡不會有目錄名
    //echo "來源" . $value; //開啟檔案
    $sms = '';
    $f = array();
    //這裡不會有目錄名只有檔案名
    $value2 = str_replace($dir1, $dir2, $value); //要找的檔名
    $value2 = str_replace('/', '\\', $value2); //要找的檔名
    $value2 = str_replace($sourcelanguage, $targetlanguage, $value2); //要找的檔名
    if (is_file($value2)) {

        //開啟2個檔案
        $f['target'] = $value2; //目標檔名
        $f['dirname'] = substr(dirname($value2), strlen($dir2) + 1); //路徑要去掉相同部分
        $f['basename'] = basename($value2); //檔名
        //print_r($f);
        $sms .= $f['basename'] . "英文與中文兩個檔案都在，開始比對翻譯:";
        $t[$sourcelanguage] = get_translated_word_test($value); //開檔案
        $t[$targetlanguage] = get_translated_word_test($value2); //開檔案
        $t[$sourcelanguage]['f'] = $f; //檔案相關資訊
        //print_r($t);exit;

        $db_name = $CT_CONFIG['db_name'] . '.' . $CT_CONFIG['db_sheet']; //資料表名稱
        $linkID = $CT_CONFIG['linkID'];
        $project_name = $CT_CONFIG['project_name']; //專案名稱
        $version = $CT_CONFIG['project_name']; //版本號
        $priority = 1; //優先度

        $tt = $t[$targetlanguage]['b'];
        $nono = 0;
        $sms .= $br;
        //print_r($t);exit;

        //跑一遍只對有值的內容入資料庫
        for ($i = 0; $i < count($tt); $i++) {
            //這很重要非空值才跑
            if (!empty(trim($tt[$i]))) {
                //print_r($tt[$i]);
                //echo $i,"|",$br;
                $io = '';

                $var2 = trim($t[$targetlanguage]['a'][$i]); //比對一定要去除空格

                //該行是註解就不翻譯
                if (substr($var2, 0, 2) == '//') {
                    $sms .= "裡面有註解不翻譯";
                } else {
                    if (isset($t[$sourcelanguage]['a'][$i])) {
                        $var1 = trim($t[$sourcelanguage]['a'][$i]);//比對一定要去除空格
                    }else {
                        $var1 = '';
                    }

                    //目標和來源行數不一致
                    if ($var1 == $var2) {
                        $io = $i; //資料會在同1行
                    } else {
                        //目標和來源行數不一致
                        $sms .= "第" . $i . "行來源和目標不一致";
                        //跑圈回去找-這裡是跑原來語言的圈回
                        for ($ii = 0; $ii < count($t[$sourcelanguage]['a']); $ii++) {

                            $var3 = trim($t[$sourcelanguage]['a'][$ii]); //比對一定要去除空格
                            if ($var2 == $var3) {
                                $io = $ii;
                                $sms .= "重新尋找,在" . $io . "行找到相同資料" . $br;
                            }
                        }
                    }

                    if (!empty($io)) {
                        $dirname = addslashes($t[$sourcelanguage]['f']['dirname']);
                        $basename = addslashes($t[$sourcelanguage]['f']['basename']);
                        $var = substr($var2, 4, strlen($var2) - 6); //變數名//以目標版為準

                        $sourcetext = addslashes($t[$sourcelanguage]['b'][$io]);
                        $targettext = addslashes($tt[$i]); //目標語言; 有些不處理 入不了資料庫
                        //有翻譯檔內容還是原文的情況，這種不要入資料庫
                        if ($tt[$i] != $t[$sourcelanguage]['b'][$io]) {

                            //先查資料是否已建立
                            $yno = select_oc_t($dirname, $basename, $var, $targetlanguage, $linkID);
                            if (count($yno) > 0) {
                                $nono++;
                            } else {
                                //新增資料紀錄
                                $sql = "INSERT INTO $db_name (`t_id`, `project_name`, `version`, `dirname`, `basename`, `var` ,`sourcelanguage`, `sourcetext`, `targetlanguage`, `targettext`, `priority`, `add_date`) VALUES (NULL, '$project_name', '$version','$dirname','$basename','$var','$sourcelanguage','$sourcetext','$targetlanguage','$targettext','$priority', NOW());";
                                $ok = mysql_insert_i($sql, $linkID);
                                $oki = ($ok == 1) ? "成功" : "失敗!";
                                //$sms.="新增資料:".$oki;
                                $sss++;
                                if ($ok != 1) {
                                    $sms .= "新增資料錯誤訊息:" . $ok;
                                }
                            }
                        }

                    } else {
                        $sms .= "重新尋找,最終無找到相同資料" . $br;
                    }

                }

            }
        }

        $sms .= "資料庫已有:" . $nono . "筆資料，";
        $sms .= "本檔新增資料:" . $sss . "筆" . $br;
    } else {
        $sms .= "沒有2個檔案都在" . $br;
    }
    echo $sms . $br;
    //exit; //測試做1次就停止
    $z['y1']++; //處理檔案次數
    $ss = $ss + $sss;
}
cmysql($linkID); //關資料庫==============================================================
echo "<hr>" . $br;
echo "處理" . $z['y1'] . "個檔案" . $br;
echo "一共翻譯" . $ss . "筆記錄" . $br;
