-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 12:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `barangay`, `code`) VALUES
(2, 'ABUYOG', 56216001),
(3, 'ALMEDRAS COGON', 56216002),
(4, 'BALOGO(EAST)', 56216003),
(5, 'BARAYONG', 56216004),
(6, 'BASUD', 56216005),
(7, 'BIBINCAHAN', 56216006),
(8, 'BITAN-O', 56216008),
(9, 'BUCALBUCALAN', 56216009),
(10, 'BUENAVISTA(WEST)', 56216010),
(11, 'BUHATAN', 56216011),
(12, 'BULABOG', 56216012),
(13, 'BURABOD', 56216013),
(14, 'CABID-AN', 56216014),
(15, 'CAMBULAGA', 56216015),
(16, 'CAPUY', 56216016),
(17, 'GIMALOTO', 56216017),
(18, 'GUINLAJON', 56216018),
(19, 'MACABOG', 56216019),
(20, 'MARINAS', 56216020),
(21, 'PAMURAYAN', 56216021),
(22, 'PANGPANG', 56216022),
(23, 'PANLAYAAN', 56216023),
(24, 'PENAFRANCIA', 56216024),
(25, 'PIOT', 56216025),
(26, 'POLVORISTA', 56216026),
(27, 'RIZAL', 56216027),
(28, 'SALOG', 56216028),
(29, 'SALVACION', 56216029),
(30, 'SAMPALOC', 56216030),
(31, 'SAN ISIDRO(WEST)', 56216031),
(32, 'SN JUAN RORO', 56216032),
(33, 'SIRANGAN', 56216033),
(34, 'SULUCAN', 56216034),
(35, 'TALISAY', 56216035),
(36, 'TICOL', 56216036),
(37, 'TUGOS', 56216037),
(38, 'BALETE', 56216038),
(39, 'BALOGO(BACON)', 56216039),
(40, 'BATO', 56216040),
(41, 'BONOT', 56216041),
(42, 'BOGNA', 56216042),
(43, 'BUENAVISTA(BACON)', 56216043),
(44, 'CABARBUHAN', 56216044),
(45, 'CARICARAN', 56216045),
(46, 'DEL ROSARIO', 56216046),
(47, 'GATBO', 56216047),
(48, 'JAMISLAGAN', 56216048),
(49, 'MARICRUM', 56216049),
(50, 'OSIAO', 56216050),
(51, 'POBLACION', 56216051),
(52, 'RAWIS', 56216052),
(53, 'SALVACION', 56216053),
(54, 'SAN ISIDRO(BACON)', 56216054),
(55, 'SAN JUAN', 56216055),
(56, 'SAN PASCUAL', 56216056),
(57, 'SAN RAMON', 56216057),
(58, 'SAN ROQUE', 56216058),
(59, 'SAN VICENTE', 56216059),
(60, 'SANTA CRUZ', 56216060),
(61, 'STA.LUCIA', 56216061),
(62, 'STO DOMINGO', 56216062),
(63, 'STO.NINO', 56216063),
(64, 'SAWANGA', 56216064),
(65, 'SUGOD', 56216065);

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
(2, 'Lau', '5149', 0, ''),
(3, 'Boruto', '2059', 0, ''),
(4, 'Himiwari', '6925', 0, ''),
(5, 'Fred', '4061', 0, ''),
(6, 'Chard', '0398', 0, ''),
(7, 'robin', '0536', 1, ''),
(8, 'jim', '4975', 0, ''),
(9, 'jim', '7938', 0, ''),
(10, 'raul pio jr', '1859', 1, ''),
(11, 'deejay pio', '2908', 0, ''),
(12, 'jayjay perfecto', '2754', 1, ''),
(13, 'alice perfecto', '6501', 1, ''),
(14, 'luding perfecto', '2574', 0, ''),
(15, 'mak mak perfecto', '9132', 1, ''),
(16, 'jip navarro', '8372', 1, ''),
(17, 'ninyo navarro', '0247', 1, ''),
(18, 'diane navarro', '2814', 0, ''),
(19, 'kambal arevalo', '2757', 1, ''),
(20, 'sunshine arevalo', '0913', 0, ''),
(21, 'lea bados', '0728', 1, ''),
(22, 'france bados', '2740', 0, ''),
(23, 'jerome bulate', '2037', 0, ''),
(24, 'jeric bulate', '7064', 0, ''),
(25, 'ronel indi', '5608', 1, ''),
(26, 'andy indi', '1805', 1, ''),
(27, 'tony indi', '6483', 1, ''),
(28, 'yuri indi', '1479', 1, ''),
(29, 'antik escalante', '7816', 1, ''),
(30, 'batoy escalante', '1704', 1, ''),
(31, 'reyna escalante', '3872', 0, ''),
(32, 'riza escalante', '7655', 1, ''),
(33, 'victor kog', '4603', 1, ''),
(34, 'amandy kog', '4936', 0, ''),
(35, 'joven kog', '1355', 0, ''),
(36, 'burek kog', '5711', 1, ''),
(37, 'gil gurang', '6509', 0, ''),
(38, 'mark', '5928', 1, ''),
(39, 'indiiiii', '4976', 1, ''),
(40, 'qe', '8535', 1, ''),
(41, 'ada duazo', '9872', 1, ''),
(42, 'tanduy duzo', '2518', 1, ''),
(43, 'owel', '6929', 1, ''),
(44, 'jr', '6860', 1, ''),
(45, 'remy', '9079', 0, ''),
(46, 'cara', '1649', 1, ''),
(47, 'jip navarro', '9036', 1, ''),
(48, 'ninyo navarro', '7251', 1, ''),
(49, 'diane navarro', '9719', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `score`, `percentage`, `passcode`) VALUES
(1, 'Lau', '2', '70', '5149'),
(2, 'Boruto', '2', '70', '2059'),
(3, 'Himiwari', '2', '70', '6925'),
(4, 'Fred', '2', '70', '4061'),
(7, 'Chard', '2', '73', '0398'),
(8, 'jim', '10', '100', '4975'),
(9, 'jim', '9', '90', '7938'),
(10, 'deejay pio', '8', '80', '2908'),
(11, 'luding perfecto', '6', '75', '2574'),
(12, 'diane navarro', '2', '75', '2814'),
(13, 'france bados', '4', '65', '2740'),
(14, 'jerome bulate', '9', '90', '2037'),
(15, 'jeric bulate', '5', '65', '7064'),
(16, 'reyna escalante', '6', '65', '3872'),
(17, 'amandy kog', '9', '90', '4936'),
(18, 'joven kog', '1', '65', '1355'),
(19, 'gil gurang', '4', '65', '6509'),
(20, 'sunshine arevalo', '8', '80', '0913'),
(21, 'remy', '9', '90', '9079');

