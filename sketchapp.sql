-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 10:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sketchapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plainPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA17977586CA949` (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `plainPassword`, `email`, `language`, `userName`, `lastName`, `firstName`) VALUES
(1, '111', 'heo@gmail.comffdfd7', 'baz', '', '', ''),
(2, 'aa', 'heo@gmail.comffdfd9', 'foo', 'ddd', '', ''),
(3, 'aa', 'jim@gmail.com', 'baz', 'hao1111', 'hao', 'nguyen'),
(4, 'haha', 'jim@gmail.comdswds', 'English', 'nguyen', 'haoaoao', 'hao'),
(6, 'ku', 'hao@gmail.comdewfe', 'English', 'haomo', 'dsdfsdf', 'hao'),
(7, 'aaa', 'heo@gmail.comtyt6yt', 'English', 'heo@gmail.comffdfdererhao', 'dsdfsdf', 'sdsdsads'),
(8, '12', 'heo@gmail.com321', 'Chinese', '123456', 'dsdfsdf', 'hao'),
(9, '12', 'heo@gmail.com132', 'English', 'heo@gmail.comffdfd12', 'dsdfsdf', 'hao'),
(10, '00', 'heo@gmail.comffdfd000', 'English', 'heo@gmail.comffdfd0', 'dsdfsdf', 'hao'),
(11, '32', 'heo@gmail.com', 'French', 'heo@gmail.comffdfd54321', 'dsdfsdf', 'hao'),
(12, '1', 'heo@gmail.comffdfd', 'English', 'heo@gmail.comffdfd', 'dsdfsdf', 'sdsdsads'),
(15, '11111', 'fdfd@fdd.comuiiuiu', 'English', 'heo@gmail.comffdfdb65g', 'dsdfsdf', 'hao'),
(16, 'aaaaa', 'heo@gmail.comaaaaa', 'English', 'lasttem', 'dsdfsdf', 'hao'),
(17, 'thu2', 'heo@gmail.comffdfdthu2', 'English', 'heo@gmail.comffdfdthu2', 'dsdfsdf', 'hao'),
(18, 'thu3', 'heo@gmail.comthu3', 'English', 'heo@gmail.comffdfdthu3', 'dsdfsdf', 'hao'),
(19, 'thu5', 'heo@gmail.comthu5', 'English', 'heo@gmail.comffdfdthu5', 'dsdfsdf', 'hao'),
(20, 'thu6', 'heo@gmail.comthu6', 'Chinese', 'heo@gmail.comffdfdthu6', 'dsdfsdf', 'hao'),
(21, 'aaaaa', 'heo@gmail.com9', 'English', 'hhhhha', 'dsdfsdf', 'hao'),
(22, '101010', 'heo@gmail.com1010', 'English', 'nguyn10', 'dsdfsdf', 'hao'),
(23, '101010', 'heo@gmail.com.cooo', 'English', 'demolat', 'dsdfsdf', 'hao'),
(24, '11111', 'heo@gmail.com1111111', 'French', 'lan111', 'dsdfsdf', 'hao'),
(25, 'cuoi', 'heo@gmail.comcuoicung', 'French', 'lancuoicung', 'hao', 'hao'),
(26, 'haohao', 'heo@gmail.comhaohao', 'French', 'anhhungban', 'hao', 'sdsdsads'),
(27, '1111', 'heo@gmail.com111111111111111', 'English', '1111111111111111111', 'dsdfsdf', 'hao'),
(28, 'haohao', 'cds@chchc.cvds', 'English', 'tucongphung', 'sdfsdfds', 'sdfs'),
(29, 'adii', 'heo@gmail.comvdcvdsf', 'French', 'nammo', 'sdfsdf', 'ds'),
(30, 'aaaaa', 'heo@gmail.comdwertrtyhu', 'English', 'hahahah', 'hao', 'hao'),
(31, 'tamsasa', 'hoaitam@gmail.com', 'French', 'tamgao', 'hoai tam', 'tran thi'),
(32, 'aaaa', 'aaa@aaa.com', 'English', 'dfdfaaaa', 'dsdfsdf', 'hao'),
(33, 'aaaaa', 'heo@gmail.comaaaaaaaaaa', 'French', 'hugolina', 'dsdfsdf', 'hao');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
