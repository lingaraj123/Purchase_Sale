-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2016 at 03:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`Emp_ID` int(20) NOT NULL,
  `Emp_FirstName` varchar(255) NOT NULL,
  `Emp_LastName` varchar(255) NOT NULL,
  `Emp_Mobile_No` int(12) NOT NULL,
  `Emp_Designation` varchar(255) NOT NULL,
  `Emp_Salary` int(20) NOT NULL,
  `Emp_Address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_FirstName`, `Emp_LastName`, `Emp_Mobile_No`, `Emp_Designation`, `Emp_Salary`, `Emp_Address`) VALUES
(9, 'Lingaraj', 'Senapati', 2147483647, 'WELCOME', 23000, 'ERT-546, QW-12'),
(10, 'Lingaraj', 'Senapati', 2147483647, 'Software Architect', 25000, 'QWERTY-234'),
(11, 'Lingaraj', 'Senapati', 2147483647, 'WELCOME', 24000, 'LIG-30/7,PHASE-1,H.B.COLONY,C.S.PUR'),
(12, 'Lingaraj', 'Senapati', 2147483647, 'WELCOME', 23567, 'LIG-30/7,PHASE-1,H.B.COLONY,C.S.PUR'),
(13, 'Sangram', 'Senapati', 2147483647, 'Engineer', 23000, 'LIG-30/7, PHASE-1, H.B. COLONY');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture_purchase`
--

CREATE TABLE IF NOT EXISTS `manufacture_purchase` (
`Manu_Purchase_id` int(11) NOT NULL,
  `MA_Name` text NOT NULL,
  `MA_Address` varchar(255) NOT NULL,
  `MA_PhoneNo` int(11) NOT NULL,
  `MA_TinNo` int(11) NOT NULL,
  `PA_Name` text NOT NULL,
  `PA_Route_Name` varchar(45) NOT NULL,
  `PA_PhoneNo` int(11) NOT NULL,
  `PA_TinNo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture_purchase`
--

INSERT INTO `manufacture_purchase` (`Manu_Purchase_id`, `MA_Name`, `MA_Address`, `MA_PhoneNo`, `MA_TinNo`, `PA_Name`, `PA_Route_Name`, `PA_PhoneNo`, `PA_TinNo`) VALUES
(4, 'Asutosh Kumar', 'LIG-30/7,PHASE-1,H.B.COLONY,C.S.PUR', 2147483647, 454564, 'JDJSHDJ', 'HSHJS', 894734374, 7834873);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Date` date NOT NULL,
`Pro_Sl_No` int(50) NOT NULL,
  `Pro_Name` text NOT NULL,
  `Pro_Price` float(8,4) NOT NULL,
  `Pro_CS` int(11) NOT NULL,
  `Pro_S_Rate` float(8,4) NOT NULL,
  `Pro_Free` int(11) NOT NULL,
  `Pro_Gr_Amount` float(8,4) NOT NULL,
  `Pro_Sch_Disc` float(8,4) NOT NULL,
  `Pro_CD_Disc` float(8,4) NOT NULL,
  `Total_Disc` float(8,4) NOT NULL,
  `Pro_Tax` float(8,4) NOT NULL,
  `Pro_Tax_Amount` float(8,4) NOT NULL,
  `Pro_Net_Amount` float(10,4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Date`, `Pro_Sl_No`, `Pro_Name`, `Pro_Price`, `Pro_CS`, `Pro_S_Rate`, `Pro_Free`, `Pro_Gr_Amount`, `Pro_Sch_Disc`, `Pro_CD_Disc`, `Total_Disc`, `Pro_Tax`, `Pro_Tax_Amount`, `Pro_Net_Amount`) VALUES
('2015-12-23', 42, 'AAAAAA', 240.0000, 22, 193.1900, 0, 4250.1802, 0.0000, 3.0000, 127.5054, 13.5000, 556.5611, 4679.2358),
('2015-12-23', 44, 'CCCCCC', 240.0000, 20, 193.1900, 0, 3863.8000, 0.0000, 3.0000, 115.9140, 13.5000, 505.9646, 4253.8506),
('2015-12-23', 45, 'DDDDDD', 240.0000, 23, 193.1900, 0, 4443.3701, 0.0000, 3.0000, 133.3011, 13.5000, 581.8593, 4891.9282),
('2015-12-23', 46, 'EEEEEE', 240.0000, 24, 193.1900, 0, 4636.5601, 0.0000, 3.0000, 139.0968, 13.5000, 607.1575, 5104.6206),
('2015-12-28', 47, 'BBBBBB', 240.0000, 22, 193.1900, 0, 4250.1802, 0.0000, 3.0000, 127.5054, 13.5000, 556.5611, 4679.2358);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`Sales_ID` int(11) NOT NULL,
  `Sales_Date` text NOT NULL,
  `Buyer_Name` text NOT NULL,
  `Pro_Name` text NOT NULL,
  `Pro_Pcs` int(11) NOT NULL,
  `Unique_Prod_S_Price` float(10,5) NOT NULL,
  `Sales_Price` float(10,5) NOT NULL,
  `Sales_Profit` float(10,5) NOT NULL,
  `Act_S_Price` float(10,5) NOT NULL,
  `Discount` float(10,5) NOT NULL,
  `Rate_Aft_Disc` float(10,5) NOT NULL,
  `Vat` float(10,5) NOT NULL,
  `V_Aft_Vat` float(10,5) NOT NULL,
  `Bill_Amt` float(10,5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Sales_ID`, `Sales_Date`, `Buyer_Name`, `Pro_Name`, `Pro_Pcs`, `Unique_Prod_S_Price`, `Sales_Price`, `Sales_Profit`, `Act_S_Price`, `Discount`, `Rate_Aft_Disc`, `Vat`, `V_Aft_Vat`, `Bill_Amt`) VALUES
