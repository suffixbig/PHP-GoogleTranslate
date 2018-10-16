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
function html_ul($text)
{
    preg_match_all('@<ul class="nav nav-tabs">(.*)</ul>@i', $text, $src);
    print_r($src);exit;
	if(count($src[1])>0)
	{
 	return $src[1];//只要裡面的字
	}else{
 	return false;
	}
}
function html_li($text)
{
    preg_match_all('@<li.*?><a .*?">(.*)</a></li>@i', $text, $src);
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
//取得所有P標籤裡面的字，並儲存至二維陣列-此法適用"號與'號皆可
function html_p($text)
{
    preg_match_all("@<p>(.*)</p>@i", $text, $src);
    //print_r($src);exit;
	if(count($src[1])>0)
	{
 	return $src[1];//只要裡面的字
	}else{
 	return false;
	}
}

function html_b($text)
{
    preg_match_all("@<b>(.*)</b>@i", $text, $src);
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
//取得所有td標籤裡面的字，並儲存至二維陣列-此法適用"號與'號皆可
function html_td($text)
{
	preg_match_all("@<td class=\"lable-control\">(.*)</td>@i", $text, $src);
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

//==========================================================================
//==========================================================================
$file_text=file_get_contents($file1);//開啟檔案

$td=html_p($file_text);//取出p標籤的字
//print_r($p);

//要翻譯的字
$text="";//起始
for($i=0;$i<count($td);$i++){
    $v=$td[$i];
    $text.=trim($v);
    $text.="\n";
}

echo $text;
echo "<hr>".$br;


$b=html_b($file_text);//取出ul標籤的字
//print_r($p);

//要翻譯的字
$text="";//起始
for($i=0;$i<count($b);$i++){
    $v=$b[$i];
    $text.=trim($v);
    $text.="\n";
}

//印出來
echo $text;