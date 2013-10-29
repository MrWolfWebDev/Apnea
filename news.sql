-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2013 at 06:25 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apnea`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Data` date NOT NULL,
  `Titolo` varchar(200) NOT NULL,
  `Testo` text NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `DataIns` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Data`, `Titolo`, `Testo`, `Foto`, `DataIns`) VALUES
(9, '2013-09-11', 'ciao a tutti', 'Ciao a tutti, questo è il testo di prova per una news', 'img/news/lololol.jpg', '2013-09-10'),
(10, '2013-09-11', 'ciao a tutti', 'Ciao a tutti, questo è il testo di prova per una news', 'img/news/lololol.jpg', '2013-09-10'),
(20, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto nuova news', 'img/ciao.jpg', '2013-09-11'),
(21, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/ciao.jpg', '2013-09-11'),
(25, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(27, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(28, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(29, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(30, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(31, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(32, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-11'),
(33, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-12'),
(34, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-12'),
(35, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-12'),
(36, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-12'),
(38, '2008-12-12', 'Ciao a tutti', 'Si fanno modifiche a brettio', 'img/news/ciao.jpg', '2013-10-28'),
(39, '2008-12-12', 'Ciao a tutti', 'Testo aggiunto, nuova news', 'img/news/ciao.jpg', '2013-09-12'),
(40, '2008-12-12', 'Ciao a tutti', 'Testo modificato, vecchia news', 'img/news/ciao.jpg', '2013-09-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
