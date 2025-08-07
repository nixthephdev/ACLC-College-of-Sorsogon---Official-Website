-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 09:48 PM
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
-- Database: `aclcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_contents`
--

CREATE TABLE `aboutus_contents` (
  `content_id` int(11) NOT NULL,
  `content_for` int(11) NOT NULL COMMENT '1 = chart, 2 = about us',
  `content_text` text NOT NULL,
  `content_image` text NOT NULL,
  `content_image2` text NOT NULL,
  `content_image3` text NOT NULL,
  `content_image1_status` int(11) NOT NULL,
  `content_image2_status` int(11) NOT NULL,
  `content_image3_status` int(11) NOT NULL,
  `content_active` int(11) NOT NULL,
  `content_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus_contents`
--

INSERT INTO `aboutus_contents` (`content_id`, `content_for`, `content_text`, `content_image`, `content_image2`, `content_image3`, `content_image1_status`, `content_image2_status`, `content_image3_status`, `content_active`, `content_date`) VALUES
(1, 1, '', 'page0001.jpg', 'page0002.jpg', 'page0003.jpg', 1, 1, 1, 0, '2024-05-09'),
(2, 2, 'ACLC College Sorsogon, formerly known as AMA Computer Learning Center of Sorsogon, started its operation as a vocational-techinal institution in June 1998 with 298 students. As one of the numerous learning centers in the country under the AMA Education System, it offered two-year diploma programs such as Computer Programming, Computer Technician and Computer Secretarial courses.', '', '', '', 0, 0, 0, 1, '2024-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_contents`
--

CREATE TABLE `carousel_contents` (
  `carousel_id` int(11) NOT NULL,
  `carousel_for` int(11) NOT NULL COMMENT '1 = carousel 1, 2 = carousel 2, 3 = carousel 3, 4 = carousel 4',
  `carousel_image` text NOT NULL,
  `carousel_date` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel_contents`
--

INSERT INTO `carousel_contents` (`carousel_id`, `carousel_for`, `carousel_image`, `carousel_date`, `status`) VALUES
(1, 1, 'bg1.png', '2024-05-24', 1),
(2, 2, 'bg 2.jpg', '2024-05-24', 1),
(3, 3, 'bg3.png', '2024-05-24', 1),
(4, 4, 'bg4.jpg', '2024-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `chatbot_id` int(11) NOT NULL,
  `chatbot_keywords` text NOT NULL,
  `chatbot_respond` text NOT NULL,
  `chatbot_date` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`chatbot_id`, `chatbot_keywords`, `chatbot_respond`, `chatbot_date`, `status`) VALUES
(1, 'enrollment,start classes,start of classes,when the start of enrollment,enroll', 'The enrolment is ongoing for S.Y 2024-2025 and enrolment periods can vary depending on what you&#39;re enrolling in. As of now, the start of enrolment is on April 2024 until August 30, 2024 and classes will start on August 19, 2024 for College and August 27, 2024 for senior high school.', '2024-05-23', 0),
(2, 'history,about aclc,about us,what is aclc?,about', 'AMA Computer Learning Center (ACLC) is a leading computer training institution in the country offering full 2-year programs and short-term courses. It is focused on producing highly competent and skilled graduates to address the growing needs of the local and international markets. ACLC offers the most complete and up-to-date curriculum to equip students with the necessary skills to pursue an IT career. It also has international affiliations that allow ACLC graduates to get high paying jobs and continuous promotions.\r\n\r\nFor more information, you can visit our branch history page.\r\n', '2024-05-09', 1),
(3, 'courses,programs,what courses are offered?,college courses,what are the college courses offered?', 'ACLC College of Sorsogon offers a variety of courses including Computer Science, Information Technology, Computer Programming, Accounting Information System, and Entrepreneurship. The school also offers short-term courses for those who want to learn specific skills in a short period of time.\r\n\r\nWe also offered on per availability basis:\r\n- Event Management Services NC III (under TESDA Scholarship allocation)', '2024-05-09', 1),
(7, 'senior high school,shs,what are the strands offered in Senior High School?,what are the tracks offered in senior high school?,strand,shs strand', 'ACLC College of Sorsogon offers the following strands in Senior High School:\r\n\r\n- Accountancy, Business, and Management (ABM) ​​​​\r\n- TVL-ICT\r\n- TVL-HRM\r\n- TVL-TM', '2024-05-09', 1),
(8, 'requirements,enrollment requirements,what are the requirements for enrollment?,admission requirements,admission', 'The requirements for enrolment may vary depending on the course or year you\'re enrolling in. However, common requirements include a copy of your birth certificate, a copy of your report card, a certificate of good moral character, and a filled-out enrolment form.\r\n\r\nFor more specific requirements, please visit the College Admissions or SHS Admissions page.', '2024-05-09', 0),
(9, 'online classes,what is blended learning?,what is online learning?', 'Blended learning is an educational methodology that blends online or digital components with face-to-face instruction. Including technology in education helps set students up for success later in life, because computers and other connected devices are so integral to communication and business today. When students learn in a blended learning setting, they do more than master the subject they’re learning; they also master the use of technology.', '2024-05-09', 0),
(10, 'does aclc offered blended learning?,does aclc offered blending learning,does aclc have blending learning', 'ACLC College of Sorsogon offer a blended learning for students who want to continue their studies while working.', '2024-05-09', 0),
(11, 'purpose of blended learning,what is the purpose of blended learning?,What is the purpose of online learning?', 'By making in-person and online learning complementary, blended learning creates a truly integrated classroom where the needs of all types of learners can be met. Keeping students engaged, stimulated, and motivated also helps teachers to be more effective and make greater gains with their students.', '2024-05-09', 0),
(12, 'scholarship,scholarships,scholarship programs,scholarship offered,scholarship programs offered,scholarship programs available,what kind of scholarship that the school offered?', 'ACLC College of Sorsogon offers scholarship programs to deserving students.\r\n\r\nFor Senior High School, the students who availed the voucher the registration fee per-sem is 100 pesos. And the rest is free. And to those who have not availed the said voucher will be paid 1,750 per-sem.\r\n\r\nFor college, the minimum grade requirement for an AMA scholarship is 91% or higher, while for CHED and TESDA scholarships, it\'s 93% or higher.', '2024-05-09', 0),
(13, 'tuition,tuition fee,how much is the tuition fee?,how much is the tuition fee for college?,how much is the tuition fee for senior high school?,tuition fee for college,tuition fee for senior high school', 'The tuition fee varies depending on the course or program you\'re enrolling in.\r\n\r\nFor ACT\r\n- Instalment: ₱16,488.13\r\n- Down payment: ₱4,123\r\n- Cash: ₱15003.75\r\nFor BSIT\r\n- Instalment: ₱18,534.52\r\n- Down payment ₱4,634\r\n- Cash: ₱16,867.75\r\nFor BSEntrep\r\n- Instalment: ₱13,479.43\r\n- Down payment: ₱3,300\r\n- Cash: ₱12,266.75\r\nFor BSAIS\r\n- Instalment: ₱15,525.83\r\n- Down payment: ₱3,882\r\n- Cash: ₱14,130.75\r\nFor BSHRM\r\n- Instalment: ₱13,292.23\r\n- Down payment: ₱3,224\r\n- Cash: ₱12,094.75\r\n\r\nFor more information about the tuition fee, please contact us by visiting our campus or kindly visit our contact page.', '2024-05-09', 0),
(14, 'appointment,schedule appointment,how to schedule an appointment?,can i make an appointment', 'You can usually make an appointment for enrolment. You can visit our campus or contact us through our contact number or email address.', '2024-05-09', 0),
(15, 'contact,contact number,contact information,contact us,contact details', 'For more information, you can contact us through the following:\r\n\r\nPhone: 0917 878 4770\r\nEmail: aclcsorsogon@yahoo.com\r\nor visit our contact page.', '2024-05-09', 0),
(16, 'thank you,thanks,thank you!,thanks!,ty,tnx,arigatou', 'You\'re welcome! If you have any more questions, feel free to ask.', '2024-05-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_email`
--

CREATE TABLE `chatbot_email` (
  `email_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chats_id` int(11) NOT NULL,
  `chats_email` varchar(255) NOT NULL,
  `chats_date` date DEFAULT NULL,
  `chats_time` time DEFAULT NULL,
  `chats_botchat` text NOT NULL,
  `chats_userchat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus_contents`
--

CREATE TABLE `contactus_contents` (
  `contactus_id` int(11) NOT NULL,
  `content_for` int(11) NOT NULL,
  `contactus_email` varchar(255) NOT NULL,
  `contactus_phone` varchar(255) NOT NULL,
  `contactus_address` varchar(255) NOT NULL,
  `contactus_date` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus_contents`
--

INSERT INTO `contactus_contents` (`contactus_id`, `content_for`, `contactus_email`, `contactus_phone`, `contactus_address`, `contactus_date`, `status`) VALUES
(1, 1, 'aclcsorsogon@yahoo.com', '0917 878 4770', '2nd Floor Luisa Celeste Building, Magsaysay Street, Barangay Sulucan, Sorsogon City', '2024-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `courses_for` int(11) NOT NULL,
  `courses_offered` text NOT NULL,
  `courses_content` text NOT NULL,
  `courses_date` date DEFAULT NULL,
  `courses_title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `courses_for`, `courses_offered`, `courses_content`, `courses_date`, `courses_title`, `status`) VALUES
(1, 1, '<p>BS in Information Technology<br />\r\nHospitality Management<br />\r\nBS Accounting Information System<br />\r\nBS Entrepreneurship</p>\r\n', '<p>ACLC College of Sorsogon offers a variety of courses including Computer Science, Information Technology, Computer Programming, Accounting Information System, and Entrepreneurship. The school also offers short-term courses for those who want to learn specific skills in a short period of time.</p>\r\n\r\n<p>We also offered on per availability basis:<br />\r\n- Event Management Services NC III (under TESDA Scholarship allocation)</p>\r\n', '2024-05-24', 'College Courses', 1),
(2, 2, '<p>ABM<br />\r\nTVL-ICT<br />\r\nTVL-HRM<br />\r\nTVL-TM</p>\r\n', '<p>ACLC College of Sorsogon offers the following strands in Senior High School:</p>\r\n\r\n<p>- Accountancy, Business, and Management (ABM)<br />\r\n- TVL-ICT<br />\r\n- TVL-HRM<br />\r\n- TVL-TM</p>\r\n', '2024-05-24', 'SHS Strand', 1),
(3, 3, '<p>2 YR Associate in Computer Technology</p>\r\n', '<p>ACLC College of Sorsogon offers ladderized courses for those who want to earn a degree while working. The school offers the following ladderized courses:</p>\r\n\r\n<p>- Bachelor of Science in Information Technology<br />\r\n- Bachelor of Science in Computer Science<br />\r\n- Bachelor of Science in Entrepreneurship<br />\r\n- Bachelor of Science in Accounting Information System</p>\r\n', '2024-05-24', 'Ladderized Courses', 1),
(4, 4, '', '<p>Original Report Card</p>\r\n\r\n<p>Original Certificate of Good Moral Character</p>\r\n\r\n<p>Photocopy of Birth Certificate (PSA or NSO)</p>\r\n\r\n<p>Photocopy of SHS Diploma</p>\r\n\r\n<p>1 pc 1 1x1 and 2x2 ID picture (formal attire, white background)</p>\r\n\r\n<p>Long brown plastic envelope</p>\r\n', '2024-05-24', 'College Freshman', 1),
(5, 5, '', '<p>Original Report Card</p>\r\n\r\n<p>Original Certificate of Good Moral Character</p>\r\n\r\n<p>Photocopy of Birth Certificate (PSA or NSO)</p>\r\n\r\n<p>Photocopy of SHS Diploma</p>\r\n\r\n<p>1 pc 1 1x1 and 2x2 ID picture (formal attire, white background)</p>\r\n\r\n<p>Long brown plastic envelope</p>\r\n', '2024-05-24', 'College Transferee', 1),
(6, 6, '', '<p>Original Report Card</p>\r\n\r\n<p>Original Certificate of Good Moral Character</p>\r\n\r\n<p>Photocopy of Birth Certificate (PSA or NSO)</p>\r\n\r\n<p>Photocopy of JHS Completion Certificate</p>\r\n\r\n<p>1 pc 1 1x1 and 2x2 ID picture (formal attire, white background)</p>\r\n\r\n<p>Long brown plastic envelope</p>\r\n', '2024-05-24', 'Incoming SHS', 1),
(7, 7, '', '<p>Original Cert of Grades ( For evaluation)</p>\r\n\r\n<p>Original Certificate of Good Moral Character</p>\r\n\r\n<p>Photocopy of Birth Certificate (PSA or NSO)</p>\r\n\r\n<p>1 pc 1 1x1 and 2x2 ID picture (formal attire, white background)</p>\r\n\r\n<p>Long brown plastic envelope</p>\r\n\r\n<p>TOR (Copy for ACLC College Sorsogon as remarks)</p>\r\n', '2024-05-24', 'SHS Transferee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsupdates`
--

CREATE TABLE `newsupdates` (
  `newsupdates_id` int(11) NOT NULL,
  `newsupdates_title` varchar(255) NOT NULL,
  `newsupdates_date` date DEFAULT NULL,
  `newsupdates_time` time DEFAULT NULL,
  `newsupdates_description` text NOT NULL,
  `newsupdates_author` varchar(255) NOT NULL,
  `newsupdates_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsupdates`
--

INSERT INTO `newsupdates` (`newsupdates_id`, `newsupdates_title`, `newsupdates_date`, `newsupdates_time`, `newsupdates_description`, `newsupdates_author`, `newsupdates_image`) VALUES
(25, 'APPLICATION FOR EVENTS MANAGEMENT NCIII IS NOW OPEN', '2024-05-07', '16:59:00', '<p>APPLICATION FOR EVENTS MANAGEMENT NCIII IS NOW OPEN.<br />\r\n<br />\r\nVisit our school and submit the ff requirements needed to reserve a slot in the screening.<br />\r\n<br />\r\n1) photocopy of any school credential<br />\r\n2) photocopy of psa or nso birth certificate<br />\r\n3) 2 pcs passport id with nametag, colored, white background, formal attire<br />\r\n<br />\r\nApplicants must be 18 years old and above.<br />\r\n<br />\r\n25 SLOTS ONLY<br />\r\n<br />\r\n#twsp2024<br />\r\n#TESDAScholarship</p>\r\n', '', '440089493_851500903660088_589699668144582604_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preregister`
--

CREATE TABLE `preregister` (
  `prereg_id` int(11) NOT NULL,
  `prereg_fname` varchar(255) NOT NULL,
  `prereg_mname` varchar(255) NOT NULL,
  `prereg_lname` varchar(255) NOT NULL,
  `prereg_dob` date DEFAULT NULL,
  `prereg_gender` int(11) NOT NULL,
  `prereg_mobile` varchar(64) NOT NULL,
  `prereg_guardian` varchar(255) NOT NULL,
  `prereg_application` int(11) NOT NULL,
  `prereg_email` varchar(255) NOT NULL,
  `prereg_facebook` text NOT NULL,
  `prereg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `submissions_id` int(11) NOT NULL,
  `submissions_firstname` varchar(255) NOT NULL,
  `submissions_lastname` varchar(255) NOT NULL,
  `submissions_email` varchar(255) NOT NULL,
  `submissions_tel` varchar(64) NOT NULL,
  `submissions_message` text NOT NULL,
  `submissions_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'admin = 1, user = 2',
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `phone`, `avatar`, `username`, `password`, `status`, `role`) VALUES
(10, 'Patrick Sacapano', 'Sorsogon City', 'patricksacapano@email.com', '0912345678', '', 'admin', '$2y$10$dgDzKrJfhyCB7TA/tvE6HeNsimLJIQZ.Pp4JvzDkFE1oWtyfS/mIq', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_contents`
--
ALTER TABLE `aboutus_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `carousel_contents`
--
ALTER TABLE `carousel_contents`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`chatbot_id`);

--
-- Indexes for table `chatbot_email`
--
ALTER TABLE `chatbot_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chats_id`);

--
-- Indexes for table `contactus_contents`
--
ALTER TABLE `contactus_contents`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `newsupdates`
--
ALTER TABLE `newsupdates`
  ADD PRIMARY KEY (`newsupdates_id`);

--
-- Indexes for table `preregister`
--
ALTER TABLE `preregister`
  ADD PRIMARY KEY (`prereg_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`submissions_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_contents`
--
ALTER TABLE `aboutus_contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel_contents`
--
ALTER TABLE `carousel_contents`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `chatbot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chatbot_email`
--
ALTER TABLE `chatbot_email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chats_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus_contents`
--
ALTER TABLE `contactus_contents`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsupdates`
--
ALTER TABLE `newsupdates`
  MODIFY `newsupdates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `preregister`
--
ALTER TABLE `preregister`
  MODIFY `prereg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `submissions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
