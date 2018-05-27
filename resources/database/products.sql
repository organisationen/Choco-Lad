-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 27 maj 2018 kl 04:41
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
  `prod_cost` int(11) DEFAULT NULL COMMENT 'Jag lägger in ett till field om jag vill ha med ören.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_date-added`, `prod_img`, `prod_cost`) VALUES
(67, 'Kokosboll', 'En smaskig kokosboll.', '2018-05-27 02:40:28.378643', 'kokosboll.jpg', 5),
(68, 'Kokosboll', 'En smaskig kokosboll.', '2018-05-27 02:40:28.383644', 'kokosboll.png', 6),
(72, 'Kitkat-sallad', 'Det nyttiga alternativet!', '2018-05-27 02:40:28.385645', 'kitkat_salad.png', 74),
(73, 'Benedict Cumberbatch', 'En fullskalig staty av benedict cumberbatch!', '2018-05-27 02:39:01.119683', 'benedict.jpg', 6999);

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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
