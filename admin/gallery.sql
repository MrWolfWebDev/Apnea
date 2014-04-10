-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generato il: Gen 16, 2014 alle 17:49
-- Versione del server: 5.6.11
-- Versione PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struttura della tabella `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Gallery` int(2) NOT NULL,
  `Titolo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `DataIns` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dump dei dati per la tabella `gallery`
--

INSERT INTO `gallery` (`ID`, `Path`, `Gallery`, `Titolo`, `DataIns`) VALUES
(11, 'images/gallery/1/1fst3.jpg', 1, '', '2014-01-16 00:00:00'),
(12, 'images/gallery/1/c2oq3.jpg', 1, '', '2014-01-16 00:00:00'),
(13, 'images/gallery/5/665132.jpg', 5, '', '2014-01-16 00:00:00'),
(14, 'images/gallery/5/351083.jpg', 5, '', '2014-01-16 00:00:00'),
(15, 'images/gallery/0/560013.jpg', 0, '', '2014-01-16 00:00:00'),
(16, 'images/gallery/0/263443.jpg', 0, '', '2014-01-16 00:00:00'),
(17, 'images/gallery/0/237403.jpg', 0, '', '2014-01-16 00:00:00'),
(18, 'images/gallery/3/424832.jpg', 3, '', '2014-01-16 00:00:00'),
(19, 'images/gallery/3/164923.jpg', 3, '', '2014-01-16 00:00:00'),
(20, 'images/gallery/8/627812.jpg', 8, '', '2014-01-16 00:00:00'),
(21, 'images/gallery/7/888562.jpg', 7, '', '2014-01-16 00:00:00'),
(22, 'images/gallery/9/698572.jpg', 9, '', '2014-01-16 00:00:00'),
(23, 'images/gallery/1/54502.jpg', 1, '', '2014-01-16 00:00:00'),
(26, 'www.penineri.htef kjdscm awdskl dsz', 10, 'Cazzi', '2014-01-16 00:00:00'),
(27, 'images/gallery/4/916442.jpg', 4, '', '2014-01-16 00:00:00'),
(28, 'images/gallery/1/964793.jpg', 1, '', '2014-01-16 00:00:00'),
(29, 'www.penineri.htef kjdscm awdskl dsz', 10, 'Cazzi', '2014-01-16 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
