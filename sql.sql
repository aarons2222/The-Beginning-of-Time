-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 10.246.16.43:3306
-- Generation Time: Nov 26, 2014 at 09:23 AM
-- Server version: 5.5.40-MariaDB-1~wheezy
-- PHP Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aaronstrickland`
--

-- --------------------------------------------------------

--
-- Table structure for table `cutomer_orders`
--

CREATE TABLE IF NOT EXISTS `cutomer_orders` (
  `user_id` varchar(32) NOT NULL,
  `product_id` varchar(240) NOT NULL,
  `delivery_information` varchar(250) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maillist`
--

CREATE TABLE IF NOT EXISTS `maillist` (
  `email` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maillist`
--

INSERT INTO `maillist` (`email`) VALUES
('Paul@paul.com'),
('jacksonj@grimsby.ac.uk'),
('aaron.strickland@icloud.com'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `brand`, `model`, `price`, `quantity`) VALUES
(1, 'Omega', 'Seamaster Professional 300m', 3499, 10),
(2, 'Rolex', 'Submariner', 4000, 10),
(3, 'Breitling', 'Avenger Seawolf', 5000, 5),
(4, 'Omega', 'De Ville Ladymatic', 6499, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE IF NOT EXISTS `product_information` (
  `product_id` int(200) NOT NULL AUTO_INCREMENT,
  `case_size` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dial_colour` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`product_id`, `case_size`, `gender`, `dial_colour`) VALUES
(1, '42', 'Mens', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(1025) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `email_code`, `active`) VALUES
(14, 'jappleseed', 'password', 'Jony', 'Appleseed', 'jppleseed@apple.com', 'a3f45ffsbg45508ebd3be9cc51824c75', 0),


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
