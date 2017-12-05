<?php
//密碼系統 管理員用
$adminpass2 = substr(base64_encode(date("Y-m") . "s3dfgdfgfdc6gew"), 2, 10); //打對一次密碼可以撐到月底 後台的密碼
if (isset($_COOKIE['adminpass2'])) {
    if ($_COOKIE['adminpass2'] == $adminpass2) {  
    } else {
        //未登入就跳頁 
        header("Refresh: 0; url=login.php");
        exit;
    }
} else {
    //未登入就跳頁 
    header("Refresh: 0; url=login.php");
    exit;
}