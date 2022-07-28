-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanjin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kanji_tbl`
--

CREATE TABLE `kanji_tbl` (
  `kanji_id` int(11) NOT NULL,
  `kanji` varchar(255) NOT NULL,
  `onyomi` varchar(255) NOT NULL,
  `kunyomi` varchar(255) NOT NULL,
  `meaning` longtext NOT NULL,
  `example` longtext NOT NULL,
  `jlpt` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kanji_tbl`
--

INSERT INTO `kanji_tbl` (`kanji_id`, `kanji`, `onyomi`, `kunyomi`, `meaning`, `example`, `jlpt`) VALUES
(14, '日', 'ニチ、ジツ', 'ひ、か', 'Day, Sun, Japan', '毎日 - まいにち - Everyday', 'N5'),
(15, '一', 'イチ、イツ', 'ひと', 'One', '一つ - ひとつ - One thing', 'N5'),
(16, '京', 'キョウ、ケイ', 'みやこ', 'Capital', '東京 - とうきょう - Tokyo', 'N4'),
(24, '本', 'ホン', 'もと', 'Book, Present, Main, Origin, True', '本物 - ほんもの - Real', 'N5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(10) UNSIGNED DEFAULT NULL,
  `logged` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin`, `logged`) VALUES
(1, 'admin', 'ryujinxed', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kanji_tbl`
--
ALTER TABLE `kanji_tbl`
  ADD PRIMARY KEY (`kanji_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kanji_tbl`
--
ALTER TABLE `kanji_tbl`
  MODIFY `kanji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
