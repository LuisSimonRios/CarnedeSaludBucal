-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2023 at 02:30 PM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manisiis_saludbucal`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `documento` int(150) NOT NULL,
  `edad` varchar(150) DEFAULT NULL,
  `fecha_valoracion` date DEFAULT NULL,
  `fecha_prox_cita` date DEFAULT NULL,
  `aplicacion_barniz` date DEFAULT NULL,
  `cop` float DEFAULT NULL,
  `firma` varchar(200) DEFAULT NULL,
  `ips` varchar(200) DEFAULT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `documento`, `edad`, `fecha_valoracion`, `fecha_prox_cita`, `aplicacion_barniz`, `cop`, `firma`, `ips`, `observaciones`) VALUES
(12, 23432, '0', '2023-07-11', '2023-07-20', '2023-07-13', 323, 'afds', 'dsafds', 'dsfsd'),
(13, 1060266179, '0', '2023-07-21', '2023-07-13', '2023-07-15', 23234, 'dafas', 'dfasd', 'sdafdasfds'),
(14, 1060266179, '0', '2023-07-21', '2023-07-13', '2023-07-15', 23234, 'dafas', 'dfasd', 'sdafdasfds'),
(15, 234, '0', '2023-07-15', '2023-07-12', '2023-07-21', 33, '', 'adf', 'sdfdsa'),
(16, 234, '0', '2023-07-15', '2023-07-12', '2023-07-21', 33, '', 'adf', 'sdfdsa'),
(17, 1060266179, '0', '2023-07-07', '2023-07-12', '2023-07-13', 232, 'afa', 'sdafsd', 'sddfasd'),
(18, 1060266179, 'años2', '2023-07-15', '2023-07-20', '2023-07-08', 23432, 'sdfgdfds', 'dfgdfs', 'dfsgdfgd'),
(19, 1060266179, '6 meses', '2023-07-08', '2023-07-14', '2023-07-15', 32432, 'dsf', 'sfsd', 'dfsdad'),
(20, 1060266179, '6 meses', '2023-07-08', '2023-07-14', '2023-07-15', 32432, 'dsf', 'sfsd', 'dfsdad'),
(21, 23432, '1 año y medio', '2023-07-15', '2023-07-14', '2023-07-19', 53243, 'sdfgfds', 'sdfgds', 'dfsgdfgdfdfs'),
(22, 1053869739, '17 años', '2023-07-10', '2023-07-13', '2023-07-10', 5, 'Hoja de vida Daniela Naranjo.pdf', 'interconsultar', 'NA'),
(23, 1060266179, '1 año y medio', '2023-07-06', '2023-07-11', '2023-07-12', 9, 'Hoja de vida Daniela Naranjo.pdf', 'sura', 'adasfsadfsdfsdd'),
(24, 335445, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 4344, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 5463545, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 32432423, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 1060266179, '1 ano', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 32423, '2 anos', '2023-07-12', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 32423423, '2 anos', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 32423423, '2 anos', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 3241234, '1 ano', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 32423, '1 ano', '2023-07-07', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 32432, '1 ano y medio', '2023-07-11', '2023-07-14', NULL, NULL, NULL, NULL, NULL),
(35, 22344234, '1 ano y medio', '2023-07-14', '2023-07-05', '2023-07-13', NULL, NULL, NULL, NULL),
(38, 234324, '1 ano y medio', '2023-07-14', '2023-07-06', '2023-07-13', 12, 'Hoja de vida Daniela Naranjo.pdf', NULL, NULL),
(39, 234324, '1 ano y medio', '2023-07-14', '2023-07-06', '2023-07-13', 12, NULL, NULL, NULL),
(40, 2423, '1 ano y medio', '2023-07-13', '2023-07-13', '2023-07-13', 52, NULL, NULL, NULL),
(41, 2423, '1 ano y medio', '2023-07-13', '2023-07-13', '2023-07-13', 52, NULL, NULL, NULL),
(42, 232, '1 ano y medio', '2023-07-14', '2023-07-05', '2023-07-05', 26, NULL, NULL, NULL),
(43, 1060266179, '1 ano y medio', '2023-07-11', '2023-07-13', NULL, NULL, NULL, NULL, NULL),
(44, 24243, '1 ano y medio', '2023-07-14', '2023-08-02', NULL, NULL, NULL, NULL, NULL),
(45, 24243, '1 ano y medio', '2023-07-14', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 24243, '1 ano y medio', '2023-07-14', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 234325, '1 ano', '2023-07-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 1060266179, '1 ano', '2023-07-12', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 1060266179, '1 ano', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 1060266179, '1 ano y medio', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 1060266179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 35345435, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 3454, '6 meses', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 323534, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 324324, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 32432, '1 ano y medio', '2023-07-12', '2023-07-12', '2023-07-14', 15, 'Hoja de vida Daniela Naranjo.pdf', 'dsdas', 'sgsfdgdfs'),
(57, 32432, '1 ano y medio', '2023-07-12', '2023-07-12', '2023-07-14', 15, 'Hoja de vida Daniela Naranjo.pdf', 'dsdas', 'sgsfdgdfs'),
(58, 34324234, '1 ano', '2023-07-12', '2023-07-13', '2023-07-13', 15, 'Hoja de vida Daniela Naranjo.pdf', 'etst', 'etstesese'),
(59, 102030, '1 ano y medio', '2023-07-05', '2023-07-05', '2023-07-05', 12, 'Hoja de vida Daniela Naranjo.pdf', 'adsfds', 'adsfsadfsda'),
(60, 102030, '1 ano y medio', '2023-07-05', '2023-07-05', '2023-07-05', 12, 'Hoja de vida Daniela Naranjo.pdf', 'adsfds', 'adsfsadfsda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(150) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `numeroId` int(150) NOT NULL,
  `telefono` int(150) NOT NULL,
  `contrasena` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombreCompleto`, `fechaNacimiento`, `numeroId`, `telefono`, `contrasena`) VALUES
