-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Sie 2017, 08:23
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane`
--
CREATE DATABASE IF NOT EXISTS `dane` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `dane`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

CREATE TABLE `osoby` (
  `id` int(11) NOT NULL,
  `nick` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `osoby`
--

INSERT INTO `osoby` (`id`, `nick`, `imie`, `nazwisko`) VALUES
(1, 'JASIO', 'JAN', 'JANKOWSKI'),
(2, 'PIETER', 'PIOTR', 'PIOTROWSKI'),
(3, 'STEFCIO', 'STEFAN', 'STEFANOWSKI');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `osoby`
--
ALTER TABLE `osoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
