-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 27 maj 2018 kl 15:25
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
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `prod_id`, `order_date`) VALUES
(1, 1, 1, '2018-05-27 13:23:09');

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
(73, 'Benedict Cumberbatch', 'En fullskalig chokladstaty av benedict cumberbatch!', '2018-05-27 11:40:42.793043', 'benedict.jpg', 6999);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `cust_id` int(11) NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `street` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_nr` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(6) NOT NULL,
  `city` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`cust_id`, `email`, `username`, `password`, `birthdate`, `street`, `street_nr`, `zip_code`, `city`, `first_name`, `last_name`) VALUES
(1, '', 'drivablejonatan', '1qaz!QAZ', '0000-00-00', '', '', 0, '0', '', ''),
(2, NULL, 'popo', 'hehe', '0000-00-00', '', '', 0, '0', '', ''),
(3, NULL, 'jonatan', 'hejeh', '0000-00-00', '', '', 0, '0', '', ''),
(4, 'i@gu.se', 'hejsan', 'fejkAF', '0000-00-00', '', '', 0, '0', '', ''),
(5, 'k@rl.se', 'wrhgfs', 'regswf', '0000-00-00', '', '', 0, '0', '', ''),
(6, '', 'DrivableJonatan', 'huehuehue', '0000-00-00', '', '', 0, '0', '', ''),
(33, 'kalle@margarinfabriken.ab', 'Kvadevack95', '019f6a50b3390f20c471b490dd8aaf510131fb35942b75776bf560946e223e14f8201b8dd2feb826ddc631cd0b0656fcf2db4213fd135246f28294f7adfa502d', '1940-05-13', 'ParadisÃ¤ppelvÃ¤gen', '13', 12313, 'Ankeborg', 'Kalle', 'Anka');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Index för tabell `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_id` (`prod_id`),
  ADD KEY `prod_id_2` (`prod_id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `id` (`cust_id`,`email`,`username`) USING BTREE;

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
