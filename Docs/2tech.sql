-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2016 at 12:16 PM
-- Server version: 5.5.46
-- PHP Version: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


drop table if exists article;

drop table if exists users;

drop table if exists fournisseurs;




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `articles` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `reference` varchar(255) NOT NULL,
  `fournisseurs` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `stock` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `articles`, `description`, `reference`, `fournisseurs`, `date`, `stock`) VALUES
(1, 'transistor', 'transistor type carte mÃ¨re', '123456789', 'bill gates', '1970-01-01 00:00:00', '150'),
(2, 'resistance', 'resitance chauffante', '2495875', 'LDLC', '2016-09-28 07:47:21', ''),
(3, 'Condensateur', 'Condensateur Motherboard', '22583747', 'Conrad', '2016-09-28 07:50:19', ''),
(4, 'LED', 'LED BLUE', '200295398', 'LDLC', '2016-09-28 07:50:38', ''),
(5, 'filtre passe-haut', 'filtre a particules passe haut', '6598HG', 'ADEX', '2016-09-28 07:53:28', ''),
(6, 'resistance ', 'resitence adsence ', '75675', 'LDLC', '2016-09-28 07:57:33', ''),
(7, 'Condensateur ', 'Haute fidelitÃ©', '876F8', 'LDLC', '2016-09-28 08:00:14', ''),
(8, 'transistor-duo', 'transistor haute temperature', '453G4Z5', 'Conrad', '2016-09-28 08:03:26', ''),
(9, 'led', 'aucune', 'aucune', 'aucun', '2016-09-28 08:03:53', ''),
(10, 'haut parleur', 'hp medium 500W', 'HP654', 'thomann.de', '2016-09-30 01:02:07', ''),
(11, 'led', 'led medium', '324456', 'Conrad', '2016-09-30 01:08:39', ''),
(12, 'motherborad', 'carte ordinateur de bord', '2483838', 'LDLC', '2016-09-30 01:18:12', ''),
(13, 'Ã©cran tactile', 'Ã©cran tactile tablette', '2838373', 'Conrad', '2016-09-30 01:18:51', ''),
(14, 'condensÃ© de bose-enstein', 'bonson de Higgs', 'E=MC2', 'MÃ©canique Quantique', '2016-09-30 01:21:40', ''),
(15, 'Tournevis ultrason', '450w', 'QQQQ666', 'Wanalike', '2016-09-30 01:22:21', ''),
(16, 'Processeur Quantique', 'Processeur Quantique Qbytes', '2766876', 'Google', '2016-09-30 01:31:04', ''),
(17, 'mÃ¨re', 'aucune', 'aucune', 'aucun', '2016-09-30 02:18:29', ''),
(18, '235236223', 'pile', '236-365', 'farnel', '2016-10-05 09:03:56', ''),
(19, 'test', 'aucune', 'aucune', 'aucun', '2016-11-08 19:53:29', ''),
(20, 'triton ardent', 'septre d''un dieux ', '76JI', 'LDLC', '2016-11-08 20:02:15', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`, `date`) VALUES
(1, 'admin', '$2y$10$6UBL5Bw9S7kz29TsW88gxOF8xTnBRgFieKhBvuBUlSuWt9G0cp43i', 1, '1970-01-01 00:00:00'),
(2, 'redfish', '$2y$10$tgt.v29rTsJKhzoP.2c4JesKH/v0uWaTztlcFSuhmR2BUUdEiUZz6', 0, '2016-09-28 02:51:29'),
(3, 'KoS_', '$2y$10$Dn7hn9OTDAj/Kq9VFMlbKeTrl/vtICN1//ZhE/a0uLOR2/Wo2RpM6', 1, '2016-09-28 03:22:04'),
(4, 'Unpseudo', '$2y$10$YT9PinzH8oqdRzJijBe/pOgzW7AwKRgvL4kxi1oQhoqAxnl0m/e7O', 0, '2016-09-28 03:23:26'),
(5, 'UnautrePseudo', '$2y$10$t8XwQlqjDN8D5l4.HHeUUeaSqt3sZwnpdX1jM8dBwf34/I.DKeEz6', 0, '2016-09-28 03:25:49'),
(6, 'test', '$2y$10$ql.tWcVvGms2rlCdpnf2aulXA1ir5RklwXXdadBjAJ49snj45QdxW', 1, '2016-09-28 08:51:20'),
(7, 'aaaa', '$2y$10$xP8BJ/w32X/lxlDgiM7gOurg1kGGvL7ciE8UTteMeLcv53ugr5C3C', 1, '2016-09-28 13:21:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `name`, `localisation`, `reference`, `date`) VALUES
(1, 'LDLC', 'bruxelle', '235r', '1970-01-01 00:00:00'),
(2, 'konrad', 'rennes', 'R546', '1970-01-01 00:00:00'),
(3, 'rexel', 'ohama beach', 'R848', '2016-09-28 03:22:04'),
(4, 'ADEX', 'san diego', '235r', '2016-09-28 03:23:26'),
(5, 'Fedex', 'marseille', 'T546', '2016-09-28 03:25:49'),
(6, 'santa fé', 'paris', 'OIU8', '2016-09-28 08:51:20'),
(7, 'beachcorp', 'lyon', 'JU4U', '2016-09-28 13:21:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Table structure for table `artfour`
--

CREATE TABLE IF NOT EXISTS `articles-fournisseurs` (
  
  `fournisseurs_id` int(255) NOT NULL,
  `articles_id` int(255) NOT NULL,
   
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
