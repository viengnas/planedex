-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 01:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planes`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `email` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`email`, `password`, `title`, `position`, `creation_date`, `client_id`) VALUES
('ignas.kviliunas@ktu.edu', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Ignas Kviliūnas', 'director', '2021-11-19 00:00:00', 1),
('stiklita@gmail.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Stiklita', 'manager', '2021-11-19 10:51:32', 3),
('ryanair@gmail.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Ryanair', 'supplier', '2021-11-19 10:56:14', 4),
('rimtastiekejas@gmail.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Rimtas Tiekėjas', 'supplier', '2021-12-14 18:53:36', 5),
('escole0@blogger.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Flipopia', 'supplier', '2021-12-16 00:00:00', 6),
('ekeeting1@wiley.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Midel', 'supplier', '2021-12-14 00:00:00', 7),
('peeles2@indiegogo.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Gigashots', 'supplier', '2021-12-14 00:00:00', 8),
('igothrup3@blogtalkradio.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Talane', 'supplier', '2021-12-15 00:00:00', 9),
('astiegar4@ft.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Plambee', 'supplier', '2021-12-16 00:00:00', 10),
('ogoodricke5@wix.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Mybuzz', 'supplier', '2021-12-14 00:00:00', 11),
('nmattock6@goodreads.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Youbridge', 'supplier', '2021-12-15 00:00:00', 12),
('aawcoate7@lycos.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Jaxnation', 'supplier', '2021-12-14 00:00:00', 13),
('jtownley8@livejournal.com', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Npath', 'supplier', '2021-12-15 00:00:00', 14),
('mgilardoni9@yandex.ru', '$2b$10$zSAaRmQe58Vl5.wjOlmXTe1D721NMRAPVcHMLEdHVAV5pHASYE5mO', 'Latz', 'supplier', '2021-12-16 00:00:00', 15),
('ignkvi@ktu.lt', '$2b$10$7.FyA4dixxn4TORDui7t/uKXyT5jkE/gEcvwNqhH11/T9eIwlRPMO', 'Ignelis', 'manager', '2021-12-17 09:41:56', 16),
('spam@spam.lt', '$2y$10$YXhsI9OKouN848p1U3OUouRcldrk81p6DAPLKpnREvnEaa30wAFde', 'Testita', 'manager', '2021-12-17 10:38:35', 17);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `status` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `fk_clientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`status`, `address`, `order_id`, `fk_clientid`) VALUES
('submitted', 'Studentų g. 50', 2, 3),
('submitted', 'Studentų g. 52', 3, 3),
('submitted', 'Studentų g. 48a', 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders_parts`
--

CREATE TABLE `orders_parts` (
  `id` int(11) NOT NULL,
  `fk_orderid` int(11) NOT NULL,
  `fk_partid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_parts`
--

INSERT INTO `orders_parts` (`id`, `fk_orderid`, `fk_partid`, `amount`, `price`) VALUES
(3, 2, 8, 1, 9438.53),
(4, 2, 28, 15, 25500.45),
(5, 3, 29, 15, 29447.1),
(6, 3, 10, 10, 54225.4),
(7, 4, 9, 67, 410979.34);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `manufacturer` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `price` double NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `delivery_date` date NOT NULL,
  `part_id` int(11) NOT NULL,
  `fk_client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`manufacturer`, `model`, `price`, `name`, `amount`, `delivery_date`, `part_id`, `fk_client_id`) VALUES
