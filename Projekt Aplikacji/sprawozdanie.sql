-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 05, 2026 at 06:29 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sprawozdanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry_edmunda`
--

CREATE TABLE `gry_edmunda` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(150) NOT NULL,
  `platforma` varchar(200) DEFAULT NULL,
  `wspoltworca` varchar(150) DEFAULT NULL,
  `wydawca` varchar(150) DEFAULT NULL,
  `rok_wydania` varchar(10) DEFAULT NULL,
  `uwagi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gry_edmunda`
--

INSERT INTO `gry_edmunda` (`id`, `nazwa`, `platforma`, `wspoltworca`, `wydawca`, `rok_wydania`, `uwagi`) VALUES
(1, 'The Backup Files', 'Adobe Flash', NULL, NULL, '2001', NULL),
(2, 'The Lonely Hermit', 'Adobe Flash', NULL, NULL, '2001', 'Included in The Basement Collection'),
(3, 'Dead Baby Dressup!', 'Adobe Flash', NULL, NULL, '2001', NULL),
(4, '12 uses of dead babies', 'Adobe Flash', NULL, NULL, '2001', NULL),
(5, 'Dead Baby Dressup 2!', 'Adobe Flash', NULL, NULL, '2001', NULL),
(6, '6 more dead baby uses', 'Adobe Flash', NULL, NULL, '2001', NULL),
(7, 'Dead Baby Dressup 3', 'Adobe Flash', NULL, NULL, '2001', NULL),
(8, 'Stile man Dressup', 'Adobe Flash', NULL, NULL, '2001', NULL),
(9, 'WWF baby dressup', 'Adobe Flash', NULL, NULL, '2001', NULL),
(10, '8 More Dead Baby Uses!', 'Adobe Flash', NULL, NULL, '2001', NULL),
(11, 'Dead Baby Dress up 4', 'Adobe Flash', NULL, NULL, '2001', NULL),
(12, 'The Boy who Questioned God', 'Adobe Flash', NULL, NULL, '2001', NULL),
(13, 'Dead Baby Dressup X', 'Adobe Flash', NULL, NULL, '2001', NULL),
(14, 'Dead Baby Super Hero Dres', 'Adobe Flash', NULL, NULL, '2002', NULL),
(15, 'Dead Baby Dressup best of', 'Adobe Flash', NULL, NULL, '2002', NULL),
(16, 'Carious Weltling', 'Adobe Flash', 'Caulder Bradford', NULL, '2003', NULL),
(17, 'SnackOlantern', 'Adobe Flash', NULL, NULL, '2003', 'Described by McMillen as his worst game'),
(18, 'Triptych', 'Windows', 'Chronic Logic', NULL, '2003', NULL),
(19, 'Word Peace', 'Windows', 'Chronic Logic', NULL, '2003', NULL),
(20, 'Clubby The Seal', 'Adobe Flash', NULL, NULL, '2004', NULL),
(21, 'Gish', 'Windows, OS X, Linux', 'Cryptic Sea', 'Chronic Logic', '2004', 'First major game project'),
(22, 'Carious Weltling 2', 'Adobe Flash', NULL, NULL, '2005', NULL),
(23, 'Weltling Dressup', 'Adobe Flash', NULL, NULL, '2005', NULL),
(24, 'Viviparous Dumpling', 'Adobe Flash', NULL, NULL, '2005', NULL),
(25, 'Cerebral Discharge iii', 'Adobe Flash', NULL, NULL, '2005', NULL),
(26, 'Blast Miner', 'Windows', 'Cryptic Sea', 'Chronic Logic', '2006', NULL),
(27, 'Triachnid', 'Adobe Flash', 'Florian Himsl', NULL, '2006', 'Included in The Basement Collection'),
(28, 'Holiday Snow Wars', 'Adobe Flash', NULL, NULL, '2006', NULL),
(29, 'Cereus Peashy', 'Adobe Flash', NULL, NULL, '2007', NULL),
(30, 'Weltling 2: Regurgitated', 'Adobe Flash', NULL, NULL, '2007', NULL),
(31, 'Host', 'Adobe Flash', NULL, NULL, '2007', 'Online multiplayer game'),
(32, 'Guppy', 'Adobe Flash', NULL, NULL, '2007', 'A prototype, unreleased'),
(33, 'Blood Car 2000!', 'Adobe Flash', 'Cryptic Sea', NULL, '2008', NULL),
(34, 'Coil', 'Adobe Flash', 'Florian Himsl', NULL, '2008', 'Included in The Basement Collection'),
(35, 'Blood car! 2000! Delux!', 'Adobe Flash', NULL, NULL, '2008', NULL),
(36, 'DeadBaby VG Dressup', 'Adobe Flash', NULL, NULL, '2008', NULL),
(37, 'Twin Hobo Rocket', 'Adobe Flash', 'Florian Himsl', NULL, '2008', NULL),
(38, 'Cunt', 'Adobe Flash', 'Florian Himsl', NULL, '2008', NULL),
(39, 'Aether', 'Adobe Flash', 'Tyler Glaiel', NULL, '2008', 'Included in The Basement Collection'),
(40, 'Meat Boy', 'Adobe Flash', NULL, NULL, '2008', 'Included in The Basement Collection'),
(41, 'Clubby: Killing Season', 'Adobe Flash', NULL, NULL, '2008', NULL),
(42, 'Grey-Matter', 'Adobe Flash', 'Team Meat', NULL, '2008', 'Included in The Basement Collection'),
(43, 'Meat Boy (map pack)', 'Adobe Flash', NULL, NULL, '2008', NULL),
(44, 'AVGM', 'Adobe Flash', 'Tyler Glaiel', NULL, '2009', 'Included in The Basement Collection'),
(45, 'Spewer', 'Adobe Flash', NULL, NULL, '2009', 'Included in The Basement Collection'),
(46, 'Time Fcuk', 'Adobe Flash', NULL, NULL, '2009', 'Included in The Basement Collection'),
(47, 'Super Meat Boy', 'Windows, OS X, Linux, Xbox 360, PS4, Nintendo Switch, PS Vita, Wii U', 'Team Meat', 'Team Meat', '2010', 'First console game'),
(48, 'The Binding of Isaac', 'Windows, OS X, Linux, Adobe Flash', 'Florian Himsl', NULL, '2011', NULL),
(49, 'The Binding of Isaac: Wrath of the Lamb', 'Windows, OS X, Linux', 'Florian Himsl', NULL, '2012', 'Expansion for The Binding of Isaac'),
(50, 'The Basement Collection', 'Windows, OS X, Linux', 'Tyler Glaiel', NULL, '2012', 'Collection of Flash games'),
(51, 'Facist', 'Adobe Flash', NULL, NULL, '2014', 'Game jam game'),
(52, 'The Binding of Isaac: Rebirth', 'Windows, OS X, Linux, PS4, PS Vita, New 3DS, Wii U, Xbox One, iOS', 'Nicalis', 'Nicalis', '2014', 'Remake of The Binding of Isaac'),
(53, 'Fingered', 'Windows', 'James Id', NULL, '2015', NULL),
(54, 'The Binding of Isaac: Afterbirth', 'Windows, PS4, Xbox One, OS X, Linux', 'Nicalis', 'Nicalis', '2015', 'First expansion pack for The Binding of Isaac: Rebirth'),
(55, 'The Binding of Isaac: Afterbirth+', 'Windows, OS X, Linux, Nintendo Switch, PS4, Xbox One', 'Nicalis', 'Nicalis', '2017', 'Second expansion pack for The Binding of Isaac: Rebirth'),
(56, 'The End Is Nigh', 'Windows, OS X, Linux, PS4, Nintendo Switch', 'Tyler Glaiel', 'Tyler Glaiel, Nicalis', '2017', NULL),
(57, 'The Binding of Isaac: Four Souls', 'Card game', 'Danielle McMillen, Tyler Glaiel', 'Studio71', '2018', 'Based on The Binding of Isaac; Funded in less than two hours'),
(58, 'The Legend of Bum-bo', 'Windows, OS X, Android, iOS, Nintendo Switch, PS5', 'James Id', 'The Label Limited, Nicalis', '2019', 'Prequel to The Binding of Isaac'),
(59, 'Tapeworm', 'Card game', NULL, 'Studio71', '2020', NULL),
(60, 'The Binding of Isaac: Repentance', 'Windows, Nintendo Switch, PS4, PS5, Xbox One, Xbox Series X/S', 'Nicalis', 'Nicalis', '2021', 'Third expansion pack for The Binding of Isaac: Rebirth'),
(61, 'Mewgenics', 'Windows', 'Tyler Glaiel', 'Tyler Glaiel', '2026', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry_edmunda`
--
ALTER TABLE `gry_edmunda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gry_edmunda`
--
ALTER TABLE `gry_edmunda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
