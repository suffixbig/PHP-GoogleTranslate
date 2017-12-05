<?php
/* Version 0.9, 2017/12/2 10號工程師
AUTO translation file googleapi
功能:把目錄下的檔案全翻譯完
2017/12/5 完工會用資料庫比對查
 */
$thisDir = "."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
require $thisDir . "/config.php"; // 載入主參數設定檔

$source = 'en';
$target = 'zh-TW';
$text = 'AUTO translation file googleapi verdadero';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GOOGLE 一次翻多行測試</title>
</head>

<body>
<h1>GOOGLE 一次翻多行測試</h1>
<form action="<?='https://translation.googleapis.com/language/translate/v2?key='.googleApiKEY?>" method="post">
<input name="source" type="text" value="<?=$source?>">
<input name="target" type="text" value="<?=$target?>" >
<input name="q" type="text" id="q" value="is one of millions playing, creating and exploring the endless possibilities of Roblox">
<input name="q" type="text" id="q" value="AUTO translation file googleapi verdadero">
<input name="q" type="text" id="q" value="User blog:Airako/New Characters?! I'm so excited! I looked at the official Dream Fes website and apparently there's new... File history. Click on a date/time to view the file as it appeared at that time. Date/Time, Thumbnail, Dimensions, User, Comment. current, 19:32, November 12, 2016 · Thumbnail for version as of 19:32">
<br>
<input type="submit">
</form>
</body>
</html>
