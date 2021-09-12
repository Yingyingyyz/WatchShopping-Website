-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2021-04-19 02:51:07
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `detail_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(10) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `type` int(2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `detail_url`, `img_url`, `rating`, `discount`, `type`) VALUES
(2, 'Men\'s Wrist Watch', '280.00', 'Pm8.html', 'images/3.jpg', 5, '278.00', 1),
(3, 'Women\'s Wrist Watch', '275.00', 'Pm7.html', 'images/woman3.jpg', 5, '253.00', 2),
(4, 'Women\'s Wrist Watch', '230.00', 'Pm6.html', 'images/woman1.jpg', 5, '200.00', 2),
(6, 'Men\'s Wrist Watch', '220.00', 'Pm1.html', 'images/FTW4019_6.jfif', 5, '190.00', 1),
(7, 'Men\'s Wrist Watch', '260.00', 'Pm2.html', 'images/man2.jpg', 5, '260.00', 1),
(8, 'Men\'s Wrist Watch', '170.00', 'Pm3.html', 'images/man3.jpg', 5, '169.00', 1),
(9, 'Men\'s Wrist Watch', '180.00', 'Pm4.html', 'images/1.jpg', 3, '179.00', 1),
(10, 'Men\'s Wrist Watch', '140.00', 'Pm5.html', 'images/man5.jpg', 4, '140.00', 1),
(11, 'Men\'s Wrist Watch', '300.00', 'Pm6.html', 'images/man6.jpg', 5, '298.00', 1),
(12, 'Men\'s Wrist Watch', '180.00', 'Pm7.html', 'images/man7.JPG', 5, '170.00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
