# PHP-GoogleTranslate
# PHP使用Google Translate API來做自動化檔案翻譯工具

-----------------------------
# 本工具github上專案位置
-----------------------------
https://github.com/suffixbig/PHP-GoogleTranslate/
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


// Text
$_['text_module']                = '模塊';
$_['text_success']               = '成功: 您修改了特色模塊!';
$_['text_success_import_data']   = '成功: 你有導入主題!';
$_['text_success_duplicate']  	 = '成功: 你有重複的模塊!';
$_['text_success_delete']  		 = '成功: 你有刪除模塊!';
$_['text_edit']                  = '編輯頁面生成器模塊';
$_['text_create_new_module']	 = '創建一個新的模塊';
$_['text_layout']      			 = '您已經安裝並配置了模塊後，您可以將其添加到佈局<a href="%s" class="alert-link">在這裡</a> !';

// button
$_['entry_button_save']       		 = '保存';
$_['entry_button_save_and_edit']     = '保存並編輯';
$_['entry_button_save_and_new']    	 = '保存並創建新的';
$_['entry_button_cancel']       	 = '取消';
$_['button_add_module'] 			 = '添加模塊';
$_['entry_button_preview']       	 = '預覽這個';
$_['entry_button_duplicate']       	 = '重複這個';
$_['entry_button_delete']       	 = '刪除這個';
$_['text_module_class']	   			 = '模塊類';
$_['entry_class_suffix']  			 = '模塊類後綴';

// Text
$_['text_show_number_col'] 				 = '格';
$_['text_show_number_col_desc'] 		 = '顯示編號列';
$_['text_design_in'] 					 = '屏幕';
$_['text_design_in_desc'] 				 = '更改屏幕.';
$_['text_import_data'] 					 = '進口';
$_['text_import_data_desc'] 			 = '導入簡單數據';
$_['text_config_row'] 					 = '行設置';
$_['text_config_col'] 					 = '列設置';
$_['text_col_num'] 						 = '設置號碼項目';
$_['text_row_style'] 					 = '行樣式';
$_['text_css_class'] 					 = '類後綴';
$_['text_bg_color'] 					 = '背景顏色';
$_['text_bg_opacity'] 					 = '不透明度';
$_['text_bg_image'] 					 = '背景圖';
$_['text_margin'] 						 = '餘量';
$_['text_padding'] 						 = '填充';