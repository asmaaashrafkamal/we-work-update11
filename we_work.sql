-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 11:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project2`
--

CREATE TABLE `add_project2` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(60) DEFAULT NULL,
  `home_img` text NOT NULL,
  `home_position` text NOT NULL,
  `client_name` text DEFAULT NULL,
  `project_date` text NOT NULL,
  `project_url` text DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `subcat_name1` text NOT NULL,
  `subcat_name2` text NOT NULL,
  `subcat_name3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project2`
--

INSERT INTO `add_project2` (`project_id`, `project_name`, `home_img`, `home_position`, `client_name`, `project_date`, `project_url`, `description`, `created_at`, `subcat_name1`, `subcat_name2`, `subcat_name3`) VALUES
(12, 'SLSStream', 'sls3.jpg', 'category/sls3.jpg', '', '2021-06-12', 'https://play.google.com/store/apps/details?id=com.wework.slsstream', 'SLSStream social-media , livestream and e-commerce all in one app for both customers and sellers customers can purchasing products from sellers live , and using the power of social media like chatting , follow up the sellers , keep up with their new activities ,add new ideas and share them. sellers can show and sell their products to the customers using live stream or just adding it to their timeline and managing the business from in-app Dashboard.', '2021-10-26 03:25:47', 'Software Engineering', 'Mobile Apps', ' '),
(13, 'Wander Guide', 'wegather.jpg', 'category/wegather.jpg', '', '2021-04-25', ' www.wanderguide.net', 'Wander Guide is an international platform for live experiences that provide organizers with manage, advertise and online ticket selling services', '2021-10-26 03:38:04', 'Software Engineering', 'Web Development', ' '),
(14, 'The Magic Style', 'magic.jpg', 'category/magic.jpg', '', '2021-03-25', 'www.themagicstyle.com', 'Your best way to choose your outfit Be attractive Be amazing.', '2021-10-26 03:39:45', 'Software Engineering', 'Web Development', ' '),
(15, 'Ramakeen', 'ramakeen.jpg', 'category/ramakeen.jpg', 'Ramakeen Office', '2021-05-25', 'https://ramakeen.com/index.html', 'team of lawyers,providing solid legal services.', '2021-10-26 04:43:25', 'Software Engineering', 'Web Development', ' '),
(16, 'Chef Khalil', 'cheif.jpg', 'category/cheif.jpg', '', '2021-06-25', 'www.chefkhalil.com', 'Achieving the best culinary arts education platform in the Arab Kingdom.', '2021-10-26 05:13:27', 'Software Engineering', 'Web Development', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `add_project_file2`
--

CREATE TABLE `add_project_file2` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project_file2`
--

