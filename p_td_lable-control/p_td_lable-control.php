<?php
$thisDir = ".."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
require $thisDir . "/config.php"; // 載入主參數設定檔
//==========================================================================
require_once INCLUDE_PATH . "/toolsfunction.php"; // 載入工具庫函式
$br="<br>".PHP_EOL;
$file1="wg24themeoptionpanel.tpl";//來源檔案
$file2="wg24themeoptionpanel.php";//來源檔案目標檔案


//取得所有P標籤裡面的字，並儲存至二維陣列-此法適用"號與'號皆可
function html_p($text)
{
    preg_match_all("@<p>(.*)<\/p>@i", $text, $src);
    //print_r($src);exit;
	if(count($src[1])>0)
	{
 	return $src[1];//只要裡面的字
	}else{
 	return false;
	}
}
//取得所有td標籤裡面的字，並儲存至二維陣列-此法適用"號與'號皆可
function html_td($text)
{
	preg_match_all("@<td class=\"lable-control\">(.*)<\/td>@i", $text, $src);
    //print_r($src);exit;
	if(count($src[1])>0)
	{
        $src2=array();
        //有翻譯過的不要
        foreach($src[1] as $v){
            if(!preg_match("@<\?php@",$v))
            $src2[]=$v;
        }
 	    return $src2;//只要裡面的字
	}else{
 	return false;
	}
}
//空格取代為底線
function t_($text)
{
    $text2=trim($text);
    $text2=str_replace(' ', '',$text2);
    $text2=str_replace('/', '',$text2);
    return $text2;
}

//讓空格變整齊以變數長度決定空格數目
function tt_($v)
{
    $text=" ";
    $s=53;//預設最常空格多少個;
    $s2=strlen(t_($v));//以去除後的字數做計算
    //print_r($s2);echo "\n";
    $td=$s-($s2+6);
    
    for($i=0;$i<$td;$i++){
        $text.=" ";
    }
    return $text;
}
//==========================================================================
//==========================================================================
$file_text=file_get_contents($file1);//開啟檔案

$p=html_p($file_text);//取出P標籤的字
$td=html_td($file_text);//取出td標籤的字

//print_r($p);exit;

//===========================================================
//搞出英文翻譯版
$text="";//起始
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

//要翻譯的字
$text="";//起始
for($i=0;$i<count($td);$i++){
    $v=$td[$i];
    $text.=trim($v);
    $text.="\n";
}

//echo $text;exit;
//===========================================================
//搞出繁體版
require_once('api_TextTranslate.php');//載入自寫文字翻譯
$Translate=new TextTranslate();
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

//===========================================================
//修改tpl 檔
//以英文翻譯檔的內容為準

$text=$file_text;//起始
$s=0;
$ok=0;
for($i=0;$i<count($td);$i++){
    $v2=$td[$i];
    $v3=str_replace("(","\(",$v2);
    $v3=str_replace(")","\)",$v3);
    $v='<td class=\"lable-control\">'.$v3.'</td>';
    //尋找
        if(preg_match("@".$v."@i",$text)){
         $text=preg_replace("@".$v."@i",'<td class="lable-control">'.$Translate->get_tw($v2).'</td>',$text);//每一行字翻譯  
         $ok++;
        }else{
            echo "沒找到的字".$v.$br;
        }
    $s++;
}

echo "tpl檔需翻譯字串".$s."完成".$ok."筆".$br;
 
$filename=str_replace(".tpl","_tw.tpl",$file1);//來源檔案改檔名;
auto_mkdir($filename);//查路徑目錄在不在，不在就建立目錄


        //抓取之後存檔
        if (!$handle = fopen($filename, 'w')) {echo "error open log file";}
        if (fwrite($handle, $text) === FALSE) {echo "error write LOG File";}
        fclose($handle);//關檔
        echo "內容已丟到暫存檔".$filename.$br; 
        