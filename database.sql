-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 09:38 AM
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
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phoneNumber`, `subject`) VALUES
(1, 'Hariom', 'H@gmail.com', '9262717361', 'froad'),
(3, 'gdvuyfef', 'A@gmail.com', '7854219623', 'dsbvhdvhj'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'wdfb', '', '', ''),
(9, 'sgg', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'shgfue', 'g@gamil.com', '9262717361', 'kgiugui'),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, 'egwiur', 'a@gmail.com', '926271731', 'jsdfiu'),
(18, 'hfiugwe', 'hygeuiwg@gmail.com', '452165287', 'geuifgei'),
(19, 'hfiugwe', 'hygeuiwg@gmail.com', '452165287', 'geuifgei'),
(20, 'vegfw', 'f@gmail.com', '9hdvsgfjd', ' hjdsgf'),
(21, 'dsfuigwui', 'hdgyf', 'dfageiu', 'djafhf');

-- --------------------------------------------------------

--
-- Table structure for table `hsdb`
--

CREATE TABLE `hsdb` (
  `id` int(100) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hsdb`
--

INSERT INTO `hsdb` (`id`, `first_name`, `user_name`, `user_password`, `email`, `contact_no`) VALUES
(1, 'hariom', 'h_2003', 'enter', 'h@gmail.com', '9262717361'),
(9, 'Ram', 'kumar', 'kumar', 'h@gmail.com', '8745114521'),
(10, 'h_2005', 'h2005', '123', 'g@gmail.com', '9262717361'),
(14, 'aman', 'aman', '12345', 'a@gmail.com', '8562123645');

-- --------------------------------------------------------

--
-- Table structure for table `pannel`
--

