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
$file2="wg24themeoptionpanel.php";//來源檔案目標檔案



/*說明
//空格取代為沒有-變數名稱中不要有空格()號\號
function t_($text)
//讓空格變整齊以變數長度決定空格數目 參數1變數，參數2最大長度
function tt_($v,$s=53)
*/
//===========================================================
require_once('api_TextTranslate.php');//載入自寫文字翻譯
$Translate=new TextTranslate();
//===========================================================
//搞出英文翻譯版
$text="";//起始
$td=$Translate->en;
for($i=0;$i<count($td);$i++){
    $v=$td[$i];
    $text.='$_[\''.t_($v).'\']'.tt_($v).' = \''.trim($v).'\';';
    $text.="\n";
}


$filename="./en-gb/".$file2;
auto_mkdir($filename);//查路徑目錄在不在，不在就建立目錄

		//抓取之後存檔
		if (!$handle = fopen($filename, 'w')) {echo "error open log file";}
		if (fwrite($handle, $text) === FALSE) {echo "error write LOG File";}
		fclose($handle);//關檔
		echo "內容已丟到暫存檔".$filename.$br; 


//===========================================================
//搞出繁體版

$text="";//起始
for($i=0;$i<count($td);$i++){
    $v=$td[$i];
    $text.='$_[\''.t_($v).'\']'.tt_($v).' = \''.$Translate->get_tw($v).'\';';//翻譯的文字
    $text.="\n";
}

$filename="./zh-TW/".$file2;
auto_mkdir($filename);//查路徑目錄在不在，不在就建立目錄


        //抓取之後存檔
        if (!$handle = fopen($filename, 'w')) {echo "error open log file";}
        if (fwrite($handle, $text) === FALSE) {echo "error write LOG File";}
        fclose($handle);//關檔
        echo "內容已丟到暫存檔".$filename.$br;
