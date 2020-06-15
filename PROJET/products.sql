-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 13, 2020 at 04:06 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS products;
USE products;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `quantite` int(6) DEFAULT NULL,
  `prix` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
);

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `nom`, `categorie`, `quantite`, `prix`) VALUES
(1, 'iPhone 11', 'High-Tech', 12, 850),
(2, 'Samsung S20 Ultra', 'High-Tech', 5, 1550),
(3, 'Huawei P40', 'High-Tech', 2, 700),
(4, 'OnePlus 8 Pro', 'High-Tech', 6, 1100),
(5, 'Motorola Razr', 'High-Tech', 1, 1400),
(6, 'Samsung Fold', 'High-Tech', 1, 2300),
(7, 'Samsung Z Flip', 'High-Tech', 3, 1400),
(8, 'iPhone SE', 'High-Tech', 30, 450),
(9, 'Fondation, Isaac Asimov', 'Livre', 12, 12),
(10, 'Ghost In The Shell : Masamune Shirow', 'Livre', 5, 8),
(11, 'Berserk Tome 1 : Kentaro Miura', 'Livre', 12, 7),
(12, 'Codex : Leonardo Da Vinci', 'Livre', 1, 127850),
(13, '22/11/63 : Stephen King', 'Livre', 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