CREATE TABLE `pannel` (
  `id` int(10) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pannel`
--

INSERT INTO `pannel` (`id`, `UserName`, `Password`) VALUES
(1, 'WhoCart', '24112003');

-- --------------------------------------------------------

--
-- Table structure for table `productsection2`
--

CREATE TABLE `productsection2` (
  `id` int(200) NOT NULL,
  `image` text NOT NULL,
  `aboutproduct` varchar(100) NOT NULL,
  `name_of_product` varchar(30) NOT NULL,
  `Current_Price_of_product` varchar(10) NOT NULL,
  `Old_Price_of_product` varchar(10) NOT NULL,
  `Discount_Persentage_On_Product` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsection2`
--

INSERT INTO `productsection2` (`id`, `image`, `aboutproduct`, `name_of_product`, `Current_Price_of_product`, `Old_Price_of_product`, `Discount_Persentage_On_Product`) VALUES
(32, '1411588402.png', 'Men Hoddy', 'Hoddy', '600', '800', '25'),
(34, '499283082.jpg', 'Best Red color Hoddy  ', 'Hoddy', '450', '600', '25'),
(35, '56149866.jpg', 'Best Hoody Branded', 'Hoddy', '460', '700', '34'),
(36, '370767901.jpg', 'Hoddy Best Looks', 'Hoddy', '350', '150', '30'),
(37, '1272604713.png', 'Good Looking Hoddy', 'Hoddy', '600', '800', '25'),
(38, '1512373582.png', 'Good Looking Hoddy', 'Hoody', '500', '800', '37');

-- --------------------------------------------------------

--
-- Table structure for table `productsection3`
--

CREATE TABLE `productsection3` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `aboutproduct` varchar(80) NOT NULL,
  `name_of_product` varchar(40) NOT NULL,
  `Current_Price_of_product` varchar(100) NOT NULL,
  `Old_Price_of_product` varchar(1000) NOT NULL,
  `Discount_Persentage_On_Product` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsection3`
--

INSERT INTO `productsection3` (`id`, `image`, `aboutproduct`, `name_of_product`, `Current_Price_of_product`, `Old_Price_of_product`, `Discount_Persentage_On_Product`) VALUES
(17, '1970114705.jpg', 'Pure cottons T-Shirt', 'T-Shirt', '400', '600', 33),
(18, '2068821924.jpg', 'Black T-shirt Pure cottons ', 'T-shirt', '800', '1200', 33),
(19, '1345715176.jpg', 'Good Looking T-Shirt', 'Men T-Shirt', '305', '400', 23),
(20, '2125486772.jpg', 'Red T-Shirt For Men', 'T-shirt', '400', '600', 33),
(21, '1632722135.png', 'Men T-shirt', 'T-Shirt', '400', '750', 33),
(22, '955567708.jpg', 'Men T-shirt Look Fanshi', 'T-Shirt', '350', '500', 30);

-- --------------------------------------------------------

--
-- Table structure for table `productslider1`
--

CREATE TABLE `productslider1` (
  `id` int(100) NOT NULL,
  `image` text NOT NULL,
  `aboutproduct` varchar(200) NOT NULL,
  `name_of_product` text NOT NULL,
  `prise_of_product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productslider1`
--

INSERT INTO `productslider1` (`id`, `image`, `aboutproduct`, `name_of_product`, `prise_of_product`) VALUES
(63, '765360900.jpg', 'Men cotton Jeans ', 'Denim Jeans', '500'),
(65, '1159087754.jpg', 'Pure cotton Jeans', 'Denim Jeans', '900'),
(67, '1479589334.jpg', 'Pure cotton Jeans', 'Denim Jeans', '400'),
(68, '337261132.jpg', 'Men Jeans Pure Cotton', 'Sparkey Jeans', '1200'),
(69, '81580643.jpg', 'Good Cotton Jeans', 'Cotton Sparkey Jeans', '850'),
(70, '1383129982.jpg', 'Good Looking Sparkey Jeans', 'Sparkey Jeans', '1250'),
(71, '870173720.jpg', 'Buy one Get Two Jeans', 'Best Jeans Product', '1500'),
(72, '1291992891.jpg', 'Buy One Get Two jeans', 'Cottons Jeans', '1650'),
(73, '1265360124.jpg', 'Pure cottons Jeans', 'Sparkey Jeans', '950'),
(74, '1572628415.jpg', 'Girls Good Looking  Best product', 'Girls Jeans Pure cotton', '1200'),
(75, '225620077.jpg', 'Girls Denim Jeans', 'Pure Denim cotton Jeans', '1320'),
(76, '317444611.jpg', 'Pure cotton Jeans ', 'Rough Breans Jeans', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `fname`, `gender`, `class`, `code`, `number`, `email`) VALUES
(1, 'rrrrrrrrrrrrrrr', '4ttttwwwwwwfjjjjjjjj', 'Male', '1', '+91', '1122222222', 'ra@gmail.com'),
(2, 'ram yadav', 'rahul yadav', 'Male', '12th', '+91', '9876543219', 'ram@gmail.com'),
(3, 'ere', 'tddgdf', 'Other', '3', '+91', '4333333333', '33@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regester`
--

CREATE TABLE `regester` (
  `id` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `State` varchar(20) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Conform_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regester`
--

INSERT INTO `regester` (`id`, `Name`, `Date_of_Birth`, `Gender`, `State`, `Address`, `Email`, `Phone_Number`, `Password`, `Conform_Password`) VALUES
(3, 'Hariom', '2003-11-24', '', 'Bihar', '845433', 'H@gmail.com', '9262717361', 'Enter', 'Enter'),
(4, 'joshi@gmail.com', '2022-07-21', 'Male', 'uk', '845433', 'goshi@gmail.com', '9262717361', '9262717361', '9262717361'),
(32, 'Hariom', '2003-11-24', 'Male', 'Bihar', '845433', 'H@gmail.com', '9262717361', 'Enter', 'Enter'),
(33, 'Hariom', '2003-11-24', 'Male', 'Bihar', '845433', 'H@gmail.com', '9262717361', 'Enter', 'Enter'),
(38, 'Hariom', '2004-07-28', 'Male', 'Bihar', '845433', 'E@gamil.com', '9262717361', '9262717361', '9262717361'),
(39, 'Hariom', '2004-07-28', 'Male', 'Bihar', '845433', 'E@gamil.com', '9262717361', '9262717361', '9262717361'),
(40, 'amitkumar', '2002-10-18', 'Male', 'bihar', '841416', 'kmr.amit92089@gmail.com', '9155763246', 'Amit@2002', 'Amit@2002'),
(41, 'love', '2022-08-17', 'Male', 'bwgeiu4', '6679879', 'h@gmail.com', '9262717361', 'love', 'love'),
(42, 'love', '2022-08-17', 'Male', 'bwgeiu4', '6679879', 'h@gmail.com', '7979797897', '12345', '1235');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(7) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(35, '1706956958.jpg'),
(37, '18740682.jpg'),
(38, '412333835.jpg'),
(39, '142869168.jpg'),
(41, '1394622011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `Id` int(250) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Landmark` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `countary` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `Phone_No` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `name_of_product` text NOT NULL,
  `aboutproduct` text NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `prise_of_product` int(255) NOT NULL,
  `Way_Of_Payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`Id`, `Fname`, `Lname`, `email`, `Landmark`, `Address`, `state`, `pincode`, `countary`, `dob`, `gender`, `country_code`, `Phone_No`, `image`, `name_of_product`, `aboutproduct`, `Size`, `Quantity`, `prise_of_product`, `Way_Of_Payment`) VALUES
(1, 'sadfsghj', 'asdfg', 'g@gmail.com', 'dsvb', 'swe', 'gh', '452145', 'India', '4601-04-06', 'male', '91', '456465489', '', 'asdfg', 'efwfhgugyew', 'X', '1', 0, 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `vm1_upload`
--

CREATE TABLE `vm1_upload` (
  `id` int(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsdb`
--
ALTER TABLE `hsdb`
  ADD PRIMARY KEY (`id`,`first_name`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `pannel`
--
ALTER TABLE `pannel`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `productsection2`
--
ALTER TABLE `productsection2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsection3`
--
ALTER TABLE `productsection3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productslider1`
--
ALTER TABLE `productslider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regester`
--
ALTER TABLE `regester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vm1_upload`
--
ALTER TABLE `vm1_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hsdb`
--
ALTER TABLE `hsdb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pannel`
--
ALTER TABLE `pannel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productsection2`
--
ALTER TABLE `productsection2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `productsection3`
--
ALTER TABLE `productsection3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `productslider1`
--
ALTER TABLE `productslider1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regester`
--
ALTER TABLE `regester`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vm1_upload`
--
ALTER TABLE `vm1_upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
