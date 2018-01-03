-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 01:29 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_key`
--

CREATE TABLE `answer_key` (
  `id` int(50) NOT NULL,
  `a1` varchar(50) NOT NULL,
  `a2` varchar(50) NOT NULL,
  `a3` varchar(50) NOT NULL,
  `a4` varchar(50) NOT NULL,
  `a5` varchar(50) NOT NULL,
  `a6` varchar(50) NOT NULL,
  `a7` varchar(50) NOT NULL,
  `a8` varchar(50) NOT NULL,
  `a9` varchar(50) NOT NULL,
  `a10` varchar(50) NOT NULL,
  `a11` varchar(11) NOT NULL,
  `qset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_key`
--

INSERT INTO `answer_key` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `qset`) VALUES
(2, 'C', 'D', 'B', 'C', 'D', 'A', 'A', 'D', 'C', 'B', 'A', 'A'),
(3, 'A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'A', 'D', '', 'B'),
(4, 'C', 'C', 'A', 'B', 'C', 'D', 'D', 'A', 'C', 'B', '', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `passcode` varchar(10) NOT NULL,
  `validity` int(5) NOT NULL DEFAULT '1',
  `qset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `name`, `passcode`, `validity`, `qset`) VALUES
(1, 'John santos', '9408', 1, ''),
(2, 'Lau', '5149', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `score`, `passcode`) VALUES
(1, 'Lau', '70', '5149');

-- --------------------------------------------------------

--
-- Table structure for table `family_table`
--

