-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 12:23 PM
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
-- Database: `redrppbx_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `about_us_title` varchar(255) NOT NULL,
  `about_us` text NOT NULL,
  `about_us_image` varchar(255) NOT NULL,
  `about_us_box_1_num` varchar(255) DEFAULT NULL,
  `about_us_box_1_title` varchar(255) DEFAULT NULL,
  `about_us_box_2_num` varchar(255) DEFAULT NULL,
  `about_us_box_2_ttile` varchar(255) DEFAULT NULL,
  `about_us_box_3_num` varchar(255) DEFAULT NULL,
  `about_us_box_3_title` varchar(255) DEFAULT NULL,
  `about_us_box_4_num` varchar(255) DEFAULT NULL,
  `about_us_box_4_title` varchar(255) DEFAULT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `testimonials_short_description` varchar(255) NOT NULL,
  `about_us_status` varchar(20) NOT NULL DEFAULT '1',
  `about_us_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_title`, `about_us`, `about_us_image`, `about_us_box_1_num`, `about_us_box_1_title`, `about_us_box_2_num`, `about_us_box_2_ttile`, `about_us_box_3_num`, `about_us_box_3_title`, `about_us_box_4_num`, `about_us_box_4_title`, `testimonial_title`, `testimonials_short_description`, `about_us_status`, `about_us_datetime`) VALUES
(1, 'About School', 'Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.', '1698068612.png', '1,200', 'Students', '30', 'Teachers', '45', 'Classroom', '1', 'Bus', 'Testimonials', 'What Parents Say About Us', '1', '25-10-2023 11:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `academic_course`
--

CREATE TABLE `academic_course` (
  `academic_course_id` int(11) NOT NULL,
  `academic_course` text NOT NULL,
  `academic_course_status` varchar(255) NOT NULL DEFAULT '1',
  `academic_course_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_course`
--

INSERT INTO `academic_course` (`academic_course_id`, `academic_course`, `academic_course_status`, `academic_course_datetime`) VALUES
(1, '<h1><strong>Subjects Offered</strong></h1>\r\n\r\n<h2><strong><em><span style=\"color:#006400\">Classes I to V</span></em></strong></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>English, Hindi, Mathematics, Environmental Studies, Social-Science, General Science. Moral Science, General Knowledge, Art &amp; Craft, Music, Computer Education from Class 1 onwards.</em></strong></span></p>\r\n\r\n<h2><strong><em><span style=\"color:#006400\">Classes VI to VIII</span></em></strong></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Communicative English, Hindi, Mathematics, Science and Technology, Social-Science. General Knowledge, SanskriVPunjabi, Moral Science, Art &amp; Craft, Music, Computer Science, Environmental Science.</em></strong></span></p>\r\n\r\n<h2><span style=\"color:#006400\"><strong><em>Classes IX to X</em></strong></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Communicative English, Hindi (Course-B), Mathematics, Science and Technology, Social Science, Sanskrit (up to class IX only), Art &amp; Craft, Computer Education (Up to class IX compulsory).</em></strong></span></p>\r\n\r\n<h2><strong><em><span style=\"color:#006400\">Classes XI &amp; XII </span></em></strong></h2>\r\n\r\n<h3><strong><em><span style=\"color:#ff0000\">(Commerce Stream)</span></em></strong></h3>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>English (Core), Accountancy, Business Studies, Mathematics with / Economics, Physical Education, Music (Vocal), General Studies.</em></strong></span></p>\r\n\r\n<h3><strong><em><span style=\"color:#ff0000\">(Science Stream)</span></em></strong></h3>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>English (Core), Physics, Chemistry, Biology with/Mathematics, Physical Education, Music (Vocal), Informative Practices, Science, General Studies.</em></strong></span></p>\r\n', '1', '25-10-2023 02:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_entrydt` varchar(255) DEFAULT NULL,
  `admin_status` int(11) DEFAULT 1,
  `admin_lastname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `user_deleted_date` varchar(255) DEFAULT NULL,
  `admin_user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_entrydt`, `admin_status`, `admin_lastname`, `phonenumber`, `firstname`, `last_login`, `user_deleted_date`, `admin_user_type`) VALUES
(1, 'admin', 'admin@admin.com', '797cb93f8b1159e6dc68b2b7fddd6c55', '09-01-23 06:46:33', 1, 'admin', '0610398355', 'admin', '06-03-24 02:52:39', '', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission_procedure`
--

