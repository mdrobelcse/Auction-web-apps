-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 07:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auctionweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid`
--

CREATE TABLE `tbl_bid` (
  `bid_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `bid_price` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `bid_desc` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid`
--

INSERT INTO `tbl_bid` (`bid_id`, `user_id`, `user_photo`, `bid_price`, `item_id`, `bid_desc`, `status`) VALUES
(24, 3, '', '50', 16, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem', 0),
(26, 2, '', '100', 9, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dum', 0),
(27, 3, '', '120', 9, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dum', 0),
(28, 6, '', '130', 9, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem', 0),
(29, 8, '', '135', 9, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum ', 0),
(31, 8, '', '51', 16, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum ', 0),
(32, 9, '', '140', 9, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum ', 0),
(33, 3, '', '400', 20, 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ips', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_desc` text NOT NULL,
  `time_duration` varchar(255) NOT NULL,
  `strt_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `img_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`item_id`, `item_name`, `item_price`, `item_desc`, `time_duration`, `strt_time`, `end_time`, `img_id`, `image`, `cat_id`, `user_id`, `status`) VALUES
(6, 'T-shirt', '55', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:41:29', '2018-11-24 17:41:29', 0, 'upload/83f333b43b.jpg', 1, 2, 0),
(7, 't-shirt', '335', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:41:51', '2018-11-25 17:41:51', 0, 'upload/a8dcc7d44c.jpg', 2, 3, 0),
(8, 't-shirt', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:42:10', '2018-11-26 17:42:10', 0, 'upload/95909d835f.jpg', 2, 3, 0),
(9, 't-shirt', '45', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:42:39', '2018-11-29 17:42:39', 0, 'upload/89a0355cde.jpg', 2, 3, 0),
(10, 't-shirt', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:43:18', '2018-11-27 17:43:18', 0, 'upload/45a2c84dc2.jpg', 2, 2, 0),
(11, 't-shirt', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:43:36', '2018-11-28 17:43:36', 0, 'upload/dfe73ed873.jpg', 3, 2, 0),
(12, 'laptop', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:44:24', '2018-11-25 17:44:24', 0, 'upload/8539d6b3a1.jpg', 2, 4, 0),
(15, 'trolly', '45', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:46:53', '2018-11-27 17:46:53', 0, 'upload/d7d13816fb.jpg', 2, 4, 0),
(16, 'trolly', '45', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:47:16', '2018-11-26 17:47:16', 0, 'upload/77d80380c5.jpg', 2, 3, 0),
(17, 'lunch box', '45', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:48:47', '2018-11-26 17:48:47', 0, 'upload/a7884c868c.jpg', 2, 2, 0),
(18, 'lunch box', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:49:06', '2018-11-26 17:49:06', 0, 'upload/e6a177d186.jpg', 2, 3, 0),
(19, 'lunch box', '232', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.', '', '2018-11-22 17:49:53', '2018-11-24 17:49:53', 0, 'upload/c5e0b4645b.jpg', 3, 3, 0),
(20, 'lunch box', '45', 'Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy', '', '2018-11-27 06:50:41', '2018-11-28 06:50:41', 0, 'upload/f469b25b06.jpg', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `price`) VALUES
(1, 60),
(2, 80),
(3, 90),
(4, 20),
(5, 100),
(6, 30),
(7, 120),
(8, 220);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_pass`, `image`, `status`) VALUES
(2, 'Sohel ahammed', 'sohel@gmail.com', '018776554433', '12345', 'upload/10c7055bf5.jpg', 0),
(3, 'Robel ahammed', 'robel@gmail.com', '018776554433', '12345', 'upload/b725367327.jpg', 0),
(4, 'Kamrul hasan', 'hasan@gmail.com', '018776554433', '12345', 'upload/a7ed62d218.jpg', 0),
(5, 'kabir', 'kabir@gmail.com', '018776554433', '12345', 'upload/d29a8361fb.jpg', 0),
(6, 'Hasif', 'hasif@gmail.com', '018776554433', '12345', 'upload/848d47b72c.jpg', 0),
(7, 'Kamal', 'kamal@gmail.com', '018776554433', '12345', 'upload/b5f12e5b5d.jpg', 0),
(8, 'Riah', 'riah@gmail.com', '018776554433', '12345', 'upload/40d1ffb402.jpg', 0),
(9, 'Jonaki', 'jonaki@gmail.com', '01776554332', '12345', '', 0),
(10, 'Sabbir', 'sabbir@gmail.com', '018776554433', '12345', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bid`
--
ALTER TABLE `tbl_bid`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bid`
--
ALTER TABLE `tbl_bid`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
