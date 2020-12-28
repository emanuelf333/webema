-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 09:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectophp`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL,
  `newsTitle` varchar(50) NOT NULL,
  `newsContent` text NOT NULL,
  `newsImg` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `newsTitle`, `newsContent`, `newsImg`) VALUES
(1, 'Título Noticia 1', 'Etiam sodales magna vitae facilisis dignissim. Duis dapibus arcu at malesuada pharetra.', 'b1.jpg'),
(2, 'Título Noticia 2', 'Integer placerat blandit eros, a maximus tortor. Pellentesque habitant morbi tristique senectus et netus.', 'b2.jpg'),
(3, 'Título Noticia 3', 'Donec dapibus lorem ac leo semper varius. Quisque pulvinar, risus eu aliquam finibus, ante est varius purus, eu malesuada ante.', 'b3.jpg'),
(4, 'Título Noticia 4', 'Curabitur at magna non erat gravida consectetur ut a velit. Aliquam erat volutpat. ', 'b11.jpg'),
(5, 'Título Noticia 5', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 'b5.jpg'),
(6, 'Título Noticia 6', 'Aliquam convallis, magna sit amet viverra bibendum, nunc augue tincidunt risus, sit amet sagittis tortor nisl in elit. Vestibulum posuere.', 'b10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(111) NOT NULL,
  `usersEmail` varchar(111) NOT NULL,
  `usersPassword` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPassword`) VALUES
(1, 'ema', 'ema@ema.com', '$2y$10$1HQqdWUWH3u2fFd4wonU8eAHcT56HCgWzntsPY/v5o34opwtBkHd.'),
(2, 'Rodri', 'pirqui@murky.com', '$2y$10$ARuYaHcJ15Py/rClTt9EAeP2hlEV7nirhtPE9TPFgVSf7tiSsLw0C'),
(3, 'emanuel', 'galdr.heith@gmail.com', '$2y$10$TXXDs0hP2I0zRZMtZzyB1.D7SEmSFiW.tsW3SkqNIzCFU/Xn46STy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
