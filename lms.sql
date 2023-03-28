-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 08:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `book_id` int(11) NOT NULL,
  `Ace_no` bigint(20) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(55) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `publisher` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`book_id`, `Ace_no`, `author`, `title`, `edition`, `publisher`) VALUES
(510, 7120, 'A. Silberschatz', 'Operating System Concepts ', 5, 'Addion Wesley'),
(5, 24945, 'Rajkumar Buyya, Christian Vecchiola,S.Thamarai Selvi', 'Matering Cloud Computing', NULL, 'Mc Graw Hill');

-- --------------------------------------------------------

--
-- Table structure for table `facultymaster`
--

CREATE TABLE `facultymaster` (
  `faculty_id` varchar(15) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `no_of_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultymaster`
--

INSERT INTO `facultymaster` (`faculty_id`, `first_name`, `last_name`, `mobile_no`, `no_of_books`) VALUES
('001', 'Basant ', 'Namdeo Sir', 21309481237, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_return`
--

CREATE TABLE `issue_return` (
  `transaction_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `stu_id` varchar(30) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `stu_id` varchar(15) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `no_of_books` int(11) DEFAULT NULL,
  `mobile_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`stu_id`, `first_name`, `last_name`, `no_of_books`, `mobile_no`) VALUES
('IC-2K20-42', 'Kundan', 'Yadav', NULL, 8921397494),
('IC-2K20-43', 'Lokesh ', 'Dangi', 0, 8827037442),
('IC-2K20-44', 'Manaswi ', 'Sharma', 2, 10934803),
('IC-2K20-46', 'Nandni ', 'Rathod', 1, 8321734509),
('IC-2K20-47', 'Nandni', 'Shrivastav', 1, 9824817534);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmaster`
--
ALTER TABLE `bookmaster`
  ADD PRIMARY KEY (`Ace_no`);

--
-- Indexes for table `facultymaster`
--
ALTER TABLE `facultymaster`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `issue_return`
--
ALTER TABLE `issue_return`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`stu_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue_return`
--
ALTER TABLE `issue_return`
  ADD CONSTRAINT `issue_return_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `studentmaster` (`stu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
