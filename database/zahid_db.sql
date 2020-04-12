-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 07:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zahid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_blog_info`
--

CREATE TABLE `add_blog_info` (
  `blog_id` int(5) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_status` varchar(50) NOT NULL,
  `blog_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_blog_info`
--

INSERT INTO `add_blog_info` (`blog_id`, `author_name`, `blog_title`, `blog_description`, `blog_status`, `blog_image`) VALUES
(9, 'zahid', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '1', 'blog_image/48367061_797399347276306_8573459900611428352_n.jpg'),
(10, 'zahid', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '1', 'blog_image/20181223_144825.jpg'),
(11, 'hasan', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '1', 'blog_image/mudi.png'),
(12, 'zahid', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '1', 'blog_image/01.jpg'),
(13, 'zahid', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '1', 'blog_image/02.jpg'),
(14, 'zahid', 'সব তোর ভালোর জন্যই', 'চা-ওয়ালার হাতে দেশ ছাড়লে দেশের অবস্থা এমনই হয় বলে এক ভিডিও বার্তায় মন্তব্য করেছেন কাশ্মীরি এক তরুণী। বিতর্কিত নাগরিকত্ব সংশোধনী আইন নিয়ে ভারতে চলমান আন্দোলনের মধ্যে তরুণীর ভিডিও ব্যাপক সাড়া ফেলেছে। গত ১০ জানুয়ারি ভয়েস নিউজ নেটওয়ার্ক নামে একটি ইউটিউব চ্যানেলে প্রথম ভিডিও পোস্ট করা হয়। যা পরে সামাজিক যোগাযোগের বিভিন্ন মাধ্যমে ছড়িয়ে পড়ে।', '0', 'blog_image/84143536_1483191608508020_4007303344430252032_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(350) NOT NULL,
  `admin_email` varchar(350) NOT NULL,
  `admin_password` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'zahid hasan 01', 'admin1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_blog_info`
--
ALTER TABLE `add_blog_info`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_blog_info`
--
ALTER TABLE `add_blog_info`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
