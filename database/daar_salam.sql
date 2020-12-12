-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 08:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daar_salam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agents_reg`
--

CREATE TABLE `agents_reg` (
  `id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_address` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_phone` varchar(56) NOT NULL,
  `agent_username` varchar(56) NOT NULL,
  `image` int(11) NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'not approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents_reg`
--

INSERT INTO `agents_reg` (`id`, `agent_name`, `agent_address`, `agent_email`, `agent_phone`, `agent_username`, `image`, `agent_password`, `status`) VALUES
(1, 'Abdulkabeer Akinlabi and Co', '22 Adijatu Street', 'habeebkabeer@gmail.com', '08093921440', 'habeebkabeer', 0, 'habeebkabeer', 'approved'),
(2, '', '', '', '', '', 0, '', 'approved'),
(3, 'Mubarak Ganiyu', 'Odejayi Apete', 'mubarak@gmail.com', '080939292339', 'mub', 0, 'mub', 'not approved'),
(4, 'Ganiyu', 'sgsgs', 'habeebkabeer4@gmail.com', '0898777', 'ganiyu', 0, 'ganiyu', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `mail_admin`
--

CREATE TABLE `mail_admin` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `date_sent` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_admin`
--

INSERT INTO `mail_admin` (`id`, `sender`, `subject`, `message`, `date_sent`) VALUES
(1, 'beebah', 'payment', 'Salam alaikum warahmatullah', '2020-06-23 18:35:09.837212'),
(2, 'beebah', 'complement', 'Thanks, salam alaikum', '2020-06-24 17:21:51.989255'),
(3, 'habeebkabeer', 'payment', 'jkncvnnv', '2020-07-09 21:54:12.472034'),
(4, 'habeebkabeer', 'complaint', 'gbfgbfbfgv', '2020-07-14 19:23:47.987145');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_use` varchar(256) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `property_price` int(100) NOT NULL,
  `agent_phone` varchar(255) NOT NULL,
  `property_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `property_access` varchar(11) NOT NULL DEFAULT 'hidden',
  `username` varchar(256) NOT NULL,
  `number_bedroom` varchar(11) NOT NULL,
  `number_bathroom` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_name`, `property_type`, `property_use`, `property_location`, `property_price`, `agent_phone`, `property_description`, `image`, `image2`, `property_access`, `username`, `number_bedroom`, `number_bathroom`) VALUES
(1, '2 Plots of land at Bodijja', 'land sale', 'commercial', 'oyo', 23444, '2 Plots of land at Bodijja', '23444', '0', 'Screenshot_20190504-062443.png', 'Available', 'habeebkabeer', '1', '1'),
(2, '23 lot', 'land sale', 'agriculture', 'oyo', 2, '23 lot', '2,9000d', 'IMG_2019111', 'IMG_20191121_174953.jpg', 'Available', 'agent', '2', '4'),
(3, '2 Plots of land at Bodijja', 'land rent', 'commercial', 'oyo', 50000, '2 Plots of land at Bodijja', '12,000', 'IMG_2019111', 'IMG_20191115_171933.jpg', 'Sold', 'agent', '3', '5'),
(4, '3Acres of land', 'land sale', 'agriculture', 'lagos', 17000, '08033269393', 'Located in a serene enviroonment, good for school', 'IMG_2019111', 'IMG_20191112_171520.jpg', 'Removed', 'agent', '5', '2'),
(5, '2-Room self contain', 'house rent', 'agriculture', 'ogun', 30000, '0909898988', 'This is a good apartment with 2baths and clean environment', 'IMG_2019111', 'IMG_20191121_174930.jpg', 'Available', 'beebah', '2', '5'),
(6, '3Acres of land', 'land sale', 'commercial', 'oyo', 345, '08033269393', 'The land is located within a serene environment', 'IMG_2019121', 'IMG_20191207_192010.jpg', 'Available', 'beebah', '3', '6'),
(7, '2-Room self contain', 'land sale', 'commercial', 'lagos', 30000, '08093921440', 'Description of the property will always go here', 'IMG_2019122', 'IMG_20191224_124949.jpg', 'Sold', 'beebah', '3', '6'),
(8, '45-Acres of Land', 'land sale', 'commercial', 'lagos', 345000, '08093945647', 'Located where the land can be used for farming', 'Screenshot_', 'Screenshot_20191216-203800.png', 'Removed', 'beebah', '3', '6'),
(9, 'Jamiu Abu Fatimah', 'house rent', 'residential', 'Ekiti', 120000, '080767656565', 'description hsgsg gsgsg', 'IMG_2019120', 'IMG_20191224_125004.jpg', 'hidden', 'beebah', '1', '1'),
(10, 'a room self contain', 'land rent', 'residential', 'Bayelsa', 1000, '090909', 'scscvsdcs sdsdf dsff', 'BRO AYO 33.', 'BRO AYO 11.jpg', 'hidden', 'habeebkabeer', '4', '5'),
(11, 'A room self contain', 'house rent', 'residential', 'Ekiti', 100000, '009009', 'wwdw sdjjdc sjnk', 'how-to-bg.j', 'BRO AYO 33.jpg', 'hidden', 'habeebkabeer', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `seller_name` varchar(256) NOT NULL,
  `seller_type` varchar(56) NOT NULL,
  `seller_address` varchar(256) NOT NULL,
  `seller_email` varchar(256) NOT NULL,
  `property_name` varchar(256) NOT NULL,
  `property_price` varchar(255) NOT NULL,
  `location` varchar(256) NOT NULL,
  `seller_phone` varchar(256) NOT NULL,
  `property_description` varchar(256) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `seller_name`, `seller_type`, `seller_address`, `seller_email`, `property_name`, `property_price`, `location`, `seller_phone`, `property_description`, `image1`, `image2`) VALUES
