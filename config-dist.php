<?php
/*
全網站共用系統參數設定檔2016/05/17
務必放在網站根目錄下-且勿必在編輯此檔本尊勿編輯此檔分身
*/
header("Content-Type:text/html;charset=utf-8");//全程式總編碼指定
date_default_timezone_set('Asia/Taipei');//設定系統時區
ini_set('display_errors', '1');//顯示錯誤
//error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);//顯示錯誤等級-都顯
//error_reporting(E_ERROR & ~E_NOTICE & ~E_WARNING);////變數為空不要提示正常的
define('WEB_ROOT_PATH', str_replace('\\','/',dirname(__FILE__))); //目前檔案所在絕對路徑，尾端沒協線
define('INCLUDE_PATH', WEB_ROOT_PATH . '/_inc');//設定檔所在目錄
//記下程式執行時間函式
function caclutime(){ $time = explode( " ", microtime()); $usec = number_format($time[0],6); $sec = substr($time[1],5);return $sec + $usec; }
$begin_time=caclutime();//記下程式開始執行時間
/*測IP加封IP策略--------------------------------------------------------------------------------------------*/
function get_ip()
     {
         if (!empty($_SERVER['HTTP_CLIENT_IP']))
     return $_SERVER['HTTP_CLIENT_IP'];
         else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
     return $_SERVER['HTTP_X_FORWARDED_FOR'];
         else
     return $_SERVER['REMOTE_ADDR'];
     }
$CT_CONFIG['user_ip']=get_ip();
$CT_CONFIG['myloginc']=0;//不做log記錄
$CT_CONFIG['test']=0;//測試開關
$CT_CONFIG['logo_title']='後台系統';//名子
$html_metas['html_title']=$CT_CONFIG['logo_title'];//我是標題
define('DB_PREFIX','oc_');//資料表前綴
define('googleApiKEY','這要自己去申請');//googleApiKEY 這要自己去申請
//資料庫
session_start();
?>