INSERT INTO `add_project_file2` (`id`, `name`, `position`) VALUES
(12, 'slss.jpg', 'category/slss.jpg'),
(12, 'slss2.jpg', 'category/slss2.jpg'),
(13, 'weg1.jpg', 'category/weg1.jpg'),
(13, 'weg2.jpg', 'category/weg2.jpg'),
(13, 'weg3.jpg', 'category/weg3.jpg'),
(13, 'weg4.jpg', 'category/weg4.jpg'),
(14, 'magic1.jpg', 'category/magic1.jpg'),
(14, 'magic2.jpg', 'category/magic2.jpg'),
(14, 'magic3.jpg', 'category/magic3.jpg'),
(14, 'magic4.jpg', 'category/magic4.jpg'),
(15, 'web1.jpg', 'category/web1.jpg'),
(15, 'web2.jpg', 'category/web2.jpg'),
(15, 'web3.jpg', 'category/web3.jpg'),
(15, 'web4.jpg', 'category/web4.jpg'),
(16, 'ch1.jpg', 'category/ch1.jpg'),
(16, 'ch2.jpg', 'category/ch2.jpg'),
(16, 'ch3.jpg', 'category/ch3.jpg'),
(16, 'ch4.jpg', 'category/ch4.jpg'),
(16, 'ch5.jpg', 'category/ch5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_team`
--

CREATE TABLE `add_team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job_title` text NOT NULL,
  `job_description` text NOT NULL,
  `image_name` text NOT NULL,
  `image_position` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_team`
--

INSERT INTO `add_team` (`id`, `name`, `job_title`, `job_description`, `image_name`, `image_position`, `created_at`) VALUES
(2, 'Osama Halawani', 'C.E.O', 'managing the overall operations and resources of a company.', 'ceo 1.jpg', 'category/ceo 1.jpg', '2021-09-26 03:55:10'),
(3, 'Dina Mohamed', 'GENERAL MANAGER', 'Develop strategic plans for optimized productivity.', 'dina.jpg', 'category/dina.jpg', '2021-09-26 03:56:02'),
(4, 'Reham Owais', 'DESIGNER', 'Interior & Exterior Designer', 'reham.jpg', 'category/reham.jpg', '2021-09-26 03:56:57'),
(5, 'Asmaa Ashraf', 'DEVELOPER', 'Back-End Developer', 'asmaa.jpg', 'category/asmaa.jpg', '2021-09-26 03:57:28'),
(6, 'Amira Hitham', 'GRAPHIC DESIGNER', 'Head of Marketing & Graphic Team', 'amira 1.jpg', 'category/amira 1.jpg', '2021-09-26 03:58:20'),
(7, 'Dalal Elsayed', 'DEVELOPER', 'Front-End Developer & UI/UX Designer', 'dalola.jpg', 'category/dalola.jpg', '2021-09-26 03:59:05'),
(8, 'Yara mohamed', 'DEVELOPER', 'Flutter Developer', 'yaraf.jpg', 'category/yaraf.jpg', '2021-09-26 04:00:36'),
(9, 'Mohamed Elredeny', 'DEVELOPER', 'Back-End Developer', 'mohamed.jpg', 'category/mohamed.jpg', '2021-09-26 04:01:51'),
(10, 'Martina Girgis', 'DEVELOPER', 'Back-End Developer', 'martina.jpg', 'category/martina.jpg', '2021-09-26 04:02:39'),
(11, 'Rana Saied', 'SALES', 'Sales Representative', 'r.jpg', 'category/r.jpg', '2021-09-26 04:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE `category_name` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`cat_id`, `cat_name`) VALUES
(8, 'Software Engineering'),
(9, 'Decoration'),
(10, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `position`) VALUES
(8, 'client/c1.png'),
(9, 'client/c2.png'),
(10, 'client/c3.png'),
(11, 'client/c4.png'),
(12, 'client/c6.png'),
(13, 'client/c7.png'),
(14, 'client/c8.png'),
(15, 'client/c9.png'),
(16, 'client/cc7.png'),
(17, 'client/dona.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_category`
--

CREATE TABLE `home_category` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_category`
--

INSERT INTO `home_category` (`id`, `cat`, `description`) VALUES
(1, 'Software Engineering', 'Responsible for designing and developing systems and software.'),
(2, 'Design', 'The fields of design art span a number of different branches.'),
(3, 'Marketing', 'Discover customers\' desires and develop services to satisfy their desires.'),
(4, 'Business Development', 'Business development outside the scope of the current site.');

-- --------------------------------------------------------

--
-- Table structure for table `home_header`
--

CREATE TABLE `home_header` (
  `id` int(11) NOT NULL,
  `home_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_header`
--

INSERT INTO `home_header` (`id`, `home_position`) VALUES
(1, 'home/h2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `description` text NOT NULL,
  `home_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `cat`, `description`, `home_position`) VALUES
