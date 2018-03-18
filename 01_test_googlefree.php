<?php
/* Version 0.9, 2017/12/2 10號工程師
免費方式翻譯
 */

require_once('_api/google/GoogleTranslate.php');//載入免費翻譯功能

$source = 'en';
$target = 'zh-TW';
$text = 'Home middle free Money Back content 
Best Sales text for mini Best Sales product title';

$trans = new GoogleTranslate();//宣告翻譯功能

$result = $trans->translate($source, $target, $text);//翻譯 參數1=原文語言代號 參數2=目標語言代號 參數3=輸入文字

echo $result;
