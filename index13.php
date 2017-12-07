<?php
/* Version 0.9, 2017/12/2 10號工程師
AUTO translation file googleapi
功能:把目錄下的檔案全翻譯完
2017/12/5 完工會用資料庫比對查
2017/12/6 多做沒翻完的提醒
2017/12/8 目標目錄不用自己建立了程式會自己建立-不論幾層
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
$i_my = '後台';
$br = "<br>\n";

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

    $sms .= " |結果:";

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
            if (trim($context)) {
                $sms .= $br;
                    if (is_file($value2)) {
                        $sms .= "目標檔案存在" ;
                    }else{
                        $sms .= "目標檔案不存在，已自動建立" ;
                        auto_mkdir($value2);//給檔案路徑自動建立目錄1層1層建立
                    }
                file_put_contents($value2, $context); //寫入檔案
                $sms .= " 已寫入檔案";
            }
        }

        echo $sms . $br;
        //exit; //測試做1次就停止
        $z['y1']++; //處理檔案次數
}
cmysql($linkID); //關資料庫==============================================================
echo "<hr>" . $br;
echo "處理" . $z['y1'] . "個檔案" . $br;
