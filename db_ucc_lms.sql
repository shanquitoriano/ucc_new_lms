-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 07:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ucc_lms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `GenerateAndInsertCode` ()   BEGIN
    DECLARE characters CHAR(62) DEFAULT '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    DECLARE randomString VARCHAR(6) DEFAULT '';
    DECLARE generatedCode VARCHAR(15); -- Assuming the total length is 15 (prefix + code)
    DECLARE i INT DEFAULT 1;

    -- Generate a random string
    WHILE i <= 6 DO
        SET randomString = CONCAT(randomString, SUBSTRING(characters, FLOOR(1 + RAND() * 62), 1));
        SET i = i + 1;
    END WHILE;

    -- Combine the prefix with the generated string
    SET generatedCode = CONCAT('ucc-lms-', randomString);

    -- Insert the generated code into the table
    select generatedCode as final_code;

    -- You can add more logic here if needed
END$$

CREATE DEFINER=`` PROCEDURE `InsertAdmin` (IN `p_last_name` VARCHAR(255), IN `p_first_name` VARCHAR(255), IN `p_middle_name` VARCHAR(255), IN `p_email_address` VARCHAR(255), IN `p_status` INT, IN `p_password` VARCHAR(255))   BEGIN
    INSERT INTO admin (last_name, first_name, middle_name, email_address, status, password)
    VALUES (p_last_name, p_first_name, p_middle_name, p_email_address, p_status, p_password);
END$$

