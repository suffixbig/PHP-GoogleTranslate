# PHP-GoogleTranslate
# PHP使用Google Translate API來做自動化檔案翻譯工具
-----------------------------
# 前言
-----------------------------
擁抱全球市場：網站內容多語化一個多國語言平台該怎麼寫
---
作者台灣碼農10號工程師

我的職業是在台灣當一位碼農，名子不能公開，所以你知道我的代號就好，我的代號是『10號工程師』

我不知道各位你們在面試時遇過要真正開發過多語系平台的工程師嗎，有人想找開發過多語系有經驗工程師找了2年還遇不到，等到人就出現在他面前時，還是認為我只是一位普通碼農，

好吧，開始說說我編的故事，多語系平台通常都是你先有了一個平台之後，然後你開始想說要擁抱全球市場國際化，然後你在打算將網站改成支援2總語系，然後3總，以此類推到8總以上，可是呢?多語系平台，是一開始沒規劃好後來就很難改的一種架構，如果你是工程師你一定聽過mvc架構優缺點，那麼有多語系支援的平台那就是

MVC+L多語系架構

>Model – 數據和組件處理
 View – 外觀處理
 Controller – 主控制程式
 Language – 語言處理

了解歸了解，請問你要怎樣實作呢，首先我要請問大家一個問題，多語系共存你要把語言資料放在資料表中還是檔案中，

回答用資料庫就可以搞定的是錯誤答案

資料表，那麼請問你要增加幾個欄位，答案是1個，你只要用原本的資料表多建1個欄位語系代號，這樣就解決了，但是也有絕對不能放在資料表的東西，選單上面的按鈕文字，可以放在資料庫裡嗎，答案是不應該，應該放在檔案中，也就是商品資料的多語系放在資料表中，選單上面的按鈕文字，應該無論如何放在檔案。

我說的有依據嗎?有OPENCART的語言系統就是是這樣幹的

OPENCART這套購物車系統，它本身就是支援多國語言的，他會依照你後台的語系設定順序先找正體中文的語言檔，找不到才使用預設的英文語系檔
所以你只要將產生的正體中文的語言檔拷貝至OPENCART這套購物車系統的語言目錄，你就能將你的英文版插件或模板變為機器翻譯的中文版。

我們來隨便打開它的一個語言檔來看看
例如
\admin\language\en-gb\user\user.php 英文語言
\admin\language\ez-TW\user\user.php 繁體中文
```
<?php
// Heading
$_['heading_title']         = 'Users';

// Text
$_['text_success']          = 'Success: You have modified users!';
$_['text_list']             = 'User List';
$_['text_add']              = 'Add User';
$_['text_edit']             = 'Edit User';

// Column
$_['column_username']       = 'Username';
$_['column_status']         = 'Status';
$_['column_date_added']     = 'Date Added';
$_['column_action']         = 'Action';

// Entry
$_['entry_username']        = 'Username';
$_['entry_user_group']      = 'User Group';
$_['entry_password']        = 'Password';
$_['entry_confirm']         = 'Confirm';
$_['entry_firstname']       = 'First Name';
$_['entry_lastname']        = 'Last Name';
$_['entry_email']           = 'E-Mail';
$_['entry_image']           = 'Image';
$_['entry_status']          = 'Status';

// Error
$_['error_permission']      = 'Warning: You do not have permission to modify users!';
$_['error_account']         = 'Warning: You can not delete your own account!';
$_['error_exists_username'] = 'Warning: Username is already in use!';
$_['error_username']        = 'Username must be between 3 and 20 characters!';
$_['error_password']        = 'Password must be between 4 and 20 characters!';
$_['error_confirm']         = 'Password and password confirmation do not match!';
$_['error_firstname']       = 'First Name must be between 1 and 32 characters!';
$_['error_lastname']        = 'Last Name must be between 1 and 32 characters!';
$_['error_email']           = 'E-Mail Address does not appear to be valid!';
$_['error_exists_email']    = 'Warning: E-Mail Address is already registered!';
```

