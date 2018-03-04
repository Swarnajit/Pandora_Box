-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 05:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `Book_Name` varchar(100) NOT NULL,
  `Author` text NOT NULL,
  `About` varchar(10000) NOT NULL,
  `Language` text NOT NULL,
  `Comment` text NOT NULL,
  `Tags` text NOT NULL,
  `Book_ID` varchar(10) NOT NULL,
  `BookImage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`Book_Name`, `Author`, `About`, `Language`, `Comment`, `Tags`, `Book_ID`, `BookImage`) VALUES
('Oliver Twist', 'Charles Dickens', 'Medieval and Seventeenth Century Europe', '', '', 'Social,Victorian', 'A40E45', 'Oliver_Twist.jpg'),
('Tale of Two Cities', 'Charles Dickens', 'London and Paris during industrial revolution', '', '', 'Social,Victorian', 'A0E568', 'Tale_of_two_cities.jpg'),
('Great Expectations', 'Charles Dickens', 'Exploring the west wild', '', '', 'Social,Victorian', 'A0E600', 'Expectations.jpg'),
('Kate Hannigan', 'Catherine Cookson', 'A Perfect Romance', '', '', 'Romantic', 'A0D434', '2479096.jpg'),
('Gulag Archipelago', 'Aleksandr I. Solzhenitsyn', 'Soviet forced labour camp system', '', '', 'Soviet, Labour Camp, Society', 'A0D495', 'gulag.jpg'),
('Short Stories', 'Leo Tolstoy', 'Short stories by Leo Tolstoy', '', '', 'Russia, Story', 'A0D888', 'Leo.jpg'),
('The Diary of a young girl', 'Anne Frank', 'The Diary of a young girl started two days before Anne Frank\'s thirteenth birthday.In 1942,the Nazis had occupied Holland, and their left their home to go into hiding,as they were Jews. Anne Frank recorded daily events,her personal experiences and her feelings in her diary for the next two years. Cut of  from outside world,she and her family faced hunger,boredom,claustrophobia at living in confined quarters, and the ever-present threat of discovery and death. One day,she and her family were betrayed and taken away to the Bergen-Belsen concentration camp,where she eventually died. It is a record of a sensitive girl\'s tragic experience during one of the worst periods of human history.\r\nThis diary is so powerful that it leaves a deep impact on the mind of its reader.', '', '', 'Experience,World War 2', 'A0D890', '48855.jpg'),
('A Fall of Moondust', 'Arthur C Clarke', 'Time is running out for the passengers and crew of the tourist-cruiser Selene,incarcerated in a sea of chocking lunar dust while,on a the surface,her rescuers find their resources stretched to the limit by the mercilessly unpredictable conditions of a totally alien environment. A brilliantly imagined story of human ingenuity and survival, A Fall of Moondust is a tour-de-force of psychological suspense and sustained dramatic tension.', 'English', ' ', 'Fiction', 'Iv7pvV', '19028858.jpg'),
('adasdas', 'dsadsad', 'sadsadas', 'sdadsad', 'sdsadsa', 'sadsadsa', 'l81fWn', ''),
('sfdsfdsfsdfdsfdf', 'ddfgdfg', 'dfgdfgdfg', 'fdgdfgf', 'fdgdfgfd', 'dfgdfgd', 'e5ov60', '04_08_23_2017_08_30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_handler`
--

CREATE TABLE `order_handler` (
  `book_id` varchar(6) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `status` text NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_handler`
--

INSERT INTO `order_handler` (`book_id`, `user_id`, `status`, `order_date`) VALUES
('A40E45', 'A14Z97', 'passed', '2018-03-03 02:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `user_id` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `lname` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `plan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`user_id`, `fname`, `address`, `phone`, `lname`, `password`, `plan`) VALUES
('A14Z90', 'Swarnajit', '97, B.L.Saha Road', '9804306974', 'Adhikary', 'X5084U9911', NULL),
('A14Z97', 'Anandita', '97,B.L.Saha Road, Pincode-700053', '7699437828', 'Das', 'Ghota123', 'Better'),
('A17Z61', 'Swarnajit', 'shdhasvd', '8981791851', 'Adhikary', 'X7492U8636', NULL),
('A13Z16', 'Adhikary', '97, B.L.Saha Road', '', 'sxfds', 'X3826U8157', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
