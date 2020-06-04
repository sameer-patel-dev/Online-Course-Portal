-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 03:17 PM
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
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `cstartDate` date NOT NULL,
  `cendDate` date NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`, `cstartDate`, `cendDate`, `teacher_id`) VALUES
(1, 'PHP', '2019-12-20', '2020-03-20', 5),
(2, 'JSON', '2019-09-20', '2019-12-18', 5),
(3, 'MySQL', '2019-12-28', '2020-03-28', 0),
(4, 'OOSE', '2019-12-28', '2020-04-28', 5),
(5, 'WP-II', '2020-01-01', '2020-02-29', 4),
(6, 'ECEB', '2020-01-07', '2020-05-31', 4),
(7, 'MP', '2020-02-05', '2020-07-16', 5),
(8, 'testCourse', '0000-00-00', '0000-00-00', 39);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `selectedOption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `student_id`, `quiz_id`, `question_id`, `selectedOption`) VALUES
(3, 2, 1, 1, 'Hypertext Preprocessor'),
(4, 2, 1, 2, '< ? php > ... < ? >'),
(5, 2, 1, 3, ''),
(7, 2, 2, 4, 'Engineered'),
(8, 2, 2, 5, 'Communication'),
(9, 2, 3, 6, 'nothing'),
(10, 2, 4, 7, 'function name( ){ .. }'),
(11, 3, 2, 4, 'Engineered'),
(12, 3, 2, 5, 'Communication'),
(15, 2, 5, 8, 'not set'),
(16, 2, 12, 15, '23'),
(17, 2, 13, 16, 'a'),
(18, 3, 1, 1, 'Hypertext Preprocessor'),
(19, 3, 1, 2, '< ? php ... ? >'),
(20, 3, 1, 3, 'document.write(\"hello world\");'),
(21, 3, 13, 16, 'a'),
(22, 3, 12, 15, '5'),
(23, 3, 12, 15, '5'),
(24, 3, 12, 15, '5'),
(25, 3, 12, 15, '5'),
(26, 3, 12, 15, '5'),
(27, 3, 12, 15, '5'),
(28, 3, 12, 15, '5'),
(29, 3, 12, 15, '5'),
(30, 3, 12, 15, '5'),
(31, 3, 12, 15, '5'),
(32, 3, 5, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `correctOption` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correctOption`) VALUES
(1, 1, 'What does PHP stand for?', 'Hypertext Preprocessor', 'Personal Hypertext Processor', 'Private Home Page', 'None of the above', 1),
(2, 1, 'PHP server scripts are surrounded by which tag?', '< ? php > ... < ? >', '< ? php ... ? >', '< script > ... < /script >', 'None of the above', 2),
(3, 1, 'How do we write \"hello world\" in PHP', 'document.write(\"hello world\");', 'echo \"Hello World\";', 'echo \"hello World\";', 'echo \"hello world\";', 4),
(4, 2, 'Software is', 'Manufactured', 'Engineered', 'Constructed', 'None of the above', 2),
(5, 2, 'Which of the following is not a process framework activity?', 'Communication', 'Planning', 'Documentation', 'Testing', 3),
(6, 3, 'What will be the output of the following PHP code ? < ?php  echo $red ; ? >', '0', 'nothing', 'true', 'error', 2),
(7, 4, 'How do we define a function in PHP?', 'function name( ){ .. }', 'func name( ){ .. }', 'fun name( ){ .. }', 'none of the above', 1),
(8, 5, 'If no expiration time is explicitly set for a cookie, what happens?', 'never expires', 'expires at end of user browser session', 'not set', 'just expires', 2),
(9, 6, 'test', '1', '2', '3', '4', 2),
(10, 7, 'test', '1', '2', '3', '4', 1),
(11, 8, 'test', '1', '2', '3', '4', 1),
(12, 9, 'test', '1', '2', '3', '4', 1),
(13, 10, 'test', '1', '2', '3', '4', 1),
(14, 11, 'test', '1', '2', '3', '4', 1),
(15, 12, 'test', '1', '23', '4', '5', 3),
(16, 13, 'a', 'a', 'a', 'a', 'a', 2),
(17, 14, 'testQuestion', 'test', 'test', 'test', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `quizName` text NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quizName`, `teacher_id`, `course_id`) VALUES
(1, 'PHP Basics', 4, 1),
(2, 'Introduction', 5, 4),
(3, 'PHP Variables', 4, 1),
(4, 'PHP functions', 4, 1),
(5, 'PHP Cookies', 4, 1),
(12, 'PHP abc', 4, 1),
(13, 'PHP xyz', 4, 1),
(14, 'testQuiz', 5, 7),
(15, 'test', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `actualResourceName` text NOT NULL,
  `displayResourceName` text NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `actualResourceName`, `displayResourceName`, `video_id`) VALUES
