<?php
/*
01.以wg24themeoptionpanel.tpl 生出翻譯
02.以TEXT翻譯檔為基礎 產生2個翻譯檔
03.以TEXT翻譯檔為基礎 修改目標檔案
*/
$thisDir = ".."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
require $thisDir . "/config.php"; // 載入主參數設定檔
//==========================================================================
require_once INCLUDE_PATH . "/toolsfunction.php"; // 載入工具庫函式
$br="<br>".PHP_EOL;
$file1="wg24themeoptionpanel.tpl";//來源檔案


//==========================================================================
//==========================================================================
$file_text=file_get_contents($file1);//開啟檔案

//===========================================================
require_once('api_TextTranslate.php');//載入自寫文字翻譯
$Translate=new TextTranslate();

$T[1]=array();
$T[2]=array();

//翻譯字的英文排成陣列
for($i=0;$i<count($Translate->en);$i++){
    $v=$Translate->en[$i];
    $v=str_replace("(","\(",$v);
    $v=str_replace(")","\)",$v);
    $T[1][]="@".$v."@";//不能大小寫不管-會改到其他
    $T[2][]="<?php echo \$lang['".t_($v)."'] ?>";//空格取代為沒有
}

//print_r($T);exit;
//===========================================================
//修改tpl 檔

$text=preg_replace($T[1],$T[2], $file_text);//字串替換

$filename=str_replace(".tpl","_tw.tpl",$file1);//儲存檔名
auto_mkdir($filename);//查路徑目錄在不在，不在就建立目錄

        //抓取之後存檔
        if (!$handle = fopen($filename, 'w')) {echo "error open log file";}
        if (fwrite($handle, $text) === FALSE) {echo "error write LOG File";}
        fclose($handle);//關檔
        echo "內容已丟到暫存檔".$filename.$br;
