-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2024 at 02:07 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `job_id` int UNSIGNED NOT NULL,
  `image` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `role` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `job_id`, `image`, `thumb`, `role`) VALUES
(1, 'Mary', 'Smith', 1, 'person1.jpg', 'person1th.jpg', 'Leads the company’s strategic direction, sets high-level goals, and ensures sustainable growth. Responsible for overseeing all departments to achieve the company’s vision.'),
(2, 'Bob', 'Delgado', 2, 'person2.jpg', 'person2th.jpg', 'Builds relationships with clients to understand their needs and provides tailored solutions. Focused on driving revenue growth through customer acquisition and retention.'),
(3, 'Emily', 'Strange', 2, 'person3.jpg', 'person3th.jpg', 'Acts as the primary point of contact between the company and clients, identifying opportunities to provide value. Expert in negotiating deals and closing sales to achieve targets.'),
(4, 'Greg', 'Murphy', 3, 'person4.jpg', 'person4th.jpg', 'Crafts strategies to promote the brand, drive customer engagement, and increase market presence. Analyzes trends to develop effective campaigns that boost sales and awareness.'),
(5, 'Wanda', 'Zymote', 3, 'person5.jpg', 'person5th.jpg', 'Develops creative content and campaigns to enhance brand visibility. Utilizes analytics to optimize digital and offline strategies for reaching target audiences effectively.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`) VALUES
(1, 'CEO'),
(2, 'Sales'),
(3, 'Marketing'),
(4, 'Administrator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
