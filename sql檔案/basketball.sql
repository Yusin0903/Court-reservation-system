-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-05-03 13:40:56
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `register`
--

CREATE TABLE `basketball` (
  `date` text NOT NULL,
  `9:10-10:00` text NOT NULL,
  `10:10-11:00` text NOT NULL,
  `11:10-12:00` text NOT NULL,
  `13:10-14:00` text NOT NULL,
  `14:10-15:00` text NOT NULL,
  `15:10-16:00` text NOT NULL,
  `16:10-17:00` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `register`
--

INSERT INTO `basketball` (`date`,`9:10-10:00`, `10:10-11:00`, `11:10-12:00`,`13:10-14:00`, `14:10-15:00`, `15:10-16:00`, `16:10-17:00`) VALUES
('06-21','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-22','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-23','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-24','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-25','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-26','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF'),
('06-27','#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF', '#84C1FF');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;