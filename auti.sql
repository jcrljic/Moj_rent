-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Računalo: 127.0.0.1
-- Vrijeme generiranja: Sij 12, 2016 u 12:54 AM
-- Verzija poslužitelja: 5.5.27
-- PHP verzija: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `auti`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `dojmovnik`
--

CREATE TABLE IF NOT EXISTS `dojmovnik` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `grad` text NOT NULL,
  `drzava` text NOT NULL,
  `email` text NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Izbacivanje podataka za tablicu `dojmovnik`
--

INSERT INTO `dojmovnik` (`id`, `ime`, `prezime`, `grad`, `drzava`, `email`, `komentar`) VALUES
(1, 'Pero', 'Perić', 'jhgug', 'uhjhnjh', 'baja@gmail.com', 'hjgzguhnm'),
(2, 'marko', 'markic', 'zagreb', 'hrvatska', 'marko@markic.hr', 'lfksdjksdksdvk'),
(3, 'bruno ', 'matijas', 'zagreb', 'hrvatska', 'bmatijas@gmail.com', 'cksdonsdkmsdcksdsmck'),
(4, 'mario', 'Marić', 'Zagreb', 'Hrvatska', 'mario@gmail.com', 'shujncsscsds'),
(5, 'marko', 'Marić', 'Zagreb', 'Hrvatska', 'mario@gmail.com', 'SDDB DDSIJSKMNUIKNnhsijxn cx cksd'),
(6, 'Dino', 'Dvornik', 'Zagreb', 'Hrvatska', 'dvornik@dino.hr', 'faffoffiejfhuefjbffvvrrr');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `datum` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Izbacivanje podataka za tablicu `link`
--

INSERT INTO `link` (`id`, `naziv`, `datum`) VALUES
(44, 'Zanimljivosti', '2016-01-12 00:00:00'),
(45, 'Galerija slika', '2016-01-12 00:00:00'),
(46, 'Lokacija', '2016-01-12 00:00:00'),
(48, 'mapa', '2016-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `registracija`
--

CREATE TABLE IF NOT EXISTS `registracija` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `lozinka` text NOT NULL,
  `datum` datetime NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Izbacivanje podataka za tablicu `registracija`
--

INSERT INTO `registracija` (`id`, `ime`, `prezime`, `email`, `lozinka`, `datum`, `admin`) VALUES
(2, 'Marin', 'Brekalo', 'marin.brekalo@gmail.com', '123456', '2015-12-29 19:00:00', 0),
(4, 'admin', 'admin', 'admin@admin.com', 'admin', '2016-01-02 11:04:00', 1),
(5, 'Marko', 'Markić', 'marko@markic.hr', 'marko', '2016-01-03 22:00:00', NULL),
(6, 'Perica', 'Perić', 'perica@gmail.com', 'perica', '2016-01-03 22:00:00', NULL),
(7, 'Perica', 'Perić', 'perica@gmail.com', 'perica', '2016-01-03 22:00:00', NULL),
(8, 'jure', 'jurić', 'jjuric@gmail.com', 'jure', '2016-01-04 18:00:00', NULL),
(9, 'josip', 'opačak', 'jjopacak@gmail.com', 'joca', '2016-01-04 18:00:00', NULL),
(10, 'Ja', 'Baja', 'baja@gmail.com', 'baja', '2016-01-10 18:00:00', NULL),
(11, 'ivan', 'ivic', 'iivic@gmail.com', 'ivna', '2016-01-11 11:00:00', NULL),
(12, 'ilija', 'ilic', 'iilic@gmail.com', 'ilija', '2016-01-11 12:00:00', NULL),
(13, 'Igor', 'Vori', 'vori@gmail.com', 'vori', '2016-01-11 23:00:00', NULL),
(14, 'Dino', 'Dvornik', 'dvornik@dino.hr', 'dino', '2016-01-11 23:00:00', NULL),
(15, 'Petar', 'Metličić', 'petar@gmail.com', 'petar', '2016-01-12 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `sadrzaj`
--

CREATE TABLE IF NOT EXISTS `sadrzaj` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategorija` text NOT NULL,
  `naslov` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` mediumblob NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Izbacivanje podataka za tablicu `sadrzaj`
--

INSERT INTO `sadrzaj` (`id`, `kategorija`, `naslov`, `tekst`, `slika`, `arhiva`, `datum`) VALUES
(1, '1', 's<v<sb<bs<', '<xbxc xy xc c', '', 0, '2016-01-04 19:00:00'),
(2, '1', 's<v<sb<bs<', '<xbxc xy xc c', '', 0, '2016-01-04 19:00:00'),
(3, '1', 'ksashansasasa', 'asasadweewewewewewewewewewewe', '', 0, '2016-01-12 00:00:00'),
(4, '3', 'usguasas', 'asaddewewe', '', 0, '2016-01-12 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
