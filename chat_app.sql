-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2023 at 07:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `dt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `uname`, `msg`, `dt`) VALUES
(65, '@_Anonymous  574764273', 'HiðŸ‘‹', '22-11-04 11:47am'),
(66, '@_Anonymous  1522463473', 'Wassup', '22-11-04 11:47am'),
(67, '@_Anonymous  272728927', 'How is everything going on here?', '22-11-04 11:48am'),
(68, '@_Anonymous  1444518282', 'Can\'t recognize my selfðŸ™ƒ', '22-11-04 11:48am'),
(69, '@_Anonymous  303113830', 'Same here ðŸ‘†', '22-11-04 11:49am'),
(70, '@_Anonymous  75790073', 'That\'s why is anonymous ðŸ¤¤', '22-11-04 11:49am'),
(71, '@_Anonymous  190580917', 'Hhii', '22-11-05 11:45pm'),
(72, '@_Anonymous  1551205920', 'Gbgjr', '22-11-06 08:24pm'),
(73, '@_Anonymous  70486927', 'Yjfffj', '22-11-06 08:24pm'),
(74, '@_Anonymous  669398086', 'Hello', '22-11-06 08:51pm'),
(75, '@_Anonymous  837952940', 'Hello', '22-11-06 08:52pm'),
(76, '@_Anonymous  783570219', 'Dyrrtg', '22-11-06 08:53pm'),
(77, '@_Anonymous  267597257', 'Gsueie', '22-11-06 08:54pm'),
(78, '@_Anonymous  853013712', 'Hello', '22-11-08 09:20am'),
(79, '@_Anonymous  1599282614', 'Baby â£ï¸', '22-11-08 02:23pm'),
(80, '@_Anonymous  1381166105', 'Iebggrvvr', '22-11-08 02:23pm'),
(81, '@_Anonymous  864818566', 'Hrhevvr', '22-11-08 02:23pm'),
(82, '@_Anonymous  921043872', 'Hello', '22-11-30 06:09pm'),
(83, '@_Anonymous  1649913595', 'How are you', '22-11-30 06:09pm'),
(84, '@_Anonymous  1062901577', 'Hi', '22-12-01 07:42pm'),
(85, '@_Anonymous  525451514', 'Hello', '22-12-01 07:42pm');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(526, '157', '', ' ', 'Good', '', '1667827162'),
(534, '154', '', ' ', '', '', '1667913941');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(154, '', 'upload/IMG_20220927_172811_502.jpg', 'Smile ðŸ¥°', '1667564656'),
(155, '', 'upload/IMG-20221103-WA0005.jpg', 'HiðŸ‘‹', '1667564803'),
(156, '', 'upload/IMG-20221027-WA0021.jpg', 'Hello ðŸ‘‹', '1667564939'),
(157, '', 'upload/IMG_20220820_150142_866.jpg', 'What that', '1667763750'),
(158, '', 'upload/IMG_20221105_202952_953.jpg', 'Bejeiek', '1667763779'),
(160, '', 'upload/IMG_20221105_194716_694.jpg', 'Happy day ðŸ˜Š', '1668854164'),
(161, '', 'upload/IMG_20221105_194716_694.jpg', 'Happy day ðŸ˜Š', '1668854262');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(30) NOT NULL,
  `original_path` text NOT NULL,
  `thumbnail_path` text NOT NULL,
  `text` varchar(2000) NOT NULL,
  `link` varchar(500) NOT NULL,
  `tm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `original_path`, `thumbnail_path`, `text`, `link`, `tm`) VALUES
