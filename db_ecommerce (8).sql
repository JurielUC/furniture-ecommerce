-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 01:55 PM
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
-- Database: `db_ecommerce`
--

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
(1, 1135622190, 'Glydel', 'Reyes', 'glydelreyes152@gmail.com', '09123456789', 'ADMIN', '12345678');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_customize`
--

CREATE TABLE `tb_customize` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `img_front` varchar(255) NOT NULL,
  `img_back` varchar(255) NOT NULL,
  `sent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customize`
--

INSERT INTO `tb_customize` (`id`, `cust_id`, `user_id`, `size`, `type`, `qty`, `price`, `category`, `note`, `img_front`, `img_back`, `sent`) VALUES
(51, '177343391', '882422181', '40mm x 80mm', 'Single-Plywood', 3, '6600', 'Door', 'Pareho po ang design ng harap at likod. Pakipantay po ng mga linya.', 'uploads/door/882422181_1669106743_637c8c37e9526_front.png', 'uploads/door/882422181_1669106743_637c8c37e97d4_back.png', 1),
(54, '813508593', '882422181', '4 Seater', 'Akasya', 1, '5900', 'Table and Chair', 'Magkatulad ang kulay ng chair at table. Salamat po.', 'uploads/table/882422181_1669214258_637e3032dff79_front.png', 'uploads/table/882422181_1669214258_637e3032e0286_back.png', 0),
(55, '654233785', '882422181', 'Double-s', 'Akasya', 3, '37500', 'Bed', 'Pagawa', 'uploads/bed/882422181_1669639039_6384ab7f7b0b2_front.png', 'uploads/bed/882422181_1669639039_6384ab7f7b539_back.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_customizedplacement`
--

CREATE TABLE `tb_customizedplacement` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_front` varchar(255) NOT NULL,
  `img_back` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_designs`
--

CREATE TABLE `tb_designs` (
  `id` int(255) NOT NULL,
  `ed_img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_designs`
--

INSERT INTO `tb_designs` (`id`, `ed_img`, `price`, `type`, `category`) VALUES
(8, 'uploads/existing-design/d5a2941562093d89e6dc30573b23f757door1.png', 12000, 'Solid Wood', 'Door');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ordercompleted`
--

CREATE TABLE `tb_ordercompleted` (
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
  `order_qty` int(20) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(129, 570232965, 882422181, 23, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '#143', 'Home', 3, 'Paid via GCash', '6000', '2022-11-23 15:58:59'),
(130, 1393067980, 882422181, 177343391, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '143', 'Home', 3, 'GCash', '6800', '2022-11-23 16:07:32'),
(132, 1364914463, 882422181, 654233785, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '143', 'Home', 3, 'COD', '37500', '2022-11-28 12:40:39');

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
(555, '882422181      ', '1135622190', 'The shop accepted your order. Transaction ID: <b>570232965 .</b>', 'Glydel Reyes', '2022-11-22 05:48:36', '0'),
(556, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-11-22 08:47:11', '0'),
(557, '882422181   ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1393067980 .</b>', 'Glydel Reyes', '2022-11-22 08:48:05', '0'),
(558, '1135622190', '882422181', 'Kaya po bang mai-deliver sa isang linggo ito?', 'Juriel Comia', '2022-11-22 08:50:37', 'image/fd4cbed710c4596748e242bd12239e03'),
(559, '882422181           ', '1135622190', 'Kaya naman po, Sir.', 'Glydel Reyes', '2022-11-22 08:51:50', 'image/d0fcabd14570d12b359458beafe5a3a2'),
(560, '1135622190', '882422181', 'Sige po. Salamat po.', 'Juriel Comia', '2022-11-22 08:52:14', 'image/351858cb9ddb4c15c13fce7cdce16829'),
(561, '882422181          ', '1135622190', 'Ayon sa inyong Design, kailangan nyo pong mag-add ng additional amount para sa ukit ng design.', 'Glydel Reyes', '2022-11-22 08:54:49', 'image/24392cb33de0f344692aa3786fe594a8'),
(562, '1135622190', '882422181', 'Ganun po. Magkaano po kaya aabutin nito?', 'Juriel Comia', '2022-11-22 08:55:18', 'image/2792b88f5eff36b7cd2ecb97905ce160'),
(563, '882422181   ', '1135622190', 'Additional 300 pesos po para ukit. Kung okay lang sa inyo ay iaadd ko na ito sa total price ng inyong order.', 'Glydel Reyes', '2022-11-22 08:57:07', 'image/3729a6621de8e66bc1f0923f9b83b154'),
(564, '1135622190', '882422181', 'Sige po.', 'Juriel Comia', '2022-11-22 08:57:20', 'image/27830b98aef45f1ee580aab539424a12'),
(565, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-11-23 14:44:34', '0'),
(573, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-11-28 12:40:39', '0'),
(574, '882422181   ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1364914463 .</b>', 'Glydel Reyes', '2022-11-28 12:41:17', '0');

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
  `quantity` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_name`, `price`, `size`, `p_description`, `category`, `quantity`, `product_img`) VALUES
