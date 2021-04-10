-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2019 at 09:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

DROP TABLE IF EXISTS `adv`;
CREATE TABLE IF NOT EXISTS `adv` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `link` text NOT NULL,
  `shows` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`id`, `img`, `title`, `des`, `link`, `shows`) VALUES
(9, '/assets/adv/download.png', 'Facebook', 'Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.', 'www.facebook.com', 0),
(8, '/assets/adv/download.png', 'Facebook', 'Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.', 'www.facebook.com', 1),
(13, '/assets/adv/download.png', 'Facebook', 'Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.', 'www.facebook.com', 0),
(12, '/assets/adv/download.png', 'Facebook', 'Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.', 'www.facebook.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobsoffering`
--

DROP TABLE IF EXISTS `jobsoffering`;
CREATE TABLE IF NOT EXISTS `jobsoffering` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `respons` int(1) NOT NULL DEFAULT '0',
  `image` text,
  `job_tittle` varchar(40) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `job_des` text NOT NULL,
  `job_req` text NOT NULL,
  `salary` varchar(10) NOT NULL,
  `teleNo` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_id` int(8) NOT NULL,
  `accept` int(1) NOT NULL DEFAULT '0',
  `mostview` int(255) NOT NULL DEFAULT '0',
  `job_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobsoffering`
--

INSERT INTO `jobsoffering` (`id`, `respons`, `image`, `job_tittle`, `company_name`, `category`, `address`, `street`, `city`, `job_des`, `job_req`, `salary`, `teleNo`, `email`, `user_id`, `accept`, `mostview`, `job_type`) VALUES
(93, 1, '/assets/img/', 'Project Support', 'Pauxus', 'Part Time', 'Palestine', 'Haras ST', 'Hebron', 'Track the Project Manager progress according to agreed KPIs .', 'Key Capabilities:\r\n1.Problem solving\r\n2.Project management\r\n3.Recovering from setbacks\r\n4.Stakeholder management\r\nTechnical Expertise\r\n1.Microsoft SharePoint\r\n2.MS Project\r\n3.Adobe Acrobat\r\n4.Microsoft Office 365', '1000$', 23698711, 'pauxus@email.com', 14, 1, 0, '0'),
(96, 1, '/assets/img/', 'Project Support', 'Pauxus', 'Part Time', 'Palestine', 'Haras ST', 'Hebron', 'Track the Project Manager progress according to agreed KPIs .\r\n\r\n', 'Key Capabilities:\r\n1.Problem solving\r\n2.Project management\r\n3.Recovering from setbacks\r\n4.Stakeholder management\r\nTechnical Expertise\r\n1.Microsoft SharePoint\r\n2.MS Project\r\n3.Adobe Acrobat\r\n4.Microsoft Office 365', '1000$', 456337, '161010@ppu.edu.ps', 14, 1, 4, 'Goverment'),
(97, 1, '/assets/img/78KB-ccare-2_result-600x400.jpg', 'Childcare Trainer and Assessor', 'Ashley', 'Part Time', 'Palestine', 'Israa St', 'Hebron', 'Ashley Services Group is a large ASX listed group of companies.   Our Training Division has four RTOs and a curriculum company.   \r\nAshley Institute of Training (RTO 20749), one of our registered training organisations, based in Victoria, delivers accredited training in Community Services.\r\n', '1.CHC30113 - Certificate III in Early Childhood Education and Care.\r\n2.CHC50113 Diploma of Early Childhood Education and Care \r\n3.Current Working with Children check\r\n4.2+ years industry experience\r\n5.1+ years training experience (preferred)\r\n4.Enthusiastic, energetic and self-motivated, with a flexible and adaptable attitude in a diverse work environment', '5000 nis', 9965755, 'ashley@email.com', 14, 1, 6, 'Goverment'),
(98, 0, '/assets/img/93318de9c43d08330b0333b4c61d6a79@2x.jpg', 'Cardiac Nurse ', 'Adelaide', 'Full Time', 'Palestine ', 'Old St ', 'Nablus', 'We are currently have a fantastic opportunity for a cardiac nurse to join an established team in the Adelaide metro area at a leading private hospital. This is a chance to push your carrer\r\n', '1.AHPRA Registered Nurse with at least 2 years\r\n2.Experienced cardiac nurse\r\n', '60000 ', 79333325, 'adelaide@email.com', 14, 1, 7, 'Goverment'),
(99, 1, '/assets/img/', 'Mathematics Teacher', 'Wedad Nasser Ideen School', 'Full Time', 'Palestine', 'Wedad St', 'Hebron ', 'actively instruct students, create lesson plans, assign and correct homework, manage students in the classroom, communicate with parents, and help students prepare for standardized testing.', 'Becoming a math teacher requires a bachelorâ€™s degree in mathematics or secondary education and completion of a teacher preparation program. Instructors also must earn state teacher certification through a traditional or alternative pathway.', '3000 nis', 7899655, 'wedad@email.com', 14, 1, 7, 'Goverment'),
(101, 1, '/assets/img/computer-eng-salaries-worldwide_resize_md.jpg', 'Computer SE', 'ASAL', 'Full Time', 'Palestine', 'Israa St', 'Hebron', 'manage and design the computer hardware and software systems of a company. Their duties include developing software systems, updating hardware, and designing new equipment.', 'A bachelor\'s degree is the minimum education required of a computer engineer. Most employers require students to hold a bachelor\'s degree in computer science, computer programming, computer engineering', '2000$', 223575366, 'asal@email.com', 14, 1, 0, '0'),
(102, 1, '/assets/img/', 'Project Support', 'Pauxus', 'Part Time', 'Palestine', 'Haras ST', 'Hebron', 'Track the Project Manager progress according to agreed KPIs .', 'Key Capabilities:\r\n1.Problem solving\r\n2.Project management\r\n3.Recovering from setbacks\r\n4.Stakeholder management\r\nTechnical Expertise\r\n1.Microsoft SharePoint\r\n2.MS Project\r\n3.Adobe Acrobat\r\n4.Microsoft Office 365', '1000$', 23698711, 'pauxus@email.com', 14, 1, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `telNo` int(16) NOT NULL,
  `type` int(2) NOT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `telNo`, `type`, `job_type`) VALUES
(1, 'admin', 'admin123', '161010@ppu.edu.ps', 'Palestine ', 12345, 10, ''),
(13, 'user', 'user', 'user@gmail.com', 'Hebron', 22698712, 0, 'Goverment'),
(14, 'owner', 'owner', 'owner@email.com', 'Hebron', 963325, 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