-- --------------------------------------------------------

--
-- Table structure for table `family_table`
--

CREATE TABLE `family_table` (
  `id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `chresident_name` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `grade_ave` int(11) NOT NULL,
  `educational` text NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_table`
--

INSERT INTO `family_table` (`id`, `fam_id`, `resident_id`, `chresident_name`, `age`, `gender`, `grade_ave`, `educational`, `code`) VALUES
(6, 7869, 2034, 'robin', 21, 'Male', 68, 'high school', 536),
(9, 8659, 1204, 'raul pio jr', 18, 'Male', 75, 'high school', 1859),
(10, 8659, 9180, 'deejay pio', 17, 'Male', 87, 'high school', 2908),
(11, 5097, 5802, 'jayjay perfecto', 32, 'Male', 65, 'college', 2754),
(12, 5097, 3702, 'alice perfecto', 24, 'Female', 69, 'high school', 6501),
(13, 5097, 5491, 'luding perfecto', 18, 'Female', 88, 'high school', 2574),
(14, 5097, 8176, 'mak mak perfecto', 17, 'Male', 85, 'high school', 9132),
(15, 4906, 8940, 'jip navarro', 28, 'Male', 0, 'college undergrad', 8372),
(16, 4906, 284, 'ninyo navarro', 24, 'Male', 0, 'college', 247),
(17, 4906, 465, 'diane navarro', 17, 'Female', 90, 'high school', 2814),
(18, 4051, 8642, 'kambal arevalo', 19, 'Male', 78, '4th year high school', 2757),
(19, 4051, 3420, 'sunshine arevalo', 16, 'Female', 88, '4th year high school', 913),
(20, 2639, 1258, 'lea bados', 25, 'Female', 0, 'high school', 728),
(21, 2639, 8642, 'france bados', 16, 'Male', 89, '4th year high school', 2740),
(22, 2470, 812, 'jerome bulate', 24, 'Male', 88, '4th year high school', 2037),
(23, 2470, 5718, 'jeric bulate', 17, 'Male', 89, '4', 7064),
(24, 4871, 6821, 'ronel indi', 35, 'Male', 0, 'college undergrad', 5608),
(25, 4871, 7829, 'andy indi', 21, 'Male', 87, '4th year high school', 1805),
(26, 4871, 3217, 'tony indi', 14, 'Female', 0, 'elementary', 6483),
(27, 4871, 8673, 'yuri indi', 17, 'Male', 78, '4th year high school', 1479),
(28, 9451, 8327, 'antik escalante', 24, 'Male', 0, 'college graduate', 7816),
(29, 9451, 1507, 'batoy escalante', 18, 'Male', 88, '4th year high school', 1704),
(30, 9451, 1975, 'reyna escalante', 16, 'Female', 89, '4th year high school', 3872),
(31, 9451, 1350, 'riza escalante', 15, 'Female', 0, '3rd year highschool', 7655),
(32, 2193, 4736, 'victor kog', 29, 'Male', 0, 'college graduate', 4603),
(33, 2193, 938, 'amandy kog', 18, 'Female', 86, '4th year high school', 4936),
(34, 2193, 1346, 'joven kog', 17, 'Male', 89, '4th year high school', 1355),
(35, 2193, 9402, 'burek kog', 16, 'Male', 82, '4th year high school', 5711),
(36, 857, 6230, 'gil gurang', 17, 'Male', 90, 'high school', 6509),
(37, 8965, 5047, 'mark', 17, 'Male', 90, '4th year high school', 5928),
(38, 8965, 7981, 'indiiiii', 15, 'Female', 85, '4th year high school', 4976),
(39, 8965, 2968, 'qe', 17, 'Male', 78, '4th year high school', 8535),
(40, 3684, 963, 'ada duazo', 24, 'Female', 0, 'high school graduate', 9872),
(41, 3684, 1592, 'tanduy duzo', 17, 'Male', 88, '4th year high school', 2518),
(42, 1846, 2480, 'owel', 17, 'Male', 87, '4th year high school', 6929),
(43, 1846, 7059, 'jr', 14, 'Male', 76, '4th year high school', 6860),
(44, 7910, 6490, 'remy', 13, 'Male', 88, '4th year high school', 9079),
(45, 7910, 1354, 'cara', 12, 'Female', 89, '4th year high school', 1649),
(46, 3592, 8409, 'jip navarro', 28, 'Male', 0, 'college', 9036),
(47, 3592, 3528, 'ninyo navarro', 24, 'Female', 0, 'college', 7251),
(48, 3592, 4613, 'diane navarro', 16, 'Female', 90, '4th year high school', 9719);

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
(1, 'Grant 1', 85, '60000', 15);

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
(1, 'What Branch of Biology deals with the study of Plants??', 'science', 'Zoology', 'botany', 'Geometry', 1, 'A', 'C'),
(2, 'who is the father of biology?', 'isaac newton', 'barrack obama', 'walt whitman', 'aristotle', 2, 'A', 'D'),
(3, 'When the philippines discovered?', '1900', '1521', '2018', '1568', 3, 'A', 'B'),
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
(31, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 10, 'C', 'B');

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
  `annual_income` decimal(10,2) NOT NULL,
  `occupation` text NOT NULL,
  `spoccupation` text NOT NULL,
  `educational_attained` text NOT NULL,
  `speducational_attained` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `resident_id`, `resident_name`, `address`, `gender`, `birthday`, `spouse_name`, `annual_income`, `occupation`, `spoccupation`, `educational_attained`, `speducational_attained`) VALUES
