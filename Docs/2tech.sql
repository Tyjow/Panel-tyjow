-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2016 at 04:52 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `articles` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `reference` varchar(255) NOT NULL,
  `fournisseurs` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `stock` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `articles`, `description`, `reference`, `fournisseurs`, `date`, `stock`) VALUES
(1, 'transistor', 'transistor type carte mÃ¨re', '123456789', 'bill gates', '1970-01-01', '150'),
(2, 'resistance', 'resitance chauffante', '2495875', 'LDLC', '2016-09-28', ''),
(3, 'A2 red', 'Condensateur Motherboard', '22583747', 'Conrad', '2016-09-28', '100'),
(4, 'LED', 'LED BLUE', '200295398', 'LDLC', '2016-09-28', ''),
(5, 'filtre passe-haut', 'filtre a particules passe haut', '6598HG', 'ADEX', '2016-09-28', ''),
(6, 'resistance ', 'resitence adsence ', '75675', 'LDLC', '2016-09-28', ''),
(7, 'Condensateur', 'Haute fidelitÃ©', '876F8', 'LDLC', '2016-09-28', '30'),
(8, 'transistor-duo', 'transistor haute temperature', '453G4Z5', 'Conrad', '2016-09-28', ''),
(9, 'led', 'aucune', 'aucune', 'aucun', '2016-09-28', ''),
(10, 'haut parleur', 'hp medium 500W', 'HP654', 'thomann.de', '2016-09-30', ''),
(11, 'led', 'led medium', '324456', 'Conrad', '2016-09-30', ''),
(12, 'motherborad', 'carte ordinateur de bord', '2483838', 'LDLC', '2016-09-30', ''),
(13, 'Ã©cran tactile', 'Ã©cran tactile tablette', '2838373', 'Conrad', '2016-09-30', ''),
(14, 'Condensateur', 'bonson de Higgs', 'E=MC2', 'MÃ©canique Quantique', '2016-09-30', ''),
(15, 'Tournevis ultrason', '450w', 'QQQQ666', 'Wanalike', '2016-09-30', '100'),
(16, 'Processeur Quantique', 'Processeur Quantique Qbytes', '2766876', 'Google', '2016-09-30', ''),
(17, 'mÃ¨re', 'aucune', 'aucune', 'aucun', '2016-09-30', ''),
(18, 'a3 test', 'pile', '236-365', 'farnel', '2016-10-05', '275'),
(19, 'test', 'aucune', 'aucune', 'aucun', '2016-11-08', ''),
(20, 'triton ardent', 'septre d\'un dieux ', '76JI', 'LDLC', '2016-11-08', ''),
(21, 'toto', 'test rÃ©ussi', 'ZRED52', 'tyjow', '2016-12-01', '10');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `localisation` varchar(255) CHARACTER SET latin1 NOT NULL,
  `reference` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `name`, `localisation`, `reference`, `date`) VALUES
(1, 'LDLC', 'bruxelle', '235r', '1970-01-01'),
(3, 'rexel', 'ohama beach', 'R848', '2016-09-28'),
(4, 'ADEX', 'san diego', '235r', '2016-09-28'),
(5, 'Fedex', 'marseille', 'T546', '2016-09-28'),
(6, 'santa fé', 'paris', 'OIU8', '2016-09-28'),
(7, 'beachcorp', 'lyon', 'JU4U', '2016-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `token` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`) VALUES
(2, 'redfish', '$2y$10$tgt.v29rTsJKhzoP.2c4JesKH/v0uWaTztlcFSuhmR2BUUdEiUZz6', ''),
(3, 'KoS_', '$2y$10$Dn7hn9OTDAj/Kq9VFMlbKeTrl/vtICN1//ZhE/a0uLOR2/Wo2RpM6', ''),
(4, 'Unpseudo', '$2y$10$YT9PinzH8oqdRzJijBe/pOgzW7AwKRgvL4kxi1oQhoqAxnl0m/e7O', ''),
(5, 'UnautrePseudo', '2085bf47d83e3f0b6105b8dfcab19c683dd8dd3a', ''),
(6, 'test', '$2y$10$ql.tWcVvGms2rlCdpnf2aulXA1ir5RklwXXdadBjAJ49snj45QdxW', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
