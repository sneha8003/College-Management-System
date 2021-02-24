-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `p_challenged` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `doc_file` varchar(255) NOT NULL,
  `zip_file` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `doc_file`, `zip_file`, `link`, `module_name`, `module_id`) VALUES
(1, '', '10GP Software Testing-Evaluation (Basic Concepts).doc', 'as1.zip', 'https://youtu.be/b4nXnvf8mWk', 'WEB DEVELOPMENT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `attendance_creation_date` date NOT NULL,
  `module_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `class`, `week`, `attendance`, `attendance_creation_date`, `module_name`) VALUES
(1, 'L5', '1', 'week2.xlsx', '2019-04-23', 'WEB DEVELOPMENT'),
(2, 'daf', '6', 'testing .docx', '2019-05-21', 'FSSS');

-- --------------------------------------------------------

--
-- Table structure for table `background_image`
--

CREATE TABLE `background_image` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_full_name` varchar(255) NOT NULL,
  `course_leader_name` varchar(255) NOT NULL,
  `course_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_full_name`, `course_leader_name`, `course_creation_date`) VALUES
(19, 'software', 'software engineering', 'course_leader', '2019-04-04'),
(20, 'DB', 'DATABASE', 'course_leader', '2019-04-24'),
(21, 'fss', 'formal specification', 'course_leader', '2019-04-17'),
(22, 'nibesh', 'adsfadf', 'yo', '2019-05-15'),
(23, 'adaf', 'adfa', 'yo', '2019-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `feedback`) VALUES
(3, 'hello guys'),
(4, 'hello guys'),
(5, 'hello guys'),
(6, 'hello guys'),
(7, 'hello guys'),
(8, 'hello guys'),
(10, 'hello guys'),
(11, 'hello guys'),
(12, 'hello guys'),
(13, 'hello guys'),
(14, 'i am student'),
(15, 'i am student'),
(16, 'i am student'),
(17, 'i am student'),
(18, 'i am student'),
(19, 'i am student'),
(20, 'i am student'),
(21, 'i am student'),
(22, 'hello guys'),
(23, 'i am student'),
(24, 'hello guys'),
(25, 'hello guys'),
(26, 'hello guys'),
(27, 'hello guys'),
(28, 'hello guys'),
(29, 'hello guys'),
(30, 'hello'),
(31, '');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `grade_file` varchar(255) NOT NULL,
  `grade_name` varchar(255) NOT NULL,
  `grade_description` varchar(255) NOT NULL,
  `grade_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `grade_file`, `grade_name`, `grade_description`, `grade_creation_date`) VALUES
(1, 'Final Assessments Schedule (L5 & L6) 2019 (1) (1).docx', 'total grade of l5 students', 'this file contain total grade of l5 students', '2019-04-25'),
(2, 'Doc1.docx', 'total grade of l6 students', 'this file contain total grade of l6 students', '2019-04-10'),
(3, 'testing .docx', 'dfadf', 'adf', '2019-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `library_sites`
--

CREATE TABLE `library_sites` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `u_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_sites`
--

INSERT INTO `library_sites` (`id`, `link`, `u_date`) VALUES
(10, 'www.facebook.com', '2019-04-09'),
(11, 'www.facebook.com', '2019-04-09'),
(12, 'www.facebook.com', '2019-04-09'),
(13, 'http://localhost/gp/admin/admin_homepage.php', '2019-04-16'),
(14, '', '0000-00-00'),
(15, '', '0000-00-00'),
(16, 'www.elearner.com', '2019-04-24'),
(17, 'www.elearner.com', '2019-04-24'),
(18, 'www.elearner.com', '2019-04-24'),
(19, 'https://www.elearners.com/', '2019-04-18'),
(20, 'adsfadf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_full_name` varchar(255) NOT NULL,
  `module_start` date NOT NULL,
  `module_end` date NOT NULL,
  `module_creation_date` date NOT NULL,
  `course_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `module_name`, `module_full_name`, `module_start`, `module_end`, `module_creation_date`, `course_department`) VALUES
(1, 'qwe', 'qwe', '2019-04-11', '2019-04-17', '2019-04-05', 'COMPUTING course'),
(2, 'se', 'software engineering', '2019-04-01', '2019-04-30', '2019-04-24', 'SYSTEM DESIGN course'),
(3, 'FSSS', 'formal specification', '2019-04-01', '2019-04-30', '2019-04-24', 'SYSTEM DESIGN course'),
(4, 'dsafa', 'fadfa', '2019-05-08', '2019-05-14', '2019-06-15', 'adfa course');

-- --------------------------------------------------------

--
-- Table structure for table `module_assign`
--

CREATE TABLE `module_assign` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_creation_date` date NOT NULL,
  `module_leader` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_assign`
--

INSERT INTO `module_assign` (`module_id`, `module_name`, `module_creation_date`, `module_leader`) VALUES
(3, 'FSSS', '2019-04-17', 'dawa01'),
(4, 'se', '2019-04-24', 'dawa02'),
(6, 'FSSS', '2019-04-10', 'dawa02');

-- --------------------------------------------------------

--
-- Table structure for table `module_upload`
--

CREATE TABLE `module_upload` (
  `id` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `chapter_description` varchar(255) NOT NULL,
  `chapter_creation_date` date NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_upload`
--

INSERT INTO `module_upload` (`id`, `week`, `slide`, `chapter_description`, `chapter_creation_date`, `module_name`, `module_id`) VALUES
(2, 2, 'CSY2038_PR1_18_19 (4).docx', 'This topic is realfasdkfalksdkcoal dkas', '2019-04-23', '', NULL),
(3, 3, 'FSSS Notes V2006.pdf', 'This topic is realfasdkfalksdkcoal dkas', '2019-04-24', '', NULL),
(4, 1, 'file_11732.pdf', 'This topic is realfasdkfalksdkcoal dkas', '2019-04-24', '', NULL),
(5, 1, 'demo (1).docx', 'kjhaskdjcslzikj', '2019-04-25', '', NULL),
(6, 3, 'as1.zip', 'This topic is realfasdkfalksdkcoal dkas', '2019-04-23', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `u_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `fname`, `lname`, `u_date`) VALUES
(2, 'hello guys', 'Yogesh', 'dfghjk', '2019-03-19'),
(4, 'hello guys', 'Yogesh', 'yogesh', '2019-04-11'),
(5, 'hello guys', 'dasfgvhdsjfgkb', 'dfghjk', '2019-04-23'),
(6, 'hello guys', 'Yogesh', 'yogesh', '2019-04-18'),
(7, 'hello guys', 'Yogesh', 'yogesh', '2019-04-23'),
(8, 'hello guys', 'Yogesh', 'yogesh', '2019-04-17'),
(9, 'hello this is the course', 'Yogesh', 'yogesh', '2019-04-11'),
(10, 'hello this is the course', 'Yogesh', 'yogesh', '2019-04-08'),
(11, 'adf', 'adf', 'adf', '2019-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `p_challenged` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `archive` varchar(255) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `f_name`, `l_name`, `username`, `password`, `address`, `nationality`, `dob`, `gender`, `p_challenged`, `contact_number`, `email`, `user_type`, `archive`) VALUES
(21, 'Nibesh', 'Raut', 'Nibesh01', '$2y$10$g31Pjma76iMePKPl.fQ6k.jzI211fOBIz/oEIyOd15IOboOa7JyH2', '2019-04-23', 'Nepalese', '0000-00-00', 'Male', 'no', '90987654321', 'nibesh00@gmail.com', 'student', 'yes'),
(22, 'Yogesh', 'Niraula', 'yo', '$2y$10$0Bs6I1RqstZO5/SLIm6deO4sEup8.nevNjUMVoYpB0eFrrebPyMhW', '2019-04-27', 'Nepalese', '0000-00-00', 'Male', 'no', '0987654321', 'yo@gmail.com', 'course_leader', 'yes'),
(23, 'Dawa', 'Sherpa', 'dawa01', '$2y$10$S3hoLi53w6RvJSYrilm0o.E8CADy6HMMjGYDGAC.pmaCAxsYCx5bC', '2019-04-23', 'Nepalese', '0000-00-00', 'Male', 'no', '65837490284', 'dsherp@gmail.com', 'Module_leader', 'yes'),
(24, 'dawa', 'Sherpa', 'dawa02', '$2y$10$lz6AM35H7adsZTVe6G3IROBYznvwHt7NWsgNvOMWgzelnV3xcoSTe', '2019-04-22', 'Nepalese', '0000-00-00', 'Male', 'no', '098765432123', 'dsherp00@gmail.com', 'Module_leader', 'yes'),
(26, 'course_leader', 'course_leader', 'course_leader', '$2y$10$yFLwwkbOGebktt94kR785OwzYIcLTbRaycXZhZVg2IIYbOOvAtccy', '2019-04-17', 'Nepalese', '0000-00-00', 'Male', 'no', '9810268096', 'course_leader00@gmail.com', 'course_leader', 'no'),
(27, 'module_leader', 'module_leader', 'module_leader', '$2y$10$TVKBznE79VM0X4AB6dEmeOjZTERRbgMKaoEMJ1invfRDleEB9S2kS', '2019-04-25', 'Nepalese', '0000-00-00', 'Male', 'no', '9805747342', 'module_leader00@gmail.coom', 'Module_leader', 'no'),
(28, 'student', 'student', 'student', '$2y$10$f5roAjUhChOMlvLjW3LhT.61Wz1F1b5GRTQpM5/4CfzuxiWntRriO', '2019-04-20', 'Nepalese', '0000-00-00', 'Male', 'no', '9848744447', 'student00@gmail.com', 'student', 'no'),
(29, 'nibesh', 'gftf', 'nibesh', '$2y$10$K92y3CzpftjckuT7xDoP/uvUJf0vMNqga20qgrYIK0X9Puj57XG7e', '2019-04-16', 'nepali', '0000-00-00', 'Male', 'no', '9841286860', 'nibeshraut@yahoo.com', 'admin', 'no'),
(30, 'adf', 'adfa', 'adf', '$2y$10$VO6R8duUDSWn38aOkIM/JuJTLEGNABIioAoot4.VX2qOnhC/6S0EK', '2019-04-30', 'adf', '0000-00-00', 'Male', 'no', '-1', 'adf@adsfadf', 'admin', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background_image`
--
ALTER TABLE `background_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_full_name` (`course_full_name`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_sites`
--
ALTER TABLE `library_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_full_name` (`module_full_name`);

--
-- Indexes for table `module_assign`
--
ALTER TABLE `module_assign`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `module_upload`
--
ALTER TABLE `module_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `background_image`
--
ALTER TABLE `background_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `library_sites`
--
ALTER TABLE `library_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `module_assign`
--
ALTER TABLE `module_assign`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `module_upload`
--
ALTER TABLE `module_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `module_id` FOREIGN KEY (`module_id`) REFERENCES `assignment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module_upload`
--
ALTER TABLE `module_upload`
  ADD CONSTRAINT `module_upload_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module_assign` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
