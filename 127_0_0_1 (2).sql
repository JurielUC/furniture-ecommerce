-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 12:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--
CREATE DATABASE IF NOT EXISTS `chatapp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chatapp`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1241401132, 1135622190, 'Hey'),
(2, 1135622190, 1241401132, 'What\'s up?'),
(3, 1322802162, 1241401132, 'Hello World');

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
(1, 1241401132, 'Juriel', 'Comia', 'juriel.ucomia@gmail.com', '25d55ad283aa400af464c76d713c07ad', '16641497012x2.jpg', 'Active now'),
(2, 1135622190, 'Cat', 'Yah', 'meow@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1664149795300057562_1423013448198788_714369143840687403_n.jpg', 'Offline now'),
(3, 1322802162, 'Hello', 'World', 'hello@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1664152557account.png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `chat_db`
--
CREATE DATABASE IF NOT EXISTS `chat_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chat_db`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `convo_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unread , 1= read',
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `convo_id`, `user_id`, `message`, `status`, `date_created`) VALUES
(1, 1, 2, 'hi', 1, '2020-10-13 21:03:22'),
(2, 2, 3, 'yow', 0, '2020-10-13 16:58:22'),
(3, 3, 1, 'hi', 0, '2020-10-13 16:59:12'),
(4, 1, 3, 'hey', 1, '2020-10-13 20:19:22'),
(5, 2, 2, 'hi', 1, '2020-10-13 20:19:49'),
(6, 2, 1, 'test', 1, '2020-10-13 20:19:16'),
(7, 1, 2, 'test1234', 1, '2020-10-13 21:03:22'),
(8, 2, 1, '\r\n123123', 1, '2020-10-13 20:19:16'),
(9, 2, 1, 'asdasd', 1, '2020-10-13 20:19:16'),
(10, 2, 1, 'asdasd\r\n', 1, '2020-10-13 20:19:16'),
(11, 2, 1, '\r\nasdasd', 1, '2020-10-13 20:19:16'),
(12, 2, 1, '\r\nwewee', 1, '2020-10-13 20:19:16'),
(13, 2, 1, 'asdasd wew\r\n', 1, '2020-10-13 20:19:16'),
(14, 2, 1, 'sample', 1, '2020-10-13 20:21:40'),
(15, 2, 1, 'hey', 1, '2020-10-13 20:22:48'),
(16, 2, 2, 'what ?', 1, '2020-10-13 20:22:58'),
(17, 2, 2, 'yes??', 1, '2020-10-13 20:23:16'),
(18, 2, 2, 'yes sss', 1, '2020-10-13 20:23:22'),
(19, 2, 2, 'oh yeah >', 1, '2020-10-13 20:24:51'),
(20, 2, 2, 'ahem', 1, '2020-10-13 20:25:53'),
(21, 2, 2, 'hey bro', 1, '2020-10-13 20:36:10'),
(22, 2, 1, 'yes >', 1, '2020-10-13 20:36:14'),
(23, 2, 2, 'nothing', 1, '2020-10-13 20:36:33'),
(24, 2, 1, 'r u sure?', 1, '2020-10-13 20:36:45'),
(25, 2, 2, 'a', 1, '2020-10-13 20:36:53'),
(26, 2, 1, 'a', 1, '2020-10-13 20:36:57'),
(27, 2, 1, 'a', 1, '2020-10-13 20:38:06'),
(28, 2, 2, 'a', 1, '2020-10-13 20:38:39'),
(29, 2, 1, 'aaaaa', 1, '2020-10-13 20:39:14'),
(30, 2, 1, 'aaa', 1, '2020-10-13 20:39:21'),
(31, 2, 1, 'asdasd', 1, '2020-10-13 20:44:16'),
(32, 2, 1, 'asdasd', 1, '2020-10-13 20:46:20'),
(33, 2, 1, 'asdasd', 1, '2020-10-13 20:46:30'),
(34, 2, 1, 'asdasd', 1, '2020-10-13 20:47:55'),
(35, 2, 2, 'asdasd', 1, '2020-10-13 20:50:33'),
(36, 2, 2, 'asdasdasd', 1, '2020-10-13 20:51:10'),
(37, 2, 2, 'what ?', 1, '2020-10-13 20:51:18'),
(38, 2, 1, 'asa', 1, '2020-10-13 20:51:32'),
(39, 2, 1, 'aaa', 1, '2020-10-13 20:52:15'),
(40, 2, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2020-10-13 21:06:41'),
(41, 1, 3, 'Hi Blake.', 0, '2020-10-13 21:10:15'),
(42, 3, 4, 'Hello', 1, '2022-09-25 19:03:11'),
(43, 3, 4, 'how are you?', 1, '2022-09-25 19:03:41'),
(44, 3, 4, 'hello', 1, '2022-09-25 19:04:52'),
(45, 3, 5, 'hello again', 1, '2022-09-25 19:05:03'),
(46, 3, 5, 'how are you?', 1, '2022-09-25 19:05:17'),
(47, 3, 4, 'Juriel Comia', 0, '2022-09-25 19:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(30) NOT NULL,
  `user_ids` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `user_ids`) VALUES
(1, '2,3'),
(2, '1,2'),
(3, '5,4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `avatar`) VALUES
(1, 'John Smith', 'jsmith', '1254737c076cf867dc53d60a0364f38e', '1602554940_avatar.jpg'),
(2, 'Claire Blake', 'cblake', '4744ddea876b11dcb1d169fadf494418', '1602555000_avatar2.png'),
(3, 'George Wilson', 'gwilson', 'bba888f2ecca23e0d8594b649bfdd782', '1602575640_blank.jpg'),
(4, 'master', 'juriel_comia', 'fcea920f7412b5da7be0cf42b8c93759', '1664103660_owner.png'),
(5, 'Juriel ', 'admin', 'fcea920f7412b5da7be0cf42b8c93759', '1664103720_2x2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `db_batstateu`
--
CREATE DATABASE IF NOT EXISTS `db_batstateu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_batstateu`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_accounts`
--

CREATE TABLE `tb_accounts` (
  `fullname` varchar(30) NOT NULL,
  `srcode` varchar(11) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `campus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_accounts`
--

INSERT INTO `tb_accounts` (`fullname`, `srcode`, `contactno`, `email`, `password`, `program`, `department`, `campus`) VALUES
('Juriel Comia', '19-07707', '09055811152', 'juriel.comia@g.batstate-u.edu.ph', 'COMIA', 'BSIT', 'CICS', 'Alangilan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_campus` varchar(25) NOT NULL,
  `admin_department` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_email`, `admin_name`, `admin_password`, `admin_campus`, `admin_department`) VALUES
(10001, 'bsu.itemfinder@g.batstate-u.edu.ph', 'BSU-OCLIF', 'admin', 'Alangilan', 'CICS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcement`
--

CREATE TABLE `tb_announcement` (
  `department` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `caption` text NOT NULL,
  `timedate` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_announcement`
--

INSERT INTO `tb_announcement` (`department`, `campus`, `caption`, `timedate`, `id`) VALUES
('CICS', 'Alangilan Campus', 'Helloworld', '2021-11-15 12:05:30', 3),
('CABEIHM', 'PB Main 1 Campus', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.', '2021-11-15 12:12:44', 6),
('CIT', 'Lemery Campus', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2021-11-15 12:07:59', 5),
('CEAFA', 'Arasof-Nasugbu Campus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus sit amet elit in ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada nec felis a posuere. Nullam non enim finibus, ultrices tortor eget, tempus orci. Suspendisse pharetra semper ante quis ornare. Ut eu libero non velit sagittis consectetur pulvinar eu lorem. In ullamcorper lorem iaculis sem sodales pellentesque. Donec at sollicitudin tellus. Pellentesque ac orci sapien. Nam in turpis quis justo dapibus tempus. Integer consectetur erat vel ipsum porta fringilla. Vivamus tempor nunc sem, blandit molestie sem dapibus id. Aenean id arcu neque. Praesent commodo tempor sapien, et auctor metus sollicitudin vitae. Morbi imperdiet egestas dictum. Etiam sit amet imperdiet sapien, vel aliquam lacus.', '2021-11-15 16:52:09', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_claimedowner`
--

CREATE TABLE `tb_claimedowner` (
  `itemno` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `tdclaimed` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_claimedowner`
--

INSERT INTO `tb_claimedowner` (`itemno`, `owner`, `tdclaimed`) VALUES
(1121, 'Juriel Comia', '2021-12-01 12:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_claimedrecord`
--

CREATE TABLE `tb_claimedrecord` (
  `clfinder` varchar(50) NOT NULL,
  `clitemno` int(11) NOT NULL,
  `cltime` time NOT NULL,
  `cldate` date NOT NULL,
  `clitemcategory` varchar(25) NOT NULL,
  `clitemlocation` varchar(50) NOT NULL,
  `cldepartment` varchar(50) NOT NULL,
  `clcampus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_deletedmsg`
--

CREATE TABLE `tb_deletedmsg` (
  `dmid` int(11) NOT NULL,
  `dmitemnumber` int(11) NOT NULL,
  `dmsrcode` varchar(15) NOT NULL,
  `dmmyfile` varchar(255) NOT NULL,
  `dmdescription` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_iteminfo`
--

CREATE TABLE `tb_iteminfo` (
  `findername` varchar(50) NOT NULL,
  `itemno` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `itemcategory` varchar(25) NOT NULL,
  `itemlocation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `campus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_messages`
--

CREATE TABLE `tb_messages` (
  `msgid` int(11) NOT NULL,
  `itemnumber` int(11) NOT NULL,
  `srcode` varchar(15) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_messages`
--

INSERT INTO `tb_messages` (`msgid`, `itemnumber`, `srcode`, `myfile`, `description`, `datetime`) VALUES
(157, 1234, '', 'all_images/3d7c00da242a3740f67a17cd3fab3f53photo-1585401586477-2a671e1cae4e.jpg', 'Hello', '2021-12-02 13:47:55'),
(158, 1234, '', 'all_images/152a977f849177e8a2032af02550c1e3photo-1585401586477-2a671e1cae4e.jpg', 'Hello', '2021-12-02 13:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verifiedmsg`
--

CREATE TABLE `tb_verifiedmsg` (
  `archid` int(11) NOT NULL,
  `architemnumber` int(11) NOT NULL,
  `archsrcode` varchar(15) NOT NULL,
  `archmyfile` varchar(255) NOT NULL,
  `archdescription` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_accounts`
--
ALTER TABLE `tb_accounts`
  ADD PRIMARY KEY (`srcode`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_claimedowner`
--
ALTER TABLE `tb_claimedowner`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `tb_claimedrecord`
--
ALTER TABLE `tb_claimedrecord`
  ADD PRIMARY KEY (`clitemno`);

--
-- Indexes for table `tb_deletedmsg`
--
ALTER TABLE `tb_deletedmsg`
  ADD PRIMARY KEY (`dmid`);

--
-- Indexes for table `tb_iteminfo`
--
ALTER TABLE `tb_iteminfo`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `tb_messages`
--
ALTER TABLE `tb_messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `tb_verifiedmsg`
--
ALTER TABLE `tb_verifiedmsg`
  ADD PRIMARY KEY (`archid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_iteminfo`
--
ALTER TABLE `tb_iteminfo`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;

--
-- AUTO_INCREMENT for table `tb_messages`
--
ALTER TABLE `tb_messages`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- Database: `db_ecommerce`
--
CREATE DATABASE IF NOT EXISTS `db_ecommerce` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `unique_id`, `first_name`, `last_name`, `email`, `contact_no`, `position`, `a_password`) VALUES
(1, 1135622190, 'Glydel', 'Reyes', 'glydelreyes152@gmail.com', '09123456789', 'ADMIN', '12345'),
(3, 1539702217, 'Cell', 'Phone', 'coms@gmail.com', '09055811151', 'ADMIN', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `cart_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `commenter_id` int(255) NOT NULL,
  `comment` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shopres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `post_id`, `commenter_id`, `comment`, `datetime`, `shopres`) VALUES
(19, 42, 1135622190, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2022-10-27 20:58:12', 'Shop Response');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderprocess`
--

CREATE TABLE `tb_orderprocess` (
  `id` int(255) NOT NULL,
  `trans_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `settings` varchar(255) NOT NULL,
  `order_qty` int(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_orderprocess`
--

INSERT INTO `tb_orderprocess` (`id`, `trans_id`, `user_id`, `product_id`, `fullname`, `phone_no`, `address`, `postal_code`, `house_no`, `settings`, `order_qty`, `payment_method`, `total_price`, `datetime`) VALUES
(61, 1337850714, 882422181, 19, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '#143', 'Work', 1, 'COD', '12999', '2022-10-27 12:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pointmessage`
--

CREATE TABLE `tb_pointmessage` (
  `message_id` int(11) NOT NULL,
  `message_to` varchar(50) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `message_content` text NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `msg_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `msg_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pointmessage`
--

INSERT INTO `tb_pointmessage` (`message_id`, `message_to`, `message_from`, `message_content`, `sender_name`, `msg_timestamp`, `msg_file`) VALUES
(269, '1135622190', '882422181', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Juriel Comia', '2022-10-27 21:19:06', 'image/b4eef43288a34439ec97685e2960b634'),
(270, '882422181           ', '1135622190', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt', 'Glydel Reyes', '2022-10-27 21:19:21', 'image/147d07fe054a04c158c0d0a5790da184'),
(271, '1135622190', '882422181', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,', 'Juriel Comia', '2022-10-27 21:21:02', 'image/52c6f234db140b0ad69beb5dfe205612'),
(272, '882422181 ', '1135622190', 'onsectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 'Glydel Reyes', '2022-10-27 21:21:19', 'image/27fc8f5d06d125e9ae2310bdce6591be'),
(273, '1135622190', '882422181', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium', 'Juriel Comia', '2022-10-27 21:24:26', 'image/2750063f8d686134dbd63d7770118bf8'),
(274, '882422181 ', '1135622190', 'Hello', 'Glydel Reyes', '2022-10-27 21:28:23', 'image/2674a8854f920b4a23f1c72ba339bc03'),
(275, '1135622190', '882422181', 'voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est', 'Juriel Comia', '2022-10-27 21:29:14', 'image/12dd0874481ca77f863b9cdae1ea9358');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `size` varchar(15) NOT NULL,
  `p_description` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_name`, `price`, `size`, `p_description`, `category`, `product_img`) VALUES
(19, 'Beatrice Bed', 12999, '6ft x 3.5ft', 'Hello World 2', 'Bed', 'product_image/519bbe24b459e1cb456da0f1d0693541beatrice-wenge.jpg'),
(20, 'Buffet Cabinet', 15999, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Others', 'product_image/9f6efda103dc5c9fadfb7f7e84052fec300843_Front.jpg'),
(21, 'Contemporary table - JACARANDA', 20000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 'product_image/031b8e2bb8033ff9e8fcfbc581a123fc65799-1863229.jpg'),
(22, 'Coffee Table', 12000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 'product_image/e054146fe95298d71c12431e3351efda61Y4D9mYDTL._SL1239_.jpg'),
(23, 'Wooden Door', 2000, '6ft x 3.5ft', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Door', 'product_image/d4a4de1801879a9c0c7529d68e7ee072Carolina-compressor.png'),
(24, 'Living Room Chair', 5000, 'N/A', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Chair', 'product_image/4e7571d29a73146bc1e7032a862160421580750710-11188871_master.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress`
--

CREATE TABLE `tb_progress` (
  `id` int(11) NOT NULL,
  `trans_id` int(255) NOT NULL,
  `zero` varchar(255) NOT NULL,
  `two_five` varchar(255) NOT NULL,
  `fifty` varchar(255) NOT NULL,
  `seven_five` varchar(255) NOT NULL,
  `hundred` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_progress`
--

INSERT INTO `tb_progress` (`id`, `trans_id`, `zero`, `two_five`, `fifty`, `seven_five`, `hundred`) VALUES
(28, 701912482, 'Processing', '----------', '----------', '----------', '----------'),
(29, 1337850714, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shopinfo`
--

CREATE TABLE `tb_shopinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shopinfo`
--

INSERT INTO `tb_shopinfo` (`id`, `name`, `address`, `email`, `contact_no`, `profile_pic`) VALUES
(1, 'Angelito Reyes', 'Mahayahay, Lemery, Batangas, 4209', 'gilreyesfurniture@gmail', '09221334234', 'product_image/0f883356d3d744cd48a4943e19b5a84a2x2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `unread_msg` int(255) NOT NULL,
  `all_msg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `unique_id`, `status`, `first_name`, `last_name`, `u_address`, `email`, `contact_no`, `u_password`, `myfile`, `unread_msg`, `all_msg`) VALUES
(481, 882422181, 'Active now', 'Juriel', 'Comia', 'Bukal, Lemery, Batangas', 'juriel.ucomia@gmail.com', '09055811152', '25d55ad283aa400af464c76d713c07ad', 'image/e796083fb97b5d17edcb6d26a1dc5a2b2x2.jpg', 0, 5),
(482, 139169879, 'Offline now', 'Cat', 'Yah', 'Meow Town City', 'meow@gmail.com', '09123456789', '81dc9bdb52d04dc20036dbd8313ed055', 'image/aae0be52c6e122da30fc0bf4666700cb300057562_1423013448198788_714369143840687403_n.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userpost`
--

CREATE TABLE `tb_userpost` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `long_desc` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `myfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userpost`
--

INSERT INTO `tb_userpost` (`id`, `user_email`, `date_time`, `long_desc`, `fname`, `lname`, `myfile`) VALUES
(41, 'meow@gmail.com', '2022-10-27 08:52:22', 'Eyy', 'Cat', 'Yah', 'image/aae0be52c6e122da30fc0bf4666700cb300057562_1423013448198788_714369143840687403_n.jpg'),
(42, 'juriel.ucomia@gmail.com', '2022-10-27 14:57:42', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\"', 'Juriel', 'Comia', 'image/e796083fb97b5d17edcb6d26a1dc5a2b2x2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_orderprocess`
--
ALTER TABLE `tb_orderprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pointmessage`
--
ALTER TABLE `tb_pointmessage`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_progress`
--
ALTER TABLE `tb_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_shopinfo`
--
ALTER TABLE `tb_shopinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_userpost`
--
ALTER TABLE `tb_userpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_orderprocess`
--
ALTER TABLE `tb_orderprocess`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_pointmessage`
--
ALTER TABLE `tb_pointmessage`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_shopinfo`
--
ALTER TABLE `tb_shopinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT for table `tb_userpost`
--
ALTER TABLE `tb_userpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_ecommerce\",\"table\":\"tb_comment\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_admin\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_userpost\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_user\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_shopinfo\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_cart\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_orderprocess\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_pointmessage\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_product\"},{\"db\":\"db_ecommerce\",\"table\":\"tb_progress\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'db_ecommerce', 'tb_progress', '{\"CREATE_TIME\":\"2022-10-15 07:23:31\",\"col_order\":[0,1,2,3,4,5,6],\"col_visib\":[1,1,1,1,1,1,1]}', '2022-10-18 07:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-10-27 22:21:49', '{\"Console\\/Mode\":\"show\",\"Console\\/Height\":143.986}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