(1, 'Simon Rios Arcila', '2023-06-06', 232323, 2323121, '$2y$10$AHDMjfbdbpvErUVrPqO/B.Hri.71qzi907DfD4jyk7IzCrOg44HUW'),
(2, 'Simon Rios Arcila', '2023-06-15', 3222, 232323323, '$2y$10$eNWG1w12RUtLcdU4MUaFju6EgOBob32CSdS/AJ4cMYTNFdvmki5/.'),
(3, 'Simon Rios Arcila', '2023-06-16', 1053869739, 23234, '$2y$10$IegHeLUEwe4ws5gS/vdpveur4b8bptJw6Ylv3uDuUH2g3y6MU2xZy'),
(4, 'papa', '2023-06-09', 10270393, 324324, '$2y$10$vywkMoLWSCmYCdfw9RSayuCeCknpo8e/0I5A6OPfMJsdqvKZrxezi'),
(5, 'Carolina Ramirez', '2023-07-10', 123456789, 987654321, '$2y$10$9RbL8FvrxnxTkVq6ScHZt.GVWhwuXgA3jw1wTPZHAzMSIXmzMOd9S'),
(6, 'Mauricio', '2023-07-05', 990416, 1053869739, '$2y$10$bjYM7Uc1mUHVLAwmadXwx.vT/w6DLHPgXjRm6tuL5dGUWdvTGt.LG'),
(7, 'Juanita', '2023-07-11', 42110, 8923423, '$2y$10$V.W8j9ZtILlZrQp7S0IHsexlZy2xR2l5aOsaQIqdA0/6KC0Zyr2kq'),
(8, 'carolito', '2023-07-12', 101010, 302304343, '$2y$10$ZeUIHJE29K5GbaoTWiyPFeZHqDUqLbQ6HkyBHUo681jISav2h5T7G'),
(9, 'Pablito', '2023-07-05', 109910, 3023242, '$2y$10$CxsDEJ8xeYsag/SlDzeSlupdKqHkuLhzF068hWkKEFZmIrFwYRQlW'),
(10, 'Milena', '2023-07-12', 102030, 32432423, '$2y$10$WHsPl9ZFSrUwjoAZWmdc5eM61O1pRQBPoyPDBe3/XlLYXwzNugQ/e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
