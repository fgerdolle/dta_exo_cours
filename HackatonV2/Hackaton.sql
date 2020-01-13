-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2019 at 09:13 AM
-- Server version: 5.7.26-0ubuntu0.18.10.1
-- PHP Version: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hackaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `Livres_pretes`
--

CREATE TABLE `Livres_pretes` (
  `id_mediateque` int(11) NOT NULL,
  `nombre_de_livres` int(11) NOT NULL,
  `nombre_cd` int(11) NOT NULL,
  `nombre_films` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Livres_pretes`
--

INSERT INTO `Livres_pretes` (`id_mediateque`, `nombre_de_livres`, `nombre_cd`, `nombre_films`) VALUES
(1, 50, 12, 15),
(2, 50, 12, 26),
(3, 22, 2, 4),
(4, 54, 15, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