('Gaylord-Swift', 'F-Series', 7446.45, 'Simvastatin', 93, '2021-12-29', 5, 8),
('Schumm, Hermiston and Wisoky', 'Freestyle', 9304.79, 'AHC Vital Complex C-15 Ampoule', 23, '2021-12-22', 6, 11),
('Carter-Christiansen', 'Skylark', 7298.76, 'XIFAXAN', 88, '2021-12-21', 7, 11),
('Stokes LLC', 'M5', 9438.53, 'Head and Shoulders', 64, '2021-12-24', 8, 6),
('Hilpert-Reichert', 'Range Rover', 6134.02, 'good sense pain relief', 90, '2021-12-21', 9, 9),
('Friesen-Kulas', 'GTO', 5422.54, 'Opana', 21, '2021-12-22', 10, 12),
('Beier LLC', 'Turbo Firefly', 3863.28, 'Risperidone', 50, '2021-12-24', 11, 7),
('Morar-Wuckert', '911', 8952.26, 'Stomach Relief', 74, '2021-12-24', 12, 4),
('Murray, Murray and Kovacek', 'XC90', 8523.95, 'Cultivated Oat', 12, '2021-12-20', 13, 15),
('Mante, Kunde and McKenzie', 'Astro', 5068.39, 'ESIKA PERFECT SKIN COVERAGE CONCEALER SPF 17', 27, '2021-12-26', 14, 8),
('Gislason and Sons', 'Suburban 2500', 2680.29, 'Petroleum Skin Protectant', 75, '2021-12-30', 15, 9),
('Heidenreich, Becker and Lowe', 'D150', 9482.31, 'Epirubicin Hydrochloride', 94, '2021-12-28', 16, 13),
('Kilback-Marvin', 'Explorer Sport Trac', 2159.11, 'DocQLace', 92, '2021-12-28', 17, 8),
('Murray-Corkery', 'Regal', 5230.7, 'Ciprofloxacin', 90, '2021-12-29', 18, 7),
('Stark and Sons', 'G-Series 1500', 6755.23, 'Cromolyn Sodium', 74, '2021-12-23', 19, 13),
('Prohaska Inc', 'FX', 4808.46, 'Methocarbamol', 11, '2021-12-24', 20, 15),
('Hermiston-King', 'Capri', 6682.66, 'Oxycodone Hydrochloride', 22, '2021-12-23', 21, 13),
('Buckridge and Sons', 'FX', 5742.13, 'Losartan Potassium', 73, '2021-12-20', 22, 14),
('Haag-Spencer', '1500', 388.5, 'KETOROLAC', 76, '2021-12-28', 23, 10),
('Emard, Barton and Walker', 'Starion', 1667.15, 'Wheat Bunt', 82, '2021-12-25', 24, 15),
('Abshire Group', 'Savana 1500', 8389.17, 'Dr. Scholls', 47, '2021-12-26', 25, 9),
('Bayer, Gorczany and Mosciski', 'Topaz', 1041.8, 'Feminine Comfort', 53, '2021-12-25', 26, 14),
('Kirlin and Sons', 'Esprit', 447.21, 'venlafaxine', 94, '2021-12-25', 27, 7),
('Huels-Gerhold', 'GTO', 1700.03, 'Pure Oral hCG', 99, '2021-12-26', 28, 6),
('Treutel and Sons', 'Sonoma Club', 1963.14, 'Polymyxin B Sulfate and Trimethoprim', 46, '2021-12-21', 29, 6),
('Barton-Senger', 'E250', 9258.95, 'Simvastatin', 54, '2021-12-26', 30, 15),
('Fritsch LLC', 'Electra', 8543.04, 'Sweat-Less', 12, '2021-12-29', 31, 7),
('King and Sons', 'Sentra', 1145.76, 'Trace Elements 4', 86, '2021-12-21', 32, 12),
('Kulas, Larkin and Kovacek', 'Savana 2500', 5055.24, 'Fluocinonide', 35, '2021-12-20', 33, 11),
('Koepp Group', 'F350', 2094.22, 'CAPTOPRIL', 58, '2021-12-30', 34, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_clientid` (`fk_clientid`);

--
-- Indexes for table `orders_parts`
--
ALTER TABLE `orders_parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_parts_fk_orderid_foreign` (`fk_orderid`),
  ADD KEY `orders_parts_fk_partid_foreign` (`fk_partid`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `transacts` (`fk_client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_parts`
--
ALTER TABLE `orders_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`fk_clientid`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `orders_parts`
--
ALTER TABLE `orders_parts`
  ADD CONSTRAINT `orders_parts_fk_orderid_foreign` FOREIGN KEY (`fk_orderid`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orders_parts_fk_partid_foreign` FOREIGN KEY (`fk_partid`) REFERENCES `parts` (`part_id`);

--
-- Constraints for table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `transacts` FOREIGN KEY (`fk_client_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
