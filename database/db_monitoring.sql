-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 05:58 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_key`
--

CREATE TABLE IF NOT EXISTS `answer_key` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `barangay` (
`id` int(11) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=269 ;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `barangay`, `code`) VALUES
(1, 'Brgy.1 purok 1.  Abuyog', 0),
(2, 'Brgy.1 purok 2.  Abuyog', 0),
(3, 'Brgy.1 purok 3.  Abuyog', 0),
(4, 'Brgy.1 purok 4. Abuyog', 0),
(5, 'Brgy.1 purok 5. Abuyog', 0),
(6, 'Brgy.2 magsaysay street.Almendras-cogon', 0),
(7, 'Brgy .2 estrella street. Almendras-cogon', 0),
(8, 'Brgy 2. kalye ipot-ipot. Almendras-cogon', 0),
(9, 'Brgy.3. Rjr Street. Balogo', 0),
(10, 'Brgy.3  dapdap street. Balogo', 0),
(11, 'Brgy 4. mahingan street. Balogo', 0),
(12, 'Brgy 4. brgy.road street. Balogo', 0),
(13, 'Brgy 5. purok 1. Barayong', 0),
(14, 'Brgy 5. purok 2. Barayong', 0),
(15, 'Brgy 5. purok 3. Barayong', 0),
(16, 'Brgy 6. purok 1. Basud', 0),
(17, 'Brgy 6. purok 2. Basud', 0),
(18, 'Brgy 6. purok 3. Basud', 0),
(19, 'Brgy 6. purok 4. Basud', 0),
(20, 'Brgy 6. purok 5. Basud', 0),
(21, 'Brgy 7. garcia compound. Bibincahan', 0),
(22, 'Brgy 7. gate 1 santol street. Bibincahan', 0),
(23, 'Brgy 7. gate 1 narra street. Bibincahan', 0),
(24, 'Brgy 7. gate 2 molave street. Bibincahan', 0),
(25, 'Brgy 7. gate 2 mahogany street. Bibincahan', 0),
(26, 'Brgy 7. gate 2 mangga street. Bibincahan', 0),
(27, 'Brgy 7. gate 3 madanan street. Bibincahan', 0),
(28, 'Brgy 7. gate 3 palsi street. Bibincahan', 0),
(29, 'Brgy 7. Olv village. Bibincahan', 0),
(30, 'Brgy 8. purok 1. Bitan-o', 0),
(31, 'Brgy 8. purok 2 Dalipay. Bitan-o', 0),
(32, 'Brgy 8. purok 3. Bitan-o', 0),
(33, 'Brgy 9. purok1. Bucalbucalan', 0),
(34, 'Brgy 9. purok2. Bucalbucalan', 0),
(35, 'Brgy 9. purok3. Bucalbucalan', 0),
(36, 'Brgy 10. purok 1. Buenavista', 0),
(37, 'Brgy 10. purok 2. Buenavista', 0),
(38, 'Brgy 10. purok 3. Buenavista', 0),
(39, 'Brgy 10. purok 4. Buenavista', 0),
(40, 'Brgy 11. purok 1. Buhatan', 0),
(41, 'Brgy 11. purok 2. Buhatan', 0),
(42, 'Brgy 11. purok 3. Buhatan', 0),
(43, 'Brgy 11. purok 4. Buhatan', 0),
(44, 'Brgy 11. purok 5. Buhatan', 0),
(45, 'Brgy 12. purok 1. Bulabog', 0),
(46, 'Brgy 12. purok 2. Bulabog', 0),
(47, 'Brgy 12. purok 3. Bulabog', 0),
(48, 'Brgy 13. garcia compound. Burabod', 0),
(49, 'Brgy 13. Taas street. Burabod', 0),
(50, 'Brgy 13. kalye nueva street. Burabod', 0),
(51, 'Brgy 13. burgos street. Burabod', 0),
(52, 'Brgy 14. purok 1. Cabid-an', 0),
(53, 'Brgy 14. purok 2. Cabid-an', 0),
(54, 'Brgy 14. purok 3. Cabid-an', 0),
(55, 'Brgy 14. purok 4. Cabid-an', 0),
(56, 'Brgy 14. seabreeze home. Cabid-an', 0),
(57, 'Brgy 15. purok 1. Cambulaga', 0),
(58, 'Brgy 15. purok 2. Cambulaga', 0),
(59, 'Brgy 15. purok 3. Cambulaga', 0),
(60, 'Brgy 15. purok 4. Cambulaga', 0),
(61, 'Brgy 15. purok 5. Cambulaga', 0),
(62, 'Brgy 15. purok 6. Cambulaga', 0),
(63, 'Brgy 15. purok 7. Cambulaga', 0),
(64, 'Brgy 16. palje street. Capuy', 0),
(65, 'Brgy 16. maligaya street. Capuy', 0),
(66, 'Brgy 16. sitio pocdol. Capuy', 0),
(67, 'Brgy 16. sitio bagacay. Capuy', 0),
(68, 'Brgy 17. purok1. Gimaloto', 0),
(69, 'Brgy 17. purok2. Gimaloto', 0),
(70, 'Brgy 17. purok3. Gimaloto', 0),
(71, 'Brgy 18.purok 1. Guinlajon', 0),
(72, 'Brgy 18.purok 2. Guinlajon', 0),
(73, 'Brgy 18.purok 3. Guinlajon', 0),
(74, 'Brgy 18.purok 4. Guinlajon', 0),
(75, 'Brgy 18.purok 5. Guinlajon', 0),
(76, 'Brgy 18.purok 6. Guinlajon', 0),
(77, 'Brgy 19. purok 1. Macabog', 0),
(78, 'Brgy 19. purok 2. Macabog', 0),
(79, 'Brgy 19. purok 3. Macabog', 0),
(80, 'Brgy 19. purok 4.  Macabog', 0),
(81, 'Brgy 20. purok 1. Marinas', 0),
(82, 'Brgy 20. purok 2. Marinas', 0),
(83, 'Brgy 20. purok 3. Marinas', 0),
(84, 'Brgy 21. purok 1.  Pamurayan', 0),
(85, 'Brgy 21. purok 2.  Pamurayan', 0),
(86, 'Brgy 21. purok 3.  Pamurayan', 0),
(87, 'Brgy 21. purok 4.  Pamurayan', 0),
(88, 'Brgy 22. 1st street. Pangpang', 0),
(89, 'Brgy 22. 2nd street. Pangpang', 0),
(90, 'Brgy 22. 3rd street. Pangpang', 0),
(91, 'Brgy 22. 4th street. Pangpang', 0),
(92, 'Brgy 22. 6th street. Pangpang', 0),
(93, 'Brgy 22. 7th street. Pangpang', 0),
(94, 'Brgy 22. 8th street. Pangpang', 0),
(95, 'Brgy 22. 9th street. Pangpang', 0),
(96, 'Brgy 22. 10th street. Pangpang', 0),
(97, 'Brgy 23. purok 1. Panlayaan', 0),
(98, 'Brgy 23. purok 2. Panlayaan', 0),
(99, 'Brgy 23. purok 3. Panlayaan', 0),
(100, 'Brgy 23. purok 4. Panlayaan', 0),
(101, 'Brgy 24. purok1. Penafrancia', 0),
(102, 'Brgy 24. purok2. Penafrancia', 0),
(103, 'Brgy 24. purok3. Penafrancia', 0),
(104, 'Brgy 24. purok4. Penafrancia', 0),
(105, 'Brgy 24. purok5. Penafrancia', 0),
(106, 'Brgy 25. purok 1. Piot', 0),
(107, 'Brgy 25. purok 2. Piot', 0),
(108, 'Brgy 25. purok 3. Piot', 0),
(109, 'Brgy 25. purok 4. Piot', 0),
(110, 'Brgy 26. alegre street. Polvorista', 0),
(111, 'Brgy 26. rizal street. Polvorista', 0),
(112, 'Brgy 27. purok 1. Rizal', 0),
(113, 'Brgy 27. purok 2. Rizal', 0),
(114, 'Brgy 27. purok 3. Rizal', 0),
(115, 'Brgy 27. purok 4. Rizal', 0),
(116, 'Brgy 27. purok 5. Rizal', 0),
(117, 'Brgy 28. purok 1. Salog', 0),
(118, 'Brgy 28. purok 2. Salog', 0),
(119, 'Brgy 28. purok 3. Salog', 0),
(120, 'Brgy 28. purok 4. Salog', 0),
(121, 'Brgy 28. garcia compound. Salog', 0),
(122, 'Brgy 29. purok 1. Salvacion', 0),
(123, 'Brgy 29. purok 2. Salvacion', 0),
(124, 'Brgy 29. purok 3. Salvacion', 0),
(125, 'Brgy 29. purok 4. Salvacion', 0),
(126, 'Brgy 30. purok 1. Sampaloc', 0),
(127, 'Brgy 30. purok 2. Sampaloc', 0),
(128, 'Brgy 30. purok 3. Sampaloc', 0),
(129, 'Brgy 30. purok 4. Sampaloc', 0),
(130, 'Brgy 30. purok 5. Sampaloc', 0),
(131, 'Brgy 30. purok 6. Sampaloc', 0),
(132, 'Brgy 31. purok 1. San isidro', 0),
(133, 'Brgy 31. purok 2. San isidro', 0),
(134, 'Brgy 31. purok 3. San isidro', 0),
(135, 'Brgy 31. purok 4. San isidro', 0),
(136, 'Brgy 32. purok 1. San juan roro', 0),
(137, 'Brgy 32. purok 2. San juan roro', 0),
(138, 'Brgy 32. purok 3. San juan roro', 0),
(139, 'Brgy 32. purok 4. San juan roro', 0),
(140, 'Brgy 32. purok 5. San juan roro', 0),
(141, 'Brgy 32. purok 6. San juan roro', 0),
(142, 'Brgy 33. purok 1. Sirangan', 0),
(143, 'Brgy 33. purok 2. Sirangan', 0),
(144, 'Brgy 33. purok 3. Sirangan', 0),
(145, 'Brgy 33. purok 4. Sirangan', 0),
(146, 'Brgy 33. purok 5. Sirangan', 0),
(147, 'Brgy 34. purok1. Sulucan', 0),
(148, 'Brgy 34. purok 2. Sulucan', 0),
(149, 'Brgy 35. lee homes.Talisay', 0),
(150, 'Brgy 35. macapagal street.Talisay', 0),
(151, 'Brgy 35.kalye looban.Talisay', 0),
(152, 'Brgy 35.labalan street.Talisay', 0),
(153, 'Brgy 36. purok 1. Ticol', 0),
(154, 'Brgy 36. purok 2. Ticol', 0),
(155, 'Brgy 36. purok 3. Ticol', 0),
(156, 'Brgy 36. purok 4. Ticol', 0),
(157, 'Brgy 36. purok 5. Ticol', 0),
(158, 'Brgy 37. purok 1.Tugos', 0),
(159, 'Brgy 37. purok 2.Tugos', 0),
(160, 'Brgy 37. purok 3.Tugos', 0),
(161, 'Brgy 37. purok 4 excutive.Tugos', 0),
(162, 'Brgy 37. purok 5.Tugos', 0),
(163, 'Brgy 38. Purok 1. Balete', 0),
(164, 'Brgy 38. Purok 2. Balete', 0),
(165, 'Brgy 38. Purok 3. Balete', 0),
(166, 'Brgy 38. Purok 4. Balete', 0),
(167, 'Brgy 38. Purok 5. Balete', 0),
(168, 'Brgy 38. Purok 6. Balete', 0),
(169, 'Brgy 39. purok 1. Bato', 0),
(170, 'Brgy 39. purok 2. Bato', 0),
(171, 'Brgy 39. purok 3. Bato', 0),
(172, 'Brgy 40. purok 1. Bon-ot', 0),
(173, 'Brgy 40. purok 2. Bon-ot', 0),
(174, 'Brgy 40. purok 3. Bon-ot', 0),
(175, 'Brgy 40. purok 4. Bon-ot', 0),
(176, 'Brgy 41. purok 1. Bogna', 0),
(177, 'Brgy 41. purok 2. Bogna', 0),
(178, 'Brgy 41. purok 3. Bogna', 0),
(179, 'Brgy 42. purok 1. Buenavista', 0),
(180, 'Brgy 42. purok 2. Buenavista', 0),
(181, 'Brgy 42. purok 3. Buenavista', 0),
(182, 'Brgy 42. purok 4. Buenavista', 0),
(183, 'Brgy 43. purok 1. Cabarbuhan', 0),
(184, 'Brgy 43. purok 2. Cabarbuhan', 0),
(185, 'Brgy 43. purok 3. Cabarbuhan', 0),
(186, 'Brgy 43. purok 4. Cabarbuhan', 0),
(187, 'Brgy 44. sitio ogob. Caricaran', 0),
(188, 'Brgy 44. sitio pigsabunan. Caricaran', 0),
(189, 'Brgy 44. sitio danao. Caricaran', 0),
(190, 'Brgy 45. purok 1. Del rosario', 0),
(191, 'Brgy 45. purok 2. Del rosario', 0),
(192, 'Brgy 45. purok 3. Del rosario', 0),
(193, 'Brgy 45. purok 4. Del rosario', 0),
(194, 'Brgy 46. purok 1. Gatbo', 0),
(195, 'Brgy 46. purok 2. Gatbo', 0),
(196, 'Brgy 46. purok 3. Gatbo', 0),
(197, 'Brgy 47. purok 1. Jamislagan', 0),
(198, 'Brgy 47. purok 2. Jamislagan', 0),
(199, 'Brgy 47. purok 3. Jamislagan', 0),
(200, 'Brgy 48. purok 1. Maricrum', 0),
(201, 'Brgy 48. sitio 2. Maricrum', 0),
(202, 'Brgy 48. sitio pili. Maricrum', 0),
(203, 'Brgy 49. poblacion. Osiao', 0),
(204, 'Brgy 49. purok 1. Osiao', 0),
(205, 'Brgy 49. purok 2. Osiao', 0),
(206, 'Brgy 49. purok 3. Osiao', 0),
(207, 'Brgy 50. kalye paalam. Poblacion', 0),
(208, 'Brgy 50. sitio burabod. Poblacion', 0),
(209, 'Brgy 50. dineros street. Poblacion', 0),
(210, 'Brgy 50. delgado street. Poblacion', 0),
(211, 'Brgy 51. purok 1. Rawis', 0),
(212, 'Brgy 51. purok 2. Rawis', 0),
(213, 'Brgy 51. purok 3. Rawis', 0),
(214, 'Brgy 51. purok 4. Rawis', 0),
(215, 'Brgy 52. purok 1. Salvacion', 0),
(216, 'Brgy 52. purok 2. Salvacion', 0),
(217, 'Brgy 52. purok 3. Salvacion', 0),
(218, 'Brgy 52. purok 4. Salvacion', 0),
(219, 'Brgy 52. purok 5. Salvacion', 0),
(220, 'Brgy 53. bacon district purok 1. San isidro', 0),
(221, 'Brgy 53. bacon district purok 2. San isidro', 0),
(222, 'Brgy 53. bacon district purok 3. San isidro', 0),
(223, 'Brgy 54. Purok 1. San juan', 0),
(224, 'Brgy 54. Purok 2. San juan', 0),
(225, 'Brgy 54. Purok 3. San juan', 0),
(226, 'Brgy 54. Purok 4. San juan', 0),
(227, 'Brgy 54. Purok 5. San juan', 0),
(228, 'Brgy 55. sitio bangcal. San Pascual', 0),
(229, 'Brgy 56. purok 1. San Pascual', 0),
(230, 'Brgy 56. purok 2. San Pascual', 0),
(231, 'Brgy 56. purok 3. San Pascual', 0),
(232, 'Brgy 57. purok 1. San Ramon', 0),
(233, 'Brgy 57. purok 2. San Ramon', 0),
(234, 'Brgy 57. purok 3. San Ramon', 0),
(235, 'Brgy 57. purok 4. San Ramon', 0),
(236, 'Brgy 58. sitio gabao. San Roque', 0),
(237, 'Brgy 58. centro. San Roque', 0),
(238, 'Brgy 58. sitio ogob. San Roque', 0),
(239, 'Brgy 58. corral compoud. San Roque', 0),
(240, 'Brgy 59. purok 1. San Vicente', 0),
(241, 'Brgy 59. purok 2. San Vicente', 0),
(242, 'Brgy 59. purok 3. San Vicente', 0),
(243, 'Brgy 59. purok 4. San Vicente', 0),
(244, 'Brgy 59. purok 5. San Vicente', 0),
(245, 'Brgy 60. purok 1. Santa Cruz', 0),
(246, 'Brgy 60. purok 2. Santa Cruz', 0),
(247, 'Brgy 60. purok 3. Santa Cruz', 0),
(248, 'Brgy 60. purok 4. Santa Cruz', 0),
(249, 'Brgy 60. purok 5. Santa Cruz', 0),
(250, 'Brgy 61. poblacion. Santo Nino', 0),
(251, 'Brgy 61. sitio burabod. Santo Nino', 0),
(252, 'Brgy 62. Purok 1. Sawanga', 0),
(253, 'Brgy 62. Purok 2. Sawanga', 0),
(254, 'Brgy 62. Purok 3. Sawanga', 0),
(255, 'Brgy 62. Purok 4. Sawanga', 0),
(256, 'Brgy 62. Purok 5. Sawanga', 0),
(257, 'Brgy 62. Purok 6. Sawanga', 0),
(258, 'Brgy 62. Purok 7. Sawanga', 0),
(259, 'Brgy 63. purok 1. Sugod', 0),
(260, 'Brgy 63. purok 2. Sugod', 0),
(261, 'Brgy 63. purok 3. Sugod', 0),
(262, 'Brgy 63. purok 4. Sugod', 0),
(263, 'Brgy 63. purok 5. Sugod', 0),
(264, 'Brgy 64. purok 1. Sto. Domingo', 0),
(265, 'Brgy 64. purok 2. Sto. Domingo', 0),
(266, 'Brgy 64. purok 3. Sto. Domingo', 0),
(267, 'Brgy 64. purok 4. Sto. Domingo', 0),
(268, 'Brgy', 64);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
`id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `passcode` varchar(10) NOT NULL,
  `validity` int(5) NOT NULL DEFAULT '1',
  `qset` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

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
(49, 'diane navarro', '9719', 1, ''),
(50, 'John', '4972', 1, ''),
(51, 'John John', '525', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
`id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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

CREATE TABLE IF NOT EXISTS `family_table` (
`id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `chresident_name` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `grade_ave` int(11) NOT NULL,
  `educational` text NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

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
(20, 2639, 1258, 'lea bados', 25, 'Female', 80, 'Highschool', 728),
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
(48, 3592, 4613, 'diane navarro', 16, 'Female', 90, '4th year high school', 9719),
(49, 245, 1394, 'John', 27, 'Male', 85, 'seniorhigh', 4972),
(50, 1352, 753, 'John John', 25, 'Male', 85, 'seniorhigh', 525);

-- --------------------------------------------------------

--
-- Table structure for table `grant_table`
--

CREATE TABLE IF NOT EXISTS `grant_table` (
`id` int(11) NOT NULL,
  `grant_name` text NOT NULL,
  `grade_average` int(11) NOT NULL,
  `annual_income` text NOT NULL,
  `age_average` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `grant_table`
--

INSERT INTO `grant_table` (`id`, `grant_name`, `grade_average`, `annual_income`, `age_average`) VALUES
(1, 'Grant 1', 85, '60000', 15);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `a` varchar(123) NOT NULL,
  `b` varchar(123) NOT NULL,
  `c` varchar(123) NOT NULL,
  `d` varchar(123) NOT NULL,
  `numassign` int(20) NOT NULL,
  `qset` text NOT NULL,
  `answerki` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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

CREATE TABLE IF NOT EXISTS `residents` (
`id` int(11) NOT NULL,
  `resident_id` varchar(255) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `spouse_name` varchar(250) NOT NULL,
  `annual_income` decimal(10,2) NOT NULL,
  `occupation` text NOT NULL,
  `spoccupation` text NOT NULL,
  `educational_attained` text NOT NULL,
  `speducational_attained` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `resident_id`, `resident_name`, `address`, `gender`, `birthday`, `spouse_name`, `annual_income`, `occupation`, `spoccupation`, `educational_attained`, `speducational_attained`) VALUES
(7, '7869', 'jimruzae estigoy', '2', 'Male', '1993-12-30', 'mia cobilla', '20000.00', 'none', 'janitor', 'high school  graduate', 'high school graduate'),
(10, '8659', 'raul pio sr', '2', 'Male', '1970-10-02', 'jimrose ann pio', '100000.00', 'janitor', 'none', 'high school  graduate', 'high school graduate'),
(11, '5097', 'rowel perfecto', '3', 'Male', '1960-11-23', 'julie perfecto', '60000.00', 'driver', 'labandera', 'college undergraduate', 'kinder'),
(12, '4906', 'lea navarro', '3', 'Female', '1960-12-31', 'kolot  dizon', '80000.00', 'teacher', 'tambay', 'college', 'elementary'),
(13, '4051', 'leo anas arevalo', '4', 'Male', '1982-08-23', 'none', '50000.00', 'teacher', 'none', 'college graduate', 'none'),
(14, '2639', 'joan bados', '4', 'Female', '1967-09-23', 'joel bados', '50000.00', 'staff', 'staff', 'college undergraduate', 'high school graduate'),
(15, '2470', 'jojo bulate', '5', 'Male', '1961-11-22', 'nene bulate', '40000.00', 'teacher', 'housewife', 'college graduate', 'elementary'),
(16, '4871', 'onyo indi', '5', 'Male', '1967-11-23', 'onyi indi', '80000.00', 'staff', 'housewife', 'high school  graduate', 'high school graduate'),
(17, '9451', 'amings escalante', '5', 'Male', '1956-11-21', 'mila escalante', '50000.00', 'teacher', 'housewife', 'college graduate', 'high school graduate'),
(18, '2193', 'amanda yuzon kog', '6', 'Female', '1966-11-21', 'alejandro kog', '60000.00', 'guard', 'guard', 'college graduate', 'high school graduate'),
(19, '0857', 'pio gurang', '6', 'Male', '1993-11-23', 'n/a', '80000.00', 'staff', 'n/a', 'college', 'na'),
(20, '8965', 'richie real', '7', 'Male', '1980-11-21', 'heidy real', '50000.00', 'staff', 'staff', 'college', 'college'),
(21, '3684', 'sit duazo', '7', 'Female', '1970-10-25', 'lolo duazo', '60000.00', 'staff', 'staff', 'college graduate', 'high school graduate'),
(22, '1846', 'steve ar', '8', 'Male', '1989-11-22', 'ivy', '50000.00', 'staff', 'staff', 'high school  graduate', 'high school graduate'),
(23, '7910', 'emy', '8', 'Famale', '1980-10-21', 'toro', '80000.00', 'staff', 'staff', 'high school  graduate', 'college'),
(24, '3592', 'lea navarro', '9', 'Famale', '1960-12-31', 'kolot  dizon', '80000.00', 'teacher', 'tambay', 'college graduate', 'college'),
(25, '0245', 'Joseph, Jesp Joel', '1', 'Male', '1990-02-12', 'Joseph, Jessie jane', '50000.00', 'Driver', 'Driver', 'HighSchool', 'HighSchool'),
(26, '1352', 'Joseph, Jesp Joel3', '1', 'Male', '1992-03-04', 'Joseph, Jessie janee', '30000.00', 'padjak', 'tindera', 'HighSchool', 'HighSchool');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0);

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
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=269;
--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `family_table`
--
ALTER TABLE `family_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `grant_table`
--
ALTER TABLE `grant_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