(1, 'Software Engineering', ' It is concerned with developing and creating high-quality software, taking into account the user\'s interests, needs and requirements at all levels, and it is generally concerned with analyzing software, designs and how to build them, and works to verify them, and even manage them, until we engineer correct and sound software.', 'home/progwe.png'),
(2, 'Design', ' Graphic design is the link between the customer and the service owner, as it conveys a specific message to the customer in an attractive and eye-catching way, and enables you to tell your ideas in your own way that distinguishes you from the rest of the competitors, which facilitates the process of convincing the customer of your product or service that you offer to him through the design.', 'home/design 2.jpg'),
(3, 'Marketing', ' The strategic marketing process involves conducting research and setting goals and objectives that will increase the effectiveness and success of your overall marketing strategy.\r\n\r\nThis process is useful because it helps you to be more assertive in your marketing, as you will be able to ensure that you are targeting the right audience, entering the right markets, and using the right channels.\r\n\r\nYou can think of it this way: Strategic marketing is the butter you put on the bread, you get the bread as is but the butter enhances the flavor and makes the bread better. Strategic marketing ensures that your marketing campaigns are well-planned, effective and visible to the right people. ', 'home/marketing 1.jpg'),
(4, 'Business Development', ' Responsible for increasing the profits and revenues of the company, in addition to the growth in the scope of business expansion, and making strategic business decisions. Business development requires the use of some important techniques, which include assessing marketing opportunities and target markets, gathering intelligence on customers and competitors, and advising on policies and sales operations. Sales activity follow-up and business model design.\r\n\r\nThe tasks of the business developer include evaluating the business and then achieving it in an integrated manner, through the use of marketing, information management, and customer service in the company, to develop it in a way that helps the company grow and prosper, as well as includes after-sales services to ensure that the product reaches high quality to customers.', 'home/business 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services2`
--

CREATE TABLE `home_services2` (
  `id` int(11) NOT NULL,
  `point` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_services2`
--

INSERT INTO `home_services2` (`id`, `point`) VALUES
(1, ' Websites.'),
(1, ' Mobile applications.'),
(1, ' Artificial Intelligence.'),
(2, ' Interior and Exterior Designs.'),
(2, ' Graphic Design.'),
(2, ' Social Media Posts.'),
(2, ' Visual Identity Design.'),
(2, ' Motion Graphic.'),
(2, ' UI/UX.');

-- --------------------------------------------------------

--
-- Table structure for table `home_whyus`
--

CREATE TABLE `home_whyus` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `home_position` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_whyus`
--

INSERT INTO `home_whyus` (`id`, `description`, `home_position`, `link`) VALUES
(1, ' Because we provide you with everything you need for your company And we have a group of specialists whether in a specialty,', 'home/why 1.png', 'https://youtu.be/F8X3jyRyc5g');

-- --------------------------------------------------------

--
-- Table structure for table `home_whyus2`
--

CREATE TABLE `home_whyus2` (
  `id` int(11) NOT NULL,
  `point` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_whyus2`
--

INSERT INTO `home_whyus2` (`id`, `point`) VALUES
(1, 'Software Engineering.'),
(1, 'Marketing.'),
(1, 'Photography.'),
(1, 'Designs.'),
(1, 'And also help you develop business.');

-- --------------------------------------------------------

--
-- Table structure for table `join1`
--

CREATE TABLE `join1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `job_title` text NOT NULL,
  `job_description` text NOT NULL,
  `image_position` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'dina_mohamed@gmail.com', 'dinamohamed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(11) NOT NULL,
  `cat_name` varchar(60) DEFAULT NULL,
  `subcat1_name` varchar(60) DEFAULT NULL,
  `subcat1_img` text NOT NULL,
  `subcat1_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `cat_name`, `subcat1_name`, `subcat1_img`, `subcat1_position`) VALUES
(9, 'Decoration', 'Interior Design', 'interior.jpg', 'category/interior.jpg'),
(9, 'Decoration', 'Exterior Design', 'exterior.jpg', 'category/exterior.jpg'),
(10, 'Marketing', 'Social Media', 'social media.jpg', 'category/social media.jpg'),
(10, 'Marketing', 'Digital Marketing', 'marketing.jpg', 'category/marketing.jpg'),
(8, 'Software Engineering', 'Mobile Apps', 'mob.png', 'category/mob.png'),
(8, 'Software Engineering', 'Web Development', 'web.png', 'category/web.png'),
(8, 'Software Engineering', 'Artificial Intelligence', 'ai.png', 'category/ai.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_cat`
--

CREATE TABLE `sub_sub_cat` (
  `sub_sub_id` int(11) NOT NULL,
  `cat_name` text DEFAULT NULL,
  `subcat_name` text DEFAULT NULL,
  `subcat1_name` text DEFAULT NULL,
  `subcat1_img` text NOT NULL,
  `subcat1_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_cat`
--

INSERT INTO `sub_sub_cat` (`sub_sub_id`, `cat_name`, `subcat_name`, `subcat1_name`, `subcat1_img`, `subcat1_position`) VALUES
(9, 'Decoration', 'Interior Design', 'Classic', 'classic.jpg', 'category/classic.jpg'),
(9, 'Decoration', 'Interior Design', 'Modern', 'modern.jpg', 'category/modern.jpg'),
(9, 'Decoration', 'Interior Design', 'Neo Classic', 'neoclassic.jpg', 'category/neoclassic.jpg'),
(9, 'Decoration', 'Exterior Design', 'Classic Exterior', 'classic ex.jpg', 'category/classic ex.jpg'),
(9, 'Decoration', 'Exterior Design', 'Modern Exterior', 'modern ex.jpg', 'category/modern ex.jpg'),
(10, 'Marketing', 'Digital Marketing', 'Art and Illustration', 'illustration.png', 'category/illustration.png'),
(10, 'Marketing', 'Digital Marketing', 'Advertising Graphic Design', 'advertising.png', 'category/advertising.png'),
(10, 'Marketing', 'Digital Marketing', 'Motion Graphic design', 'motion graphic design-01.png', 'category/motion graphic design-01.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_project2`
--
ALTER TABLE `add_project2`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `add_project_file2`
--
ALTER TABLE `add_project_file2`
  ADD KEY `id` (`id`);

--
-- Indexes for table `add_team`
--
ALTER TABLE `add_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_name`
--
ALTER TABLE `category_name`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_category`
--
ALTER TABLE `home_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_header`
--
ALTER TABLE `home_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_whyus`
--
ALTER TABLE `home_whyus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join1`
--
ALTER TABLE `join1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD KEY `sub_id` (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_project2`
--
ALTER TABLE `add_project2`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `add_team`
--
ALTER TABLE `add_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_name`
--
ALTER TABLE `category_name`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `home_category`
--
ALTER TABLE `home_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_header`
--
ALTER TABLE `home_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_whyus`
--
ALTER TABLE `home_whyus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `join1`
--
ALTER TABLE `join1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_project_file2`
--
ALTER TABLE `add_project_file2`
  ADD CONSTRAINT `add_project_file2_ibfk_1` FOREIGN KEY (`id`) REFERENCES `add_project2` (`project_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `sub_cat_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `category_name` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
