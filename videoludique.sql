-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 03 Juillet 2015 à 10:28
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `videoludique`
--
CREATE DATABASE IF NOT EXISTS `videoludique` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `videoludique`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstName`, `mail`, `pass`, `country_id`) VALUES
(4, 'Mickael', 'Mickael', 'Mika@isitech.fr', 'mika', 0);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`id`, `url`) VALUES
(24, 'https://video-ams2-1.xx.fbcdn.net/hvideo-xpt1/v/t42.1790-2/11371446_1016484935058393_1380682436_n.mp4?efg=eyJybHIiOjE2NzQsInJsYSI6NTEyfQ%3D%3D&oh=94e5a23c597f2c38d04397b85df90b50&oe=55968143'),
(25, 'https://video-ams2-1.xx.fbcdn.net/hvideo-xft1/v/t42.1790-2/11387372_997292630310957_1696754581_n.mp4?efg=eyJybHIiOjgxOSwicmxhIjo1MTJ9&oh=b664ad4f2419008d85715711ee78b3fb&oe=559671EE'),
(31, 'https://video-ams2-1.xx.fbcdn.net/hvideo-xat1/v/t42.1790-2/11536666_10153433094103270_1300325159_n.mp4?efg=eyJybHIiOjExNDQsInJsYSI6NTEyfQ%3D%3D&oh=55f7ba589eb8f0d267000ab920810de8&oe=55967CB2'),
(32, 'https://video-ams2-1.xx.fbcdn.net/hvideo-xtf1/v/t43.1792-2/11538015_10153128377638732_1131121007_n.mp4?efg=eyJybHIiOjE1NzgsInJsYSI6MTAyNH0%3D&oh=9adff80951ed2cbe7a3910fc3c09a46a&oe=55968AD3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
