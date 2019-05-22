-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 10:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markostankovic`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lozinka` text NOT NULL,
  `users` char(1) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `ime_prezime`, `email`, `lozinka`, `users`, `create_date`) VALUES
(1, 'tyy', 'tryr', 'ryr', 'A', '2019-05-22 09:36:45'),
(2, 'tyy', 'tryr', 'ryr', 'A', '2019-05-22 09:36:46'),
(3, 'Pera', 'pera@mail.com', '5454', 'A', '2019-05-22 09:39:13'),
(4, 'Pera', 'pera@mail.com', '5454', 'A', '2019-05-22 09:39:14'),
(5, 'neko', 'neko@mail.com', '4544', 'A', '2019-05-22 09:42:04'),
(6, 'ana', 'ana@mai.com', '5454', 'A', '2019-05-22 09:43:48'),
(7, 'milan', 'milan@mail.com', '45454', 'A', '2019-05-22 09:45:06'),
(8, 'jelena', 'jeleena@mailneki.com', 'sdfdfs', 'A', '2019-05-22 09:46:03'),
(9, 'bane', 'bane@mail.com', 'dfdfsdf', 'A', '2019-05-22 09:47:01'),
(10, 'zoki', 'zoki@mail.com', 'gggg', 'A', '2019-05-22 09:48:08'),
(11, 'neko12', 'neko12@mail.com', '454', 'A', '2019-05-22 09:48:51'),
(12, 'Marko', 'marko@mail.com', '4545as', 'A', '2019-05-22 09:56:29'),
(13, 'milica', 'milica@mail.com', '4ds4', 'A', '2019-05-22 09:58:25'),
(14, 'miliica', 'milica@mail.com', 'fsdf5', 'A', '2019-05-22 09:59:08'),
(15, 'sasa', 'sasa1@mail.com', 'dsf45', 'A', '2019-05-22 10:00:26'),
(16, 'sasa', 'sasa1@mail.com', 'dsf45', 'A', '2019-05-22 10:00:55'),
(17, 'saska', 'saska', 'mai4', 'U', '2019-05-22 10:01:41'),
(18, 'zeljko', 'zeljko@mail.com', '4ds54f', 'A', '2019-05-22 10:02:13'),
(19, 'peki', 'peki@mail.com', 'sdfdf', 'U', '2019-05-22 14:46:19'),
(20, 'ppp', 'ghjhj', 'ghj', 'A', '2019-05-22 14:48:28'),
(21, 'pznovi', 'pznovi@mail.com', 'sdfsf', 'A', '2019-05-22 14:50:04'),
(22, 'pzz', 'poztest@mail.com', 'def', 'A', '2019-05-22 14:54:37'),
(23, 'pzzz', 'pzzz@mail.com', 'dsfdsf', 'A', '2019-05-22 14:55:10'),
(24, 'pozzzz', 'pozzzz@mail.com', 'sfsdf', 'A', '2019-05-22 14:56:30'),
(25, 'kk', 'ghjhj', 'ghj', 'A', '2019-05-22 15:58:49'),
(26, 'pera', 'ghjhj', 'ghj', 'A', '2019-05-22 15:59:48'),
(28, 'Marko', 'marko@mojmail.com', '4545as', 'A', '2019-05-22 16:26:57'),
(29, 'najnoviji', 'najnoviji@mail.com', '9f885bcfdecadf0d9a823fc36a0cf832e88ed4ee6d963a7fc0f7a473113c6d7b73df8f0b4fce4addb721194ca1136e021eca80a4740e1c63c30b3e4db35f5c51', 'A', '2019-05-22 16:31:13'),
(30, 'administrator', 'administrator@mail.com', '9f885bcfdecadf0d9a823fc36a0cf832e88ed4ee6d963a7fc0f7a473113c6d7b73df8f0b4fce4addb721194ca1136e021eca80a4740e1c63c30b3e4db35f5c51', 'A', '2019-05-22 16:54:25'),
(31, 'user', 'user@mail.com', '9f885bcfdecadf0d9a823fc36a0cf832e88ed4ee6d963a7fc0f7a473113c6d7b73df8f0b4fce4addb721194ca1136e021eca80a4740e1c63c30b3e4db35f5c51', 'U', '2019-05-22 16:54:46'),
(32, 'data', 'data@mail.com', '9f885bcfdecadf0d9a823fc36a0cf832e88ed4ee6d963a7fc0f7a473113c6d7b73df8f0b4fce4addb721194ca1136e021eca80a4740e1c63c30b3e4db35f5c51', 'A', '2019-05-22 16:55:17'),
(33, 'ana_ana', 'ana@mai.com', 'e334d000e1eaea7b28152a6d1bdf0ce31b4d50955ff35e21360d4f61fe04b11ebb07fd096b972a2bb024789cc776a307be92e864a073000a5bfbd366b3e61996', 'A', '2019-05-22 19:38:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
