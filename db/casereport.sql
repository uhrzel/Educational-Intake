-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 02:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casereport`
--

-- --------------------------------------------------------

--
-- Table structure for table `casereport`
--

CREATE TABLE `casereport` (
  `reporter_id` varchar(12) NOT NULL,
  `case_id` varchar(12) DEFAULT NULL,
  `student_id` varchar(12) DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `case_type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `action_taken` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `evidence` varchar(255) DEFAULT NULL,
  `counselor_comments` text DEFAULT NULL,
  `parent_involvement` varchar(255) DEFAULT NULL,
  `follow_up_actions` text DEFAULT NULL,
  `date_closed` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `casereport`
--

INSERT INTO `casereport` (`reporter_id`, `case_id`, `student_id`, `date_reported`, `case_type`, `description`, `status`, `action_taken`, `notes`, `evidence`, `counselor_comments`, `parent_involvement`, `follow_up_actions`, `date_closed`) VALUES
('', NULL, '1', '2024-01-15', 'bullying', 'SAMPLE DESCRIPTION', 'SAMPLE STATUS', 'SAMPLE ACTION TAKEN', 'SAMPLE NOTES', 'SAMLE EVIDENCE', 'SAMPLE COUNSELOR COMMENTS', 'SMAPEL PARENT INVOLVEMENT', 'SAMPLE FOLLOWUP ACIONS', '2024-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `education_intake`
--

CREATE TABLE `education_intake` (
  `intake_id` int(11) NOT NULL,
  `victim_name` varchar(255) DEFAULT NULL,
  `victim_date_of_birth` date DEFAULT NULL,
  `victim_age` int(11) DEFAULT NULL,
  `victim_sex` enum('Male','Female') DEFAULT NULL,
  `victim_grade_section` varchar(50) DEFAULT NULL,
  `victim_adviser` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_age` int(11) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_age` int(11) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `complainant_name` varchar(255) DEFAULT NULL,
  `complainant_relationship` varchar(255) DEFAULT NULL,
  `complainant_address` text DEFAULT NULL,
  `complainant_contact_number` varchar(20) DEFAULT NULL,
  `respondent_name` varchar(255) DEFAULT NULL,
  `respondent_date_of_birth` date DEFAULT NULL,
  `respondent_age` int(11) DEFAULT NULL,
  `respondent_sex` enum('Male','Female') DEFAULT NULL,
  `respondent_position` varchar(255) DEFAULT NULL,
  `respondent_address` text DEFAULT NULL,
  `respondent_contact_number` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `education_intake`
--

INSERT INTO `education_intake` (`intake_id`, `victim_name`, `victim_date_of_birth`, `victim_age`, `victim_sex`, `victim_grade_section`, `victim_adviser`, `mother_name`, `mother_age`, `mother_occupation`, `father_name`, `father_age`, `father_occupation`, `address`, `contact_number`, `complainant_name`, `complainant_relationship`, `complainant_address`, `complainant_contact_number`, `respondent_name`, `respondent_date_of_birth`, `respondent_age`, `respondent_sex`, `respondent_position`, `respondent_address`, `respondent_contact_number`) VALUES
(23, 'sasasasasasa', '0000-00-00', 0, 'Male', '233333333333333', '2', '2', 0, '', '1', 0, '1', '1', '1', '1', '1', '', '', '', '0000-00-00', 0, 'Male', '', '', 'sa'),
(25, '1', '0000-00-00', 0, 'Male', '', '', '', 0, '', '', 0, '', '', '', '', '', '', '', '', '0000-00-00', 0, 'Male', '', '', ''),
(26, '111111111', '0000-00-00', 0, NULL, '', '', '', 0, '', '', 0, '', '', '', 'sasa', '', '', '', '', '0000-00-00', 0, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(25) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `role` enum('Student','Guidance Counselor') DEFAULT NULL,
  `id` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `role` enum('Student','Guidance Counselor') DEFAULT NULL,
  `id` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `id`) VALUES
(9, 'x', 'x', 'Student', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casereport`
--
ALTER TABLE `casereport`
  ADD PRIMARY KEY (`reporter_id`);

--
-- Indexes for table `education_intake`
--
ALTER TABLE `education_intake`
  ADD PRIMARY KEY (`intake_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_intake`
--
ALTER TABLE `education_intake`
  MODIFY `intake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
