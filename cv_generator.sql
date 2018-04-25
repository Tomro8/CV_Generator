-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 avr. 2018 à 08:09
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv generator`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Image` varchar(25) DEFAULT NULL,
  `Experience` text,
  `Skills` text,
  `Studies` text,
  `Pseudo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CV_Pseudo` (`Pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(25) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `Pseudo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Profile_Pseudo` (`Pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `userid`
--

DROP TABLE IF EXISTS `userid`;
CREATE TABLE IF NOT EXISTS `userid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(25) NOT NULL,
  `Password` varchar(25) DEFAULT NULL,
  `ID_Profile` int(11) NOT NULL,
  PRIMARY KEY (`Pseudo`),
  UNIQUE KEY `Password` (`Password`),
  KEY `ID` (`ID`),
  KEY `FK_UserID_ID_Profile` (`ID_Profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_CV_Pseudo` FOREIGN KEY (`Pseudo`) REFERENCES `userid` (`Pseudo`);

--
-- Contraintes pour la table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `FK_Profile_Pseudo` FOREIGN KEY (`Pseudo`) REFERENCES `userid` (`Pseudo`);

--
-- Contraintes pour la table `userid`
--
ALTER TABLE `userid`
  ADD CONSTRAINT `FK_UserID_ID_Profile` FOREIGN KEY (`ID_Profile`) REFERENCES `profile` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
