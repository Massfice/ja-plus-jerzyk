-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Paź 2019, 21:11
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dbtest`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `diet_tabel`
--

CREATE TABLE `diet_tabel` (
  `iddiet` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `carbo` int(11) NOT NULL,
  `protein` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `date` datetime NOT NULL,
  `textlong` longtext COLLATE utf8mb4_polish_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`idnews`, `title`, `date`, `textlong`, `iduser`) VALUES
(30, 'abc', '2019-06-08 14:40:09', 'Podaj treść artykułu', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_data`
--

CREATE TABLE `personal_data` (
  `idpersonal` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `pbf` float NOT NULL,
  `activity` float NOT NULL,
  `biceps` float NOT NULL,
  `chest` float NOT NULL,
  `waist` float NOT NULL,
  `hip` float NOT NULL,
  `thigh` float NOT NULL,
  `calf` float NOT NULL,
  `date` date NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `personal_data`
--

INSERT INTO `personal_data` (`idpersonal`, `weight`, `height`, `pbf`, `activity`, `biceps`, `chest`, `waist`, `hip`, `thigh`, `calf`, `date`, `iduser`) VALUES
(11, 32, 123, 1, 2, 0, 0, 0, 0, 0, 0, '2019-05-23', 5),
(12, 123, 170, 1, 1, 0, 0, 0, 0, 0, 0, '2019-05-23', 5),
(35, 170, 170, 15, 1.4, 0, 0, 0, 0, 0, 0, '2019-06-02', 6),
(36, 170, 170, 14, 1, 0, 0, 0, 0, 0, 0, '2019-06-03', 6),
(37, 133, 133, 8, 1.4, 0, 0, 0, 0, 0, 0, '2019-06-03', 6),
(38, 1, 1, 6, 2, 0, 0, 0, 0, 0, 0, '2019-06-03', 6),
(44, 70, 170, 20, 1.3, 0, 0, 0, 0, 0, 0, '2019-10-15', 4),
(45, 50, 160, 20, 1.5, 0, 0, 0, 0, 0, 0, '2019-10-19', 9),
(46, 70, 170, 15, 1.6, 0, 0, 0, 0, 0, 0, '2019-10-19', 9),
(47, 70, 170, 15, 2, 0, 0, 0, 0, 0, 0, '2019-10-19', 9),
(48, 70, 170, 8, 1.3, 32, 12, 42, 52, 12, 42, '2019-10-21', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `email` varchar(82) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `role` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `age` date NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `gender` int(2) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`iduser`, `email`, `password`, `role`, `age`, `name`, `surname`, `gender`, `online`) VALUES
(3, 'user123', '123', '', '0000-00-00', '123', '123', 123, 0),
(4, '321', '321', 'admin', '0000-00-00', '321', '321', 321, 0),
(5, 'hakuna', 'matata', 'user', '1996-02-08', 'King', 'Makarewicz', 0, 0),
(6, '55', '55', 'user', '2019-05-17', '55', '55', 0, 0),
(7, 'Jerzyk', '123', 'trener', '1996-02-07', 'Jerzy', 'Makarewicz', 24, 0),
(8, 'abc', 'abc', 'user', '1990-06-08', 'abc', 'abc', 24, 0),
(9, 'abcde', 'abcde', 'user', '2019-10-19', 'a', 'b', 24, 0),
(10, 'katman', 'lemon99', 'user', '1999-11-01', 'Katarzyna', 'Mandala', 22, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `diet_tabel`
--
ALTER TABLE `diet_tabel`
  ADD PRIMARY KEY (`iddiet`),
  ADD UNIQUE KEY `idx_iduser` (`iduser`);

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`),
  ADD KEY `idx_iduser` (`iduser`) USING BTREE;

--
-- Indeksy dla tabeli `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`idpersonal`),
  ADD KEY `idx_iduser` (`iduser`) USING BTREE;

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `diet_tabel`
--
ALTER TABLE `diet_tabel`
  MODIFY `iddiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `idpersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `diet_tabel`
--
ALTER TABLE `diet_tabel`
  ADD CONSTRAINT `diet_tabel_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Ograniczenia dla tabeli `personal_data`
--
ALTER TABLE `personal_data`
  ADD CONSTRAINT `personal_data_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
