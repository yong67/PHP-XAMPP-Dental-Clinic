-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2024-07-26 14:47:28
-- 服务器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `contact_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`) VALUES
(7, 'Zhaoyang Fudd', '3516419191@qq.com', '33', '2024-07-20 15:32:00'),
(10, 'Zhaoyang Fu22', '3516419191@qq.com', '231', '2024-07-06 17:44:00'),
(11, 'Zhaoyang Fu22', '3516419191@qq.com', '231', '2024-07-06 17:44:00'),
(15, 'w', 'SWE2109530@xmu.edu.my', '33', '2024-07-26 21:55:00'),
(16, 'w', 'SWE2109530@xmu.edu.my', '33', '2024-07-26 21:55:00'),
(17, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '435453', '2024-07-26 15:01:00'),
(18, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '435453', '2024-07-26 15:01:00'),
(19, 'ZHAOYANG FUw', 'swe2109530@xmu.edu.my', '435453', '2024-07-26 20:03:00'),
(20, 'ZHAOYANG FUw', 'swe2109530@xmu.edu.my', '435453', '2024-07-26 20:03:00'),
(21, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '2434', '2024-07-26 21:02:00'),
(22, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '2434', '2024-07-26 21:02:00'),
(23, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '2434', '2024-07-26 21:02:00'),
(24, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '2434', '2024-07-26 21:02:00'),
(25, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '342434', '2024-07-26 16:16:00'),
(26, 'ZHAOYANG FU', 'swe2109530@xmu.edu.my', '342434', '2024-07-26 16:16:00'),
(27, 'ZHAOYANG FUsada', 'swe2109530@xmu.edu.my', '342434', '2024-07-26 22:05:00');

--
-- 转储表的索引
--

--
-- 表的索引 `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