CREATE DEFINER=`` PROCEDURE `InsertClass` (IN `p_class_name` VARCHAR(255), IN `p_description` TEXT, IN `p_subject_id` INT, IN `p_faculty_id` INT, IN `p_schedule_id` INT, IN `p_status` INT)   BEGIN
    INSERT INTO class (class_name, description, subject_id, faculty_id, schedule_id, status)
    VALUES (p_class_name, p_description, p_subject_id, p_faculty_id, p_schedule_id, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertClassMaterial` (IN `p_title` VARCHAR(255), IN `p_instruction` TEXT, IN `p_status` INT)   BEGIN
    INSERT INTO class_material (title, instruction, status)
    VALUES (p_title, p_instruction, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertClassworkAssignment` (IN `p_title` VARCHAR(255), IN `p_instruction` TEXT, IN `p_class_id` INT, IN `p_due_date` DATE, IN `p_status` INT)   BEGIN
    INSERT INTO classwork_assignment (title, instruction, class_id, due_date, status)
    VALUES (p_title, p_instruction, p_class_id, p_due_date, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertCourse` (IN `p_course_code` VARCHAR(255), IN `p_course_description` TEXT, IN `p_status` INT)   BEGIN
    INSERT INTO course (name, description, status)
    VALUES (p_course_code, p_course_description, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertFaculty` (IN `p_faculty_lname` VARCHAR(255), IN `p_faculty_fname` VARCHAR(255), IN `p_faculty_mname` VARCHAR(255), IN `p_faculty_rank` INT, IN `p_faculty_email` VARCHAR(255), IN `p_status` INT)   BEGIN
    INSERT INTO faculty (last_name, first_name, middle_name, faculty_rank_id, email_address, status)
    VALUES (p_faculty_lname, p_faculty_fname, p_faculty_mname, p_faculty_rank, p_faculty_email, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertFacultyRank` (IN `p_faculty_rank` VARCHAR(255), IN `p_status` INT)   BEGIN
    INSERT INTO faculty_rank (rank, status)
    VALUES (p_faculty_rank, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertSchedule` (IN `p_new_day` VARCHAR(255), IN `p_new_start` TIME, IN `p_new_end` TIME, IN `p_status` INT)   BEGIN
    INSERT INTO schedule (day, time_start, time_end, status)
    VALUES (p_new_day, p_new_start, p_new_end, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `InsertSubject` (IN `p_subject_code` VARCHAR(255), IN `p_subject_desc` VARCHAR(255), IN `p_subject_units` INT, IN `p_status` INT)   BEGIN
    INSERT INTO subject (code, description, units, status)
    VALUES (p_subject_code, p_subject_desc, p_subject_units, p_status);
END$$

CREATE DEFINER=`` PROCEDURE `new_class` (IN `class_name` VARCHAR(75), IN `class_description` VARCHAR(75), IN `class_subject` VARCHAR(75))   BEGIN
    DECLARE characters CHAR(62) DEFAULT '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    DECLARE randomString VARCHAR(6) DEFAULT '';
    DECLARE generatedCode VARCHAR(15); 
    DECLARE subject int;
    DECLARE i INT DEFAULT 1;
    
    set subject = (select id from subject where subject.code = class_subject);
    
    WHILE i <= 6 DO
        SET randomString = CONCAT(randomString, SUBSTRING(characters, FLOOR(1 + RAND() * 62), 1));
        SET i = i + 1;
    END WHILE;


    SET generatedCode = CONCAT('ucc-lms-', randomString);

IF class_name = "" THEN
select 'some fields are empty';
ELSEIF class_description = "" THEN
SELECT 'some fields are empty';
ELSEIF class_subject = "" THEN
SELECT 'some fields are empty';
ELSE
   insert into class (code, class_name, description, subject_id, faculty_id, schedule_id, status) values (generatedCode, class_name, class_description, subject, '1', '1', '0');
  
END IF;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateAdmin` (IN `p_admin_id` INT, IN `p_last_name` VARCHAR(255), IN `p_first_name` VARCHAR(255), IN `p_middle_name` VARCHAR(255), IN `p_email_address` VARCHAR(255))   BEGIN
    UPDATE admin
    SET last_name = p_last_name,
        first_name = p_first_name,
        middle_name = p_middle_name,
        email_address = p_email_address
    WHERE id = p_admin_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateClass` (IN `p_faculty_id` INT, IN `p_class_name` VARCHAR(255), IN `p_class_desc` TEXT, IN `p_class_subj` INT, IN `p_class_sched` INT)   BEGIN
    UPDATE class
    SET class_name = p_class_name,
        description = p_class_desc,
        subject_id = p_class_subj,
        schedule_id = p_class_sched
    WHERE id = p_faculty_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateClassMaterial` (IN `p_class_id` INT, IN `p_class_title` VARCHAR(255), IN `p_class_instruction` TEXT)   BEGIN
    UPDATE class_material
    SET title = p_class_title, instruction = p_class_instruction
    WHERE id = p_class_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateClassworkAssignment` (IN `p_class_id` INT, IN `p_class_title` VARCHAR(255), IN `p_class_instruction` TEXT, IN `p_class_due` DATE)   BEGIN
    UPDATE classwork_assignment
    SET title = p_class_title,
        instruction = p_class_instruction,
        due_date = p_class_due
    WHERE id = p_class_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateCourse` (IN `p_course_id` INT, IN `p_course_code` VARCHAR(255), IN `p_course_description` TEXT)   BEGIN
    UPDATE course
    SET name = p_course_code,
        description = p_course_description
    WHERE id = p_course_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateFacultyRank` (IN `p_faculty_id` INT, IN `p_faculty_name` VARCHAR(255))   BEGIN
    UPDATE faculty_rank
    SET rank = p_faculty_name
    WHERE id = p_faculty_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateSchedule` (IN `p_schedule_id` INT, IN `p_schedule_day` VARCHAR(255), IN `p_schedule_start` TIME, IN `p_schedule_end` TIME)   BEGIN
    UPDATE schedule
    SET day = p_schedule_day,
        time_start = p_schedule_start,
        time_end = p_schedule_end
    WHERE id = p_schedule_id;
END$$

CREATE DEFINER=`` PROCEDURE `UpdateStudent` (IN `p_student_id` INT, IN `p_student_no` VARCHAR(255), IN `p_student_lname` VARCHAR(255), IN `p_student_fname` VARCHAR(255), IN `p_student_mname` VARCHAR(255), IN `p_student_course` INT, IN `p_student_email` VARCHAR(255), IN `p_student_gender` VARCHAR(10), IN `p_student_bday` DATE)   BEGIN
    UPDATE student
    SET student_no = p_student_no,
        last_name = p_student_lname,
        first_name = p_student_fname,
        middle_name = p_student_mname,
        course_id = p_student_course,
        email_address = p_student_email,
        gender = p_student_gender,
        birthday = p_student_bday
    WHERE id = p_student_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `middle_name` varchar(75) NOT NULL,
  `email_address` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `last_name`, `first_name`, `middle_name`, `email_address`, `password`, `status`) VALUES
(1, 'Ramos', 'Sidney', 'Zata', 'sidney@gmail.com', 'pass123', 0),
(2, 'administrator', 'admin', 'admin', 'system.administrator@ucc-lms.online', 'pass123', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin_info`
-- (See below for the actual view)
--
CREATE TABLE `admin_info` (
`id` int(11)
,`fullname` varchar(152)
,`email_address` varchar(75)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `email_address` varchar(75) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `class_name` varchar(75) NOT NULL,
  `description` varchar(100) NOT NULL,
  `subject_id` varchar(75) NOT NULL,
  `faculty_id` varchar(75) NOT NULL,
  `schedule_id` varchar(75) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `code`, `class_name`, `description`, `subject_id`, `faculty_id`, `schedule_id`, `status`) VALUES
(1, 'ucc-lms-rp4rji', '', 'Programming Fundamentals', '1', '1', '1', 0),
(2, 'ucc-lms-23cNpC', 'Programming 1', 'IT Programming 1', '1', '1', '1', 0),
(3, 'ucc-lms-gxUSIW', 'Database Management', 'IT 102 Database Management', '1', '1', '1', 0);

--
-- Triggers `class`
--
DELIMITER $$
CREATE TRIGGER `get_class_to_audit` BEFORE INSERT ON `class` FOR EACH ROW INSERT INTO class_audit (description, action) VALUES (new.description, "INSERT")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `classword_assignment_submission`
--

CREATE TABLE `classword_assignment_submission` (
  `id` int(11) NOT NULL,
  `submission` datetime NOT NULL DEFAULT current_timestamp(),
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `classwork_assignment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classword_assignment_submission`
--

INSERT INTO `classword_assignment_submission` (`id`, `submission`, `file_name`, `file_path`, `classwork_assignment_id`, `student_id`, `grade`) VALUES
(1, '2023-12-15 19:06:11', 'ASSESSING THE IMPACT OF PROGRAM SELECTION ON ACADEMIC PERFORMANCES OF FIRST YEAR COMPUTER STUDIES.do', 'uploads/657c3323f3080_ASSESSING THE IMPACT OF PROGRAM SELECTION ON ACADEMIC PERFORMANCES OF FIRST YE', 1, 1, 0.99);

-- --------------------------------------------------------

--
-- Table structure for table `classwork_assignment`
--

CREATE TABLE `classwork_assignment` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `instruction` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `due_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classwork_assignment`
--

INSERT INTO `classwork_assignment` (`id`, `title`, `instruction`, `class_id`, `due_date`, `status`) VALUES
(1, 'Learning Management  System', 'Create a management system', 1, '2023-12-12 03:06:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_audit`
--

CREATE TABLE `class_audit` (
  `description` varchar(75) NOT NULL,
  `action` varchar(75) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_count_monthly`
--

CREATE TABLE `class_count_monthly` (
  `count_value` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_enroll`
--

CREATE TABLE `class_enroll` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `date_enroll` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_enroll`
--

INSERT INTO `class_enroll` (`id`, `student_id`, `class_id`, `date_enroll`) VALUES
(1, 2023122024, 1, '2023-12-11 16:46:46');

-- --------------------------------------------------------

--
-- Stand-in structure for view `class_info`
-- (See below for the actual view)
--
CREATE TABLE `class_info` (
`id` int(11)
,`code` varchar(50)
,`class_name` varchar(75)
,`class_description` varchar(100)
,`subject_description` varchar(100)
,`faculty_name` varchar(152)
,`schedule` varchar(75)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `class_material`
--

CREATE TABLE `class_material` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `instruction` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_material`
--

INSERT INTO `class_material` (`id`, `title`, `instruction`, `class_id`, `status`, `created_at`) VALUES
(1, 'Title', 'Create db', 1, 0, '2023-12-11 20:46:43'),
(0, 'Use stored procedure', 'test', 0, 0, '2023-12-24 04:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BS Psychology', 'Bachelor of Science in Psychology', 0, '2023-06-24 10:49:02', '2023-12-10 17:32:21'),
(2, 'BS Mathematics', 'Bachelor of Science in Mathematics', 1, '2023-06-24 10:49:44', '2023-12-10 17:10:06'),
(3, 'BS Computer Science', 'Bachelor of Science in Computer Science', 1, '2023-06-24 10:50:16', '2023-06-25 06:55:10'),
(4, 'BS Information Technology', 'Bachelor of Science in Information Technology', 1, '2023-06-24 10:50:46', '2023-06-24 10:58:45'),
(5, 'BS Information System', 'Bachelor of Science in Information System', 1, '2023-06-24 10:51:15', '2023-06-24 10:58:45'),
(6, 'BS Entertainment and Multimedia Computing', 'Bachelor of Science in Entertainment and Multimedia Computing', 1, '2023-06-24 10:51:51', '2023-06-24 10:58:46'),
(7, 'BPA', 'Bachelor of Public Administration', 1, '2023-06-24 10:52:24', '2023-06-24 11:00:11'),
(8, 'BPA (Special Program)', 'Bachelor of Public Administration (Special Program)', 1, '2023-06-24 10:54:30', '2023-06-24 11:00:22'),
(9, 'BA Communication', 'Bachelor of Arts in Communication', 1, '2023-06-24 10:55:02', '2023-06-24 10:58:47'),
(10, 'AB Political Science', 'Bachelor of Arts in Political Science', 1, '2023-06-24 10:57:52', '2023-06-24 10:58:47'),
(11, 'BSOAD', 'Bachelor of Science in Office Administration', 1, '2023-06-24 11:38:49', '2023-06-24 11:41:52'),
(12, 'BSA', 'Bachelor of Science in Accountancy', 1, '2023-06-24 11:39:11', '2023-06-24 11:41:53'),
(13, 'BSTM', 'Bachelor of Science in Tourism Management', 1, '2023-06-24 11:39:34', '2023-06-24 11:41:53'),
(14, 'BSHM', 'Bachelor of Science in Hospitality Management', 1, '2023-06-24 11:39:59', '2023-06-24 11:41:53'),
(15, 'BSBA-FMGT', 'Bachelor of Science in Business Administration Major in Financial Management', 1, '2023-06-24 11:40:25', '2023-06-24 11:41:54'),
(16, 'BSBA-MKMGT', 'Bachelor of Science in Business Administration Major in Marketing Management', 1, '2023-06-24 11:40:54', '2023-06-24 11:41:54'),
(17, 'BSEM', 'Bachelor of Science in Entrepreneurial Management', 1, '2023-06-24 11:41:23', '2023-06-24 11:41:55'),
(18, 'BSBA-HRM', 'Bachelor of Science in Business Administration Major in Human Resource Management', 1, '2023-06-24 11:41:47', '2023-06-24 11:41:56'),
(19, 'BEED Early Childhood Education', 'Bachelor in Elementary Education Major in Early Childhood Education', 1, '2023-06-24 11:42:41', '2023-06-24 12:09:02'),
(20, 'BEED Special Education', 'Bachelor in Elementary Education Major in Special Education', 1, '2023-06-24 11:43:09', '2023-06-24 12:09:14'),
(21, 'BSE TLE', 'Bachelor in Secondary Education Major in Technology and Livelihood Education', 1, '2023-06-24 11:43:40', '2023-06-24 11:52:30'),
(22, 'BSE Science', 'Bachelor in Secondary Education Major in Science', 1, '2023-06-24 11:44:04', '2023-06-24 11:52:30'),
(23, 'BSE English', 'Bachelor in Secondary Education Major in English', 1, '2023-06-24 11:44:31', '2023-06-24 11:52:30'),
(24, 'BSE Chinese', 'Bachelor in Secondary Education Major in English - Chinese', 1, '2023-06-24 11:45:41', '2023-06-24 11:52:31'),
(25, 'CPE', 'Certificate in Professional Education', 1, '2023-06-24 11:45:59', '2023-06-24 11:52:31'),
(26, 'BS Criminology', 'Bachelor of Science in Criminology', 1, '2023-06-24 11:47:22', '2023-06-24 11:52:31'),
(27, 'DPA', 'Doctor of Public Administration', 1, '2023-06-24 11:48:32', '2023-06-24 11:52:32'),
(28, 'PhD Education Management', 'Doctor of Philosophy major in Education Management', 1, '2023-06-24 11:49:32', '2023-06-24 11:52:32'),
(29, 'MPA', 'Master in Public Administration', 1, '2023-06-24 11:49:46', '2023-06-24 11:52:33'),
(30, 'MBA', 'Master in Business Administration', 1, '2023-06-24 11:49:56', '2023-06-24 11:52:33'),
(31, 'MAT in Early Grades', 'Master of Arts in Teaching in Early Grades', 1, '2023-06-24 11:51:05', '2023-06-24 11:52:36'),
(32, 'MAT in Teaching Science', 'Master of Arts in Teaching Science', 1, '2023-06-24 11:51:32', '2023-06-24 11:52:37'),
(33, 'MAED-EM', 'Master of Arts in Education major in Educational Management', 1, '2023-06-24 11:52:03', '2023-06-24 11:52:37'),
(34, 'MS Criminology', ' Master of Science in Criminology', 1, '2023-06-24 11:52:22', '2023-12-10 16:08:04');

--
-- Triggers `course`
--
DELIMITER $$
CREATE TRIGGER `get_course_to_audit` BEFORE INSERT ON `course` FOR EACH ROW INSERT INTO course_audit (name, action) VALUES (new.name, "INSERT")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course_audit`
--

CREATE TABLE `course_audit` (
  `name` varchar(75) NOT NULL,
  `action` varchar(75) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_class`
--

CREATE TABLE `event_class` (
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `count_result` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `middle_name` varchar(75) NOT NULL,
  `faculty_rank_id` int(11) NOT NULL,
  `email_address` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `last_name`, `first_name`, `middle_name`, `faculty_rank_id`, `email_address`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Flores', 'Emman', 'Flores', 2, 'Emman@gmail.com', 'pass123', 0, '2023-12-11 04:04:55', '2023-12-11 21:54:02');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `get_faculty_to_audit` BEFORE INSERT ON `faculty` FOR EACH ROW INSERT INTO faculty_audit (email_address, action) VALUES (new.email_address, "INSERT")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_audit`
--

CREATE TABLE `faculty_audit` (
  `email_address` varchar(75) NOT NULL,
  `action` varchar(75) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_count_semester`
--

CREATE TABLE `faculty_count_semester` (
  `count_value` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `faculty_info`
-- (See below for the actual view)
--
CREATE TABLE `faculty_info` (
`id` int(11)
,`fullname` varchar(152)
,`rank` varchar(100)
,`email_address` varchar(75)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_rank`
--

CREATE TABLE `faculty_rank` (
  `id` int(11) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_rank`
--

INSERT INTO `faculty_rank` (`id`, `rank`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Professor ', 1, '2023-12-10 16:36:26', '2023-12-10 18:09:43'),
(2, 'Associate Professor I', 1, '2023-12-10 16:52:03', '2023-12-10 17:09:21'),
(3, 'Associate Professor II', 1, '2023-12-10 17:09:49', '2023-12-10 17:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `day` varchar(75) NOT NULL,
  `time_start` varchar(75) NOT NULL,
  `time_end` varchar(75) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `day`, `time_start`, `time_end`, `status`) VALUES
(1, 'Monday', '7:00 am', '10:00 am', 1),
(2, 'Tuesday', '10:00', '01:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_no` varchar(75) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `middle_name` varchar(75) NOT NULL,
  `course_id` int(11) NOT NULL,
  `email_address` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gender` varchar(75) NOT NULL,
  `birthday` varchar(75) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_no`, `last_name`, `first_name`, `middle_name`, `course_id`, `email_address`, `password`, `status`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, '2023122024', 'Quitoriano', 'Shan Matthew', 'Gomez', 5, 'shan@gmail.com', 'pass123', 1, 'Male', '07/15/2003', '2023-12-11 03:04:47', '2023-12-11 21:48:36'),
(2, '2023122025', 'Ramos', 'Sidney Kyla', 'Zata', 5, 'sidney@gmail.com', 'pass123', 1, 'Female', '04/21/2003', '2023-12-11 03:22:05', '2023-12-11 21:48:41');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `get_student_to_audit` BEFORE INSERT ON `student` FOR EACH ROW INSERT INTO student_audit (student_no, action) VALUES (new.student_no, "INSERT")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_audit`
--

CREATE TABLE `student_audit` (
  `student_no` varchar(75) NOT NULL,
  `action` varchar(75) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_count_yearly`
--

CREATE TABLE `student_count_yearly` (
  `count_value` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_info`
-- (See below for the actual view)
--
CREATE TABLE `student_info` (
`id` int(11)
,`student_no` varchar(75)
,`fullname` varchar(152)
,`name` varchar(75)
,`email_address` varchar(75)
,`status` tinyint(1)
,`gender` varchar(75)
,`birthday` varchar(75)
);

-- --------------------------------------------------------

--
-- Table structure for table `student_work`
--

CREATE TABLE `student_work` (
  `id` int(11) DEFAULT NULL,
  `submission` datetime DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL,
  `name` varchar(153) DEFAULT NULL,
  `grade` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` varchar(75) NOT NULL,
  `description` varchar(100) NOT NULL,
  `units` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `description`, `units`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IT 102', 'Programming Fundamentals', 5, 1, '2023-12-10 17:46:34', '2023-12-10 18:21:59');

-- --------------------------------------------------------

--
-- Structure for view `admin_info`
--
DROP TABLE IF EXISTS `admin_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `admin_info`  AS SELECT `admin`.`id` AS `id`, concat(`admin`.`last_name`,', ',`admin`.`first_name`) AS `fullname`, `admin`.`email_address` AS `email_address`, `admin`.`status` AS `status` FROM `admin` ;

-- --------------------------------------------------------

--
-- Structure for view `class_info`
--
DROP TABLE IF EXISTS `class_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `class_info`  AS SELECT `class`.`id` AS `id`, `class`.`code` AS `code`, `class`.`class_name` AS `class_name`, `class`.`description` AS `class_description`, `subject`.`description` AS `subject_description`, concat(`faculty`.`last_name`,', ',`faculty`.`first_name`) AS `faculty_name`, `schedule`.`day` AS `schedule`, `class`.`status` AS `status` FROM (((`class` join `subject` on(`class`.`subject_id` = `subject`.`id`)) join `faculty` on(`class`.`faculty_id` = `faculty`.`id`)) join `schedule` on(`class`.`schedule_id` = `schedule`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `faculty_info`
--
DROP TABLE IF EXISTS `faculty_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `faculty_info`  AS SELECT `faculty`.`id` AS `id`, concat(`faculty`.`last_name`,', ',`faculty`.`first_name`) AS `fullname`, `faculty_rank`.`rank` AS `rank`, `faculty`.`email_address` AS `email_address`, `faculty`.`status` AS `status` FROM (`faculty` join `faculty_rank` on(`faculty`.`faculty_rank_id` = `faculty_rank`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `student_info`
--
DROP TABLE IF EXISTS `student_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `student_info`  AS SELECT `student`.`id` AS `id`, `student`.`student_no` AS `student_no`, concat(`student`.`last_name`,', ',`student`.`first_name`) AS `fullname`, `course`.`name` AS `name`, `student`.`email_address` AS `email_address`, `student`.`status` AS `status`, `student`.`gender` AS `gender`, `student`.`birthday` AS `birthday` FROM (`student` join `course` on(`student`.`course_id` = `course`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
