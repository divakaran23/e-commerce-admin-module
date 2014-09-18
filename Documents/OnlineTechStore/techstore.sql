-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2014 at 10:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_log_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_log_date`) VALUES
(1, 'divakaran', '1234', '2014-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(16) NOT NULL,
  `details` text NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_name` (`product_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `details`, `category`, `date_added`) VALUES
(27, 'iPhone 4', '299', 'New iPhone 4 for very low price with latest iOS installed. Black color. Cases come with extra price.', 'Smartphones', '2014-09-04'),
(28, 'iPhone 5', '499', 'iPhone 5 with latest iOS.\r\nMajestic black color. Very slim and light weight compared to iPhone 4.', 'Smartphones', '2014-09-04'),
(29, 'iPhone 5C', '599', 'Apple''s new updated iPhone with colorful cases.', 'Smartphones', '2014-09-04'),
(30, 'Samsung Note 3', '399', 'Samsung Note 3', 'Smartphones', '2014-09-04'),
(31, 'Samsung Galaxy S5', '599', 'Samsung Galaxy S5', 'Smartphones', '2014-09-04'),
(32, 'Samsung Galaxy Grand', '699', 'Samsung Galaxy Grand', 'Smartphones', '2014-09-04'),
(33, 'HTC Once M8', '450', 'HTC Once M8', 'Smartphones', '2014-09-04'),
(34, 'HTC Desire', '550', 'HTC Desire', 'Smartphones', '2014-09-04'),
(35, 'Micromax Canvas', '199', 'Micromax Canvas', 'Smartphones', '2014-09-04'),
(36, 'Nokia Lumia 520', '650', 'Nokia Lumia 520', 'Smartphones', '2014-09-04'),
(37, 'MacBook Air', '799', 'MacBook Air', 'Laptops', '2014-09-04'),
(38, 'MacBook Pro', '1099', 'MacBook Pro', 'Laptops', '2014-09-04'),
(39, 'MacBook Pro Retina Display', '1399', 'MacBook Pro Retina Display', 'Laptops', '2014-09-04'),
(40, 'HP Envy', '899', 'HP Envy', 'Laptops', '2014-09-04'),
(41, 'HP Pavillion', '999', 'HP Pavillion', 'Laptops', '2014-09-04'),
(42, 'Dell Inspiron', '859', 'Dell Inspiron', 'Laptops', '2014-09-04'),
(43, 'HP Elitebook', '999', 'HP Elitebook', 'Laptops', '2014-09-04'),
(44, 'Lenovo Thinkpad Yoga', '1250', 'Lenovo Thinkpad Yoga', 'Laptops', '2014-09-04'),
(45, 'Dell Alienware', '1599', 'Dell Alienware', 'Laptops', '2014-09-04'),
(47, 'The Black Eyed Blonde', '29', 'By Benjamin Black', 'Books', '2014-09-05'),
(48, 'Half a King', '45', 'By Joe Abervhrombie', 'Books', '2014-09-05'),
(49, 'Flash Boys', '19', 'By Michael Lewis', 'Books', '2014-09-05'),
(50, 'The Sixth Extinction', '23', 'By Elizabeth Kolbert', 'Books', '2014-09-05'),
(51, 'Harry Potter and The Goblet of Fire', '99', 'By J.K.Rowling', 'Books', '2014-09-05'),
(52, 'Harry Potter and The Soccer''s Stone', '99', 'By J.K.Rowling', 'Books', '2014-09-05'),
(53, 'Harry Potter and The Deathly Hallows', '99', 'by J.K.Rowling', 'Books', '2014-09-05'),
(54, 'Harry Potter and The Chamber of Secrets', '99', 'by J.K.Rowling', 'Books', '2014-09-05'),
(55, 'Harry Potter and The Prisoner of Azkaban', '99', 'by J.K.Rowling', 'Books', '2014-09-05'),
(56, 'Mean Streak', '35', 'by Sandra Brown', 'Books', '2014-09-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
