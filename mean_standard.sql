-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?04 ??02 ??06:06
-- 伺服器版本: 5.6.21
-- PHP 版本： 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `mean_standard`
--

-- --------------------------------------------------------

--
-- 資料表結構 `mean_standard`
--

CREATE TABLE IF NOT EXISTS `mean_standard` (
`R_group` int(11) NOT NULL,
  `mean` double NOT NULL,
  `standard` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `real_number`
--

CREATE TABLE IF NOT EXISTS `real_number` (
`R_Id` int(11) NOT NULL,
  `R_group` int(11) NOT NULL,
  `content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `mean_standard`
--
ALTER TABLE `mean_standard`
 ADD PRIMARY KEY (`R_group`);

--
-- 資料表索引 `real_number`
--
ALTER TABLE `real_number`
 ADD PRIMARY KEY (`R_Id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `mean_standard`
--
ALTER TABLE `mean_standard`
MODIFY `R_group` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `real_number`
--
ALTER TABLE `real_number`
MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
