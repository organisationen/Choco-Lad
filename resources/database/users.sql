-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 27 maj 2018 kl 02:38
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
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `cust_id` int(11) NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `street_address` varchar(64) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `city` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`cust_id`, `email`, `username`, `password`, `birthdate`, `street_address`, `zip_code`, `city`) VALUES
(1, '', 'drivablejonatan', '1qaz!QAZ', '0000-00-00', '', 0, '0'),
(2, NULL, 'popo', 'hehe', '0000-00-00', '', 0, '0'),
(3, NULL, 'jonatan', 'hejeh', '0000-00-00', '', 0, '0'),
(4, 'i@gu.se', 'hejsan', 'fejkAF', '0000-00-00', '', 0, '0'),
(5, 'k@rl.se', 'wrhgfs', 'regswf', '0000-00-00', '', 0, '0'),
(6, '', 'DrivableJonatan', 'huehuehue', '0000-00-00', '', 0, '0'),
(7, '', '', '', '0000-00-00', '', 0, '0'),
(8, '', '', '', '0000-00-00', '', 0, '0'),
(26, 'paron@paron.se', 'pÃ¤ron', '76aa84285aab3bcc0a7be87ac018b58ab1f61d7c0aa3d7c9c4555f0a2ee1989196d8c0c787607fa811dbd777eefc96a713fb5a525dd04cfd3e5879feffc0ee05', '0000-00-00', '', 0, '0');

--
-- Index för dumpade tabeller
--

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
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
