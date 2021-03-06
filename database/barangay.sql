-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 05:07 AM
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
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
`id` int(11) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
