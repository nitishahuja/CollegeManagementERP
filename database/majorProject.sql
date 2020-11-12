SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MajorProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `Academic_Details`
--

CREATE TABLE `Academic_Details` (
  `EnrollmentNo` int(11) NOT NULL,
  `Course_Name` varchar(25) NOT NULL,
  `OngoingYear` tinyint(4) NOT NULL,
  `OngoingSemester` tinyint(4) NOT NULL,
  `Overall_CGPA` decimal(4,2) NOT NULL,
  `Current_CGPA` decimal(4,2) NOT NULL,
  `Backlogs` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Academic_Details`
--

INSERT INTO `Academic_Details` (`EnrollmentNo`, `Course_Name`, `OngoingYear`, `OngoingSemester`, `Overall_CGPA`, `Current_CGPA`, `Backlogs`) VALUES
(1000007145, 'Computer Science', 2, 3, '6.87', '7.11', 0),
(1000007187, 'Civil', 3, 5, '5.74', '6.05', 1),
(1000007352, 'Petroleum', 4, 7, '7.45', '8.38', 0),
(1000007745, 'Computer Science', 1, 1, '0.00', '0.00', 0),
(1000008512, 'Petroleum', 2, 3, '3.24', '2.16', 7),
(1000008567, 'Computer Science', 2, 3, '7.66', '7.19', 1),
(1000008654, 'Civil', 2, 3, '6.58', '7.09', 2),
(1000008732, 'Mechanical', 2, 3, '6.61', '5.72', 3),
(1000008745, 'Mechanical', 2, 3, '7.68', '8.12', 0),
(1000008762, 'Civil', 1, 1, '0.00', '0.00', 0),
(1000008787, 'Computer Science', 3, 5, '5.95', '6.17', 1),
(1000008789, 'Mechanical', 3, 5, '6.89', '6.57', 2),
(1000008790, 'Mechanical', 4, 7, '5.94', '6.78', 1),
(1000008792, 'Computer Science', 3, 5, '7.65', '8.05', 1),
(1000008799, 'Civil', 2, 3, '8.12', '8.78', 0),
(1000008865, 'Computer Science', 4, 7, '7.13', '7.56', 0),
(1000008876, 'Computer Science', 3, 5, '7.36', '7.54', 0),
(1000008889, 'Petroleum', 2, 3, '7.17', '8.32', 0),
(1000008989, 'Petroleum', 2, 3, '4.79', '5.13', 4),
(1000010415, 'Mechanical', 1, 1, '0.00', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `EnrollmentNo` int(11) NOT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`EnrollmentNo`, `Password`) VALUES
(1000007145, 'Bhavyam3292@'),
(1000007187, 'deepakS@1231'),
(1000007352, 'piyusg@7854'),
(1000007745, 'ramk2341@'),
(1000008512, 'manishK@0923'),
(1000008567, 'riyaT@7832'),
(1000008654, 'akshatP@0101'),
(1000008732, 'akashS@1212'),
(1000008745, 'ashishG@9121'),
(1000008762, 'ajayN@1001'),
(1000008787, 'arpitP@2400'),
(1000008789, 'sourabhJ@1111'),
(1000008790, 'yahT@9999'),
(1000008792, 'ritikP@1299'),
(1000008799, 'samantS@2211'),
(1000008865, 'tusharG@1999'),
(1000008876, 'somyaG@7777'),
(1000008889, 'aviS@5544'),
(1000008989, 'vivekA@4444'),
(1000010415, 'aniket@2621');

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceDetails`
--

CREATE TABLE `AttendanceDetails` (
  `EnrollmentNo` int(11) NOT NULL,
  `Subject_Name` varchar(30) DEFAULT NULL,
  `Attendance` varchar(12) DEFAULT NULL,
  `Total_Sessions_Held` int(11) DEFAULT NULL,
  `Total_Absent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AttendanceDetails`
--

INSERT INTO `AttendanceDetails` (`EnrollmentNo`, `Subject_Name`, `Attendance`, `Total_Sessions_Held`, `Total_Absent`) VALUES
(1000007145, 'Java', 'Absent', 12, 4),
(1000007145, 'Operating System', 'Present', 8, 3),
(1000007145, 'Automata', 'Present', 9, 0),
(1000007187, 'Structure Analysis', 'Absent', 12, 1),
(1000007187, 'Geology', 'Present', 4, 1),
(1000007187, 'Strength Of Materials', 'Absent', 6, 3),
(1000007352, 'Cell Biology', 'Present', 21, 9),
(1000007352, 'Fluid Mechanics', 'Present', 13, 7),
(1000007352, 'Thermodynamics', 'Present', 18, 9),
(1000007745, 'Engineering Maths', 'Absent', 7, 4),
(1000007745, 'Programming With C', 'Present', 8, 0),
(1000007745, 'Engineering Physics', 'Present', 13, 5),
(1000008512, 'Mathematics III', 'Absent', 19, 3),
(1000008512, 'Fuel Analysis', 'Present', 12, 3),
(1000008512, 'Combustion and Heat', 'Present', 22, 7),
(1000008567, 'Operating system', 'Present', 12, 0),
(1000008567, 'Python Programming', 'Present', 21, 5),
(1000008567, 'Data Structures', 'Present', 12, 3),
(1000008654, 'Concrete Analysis', 'Present', 24, 8),
(1000008654, 'Thermodynamics', 'Present', 21, 6),
(1000008654, 'Structure Analysis', 'Absent', 23, 2),
(1000008732, 'Strength Of Materials', 'Present', 5, 1),
(1000008732, 'Mathematics III', 'Present', 26, 11),
(1000008732, 'Automobile Engineering', 'Present', 12, 4),
(1000008745, 'Mathematics III', 'Absent', 12, 1),
(1000008745, 'Heat Transfer', 'Absent', 16, 5),
(1000008745, 'Aerodynamics', 'Present', 19, 7),
(1000008762, 'Engineering Drawing', 'Absent', 15, 0),
(1000008762, 'Engineering Chemistry', 'Present', 19, 8),
(1000008762, 'Mathematics I', 'Present', 23, 11),
(1000008787, 'Data Algorithms', 'Present', 15, 5),
(1000008787, 'Artificial Intelligence', 'Present', 12, 7),
(1000008787, 'Web Development', 'Absent', 6, 1),
(1000008789, 'Hydraulics', 'Present', 17, 2),
(1000008789, 'Fluid Mechanics', 'Present', 15, 1),
(1000008789, 'Statics and Dynamics', 'Present', 25, 10),
(1000008790, 'Machine Design', 'Absent', 12, 9),
(1000008790, 'Vehicle Dynamics', 'Present', 15, 8),
(1000008790, 'Steam And Gas Turbines', 'Absent', 20, 14),
(1000008792, 'Linux Programming', 'Present', 19, 4),
(1000008792, 'Machine Learning', 'Absent', 18, 6),
(1000008792, 'Data Mining', 'Absent', 20, 4),
(1000008799, 'Soil Mechanics', 'Present', 18, 2),
(1000008799, 'Water Resource Management', 'Present', 20, 0),
(1000008799, 'Surveying', 'Present', 18, 8),
(1000008865, 'Data Science', 'Present', 25, 8),
(1000008865, 'Advanced DBMS', 'Absent', 19, 6),
(1000008865, 'Parallel Computing', 'Present', 17, 7),
(1000008876, 'Machine Learning', 'Absent', 16, 9),
(1000008876, 'Artificial Intelligence', 'Absent', 22, 6),
(1000008876, 'Web Development', 'Present', 26, 12),
(1000008889, 'Heat And Mass Transfer', 'Present', 16, 7),
(1000008889, 'Mechanical Engineering', 'Present', 18, 4),
(1000008889, 'Drilling Technology', 'Absent', 17, 10),
(1000008989, 'Heat And Mass Transfer', 'Present', 14, 3),
(1000008989, 'Mechanical Engineering', 'Absent', 19, 12),
(1000008989, 'Drilling Technology', 'Absent', 14, 6),
(1000010415, 'Programming With C', 'Present', 14, 3),
(1000010415, 'Engineering Chemistry', 'Present', 19, 10),
(1000010415, 'Mechanics', 'Absent', 15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Notice Board'),
(2, 'Attendance'),
(3, 'Academics'),
(4, 'Fee Payment'),
(5, 'Help');

-- --------------------------------------------------------

--
-- Table structure for table `FeePayment`
--

CREATE TABLE `FeePayment` (
  `EnrollmentNo` int(11) DEFAULT NULL,
  `Amount_To_Be_Paid` bigint(20) DEFAULT NULL,
  `Previous_Amount` bigint(20) DEFAULT NULL,
  `Other_Fee` bigint(20) DEFAULT NULL,
  `Hostel_Fee` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FeePayment`
--

INSERT INTO `FeePayment` (`EnrollmentNo`, `Amount_To_Be_Paid`, `Previous_Amount`, `Other_Fee`, `Hostel_Fee`) VALUES
(1000007145, 102467, 0, 251, 109600),
(1000007745, 108469, 35026, 0, 107800),
(1000007352, 105631, 2507, 54, 109600),
(1000008512, 100985, 0, 0, 102500),
(1000008567, 102467, 985, 32, 110999),
(1000007187, 102713, 500, 19, 101987),
(1000008654, 100985, 404, 101, 112500),
(1000008732, 112467, 650, 511, 10960),
(1000008745, 12407, 120, 2751, 16500),
(1000008762, 108807, 30, 541, 1146),
(1000008787, 22467, 851, 222, 19600),
(1000008789, 12140, 91, 322, 450),
(1000008790, 192140, 517, 169, 2850),
(1000008792, 14158, 51, 11, 9157),
(1000008799, 1219, 714, 129, 9650),
(1000008865, 13401, 510, 1251, 19650),
(1000008876, 121061, 1141, 2351, 2650),
(1000008889, 12144, 5114, 12351, 7250),
(1000008989, 172140, 5137, 12651, 3260),
(1000010145, 191407, 4584, 12301, 91650);

-- --------------------------------------------------------

--
-- Table structure for table `PersonalDetails`
--

CREATE TABLE `PersonalDetails` (
  `Photo` varchar(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) DEFAULT NULL,
  `Mother_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Gmail` varchar(30) DEFAULT NULL,
  `Contact_No` bigint(20) DEFAULT NULL,
  `EnrollmentNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PersonalDetails`
--

INSERT INTO `PersonalDetails` (`Photo`, `Name`, `Father_Name`, `Mother_Name`, `Address`, `Gmail`, `Contact_No`, `EnrollmentNo`) VALUES
('./assets/images/SB8.jpg', 'Bhavyam Chauhan', 'Omkar Chauhan', 'Mahima Chauhan', 'Opp. to Radhe Krishna Temple, Budhana Road, Merrut', 'bhavyamchauhan854@gmail.com', 9657441050, 1000007145),
('./assets/images/SB12.jpg', 'Deepak Sangal', 'Rajesh Sangal', 'Mishti Sangal', 'Near Behal Studios, Delhi', 'sangaldeepak10218@gmail.com', 8459641775, 1000007187),
('./assets/images/SB7.jpg', 'Piyush Garg', 'Nitesh Garg', 'Sanya Garg', 'House No. 702,Near Sai Art Galary, Kamla Colony, Muzzafarpur', 'piyush.garg.65@gmail.com', 9986547120, 1000007352),
('./assets/images/SB17.jpg', 'Ram Kumar', 'Suraj Kumar', 'Rakhi Kumar', 'Opp. to Kamal singh park, Lucknow', 'ramkumar121@gmail.com', 7985413521, 1000007745),
('./assets/images/SB15.jpg', 'Manish Kumar', 'Shrikanth Kumar', 'Rupali Kumar', 'House No.73, Near V.V. Inter College, Budhana Road, Shamli,UP', 'kumarmanish784@gmail.com', 9631420028, 1000008512),
('./assets/images/SB9.jpg', 'Riya Tara', 'Raghav Tara', 'Komal Tara', 'House No. 17,Near Singh Colony, Kamla Colony, Muzzafarpur', 'rtara021@gmail.com', 7584130025, 1000008567),
('0./assets/images/SB18.jpg', 'Akshat Pal', 'Surya Pal', 'Manisha Pal', 'House No.31,Lane 25,South Block,New Delhi', 'Akshat12@gmail.com', 7413058741, 1000008654),
('./assets/images/SB11.jpg', 'Akash Singh', 'Rajbeer Singh', 'Deepti Singh', 'House No 114, Infront of Rajesh Confectionary, Chandni Chowk,New Delhi', 'akashsh68442@gmail.com', 7900641238, 1000008732),
('./assets/images/SB2.jpg', 'Ashish Garg', 'Amit Garg', 'Rashmi Garg', 'Tower No.7, Flat No.414,Sunworld Vanilaka, Noida', 'ashishgrg42@gmail.com', 8641300284, 1000008745),
('./assets/images/SB14.jpg', 'Ajay Narang', 'Rajiv Narang', 'Janvi Narang', 'Tower No.1, Flat No.12,Sunworld Vashishtha, Noida', 'narangajay251220@gmail.com', 7065841125, 1000008762),
('./assets/images/SB10.jpg', 'Arpit Pal', 'Raghuvendra Pal', 'Mokshita Pal', 'House No.65,Op. to New City House,Bombay ', 'pal.arpit745@gmail.com', 9563241007, 1000008787),
('./assets/images/SB3.jpg', 'Sourabh Jain', 'Bhavik Jain', 'Neha Jain', 'Tower No.7, Flat No.14,Sunworld Enclave Noida', 'SourabhJ34@gmail.com', 7541139557, 1000008789),
('./assets/images/SB13.jpg', 'yash tyagi', 'Rajeshwar Tyagi', 'Seema Tyagi', 'Tower No.7, Flat No.12,Sunworld Vanilaka, Noida', 'yashtyagi74@gmail.com', 8541031574, 1000008790),
('0', 'Ritik Pal', 'Vishal Pal', 'Aditi Pal', 'Opp.to Ram Mandir,Ayodhya ', 'ritik12Oal@gmail.com', 7795811240, 1000008792),
('./assets/images/SB19.jpg', 'Samant Singh', 'Tanmay Singh', '', 'House No.321, Near Citi Bank, Karnal', 'tanmaysingh251@gmail.com', 741256698, 1000008799),
('./assets/images/SB4.jpg', 'Tushar Gupta', 'Kapil Gupta', 'Deepa Gupta', 'House No 486, Near Gentlemens showroom,Govind Nagar, Ghaziabad', 'guptatushar665@gmail.com', 985663214, 1000008865),
('./assets/images/SB5.jpg', 'Soumya Gaur', 'Karan Gaur', 'Parul Gaur', 'House No.2, Gali No.3, Teachers Colony ,Gurugram', 'gaursoumya@gmail.com', 7851336952, 1000008876),
('./assets/images/SB1.jpg', 'Avi Sharma', 'Akhil Sharma', 'Vini Sharma', 'Flat No.62, Sunstar King, Noida', 'avi.sharma25@gmail.com', 9844320050, 1000008889),
('./assets/images/SB6.jpg', 'Vivek Arora', 'Kuldeep Arora', 'Preeti Arora', 'Flat No.41,Sunworld Kratika, New Delhi', 'vivekarora@gmail.com', 7855621035, 1000008989),
('./assets/images/SB16.jpg', 'Aniket Rawat', 'Somesh Rawat', 'Surya Rawat', 'House No. 487,Near Sanvi Motors, Saket Colony, Muzzafarnagar', 'anirawat101@gmail.com', 7900623974, 1000010415);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tag`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Online Classes', 'Dr.B.K. Singh', '2020-03-26', 'Screenshot 2020-04-11 at 12.40.59 PM.png', 'Anouncement regarding online classes held by the university', 'covid-19,coronavirus,updates', '', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE `StudentDetails` (
  `EnrollmentNo` int(11) DEFAULT NULL,
  `Course_Name` varchar(30) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `StudentDetails`
--

INSERT INTO `StudentDetails` (`EnrollmentNo`, `Course_Name`, `Name`, `Age`) VALUES
(1000010145, 'Mechanical', 'Aniket rawat', 18),
(1000007745, 'Computer Science', 'Ram Kumar', 18),
(1000007415, 'Computer Science', 'Bhavyam Chauhan', 18),
(1000007157, 'Civil', 'Deepak Sangal', 19),
(1000007352, 'Petroleum', 'Piyush Garg', 20),
(1000008732, 'Mechanical', 'Akash Singh', 20),
(1000008654, 'Civil', 'Akshat pal', 19),
(1000008889, 'Petroleum', 'Avi Sharma', 20),
(1000008876, 'Computer Science', 'Somya Gaur', 20),
(1000008865, 'Computer Science', 'Tushar Gupta', 20),
(1000008789, 'Mechanical', 'Sourabh Jain', 19),
(1000008799, 'Civil', 'Samant singh', 18),
(1000008989, 'Petroleum', 'Vivek Arora', 20),
(1000008745, 'Mechanical', 'Ashish garg', 19),
(1000008787, 'Computer Science', 'Arpit Pal', 19),
(1000008567, 'Computer Science', 'Riya Tara', 19),
(1000008512, 'Petroleum', 'Manish Kumar', 20),
(1000008762, 'Civil', 'Ajay narang', 18),
(1000008790, 'Mechanical', 'yash tyagi', 20),
(1000008792, 'Computer Science', 'Ritik Pal', 19);

-- --------------------------------------------------------

--
-- Table structure for table `SubjectDetails`
--

CREATE TABLE `SubjectDetails` (
  `Subject_Code` varchar(10) NOT NULL,
  `Subject_Name` varchar(30) NOT NULL,
  `Attempted_Credit` decimal(6,5) NOT NULL,
  `Earned_Credit` decimal(6,5) NOT NULL,
  `Graded_Credit` decimal(6,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SubjectDetails`
--

INSERT INTO `SubjectDetails` (`Subject_Code`, `Subject_Name`, `Attempted_Credit`, `Earned_Credit`, `Graded_Credit`) VALUES
('CH-101', 'Engineering Chemistry', '4.00000', '4.00000', '4.00000'),
('CI-101', 'Engineering Drawing', '4.00000', '4.00000', '4.00000'),
('CI-210', 'Structure Analysis', '4.00000', '4.00000', '4.00000'),
('CI-216', 'Soil Mechanics', '3.00000', '3.00000', '3.00000'),
('CI-239', 'Surveying', '3.00000', '3.00000', '3.00000'),
('CI-254', 'Water Resource Management', '3.50000', '3.50000', '3.50000'),
('CI-284', 'Concrete Analysis', '3.50000', '3.50000', '3.50000'),
('CI-332', 'Geology', '2.50000', '2.50000', '2.50000'),
('CS-105', 'Programming With C', '3.50000', '3.50000', '3.50000'),
('CS-201', 'Data Structures', '3.50000', '3.50000', '3.50000'),
('CS-203', 'Java', '3.50000', '3.50000', '3.50000'),
('CS-231', 'Operating System', '4.00000', '4.00000', '4.00000'),
('CS-242', 'Automata', '3.50000', '3.50000', '3.50000'),
('CS-251', 'Python Programming', '4.00000', '4.00000', '4.00000'),
('CS-301', 'Artificial Intelligence', '4.50000', '4.50000', '4.50000'),
('CS-305', 'Linux Programming', '3.50000', '3.50000', '3.50000'),
('CS-311', 'Machine Learning', '4.50000', '4.50000', '4.50000'),
('CS-331', 'Data Algorithms', '4.50000', '4.50000', '4.50000'),
('CS-343', 'Web Development', '4.50000', '4.50000', '4.50000'),
('CS-362', 'Data Mining', '3.00000', '3.00000', '3.00000'),
('CS-414', 'Data Science', '4.50000', '4.50000', '4.50000'),
('CS-423', 'Parallel Computing', '2.50000', '2.50000', '2.50000'),
('CS-441', 'Advanced DBMS', '3.50000', '3.50000', '3.50000'),
('MA-101', 'Mathematics I', '4.50000', '4.50000', '4.50000'),
('MA-102', 'Engineering Maths', '4.50000', '4.50000', '4.50000'),
('MA-103', 'Mathematics III', '5.50000', '5.50000', '5.50000'),
('ME-151', 'Mechanics', '0.00000', '0.00000', '0.00000'),
('ME-252', 'Heat Transfer', '3.50000', '3.50000', '3.50000'),
('ME-271', 'Strength Of Materials', '4.50000', '4.50000', '4.50000'),
('ME-301', 'Aerodynamics', '4.00000', '4.00000', '4.00000'),
('ME-324', 'Mechanical Engineering', '1.50000', '1.50000', '1.50000'),
('ME-343', 'Statics and Dynamics', '4.00000', '4.00000', '4.00000'),
('ME-344', 'Hydraulics', '5.50000', '5.50000', '5.50000'),
('ME-362', 'Machine Design', '4.50000', '4.50000', '4.50000'),
('ME-381', 'Automobile Engineering', '4.50000', '4.50000', '4.50000'),
('ME-453', 'Vehicle Dynamics', '3.00000', '3.00000', '3.00000'),
('ME-462', 'Steam And Gas Turbines', '3.00000', '3.00000', '3.00000'),
('PE-201', 'Combustion and Heat', '2.00000', '2.00000', '2.00000'),
('PE-231', 'Drilling Technology', '5.00000', '5.00000', '5.00000'),
('PE-234', 'Fuel Analysis', '3.50000', '3.50000', '3.50000'),
('PE-265', 'Heat And Mass Transfer', '4.50000', '4.50000', '4.50000'),
('PE-401', 'Cell Biology', '2.50000', '2.50000', '2.50000'),
('PE-406', 'Fluid Mechanics', '3.50000', '3.50000', '3.50000'),
('PE-482', 'Thermodynamics', '4.50000', '4.50000', '4.50000'),
('PY-101', 'Engineering Physics', '4.50000', '4.50000', '4.50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Academic_Details`
--
ALTER TABLE `Academic_Details`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `PersonalDetails`
--
ALTER TABLE `PersonalDetails`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  ADD UNIQUE KEY `EnrollmentNo` (`EnrollmentNo`),
  ADD UNIQUE KEY `EnrollmentNo_2` (`EnrollmentNo`);

--
-- Indexes for table `SubjectDetails`
--
ALTER TABLE `SubjectDetails`
  ADD UNIQUE KEY `Subject_Code` (`Subject_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
