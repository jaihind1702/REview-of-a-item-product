-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2020 at 05:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `review_list`
--

CREATE TABLE `review_list` (
  `Name` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_list`
--

INSERT INTO `review_list` (`Name`, `Email`, `Comment`) VALUES
('vikas chauhan', 'vikaschauhan.mca@geu.ac.in', 'your Echo device and the latest version of the Alexa app. To speak to Alexa in Hindi, just ask, â€œAlexa, speak in English and Hindi.â€'),
('rahul singh', 'raj1234@gmail.com', 'new speaker and design, Echo Dot is a voice-controlled smart speaker with Alexa, designed for any room. Just ask for music, news, information, control compatible smart home devices and more'),
('karishma singh', 'xyz123@gmail.com', 'Alexa, the brain behind Echo Dot, is built in the cloud, so it is always getting smarter. The more you use Dot, the more Alexa adapts to your speech patterns and vocabulary. ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
