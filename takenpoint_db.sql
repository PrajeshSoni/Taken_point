-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 06:48 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takenpoint_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `email`, `password`) VALUES
(1, 'Prajesh Rojasara', 'admin@demo.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `ap_id` int(255) NOT NULL,
  `ap_date` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`ap_id`, `ap_date`, `u_id`, `post_id`, `status`) VALUES
(6, '2 Feb, 2023 9:35:20 PM', '1', '1', 'Approve'),
(7, '13 Feb, 2023 4:39:18 PM', '1', '4', 'pandding'),
(8, '13 Feb, 2023 4:40:24 PM', '3', '9', 'Rejected'),
(9, '13 Feb, 2023 4:47:10 PM', '4', '6', 'pandding'),
(10, '13 Feb, 2023 4:47:17 PM', '1', '3', 'Rejected'),
(11, '13 Feb, 2023 4:48:00 PM', '8', '7', 'Approve'),
(12, '7 Mar, 2023 6:34:08 PM', '4', '2', 'pandding');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(255) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `add_1` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `com_profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`, `add_1`, `logo`, `city`, `state`, `country`, `zip`, `phone`, `fax`, `email`, `website_url`, `com_profile`, `password`) VALUES
(1, 'Infosys', 'Plot No.1, Rajiv Gandhi Infotech Park, Hinjawadi, Phase-I, Pune, Maharashtra-411057.', 'infosys.png', 'Pune', 'Maharashtra', 'India', '111045', '2147483647', ' +91-80-41032140', 'foundation@infosys.com.', 'https://www.infosys.com/', ' Infosys Limited is an Indian multinational information technology company that provides business consulting, information technology and outsourcing services. The company was founded in Pune and is headquartered in Bangalore. ', 'infosys'),
(2, 'Tcs', 'Tata Consultancy ServicesGandhinagar, Gujarat ', 'TCS.NS_BIG.png', 'Gandhinagar', 'Gujarat', 'India', '382007', '2147483647', '022-66303672 ', 'investor.relations@tcs.com', 'http://https://www.tcs.com', ' Tata Consultancy Services is an Indian multinational information technology services and consulting company with its headquarters in Mumbai. It is a part of the Tata Group and operates in 150 locations across 46 countries. ', 'tcs'),
(3, 'Info edge', 'Ground Floor, GF-12A, 94, Meghdoot Building, Nehru Place,', 'NAUKRI.NS_BIG.png', 'New Delhi', 'Delhi', 'India', '110001', '2147483647', '0120-3082095.', 'investors@naukri.com', 'http://www.infoedge.in', ' As one of the very few profitable pure play internet companies in the country, Info Edge is India?Äôs premier online classifieds company in recruitment, matrimony, real estate, education and related services. ', 'infoedge'),
(4, 'Wipro', ' Plot no 1, 7, 8 & 9, Block DM, Sector V, Salt Lake, Kolkata ', 'WIT_BIG.png', 'Kolkata', 'Kolkata', 'India', '700106', '2147483647', '033 23675020.', 'reachus@wipro.com', 'https://www.wipro.com', ' Wipro Limited is an Indian multinational corporation that provides information technology, consulting and business process services. Thierry Delaporte is serving as CEO and managing director of Wipro since July 2020. ', 'wipro'),
(5, 'Accenture', 'RMZ Ecospace ?Ä? Campus 2A & 2B Marathahalli - Sarjapur Outer Ring Road, Varthur, Hobli, Bellandur, Bengaluru, Karnataka ', 'Accenture.png', 'Bengluru', 'Karnataka', 'India', '560103', '2147483647', '1-800-444-4444', 'myemail.accenture.com', 'https://www.accenture.com', ' Accenture plc is an Irish-American professional services company based in Dublin, specializing in information technology services and consulting. A Fortune Global 500 company, it reported revenues of $61.6 billion in 2022. ', 'accenture12'),
(6, 'Microsoft', '807, New Delhi House, Barakhamba Road, New Delhi ?Ä? 110001, India.', 'job_logo_4.jpg', 'New Delhi', 'Delhi', 'India', '110001', '2147483647', '(425) 706-7329', 'support@microsoft.com', 'https://www.Microsoft.com', ' Microsoft Corporation is an American multinational technology corporation producing computer software, consumer electronics, personal computers, and related services ', 'Microsoft'),
(7, 'Oracle Financial Services Software', '23rd Floor, GIFT Tower 1, Gujarat International Finance Tec-City, Gandhinagar, Gujarat 382355', 'Oracle.png', 'Gandhinagar', 'Gujarat', 'India', '382355', '2147483647', ' 22 6718 3000 ', 'investors-vp-ofss_in_grp@oracle.com', 'https://oracle.com', ' Oracle Financial Services Software Limited is a subsidiary of Oracle Corporation. It is a retail banking, corporate banking, and insurance technology solutions provider for the banking industry ', 'oracle'),
(8, 'HCL', ' Address: 304, 3rd Floor H K House, Opposite Bata Showroom, Ashram Road, Ahmedabad, Gujarat 380009 India. ', 'HCL.png', 'Ahmedabad', 'Gujrat', 'India', '380009', '2147483647', ' 0120 430 6000.', 'anada_sales@hcl.in', 'https://www.HCL.com', ' HCL Technologies Limited, d/b/a HCLTech, is an Indian multinational information technology services and consulting company headquartered in Noida. It emerged as an independent company in 1991 when HCL entered into the software services business.  ', 'HCL'),
(9, 'Tech Mahindra', 'urvey No. 602/3, 138, SEZ Ave, Elcot Sez, Sholinganallur, Chennai, Tamil Nadu 600119', 'TechMahindra.png', 'chennai', 'Tamilnadu', 'India', '600119. ', '2147483647', '80 4058 5200.', 'investor.relations@techmahindra.com', 'https://www.Techmahindra.com', 'Tech Mahindra is an Indian multinational information technology services and consulting company. Part of the Mahindra Group, the company is headquartered in Pune and has its registered office in Mumbai ', 'Techmahi'),
(10, 'Intel', 'Santa Clara, California.', 'intel.png', 'Santa Clara', ' California.', 'California.', '95054-1549', '2147483647', '(+1) 916-377-7000', 'info@intel.com', 'https://www.intel.com', 'Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California. It is the world\'s largest semiconductor chip manufacturer by revenue, and is one of the developers of the x86 series of instruction', 'intel');

