-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lis 2021, 18:51
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logowanie_02`
--
CREATE DATABASE IF NOT EXISTS `logowanie_02` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `logowanie_02`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`id`, `user`, `pass`, `img`) VALUES
(1, 'user1', '$2y$10$wlKu0ZJDfHU1JE6TB049OusWYnF9quLDwKjEJ36zfkbIP8OdK/DJy', 'kot.gif'),
(2, 'user2', '$2y$10$NntLsjxWNaDD80P7wGl9JOMA7dB1O8UW6l4Gl1uJ9CRN8XLzUPIw.', 'pies.gif'),
(3, 'user3', '$2y$10$xFMc2ROKwn5OeQGY30I0uufkgzBjv85Y0QH8kJEzVJpWhOZX8DzFm', 'zaba.gif');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane`
--
ALTER TABLE `dane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
