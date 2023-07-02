-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 05:03 PM
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
-- Database: `fsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `datetime` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `datetime`, `username`, `password`, `aname`, `addedby`) VALUES
(1, '2023/05/34', 'criz', 'sriiaiskn', 'srijan', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `datetime` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `title` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `author`, `title`) VALUES
(2, 'June-24-2023 18:26:36', 'criz', 'Notice'),
(3, 'June-25-2023 06:52:52', 'criz', 'News');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `datetime`, `subject`, `message`) VALUES
(28, 'June-30-2023 00:35:03', 'wqa', 'Pani Ganayo'),
(29, 'June-30-2023 00:35:27', 'Pani Ganayo', 'Hijo pani peuda nikai ganako thyo tyei pani piye, Tyei vara hola beluka pet dukhera hairan vayo. So yo problem kasari hunxa solve garnu paryo'),
(30, 'June-30-2023 12:56:35', 'Hey there', 'what\'s up fsu '),
(31, 'June-30-2023 13:42:24', 'srijan', 'srijan is bad boy'),
(32, 'July-01-2023 07:35:24', 'Hey there ACES and FSU', 'Thanks for this web design competition. Its mean a lot for us');

-- --------------------------------------------------------

--
-- Table structure for table `event_post`
--

CREATE TABLE `event_post` (
  `id` int(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_post`
--