-- --------------------------------------------------------

--
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `post_id` int(255) NOT NULL,
  `com_id` varchar(255) NOT NULL,
  `con_person` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `edu_level` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `min_salary` varchar(255) NOT NULL,
  `max_salary` varchar(255) NOT NULL,
  `job_des` longtext NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`post_id`, `com_id`, `con_person`, `title`, `department`, `city`, `state`, `country`, `edu_level`, `job_type`, `min_salary`, `max_salary`, `job_des`, `post_date`, `post_by`) VALUES
(1, '1', 'Jigar Parmar', 'HR Management', 'HR Management', 'Ahmedabad', 'Gujrat', 'India', 'BBA , MBA', 'Part Time', '20,000', '30,000', 'Planning, coordinating, and supervising the employment of new employees are the responsibilities of HR managers. In addition to acting as a liaison between management and staff, they advise business executives on strategic planning. The role of an HR mana', 'Sun Mar 12 14:30:13 IST 2023', 'Jigar Parmar, Hr Manager'),
(2, '2', 'Ravi gohil', 'Software Engineer', 'IT Department', 'New Delhi', 'Maharastra', 'India', 'BCA , MCA', 'Full Time', '30,000', '50,000', 'Developing and directing software system validation and testing methods. Directing our software programming initiatives. Overseeing the development of documentation. Working closely with clients and cross-functional departments to communicate project stat', '2023-01-07', 'Ravi gohil,hr manager'),
(3, '3', 'Radhika satapara', 'web developer', 'It', 'Vadodara', 'Gujarat', 'India', 'BCA , MCA', 'Part-time', '20,000', '40,000', 'Designing user interfaces and navigation menus.\r\nWriting and reviewing code for sites, typically HTML, XML, or JavaScript.\r\nIntegrating multimedia content onto a site.\r\nTesting web applications.\r\nTroubleshooting problems with performance or user experienc', '2023-01-04', 'Radhika satapara, hr manager'),
(4, '5', 'Janvi Mokasana', 'Database administrator', 'IT Department', 'Surat', 'Gujarat', 'India', 'BCA,MCA', 'Full time', '30,000', '40,000', 'as a database administrator (DBA) will be the performance, integrity and security of a database. You\'ll be involved in the planning and development of the database, as well as in troubleshooting any issues on behalf of the users. You\'ll ensure that: data ', '2023-01-01', 'Janvi Mokasana,hr manager'),
(5, '6', 'Tejas Pandya', 'Social media manager ', 'Developing', 'Mumbai', 'Maharasta', 'India', 'BBA , MBA', 'Full time', '20,000', '40,000', 'A Social Media Manager is responsible for overseeing a company\'s interactions with the public by implementing social media platforms\' content strategies.', '2023-01-03', 'Radhika Satapara , hr manager'),
(6, '6', 'Mitesh Satapara', 'Marketing manager ', 'Marketing', 'Ahmedabad', 'Gujarat', 'India', 'MBA', 'part- time', '30,000', '50,000', 'A marketing manager would undertake market research, understand the trends and customer preferences, create marketing strategy and budgets, oversee the creation of marketing materials and content, and perform all other relevant tasks essential for increas', '2023-01-04', 'Mitesh Satapara , hr manager'),
(7, '7', 'Amit Shah', ' Information systems manager ', ' Information Department', 'Surat', 'Gujrat', 'India', 'B Tech', 'full time', '25,000', '40,000', 'An information systems manager knows everything about hardware and software. They oversee the use of technology in a business or organization and their primary role is to design, manage, and monitor information systems by overseeing a team of specialists ', '2023-01-11', 'Amit Shah , hr manager'),
(8, '8', 'Meet Patel', 'International Project Manager.', 'Technical Department', 'Baroda', 'Gujrat', 'India', 'B-tech', 'Full time', '45,000', '60,000', 'As an international project manager, you oversee employees who work in different countries and regularly obtain status updates of a project\'s progress. ', '2023-01-09', 'Meet Patel , hr manager'),
(9, '9', 'Raj Jain', 'Network administrator', 'IT Department', 'Ahmedabad', 'Gujrat', 'India', 'BTech', 'Part-time', '20,000', '30,000', 'The Network Administrator\'s role is to ensure the stable operation of the computer networks. This includes planning, developing, installing, configuring, maintaining, supporting, and optimizing all network hardware, software, and communication links.', '2022-12-22', 'Raj Jain , hr manager'),
(10, '10', 'Moxa Soni', 'Data Scientist ', 'Data Science', 'Bangalore', 'Karnataka', 'India', 'BSC', 'part time', '30,000', '50,000', 'A Data Scientist is a professional who collects large amounts of data using analytical, statistical, and programmable skills.', '2023-01-03', 'Moxa Soni , hr manager');