```
<?php
// Heading
$_['heading_title']     = '使用者管理';

// Text
$_['text_success']      = '成功：您已更新使用者帳號！';
$_['text_list']         = '使用者帳號清單';
$_['text_add']          = '新增使用者帳號';
$_['text_edit']         = '編輯使用者帳號';

// Column
$_['column_username']   = '使用者帳號';
$_['column_status']     = '狀態';
$_['column_date_added'] = '新增日期';
$_['column_action']     = '管理';

// Entry
$_['entry_username']    = '使用者帳號';
$_['entry_user_group']  = '帳號群組';
$_['entry_password']    = '密碼';
$_['entry_confirm']     = '確認密碼';
$_['entry_firstname']   = '名字';
$_['entry_lastname']    = '姓氏';
$_['entry_email']       = '信箱';
$_['entry_image']      	= '圖片';
$_['entry_status']      = '狀態';

// Error
$_['error_permission']  = '警告： 您沒有權限更改使用者帳號！';
$_['error_account']     = '警告： 您不能刪除自己的帳號！';
$_['error_exists']      = '警告： 使用者帳號已經存在！';
$_['error_username']    = '使用者帳號必須在 3 至 20 個字之間！';
$_['error_password']    = '密碼長度必須在 4 至 20 個字之間！';
$_['error_confirm']     = '密碼和確認密碼不一致！';
$_['error_firstname']   = '名字必須在 1 至 32 個字之間！';
$_['error_lastname']    = '姓氏必須在 1 至 32 個字之間！';
$_['error_email']           = 'E-Mail 帳號無效!';
$_['error_exists_email']    = '警告: E-Mail 帳號已經註冊過!';
```

## 靠北原來就用『陣列』文字檔就解決多語系問題那麼簡單啊
## 原理簡單-那你有沒有想過，為什麼OPENCART要用這種文字檔格式，然後這種格式的文字檔，有沒有辦法直接拿去給Google翻譯系統翻譯。

# 答案是可以的-透過我寫的程式就辦的到

本程式，就是自動把檔案丟給Google翻譯系統，很多人都知道有Google Cloud Translation 翻譯API 但一般人只會手工貼和全網站翻譯，進階的應用一般工程師都沒做過，我現在有100個檔案目錄分散好幾個，翻譯完之後我要照原來的目錄結構建好，講到這你應該也不覺得這會難，沒錯難的地方-你串Google Cloud Translation 翻譯API後才會發現，我要翻譯的語句有幾萬行，難道我要發送一萬次的請求，於是想法1 我把幾千行拼成一篇文章發出去這樣1萬行發送10次請求就行了........好了!反正當你動手實作，你自然就會遇到很多問題要解決了。

-----------------------------
# 本自動翻譯工具功能
-----------------------------
	如果我到全球最大的2個國外網站，模板森林或是模板怪客去購買 一份商業購物車系統OPENCART的模板，或是插件
	原本的翻譯檔一定是只有英文的，本工具可以不改動英文語言檔，但用這份英文語言檔送去GOOGLE 翻譯 API 用機器翻譯 製造出1份 正體中文的語言檔
	然後OPENCART這套購物車系統，它本身就是支援多國語言的，他會依照你後台的語系設定順序先找正體中文的語言檔，找不到才使用預設的英文語系檔
	所以你只要將產生的正體中文的語言檔拷貝至OPENCART這套購物車系統的語言目錄，你就能將你的英文版插件或模板變為機器翻譯的中文版。
-----------------------------
# 目錄檔案說明
-----------------------------
	01a		來源目錄 英文
	01b		目標目錄 繁體中文
-----------------------------
# 前置作業
-----------------------------
	OPENCART是一套可以多語並存的系統

		例如我在01a目錄下 我有一份檔案 他的放置位置是
		\01a\admin\language\en-gb\extension\module\so_category_slider.php

		我們把01a目錄整個拷貝一份成01b，然後進去language這個目錄 將en-gb改成zh-TW
		改好後檔案路徑會變成這樣
		\01b\admin\language\zh-TW\extension\module\so_category_slider.php

	沒錯目前這份語言檔還是英文版的，但是我們執行我的工具後就能把這份檔案變成正體中文版
-----------------------------
# 本工具使用前-設定方式
-----------------------------
1. 把config-dist.php =>改名成config.php
2. google翻譯Api key 這要自己去申請
	申請好後再config.php 這個檔裡面改 define('googleApiKEY','自己申請到的KEY');//googleApiKEY 
3. /README/t_translation_googleapi.sql	資料庫匯入後
4. /_inc/mysql.inc.php			在這個檔裡面設定資料庫帳密
    $dbuser = "sincethemachine";
    $dbpass = "1234567890";
5. 程式預設英翻中，要改在程式中改 例如:index10.php

-----------------------------
# google翻譯API申請網址
-----------------------------
https://cloud.google.com/translate/?hl=zh-tw


-----------------------------
# 語言代碼參考
-----------------------------
	en-gb 英文
	zh-TW 正體中文
	zh-CN 簡體中文

-----------------------------
# 如果你要產生正體中文以外的翻譯檔
-----------------------------

