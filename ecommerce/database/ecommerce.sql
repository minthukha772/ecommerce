-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 08:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'ဗန်းမော်သိန်းဖေ'),
(2, 'မြတ်ငြိမ်း'),
(3, 'မိုးရှင်း'),
(4, 'လင်းသိုက်ညွန့်'),
(5, 'ဗြိတိသျကိုကိုမောင်');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quality` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_title`, `ip_address`, `quality`) VALUES
(92, 70, 'ကိုယ့်ကိုကိုယ်ကိုးကွယ်', '::1', 1),
(93, 65, 'ဂျက်မားနဲ့အလီဘာဘာ', '::1', 1),
(94, 66, 'ဆင်းရဲနွံ ချမ်းသာဘုံသို့', '::1', 1),
(95, 67, 'ရစ်ချက်ဘရင်ဆန်', '::1', 1),
(96, 69, 'တိုင်းတုန်တဲ့ရေနံဘုရင်', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'ကြီးပွားတိုးတက်ရေး'),
(2, 'နိုင်ငံရေး'),
(3, 'နည်းပညာ'),
(4, 'သမိုင်း'),
(5, 'ဗဟုသုတ'),
(6, 'မိုတီဗေးရှင်း');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_cat` int(255) NOT NULL,
  `product_brand` int(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `product_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_file`) VALUES
(65, 1, 1, 'ဂျက်မားနဲ့အလီဘာဘာ', 3000, 'Life of Alibaba and Jackma', 'jackma.jpg', 'ဂျက်မားနဲ့အလီဘာဘာ(Jack Ma & Alibaba)', 'BaMawTheinPhae_JackMar-pages-1,5-17.pdf'),
(66, 1, 1, 'ဆင်းရဲနွံ ချမ်းသာဘုံသို့', 3500, 'From zero to hero Billionarie\'s Lives', 'zerotohero.jpg', 'ဆင်းရဲနွံ ချမ်းသာဘုံသို့(zero to hero)', 'BMTheinPae_PoortoRich-1-4.pdf'),
(67, 1, 1, 'ရစ်ချက်ဘရင်ဆန်', 3500, 'Life of Richard Brandson\'s Life', 'richard.jpg', 'ရစ်ချက်ဘရင်ဆန်(Richard Bandson)', 'BamawTheinPhae_Richard-pages-1-6.pdf'),
(68, 1, 1, 'ဘာကြောင့်ကမ္ဘာကျော်တာလဲ', 2000, 'Life of Celebrity and Billionaries', 'kabar.jpg', 'ဘာကြောင့်ကမ္ဘာကျော်တာလဲ(Why they are famous)', 'BamawTheinPhae_Why-1-5.pdf'),
(69, 5, 2, 'တိုင်းတုန်တဲ့ရေနံဘုရင်', 5000, 'Life of American Billionarie King of oil', 'mn1.jpg', 'တိုင်းတုန်တဲ့ရေနံဘုရင်(The oil of King)', '22_MyatNyein_TheKingOfOil-1-5.pdf'),
(70, 6, 2, 'ကိုယ့်ကိုကိုယ်ကိုးကွယ်', 5000, 'Motivation book', 'mn2.jpg', 'ကိုယ့်ကိုကိုယ်ကိုးကွယ်(Believe Yourself)', 'MyatNyein_NaturalBornWinners-1-5.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
