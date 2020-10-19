-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2020 at 02:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `contact`, `nic`, `year`) VALUES
(10, 'Kavinda Sumanaweera', 'Parker Rd, NY', 710506378, '199610001595', 2014),
(9, 'Kavinda Sumanaweera', 'Parker Rd, NY', 710506378, '199610001595', 2014),
(8, 'Kavinda Sumanaweera', 'Parker Rd, NY', 710506378, '199610001595', 2014),
(11, 'Kavinda Sumanaweera', 'Parker Rd, NY', 762310909, '199610001595', 2019),
(12, 'Kavinda Sumanaweera', 'Parker Rd, NY', 710506378, '199610001595', 2018),
(13, 'Section 1', 'F/73, University Quarters,, Meewathura, Peradeniya', 710506378, '199610001595', 2018),
(14, 'Section 1', 'F/73, University Quarters,, Meewathura, Peradeniya', 710506378, '199610001595', 2018),
(15, 'Kavinda Sumanaweera', 'F/73, University Quarters,, Meewathura, Peradeniya', 710506378, '199610001595', 2018),
(16, 'Kavinda Sumanaweera', 'F/73, University Quarters,, Meewathura, Peradeniya', 710506378, '199610001595', 2018);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
