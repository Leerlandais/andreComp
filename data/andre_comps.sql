-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 avr. 2024 à 15:44
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `andre_comps`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `nom_comp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_comp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comp_has_inc`
--

DROP TABLE IF EXISTS `comp_has_inc`;
CREATE TABLE IF NOT EXISTS `comp_has_inc` (
  `has_comp` int UNSIGNED NOT NULL,
  `has_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`has_comp`,`has_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id_inc` int NOT NULL AUTO_INCREMENT,
  `inc_jan` decimal(10,2) NOT NULL,
  `inc_feb` decimal(10,2) NOT NULL,
  `inc_mar` decimal(10,2) NOT NULL,
  `inc_apr` decimal(10,2) NOT NULL,
  `inc_may` decimal(10,2) NOT NULL,
  `inc_jun` decimal(10,2) NOT NULL,
  `inc_jul` decimal(10,2) NOT NULL,
  `inc_aug` decimal(10,2) NOT NULL,
  `inc_sep` decimal(10,2) NOT NULL,
  `inc_oct` decimal(10,2) NOT NULL,
  `inc_nov` decimal(10,2) NOT NULL,
  `inc_dec` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_inc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