CREATE TABLE `admission_procedure` (
  `admission_procedure_id` int(11) NOT NULL,
  `admission_procedure` text NOT NULL,
  `admission_procedure_status` varchar(255) NOT NULL DEFAULT '1',
  `admission_procedure_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_procedure`
--

INSERT INTO `admission_procedure` (`admission_procedure_id`, `admission_procedure`, `admission_procedure_status`, `admission_procedure_datetime`) VALUES
(1, '<blockquote>\r\n<h1 style=\"text-align:justify\"><strong>Admission Procedure</strong></h1>\r\n\r\n<p style=\"text-align:justify\"><strong>We believe in giving equal and fair opportunity of best education to avail better by every child. We adhere to transparent and strict admission policy and no undue means are entertained. </strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Prospectus &amp; registration form are issued subject to the availability of seats in a particular class.<br />\r\n<strong>Parents must accompany the child at the time of registration &amp; admission.<br />\r\n<strong>For pre &amp; primary classes, birth certificate and previous class result report is must for the admission.<br />\r\n<strong>Desired age for admission is as given below: </strong></strong></strong></strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:justify\">Class</td>\r\n			<td style=\"text-align:justify\">Age</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\">Nursery</td>\r\n			<td style=\"text-align:justify\">3 Years</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\">K.G.I</td>\r\n			<td style=\"text-align:justify\">4 Years</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:justify\">K.G.II</td>\r\n			<td style=\"text-align:justify\">5 Years</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<strong><strong><strong><strong>Duly filled Registration form must be submitted before the last date of submission in the school office during the working hours of the School. </strong> </strong></strong></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><strong><strong><strong>1.</strong> One month prior notice is required for issuing Transfer Certificate. If application is not submitted on time, then fee will be charge for a month has to be paid.<br />\r\n<strong>2. Application should be submitted by parent/guardians writing<br />\r\n<strong>3. School Leaving Certificate can be obtained only after clearing of all dues.<br />\r\n<strong>4. No refund of school fee will be made under any circumstances.<br />\r\n<strong>5. No entrance test is conducted for admissions in classes upto VIII as per R.T.E. rules. </strong></strong></strong></strong></strong></strong></strong></p>\r\n</blockquote>\r\n', '1', '17-10-2023 10:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_page_url` text NOT NULL,
  `banner_image` text NOT NULL,
  `banner_status` varchar(255) NOT NULL DEFAULT '1',
  `banner_datetime` varchar(255) NOT NULL,
  `banner_add_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_page_url`, `banner_image`, `banner_status`, `banner_datetime`, `banner_add_by`) VALUES
(1, 'contact-us', '1695913399.jpg', '0', '02-10-2023 01:54:20', '1'),
(2, 'about-us', '1695912609.jpg', '0', '28-09-2023 04:50:09', '1'),
(3, 'about-us', '1697825625.jpg', '0', '20-10-2023 08:13:45', '1'),
(4, 'about-us', '1697904159.jpg', '0', '21-10-2023 06:02:39', '1'),
(5, 'about-us', '1698172037.jpg', '0', '24-10-2023 08:27:23', '1'),
(6, 'about-us', '1698323484.png', '1', '26-10-2023 02:31:24', '1'),
(7, 'our-mission-vission', '1698324827.png', '1', '26-10-2023 02:53:47', '1'),
(8, 'our-value', '1698326469.png', '1', '26-10-2023 03:21:09', '1'),
(9, 'director-message', '1698326833.png', '1', '26-10-2023 03:27:13', '1'),
(10, 'principal-message', '1698326889.png', '1', '26-10-2023 03:28:09', '1'),
(11, 'academic-course', '1698327406.png', '1', '26-10-2023 03:36:46', '1'),
(12, 'parents-teacher-meeting', '1698327438.png', '1', '26-10-2023 03:37:18', '1'),
(13, 'suggestion-to-parents', '1698327663.png', '1', '26-10-2023 03:41:03', '1'),
(14, 'curriculum', '1698327669.png', '1', '26-10-2023 03:41:09', '1'),
(15, 'celebration', '1698327676.png', '1', '26-10-2023 03:41:16', '1'),
(16, 'school-rules-and-regulations', '1698327878.png', '1', '26-10-2023 03:44:38', '1'),
(17, 'registration-process', '1698328680.png', '1', '26-10-2023 03:58:00', '1'),
(18, 'document-required', '1698328688.png', '1', '26-10-2023 03:58:08', '1'),
(19, 'online-admission-form', '1698328695.png', '1', '26-10-2023 03:58:15', '1'),
(20, 'admission-procedure', '1698328702.png', '1', '26-10-2023 03:58:22', '1'),
(21, 'fee-policies', '1698328710.png', '1', '26-10-2023 03:58:30', '1'),
(22, 'school-policies', '1698328720.png', '1', '26-10-2023 03:58:40', '1'),
(23, 'event', '1698329010.png', '1', '26-10-2023 04:03:30', '1'),
(24, 'event-detail', '1698329111.png', '1', '26-10-2023 04:05:11', '1'),
(25, 'privacy-policy', '1699787353.png', '0', '12-11-2023 12:09:13', '1'),
(26, 'privacy-policy', '1699788371.png', '1', '12-11-2023 12:26:11', '1'),
(27, 'terms-and-condition', '1699788382.png', '1', '12-11-2023 12:26:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `caste_id` int(11) NOT NULL,
  `caste_religion_id` varchar(255) NOT NULL,
  `caste_name` varchar(255) NOT NULL,
  `caste_status` int(11) NOT NULL DEFAULT 1,
  `caste_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`caste_id`, `caste_religion_id`, `caste_name`, `caste_status`, `caste_datetime`) VALUES
(1, '1', 'Brahmin', 1, '17-10-2023 09:12:22'),
(2, '1', 'Vaishya', 1, '17-10-2023 12:47:50'),
(3, '1', 'Kshatriya', 1, '17-10-2023 12:47:54'),
(4, '1', 'Pasi', 1, '17-10-2023 12:48:02'),
(5, '1', 'Khatik', 1, '17-10-2023 12:48:07'),
(6, '1', 'Chamar', 1, '17-10-2023 12:48:14'),
(7, '1', 'Rajput', 1, '17-10-2023 12:48:21'),
(8, '1', 'Bangali', 1, '17-10-2023 12:48:24'),
(9, '1', 'Ad-Dharmi', 1, '17-10-2023 12:48:29'),
(10, '1', 'Gagra', 1, '17-10-2023 12:48:37'),
(11, '1', 'Arunthathiyar', 1, '17-10-2023 12:48:42'),
(12, '1', 'Batwal', 1, '17-10-2023 12:48:48'),
(13, '1', 'Sarera', 1, '17-10-2023 12:48:52'),
(14, '1', 'Shudra', 1, '17-10-2023 12:48:56'),
(15, '2', 'OBC', 1, '17-10-2023 12:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `celebration`
--

CREATE TABLE `celebration` (
  `celebration_id` int(11) NOT NULL,
  `celebration` text NOT NULL,
  `celebration_status` varchar(255) NOT NULL DEFAULT '1',
  `celebration_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `celebration`
--

INSERT INTO `celebration` (`celebration_id`, `celebration`, `celebration_status`, `celebration_datetime`) VALUES
(1, '<h1><strong>School Function</strong></h1>\r\n\r\n<p><span style=\"font-size:16px\">Investiture ceremony</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Van Mahotsav</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Independence day</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Teacher&#39;s day</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Children&#39;s day</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Annual sports day</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Annual funfair</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Republic day</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Farewell to XII</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Graduation ceremony for UKG</span></p>\r\n', '1', '26-10-2023 02:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `contact_enquiry_id` int(11) NOT NULL,
  `contact_enquiry_name` varchar(255) NOT NULL,
  `contact_enquiry_email` varchar(255) NOT NULL,
  `contact_enquiry_phone_number` varchar(255) NOT NULL,
  `contact_enquiry_subject` text NOT NULL,
  `contact_enquiry_message` text NOT NULL,
  `contact_enquiry_status` varchar(255) NOT NULL DEFAULT '1',
  `contact_enquiry_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`contact_enquiry_id`, `contact_enquiry_name`, `contact_enquiry_email`, `contact_enquiry_phone_number`, `contact_enquiry_subject`, `contact_enquiry_message`, `contact_enquiry_status`, `contact_enquiry_datetime`) VALUES
(1, 'Test', 'test@test.com', '1234567890', 'Subject', 'Message', '1', '29-09-2023 08:07:39'),
(2, 'Test 1', 'test@test1.com', '9876543210', 'Subject 1', 'Message 1', '1', '29-09-2023 08:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `curriculum_id` int(11) NOT NULL,
  `curriculum` text NOT NULL,
  `curriculum_status` varchar(255) NOT NULL DEFAULT '1',
  `curriculum_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curriculum_id`, `curriculum`, `curriculum_status`, `curriculum_datetime`) VALUES
(1, '<p><span style=\"font-size:14px\"><strong>SIMPTION WEBSITE DEMO is a world-class destination for truly holistic education. We know the importance of quality teaching supported by a spirited environment that encourages students to build confidence in their own abilities</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>We invest in teachers who are life-long learners and engage in the best international school practices to provide an international curriculum. The academic programmes at India International School are delivered through concepts and various intelligence modules. Within a safe and nurturing environment, we help our students develop a genuine love for learning, sports, and achieve quality academic success.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Admissions Open for the Academic Year 2021-2022 </strong></span></p>\r\n', '1', '22-10-2023 03:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `decument_required`
--

CREATE TABLE `decument_required` (
  `decument_required_id` int(11) NOT NULL,
  `decument_required` text NOT NULL,
  `decument_required_status` varchar(255) NOT NULL DEFAULT '1',
  `decument_required_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decument_required`
--

INSERT INTO `decument_required` (`decument_required_id`, `decument_required`, `decument_required_status`, `decument_required_datetime`) VALUES
(1, '<blockquote>\r\n<p style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><em>AT THE TIME OF REGISTRATION</em></strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Self Attested copy of Birth Certificate. Original for verification.</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>One passport size photograph&nbsp;of the Child.</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Complete academic transcripts of the previous two classes attended by the student (for classes I&nbsp;and above).</em></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><em>AT THE TIME OF ADMISSION</em></strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Latest Residence Proof</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Blood Group Report&nbsp;</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>For Class I&nbsp;and above, Transfer Certificate (Original). In case of interstate students, the TC should be counter signed by the education officer.</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Progress report from the previous school.</em></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:22px\"><strong><em>Caste Certificate - In case caste belongs to OBC /SC/ST</em></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"color:#006400\"><strong><em>All the photocopies should be self attested by one of the parent.</em></strong></span></span></p>\r\n</blockquote>\r\n', '1', '16-10-2023 07:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `director_message`
--

CREATE TABLE `director_message` (
  `director_message_id` int(11) NOT NULL,
  `director_message` text NOT NULL,
  `director_message_image` varchar(255) NOT NULL,
  `director_message_status` varchar(25) NOT NULL DEFAULT '1',
  `director_message_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director_message`
--

INSERT INTO `director_message` (`director_message_id`, `director_message`, `director_message_image`, `director_message_status`, `director_message_datetime`) VALUES
(1, '<h1><strong>From The Director&#39;s Desk</strong></h1>\r\n\r\n<p>The Truth About Kids is.......</p>\r\n\r\n<ol>\r\n	<li style=\"margin-left: 40px;\">They want to argue about everything</li>\r\n	<li style=\"margin-left: 40px;\">They understand more than you think they do</li>\r\n	<li style=\"margin-left: 40px;\">They do what you do not what you say</li>\r\n	<li style=\"margin-left: 40px;\">They are natural systems thinkers</li>\r\n	<li style=\"margin-left: 40px;\">They are natural systems thinkers</li>\r\n	<li style=\"margin-left: 40px;\">They tell you &#39;yes&#39; even when they mean &#39;no&#39;</li>\r\n	<li style=\"margin-left: 40px;\">They do better when someone is watching</li>\r\n	<li style=\"margin-left: 40px;\">They don&#39;t want to be singled out!</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Education today is a paradigm change and we are asking our children,</p>\r\n\r\n<p style=\"text-align:justify\">&#39;How would you like your experience to be?&#39;</p>\r\n\r\n<p style=\"text-align:justify\">And they are quick to reply, &#39;Prepare us for a happy tomorrow.&#39;</p>\r\n\r\n<p style=\"text-align:justify\">And we are slowly, but surely, moving in that direction for them to dream of a image of the future and Creating a bridge to get there.</p>\r\n\r\n<p style=\"text-align:justify\">A complete education is the holistic development of body, mind and soul. At SIMPTION WEBSITE DEMO we provide all three to our students so that they are empowered to face challenges as well as become good human beings. Our aim is to mould students to become leaders, responsible, tolerant citizens and contributors to society apart from success in their chosen careers. The school provides an environment where students have exposure to sports, creative expression, and learn to ask questions.</p>\r\n\r\n<p style=\"text-align:justify\">In our 25th year, it is a matter of great pride that our students have gone on to get admissions in the best institutions of higher studies. We wish them all the best for their endeavors.</p>\r\n', '1698167320.jpg', '1', '25-10-2023 12:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_slug` text NOT NULL,
  `event_short_desc` varchar(255) NOT NULL,
  `event_feature_image` varchar(255) NOT NULL,
  `event_long_desc` text NOT NULL,
  `event_seo_keyword` text DEFAULT NULL,
  `event_seo_description` text DEFAULT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_status` varchar(255) NOT NULL DEFAULT '1',
  `event_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_slug`, `event_short_desc`, `event_feature_image`, `event_long_desc`, `event_seo_keyword`, `event_seo_description`, `event_date`, `event_status`, `event_datetime`) VALUES
(1, 'Event Title ', 'event-title', 'In publishing and graphic design In publishing and graphic design In publishing and graphic design', '1697264090.jpg', '<h1><span style=\"font-size:28px\"><strong>Event Title</strong></span></h1>\r\n\r\n<p>In publishing and graphic design In publishing and graphic design In publishing and graphic design.In publishing and graphic design In publishing and graphic design In publishing and graphic design.In publishing and graphic design In publishing and graphic design In publishing and graphic design.</p>\r\n', 'SEO Keyword', 'SEO Description', '2023-10-28', '1', '30-10-2023 12:05:30'),
(2, 'Event Title 2', 'event-title-2', 'In publishing and graphic design In publishing and graphic design In publishing and graphic design', '1697264102.jpg', '<p>In publishing and graphic design In publishing and graphic design In publishing and graphic design</p>\r\n', 'SEO Keyword', 'SEO Description ', '2023-10-21', '1', '30-10-2023 12:05:56'),
(3, 'Event Title 3', 'event-title-3', 'In publishing and graphic design In publishing and graphic design In publishing and graphic design', '1697264110.jpg', '<p>In publishing and graphic design In publishing and graphic design In publishing and graphic design</p>\r\n', NULL, NULL, '2023-10-31', '0', '14-10-2023 08:15:10'),
(4, ' Event Title ', 'event-title', ' Event Short Description *', '1698675011.jpg', '<p>Event Description *</p>\r\n', '\r\nSEO Keyword *\r\n', '\r\nSEO Description *\r\n', '2023-10-30', '1', '30-10-2023 03:10:11'),
(5, ' Event Title', 'event-title', 'In publishing and graphic design In publishing and graphic design In publishing and graphic design', '1699784979.jpg', '<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12 col-md-12\">\r\n<div class=\"event-details-desc\">\r\n<div class=\"event-desc-content\">\r\n<p>In publishing and graphic design In publishing and graphic design In publishing and graphic design</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'SEO Keyword', 'SEO Description', '2023-12-06', '1', '12-11-2023 11:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE `event_image` (
  `event_image_id` int(11) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `cover_image` text NOT NULL,
  `event_image_status` varchar(255) NOT NULL DEFAULT '1',
  `event_image_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_image`
--

INSERT INTO `event_image` (`event_image_id`, `event_id`, `cover_image`, `event_image_status`, `event_image_datetime`) VALUES
(1, '1', '169726413501.jpg', '1', '14-10-2023 08:15:35'),
(2, '1', '169726413512.jpg', '1', '14-10-2023 08:15:35'),
(3, '1', '169726413523.jpg', '1', '14-10-2023 08:15:35'),
(4, '1', '169726413534.jpg', '1', '14-10-2023 08:15:35'),
(5, '1', '169726413545.jpg', '1', '14-10-2023 08:15:36'),
(6, '2', '169726414805.jpg', '1', '14-10-2023 08:15:48'),
(7, '2', '169726414816.jpg', '1', '14-10-2023 08:15:48'),
(8, '3', '169726416301.jpg', '1', '14-10-2023 08:16:03'),
(9, '3', '169726416312.jpg', '1', '14-10-2023 08:16:03'),
(10, '3', '169726416323.jpg', '1', '14-10-2023 08:16:03'),
(11, '3', '169726416334.jpg', '1', '14-10-2023 08:16:03'),
(12, '3', '169726416345.jpg', '1', '14-10-2023 08:16:03'),
(13, '3', '169726416356.jpg', '1', '14-10-2023 08:16:04'),
(14, '1', '1697733879.jpg', '0', '19-10-2023 06:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `fee_policies`
--

CREATE TABLE `fee_policies` (
  `fee_policies_id` int(11) NOT NULL,
  `fee_policies` text NOT NULL,
  `fee_policies_status` varchar(255) NOT NULL DEFAULT '1',
  `fee_policies_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_policies`
--

INSERT INTO `fee_policies` (`fee_policies_id`, `fee_policies`, `fee_policies_status`, `fee_policies_datetime`) VALUES
(1, '<blockquote>\r\n<h1 style=\"text-align:justify\"><strong>Fee Policies</strong></h1>\r\n\r\n<p style=\"text-align:justify\">School fees are fixed by the Governing body and are likely to be revised if found necessary.</p>\r\n\r\n<p style=\"text-align:justify\">No pupil will be allowed to sit in the promoted class if the fees for the previous class are due.</p>\r\n\r\n<p style=\"text-align:justify\">Should a child be removed from school, Transfer Certificate will not be issued until his/her dues have been cleared.</p>\r\n\r\n<p style=\"text-align:justify\">Annual Fees must be paid in four installments.</p>\r\n\r\n<p style=\"text-align:justify\">The four instalments must be paid before 15th of April, July, October,January, failing which late fee will be charged @1 % (One percent) per month of previous installment&#39;s amount from due date. And after that the child&#39;s name will be struck off the roll. Parents will have to pay readmission fee. This will be followed very strictly.</p>\r\n\r\n<p style=\"text-align:justify\">If all dues are not cleared by the end of the session, the student&#39;s result will be withheld.</p>\r\n\r\n<p style=\"text-align:justify\">Duplicate fee slip will be issued from the school office on Payment of Rs. 10.</p>\r\n\r\n<p style=\"text-align:justify\">For Online School Fee Payment:</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>WITHDRAWAL AND REFUND POLICIES</strong></h2>\r\n\r\n<h3 style=\"text-align:center\">Security Deposit</h3>\r\n\r\n<p style=\"text-align:center\">Security Deposit will be refunded only if application of withdrawal is duly submitted to the Principal in writing, by 7th March in the last Academic year at SIMPTION WEBSITE DEMO.Security deposit will be refunded only after the completion of the annual audit i.e. after 31st July.No mid year applications will be entertained for security refund under any circumstances. All refunds will be addressed to after the end of the academic year.Parents will be liable to pay the fees for the next academic year, if application of withdrawal is not duly submitted to the Principal in writing, by 7th March in the last Academic year at SIMPTION WEBSITE DEMO.</p>\r\n\r\n<h3 style=\"text-align:center\">School Leaving certificate</h3>\r\n\r\n<p style=\"text-align:center\">School Leaving certificate (Transfer Certificate) will be issued only after clearance of dues and payment of amount(s) in favour of the school.Vandalism Penalties will be applicable in-case of any damage caused/ dues occurred because of: Mishandling or loosing of School Library Books and Laboratory Equipments, Damaging of school IT facilities, Third party damage/ loss caused by the student at the time of events, Mishandling or damaging the assets of school and transportation.If the withdrawal notice is given after 7th March of the running academic year, full academic fees (of the following academic year) shall have to be paid to get a clearance for the Transfer/leaving certificate.In case of withdrawal any time after the commencement of the academic year the fees for full year shall be charged/forfeited in favour of the school.</p>\r\n\r\n<h3 style=\"text-align:center\">The rules and regulations</h3>\r\n\r\n<p style=\"text-align:center\">The rules and regulations formulated by SIMPTION WEBSITE DEMO construe for smooth and effective functioning of the school. SIMPTION WEBSITE DEMO , reserves all rights to amend the fee and set regulations when needed and found necessary. The information given in the school&#39;s brochure and application material is an indication of SIMPTION WEBSITE DEMO &#39;s , intent as on the date of publication of this document. The contents of this policy should not to be construed as a binding contract upon SIMPTION WEBSITE DEMO and cannot be legally challenged.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</blockquote>\r\n', '1', '18-10-2023 06:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `general_tbl`
--

CREATE TABLE `general_tbl` (
  `general_id` int(11) NOT NULL,
  `general_imgicon` varchar(255) NOT NULL,
  `general_companyname` text NOT NULL,
  `general_contactpersonname` varchar(255) NOT NULL,
  `general_address` text NOT NULL,
  `general_pincode` varchar(255) NOT NULL,
  `general_city` varchar(255) NOT NULL,
  `general_county` varchar(255) NOT NULL,
  `general_currancy` varchar(255) NOT NULL,
  `general_sessionid` varchar(255) NOT NULL,
  `general_sessionmonth` varchar(255) NOT NULL,
  `general_phoneno` varchar(255) NOT NULL,
  `general_emailid` varchar(255) NOT NULL,
  `general_entrydt` varchar(255) NOT NULL,
  `general_status` int(11) NOT NULL DEFAULT 1,
  `genaral_addby` int(11) NOT NULL,
  `general_currencysysmbol` varchar(255) NOT NULL,
  `general_gstno` varchar(255) NOT NULL,
  `general_gstpercentage` varchar(255) NOT NULL,
  `general_numberemi` varchar(255) NOT NULL,
  `general_numberlatepay` varchar(255) NOT NULL,
  `general_adnacepaymnetpercentage` varchar(255) NOT NULL,
  `general_mobilno` varchar(255) NOT NULL,
  `general_website` text NOT NULL,
  `general_panno` varchar(255) NOT NULL,
  `general_financial_start_date` varchar(255) NOT NULL,
  `general_financial_end_date` varchar(255) NOT NULL,
  `genaral_statename` varchar(255) NOT NULL,
  `general_half_day_starttime` varchar(255) NOT NULL,
  `general_half_day_endtime` varchar(255) NOT NULL,
  `general_full_dat_starttime` varchar(255) NOT NULL,
  `general_full_dat_endtime` varchar(255) NOT NULL,
  `general_mendetory_holiday` varchar(255) NOT NULL,
  `general_additionweek_holiday` int(11) NOT NULL DEFAULT 0 COMMENT '0=no, 1yes',
  `general_additianl_day` varchar(255) NOT NULL,
  `general_week` varchar(255) NOT NULL,
  `general_holiday_count_leave_status` int(11) NOT NULL DEFAULT 0 COMMENT '0=not count,1=count',
  `general_week_off` int(11) NOT NULL DEFAULT 1 COMMENT '1=count,0=not count',
  `general_leave_carry_forword` int(11) NOT NULL DEFAULT 1 COMMENT '1=forword,0=not forword',
  `general_holiday_start_date` varchar(255) NOT NULL,
  `general_holiday_end_date` varchar(255) NOT NULL,
  `general_highest_auth` varchar(255) NOT NULL,
  `general_fax` varchar(255) NOT NULL,
  `general_iframe_address` text NOT NULL,
  `general_facebook` text NOT NULL,
  `general_twitter` text NOT NULL,
  `general_linkedin` text NOT NULL,
  `general_pinterest` text NOT NULL,
  `general_whatsapp` text NOT NULL,
  `general_instagram` text NOT NULL,
  `general_googleplus` text NOT NULL,
  `general_skype` text NOT NULL,
  `general_about_us` text NOT NULL,
  `site_background_color` varchar(255) DEFAULT NULL,
  `site_header_type` varchar(255) DEFAULT NULL,
  `site_layout` varchar(255) DEFAULT NULL,
  `site_theam_color` varchar(255) DEFAULT NULL,
  `general_gstno_per` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_tbl`
--

INSERT INTO `general_tbl` (`general_id`, `general_imgicon`, `general_companyname`, `general_contactpersonname`, `general_address`, `general_pincode`, `general_city`, `general_county`, `general_currancy`, `general_sessionid`, `general_sessionmonth`, `general_phoneno`, `general_emailid`, `general_entrydt`, `general_status`, `genaral_addby`, `general_currencysysmbol`, `general_gstno`, `general_gstpercentage`, `general_numberemi`, `general_numberlatepay`, `general_adnacepaymnetpercentage`, `general_mobilno`, `general_website`, `general_panno`, `general_financial_start_date`, `general_financial_end_date`, `genaral_statename`, `general_half_day_starttime`, `general_half_day_endtime`, `general_full_dat_starttime`, `general_full_dat_endtime`, `general_mendetory_holiday`, `general_additionweek_holiday`, `general_additianl_day`, `general_week`, `general_holiday_count_leave_status`, `general_week_off`, `general_leave_carry_forword`, `general_holiday_start_date`, `general_holiday_end_date`, `general_highest_auth`, `general_fax`, `general_iframe_address`, `general_facebook`, `general_twitter`, `general_linkedin`, `general_pinterest`, `general_whatsapp`, `general_instagram`, `general_googleplus`, `general_skype`, `general_about_us`, `site_background_color`, `site_header_type`, `site_layout`, `site_theam_color`, `general_gstno_per`) VALUES
(1, '1698473180.png', 'Bright View International School', 'Syed Imran Ali', '7FVC+PQP, near Jgr Garden, Quba Colony, Chandrayangutta, Hyderabad, Telangana 500005', '500005', 'Hyderabad', 'India', '', '0', '0', '123456890', 'brightviewschool@gmail.com', '12-11-2023 11:57:29', 1, 1, '', '', '0', '0', '0', '0', '1234567980', '#', '', '01-04-2021', '31-03-2022', 'Telangana', '', '', '', '', 'Sunday', 0, 'Saturday', '2,4', 1, 1, 1, '01/01/2022', '31/12/2022', '2', '+44-20-1224-3456', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3809.439155594419!2d78.4693668739036!3d17.294347805481216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbbd2c641d9deb%3A0xfe218d65ee620a58!2sBright%20View%20International%20School!5e0!3m2!1sen!2sin!4v1695733229073!5m2!1sen!2sin', '#', '#', '#', '#', '9930309928', 'https://www.instagram.com/brightviewintschool/', '#', '#', 'Bright View International School', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_section1_image` varchar(255) NOT NULL,
  `home_section1_short_time` varchar(255) NOT NULL,
  `home_section1_title` varchar(255) NOT NULL,
  `home_section1_description` text NOT NULL,
  `home_section1_button_title` varchar(255) NOT NULL,
  `home_section1_button_url` varchar(255) NOT NULL,
  `home_section2_short_title` varchar(255) NOT NULL,
  `home_section2_title` varchar(255) NOT NULL,
  `home_section2_image` varchar(255) NOT NULL,
  `home_section2_1_title` varchar(255) NOT NULL,
  `home_section2_1_description` varchar(255) NOT NULL,
  `home_section2_2_title` varchar(255) NOT NULL,
  `home_section2_2_description` varchar(255) NOT NULL,
  `home_section2_3_title` varchar(255) NOT NULL,
  `home_section2_3_description` varchar(255) NOT NULL,
  `home_section3_title` varchar(255) NOT NULL,
  `home_section3_description` varchar(255) NOT NULL,
  `home_section4_title` varchar(255) NOT NULL,
  `home_status` varchar(25) NOT NULL DEFAULT '1',
  `home_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_section1_image`, `home_section1_short_time`, `home_section1_title`, `home_section1_description`, `home_section1_button_title`, `home_section1_button_url`, `home_section2_short_title`, `home_section2_title`, `home_section2_image`, `home_section2_1_title`, `home_section2_1_description`, `home_section2_2_title`, `home_section2_2_description`, `home_section2_3_title`, `home_section2_3_description`, `home_section3_title`, `home_section3_description`, `home_section4_title`, `home_status`, `home_datetime`) VALUES
(1, '1699186573.jpg', ' Who We Are', 'Kindergarten and Childhood is Our Passion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Contact Us', 'contact-us', 'Our Core Values ', 'We are Refunding Early Childcare Education', '1699186573.png', 'Active Learning', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Safe Environment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Fully Equipment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Testimonials', 'What Parents Say About Us', 'Events', '1', '06-03-2024 02:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `online_form`
--

CREATE TABLE `online_form` (
  `online_form_id` int(11) NOT NULL,
  `online_form_student_name` varchar(255) NOT NULL,
  `online_form_father_name` varchar(255) NOT NULL,
  `online_form_mother_name` varchar(255) NOT NULL,
  `online_form_date_of_birth` varchar(255) NOT NULL,
  `online_form_father_number` varchar(255) NOT NULL,
  `online_form_mother_number` varchar(255) NOT NULL,
  `online_form_gender` varchar(255) NOT NULL,
  `online_form_religion` varchar(255) NOT NULL,
  `online_form_category` varchar(255) NOT NULL,
  `online_form_admission_class` varchar(255) NOT NULL,
  `online_form_medium` varchar(255) NOT NULL,
  `online_form_previous_school_name` varchar(255) NOT NULL,
  `online_form_preview_class` varchar(255) NOT NULL,
  `online_form_address` varchar(255) NOT NULL,
  `online_form_status` varchar(255) NOT NULL DEFAULT '1',
  `online_form_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_form`
--

INSERT INTO `online_form` (`online_form_id`, `online_form_student_name`, `online_form_father_name`, `online_form_mother_name`, `online_form_date_of_birth`, `online_form_father_number`, `online_form_mother_number`, `online_form_gender`, `online_form_religion`, `online_form_category`, `online_form_admission_class`, `online_form_medium`, `online_form_previous_school_name`, `online_form_preview_class`, `online_form_address`, `online_form_status`, `online_form_datetime`) VALUES
(1, 'test', 'test', 'test', '2023-10-18', 'test', 'test', 'Male', '2', '15', 'test', 'test', 'test', 'test', 'test', '1', '17-10-2023 02:14:41'),
(2, 'test 1', 'test 1', 'test 1', '2023-10-19', 'test 1', 'test 1', 'Male', '2', '15', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', '1', '17-10-2023 02:16:24'),
(3, 'test', 'test', 'test', '1000-10-01', '1321231230', '1231231230', 'Male', '1', '2', 'test', 'test', 'test', 'test', 'test', '1', '26-10-2023 02:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `our_value`
--

CREATE TABLE `our_value` (
  `our_value_id` int(11) NOT NULL,
  `our_value` text NOT NULL,
  `our_value_image` varchar(255) NOT NULL,
  `our_value_status` varchar(20) NOT NULL DEFAULT '1',
  `our_value_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_value`
--

INSERT INTO `our_value` (`our_value_id`, `our_value`, `our_value_image`, `our_value_status`, `our_value_datetime`) VALUES
(1, '<p>Accountable for children&#39;s learning&amp; development<br />\r\nMaintain quality standards across the entire organization<br />\r\nBroaden the horizons of our children&#39;s experience &amp; knowledge<br />\r\nAttend to the child&#39;s individual learner potential<br />\r\nSafe and collaborative learning community<br />\r\nSensitive to the needs of our parents &amp; personnel<br />\r\nAdopt modern Instructional strategies<br />\r\nDocument to make learning visible<br />\r\nOutstanding teaching &amp; commitment to research<br />\r\nRelevant real world education aligned to the child&#39;s life experience</p>\r\n', '1698173017.png', '1', '12-11-2023 10:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `parents_teacher`
--

CREATE TABLE `parents_teacher` (
  `parents_teacher_id` int(11) NOT NULL,
  `parents_teacher` text NOT NULL,
  `parents_teacher_status` varchar(255) NOT NULL DEFAULT '1',
  `parents_teacher_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_teacher`
--

INSERT INTO `parents_teacher` (`parents_teacher_id`, `parents_teacher`, `parents_teacher_status`, `parents_teacher_datetime`) VALUES
(1, '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Parents Teacher meet is held on last day of the month to apprise the parents of the academic performance and general behavior of their wards in the school. Besides this, the general working of the school is also discussed at the meeting.</strong></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>The suggestions of the parents about the progress and constructive criticism of the working of the school are a great welcome.&nbsp;</strong></span></p>\n', '1', '22-10-2023 03:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `principle_message`
--

CREATE TABLE `principle_message` (
  `principle_message_id` int(11) NOT NULL,
  `principle_message` text NOT NULL,
  `principle_message_image` varchar(255) NOT NULL,
  `principle_message_status` varchar(20) NOT NULL DEFAULT '1',
  `principle_message_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principle_message`
--

INSERT INTO `principle_message` (`principle_message_id`, `principle_message`, `principle_message_image`, `principle_message_status`, `principle_message_datetime`) VALUES
(1, '<h1><strong>From The Principal&#39;s Desk</strong></h1>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">It gives me immense pleasure to write this message for the 25th year of SIMPTION WEBSITE DEMO.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">25 years of existence is truly a significant milestone in the life of any educational institution. Our school motto, Vimuktaye Vidya has richly guided us in making enormous strides in the education of our children. The student strength of SIMPTION WEBSITE DEMO has grown from 20 in 1988 to 2000 in 2013. Our students are contribution in all spheres of life in the society.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">A good educational institution is one that helps the overall development of a child � mind, body and character. To achieve this goal, we provide a wide array of programmes and activities so that each students can seize the opportunities afforded him/her. We are committed to attracting students of the highest caliber from our district and outside. We are equally committed to transforming each student entering our doors to become the best of the upper echelon of society.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">We at SIMPTION WEBSITE DEMO endeavor to inspire and empower our students to meet the challenges of this global village. In this process, we inculcate in our students a sense of reasoning and independent thinking. �The important thing is not to stop questioning� says Albert Einstein. Questioning is indicative of the expanse of thought, hence innovations and creativity.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Many have played an integral part in the growth and development of this institution over the past 25 yrs. I acknowledge with gratitude, the sustained efforts and dedication of all those people who gave their time, energy and vision.How can I forget the indomitable spirit of our students!!</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1698168321.png', '1', '24-10-2023 08:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `privacy_policy_id` int(11) NOT NULL,
  `privacy_policy` text NOT NULL,
  `privacy_policy_status` varchar(25) NOT NULL DEFAULT '1',
  `privacy_policy_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`privacy_policy_id`, `privacy_policy`, `privacy_policy_status`, `privacy_policy_datetime`) VALUES
(1, '<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n', '1', '05-11-2023 11:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `registration_process`
--

CREATE TABLE `registration_process` (
  `registration_process_id` int(11) NOT NULL,
  `registration_process` text NOT NULL,
  `registration_process_status` varchar(255) NOT NULL DEFAULT '1',
  `registration_process_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_process`
--

INSERT INTO `registration_process` (`registration_process_id`, `registration_process`, `registration_process_status`, `registration_process_datetime`) VALUES
(1, '<blockquote>\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Collection of the Application Form from the school front desk.</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Enter all details in the form and submit it at the school reception with the Registration Fee.</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Affix a recent coloured passport size photo of the child in the given space and also attach a recent coloured passport size family photograph on the form.</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Forms will be strictly accepted only through the parents. The child may not accompany for submission.</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Bring the completed Application form with all attested and original documents for verification.</strong></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>Remember to take the Appointment Schedule after submission of documents.</strong></span></span></li>\r\n</ul>\r\n</blockquote>\r\n', '1', '24-10-2023 08:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `school_policies`
--

CREATE TABLE `school_policies` (
  `school_policies_id` int(11) NOT NULL,
  `school_policies` text NOT NULL,
  `school_policies_status` varchar(255) NOT NULL DEFAULT '1',
  `school_policies_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_policies`
--

INSERT INTO `school_policies` (`school_policies_id`, `school_policies`, `school_policies_status`, `school_policies_datetime`) VALUES
(1, '<blockquote>\r\n<h1 style=\"text-align:justify\">School Policies</h1>\r\n\r\n<h2 style=\"text-align:justify\">Code of Conduct:</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>For smooth functioning, the school has developed the following codes of conduct which are binding on all students as well as parents:-</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">It is compulsory for every student to bring his/her School Diary and Identity Card every day to the school. Note given by a teacher should be checked and signed by the parents regularly. Parents who are asked to meet the Principal must do so within the stipulated time, otherwise the child may not be allowed to attend the school.</li>\r\n	<li style=\"text-align: justify;\">The Student should come to school in the uniform of proper design and colour as prescribed. It should be clean &amp; well ironed. The student who will not be in proper uniform will be given THREE WARNING NOTICES, after which they will be sent home. Their grade will also be affected in the Report Card.</li>\r\n	<li style=\"text-align: justify;\">A student coming without school uniform, for any reason whatsoever, will not be permitted to enter the academic block.</li>\r\n	<li style=\"text-align: justify;\">Hair style, Army cut for boys and one/two braided pony tails for girls, should be strictly adhered to.</li>\r\n	<li style=\"text-align: justify;\">75 % attendance is a must for every child to appearing in the Final Evaluation. In case of exceptional medical ground condonation of shortage of attendance is at the discretion of the Principal. If a student remains absent continuously for ten days or more without prior permission, his/her admission shall stand cancelled.</li>\r\n	<li style=\"text-align: justify;\">If a child goes absent on the last working day before a break/vacation or on the first working day after break/vacation his result will be affected. If a student is on leave on medical ground for more than two days, the photocopy of the prescription of the doctor should be submitted along with the application within three days of reporting back. Otherwise also his result will be affected.</li>\r\n	<li style=\"text-align: justify;\">A student must reach the school ten minutes before the assembly. A student coming late without prior permission, for any reason whatsoever shall be sent back.</li>\r\n	<li style=\"text-align: justify;\">At the stroke of the first bell of the day, all must move in silence to the assembly ground. Everyone is expected to stand in perfect silence and stillness until the assembly is over.</li>\r\n	<li style=\"text-align: justify;\">While going to classes after assembly or going to different venues for or after various activities the students must walk in a single file, in silence and must keep left.</li>\r\n	<li style=\"text-align: justify;\">Discipline, decency and decorum should be maintained by each student. Any act of mischief, breach of code of conduct, disobedience, disloyalty to the institute by the students or the parents can be considered an act of indiscipline. It will be at the discretion of the school Management/Principal to judge the gravity of the act and decide on the action to be taken.</li>\r\n	<li style=\"text-align: justify;\">Parents are not allowed to enter the classroom directly and not to disturb the teachers.</li>\r\n	<li style=\"text-align: justify;\">Students should keep their classes and school premises clean and tidy.</li>\r\n	<li style=\"text-align: justify;\">Running, playing and shouting inside the school building is strictly prohibited..</li>\r\n	<li style=\"text-align: justify;\">A student involved in any kind of property damage will be charged with fine/penalty and disciplinary action may also be initiated against him/her.</li>\r\n	<li style=\"text-align: justify;\">No student is allowed to leave the classroom during teaching periods or change of periods without the out pass.</li>\r\n	<li style=\"text-align: justify;\">In the absence of the teacher, the monitor assumes full responsibilities for the order and discipline of the class.</li>\r\n	<li style=\"text-align: justify;\">No student should leave school campus without written permission of the Principal.</li>\r\n	<li style=\"text-align: justify;\">Children will not be sent home even in emergency without the parents or without written permission from parents/guardian.</li>\r\n	<li style=\"text-align: justify;\">Studying in an English medium school it is obligatory to speak in English in the school campus. If found otherwise a student will be punished.</li>\r\n	<li style=\"text-align: justify;\">No student is allowed to bring mobile, i-pod or any other electronic gadget in the school campus. If found, it will be confiscated and will not be returned either to the child or to the parents.</li>\r\n	<li style=\"text-align: justify;\">If the students wear gold ornaments like chain, rings etc. or bring any other valuable article, the school management shall not be responsible for any loss thereof.</li>\r\n	<li style=\"text-align: justify;\">No exemption will be granted from compulsory games and other curricular activities without a medical certificate.</li>\r\n	<li style=\"text-align: justify;\">Attendance at official functions like Sports Day, Independence Day, Annual Day, Republic Day, Teacher&#39;s Day, Children&#39;s Day, etc is compulsory. Absentees may be fined or marks may be deducted.</li>\r\n	<li style=\"text-align: justify;\">Report Card/Progress Report after every semester/terminal evaluation must be collected by the parents/guardian.</li>\r\n	<li style=\"text-align: justify;\">It is mandatory for all the students appearing in Board exams. to take pre-board exams.(step by step confidence building method of preparation) scheduled by the school.</li>\r\n	<li style=\"text-align: justify;\">Not more than two authorced guardians/parents can meet the Principal at a time in the school office</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\">General Information for Parents:-</h3>\r\n\r\n<p style=\"text-align:justify\"><strong>Parents are requested to familiarize themselves with this diary and the rules it contains:-</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Parents must see that their children attend the school regularly and punctually.</li>\r\n	<li style=\"text-align: justify;\">Parents must inform in writing any change in their address or telephone or mobile number to the class teacher and the Principal.</li>\r\n	<li style=\"text-align: justify;\">Parents should attend all the Parents-Teacher Meetings. (Both parents should come).</li>\r\n	<li style=\"text-align: justify;\">Parents should study the reports/remarks for the child given in the diary with care and take note of the remarks seriously. They should take regular feed back from their ward.</li>\r\n	<li style=\"text-align: justify;\">Personal items such as cellphones / walkman / electronic / computer games / accessories etc. are prohibited in the school.</li>\r\n	<li style=\"text-align: justify;\">A student suffering from a contagious disease should not be sent to school till the student is completely free from infection.</li>\r\n	<li style=\"text-align: justify;\">The school cannot be held responsible for a child getting hurt while playing during school hours. However, the school pays prompt medical attention in case of any emergency. [School is paying a premium for the insurance cover of Rs. 500 against accidents that may occur in the school].</li>\r\n	<li style=\"text-align: justify;\">The child should carry his ID Card regularly in the school.</li>\r\n	<li style=\"text-align: justify;\">At times the school has to be closed due to an unavoidable and unforeseen reason. If a unit test or examination has been planned on that day, the concerned test or examination shall be held on the working day following the last test or examination of the series held.</li>\r\n	<li style=\"text-align: justify;\">A Student will be allowed to celebrate their Birthday by wearing formal dress of the their choice. The Student may donate a sapling of a tree or cash which will go towards providing educational aids to the schools of backward areas.</li>\r\n	<li style=\"text-align: justify;\">Any student caught cheating in any FA, shall get zero in that test. However, in case of SA, the child shall get zero in the test of all the subjects of that series.</li>\r\n	<li style=\"text-align: justify;\">Parents should abstain from beating their children and using physical punishment.</li>\r\n	<li style=\"text-align: justify;\">Parents should not set goals and expectations beyond the reach of their ward and not pressurce them too far, as it may lead to acute frustration or nervous break down or careless attitude.</li>\r\n	<li style=\"text-align: justify;\">All communications should be addressed to the Class Teacher through the student&#39;s Diary in the respective column given</li>\r\n	<li style=\"text-align: justify;\">Parents should not to pamper or over protect their ward by fulfilling all their demands and wishes.</li>\r\n	<li style=\"text-align: justify;\">Parents should be careful about depositing the school fee on time.</li>\r\n	<li style=\"text-align: justify;\">Important information will be sent via SMS to your mobile. You are requested to check them regularly.</li>\r\n	<li style=\"text-align: justify;\">A healthy snack should be sent with the child for the Tiffin Break.</li>\r\n	<li style=\"text-align: justify;\">Application for the leave should be in entered in the page given in the diary.</li>\r\n	<li style=\"text-align: justify;\">For Transfer Certificate one week&#39;s notice in writing should be given to the office.</li>\r\n	<li style=\"text-align: justify;\">Parents are requested not to enter the classroom directly nor to disturb the teachers.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Parents Role:-</strong> Parental involvement can never be underestimated. Understanding between the teachers and the parents is desirable for the holistic development of a child. Research shows performance of a child depends greatly on the parents involvement with the school.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n</blockquote>\r\n', '1', '18-10-2023 06:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `school_rules_regulation`
--

CREATE TABLE `school_rules_regulation` (
  `school_rules_regulation_id` int(11) NOT NULL,
  `school_rules_regulation` text NOT NULL,
  `school_rules_regulation_status` varchar(20) NOT NULL DEFAULT '1',
  `school_rules_regulation_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_rules_regulation`
--

INSERT INTO `school_rules_regulation` (`school_rules_regulation_id`, `school_rules_regulation`, `school_rules_regulation_status`, `school_rules_regulation_datetime`) VALUES
(1, '<ol>\r\n	<li><strong><span style=\"font-size:14px\">All the Pupils must attend school regularly and punctually</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">Parents must submit a leave application for more than 2 days leave. This may be done via email or written in a proper sheet of paper, sealed in an envelope and addressed to the class teacher.</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">A medical certificate must be produced if the pupil is absent for more than three days, </span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">When the pupil returns to school after the absence of even a single day or half a day, parents must state the reason in the school diary.</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">Pupils are not allowed to leave the school premises during school hours without permission. Half day leave is not to be encouraged.</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">Test and Examinations will not be rescheduled even if the absence is due to illness</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">Long leave for weddings of family members, family functions etc during school days/session will not be granted.</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">No leave will be granted to students on the days when there are school functions like Sports Day and Annual Day</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">A minimum of 80% attendance for each term is compulsory. Consideration will be made if the medical reason is justified. Pupils with attendance below 60% will have to repeat the class.</span></strong></li>\r\n	<li><strong><span style=\"font-size:14px\">The pass percentage for middle and high school is 40% in all the subjects</span></strong></li>\r\n</ol>\r\n', '1', '25-10-2023 03:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `seo_page_slug` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_description` text NOT NULL,
  `seo_status` varchar(20) NOT NULL DEFAULT '1',
  `seo_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`seo_id`, `seo_page_slug`, `seo_title`, `seo_keyword`, `seo_description`, `seo_status`, `seo_datetime`) VALUES
(1, '', 'Home', 'Home Keyword', 'Home Description', '1', '28-10-2023 09:42:32'),
(2, 'about-us', 'About Us', 'About Us keyboard', 'About Us Description', '1', '28-10-2023 09:44:13'),
(3, 'our-mission-vission', 'Our Mission & Vission', 'Our Mission & Vission keyword', 'Our Mission & Vission Description', '1', '28-10-2023 09:44:34'),
(4, 'privacy-policy', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '1', '12-11-2023 12:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_sub_title` text NOT NULL,
  `slider_banner_image` varchar(255) NOT NULL,
  `slider_page_url` text DEFAULT NULL,
  `slider_button_title` varchar(255) DEFAULT NULL,
  `slider_status` varchar(255) NOT NULL DEFAULT '1',
  `slider_datetime` varchar(255) NOT NULL,
  `slider_add_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_sub_title`, `slider_banner_image`, `slider_page_url`, `slider_button_title`, `slider_status`, `slider_datetime`, `slider_add_by`) VALUES
(1, 'Title 01', 'Sub Title 01', '1698473698.png', 'about-us', 'About Us', '1', '28-10-2023 08:14:58', '1'),
(2, 'Title 02', 'Sub Title 02', '1698473721.png', 'contact-us', 'Contact US', '1', '28-10-2023 08:15:21', '1'),
(3, 'Title 03', 'Sub Title 03', '1698473740.png', 'principal-message', 'Principal Message', '1', '28-10-2023 08:15:40', '1'),
(4, 'test', 'test', '1695907165.jpg', 'about-us', 'test', '0', '28-09-2023 03:19:25', '1'),
(5, 'Title 01', 'Sub Title 01', '', 'about-us', 'About Us', '0', '28-09-2023 04:04:39', '1'),
(6, 'Title 01', 'Sub Title 01', '1695909904.jpg', 'about-us', 'About Us', '0', '28-09-2023 04:05:04', '1'),
(7, 'Title ', 'Sub Title', '1697826066.jpg', 'about-us', 'About Us', '0', '20-10-2023 08:21:06', '1'),
(8, 'Title 02', 'Sub Title 02', '1697826200.jpg', 'our-vission', 'Our Vission', '0', '20-10-2023 08:23:20', '1'),
(9, 'Title 02', 'Sub Title', '1697826386.jpg', 'director-message', 'Director Message', '0', '20-10-2023 08:26:26', '1'),
(10, 'Title 02', 'Sub Title', '1698477841.jpg', 'parents-teacher-meeting', 'Principal Message', '0', '28-10-2023 09:24:08', '1'),
(11, '', '', '1699803939.png', 'contact-us', 'Contact Us', '0', '12-11-2023 10:45:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_religion`
--

CREATE TABLE `student_religion` (
  `religion_id` int(11) NOT NULL,
  `religion_name` varchar(255) NOT NULL,
  `religion_status` int(11) NOT NULL DEFAULT 1,
  `religion_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_religion`
--

INSERT INTO `student_religion` (`religion_id`, `religion_name`, `religion_status`, `religion_datetime`) VALUES
(1, 'Hindu', 1, '17-10-2023 12:29:12'),
(2, 'Muslim', 1, '17-10-2023 12:29:20'),
(3, 'Sikh', 1, '17-10-2023 12:29:29'),
(4, 'Christian', 1, '17-10-2023 12:29:39'),
(5, 'Jain', 1, '17-10-2023 12:29:48'),
(6, 'Buddh', 1, '17-10-2023 12:30:46'),
(7, 'Other', 1, '17-10-2023 09:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_parent`
--

CREATE TABLE `suggestion_parent` (
  `suggestion_parent_id` int(11) NOT NULL,
  `suggestion_parent` text NOT NULL,
  `suggestion_parent_status` varchar(255) NOT NULL DEFAULT '1',
  `suggestion_parent_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestion_parent`
--

INSERT INTO `suggestion_parent` (`suggestion_parent_id`, `suggestion_parent`, `suggestion_parent_status`, `suggestion_parent_datetime`) VALUES
(1, '<p><span style=\"font-size:14px\"><strong>1. Look into the School Diary daily to see the child&rsquo;s home assignments/projects, teachers&rsquo; remarks and circulars.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2. Address all communication to the Principal and not to the Class teacher or any specific teacher.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>3. Co-operate with the school to help the child progress in the right earnest.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>4. Take special care of the child&rsquo;s regularity, punctuality and discipline.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>5. Inform in writing about any change in telephone number so that MSPS reaches you for providing necessary information.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>6. Intimate in writing about the change of your address.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>7. In case of any complaint or grievance or to know about the child&rsquo;s performance, contact the Principal.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>8. Do not criticize teachers or the school in the presence of your child because it results in making the child lose respect for teachers.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>9. Pay the fee well in time.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>10. Motivate the child and do not chide him/her.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>11. Do not send Tiffin through anyone. If the child has forgotten to bring it, he can have eatables from the canteen.</strong></span></p>\r\n\r\n<h2><span style=\"font-size:14px\"><span style=\"color:#006400\"><strong>REMEMBER</strong></span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong>1. Be firm with your child. It makes him/her feel secure.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2. Ensure that he spends time for self study as well.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>3. Don&rsquo;t pamper your child.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>4. Love your child but don&rsquo;t spoil him.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>5. Correct him/her in private and not in public.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>6. Help your child not to develop bad habits. It depends on you to detect bad habits at early stages.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>7. When needed, your child is allowed to use the school phone to contact you. Please don&rsquo;t give him a mobile phone.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>8. Your child is quickly growing up. So spend some quality time with him/her to keep pace with his/her growth.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>9. Appreciate your child for whatever good he has done.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>10. Motivate him to take part in sports and co-curricular activities.</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>11. Give him/her good company so that he/she does not search for it outside.</strong></span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"color:#006400\"><strong>LET US JOIN HANDS TO MAKE THE CHILD BRIGHT AND BRILLIANT</strong></span></span></h2>\r\n', '1', '25-10-2023 02:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `terms_condition`
--

CREATE TABLE `terms_condition` (
  `terms_condition_id` int(11) NOT NULL,
  `terms_condition` text NOT NULL,
  `terms_condition_status` varchar(20) NOT NULL DEFAULT '1',
  `terms_condition_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms_condition`
--

INSERT INTO `terms_condition` (`terms_condition_id`, `terms_condition`, `terms_condition_status`, `terms_condition_datetime`) VALUES
(1, '<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our school focuses on individual learning abilities. Here every child is provided with opportunities to achieve academic success and to develop into confident and independent adults ready to face the challenge of this world. Our team of educators completely dedicated to the students helps them, guide them and support them. We provide an exceptionally caring and learning-focused environment for our students.Tiny tots of primary wing play the perfect host when they dress up as community helpers during the Mini Parent Teacher Meeting. Children pay a tribute to all the community helpers whose work makes our day-to- day lives easier.</p>\r\n', '1', '05-11-2023 11:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(255) NOT NULL,
  `testimonial_short_description` varchar(255) NOT NULL,
  `testimonial_image` varchar(255) NOT NULL,
  `testimonial_description` text NOT NULL,
  `testimonial_page` varchar(255) NOT NULL COMMENT '1=both,2=home,3=about_us',
  `testimonial_status` varchar(25) NOT NULL DEFAULT '1',
  `testimonial_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_short_description`, `testimonial_image`, `testimonial_description`, `testimonial_page`, `testimonial_status`, `testimonial_datetime`) VALUES
(1, 'Jenya Lisa 01', 'Chairman of Trustee Board', '1698224140.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '1', '12-11-2023 11:18:53'),
(2, 'Jenya Lisa 02', 'Chairman of Trustee Board', '1698221047.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '1', '12-11-2023 11:18:13'),
(3, ' Testimonial Name 03', 'Testimonial Short Description', '1698224212.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '1', '12-11-2023 11:19:00'),
(4, 'Testimonial Name 04', 'Testimonial Short Description 4', '1698224331.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '1', '12-11-2023 11:19:06'),
(5, 'test 1', 'test 1', '', 'test 1', '1', '0', '26-10-2023 01:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `vission_mission`
--

CREATE TABLE `vission_mission` (
  `vission_mission_id` int(11) NOT NULL,
  `vission_mission_title` varchar(255) NOT NULL,
  `vission_mission_description` text NOT NULL,
  `vission_mission_image` varchar(255) NOT NULL,
  `vission_mission_status` varchar(25) NOT NULL DEFAULT '1',
  `vission_mission_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vission_mission`
--

INSERT INTO `vission_mission` (`vission_mission_id`, `vission_mission_title`, `vission_mission_description`, `vission_mission_image`, `vission_mission_status`, `vission_mission_datetime`) VALUES
(1, 'Our Vision', '<p><strong>To create resposibleuniversal citizens who would be bright leaders of the 21st century by laying a superior foundation through quality education.</strong></p>\r\n', '1698153219.png', '1', '12-11-2023 10:37:52'),
(2, 'Our Mission', '<div style=\"color:black; font-family:&quot;Roboto&quot;,sans-serif\">\r\n<p><strong>Inspire our children to be passionate lifelong learners through a curriculum with pedagogical integrity, which allows them to always Inquire, innovate, and contribute in meaningful ways to society.</strong></p>\r\n</div>\r\n', '1698153253.png', '1', '12-11-2023 10:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `academic_course`
--
ALTER TABLE `academic_course`
  ADD PRIMARY KEY (`academic_course_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission_procedure`
--
ALTER TABLE `admission_procedure`
  ADD PRIMARY KEY (`admission_procedure_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`caste_id`);

--
-- Indexes for table `celebration`
--
ALTER TABLE `celebration`
  ADD PRIMARY KEY (`celebration_id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`contact_enquiry_id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`curriculum_id`);

--
-- Indexes for table `decument_required`
--
ALTER TABLE `decument_required`
  ADD PRIMARY KEY (`decument_required_id`);

--
-- Indexes for table `director_message`
--
ALTER TABLE `director_message`
  ADD PRIMARY KEY (`director_message_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`event_image_id`);

--
-- Indexes for table `fee_policies`
--
ALTER TABLE `fee_policies`
  ADD PRIMARY KEY (`fee_policies_id`);

--
-- Indexes for table `general_tbl`
--
ALTER TABLE `general_tbl`
  ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `online_form`
--
ALTER TABLE `online_form`
  ADD PRIMARY KEY (`online_form_id`);

--
-- Indexes for table `our_value`
--
ALTER TABLE `our_value`
  ADD PRIMARY KEY (`our_value_id`);

--
-- Indexes for table `parents_teacher`
--
ALTER TABLE `parents_teacher`
  ADD PRIMARY KEY (`parents_teacher_id`);

--
-- Indexes for table `principle_message`
--
ALTER TABLE `principle_message`
  ADD PRIMARY KEY (`principle_message_id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`privacy_policy_id`);

--
-- Indexes for table `registration_process`
--
ALTER TABLE `registration_process`
  ADD PRIMARY KEY (`registration_process_id`);

--
-- Indexes for table `school_policies`
--
ALTER TABLE `school_policies`
  ADD PRIMARY KEY (`school_policies_id`);

--
-- Indexes for table `school_rules_regulation`
--
ALTER TABLE `school_rules_regulation`
  ADD PRIMARY KEY (`school_rules_regulation_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `student_religion`
--
ALTER TABLE `student_religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `suggestion_parent`
--
ALTER TABLE `suggestion_parent`
  ADD PRIMARY KEY (`suggestion_parent_id`);

--
-- Indexes for table `terms_condition`
--
ALTER TABLE `terms_condition`
  ADD PRIMARY KEY (`terms_condition_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `vission_mission`
--
ALTER TABLE `vission_mission`
  ADD PRIMARY KEY (`vission_mission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_course`
--
ALTER TABLE `academic_course`
  MODIFY `academic_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_procedure`
--
ALTER TABLE `admission_procedure`
  MODIFY `admission_procedure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `caste_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `celebration`
--
ALTER TABLE `celebration`
  MODIFY `celebration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `contact_enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `curriculum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `decument_required`
--
ALTER TABLE `decument_required`
  MODIFY `decument_required_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `director_message`
--
ALTER TABLE `director_message`
  MODIFY `director_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `event_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fee_policies`
--
ALTER TABLE `fee_policies`
  MODIFY `fee_policies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_tbl`
--
ALTER TABLE `general_tbl`
  MODIFY `general_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_form`
--
ALTER TABLE `online_form`
  MODIFY `online_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_value`
--
ALTER TABLE `our_value`
  MODIFY `our_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents_teacher`
--
ALTER TABLE `parents_teacher`
  MODIFY `parents_teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `principle_message`
--
ALTER TABLE `principle_message`
  MODIFY `principle_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `privacy_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_process`
--
ALTER TABLE `registration_process`
  MODIFY `registration_process_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_policies`
--
ALTER TABLE `school_policies`
  MODIFY `school_policies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_rules_regulation`
--
ALTER TABLE `school_rules_regulation`
  MODIFY `school_rules_regulation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_religion`
--
ALTER TABLE `student_religion`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suggestion_parent`
--
ALTER TABLE `suggestion_parent`
  MODIFY `suggestion_parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_condition`
--
ALTER TABLE `terms_condition`
  MODIFY `terms_condition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vission_mission`
--
ALTER TABLE `vission_mission`
  MODIFY `vission_mission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
