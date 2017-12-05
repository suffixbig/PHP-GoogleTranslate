<?php
/* Version 0.9, 2017/12/2 10號工程師
來源目錄要刪除現有翻譯過的中文檔案 01tw_del_01a.php
 */

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

/** 刪除所有空目錄
 * @param String $path 目錄路徑
 */
function rm_empty_dir($path)
{
    if (is_dir($path) && ($handle = opendir($path)) !== false) {
        while (($file = readdir($handle)) !== false) { //遍歷文件夾
            if ($file != '.' && $file != '..') {
                $curfile = $path . '/' . $file; //當前目錄
                if (is_dir($curfile)) { //目錄
                    rm_empty_dir($curfile); //如果是目錄則繼續遍歷
                    if (count(scandir($curfile)) == 2) { //目錄為空,=2是因為.和..存在
                        rmdir($curfile); //刪除空目錄
                    }
                }
            }
        }
        closedir($handle);
    }
}
/*********************************************************************************************/
$thisDir = "."; //config.inc.php檔的相對路徑
$_file = basename(__FILE__); //自行取得本程式名稱
$br = "<br />\n";

$sourceLanguage = 'en-gb'; //來源語言
$targetLanguage = 'zh-TW'; //目標語言

$dir = dirname(__FILE__) . "\\01"; //要開啟的路徑
$dir1 = $dir . "a"; //來源目錄 放有英文檔案
$dir2 = $dir . $targetLanguage; //放有 翻譯過的中文檔案

/*********************************************************************************************/

$filenamesA = get_filenamesbydir($dir1); //獲取目錄下所有文件，包括子目錄
$filenamesB = get_filenamesbydir($dir2); //獲取目錄下所有文件，包括子目錄
//打印所有文件名，包括路徑

echo "開始在" . $dir1 . "目錄下刪除已有翻譯檔存在的檔案" . $br;
$z = array('y1' => 0, 'y2' => 0);

//請注意來源目錄的檔名之中不要有zh-TW這樣的字
foreach ($filenamesB as $value) {
    //這裡不會有目錄名只有檔案名
    $value2 = str_replace($dir2, $dir1, $value); //要找的檔名
    $value2 = str_replace('/', '\\', $value2); //要找的檔名
    $value2 = str_replace($targetLanguage, $sourceLanguage, $value2); //要找的檔名
    echo "尋找檔案" . $value2;
    echo " |結果:";
    if (is_file($value2)) {
        echo "找到檔案並刪除檔案" . $br;
        unlink($value2); //刪除檔案
        $z['y1']++;
    } else {
        echo "沒找到檔案" . $br;
        $z['y2']++;
    }
}

echo "統計" . $dir1 . "目錄下有檔案" . count($filenamesA) . "個，和" . $dir2 . "目錄下相同檔案" . $z['y1'] . "個，以刪除檔案" . $z['y1'] . "個";
echo $br;
echo "刪除所有空目錄" . $br;
rm_empty_dir($dir1); //刪除所有空目錄
