-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 07:40 AM
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
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `a_password` varchar(25) NOT NULL,
  `myfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `first_name`, `last_name`, `email`, `contact_no`, `position`, `a_password`, `myfile`) VALUES
(1, 'Germs', 'Raid', 'germs@gmail.com', '09123456789', 'ADMIN', '1234', '[value-8]');

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
(12, 'Beatrice Bed', 26950, '6ft x 3.5ft', 'hellow World', 'Bed', 'product_image/98a1ba8f8e131ff534d3ff013b0f838cbeatrice-wenge.jpg'),
(13, 'Office Table', 15900, 'N/A', 'Hey Jude', 'Table', 'product_image/2ebe9f9fb1815bf90798bb94762b6f526510.jpg.jpg'),
(14, 'Solid Door', 20000, '40mm x 80mm', 'Ito ay gawa sa puno ng narra', 'Door', 'product_image/fd16fd3bf9c97ff1d34fd908a69fede4DOR111.jpg'),
(15, 'Wood Dog', 2000, 'N/A', 'For Display', 'Others', 'product_image/9b615a0564b1e825ae7a8dab6bbe9cf4wood-carving-thumb2.jpg'),
(16, 'Carolina Table', 32000, 'N/A', 'Carolina Classics Fairview Antique Black 36 in. Round Pedestal Dining Table 3036T-AB ', 'Table', 'product_image/2a34eb4c6fb14302c8cd5e7f2170d469blacktable.jpg'),
(18, 'Wooden Door(Atlanta)', 15900, 'N/A', 'The min and max attributes specify the minimum and maximum values for an input element.', 'Door', 'product_image/77ec0d3d25445b0f4a5391ac18c3dc8ewooden-work-500x500.jpg');

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
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `u_password` varchar(25) NOT NULL,
  `myfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `first_name`, `last_name`, `u_address`, `email`, `contact_no`, `u_password`, `myfile`) VALUES
(472, 'Cat', 'Yah', 'Meow Town', 'meow@gmail.com', '09123456789', '12345678Meow', 'image/e81bde8ec487e58f22c631a3270d4e14300057562_1423013448198788_714369143840687403_n.jpg'),
(473, 'Juriel', 'Comia', 'Bukal', 'juriel.ucomia@gmail.com', '09055811152', 'Juriel@030919', 'image/556f82e42ab9615f838ff74b203f95fcowner.png'),
(474, 'Juriel', 'Comia', 'Bukal', 'juriel.comia@g.batstate-u.edu.ph', '09055811152', '1234567Juriel', 'image/ad13ec41ca52ce7b7e6c677c198af518owner.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userpost`
--

CREATE TABLE `tb_userpost` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `long_desc` text NOT NULL,
  `file` varchar(255) NOT NULL
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
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_shopinfo`
--
ALTER TABLE `tb_shopinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;

--
-- AUTO_INCREMENT for table `tb_userpost`
--
ALTER TABLE `tb_userpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
