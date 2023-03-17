-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 02:38 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webclz`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigmentfinshed`
--

CREATE TABLE `assigmentfinshed` (
  `id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigmentfinshed`
--

INSERT INTO `assigmentfinshed` (`id`, `Name`, `Date`, `path`) VALUES
(10, 'gimhan', '2021-05-08 13:02:31', 'gimhantext.docx'),
(11, 'harshalal', '2021-05-08 13:09:38', 'harshalaltext.docx'),
(12, 'harshalal', '2021-05-09 18:53:33', 'harshalal02. C2-4.5.2 Lab - Implement Inter-VLAN Routing - ILM.docx'),
(13, 'gimhan', '2021-05-09 18:54:35', 'gimhan02. C2-4.5.2 Lab - Implement Inter-VLAN Routing - ILM.docx'),
(14, '', '2021-05-27 10:53:39', 'text.pdf'),
(15, 'Harshana', '2021-05-27 10:56:37', 'Harshana02. C2-4.5.2 Lab - Implement Inter-VLAN Routing - ILM.docx'),
(16, 'Harshana', '2021-05-27 10:58:43', 'Harshanaid.pdf'),
(17, 'Harshana', '2021-05-27 11:15:34', 'Harshana4_5979020339219270250.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentsudent`
--

CREATE TABLE `assignmentsudent` (
  `id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmentsudent`
--

INSERT INTO `assignmentsudent` (`id`, `Name`, `date`, `path`) VALUES
(19, 'c1assignment2', '2021-06-01 12:34:10', 'C1casting.layout'),
(20, 'c2assignment1', '2021-06-01 12:35:13', 'C2other.c');

-- --------------------------------------------------------

--
-- Table structure for table `assignstd_cour`
--

CREATE TABLE `assignstd_cour` (
  `id` int(11) NOT NULL,
  `astd_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignstd_cour`
--

INSERT INTO `assignstd_cour` (`id`, `astd_id`, `c_id`) VALUES
(1, 15, 3),
(2, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignup_cour`
--

CREATE TABLE `assignup_cour` (
  `id` int(11) NOT NULL,
  `aup_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignup_cour`
--

INSERT INTO `assignup_cour` (`id`, `aup_id`, `c_id`) VALUES
(1, 9, 3),
(2, 10, 3),
(3, 2, 1),
(4, 3, 1),
(5, 0, 1),
(6, 5, 1),
(7, 2, 2),
(8, 5, 2),
(9, 17, 2),
(10, 17, 1),
(11, 19, 1),
(12, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `no_lessons` int(11) NOT NULL,
  `durations` int(11) NOT NULL,
  `no_projects` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_id`, `course_name`, `no_lessons`, `durations`, `no_projects`, `Description`) VALUES
(1, 'Basic web development', 5, 11, 1, ''),
(2, 'Advance Web Development', 12, 40, 2, ''),
(3, 'Python', 18, 60, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE `coursereg` (
  `R_id` int(11) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Email` text NOT NULL,
  `RegCode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`R_id`, `FName`, `LName`, `Email`, `RegCode`) VALUES
(1, 'Harshana', 'Gamage', 'harshana@gmail.com', 'c10001'),
(2, 'Gimhan', 'Rajapaksha', 'rpgimhansandeeptha@gmail.com', 'c30002'),
(3, 'dasith', 'yapa', 'dasith@gmail.com', 'c20003');

-- --------------------------------------------------------

--
-- Table structure for table `course_1`
--

CREATE TABLE `course_1` (
  `id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `precentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_1`
--

INSERT INTO `course_1` (`id`, `lesson_name`, `precentage`) VALUES
(1, 'HTML', 45),
(2, 'CSS', 95),
(3, 'BOOTSTRAP', 85),
(4, 'Javascript', 60);

-- --------------------------------------------------------

--
-- Table structure for table `course_2`
--

CREATE TABLE `course_2` (
  `id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `precentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_2`
--

INSERT INTO `course_2` (`id`, `lesson_name`, `precentage`) VALUES
(1, 'SQL', 95),
(2, 'PHP', 75),
(3, 'AJAX', 45),
(4, 'Angular', 45);

-- --------------------------------------------------------

--
-- Table structure for table `course_3`
--

CREATE TABLE `course_3` (
  `id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `precentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_3`
--

INSERT INTO `course_3` (`id`, `lesson_name`, `precentage`) VALUES
(1, 'INTRO/ INDENTATION/ COMMENTS', 45),
(2, 'VARIABLES/ DATA TYPES/ NUMBERS', 20),
(3, 'CASTING/ STRINGS/ BOOLEAN', 10),
(4, 'OPERATORS/ COMPLEX DATA TYPES', 30),
(5, 'LIST, TUPLE, SET, DICTIONARY', 15),
(6, 'BASIC CONCEPTS/ IF-ELSE', 5),
(7, 'LOOPING/ FUNCTIONS', 2),
(8, 'LAMBDA/ ARRAY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `L_Id` int(11) NOT NULL,
  `Fname` varchar(80) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `BirthDay` date NOT NULL,
  `Role` text NOT NULL,
  `Pword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`L_Id`, `Fname`, `Lname`, `Email`, `BirthDay`, `Role`, `Pword`) VALUES
(1, 'Shiran', 'Dinushka', 'shirandinushka@gmail.com', '2000-09-29', 'admin', '$2y$10$4cN0PNFpET0dWM1UswE80elBrK0w0OuQA/75b.w8RFvOIREIdTvTe'),
(16, 'harshalal', '', 'harsga@gamil.com', '0000-00-00', 'student', '$2y$10$Ijwf/Cx5n/e5VzAuv0LfAOPPduuJyOkUAZcZ.z30BjFVvbh0nkZge'),
(130, 'kamal', 'radbe', 'kamal@gmail.com', '0000-00-00', 'student', '$2y$10$nPLWcJNZqwNRxkAxm7wt5OWPf0sCbPDL2u4wyHdKda2hUEPCo32ta'),
(138, 'nadeesh', 'kumara', 'nadeesha@gmail.com', '0000-00-00', 'student', '$2y$10$XNZ/gOss6eTM2RdmBPUsg.WstAy7gDBJZlGIVQelK0.wR0czLUCY2'),
(139, 'Harshana', 'Gamage', 'harshana@gmail.com', '2002-07-10', 'student', '$2y$10$v5Fnuu7kcCjwbueGQ.tooub6yyEVF0oYjVzOmL.O0otBkemAELBLW'),
(140, 'Gimhan\r\n', 'Rajapaksha', 'rpgimhansandeeptha@gmail.com', '2021-05-31', 'student', '$2y$10$f6hOlbL8zghtIjCLh2L2M.itz8Po/MHh9V0TY6Q2e48zg.3JVSAly'),
(141, 'dasith ', 'yapa', 'dasith@gmail.com', '2001-06-13', 'student', '$2y$10$bRLWDpKklmolXWfUKujoB.dpfxjp0NGyoOEGYsx37T.02rA.meqMa');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `C_id` int(11) NOT NULL,
  `FromUser` int(11) NOT NULL,
  `ToUser` int(11) NOT NULL,
  `Messages` text NOT NULL,
  `status` varchar(7) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`C_id`, `FromUser`, `ToUser`, `Messages`, `status`, `Time`) VALUES
(1, 138, 1, 'hi', 'read', '2021-05-29 18:08:18'),
(2, 138, 1, 'hi', 'read', '2021-05-29 18:08:18'),
(3, 1, 138, 'hi', 'read', '2021-05-29 17:02:48'),
(4, 1, 138, 'hi', 'read', '2021-05-29 17:03:44'),
(5, 1, 138, 'hi', 'read', '2021-05-29 17:24:36'),
(7, 138, 1, 'hi', 'read', '2021-05-31 09:26:58'),
(47, 130, 1, 'df', 'read', '2021-05-30 19:14:08'),
(50, 130, 1, 'h1', 'read', '2021-05-31 11:26:07'),
(51, 138, 1, 'h', 'read', '2021-05-31 09:56:40'),
(52, 138, 1, 'h', 'read', '2021-05-31 11:24:33'),
(64, 141, 1, 'hi sir', 'read', '2021-06-01 12:35:46'),
(65, 1, 141, 'hi', 'read', '2021-06-01 12:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `N_id` int(11) NOT NULL,
  `N_head` text NOT NULL,
  `N_details` text NOT NULL,
  `C_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`N_id`, `N_head`, `N_details`, `C_id`) VALUES
(1, 'Class Time Update', '12.pm is new class time', 1),
(5, 'Exam', 'june 24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `std_course`
--

CREATE TABLE `std_course` (
  `cour_std_id` int(11) NOT NULL,
  `L_Id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_course`
--

INSERT INTO `std_course` (`cour_std_id`, `L_Id`, `C_id`) VALUES
(2, 16, 1),
(5, 130, 1),
(7, 138, 2),
(15, 139, 1),
(16, 139, 3),
(17, 140, 3),
(18, 141, 2);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `path` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`, `path`, `date`) VALUES
(10, 'chapter1', 'uploadsketch_oct16b.ino', '2021-06-01 11:48:03'),
(11, 'chapter1', 'uploadtenor.gif', '2021-06-01 12:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `upload_cour`
--

CREATE TABLE `upload_cour` (
  `id` int(11) NOT NULL,
  `up_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_cour`
--

INSERT INTO `upload_cour` (`id`, `up_id`, `c_id`) VALUES
(9, 10, 1),
(10, 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigmentfinshed`
--
ALTER TABLE `assigmentfinshed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignmentsudent`
--
ALTER TABLE `assignmentsudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignstd_cour`
--
ALTER TABLE `assignstd_cour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignup_cour`
--
ALTER TABLE `assignup_cour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `coursereg`
--
ALTER TABLE `coursereg`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `course_1`
--
ALTER TABLE `course_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_2`
--
ALTER TABLE `course_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_3`
--
ALTER TABLE `course_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`L_Id`),
  ADD KEY `L_Id` (`L_Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`N_id`);

--
-- Indexes for table `std_course`
--
ALTER TABLE `std_course`
  ADD PRIMARY KEY (`cour_std_id`),
  ADD KEY `L_Id` (`L_Id`,`C_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `upload_cour`
--
ALTER TABLE `upload_cour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigmentfinshed`
--
ALTER TABLE `assigmentfinshed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `assignmentsudent`
--
ALTER TABLE `assignmentsudent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `assignstd_cour`
--
ALTER TABLE `assignstd_cour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignup_cour`
--
ALTER TABLE `assignup_cour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coursereg`
--
ALTER TABLE `coursereg`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_1`
--
ALTER TABLE `course_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_2`
--
ALTER TABLE `course_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_3`
--
ALTER TABLE `course_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `L_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `std_course`
--
ALTER TABLE `std_course`
  MODIFY `cour_std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upload_cour`
--
ALTER TABLE `upload_cour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `std_course`
--
ALTER TABLE `std_course`
  ADD CONSTRAINT `std_course_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `course` (`C_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `std_course_ibfk_2` FOREIGN KEY (`L_Id`) REFERENCES `login` (`L_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
