-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 25. Jun 2021 um 15:52
-- Server-Version: 5.7.32
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `creditpackages`
--

CREATE TABLE `creditpackages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `creditpackages`
--

INSERT INTO `creditpackages` (`id`, `name`) VALUES
(1, 'Kredit Basic: 1k'),
(2, 'Kredit Basic: 2k'),
(3, 'Kredit Basic: 3k'),
(4, 'Kredit Basic: 4k'),
(5, 'Kredit Basic: 5k'),
(6, 'Kredit Basic: 6k'),
(7, 'Kredit Basic: 7k'),
(8, 'Kredit Basic: 8k'),
(9, 'Kredit Basic: 9k'),
(10, 'Kredit Basic: 10k'),
(11, 'Kredit Best: 1k'),
(12, 'Kredit Best: 2k'),
(13, 'Kredit Best: 3k'),
(14, 'Kredit Best: 4k'),
(15, 'Kredit Best: 5k'),
(16, 'Kredit Best: 6k'),
(17, 'Kredit Best: 7k'),
(18, 'Kredit Best: 8k'),
(19, 'Kredit Best: 9k'),
(20, 'Kredit Best: 10k'),
(21, 'Kredit Plus: 1k'),
(22, 'Kredit Plus: 2k'),
(23, 'Kredit Plus: 3k'),
(24, 'Kredit Plus: 4k'),
(25, 'Kredit Plus: 5k'),
(26, 'Kredit Plus: 6k'),
(27, 'Kredit Plus: 7k'),
(28, 'Kredit Plus: 8k'),
(29, 'Kredit Plus: 9k'),
(30, 'Kredit Plus: 10k'),
(31, 'Kredit Karma: 1k'),
(32, 'Kredit Karma: 2k'),
(33, 'Kredit Karma: 3k'),
(34, 'Kredit Karma: 4k'),
(35, 'Kredit Karma: 5k'),
(36, 'Kredit Karma: 6k'),
(37, 'Kredit Karma: 7k'),
(38, 'Kredit Karma: 8k'),
(39, 'Kredit Karma: 9k'),
(40, 'Kredit Karma: 10k');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `creditpackages`
--
ALTER TABLE `creditpackages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `creditpackages`
--
ALTER TABLE `creditpackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
