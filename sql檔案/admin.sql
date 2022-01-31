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

CREATE TABLE `admin` (
  `S_no` text NOT NULL,
  `name`text NOT NULL,
  `email` text NOT NULL,
  `situation` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `court` text NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `register`
--

-- INSERT INTO `admin` (`S_no`, `name`,`email`,`situation`,`date`,`time`,`court`) VALUES
-- ('001', '小新', 'abc@gmail.comm', '預約', '2021-06-06','籃球場'),
-- ('002', '小華', 'bbb@gmail.com', '預約', '2020-06-04','棒球場');
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