(42, 'originals/Screenshot_20221101-114539_1.png', 'thumbnails/Screenshot_20221101-114539_1.png', 'Read And Understand..', 'http://logans002.42web.io/', '22-11-04 01:20pm'),
(43, 'originals/Screenshot_20221101-115443_1.png', 'thumbnails/Screenshot_20221101-115443_1.png', 'Read And Understand..', 'http://logans002.42web.io/', '22-11-04 01:21pm'),
(44, 'originals/Screenshot_20221101-115630_1.png', 'thumbnails/Screenshot_20221101-115630_1.png', 'Read And Understand..', 'http://logans002.42web.io/', '22-11-04 01:21pm'),
(45, 'originals/Screenshot_20221101-150941_1.png', 'thumbnails/Screenshot_20221101-150941_1.png', 'Read And Understand..', 'http://logans002.42web.io/', '22-11-04 01:22pm'),
(46, 'originals/Screenshot_20221101-155024_1.png', 'thumbnails/Screenshot_20221101-155024_1.png', 'Read And Understand..', 'http://logans002.42web.io/', '22-11-04 02:36pm');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(30) NOT NULL,
  `original_path` text NOT NULL,
  `thumbnail_path` text NOT NULL,
  `text` varchar(2000) NOT NULL,
  `link` varchar(500) NOT NULL,
  `tm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `original_path`, `thumbnail_path`, `text`, `link`, `tm`) VALUES
(26, 'originals/Screenshot_20221107-074243_1.png', 'thumbnails/Screenshot_20221107-074243_1.png', 'Peter Obi snapped at Dino Melaye during Arise TV debate (video)', 'https://pmnewsnigeria.com/2022/11/07/peter-obi-snapped-at-dino-melaye-during-arise-tv-debate-video/', '22-11-07 07:48am'),
(27, 'originals/Screenshot_20221107-110741.png', 'thumbnails/Screenshot_20221107-110741.png', 'Tinubu spotted at a birthday party close to where Arise TV presidential town hall meeting was holding (video)', 'https://www.lindaikejisblog.com/2022/11/tinubu-spotted-at-a-birthday-party-which-was-held-close-to-where-arise-tv-presidential-town-hall-meeting-was-holding-video.html', '22-11-07 11:09am'),
(28, 'originals/Screenshot_20221107-111148.png', 'thumbnails/Screenshot_20221107-111148.png', 'The soldier killed the civilian after altercation ensued between the duo at about 10am on Saturday around Umuahia railway station.', 'https://www.tori.ng/amp/219195/soldier-stabs-34yearold-man-to-death-in-abia-photo.html', '22-11-07 11:13am'),
(29, 'originals/Screenshot_20221107-111529.png', 'thumbnails/Screenshot_20221107-111529.png', 'NEWSNaira redesign will expose corrupt politicians â€“ University don', 'https://dailypost.ng/2022/11/04/naira-redesign-will-expose-corrupt-politicians-university-don/?amp=1', '22-11-07 11:17am'),
(30, 'originals/Screenshot_20221107-112001.png', 'thumbnails/Screenshot_20221107-112001.png', 'Mohbad Shades Former Boss, Naira Marley In New Single', 'https://www.tori.ng/amp/219194/mohbad-shades-former-boss-naira-marley-in-new-sing.html', '22-11-07 11:21am'),
(31, 'originals/Screenshot_20221107-112246.png', 'thumbnails/Screenshot_20221107-112246.png', 'FACT CHECK: Has CBN introduced N5,000, N2,000 notes as claimed in viral video?', 'https://www.thecable.ng/fact-check-has-cbn-introduced-n5000-n2000-notes-as-claimed-in-viral-video/amp', '22-11-07 11:23am'),
(32, 'originals/Screenshot_20221107-112641.png', 'thumbnails/Screenshot_20221107-112641.png', '[Music] Mohbad â€“ Ponmo Sweet ft. Naira Marley & Lil Kesh Mp3 | Free Audio Download', 'https://justnaija.com/music-download/mohbad-ponmo-sweet-ft-naira-marley-lil-kesh/', '22-11-07 11:27am'),
(33, 'originals/Screenshot_20221107-112847.png', 'thumbnails/Screenshot_20221107-112847.png', 'JUST IN: Unknown gunmen attack, disarm Civil Defence personnel in Enugu', 'https://www.newtelegraphng.com/just-in-unknown-gunmen-attack-disarm-civil-defence-personnel-in-enugu/', '22-11-07 11:29am'),
(34, 'originals/Screenshot_20221107-113323.png', 'thumbnails/Screenshot_20221107-113323.png', 'What Lead To Ronaldo and Tyrone Fight In Manchester United Defeat', 'https://infoexpert24.com/2022/11/07/what-lead-to-ronaldo-and-tyrone-fight-in-manchester-united-defeat/amp/', '22-11-07 11:35am'),
(35, 'originals/Screenshot_20221107-114950.png', 'thumbnails/Screenshot_20221107-114950.png', 'JUST IN: â€œI have taken enough from you!â€ â€“ Peter Obi angrily confronts Dino Melaye [WATCH]', 'https://politicsnigeria.com/just-in-i-have-taken-enough-from-you-peter-obi-angrily-confronts-dino-melaye-watch/?utm_source=operamini&utm_medium=feednews&utm_campaign=operamini_feednews', '22-11-07 11:52am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(29, 1580397605, 'Kenny', 'Know', 'ogunfoworakehinde55@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1667481156g1.jpg', 'Active now'),
(30, 875913791, 'Abdul salam', 'Ridwan', 'oreloperidwan@gmail.com', 'b6120cb314b9b10e0cd506de7057d6c5', '1667762357IMG_20221106_115158_384.jpg', 'Active now'),
(31, 124298804, 'Wale', 'Tobi', 'rety@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1667762612IMG_20221106_115407_168.jpg', 'Active now'),
(32, 1182078023, 'Young', 'Elect', 'ogunfoworadaniel12@gmail.com', 'e1af7e327e771f125ff7555de174af0a', '1667895509IMG_20221105_202920_788.jpg', 'Active now'),
(33, 1567501514, 'Kamar', 'Abi', 'kamar@gimal.com', '9c04d3eb376d758fd7e9b1e98a366f7b', '1667913477Screenshot_20221108-004235.png', 'Active now'),
(34, 923996633, 'Thanks', 'Really', 'thanks@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1667913730IMG_20221107_153901_642.jpg', 'Active now'),
(35, 599541913, 'James', 'Samuel', 'samjoolamide@gmail.com', 'a035ebe775d9d728bffaca5b757769d4', '1669828066IMG_20221129_124836_299.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