(19, 'Beatrice Bed', 12999, '6ft x 3.5ft', 'Hello World 2', 'Bed', 9, 'product_image/519bbe24b459e1cb456da0f1d0693541beatrice-wenge.jpg'),
(20, 'Buffet Cabinet', 15999, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Others', 0, 'product_image/9f6efda103dc5c9fadfb7f7e84052fec300843_Front.jpg'),
(21, 'Contemporary table - JACARANDA', 20000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 10, 'product_image/031b8e2bb8033ff9e8fcfbc581a123fc65799-1863229.jpg'),
(22, 'Coffee Table', 12000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 3, 'product_image/e054146fe95298d71c12431e3351efda61Y4D9mYDTL._SL1239_.jpg'),
(23, 'Wooden Door', 2000, '6ft x 3.5ft', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Door', 7, 'product_image/d4a4de1801879a9c0c7529d68e7ee072Carolina-compressor.png'),
(24, 'Living Room Chair', 5000, 'N/A', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Chair', 11, 'product_image/4e7571d29a73146bc1e7032a862160421580750710-11188871_master.jpg');

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
(60, 570232965, 'Processing', '----------', '----------', '----------', '----------'),
(61, 1393067980, 'Processing', '----------', '----------', '----------', '----------'),
(62, 1364914463, 'Processing', '----------', '----------', '----------', '----------');

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
(1, 'Gil Reyes', 'Sitio Malaya Mahayahay, Lemery, Batangas, 4209', 'gil.reyes@gilreyesfurniture.online', '09221334234', 'product_image/0f883356d3d744cd48a4943e19b5a84a2x2.jpg');

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
  `contact_no` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `unread_msg` int(255) NOT NULL,
  `recieved_msg` int(255) NOT NULL,
  `all_msg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `unique_id`, `status`, `first_name`, `last_name`, `u_address`, `email`, `contact_no`, `u_password`, `myfile`, `unread_msg`, `recieved_msg`, `all_msg`) VALUES
(481, 882422181, 'Offline now', 'Juriel', 'Comia', 'Bukal, Lemery, Batangas', 'juriel.ucomia@gmail.com', '09055811152', '25d55ad283aa400af464c76d713c07ad', 'image/23d7624344360f1d6ed1b7dffe1aee252x2.jpg', 0, 0, 9);

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
  `myfile` varchar(255) NOT NULL,
  `response` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tb_customize`
--
ALTER TABLE `tb_customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customizedplacement`
--
ALTER TABLE `tb_customizedplacement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_designs`
--
ALTER TABLE `tb_designs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_customize`
--
ALTER TABLE `tb_customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_customizedplacement`
--
ALTER TABLE `tb_customizedplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_designs`
--
ALTER TABLE `tb_designs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_orderprocess`
--
ALTER TABLE `tb_orderprocess`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tb_pointmessage`
--
ALTER TABLE `tb_pointmessage`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=575;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