INSERT INTO `event_post` (`id`, `datetime`, `admin`, `title`, `date`, `time`, `location`, `description`, `type`) VALUES
(11, 'June-28-2023 21:34:29', 'criz', ' Annual College Fest: Unleash the Vibrant Spirit of Purwanchal Campus.', '23 july', '8:30 am', 'Purwanchal Campus Ground', '<p><strong>Get ready for the most exhilarating event of the year</strong>! ERC proudly presents &#39;Euphoria 2023&#39;, our annual college fest filled with electrifying performances, thrilling competitions, and endless entertainment. Join us for a weekend of non-stop fun, including<em><strong> live music, dance battles, fashion shows, art exhibitions</strong></em>, and much more.</p>\r\n', 'Upcoming'),
(12, 'June-28-2023 21:36:48', 'criz', 'College Alumni Homecoming: Reconnect, Celebrate', '28 july', '11 am', 'Purwanchal Campus Ground', '<p>Calling all alumni! <strong>ERC</strong> welcomes you back for a memorable<strong> Homecoming event</strong>. Reconnect with old friends, reminisce about cherished memories, and celebrate the milestones achieved since your graduation. Enjoy a night of live music, delicious food, and engaging activities that will transport you back to your college days.<em><strong> Catch up with former classmates, faculty, and staff, and discover how your alma mater has evolved.</strong></em></p>\r\n', 'Upcoming'),
(13, 'June-28-2023 21:39:55', 'criz', 'College Career Fair: Connect with Leading Employers ', '30 june', '10 am', 'Seminar hall', '<p>College Name] presents the highly anticipated Career Fair, where you can explore a multitude of career opportunities and connect with top-tier employers. Discover internships, entry-level positions, and potential career paths in various industries. Engage in insightful conversations, attend informative workshops, and network with recruiters who are seeking talented individuals like you.</p>\r\n', 'Running'),
(14, 'June-28-2023 21:41:35', 'criz', 'College Sports Day: Unleash Your Athletic Prowess', '4 Aug', '7 am', 'Purwanchal Campus Ground', '<p><strong>It&#39;s time to showcase your sporting talent! </strong>Join us for ERC&#39;s Sports Day, a thrilling event that brings together students, faculty, and staff in friendly athletic competitions. From track and field events to team sports like soccer, basketball, and volleyball, this day is all about celebrating the spirit of sportsmanship, teamwork, and healthy competition.&nbsp;</p>\r\n', 'Upcoming'),
(15, 'June-29-2023 21:43:10', 'criz', 'पुर्वाञ्चल कलेजबाट साहित्य तथा संस्कृति', 'JUN 30', '7:00 AM - 5:00 PM', 'पुर्वाञ्चल कलेज', '<p>यस सप्ताहमा<strong>&nbsp;साहित्य, संस्कृति, भाषा, गीत, नाच र नाटक&nbsp;</strong>लाई गौरवपूर्वक मान्यता दिइने छ। यो सप्ताह दरम्यान संघ र विभिन्न साहित्यिक संस्था द्वारा कार्यक्रम आयोजना गरिने छन् जसले अभियानहरू, प्रदर्शनी, पाठशाला, कविता पाठ, कार्यशाला, कार्यक्रम आदि समेट्दछ</p>\r\n', 'Running'),
(17, 'July-02-2023 11:27:52', 'criz', 'jheabsz', 'Feb 21', '11:00 - 5:00 PM', 'Hariyali Wan', '<p>hqwnbas</p>\r\n', 'Upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `datetime`, `title`, `image`, `description`, `stock`) VALUES
(13, 'June-29-2023 18:17:51', 'Adhesive bandages ', 'adhesive bandagge.jpeg', '<p>For covering small cuts, blisters.</p>\r\n', 'Limited'),
(14, 'June-29-2023 18:35:29', 'Sterile gauze pads', 'guage pad.jpeg', '<p>Used to dress larger wounds or apply pressure to stop bleeding.</p>\r\n', 'Limited'),
(15, 'June-29-2023 18:37:54', 'Antiseptic wipes', 'Antiseptic wipes.jpeg', '<p>Used to clean wounds and prevent infection.</p>\r\n', 'Available'),
(16, 'June-29-2023 18:39:43', 'Disposable gloves and face masks', 'gloves.jpeg', '<p>For protecting both the caregiver and the injured person from contamination.</p>\r\n', 'Available'),
(17, 'June-29-2023 18:44:43', 'Antacids', 'antacid.jpeg', '<p>For relief from indigestion or heartburn.</p>\r\n', 'Out of stock'),
(18, 'June-29-2023 18:52:58', 'CPR instructions or first aid manual', 'manual.png', '<p>For reference in emergencies.</p>\r\n', 'Available'),
(19, 'June-29-2023 19:07:48', 'Amoxicillin', 'amoxicillin.jpeg', '<p>Amoxicillin&nbsp; is used to prevent or treat infections.&nbsp;</p>\r\n', 'Limited'),
(20, 'June-29-2023 19:10:14', 'Dopamine', 'dopamin.jpeg', '<p>Dopamine&nbsp; is a medicine used to treat shock and low blood pressure.</p>\r\n', 'Limited'),
(21, 'June-29-2023 19:13:02', 'Decold Tablet', 'th.jpeg', '<p>Decold Tablet is used to treat common cold symptoms.</p>\r\n', 'Out of stock');

-- --------------------------------------------------------

--
-- Table structure for table `news_post`
--

CREATE TABLE `news_post` (
  `id` int(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `summary` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_post`
--

INSERT INTO `news_post` (`id`, `admin`, `datetime`, `category`, `title`, `image`, `post`, `summary`) VALUES
(8, 'criz', 'June-28-2023 21:09:23', 'News', 'Career Fair 2023 - Explore Exciting Opportunities and Connect with Leading Employers', 'opportunity.jpeg', '<p>College Name] is thrilled to present Career Fair 2023, the ultimate platform for students and alumni to explore a wide range of exciting career opportunities. Join us on [date] at [venue] to network with top-tier employers, attend insightful workshops and panel discussions, and showcase your skills to industry professionals. Whether you&#39;re seeking internships, entry-level positions, or planning your future career path, this event is a must-attend. Prepare your resume, dress professionally, and get ready to make meaningful connections that can shape your professional journey. Don&#39;t miss out on this invaluable opportunity!</p>\r\n', 'Whether you\'re seeking internships, entry-level positions, or planning your future career path, this event is a must-attend.  Don\'t let it go.'),
(9, 'criz', 'June-28-2023 21:13:30', 'Notice', 'College Club Registration: Join the Debating Society and Enhance Your Communication and Critical Thinking Skills', 'debate.jpeg', '<p>Are you passionate about expressing your opinions and engaging in intellectual debates? Look no further! The Debating Society at [College Name] is now open for registrations. Join our vibrant community of students dedicated to honing their communication, persuasion, and critical thinking skills. Participate in friendly debates, workshops, and competitions, and broaden your perspectives while building lifelong friendships. Whether you are a seasoned debater or new to the world of public speaking, we welcome students from all disciplines. Don&#39;t miss the chance to join our dynamic society and unlock your full potential! hello</p>\r\n\r\n<p>&nbsp;</p>\r\n', ' Whether you are a seasoned debater or new to the world of public speaking, we welcome students from all disciplines.'),
(10, 'criz', 'June-28-2023 21:23:10', 'Notice', 'College Scholarship Announcement: Apply Now for the Annual Academic Excellence Scholarship Program', 'OIP.jpeg', '<p>We are delighted to announce the opening of applications for our prestigious Annual Academic Excellence Scholarship Program at [College Name]. This scholarship is designed to recognize and support outstanding students who have demonstrated exceptional academic achievements and a passion for learning. Selected recipients will receive financial assistance to pursue their higher education goals at our esteemed institution. Don&#39;t miss this opportunity to invest in your future. Visit our website or contact the scholarship office for eligibility criteria, application deadlines, and submission instructions. Take the first step towards a brighter tomorrow!</p>\r\n', 'This scholarship is designed to recognize and support outstanding students who have demonstrated exceptional academic achievements and a passion for learning.Don\'t miss the opportunity.'),
(11, 'criz', 'June-28-2023 21:25:52', 'Notice', 'College Sports Trials: Showcase Your Athletic Talent and Join Our Winning Team', 'sport.jpeg', '<p>Showcase Your Athletic Talent and Join Our Winning Team Description: Calling all talented athletes! [College Name] is conducting sports trials for the upcoming academic year. If you have a passion for sports and want to represent our college in intercollegiate competitions, this is your chance. Show us your skills, determination, and teamwork in trials conducted for various sports disciplines. From basketball and soccer to swimming and track and field, we welcome students with diverse athletic abilities. Join our winning team, benefit from professional coaching, and create unforgettable memories through the thrill of competitive sports. Gear up and let your sporting journey begin!</p>\r\n', 'Gear up and let your sporting journey begin!'),
(12, 'criz', 'June-28-2023 21:30:30', 'Notice', 'पुर्वाञ्चल कलेजबाट प्रयोगशाला सञ्चालनको सूचना', 'entepanership.jpeg', '<p>पुर्वाञ्चल कलेजबाट सबै विद्यार्थीहरूलाई सूचित गरिन्छ। हाम्रो कलेजको विज्ञान प्रयोगशालामा तात्पर्य रहेका अवधारणा र अध्ययनलाई समयसारणीमा अनुरूप तथा प्रयोगशालाको निर्माण, संचालन र उपयोगको अनुरूप सजिलै भएको छ। यसबाट विद्यार्थीहरूले विभिन्न विज्ञान प्रयोगहरू गर्न सक्ने छन् र आफ्नो ज्ञान विस्तार गर्न सक्ने छन्। यसबाट हामी सबैलाई विद्यार्थीहरूलाई आग्रह गर्दछौं कि विज्ञान प्रयोगशालामा सावधानी र स्वच्छता बनायाउनुहोस्।&nbsp;पुर्वाञ्चल कलेजबाट सबै विद्यार्थीहरूलाई सूचित गरिन्छ। हाम्रो कलेजको विज्ञान प्रयोगशालामा तात्पर्य रहेका अवधारणा र अध्ययनलाई समयसारणीमा अनुरूप तथा प्रयोगशालाको निर्माण, संचालन र उपयोगको अनुरूप सजिलै भएको छ। यसबाट विद्यार्थीहरूले विभिन्न विज्ञान प्रयोगहरू गर्न सक्ने छन् र आफ्नो ज्ञान विस्तार गर्न सक्ने छन्। यसबाट हामी सबैलाई विद्यार्थीहरूलाई आग्रह गर्दछौं कि विज्ञान प्रयोगशालामा सावधानी र स्वच्छता बनायाउनुहोस्।&nbsp;पुर्वाञ्चल कलेजबाट सबै विद्यार्थीहरूलाई सूचित गरिन्छ। हाम्रो कलेजको विज्ञान प्रयोगशालामा तात्पर्य रहेका अवधारणा र अध्ययनलाई समयसारणीमा अनुरूप तथा प्रयोगशालाको निर्माण, संचालन र उपयोगको अनुरूप सजिलै भएको छ। यसबाट विद्यार्थीहरूले विभिन्न विज्ञान प्रयोगहरू गर्न सक्ने छन् र आफ्नो ज्ञान विस्तार गर्न सक्ने छन्। यसबाट हामी सबैलाई विद्यार्थीहरूलाई आग्रह गर्दछौं कि विज्ञान प्रयोगशालामा सावधानी र स्वच्छता बनायाउनुहोस्।</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'पुर्वाञ्चल कलेजबाट सबै विद्यार्थीहरूलाई सूचित गरिन्छ'),
(14, 'criz', 'June-30-2023 21:06:29', 'News', 'Government Introduces New Education Policy to Enhance Quality of Nepali Education', '360_F_272784427_ct2LctMwGutHuaxtPjOPq5DgKCzteLF6.jpg', '<p>Hey there FSU and ACES The Nepali government recently unveiled a comprehensive new education policy aimed at improving the quality of education in the country. The policy, titled &quot;<strong>Education for All</strong>: <strong>Empowering Nepali Minds</strong>,&quot; seeks to address the existing challenges faced by the education system and foster a conducive learning environment for students.</p>\r\n\r\n<p>Under the new policy, the government plans to prioritize access to education for all, ensuring that every child in Nepal has equal opportunities to learn and grow. The policy emphasizes the importance of inclusive education, aiming to eliminate gender disparities and ensure education for marginalized and disadvantaged communities.</p>\r\n\r\n<p>One of the key aspects of the policy is the enhancement of teaching quality and the professional development of teachers. The government intends to provide comprehensive training programs and support systems to teachers, enabling them to deliver high-quality education. The policy also focuses on improving the curriculum, incorporating modern teaching methods, and promoting critical thinking and problem-solving skills among students.</p>\r\n\r\n<p><a href=\"https://static.vecteezy.com/system/resources/previews/002/294/868/original/digital-learning-web-banner-design-students-study-with-mobile-phone-during-online-class-online-education-digital-classroom-e-learning-concept-header-or-footer-banner-free-vector.jpg\"><img alt=\"\" src=\"https://static.vecteezy.com/system/resources/previews/002/294/868/original/digital-learning-web-banner-design-students-study-with-mobile-phone-during-online-class-online-education-digital-classroom-e-learning-concept-header-or-footer-banner-free-vector.jpg\" style=\"height:26px; width:100px\" /></a></p>\r\n\r\n<p>To enhance the effectiveness of the education system, the policy highlights the importance of technology integration in classrooms. The government plans to provide schools with digital learning resources, promote e-learning platforms, and equip teachers with the necessary digital skills to facilitate online and blended learning.</p>\r\n\r\n<p>Furthermore, the policy emphasizes the importance of vocational and technical education, aiming to equip students with practical skills that can contribute to the country&#39;s workforce and economic growth. It also aims to strengthen the collaboration between educational institutions and industries to bridge the gap between academia and the job market.</p>\r\n\r\n<p>The new education policy has garnered positive responses from educators, experts, and parents who hope that it will bring significant improvements to the Nepali education system. The government&#39;s commitment to enhancing the quality of education and providing equal opportunities for all students is seen as a crucial step towards building a knowledgeable and skilled society in Nepal.</p>\r\n', 'Education for All: Empowering Nepali Minds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_post`
--
ALTER TABLE `event_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_post`
--
ALTER TABLE `news_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `event_post`
--
ALTER TABLE `event_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news_post`
--
ALTER TABLE `news_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
