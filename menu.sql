-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 06:39 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `position` int(50) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#000000',
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `position`, `slug`, `color`, `icon`) VALUES
(1, 'Home', 1, '', '#0A91F0', '<span class="glyphicon glyphicon-home"></span>'),
(2, 'Image', 2, 'category/image', '#EB5745', '<span class="glyphicon glyphicon-picture"></span>'),
(3, 'Audio', 3, 'category/audio', '#EF8D24', '<span class="glyphicon glyphicon-music"></span>'),
(4, 'Video', 4, 'category/video', '#666699', '<span class="glyphicon glyphicon-facetime-video"></span>'),
(5, 'Application', 5, 'category/application', '#2C5773', '<span class="glyphicon glyphicon-phone"></span>'),
(6, 'Blog', 6, 'category/blog', '#3CBC8D', '<span class="glyphicon glyphicon-book"></span>');
