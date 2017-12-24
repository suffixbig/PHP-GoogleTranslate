-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2017-12-16 08:50:48
-- 伺服器版本: 5.7.14
-- PHP 版本： 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `t_translation_googleapi`
--

-- --------------------------------------------------------

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

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `oc_t`
--
ALTER TABLE `oc_t`
  ADD PRIMARY KEY (`t_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `oc_t`
--
ALTER TABLE `oc_t`
  MODIFY `t_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主鍵';