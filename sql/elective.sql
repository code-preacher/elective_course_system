-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 01:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elective`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course_code` varchar(11) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `unit_load` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_title`, `unit_load`) VALUES
(1, 'CMP111', 'Introduction to computers', 3),
(2, 'MTH111', 'Foundation of mathematics', 3),
(3, 'STA111', 'Basic statistics', 3),
(4, 'PHY111', 'Mechanics, Properties of matter and heat', 3),
(5, 'PHY191', 'Experimental physics I', 1),
(6, 'CHM111', 'Basic inorganic chemistry', 2),
(7, 'CHM151', 'Basic experimental chemistry', 1),
(8, 'GST111', 'Communication in english 1', 2),
(9, 'GST115', 'History and philosophy of science', 2),
(10, 'GST113', 'Nigeria People and Culture', 2),
(11, 'BIO103', 'History of Biology', 2),
(12, 'CMP122', 'Basic Computer Science', 3),
(13, 'MTH122', 'Calculus', 2),
(14, 'MTH132', 'Applied Mathematics', 3),
(15, 'STA112', 'Probability I', 3),
(16, 'PHY142', 'Electricity and Magnetism', 3),
(17, 'GST112', 'Philosophy and Human Resistance', 3),
(18, 'GST114', 'Use of library,Study skills and Ict', 2),
(19, 'GST116', 'Communication in English II', 2),
(20, 'PHY132', 'Optics Sound and wave', 2),
(21, 'CHM122', 'Basic Physical Chemistry', 2),
(22, 'BIO104', 'Biology for physical science', 2);

-- --------------------------------------------------------

--
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `c7` int(1) NOT NULL,
  `c8` int(1) NOT NULL,
  `c9` int(1) NOT NULL,
  `c10` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f1`
--

INSERT INTO `f1` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'History of Biology (BIO103) *Optional');

-- --------------------------------------------------------

--
-- Table structure for table `f2`
--

CREATE TABLE `f2` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `c7` int(1) NOT NULL,
  `c8` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f2`
--

INSERT INTO `f2` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 'Optics, Sound and Waves (PHY132) *Most Prefered');

-- --------------------------------------------------------

--
-- Table structure for table `f3`
--

CREATE TABLE `f3` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `c7` int(1) NOT NULL,
  `c8` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f3`
--

INSERT INTO `f3` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 'Sets, Logic and Algebra (MTH241) *Optional');

-- --------------------------------------------------------

--
-- Table structure for table `f4`
--

CREATE TABLE `f4` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f4`
--

INSERT INTO `f4` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'Linear Algebra II (MTH242) , Statistical Inference II (STA212) *Most Prefered');

-- --------------------------------------------------------

--
-- Table structure for table `f5`
--

CREATE TABLE `f5` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `c7` int(1) NOT NULL,
  `c8` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f5`
--

INSERT INTO `f5` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 'Elective is not needed,Maximum credit load is 24');

-- --------------------------------------------------------

--
-- Table structure for table `f6`
--

CREATE TABLE `f6` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `c7` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f6`
--

INSERT INTO `f6` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 'Statistical Computing II (STA342) *Optional');

-- --------------------------------------------------------

--
-- Table structure for table `f7`
--

CREATE TABLE `f7` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f7`
--

INSERT INTO `f7` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'Assembly Language Programming (CMP441) , Compiler Construction II (CMP411) *Most Prefered');

-- --------------------------------------------------------

--
-- Table structure for table `f8`
--

CREATE TABLE `f8` (
  `id` int(30) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f8`
--

INSERT INTO `f8` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `result`) VALUES
(1, 1, 1, 1, 1, 1, 'Software Engineering II (CMP432) *Most Prefered');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Oche', 'a@a.com', '123456', 1, '2021-01-30 14:57:12'),
(2, 'Tobi', 't@t.com', '123456', 2, '2021-01-30 20:57:40'),
(4, 'Sandraly', 's@s.com', '123456', 3, '2021-01-30 21:00:51'),
(5, 'Dave', 'BSU/SC/CMP/15/32204', '123456', 3, '2021-02-01 00:51:29'),
(7, 'Peace', 'BSU/SC/CMP/15/32208', '123456', 3, '2021-02-01 00:58:34'),
(8, 'Friday', 'BSU/SC/CMP/15/32202', '123456', 3, '2021-02-01 08:39:36'),
(10, 'Joel Hart', 'BSU/SC/CMP/15/32179', '123456', 3, '2021-03-16 07:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(30) NOT NULL,
  `sender_id` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `sender_id`, `message`, `date_created`) VALUES
(1, '1', 'hello,i need materials for chemistry', '2021-02-01 09:26:45'),
(6, '1', 'Good', '2021-03-16 07:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `score_sheet`
--

CREATE TABLE `score_sheet` (
  `id` int(30) NOT NULL,
  `matno` varchar(30) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `course_code_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score_sheet`
--

INSERT INTO `score_sheet` (`id`, `matno`, `grade`, `course_code_id`) VALUES
(1, '16/44414/UE', 'A', '19'),
(2, '16/44415/UE', 'A', '28'),
(3, '16/44416/UE', 'A', '54'),
(4, '16/44416/UE', 'B', '55'),
(5, '16/44417/UE', 'B', '44'),
(6, '16/44418/UE', 'A', '34'),
(7, '16/44419/UE', 'B', '21'),
(8, '16/44421/UE', 'A', '10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `matno` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `matno`, `password`, `date_created`) VALUES
(1, 'Dave', 'BSU/SC/CMP/15/32204', '123456', '2021-02-01 00:52:47'),
(2, 'Peace', 'BSU/SC/CMP/15/32208', '123456', '2021-02-01 00:58:34'),
(3, 'Friday', 'BSU/SC/CMP/15/32202', '123456', '2021-02-01 08:39:36'),
(5, 'Joel Hart', 'BSU/SC/CMP/15/32179', '123456', '2021-03-16 07:15:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f2`
--
ALTER TABLE `f2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f3`
--
ALTER TABLE `f3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f4`
--
ALTER TABLE `f4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f5`
--
ALTER TABLE `f5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f6`
--
ALTER TABLE `f6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f7`
--
ALTER TABLE `f7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f8`
--
ALTER TABLE `f8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score_sheet`
--
ALTER TABLE `score_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f2`
--
ALTER TABLE `f2`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f3`
--
ALTER TABLE `f3`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f4`
--
ALTER TABLE `f4`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f5`
--
ALTER TABLE `f5`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f6`
--
ALTER TABLE `f6`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f7`
--
ALTER TABLE `f7`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f8`
--
ALTER TABLE `f8`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `score_sheet`
--
ALTER TABLE `score_sheet`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