例如用 繁體去翻譯成 簡體的話 zh-TW=>zh-CN
那你目錄下要先放好檔案
\01a\admin\language\zh-TW\
\01b\admin\language\zh-CN\
另外在index11.php 中這2行要改
	$sourcelanguage = 'en-gb'; //來源語言
	$targetlanguage = 'zh-TW'; //目標語言

-----------------------------
# 是不是 任何原檔都可以丟進去翻意
-----------------------------

當然不行，每總格式的文件都需要去專門開發

這是針對例如OPENCART 這種 MVC+L系統
 
語言檔 是把把陣列 寫成文字檔案這種
= 號左邊的字一定不能翻譯，所以就 一行一行 切割 = 號右邊的字送去翻譯
然後再用程式組合回來

<table border="1" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <th scope="col">檔案名稱</th>
      <th scope="col">作用</th>
      <th scope="col">作用目錄</th>
      <th scope="col">重要度</th>
    </tr>
    <tr>
      <th scope="row">01_test_googlefree.php</th>
      <td>測試 GOOGLE 翻譯 API 寫法的第一支程式</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">01_test_post_googleapi.php</th>
      <td>測試 GOOGLE 翻譯 API 寫法POST</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">02_tw_del_01a.php</th>
      <td>來源目錄要刪除現有翻譯過的中文檔案<br>
        以01a目錄和01zh-TW這2個目錄做比對</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">en-gb_com_zh-TW.php</th>
      <td><br>
        如果我有一份翻譯好的英文原版和中文版，比對2個目錄下的檔案，然後將翻譯對照表寫入資料庫，優先權設為1，以後翻譯會先以這分為準</td>
      <td>比對01en-gb和01zh-TW這2個目錄</td>
      <td>重要</td>
    </tr>
    <tr>
      <th scope="row">index13.php</th>
      <td>AUTO translation file googleapi<br>
        功能把01a目錄下的檔案全翻譯完<br>
        2017/12/5 會先比對資料庫，已有資料的就不會呼叫GOOGLEAPI去查<br>
        2017/12/6 多做沒翻完的提醒<br>
      2017/12/8 目標目錄不用自己建立了程式會自己建立-不論幾層</td>
      <td>把01a目錄下的檔案自動翻譯完複製到01b目錄下</td>
      <td>重要</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>以下為舊版</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index5.php</th>
      <td><div>
        <div>
          <div>
            <div>功能:把目錄下的檔案全翻譯完</div>
          </div>
        </div>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index6.php</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index7.php</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index8.php</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index9.php</th>
      <td><div>
        <div>2017/12/5 完工會用資料庫比對查</div>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index10.php</th>
      <td>資料庫的翻譯也有優先權-以數字小的為優先</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index11.php</th>
      <td><div>
        <div>2017/12/6 多做沒翻完的提醒</div>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">index12.php</th>
      <td>2017/12/8 目標目錄不用自己建立了程式會自己建立-不論幾層</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>


--------------------------------
# 翻譯資料表

[翻譯資料表結構說明]:https://github.com/suffixbig/PHP-GoogleTranslate/tree/master/README/SQLREADME2.html

[翻譯資料表SQL]:https://github.com/suffixbig/PHP-GoogleTranslate/tree/master/README/t_translation_googleapi.sql
--------------------------------

```php
--
-- 資料表結構 `oc_t`
--

CREATE TABLE IF NOT EXISTS `oc_t` (
  `t_id` int(10) unsigned NOT NULL COMMENT '主鍵',
  `project_name` varchar(30) DEFAULT NULL COMMENT '專案名',
  `version` varchar(10) DEFAULT NULL COMMENT '版本號',
  `dirname` varchar(100) NOT NULL COMMENT '路徑名稱',
  `basename` varchar(30) NOT NULL COMMENT '檔案名稱',
  `var` varchar(200) DEFAULT NULL COMMENT '變數名',
  `sourcelanguage` varchar(5) NOT NULL COMMENT '來源語言',
  `sourcetext` text COMMENT '來源內容',
  `targetlanguage` varchar(5) NOT NULL COMMENT '目標語言',
  `targettext` text COMMENT '目標內容',
  `priority` int(2) unsigned NOT NULL DEFAULT '20' COMMENT '優先度數字越小越大為1的話不可複寫',
  `add_date` date NOT NULL COMMENT '資料建立日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='翻譯資料表';
```
-----------------------------
# 本工具github上專案位置
-----------------------------
https://github.com/suffixbig/PHP-GoogleTranslate/