-- --------------------------------------------------------

--
-- Table structure for table `my_resume`
--

CREATE TABLE `my_resume` (
  `mr_id` int(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_resume`
--

INSERT INTO `my_resume` (`mr_id`, `u_id`, `pdf_file`) VALUES
(1, '1', 'PrajeshSoni_InternshalaResume.pdf'),
(2, '2', 'rsresume.pdf'),
(3, '3', 'isresume.pdf'),
(4, '4', 'kpresume.pdf'),
(5, '5', 'msresume.pdf'),
(6, '6', 'jpresume.pdf'),
(7, '7', 'tpresume.pdf'),
(8, '8', 'msresume.pdf'),
(9, '9', 'ksresume.pdf'),
(10, '10', 'pbresume.pdf'),
(11, '12', 'resume/PrajeshSoni_InternshalaResume.pdf'),
(12, '13', 'resume/PrajeshSoni_InternshalaResume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `u_age` varchar(255) NOT NULL,
  `p_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `u_name`, `b_date`, `u_age`, `p_no`, `password`) VALUES
(1, 'Prajesh180@gmail.com', 'Prajesh rojasara', '2003-3-12', '21', '9054145122', 'Prajesh1803'),
(2, 'radhikasatapara1112@gmail.com', 'Radhika Satapara', '2002-02-28', '22', '9974433371', 'radhika1211'),
(3, 'ishasoni12@gmail.com', 'Isha Soni', '2000-03-15', '24', '6598324562', 'isha12'),
(4, 'Kuldeep1009@gmail.com', 'kuldeep Satapara', '2002-05-22', '21', '9985632567', 'kuldeep_0910'),
(5, 'moxasoni256@gmail.com', 'moxa soni', '2000-03-29', '24', '6832659742', 'moxa256'),
(6, 'Janvimokasana2113@gmail.com', 'Janvi Prajapati', '2004-06-11', '20', '6598321658', 'janviprajapati234'),
(7, 'tejaspandya2364@gmail.com', 'Tejas Pandya', '2000-07-16', '24', '6953146523', 'tejas467'),
(8, 'mitprajapati2401@gmail.com', 'Mitesh Satapara', '1999-01-24', '26', '6355133543', 'mitesh2707'),
(9, 'kaushik1909@gmail.com', 'Kaushik Satapara', '1998-04-20', '26', '8132569873', 'kaushik_1909'),
(10, 'paranjaybarot1904@gmail.com', 'Paranjay Barot', '1996-10-20', '28', '5632145697', 'barot@0491');

-- --------------------------------------------------------

--
-- Table structure for table `user_resume`
--

CREATE TABLE `user_resume` (
  `re_id` int(255) NOT NULL,
  `u_id` int(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_resume`
--

INSERT INTO `user_resume` (`re_id`, `u_id`, `education`, `skill`, `experience`) VALUES
(1, 1, 'BCA', 'Computer Literacy', '1 Year'),
(2, 2, 'BBA', 'Marketing', 'Fresheres'),
(3, 3, 'BSc', 'Project Management', '3 years'),
(4, 4, 'MBA', 'Management', '1 Year'),
(5, 5, 'BCA', 'Web Developing', '1 Year'),
(6, 6, 'MCA', 'Software Engineer', '5 Years'),
(7, 7, 'Btech', 'Graphic Designing', '2 Year'),
(8, 8, 'BBA', 'Social Media management', '1 Year'),
(9, 9, 'BCA', 'Web Developing', '2 Year'),
(10, 10, 'Computer Science', 'Full Stack Developer', '8 year'),
(11, 12, 'MCA', 'Php', '5 Year'),
(12, 13, 'MCA', 'laravel', '1 Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `my_resume`
--
ALTER TABLE `my_resume`
  ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_resume`
--
ALTER TABLE `user_resume`
  ADD PRIMARY KEY (`re_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `ap_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `my_resume`
--
ALTER TABLE `my_resume`
  MODIFY `mr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_resume`
--
ALTER TABLE `user_resume`
  MODIFY `re_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
