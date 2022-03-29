-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 04:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogdata`
--

CREATE TABLE `blogdata` (
  `blogId` int(10) NOT NULL,
  `blogUser` varchar(256) NOT NULL,
  `blogTitle` varchar(256) NOT NULL,
  `blogContent` longtext NOT NULL,
  `blogTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogdata`
--

INSERT INTO `blogdata` (`blogId`, `blogUser`, `blogTitle`, `blogContent`, `blogTime`, `likes`) VALUES
(19, 'pp', 'First Blog', '<p>Its Awesome website<img alt=\"wink\" src=\"https://cdn.ckeditor.com/4.8.0/full/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /></p>\r\n', '2022-01-07 07:39:41', 1),
(20, 'nk26', 'nanda blogs', '<p>this is my first blog</p>\r\n', '2022-01-11 03:14:45', 2),
(21, 'nandkan', 'my blogs', '', '2022-01-16 10:43:34', 1),
(22, 'pp', 'new blog', '', '2022-01-19 05:49:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogfeedback`
--

CREATE TABLE `blogfeedback` (
  `blogId` int(10) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `commentUser` varchar(256) NOT NULL,
  `commentPic` varchar(256) NOT NULL DEFAULT 'profile0.png',
  `commentTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogfeedback`
--

INSERT INTO `blogfeedback` (`blogId`, `comment`, `commentUser`, `commentPic`, `commentTime`) VALUES
(20, 'nicee', 'nk26', 'profile0.png', '2022-01-11 03:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` int(10) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `busername` varchar(100) NOT NULL,
  `bpassword` varchar(100) NOT NULL,
  `bhash` varchar(100) NOT NULL,
  `bemail` varchar(100) NOT NULL,
  `bmobile` varchar(100) NOT NULL,
  `baddress` text NOT NULL,
  `bactive` int(100) NOT NULL DEFAULT 0,
  `id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `bname`, `busername`, `bpassword`, `bhash`, `bemail`, `bmobile`, `baddress`, `bactive`, `id`) VALUES
(5, 'rohit', 'rk', '$2y$10$ZeexYdz/rQaZsQJAqPPdxuwfdAK3GX9ZjeD4YZiFm.PKjoLwtW80G', 'a2557a7b2e94197ff767970b67041697', 'rk@gmail.com', '1234567899', '123', 0, 'KSWDWI11341201');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fid` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fusername` varchar(255) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `fhash` varchar(255) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `fmobile` varchar(255) NOT NULL,
  `faddress` text NOT NULL,
  `factive` int(10) NOT NULL DEFAULT 0,
  `frating` int(11) NOT NULL DEFAULT 0,
  `picExt` varchar(255) NOT NULL DEFAULT 'png',
  `picStatus` int(10) NOT NULL DEFAULT 0,
  `id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fname`, `fusername`, `fpassword`, `fhash`, `femail`, `fmobile`, `faddress`, `factive`, `frating`, `picExt`, `picStatus`, `id`) VALUES
(11, 'pavan', 'pks', '$2y$10$ttfdhjpLq4fh2Q9oMUlpc.04Xfgvx6ZAyMUUT.90bY4VHlye6HdEO', 'bf62768ca46b6c3b5bea9515d1a1fc45', 'pks@gmail.com', '1234567899', 'ramnagar', 0, 0, 'png', 0, 'FID372567813252'),
(12, 'manu', 'maximus', '$2y$10$WHS6Yq9fpa3wMV3eFjNT0uDEbgoL5FZRsZ97mdHPQOvUDK9UbGcwC', 'a97da629b098b75c294dffdc3e463904', 'manubenakal@gmail.com', '8055000000', 'rr nagar', 0, 0, 'png', 0, 'FID3725678132529'),
(4, 'nanda kumar b m', 'nk26', '$2y$10$MsMLyCpqpmcJZ1nMC6n62ezfxOHBUcxIAQYsEvwEWEq79Co/0NqkG', 'f1c1592588411002af340cbaedd6fc33', 'Nanda262001@gmail.com', '9538727397', '#332, 9th A cross balaji layout vajarahalli kp road', 0, 5, 'png', 0, 'HG2172HNDHD');

-- --------------------------------------------------------

--
-- Table structure for table `fproduct`
--

CREATE TABLE `fproduct` (
  `fid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `product` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `pimage` varchar(255) NOT NULL DEFAULT 'blank.png',
  `picStatus` int(10) NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fproduct`
--

INSERT INTO `fproduct` (`fid`, `pid`, `product`, `pcat`, `pinfo`, `price`, `pimage`, `picStatus`, `quantity`) VALUES
(4, 53, 'shimla apple', 'Fruit', '<p>About the Product</p>\n\n<ul>\n	<li>Considered as most commonly grown apples in India, Shimla apples have a light red skin, juicy and crunchy flesh.</li>\n	<li>We source the best apples with residue and wax free peel from the trusted growers</li>\n</ul', 9000, 'shimla apple4.jpg', 1, 50),
(4, 55, 'Banana', 'Fruit', '<p>About the Product</p>\r\n\r\n<ul>\r\n	<li>These Nendran bananas hail from Kerala, where they are a staple fruit.</li>\r\n	<li>They have a pale yellow colour with silky flesh and compared to other varieties, they have a distinctive colour and texture owing to t', 3000, 'Banana4.jpg', 1, 20),
(4, 57, 'Banana Yelakki', 'Fruit', '<p>About the Product</p>\r\n\r\n<ul>\r\n	<li>Fresh, tiny small sized, directly procured from the farm, this variety is called Yelakki in Bangalore and Elaichi in Mumbai.</li>\r\n	<li>Despite its small size, they are naturally flavoured, aromatic and sweeter compa', 4500, 'Banana Yelakki4.jpg', 1, 25),
(11, 59, 'Wheat', 'Grains', '<p><strong>Color</strong>: Golden</p>\r\n\r\n<p><strong>Packaging Size</strong>: 50 Kg</p>\r\n\r\n<p><strong>Brand</strong>: Vision</p>\r\n\r\n<p><strong>Packaging Type</strong>: PP Bags</p>\r\n\r\n<p><strong>Shell Life</strong>: 3 months</p>\r\n\r\n<p><strong>Country of Ori', 25000, 'Wheat11.jpeg', 1, 35),
(11, 61, 'Ragi', 'Grains', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Packaging Size</td>\r\n			<td>10-25 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Protein</td>\r\n			<td>5-8%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Packaging Type</td>\r\n			<td>PP Bag</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Potassium</td>\r\n			<td>408 mg</td', 3000, 'Ragi11.jpg', 1, 80),
(12, 62, 'sona rice', 'Grains', '<p>sonamasuri rice good quality</p>\r\n\r\n<p>bellary,</p>\r\n', 3000, 'sona rice12.jpg', 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `likedata`
--

CREATE TABLE `likedata` (
  `blogId` int(10) NOT NULL,
  `blogUserId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `pid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `review`
--
DELIMITER $$
CREATE TRIGGER `rating_update` AFTER INSERT ON `review` FOR EACH ROW update `farmer` set `frating` = `frating` + new.rating where `fid` =(
SELECT `fid` from `fproduct` WHERE fproduct.pid=new.pid)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `quantity` int(5) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `TXNTIME` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `bid`, `pid`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`, `quantity`, `amount`, `TXNTIME`) VALUES
(106, 5, 59, 'rohit', 'BENGALURU', '+919538727397', 'Nanda262001@gmail.com', '560109', '#332', 40, 1000000, '2022-02-17 18:36:29');

--
-- Triggers `transaction`
--
DELIMITER $$
CREATE TRIGGER `PRODUCTUPDATEONBUY` AFTER INSERT ON `transaction` FOR EACH ROW UPDATE `fproduct` set `quantity`=`quantity`-new.quantity where fproduct.pid=new.pid
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogdata`
--
ALTER TABLE `blogdata`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `blogUser` (`blogUser`),
  ADD KEY `likes` (`likes`);

--
-- Indexes for table `blogfeedback`
--
ALTER TABLE `blogfeedback`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `commentUser` (`commentUser`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`,`id`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`,`fid`),
  ADD UNIQUE KEY `fid` (`fid`),
  ADD KEY `frating` (`frating`);

--
-- Indexes for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `likedata`
--
ALTER TABLE `likedata`
  ADD KEY `blogId` (`blogId`),
  ADD KEY `blogUserId` (`blogUserId`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD KEY `bid` (`bid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `pid` (`pid`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `bid` (`bid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogdata`
--
ALTER TABLE `blogdata`
  MODIFY `blogId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fproduct`
--
ALTER TABLE `fproduct`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD CONSTRAINT `fproduct_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `farmer` (`fid`);

--
-- Constraints for table `likedata`
--
ALTER TABLE `likedata`
  ADD CONSTRAINT `likedata_ibfk_1` FOREIGN KEY (`blogId`) REFERENCES `blogdata` (`blogId`),
  ADD CONSTRAINT `likedata_ibfk_2` FOREIGN KEY (`blogUserId`) REFERENCES `farmer` (`fid`);

--
-- Constraints for table `mycart`
--
ALTER TABLE `mycart`
  ADD CONSTRAINT `mycart_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `buyer` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mycart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `fproduct` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`bid`) REFERENCES `buyer` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `fproduct` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
