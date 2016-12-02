-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 02 Décembre 2016 à 03:16
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nuit_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `benevoles`
--

CREATE TABLE IF NOT EXISTS `benevoles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PSEUDO` varchar(20) NOT NULL,
  `MDP` varchar(50) NOT NULL,
  `ASSOCIATION` varchar(50) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `LOCALISATION` varchar(50) NOT NULL,
  `rang` int(3) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PSEUDO` (`PSEUDO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