(7, '7869', 'jimruzae estigoy', 'cogon', 'Male', '1993-12-30', 'mia cobilla', '20000.00', 'none', 'janitor', 'high school  graduate', 'high school graduate'),
(10, '8659', 'raul pio sr', 'BALOGO(EAST)', 'Male', '1970-10-02', 'jimrose ann pio', '100000.00', 'janitor', 'none', 'high school  graduate', 'high school graduate'),
(11, '5097', 'rowel perfecto', 'BIBINCAHAN', 'Male', '1960-11-23', 'julie perfecto', '60000.00', 'driver', 'labandera', 'college undergraduate', 'kinder'),
(12, '4906', 'lea navarro', 'BASUD', 'Female', '1960-12-31', 'kolot  dizon', '80000.00', 'teacher', 'tambay', 'college', 'elementary'),
(13, '4051', 'leo anas arevalo', 'BIBINCAHAN', 'Male', '1982-08-23', 'none', '50000.00', 'teacher', 'none', 'college graduate', 'none'),
(14, '2639', 'joan bados', 'BASUD', 'Female', '1967-09-23', 'joel bados', '50000.00', 'staff', 'staff', 'college undergraduate', 'high school graduate'),
(15, '2470', 'jojo bulate', 'ABUYOG', 'Male', '1961-11-22', 'nene bulate', '40000.00', 'teacher', 'housewife', 'college graduate', 'elementary'),
(16, '4871', 'onyo indi', 'BURABOD', 'Male', '1967-11-23', 'onyi indi', '80000.00', 'staff', 'housewife', 'high school  graduate', 'high school graduate'),
(17, '9451', 'amings escalante', 'ALMEDRAS', 'Male', '1956-11-21', 'mila escalante', '50000.00', 'teacher', 'housewife', 'college graduate', 'high school graduate'),
(18, '2193', 'amanda yuzon kog', 'CABID-AN', 'Female', '1966-11-21', 'alejandro kog', '60000.00', 'guard', 'guard', 'college graduate', 'high school graduate'),
(19, '0857', 'pio gurang', 'BALOGO(EAST)', 'Male', '1993-11-23', 'n/a', '80000.00', 'staff', 'n/a', 'college', 'na'),
(20, '8965', 'richie real', 'BARAYONG', 'Male', '1980-11-21', 'heidy real', '50000.00', 'staff', 'staff', 'college', 'college'),
(21, '3684', 'sit duazo', 'BITAN-O', 'Female', '1970-10-25', 'lolo duazo', '60000.00', 'staff', 'staff', 'college graduate', 'high school graduate'),
(22, '1846', 'steve ar', 'ALMEDRAS', 'Male', '1989-11-22', 'ivy', '50000.00', 'staff', 'staff', 'high school  graduate', 'high school graduate'),
(23, '7910', 'emy', 'BASUD', 'Famale', '1980-10-21', 'toro', '80000.00', 'staff', 'staff', 'high school  graduate', 'college'),
(24, '3592', 'lea navarro', 'BASUD', 'Famale', '1960-12-31', 'kolot  dizon', '80000.00', 'teacher', 'tambay', 'college graduate', 'college');

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
(1, 'admin', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_key`
--
ALTER TABLE `answer_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
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
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `family_table`
--
ALTER TABLE `family_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `grant_table`
--
ALTER TABLE `grant_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