(1, 'OOSE ppt.pptx', 'PHP Basics ppt', 1),
(2, 'os_struct.ppt', 'PHP variables ppt', 3),
(3, 'OS_UT1(5).pdf', 'PHP Basics pdf', 1),
(4, 'OOSE ppt.pptx', 'PHP Variable ppt', 3),
(5, '1714071_AD5.docx', 'PHP abc', 1),
(6, '1714071_ECEB1.docx', '', 6),
(7, '1714103_MES2.docx', 'Chp 2 PHP', 1),
(8, '1714071_MES2.docx', 'basic functions', 5);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `student_id`, `quiz_id`, `score`) VALUES
(12, 2, 1, 33.33),
(14, 2, 2, 50),
(15, 2, 3, 100),
(16, 2, 4, 100),
(17, 3, 2, 50),
(20, 2, 5, 0),
(21, 2, 12, 0),
(22, 2, 13, 100),
(23, 3, 1, 66.67),
(24, 3, 13, 100),
(25, 3, 12, 0),
(26, 3, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `progress` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `student_id`, `course_id`, `progress`) VALUES
(3, 3, 4, 100),
(6, 2, 4, 100),
(13, 14, 1, 50),
(17, 18, 3, 0),
(18, 18, 1, 0),
(19, 18, 1, 0),
(20, 18, 1, 0),
(21, 18, 1, 0),
(22, 18, 1, 0),
(23, 18, 1, 0),
(26, 2, 1, 100),
(27, 3, 1, 66.67),
(32, 3, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `branch` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `gender`, `branch`, `type`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin@somaiya.edu', 'Female', '', 'admin'),
(3, 'Sameer', 'sameer', 'sameer', 'sameer.patel@somaiya.edu', 'Male', 'Information Technology', 'student'),
(5, 'Sunayana', 'sunayana', 'sunayana', 'mittal.jain@somaiya.edu', 'Female', 'Information Technology', 'teacher'),
(14, 'Sarvesh', 'sarvesh', 'sarvesh', 'sarvesh.pai@somaiya.edu', 'Male', 'Information Technology', 'student'),
(33, 'Khushbu', 'Khushbu', 'Mittal*1999', 'jainkhushbu.kj31@gmail.com', 'Female', 'Information Technology', 'student'),
(38, 'Sameer', 'mysterio', 'Mittal*1999', 'jainmittal13@gmail.com', 'Female', 'Information Technology', 'student'),
(39, 'testTeacher', 'testTeacher', 'testTeacher', 'testTeacher@somaiya.edu', 'Male', 'Information Technology', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `actualVideoName` text NOT NULL,
  `displayVideoName` text NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `actualVideoName`, `displayVideoName`, `course_id`) VALUES
(1, 'file_example_MP4_480_1_5MG.mp4', 'PHP Basics', 1),
(2, 'file_example_MP4_480_1_5MG.mp4', 'Introduction', 4),
(3, 'file_example_MP4_480_1_5MG.mp4', 'PHP Variables', 1),
(5, 'file_example_MP4_480_1_5MG.mp4', 'PHP functions', 1),
(6, 'file_example_MP4_480_1_5MG.mp4', 'ECEB summary', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
