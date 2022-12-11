-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:59 AM
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
  `price` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `img_front` varchar(255) NOT NULL,
  `img_back` varchar(255) NOT NULL,
  `sent` int(1) NOT NULL,
  `selected` int(1) NOT NULL,
  `trans_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customize`
--

INSERT INTO `tb_customize` (`id`, `cust_id`, `user_id`, `size`, `type`, `qty`, `price`, `category`, `note`, `img_front`, `img_back`, `sent`, `selected`, `trans_id`) VALUES
(70, '702875217', '882422181', 'Family', 'Akasya', 3, 43500, 'Bed', 'Pareho po ang design ng harap at likod.', 'uploads/bed/882422181_1670557577_6392af89d2e8b_front.png', 'uploads/bed/882422181_1670557577_6392af89d3430_back.png', 0, 70150936, 449110421),
(71, '1228604165', '882422181', '6 Seater', 'Akasya', 2, 13200, 'Table and Chair', 'Pagawa', 'uploads/table/882422181_1670557631_6392afbf32cca_front.png', 'uploads/table/882422181_1670557631_6392afbf32f7a_back.png', 0, 7698692, 208930800),
(72, '749342688', '882422181', 'Double-s', 'Plywood', 2, 25000, 'Bed', 'Pareho po ang design ng harap at likod.', 'uploads/bed/882422181_1670561688_6392bf982a375_front.png', 'uploads/bed/882422181_1670561688_6392bf982a8c3_back.png', 0, 6476326, 1314223046),
(73, '495904351', '882422181', '4 Seater', 'Mahogany', 2, 11200, 'Table and Chair', 'Pagawa', 'uploads/table/882422181_1670562207_6392c19f1614d_front.png', 'uploads/table/882422181_1670562207_6392c19f16576_back.png', 0, 6476326, 1314223046),
(74, '588056969', '882422181', 'King Queen', 'Plywood', 2, 34000, 'Bed', 'Pagawa', 'uploads/bed/882422181_1670564915_6392cc33b8da5_front.png', 'uploads/bed/882422181_1670564915_6392cc33b913c_back.png', 0, 7698692, 208930800),
(75, '1612639547', '882422181', '4 Seater', 'Mahogany', 2, 11200, 'Table and Chair', 'Pareho po ang design ng harap at likod.', 'uploads/table/882422181_1670565767_6392cf87c85af_front.png', 'uploads/table/882422181_1670565767_6392cf87c882f_back.png', 0, 6040000, 328250052),
(77, '1174182669', '882422181', '40mm x 80mm', 'Solid Wood', 1, 12000, 'Door', 'Hello World', 'uploads/existing-design/d5a2941562093d89e6dc30573b23f757door1.png', 'uploads/existing-design/1a03bf1f2137c4292628200746d266b7no-pictures.png', 0, 0, 0);

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
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `downpayment` int(1) NOT NULL,
  `customize` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ordercompleted`
--

INSERT INTO `tb_ordercompleted` (`id`, `trans_id`, `user_id`, `product_id`, `fullname`, `phone_no`, `address`, `postal_code`, `house_no`, `settings`, `order_qty`, `payment_method`, `total_price`, `datetime`, `downpayment`, `customize`, `date`) VALUES
(159, 633956608, 882422181, 24, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '#143', 'Home', 3, 'COD', 15000, '2022-12-10 15:09:55', 1, 2, '2022-12-10'),
(160, 1080403633, 882422181, 21, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '#143', 'Home', 3, 'COD', 60000, '2022-12-10 15:12:48', 1, 2, '2022-12-10'),
(161, 285427588, 882422181, 19, 'Juriel Comia', '09055811152', 'Bukal, Lemery, Batangas', '4209', '#143', 'Home', 1, 'COD', 12999, '2022-12-11 02:41:56', 1, 2, '2022-12-11');

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
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `downpayment` int(1) NOT NULL,
  `customize` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(574, '882422181   ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1364914463 .</b>', 'Glydel Reyes', '2022-11-28 12:41:17', '0'),
(575, '882422181    ', '1135622190', 'Your order percentage with Transaction ID of <b>570232965 </b> is now 25%.', 'Glydel Reyes', '2022-12-05 22:30:50', '0'),
(576, '882422181      ', '1135622190', 'Your order percentage with Transaction ID of <b>570232965 </b> is now 50%.', 'Glydel Reyes', '2022-12-05 22:30:56', '0'),
(577, '882422181        ', '1135622190', 'Your order percentage with Transaction ID of <b>570232965 </b> is now 75%.', 'Glydel Reyes', '2022-12-05 22:30:58', '0'),
(578, '882422181          ', '1135622190', 'Your order percentage with Transaction ID of <b>570232965 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-05 22:31:00', '0'),
(579, '882422181            ', '1135622190', 'Your order with Transaction ID of <b>570232965 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-05 22:31:02', '0'),
(580, '882422181  ', '1135622190', 'The shop accepted your order. Transaction ID: <b>424442582 .</b>', 'Glydel Reyes', '2022-12-07 11:20:42', '0'),
(581, '882422181      ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1415257613 .</b>', 'Glydel Reyes', '2022-12-07 11:27:56', '0'),
(582, '882422181        ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>1415257613 </b> is now 25%.', 'Glydel Reyes', '2022-12-07 13:53:01', '0'),
(583, '882422181            ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>424442582 </b> is now 25%.', 'Glydel Reyes', '2022-12-07 13:58:22', '0'),
(584, '882422181                ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1650801390 .</b>', 'Glydel Reyes', '2022-12-07 14:05:29', '0'),
(585, '882422181                  ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>1650801390 </b> is now 25%.', 'Glydel Reyes', '2022-12-07 14:06:52', '0'),
(586, '882422181      ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1596885023 .</b>', 'Glydel Reyes', '2022-12-07 22:59:34', '0'),
(587, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-08 04:53:36', '0'),
(588, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-08 05:01:45', '0'),
(589, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-08 05:04:20', '0'),
(590, '882422181                       ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1120298654 .</b>', 'Glydel Reyes', '2022-12-08 05:16:57', '0'),
(591, '882422181                                   ', '1135622190', 'The shop accepted your order. Transaction ID: <b>106225157 .</b>', 'Glydel Reyes', '2022-12-09 01:13:47', '0'),
(592, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 01:17:38', '0'),
(593, '882422181                                         ', '1135622190', 'The shop accepted your order. Transaction ID: <b>691236104 .</b>', 'Glydel Reyes', '2022-12-09 01:35:42', '0'),
(594, '882422181                                         ', '1135622190', 'The total amount of your customized <b>Order: 691236104 </b> has been updated to <b>PHP 6800.00</b> from <b>PHP 6600.00</b>.', 'Glydel Reyes', '2022-12-09 01:49:53', '0'),
(595, '882422181                                         ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>691236104 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 01:53:55', '0'),
(596, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>691236104 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 03:05:31', '0'),
(597, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>691236104 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 03:05:34', '0'),
(598, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>691236104 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 03:05:36', '0'),
(599, '882422181                                         ', '1135622190', 'Your order with Transaction ID of <b>691236104 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 03:05:39', '0'),
(600, '882422181                                         ', '1135622190', 'Your payment on <b>Transaction ID: 1415257613</b> has been recieved. Thank you!', 'Glydel Reyes', '2022-12-09 03:19:42', '0'),
(601, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>1415257613 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 03:19:57', '0'),
(602, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>1415257613 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 03:20:02', '0'),
(603, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>1415257613 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 03:20:07', '0'),
(604, '882422181                                         ', '1135622190', 'Your order with Transaction ID of <b>1415257613 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 03:20:13', '0'),
(605, '882422181                                         ', '1135622190', 'The total amount of your customized <b>Order: 106225157 </b> has been updated to <b>PHP 100199.00</b> from <b>PHP 100200.00</b>.', 'Glydel Reyes', '2022-12-09 03:23:40', '0'),
(606, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 03:31:52', '0'),
(607, '882422181  ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1161630238 .</b>', 'Glydel Reyes', '2022-12-09 03:45:30', '0'),
(608, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 03:53:12', '0'),
(609, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 03:56:38', '0'),
(610, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 04:03:47', '0'),
(611, '882422181       ', '1135622190', 'The shop accepted your order. Transaction ID: <b>178888907 .</b>', 'Glydel Reyes', '2022-12-09 04:04:19', '0'),
(612, '882422181   ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>178888907 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 04:07:58', '0'),
(613, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 04:54:58', '0'),
(614, '882422181      ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>1161630238 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 04:58:27', '0'),
(615, '882422181        ', '1135622190', 'Your order percentage with Transaction ID of <b>1161630238 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 04:58:30', '0'),
(616, '882422181          ', '1135622190', 'Your order percentage with Transaction ID of <b>1161630238 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 04:58:31', '0'),
(617, '882422181            ', '1135622190', 'Your order percentage with Transaction ID of <b>1161630238 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 04:58:34', '0'),
(618, '882422181              ', '1135622190', 'Your order with Transaction ID of <b>1161630238 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 04:58:35', '0'),
(619, '882422181                 ', '1135622190', 'Your payment on <b>Transaction ID: 178888907</b> has been recieved. Thank you!', 'Glydel Reyes', '2022-12-09 04:59:01', '0'),
(620, '882422181                   ', '1135622190', 'Your order percentage with Transaction ID of <b>178888907 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 04:59:09', '0'),
(621, '882422181                     ', '1135622190', 'Your order percentage with Transaction ID of <b>178888907 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 04:59:12', '0'),
(622, '882422181                       ', '1135622190', 'Your order percentage with Transaction ID of <b>178888907 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 04:59:14', '0'),
(623, '882422181                         ', '1135622190', 'Your order with Transaction ID of <b>178888907 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 04:59:16', '0'),
(624, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 05:03:39', '0'),
(625, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 05:06:27', '0'),
(626, '882422181                             ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1314223046 .</b>', 'Glydel Reyes', '2022-12-09 05:06:33', '0'),
(627, '882422181                                ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>1314223046 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 05:06:59', '0'),
(628, '882422181                                  ', '1135622190', 'Your order percentage with Transaction ID of <b>1314223046 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 05:07:01', '0'),
(629, '882422181                                    ', '1135622190', 'Your order percentage with Transaction ID of <b>1314223046 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 05:07:03', '0'),
(630, '882422181                                      ', '1135622190', 'Your order percentage with Transaction ID of <b>1314223046 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 05:07:05', '0'),
(631, '882422181                                        ', '1135622190', 'Your order with Transaction ID of <b>1314223046 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 05:07:06', '0'),
(632, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 05:08:49', '0'),
(633, '882422181                                         ', '1135622190', 'The shop accepted your order. Transaction ID: <b>994086889 .</b>', 'Glydel Reyes', '2022-12-09 05:10:48', '0'),
(634, '882422181                                         ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>994086889 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 05:11:06', '0'),
(635, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>994086889 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 05:11:08', '0'),
(636, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>994086889 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 05:11:10', '0'),
(637, '882422181                                         ', '1135622190', 'Your order percentage with Transaction ID of <b>994086889 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 05:11:12', '0'),
(638, '882422181                                         ', '1135622190', 'Your order with Transaction ID of <b>994086889 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 05:11:14', '0'),
(639, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 05:37:49', '0'),
(640, '882422181                                         ', '1135622190', 'The shop accepted your order. Transaction ID: <b>449110421 .</b>', 'Glydel Reyes', '2022-12-09 05:37:53', '0'),
(641, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 05:48:44', '0'),
(642, '882422181                                         ', '1135622190', 'The shop accepted your order. Transaction ID: <b>208930800 .</b>', 'Glydel Reyes', '2022-12-09 05:48:51', '0'),
(643, '882422181   ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>208930800 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 06:10:44', '0'),
(644, '882422181     ', '1135622190', 'Your order percentage with Transaction ID of <b>208930800 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 06:10:46', '0'),
(645, '882422181       ', '1135622190', 'Your order percentage with Transaction ID of <b>208930800 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 06:10:48', '0'),
(646, '882422181         ', '1135622190', 'Your order percentage with Transaction ID of <b>208930800 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 06:10:51', '0'),
(647, '882422181           ', '1135622190', 'Your order with Transaction ID of <b>208930800 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 06:10:53', '0'),
(648, '882422181             ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>449110421 </b> is now 25%.', 'Glydel Reyes', '2022-12-09 06:10:56', '0'),
(649, '882422181               ', '1135622190', 'Your order percentage with Transaction ID of <b>449110421 </b> is now 50%.', 'Glydel Reyes', '2022-12-09 06:10:58', '0'),
(650, '882422181                 ', '1135622190', 'Your order percentage with Transaction ID of <b>449110421 </b> is now 75%.', 'Glydel Reyes', '2022-12-09 06:11:01', '0'),
(651, '882422181                   ', '1135622190', 'Your order percentage with Transaction ID of <b>449110421 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-09 06:11:03', '0'),
(652, '882422181                     ', '1135622190', 'Your order with Transaction ID of <b>449110421 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-09 06:11:05', '0'),
(653, '1135622190', '882422181', 'Juriel Comia sent you an order.', 'Juriel Comia', '2022-12-09 09:00:43', '0'),
(654, '882422181   ', '1135622190', 'The shop accepted your order. Transaction ID: <b>328250052 .</b>', 'Glydel Reyes', '2022-12-09 09:00:50', '0'),
(655, '882422181     ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>328250052 </b> is now 25%.', 'Glydel Reyes', '2022-12-10 03:48:57', '0'),
(656, '882422181       ', '1135622190', 'Your order percentage with Transaction ID of <b>328250052 </b> is now 50%.', 'Glydel Reyes', '2022-12-10 03:48:59', '0'),
(657, '882422181         ', '1135622190', 'Your order percentage with Transaction ID of <b>328250052 </b> is now 75%.', 'Glydel Reyes', '2022-12-10 03:49:02', '0'),
(658, '882422181           ', '1135622190', 'Your order percentage with Transaction ID of <b>328250052 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-10 03:49:05', '0'),
(659, '882422181             ', '1135622190', 'Your order with Transaction ID of <b>328250052 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-10 03:49:08', '0'),
(660, '882422181      ', '1135622190', 'The shop accepted your order. Transaction ID: <b>633956608 .</b>', 'Glydel Reyes', '2022-12-10 15:09:28', '0'),
(661, '882422181        ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>633956608 </b> is now 25%.', 'Glydel Reyes', '2022-12-10 15:09:35', '0'),
(662, '882422181          ', '1135622190', 'Your order percentage with Transaction ID of <b>633956608 </b> is now 50%.', 'Glydel Reyes', '2022-12-10 15:09:37', '0'),
(663, '882422181            ', '1135622190', 'Your order percentage with Transaction ID of <b>633956608 </b> is now 75%.', 'Glydel Reyes', '2022-12-10 15:09:40', '0'),
(664, '882422181              ', '1135622190', 'Your order percentage with Transaction ID of <b>633956608 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-10 15:09:42', '0'),
(665, '882422181                ', '1135622190', 'Your order with Transaction ID of <b>633956608 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-10 15:09:45', '0'),
(666, '882422181                    ', '1135622190', 'The shop accepted your order. Transaction ID: <b>1080403633 .</b>', 'Glydel Reyes', '2022-12-10 15:12:08', '0'),
(667, '882422181                      ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>1080403633 </b> is now 25%.', 'Glydel Reyes', '2022-12-10 15:12:30', '0'),
(668, '882422181                        ', '1135622190', 'Your order percentage with Transaction ID of <b>1080403633 </b> is now 50%.', 'Glydel Reyes', '2022-12-10 15:12:33', '0'),
(669, '882422181                          ', '1135622190', 'Your order percentage with Transaction ID of <b>1080403633 </b> is now 75%.', 'Glydel Reyes', '2022-12-10 15:12:36', '0'),
(670, '882422181                            ', '1135622190', 'Your order percentage with Transaction ID of <b>1080403633 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-10 15:12:38', '0'),
(671, '882422181                              ', '1135622190', 'Your order with Transaction ID of <b>1080403633 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-10 15:12:40', '0'),
(672, '882422181  ', '1135622190', 'The shop accepted your order. Transaction ID: <b>285427588 .</b>', 'Glydel Reyes', '2022-12-11 02:41:31', '0'),
(673, '882422181    ', '1135622190', 'We already recieved your downpayment. Thank you! Your order percentage with Transaction ID of <b>285427588 </b> is now 25%.', 'Glydel Reyes', '2022-12-11 02:41:37', '0'),
(674, '882422181      ', '1135622190', 'Your order percentage with Transaction ID of <b>285427588 </b> is now 50%.', 'Glydel Reyes', '2022-12-11 02:41:39', '0'),
(675, '882422181        ', '1135622190', 'Your order percentage with Transaction ID of <b>285427588 </b> is now 75%.', 'Glydel Reyes', '2022-12-11 02:41:41', '0'),
(676, '882422181          ', '1135622190', 'Your order percentage with Transaction ID of <b>285427588 </b> is now 100% and ready for delivery.', 'Glydel Reyes', '2022-12-11 02:41:43', '0'),
(677, '882422181            ', '1135622190', 'Your order with Transaction ID of <b>285427588 </b> has been delivered. Please, write a feedback. Thank you!', 'Glydel Reyes', '2022-12-11 02:41:45', '0');

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
(19, 'Beatrice Bed', 12999, '6ft x 3.5ft', 'Hello World 2', 'Bed', 5, 'product_image/519bbe24b459e1cb456da0f1d0693541beatrice-wenge.jpg'),
(20, 'Buffet Cabinet', 15999, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Others', 20, 'product_image/9f6efda103dc5c9fadfb7f7e84052fec300843_Front.jpg'),
(21, 'Contemporary table - JACARANDA', 20000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 7, 'product_image/031b8e2bb8033ff9e8fcfbc581a123fc65799-1863229.jpg'),
(22, 'Coffee Table', 12000, 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Table', 11, 'product_image/e054146fe95298d71c12431e3351efda61Y4D9mYDTL._SL1239_.jpg'),
(23, 'Wooden Door', 2000, '6ft x 3.5ft', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Door', 4, 'product_image/d4a4de1801879a9c0c7529d68e7ee072Carolina-compressor.png'),
(24, 'Living Room Chair', 5000, 'N/A', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Chair', 7, 'product_image/4e7571d29a73146bc1e7032a862160421580750710-11188871_master.jpg');

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
(70, 1161630238, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(71, 178888907, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(72, 1314223046, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(73, 994086889, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(74, 449110421, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(75, 208930800, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(76, 328250052, 'Processing', '----------', '----------', '----------', '----------'),
(77, 633956608, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(78, 1080403633, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE'),
(79, 285427588, 'DONE', 'DONE', 'DONE', 'DONE', 'DONE');

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
(481, 882422181, 'Active now', 'Juriel', 'Comia', 'Bukal, Lemery, Batangas', 'juriel.ucomia@gmail.com', '09055811152', '25d55ad283aa400af464c76d713c07ad', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0, 0, 38);

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
-- Dumping data for table `tb_userpost`
--

INSERT INTO `tb_userpost` (`id`, `user_email`, `date_time`, `long_desc`, `fname`, `lname`, `myfile`, `response`) VALUES
(66, 'juriel.ucomia@gmail.com', '2022-12-08 21:58:50', 'Hello World', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(67, 'juriel.ucomia@gmail.com', '2022-12-08 21:59:30', 'Hello World 2', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(68, 'juriel.ucomia@gmail.com', '2022-12-08 22:07:19', 'Hello', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(69, 'juriel.ucomia@gmail.com', '2022-12-08 22:11:28', 'Hello', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(70, 'juriel.ucomia@gmail.com', '2022-12-08 23:11:30', 'One', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(71, 'juriel.ucomia@gmail.com', '2022-12-08 23:11:46', 'Two', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(72, 'juriel.ucomia@gmail.com', '2022-12-10 08:09:55', 'fggfgf', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(73, 'juriel.ucomia@gmail.com', '2022-12-10 08:12:48', 'ttytyyy', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0),
(74, 'juriel.ucomia@gmail.com', '2022-12-10 19:41:56', 'Hello', 'Juriel', 'Comia', 'image/1de59e37b8b9c29e60483d583c7f6f022x2.jpg', 0);

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
-- Indexes for table `tb_ordercompleted`
--
ALTER TABLE `tb_ordercompleted`
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
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_customize`
--
ALTER TABLE `tb_customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `tb_pointmessage`
--
ALTER TABLE `tb_pointmessage`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=678;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
