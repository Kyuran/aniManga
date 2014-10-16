-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Octobre 2014 à 07:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `animanga`
--

-- --------------------------------------------------------

--
-- Structure de la table `animes`
--

CREATE TABLE IF NOT EXISTS `animes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title_fr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_jp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parution_year` int(4) DEFAULT NULL,
  `nb_episode` int(10) NOT NULL,
  `total_duration` int(10) DEFAULT NULL,
  `time_format` int(10) DEFAULT NULL,
  `resume` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail_path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `directory_path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `animes`
--

INSERT INTO `animes` (`id`, `title_fr`, `title_en`, `title_jp`, `parution_year`, `nb_episode`, `total_duration`, `time_format`, `resume`, `thumbnail_path`, `directory_path`, `type`) VALUES
(1, 'Another', 'Another', 'Another', 2012, 12, 276, NULL, 'Kôichi Sakakibara est un jeune garçon de Tôkyô récemment transféré dans un collège de province. Il est en fait né dans ce village dont sa famille est originaire. Mais il a été hospitalisé avant sa rentrée, et lorsqu''il arrive en classe en retard par rapport aux autres, il remarque une atmosphère oppressante et inquiétante… D''autre part, il a rencontré à l''hôpital une élève du même établissement appelée Mei Misaki ; elle a l''œil gauche bandé et le met en garde de façon très énigmatique. Kôichi, interpelé par l''attitude étrange de ses camarades, et attiré par l''aura mystérieuse de la jeune fille, va se laisser emporter par sa curiosité… ', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `animes_urls`
--

CREATE TABLE IF NOT EXISTS `animes_urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_path` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_content` text COLLATE utf8_unicode_ci,
  `id_episode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `animes_urls`
--

INSERT INTO `animes_urls` (`id`, `url_path`, `full_content`, `id_episode`) VALUES
(1, NULL, '<iframe frameborder="0" width="720" height="405" src="//www.dailymotion.com/embed/video/x16pcqs" allowfullscreen></iframe><br /><a href="http://www.dailymotion.com/video/x16pcqs_another-episode-1-vostfr_shortfilms" target="_blank">Another &eacute;pisode 1 vostfr</a> <i>par <a href="http://www.dailymotion.com/Nalu-PoWa" target="_blank">Nalu-PoWa</a></i>', 1),
(2, NULL, '<iframe width="720" height="405" src="//rutube.ru/play/embed/5709079" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>', 1);

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `episode_number` int(4) NOT NULL,
  `idAnimes` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `episodes`
--

INSERT INTO `episodes` (`id`, `episode_number`, `idAnimes`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `first_name`, `last_name`, `age`) VALUES
(1, 'Fenchi', '0762c5d3b45e3ff67d8343f98b6577edbdc5af85', 'bey.sofiene@gmail.com', 'sofiène', 'bey', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