(71, '16-12-2015', 'Lingaraj Senapati', 'HHHHHH', 4, 187.39430, 749.57721, 20.00000, 899.49261, 5.00000, 854.51801, 13.50000, 115.35993, 969.87793),
(72, '21-12-2015', 'Lingaraj Senapati', 'DDDDDD', 2, 187.39430, 374.78860, 20.00000, 449.74631, 5.00000, 427.25900, 13.50000, 57.67997, 484.93896),
(73, '23-12-2015', 'Lingaraj Senapati', 'CCCCCC', 4, 187.39430, 749.57721, 20.00000, 899.49261, 5.00000, 854.51801, 13.50000, 115.35993, 969.87793),
(74, '28-12-2015', 'SSS', 'BBBBBB', 2, 187.39430, 374.78860, 20.00000, 449.74631, 5.00000, 427.25900, 13.50000, 57.67997, 484.93896);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` int(10) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `confirm_password`) VALUES
(21, 'demo', 'teamjava8984@gmail.com', 'siva8984', 'siva8984'),
(22, 'demo123', 'teamjava8984@gmail.com', 'siva', 'siv'),
(27, 'demo', 'teamjava8984@gmail.com', '1234', '1234'),
(28, 'demo', 'teamjava8984@gmail.com', '12345', '12345'),
(29, 'demo12', 'teamjava8984@gmail.com', 'siva', 'siva'),
(30, 'demo', 'demo123@gmail.com', 'demo', 'demo'),
(31, 'Lingaraj123', 'demo123@gmail.com', 'siva8984', 'siva8984'),
(32, 'Lingaraj', 'teamjava8984@gmail.com', 'siva8984', 'siva8984'),
(33, 'Lingaraj', 'teamjava8984@gmail.com', 'siva8984', 'siva8984'),
(34, 'Lingaraj', 'teamjava8984@gmail.com', 'siva8984', 'siva8984'),
(35, 'demo1234', 'teamprojects8984@gmail.com', 'siva8984', 'siva8984'),
(36, 'demo12345', 'demo12345@gmail.com', 'Lingaraj1234', 'lingaraj1234'),
(37, 'demo123456', 'demo12345@gmail.com', 'lingaraj1234', 'shbdv'),
(38, 'Lingaraj', 'teamjava8984@gmail.com', '1234', '12'),
(39, 'Lingaraj', 'teamjava8984@gmail.com', '12', '12345'),
(40, 'Lingaraj', 'teamjava8984@gmail.com', '12', '1234'),
(41, 'Lingaraj', 'teamjava8984@gmail.com', '1234', '2343'),
(42, 'Lingaraj', 'teamjava8984@gmail.com', '1234', '1234'),
(43, 'Lingaraj', 'teamjava8984@gmail.com', '1234', '1234'),
(44, 'demo1234rt', 'team4567@gmail.com', 'siva1234', 'siva8907'),
(45, 'demo', 'teamjava8984@gmail.com', 'siva', 'siva'),
(46, 'demo', 'demo@gmail.com', 'siva8984', 'siva8984'),
(47, 'demo1234', 'demo1234@gmail.com', 'siva8984', 'siva8984'),
(48, 'Sangram', 'sangram@gmail.com', 'siva8984', 'siva8984'),
(49, 'demo', 'demo12345@gmail.com', 'siva1234', 'siva1234'),
(50, 'Lingaraj', 'teamjava8984@gmail.com', '123', '123'),
(51, 'Lingaraj', 'teamjava8984@gmail.com', '123', '123'),
(52, 'Welcome', 'welcome@gmail.com', 'siva8984', 'siva8984'),
(53, 'Demo12', 'Demo12@gmail.com', 'qwerty1234567890', 'qwerty1234567890'),
(54, 'Demo', 'Demo123@gmail.com', 'siva123', 'siva123'),
(55, 'W', 'W@gmail.com', 'w123', 'w123'),
(56, 'de', 'de@gmail.com', 'siva', 'siva'),
(57, 'ad', 'ad@gmail.com', 'siva8984', 'siva8984'),
(58, 'qwerty123', 'qwerty123@gmail.com', 'siva8984', 'siva8984'),
(59, 'Demo123', 'demo123@gmail.com', 'siva8984', 'siva8984'),
(60, 'Ashutosh', 'ashutosh123@gmail.com', 'ashu', 'ashu'),
(61, 'Purna Chandra Senapati', 'Purna123@gmail.com', 'siva8984', 'siva8984'),
(63, 'Rohit', 'rohit123@gmail.com', 'siva8984', 'siva8984');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `manufacture_purchase`
--
ALTER TABLE `manufacture_purchase`
 ADD PRIMARY KEY (`Manu_Purchase_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`Pro_Sl_No`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`Sales_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `Emp_ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `manufacture_purchase`
--
ALTER TABLE `manufacture_purchase`
MODIFY `Manu_Purchase_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `Pro_Sl_No` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `Sales_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