(7, 'Abdulkabeer Akinlabi', 'Agent', '22', 'a@g.m', '2 Plot of land', '2,9000', 'Oyo', '09033269494', 'Des', '', ''),
(8, 'Abdulkabeer Akinlabi', 'Agent', '22', 'a@g.m', '2 Plot of land', '2,9000', 'Oyo', '09033269494', 'Des', 'IMG_20190319_113201.jpg', ''),
(9, 'Maryam', 'Owner', 'asdd', 'a@g.m', '23 lot', '23444', 'Oyo', '09033269494', 'Descrime more', '', ''),
(10, 'Lawal', 'Agent', 'Address', 'habeebkaber@gmail.com', '2 Plots of land at Bodijja', '2,9000', 'Oyo', '09033269494', 'Descrime  me', 'IMG_20190504_121237.jpg', ''),
(11, 'Lawal babatunde', 'Agent', 'Address', 'a@g.m', '2 Plot of land', '2,9000', 'Oyo', '080939291234', 'More', 'IMG_20190504_121247.jpg', ''),
(12, 'Mubarak', 'Owner', 'Address', 'a@g.m', '2 Plots of land at Bodijja', '12,000', 'Oyo', '08033269474', 'Descr', '', ''),
(13, 'Rasheedah Korede', 'Agent', 'Address', 'habeeb@gmail.com', '2 Plots of land at Bodijja', '2,9000', 'Ogun', '09033269494', 'Desc', 'Screenshot_20190503-101949.png', 'Screenshot_20190505-003737.png'),
(14, 'Habeebah Enterprise', 'Agent', '22 Adijatu Street, Baraka, Bodija Ibadan, Oyo State', 'agent@email.com', '2Plot of Land', '12,000', 'Ogun', '080939291234', 'Located within a serene environment, good for school', 'Screenshot_20190503-101949.png', 'Screenshot_20190505-003737.png'),
(15, 'Abu Fatimah Jamiu', 'Agent', '22 Agbowo Shopping Complex', 'habeeb@gmail.com', '2 plot of residential house', '123000', 'Ishola', '080977363636', 'THIS SHSH SS S', 'IMG_20191217_160412.jpg', 'IMG_20191224_124915.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `status`) VALUES
(1, 'agent', 'agent', 'agent@email.com', 'Akinlabi Abdulkabeer', 'agent'),
(2, 'habeebkabeer', 'habeebkabeer', 'habeebkabeer@gmail.com', 'AbdulKabeer Lawal', 'admin'),
(3, 'beebah', 'beebah', 'beebah@ishola.com', 'Habeebah Ishola Oluwabusayo', 'ban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents_reg`
--
ALTER TABLE `agents_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_admin`
--
ALTER TABLE `mail_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents_reg`
--
ALTER TABLE `agents_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail_admin`
--
ALTER TABLE `mail_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
