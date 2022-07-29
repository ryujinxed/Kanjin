-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 11:17 AM
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

INSERT INTO `kanji_tbl` (`kanji`, `onyomi`, `kunyomi`, `meaning`, `example`, `jlpt`) VALUES
('一', 'イチ、イツ', 'ひと', 'One', '一つ - ひとつ - One thing', 'N5'),
('三', 'サン', 'み、みっ', 'Three', '三月 - さんがつ - Third month (March)', 'N5'),
('上', 'ジョウ、ショウ', 'うえ、うわ、かみ、あ、のぼ', 'Up, Above', '上り - のぼり - Ascend, Climb', 'N5'),
('中', 'チュウ', 'なか', 'In, Inside, Middle, Center', '中学 - ちゅうがく - Middle school', 'N5'),
('二', 'ニ', 'ふた', 'Two', '二日 - ふつか - Two days', 'N5'),
('五', 'ゴ', 'いつ', 'Five', '五日 - いつか - Five days, Fifth day of the month', 'N5'),
('京', 'キョウ、ケイ', 'みやこ', 'Capital', '東京 - とうきょう - Tokyo', 'N4'),
('人', 'ジン、ニン', 'ひと', 'Person', '日本人 - にほんじん - Japanese person', 'N5'),
('今', 'コン、キン', 'いま', 'Now', '今年 - ことし - This year', 'N5'),
('会', 'カイ、エ', 'あ', 'Meeting, Meet, Join', '会社 - かいしゃ - Company, Workplace', 'N5'),
('出', 'シュツ、スイ', 'で、だ', 'Exit, Leave, Go out, Come out', '外出 - がいしゅつ - Going out, Leaving', 'N5'),
('分', 'ブン、フン、ブ', 'わ', 'Minute, Part, Share, Understand, Chance', '自分 - じぶん - Myself', 'N5'),
('前', 'ゼン', 'まえ', 'Before, In front', '午前 - ごぜん - Morning', 'N5'),
('十', 'ジュウ、ジッ', 'とお、と', 'Ten', '六十九 - ろくじゅうきゅう - Sixty nine', 'N5'),
('同', 'ドウ', 'おな', 'Equal, Same, Agree', '同時 - どうじ - Simultaneous, Same time, Together', 'N4'),
('四', 'シ', 'よ、よん、よっ', 'Four', '四階 - よんかい - Fourth floor', 'N5'),
('国', 'コク', 'くに', 'Country', '国語 - こくご - National language (Japanese)', 'N5'),
('大', 'ダイ、タイ', 'おお', 'Big', '大金 - たいきん - Large amount of money', 'N5'),
('年', 'ネン', 'とし', 'Year', '学年 - がくねん - School year', 'N5'),
('後', 'ゴ、コウ', 'のち、うし、あと、おく', 'Behind, Later, Back', '午後 - ごご - Afternoon', 'N5'),
('新', 'シン', 'あたら、あら、にい', 'New', '新しい - あたらしい - New, Recent, Latest', 'N5'),
('日', 'ニチ、ジツ', 'ひ、か', 'Day, Sun, Japan', '毎日 - まいにち - Everyday', 'N5'),
('時', 'ジ', 'とき', 'Time, Hour', '時間 - じかん - Time', 'N5'),
('月', 'ゲツ、ガツ', 'つき', 'Moon, Month', '今月 - こんがつ - This month', 'N5'),
('本', 'ホン', 'もと', 'Book, Present, Main, Origin, True', '本物 - ほんもの - Real', 'N5'),
('東', 'トウ', 'ひがし', 'East', '関東 - かんとう - Kanto region', 'N5'),
('生', 'セイ、ショウ', 'い、う、お、は、き、なま', 'Birth, Life', '一生 - いっしょう - Whole life, Own existence', 'N5'),
('社', 'シャ', 'やしろ', 'Company, Office, Shrine', '社長 - しゃちょう - Company president', 'N5'),
('自', 'ジ、シ', 'みずか', 'Oneself', '自分 - じぶん - Myself', 'N4'),
('行', 'コウ、ギョウ、アン', 'い、ゆ、おこな', 'Going, Carry out, Conduct, Act', '行く - いく - To go', 'N5'),
('見', 'ケン', 'み', 'See, Idea, Opinion, Visible', '見る - みる - To see', 'N5'),
('長', 'チョウ', 'なが', 'Long, Leader, Senior', '校長 - こうちょう - Principal', 'N5'),
('間', 'カン、ケン', 'あいだ、ま', 'Space, Interval', '人間 - にんげん - Human being, Person', 'N5');

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
  ADD PRIMARY KEY (`kanji`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
