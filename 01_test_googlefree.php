<?php
/* Version 0.9, 2017/12/2 10號工程師
免費方式翻譯
 */

require_once('_api/google/GoogleTranslate.php');

$source = 'en';
$target = 'zh-TW';
$text = 'AUTO translation file googleapi verdadero';

$trans = new GoogleTranslate();

$result = $trans->translate($source, $target, $text);

echo $result;
