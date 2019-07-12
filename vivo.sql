-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 01:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aemail` varchar(500) NOT NULL,
  `apass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aemail`, `apass`) VALUES
(1, 'withu@sliit.lk', '123'),
(2, 'nazir@sliit.lk', '123'),
(3, 'milky@sliit.lk', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `cadd` varchar(200) NOT NULL,
  `ctelno` varchar(11) NOT NULL,
  `cpic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `cemail`, `cpass`, `cadd`, `ctelno`, `cpic`) VALUES
(8, 'Dove', 'dove@sliit.lk', 'dove', 'Colombo 2', '0111111112', 'resources/images/dove.png'),
(9, 'Duck', 'duck@sliit.lk', 'duck', 'Colombo 7', '0111111113', 'resources/images/duck.png'),
(10, 'Flamingo', 'flamingo@sliit.lk', 'flamingo', 'Colombo 4', '0111111114', 'resources/images/flamingo.png'),
(11, 'Owl', 'owl@sliit.lk', 'owl', 'Colombo 5', '0111111115', 'resources/images/owl.png');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `fid` int(11) NOT NULL,
  `fq` varchar(1000) NOT NULL,
  `fa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `fq`, `fa`) VALUES
(1, 'How can I change my shipping address?', 'By default, the last used shipping address will be saved into to your Sample Store account. When you are checking out your order, the default shipping address will be displayed and you have the option to amend it if you need to.'),
(3, 'How do you ship my orders?', 'All your orders are sent via post');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `ptitle` varchar(1000) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pimg` varchar(1000) NOT NULL,
  `pcat` varchar(20) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pstock` int(11) NOT NULL,
  `pslug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `ptitle`, `pdesc`, `pimg`, `pcat`, `pprice`, `pstock`, `pslug`) VALUES
(12, 'Long Blue Dress', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P3.jpg', 'Pant', 2000, 10, ''),
(13, 'Brown Bouse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P4.jpg', 'Blouse', 1500, 10, ''),
(15, 'Checked Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P6.jpg', 'Shirt', 2000, 5, ''),
(16, 'Red Pants', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P7.jpg', 'Pant', 2000, 5, ''),
(17, 'White Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P8.jpg', 'Shirt', 1500, 25, ''),
(18, 'Blue Necklace', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P9.jpg', 'Accessories', 1500, 50, ''),
(19, 'Brown Dress', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P11.jpg', 'Blouse', 2500, 10, ''),
(20, 'Red Dress', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P12.jpg', 'Blouse', 2500, 25, ''),
(21, 'Black & Gold Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P10.jpg', 'Shirt', 1000, 10, ''),
(22, 'Black & White Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P13.jpg', 'Shirt', 1000, 25, ''),
(23, 'Black & White Checked Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'resources/images/P14.jpg', 'Shirt', 2500, 10, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
