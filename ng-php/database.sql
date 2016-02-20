-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-02-20 09:19:49
-- 伺服器版本: 10.1.8-MariaDB
-- PHP 版本： 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test_ng_php`
--
DROP DATABASE `test_ng_php`;
CREATE DATABASE IF NOT EXISTS `test_ng_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test_ng_php`;

-- --------------------------------------------------------

--
-- 資料表結構 `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `user` varchar(32) NOT NULL,
  `log` varchar(256) NOT NULL,
  PRIMARY KEY (`user`,`log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `logs`
--

INSERT INTO `logs` VALUES
('abc', 'Bondage'),
('abc', 'Discipline'),
('abc', 'Dominance'),
('asd', 'Masochism'),
('asd', 'Sadism '),
('def', 'Submission');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
