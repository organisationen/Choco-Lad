-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 maj 2018 kl 23:08
-- Serverversion: 10.1.31-MariaDB
-- PHP-version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `chocolad`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(64) NOT NULL,
  `prod_desc` varchar(256) NOT NULL,
  `prod_date-added` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `prod_img` varchar(32) DEFAULT NULL,
  `prod_cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_date-added`, `prod_img`, `prod_cost`) VALUES
(10, 'kokosbollar', 'Goa, runda grejer...', '2018-05-25 18:53:58.202770', 'kokosboll.png', 8),
(11, 'kokosbollar', 'Goa, runda grejer...', '2018-05-25 18:54:23.953387', 'kokosboll.png', 8),
(12, 'dildo', 'stor och styv', '2018-05-25 18:54:24.291275', 'bendy', 69),
(36, '', '', '2018-05-25 19:15:45.923605', 'frsdbvgd', 0),
(37, '', '', '2018-05-25 19:15:58.594468', 'frsdbvgd', 0),
(38, '', '', '2018-05-25 19:16:17.995123', 'frsdbvgd', 0),
(39, '', '', '2018-05-25 19:16:49.104949', 'frsdbvgd', 0),
(40, '', '', '2018-05-25 19:17:11.984014', 'frsdbvgd', 0),
(41, '', '', '2018-05-25 19:17:31.688738', 'frsdbvgd', 0),
(42, '', '', '2018-05-25 19:17:57.834411', 'frsdbvgd', 0),
(43, '', '', '2018-05-25 19:17:58.936895', 'frsdbvgd', 0),
(44, '', '', '2018-05-25 19:18:02.869703', 'frsdbvgd', 0),
(45, '', '', '2018-05-25 19:18:09.875384', 'frsdbvgd', 0),
(46, '', '', '2018-05-25 19:18:16.771723', 'frsdbvgd', 0),
(47, '', '', '2018-05-25 19:18:54.924238', 'frsdbvgd', 0),
(48, '', '', '2018-05-25 19:19:03.567339', 'frsdbvgd', 0),
(49, '', '', '2018-05-25 19:19:15.246916', 'frsdbvgd', 0),
(50, '', '', '2018-05-25 19:19:25.940861', 'frsdbvgd', 0),
(51, '', '', '2018-05-25 19:19:38.531054', 'frsdbvgd', 0),
(52, '', '', '2018-05-25 19:19:44.188224', 'frsdbvgd', 0),
(53, '', '', '2018-05-25 19:19:54.113024', 'frsdbvgd', 0),
(54, '', '', '2018-05-25 19:20:03.962961', 'frsdbvgd', 0),
(55, '', '', '2018-05-25 19:20:27.101324', 'frsdbvgd', 0),
(56, '', '', '2018-05-25 19:22:41.100795', 'frsdbvgd', 0),
(57, '', '', '2018-05-25 19:23:24.385863', 'frsdbvgd', 0),
(58, '', '', '2018-05-25 19:23:30.527757', 'frsdbvgd', 0),
(59, '', '', '2018-05-25 19:23:40.664781', 'frsdbvgd', 0),
(60, '', '', '2018-05-25 19:24:16.825017', 'frsdbvgd', 0),
(61, '', '', '2018-05-25 19:24:37.212576', 'frsdbvgd', 0),
(62, '', '', '2018-05-25 19:26:00.529864', 'frsdbvgd', 0),
(63, '', '', '2018-05-25 19:26:10.258431', 'frsdbvgd', 0);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_id` (`prod_id`),
  ADD KEY `prod_id_2` (`prod_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