CREATE TABLE `family_table` (
  `id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `child_name` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `grade_ave` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_table`
--

INSERT INTO `family_table` (`id`, `fam_id`, `child_name`, `age`, `gender`, `grade_ave`, `code`) VALUES
(1, 5820, 'Lau', 16, 'male', 88, 5149);

-- --------------------------------------------------------

--
-- Table structure for table `grant_table`
--

CREATE TABLE `grant_table` (
  `id` int(11) NOT NULL,
  `grant_name` text NOT NULL,
  `grade_average` int(11) NOT NULL,
  `annual_income` text NOT NULL,
  `age_average` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grant_table`
--

INSERT INTO `grant_table` (`id`, `grant_name`, `grade_average`, `annual_income`, `age_average`) VALUES
(1, 'Grant 1', 86, '7000-8000', 8);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `a` varchar(123) NOT NULL,
  `b` varchar(123) NOT NULL,
  `c` varchar(123) NOT NULL,
  `d` varchar(123) NOT NULL,
  `numassign` int(20) NOT NULL,
  `qset` text NOT NULL,
  `answerki` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `a`, `b`, `c`, `d`, `numassign`, `qset`, `answerki`) VALUES
(1, 'What Branch of Biology deals with the study of Plants??', 'Botany1', 'Zoology', 'Chemistry', 'Geometry', 1, 'A', 'C'),
(2, 'What is Love!', 'Ewan Ko', 'Baliw Ka', 'Mukha kang Kabayo', 'Adik Ka', 2, 'A', 'D'),
(3, 'Naniniwala ka ba sa Forever?', 'OO1', 'HINDI', 'KONTI LANG', 'WALA AKONG PAKIALAM', 3, 'A', 'B'),
(5, 'Bakit Itim ang Uwak at Bakit Puti ang Kalapati?', 'Kasi Trip nila yun1', 'Kasi Pula ang Red', 'Kasi pag kalbo walang buhok', 'Kasi may multo sa likod mo', 4, 'A', 'C'),
(6, 'Anong Pinagkaiba ng Manok sa Langaw?', 'Pareho lang sila1', 'Ang manok tumitilaok', 'Mas Cute ang Langaw', 'Ang Manok ay Langaw', 5, 'A', 'D'),
(7, 'Who is the Father of Jose Rizal ?', 'Mario Brothers1', 'Mario Sisters', 'Reginald Mallillin', 'Montalban Rizal', 6, 'A', 'A'),
(8, 'What is the English of Kinikilig ?', 'None of the Below', 'Ice Ice Baby', 'Chill Pa More', 'Crazy Love', 7, 'A', 'A'),
(9, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 8, 'A', 'D'),
(10, 'Nasaan ang Hustisya ?', 'Nasa Bundok nag-aaral', 'Nasa Commonwealth Market', 'Nasa Kubeta Nangingitlog', 'Nasa Puso mo1', 9, 'A', 'C'),
(11, 'Bakit di ka crush ng Crush mo ?', 'Pangit kasi ako', 'May mahal na siyang iba', 'Nagpapakipot lang yun', 'Wala akong pakialam1', 10, 'A', 'B'),
(12, 'Bakit di ka crush ng Crush mo ?', 'Pangit kasi ako', 'May mahal na siyang iba', 'Nagpapakipot lang yun', 'Wala akong pakialam', 1, 'B', 'A'),
(13, 'Nasaan ang Hustisya ?', 'Nasa Bundok nag-aaral', 'Nasa Commonwealth Market', 'Nasa Kubeta Nangingitlog', 'Nasa Puso mo', 2, 'B', 'A'),
(14, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 3, 'B', 'B'),
(15, 'What is the English of Kinikilig ?', 'None of the Below', 'Ice Ice Baby', 'Chill Pa More', 'Crazy Love', 4, 'B', 'B'),
(16, 'Who is the Father of Jose Rizal ?', 'Mario Brothers', 'Mario Sisters', 'Reginald Mallillin', 'Montalban Rizal', 5, 'B', 'C'),
(17, 'Anong Pinagkaiba ng Manok sa Langaw?', 'Pareho lang sila', 'Ang manok tumitilaok', 'Mas Cute ang Langaw', 'Ang Manok ay Langaw', 6, 'B', 'C'),
(18, 'Bakit Itim ang Uwak at Bakit Puti ang Kalapati?', 'Kasi Trip nila yun', 'Kasi Pula ang Red', 'Kasi pag kalbo walang buhok', 'Kasi may multo sa likod mo', 7, 'B', 'D'),
(19, 'Naniniwala ka ba sa Forever?', 'OO', 'HINDI', 'KONTI LANG', 'WALA AKONG PAKIALAM', 8, 'B', 'D'),
(20, 'What is Love!', 'Kalabaw', 'Baka', 'Kambing', 'Hayop', 9, 'B', 'A'),
(21, 'Who killed Magellan?', 'Lapu-Lapu', 'Maya-Maya', 'Rodrigo Duterte', 'Bembol Rocco', 10, 'B', 'D'),
(22, 'Who killed Magellan?', 'Lapu-Lapu', 'Maya-Maya', 'Rodrigo Duterte', 'Bembol Rocco', 1, 'C', 'C'),
(23, 'Bakit di ka crush ng Crush mo ?', 'Pangit kasi ako', 'May mahal na siyang iba', 'Nagpapakipot lang yun', 'Wala akong pakialam', 2, 'C', 'C'),
(24, 'What is Love!', 'Kalbo', 'Bayaw', 'Abnormal', 'Siraulo', 3, 'C', 'A'),
(25, 'Nasaan ang Hustisya ?', 'Nasa Bundok nag-aaral', 'Nasa Commonwealth Market', 'Nasa Kubeta Nangingitlog', 'Nasa Puso mo', 4, 'C', 'B'),
(26, 'Naniniwala ka ba sa Forever?', 'OO', 'HINDI', 'KONTI LANG', 'WALA AKONG PAKIALAM', 5, 'C', 'C'),
(27, 'Who is the Father of Jose Rizal ?', 'Mario Brothers', 'Mario Sisters', 'Reginald Mallillin', 'Montalban Rizal', 6, 'C', 'D'),
(28, 'What is the English of Kinikilig ?', 'None of the Below', 'Ice Ice Baby', 'Chill Pa More', 'Crazy Love', 7, 'C', 'D'),
(29, 'Bakit Itim ang Uwak at Bakit Puti ang Kalapati?', 'Kasi Trip nila yun', 'Kasi Pula ang Red', 'Kasi pag kalbo walang buhok', 'Kasi may multo sa likod mo', 8, 'C', 'A'),
(30, 'Anong Pinagkaiba ng Manok sa Langaw?', 'Pareho lang sila', 'Ang manok tumitilaok', 'Mas Cute ang Langaw', 'Ang Manok ay Langaw', 9, 'C', 'C'),
(31, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 10, 'C', 'B'),
(39, 'Test', '1', '2', '3', '4', 11, 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `resident_id` varchar(255) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `spouse_name` varchar(250) NOT NULL,
  `annual_income` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `resident_id`, `resident_name`, `address`, `gender`, `birthday`, `spouse_name`, `annual_income`) VALUES
(1, '5149', 'Lau', 'Sorsogon', 'male', '2001-05-06', '', ''),
(2, '5820', 'Law Traflagar', 'Sorsogon', 'M', '2001-05-06', 'Nami', '100-1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_key`
--
ALTER TABLE `answer_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_table`
--
ALTER TABLE `family_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grant_table`
--
ALTER TABLE `grant_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_key`
--
ALTER TABLE `answer_key`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `family_table`
--
ALTER TABLE `family_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grant_table`
--
ALTER TABLE `grant_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
