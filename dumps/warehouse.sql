-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10 май 2018 в 23:02
-- Версия на сървъра: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse`
--

-- --------------------------------------------------------

--
-- Структура на таблица `isolation`
--

CREATE TABLE `isolation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pcs_in_pack` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `isolation`
--

INSERT INTO `isolation` (`id`, `name`, `size`, `qty`, `pcs_in_pack`, `updated_at`, `created_at`) VALUES
(1, 'Izolatsiq 1', 2, 20, 100, '2018-05-08 23:27:00', '2018-05-08 23:27:00'),
(2, 'Izolatsiq 2', 12, 22, 5, '2018-05-08 23:32:33', '2018-05-08 23:32:33'),
(3, 'Pharaterm T50', 12001200, 0, 4, '2018-05-09 04:44:59', '2018-05-09 04:40:49'),
(4, 'Fesco fireboards', 20, 39, 20, '2018-05-09 04:41:54', '2018-05-09 04:41:54'),
(5, 'Paratherm T35', 12001200, 0, 4, '2018-05-09 20:13:03', '2018-05-09 20:13:03'),
(6, 'Fesco Filets', 120, 0, 200, '2018-05-09 20:24:57', '2018-05-09 20:24:57');

-- --------------------------------------------------------

--
-- Структура на таблица `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `item`
--

INSERT INTO `item` (`id`, `name`, `qty`, `description`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'DF3-SSA4-P-5,5 x 25', 0, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 17:36:31'),
(2, 'DF3-SSA4-P-5,5 x 25', 9, '5000 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:54:36'),
(3, 'DF3-SSA4-P-5,5 x 50', 3, '2500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:55:02'),
(4, 'DF3-SSA4-P-5,5 x 75', 5, '1000 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:55:25'),
(5, 'DF2-SS-LS-A15-6,3 x 25', 11, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 09:36:41'),
(7, 'DF12-TD-6,3 x 45', 23, '100 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 09:35:08'),
(8, 'HTF-6,3 x 57', 15, '100 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 13:12:44'),
(9, 'DF3-SS-A15-5,5 x 25', 3, '1000 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 09:37:47'),
(10, 'DF6-TD-6,3 x 30', 89, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:56:57'),
(11, 'DF3-TD-6,3 x 30', 22, '800 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:55:47'),
(12, 'DF25-6,3 x 65', 21, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 09:37:18'),
(13, 'DF6-SS-A15-5,5 x 30', 21, '1000 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:56:10'),
(14, 'DF3-SS-P-HT-5,5 x 130', 19, '250 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:48:14'),
(15, 'DF3-SS-HT-5,5 x 180', 46, '100 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 09:38:37'),
(16, 'DF3-SS-HT-A15-5,5 x 180', 6, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:47:44'),
(17, 'DF3-SS-HT-5,5 x 180', 2, '800 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:46:20'),
(18, 'DF3-SS-HT-5,5 x 180', 1, '600 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:45:54'),
(19, 'DF3-SS-HT-5,5 x 225', 3, '500 in a box', 1, '2018-05-01 00:39:56', '2018-05-01 12:47:23'),
(20, 'DF12-SS-HT-A15-5,5 x 150', 15, '100 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 09:34:41'),
(21, 'DF3-SS-HT-5,5 x 150', 3, '1000 in a box', 0, '2018-05-01 00:39:57', '2018-05-01 09:38:12'),
(22, 'DF2-SS-LS-A15-6,3 x 25', 101, '100 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 09:36:03'),
(23, 'DF6-SSA4-P-HT-5,5 x 165', 1, '800 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 12:56:33'),
(24, 'DF6-SSA4-P-HT-5,5 x 165', 3, '600 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 09:32:34'),
(25, 'DF3-SSA4-PL-5,5 x 25', 35, 'painted (1000)', 1, '2018-05-01 00:39:57', '2018-05-01 07:01:53'),
(26, 'DF3-SSA4-PL-5,5 x 25', 4, 'painted (100)', 1, '2018-05-01 00:39:57', '2018-05-01 07:02:29'),
(27, '\"C\" clamps', 2, NULL, 4, '2018-05-01 00:39:57', '2018-05-01 12:45:08'),
(28, 'Air Seal', 21, 'White Foam Tape', 4, '2018-05-01 00:39:57', '2018-05-01 06:59:41'),
(29, 'Butil Tape', 24, '24 rolls in a box', 1, '2018-05-01 00:39:57', '2018-05-01 14:36:47'),
(30, 'GAS Full', 8, '16 in a cage', 4, '2018-05-01 00:39:57', '2018-05-01 13:06:54'),
(31, 'Structural Air Seal', 60, 'Gasket - 6 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 13:07:56'),
(32, 'GAS Empty', 2, '16 in a cage', 4, '2018-05-01 00:39:57', '2018-05-01 13:05:07'),
(33, 'Eurobond Laminates', 1840, 'Mushrooms', 4, '2018-05-01 00:39:57', '2018-05-01 13:01:20'),
(34, 'AdBlue', 12, 'Tube (10L)', 0, '2018-05-01 00:39:57', '2018-05-01 06:58:42'),
(35, 'All purpose cleaner', 10, '5L tube', 3, '2018-05-01 00:39:57', '2018-05-01 14:41:26'),
(36, 'Saber Saw Blades Small', 30, '5 in a pack', 4, '2018-05-01 00:39:57', '2018-05-01 13:11:32'),
(37, 'Saber Saw Blades Big', 0, '5 in a pack', 4, '2018-05-01 00:39:57', '2018-05-01 13:11:07'),
(38, 'Grinding Disk Big', 5, '25 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 13:09:29'),
(39, 'Grinding Disk Small', 0, '25 in a box', 1, '2018-05-01 00:39:57', '2018-05-01 13:10:39'),
(40, 'Sausage-Gun', 5, 'for sausage', 4, '2018-05-01 00:39:57', '2018-05-01 13:11:56'),
(41, 'Silicone-Gun', 3, '', 0, '2018-05-01 00:39:57', '2018-05-01 00:39:57'),
(42, 'Cut Stripe Insulation', 13, '1200 x 100 x 30', 1, '2018-05-01 00:39:57', '2018-05-01 12:57:41'),
(43, 'De Icer', 13, 'De froster', 2, '2018-05-01 00:39:57', '2018-05-01 12:57:17'),
(44, 'Drain Trays', 3, 'dip tray', 4, '2018-05-01 00:39:57', '2018-05-01 09:40:31'),
(45, 'Ductape', 36, '\"Gaffer\"', 4, '2018-05-01 00:39:57', '2018-05-01 12:49:14'),
(46, 'Dust Mask', 22, '10 in a box', 1, '2018-05-01 00:39:58', '2018-05-01 12:50:23'),
(47, 'Ears muffs', 3, 'Ear protection', 4, '2018-05-01 00:39:58', '2018-05-01 12:59:26'),
(48, 'Extension Leeds', 1, 'Power cables', 4, '2018-05-01 00:39:58', '2018-05-02 10:31:18'),
(49, 'Face Guards', 1, 'Safety', 4, '2018-05-01 00:39:58', '2018-05-01 14:44:47'),
(50, 'Fesco Fillet', 0, 'small toblerons', 1, '2018-05-01 00:39:58', '2018-05-01 14:43:08'),
(51, 'Fesco 20mm', 84, 'fiberboard', 1, '2018-05-01 00:39:58', '2018-05-06 04:24:06'),
(52, 'Fire Extinguisher', 8, 'Safety', 4, '2018-05-01 00:39:58', '2018-05-01 14:43:26'),
(53, 'Foam - Fire', 30, '12 in a box', 1, '2018-05-01 00:39:58', '2018-05-01 13:04:18'),
(54, 'Foam - Montage', 8, '12 in a box', 1, '2018-05-01 00:39:58', '2018-05-01 13:08:19'),
(55, 'Fleece', 3, '11 rolls in a palet', 4, '2018-05-01 00:39:58', '2018-05-01 13:02:29'),
(56, 'Glasses', 12, 'Eye protection', 1, '2018-05-01 00:39:58', '2018-05-01 13:08:52'),
(57, 'Grease', 10, 'machines', 4, '2018-05-01 00:39:58', '2018-05-01 14:46:04'),
(58, 'Green Steel Jerry Cans', 4, 'Diesel cans', 4, '2018-05-01 00:39:58', '2018-05-01 14:44:28'),
(59, 'Sticky Mat', 0, '', 0, '2018-05-01 00:39:58', '2018-05-01 00:39:58'),
(61, 'Synthetic liquid sealant', 17, 'Qty in Tins', 3, '2018-05-01 00:39:58', '2018-05-01 14:40:21'),
(62, 'Stretch Film', 30, 'Rolls', 4, '2018-05-01 00:39:58', '2018-05-01 17:33:55'),
(63, 'Universal Primer', 10, 'in a bucket', 4, '2018-05-01 00:39:58', '2018-05-01 13:10:04'),
(64, 'Overflow', 0, 'Square pipe', 4, '2018-05-01 00:39:58', '2018-05-01 14:45:40'),
(65, 'Spray Paint', 0, '', 0, '2018-05-01 00:39:58', '2018-05-01 00:39:58'),
(66, 'Paint Brush', 0, 'for painting', 4, '2018-05-01 00:39:58', '2018-05-01 17:34:24'),
(67, 'Roofing Tools', 17, '', 0, '2018-05-01 00:39:58', '2018-05-01 00:39:58'),
(68, 'Air Horn', 1, 'Lifting operations', 4, '2018-05-01 00:39:58', '2018-05-01 17:36:58'),
(70, 'Silicone White', 19, '12 in a box', 1, '2018-05-01 00:39:58', '2018-05-01 14:39:05'),
(71, 'Silcone Silver', 60, '12 in a box', 1, '2018-05-01 00:39:58', '2018-05-01 14:38:26'),
(72, 'Silicone Transparant', 17, '12 in a box', 1, '2018-05-01 00:39:59', '2018-05-01 14:38:48'),
(73, 'Sausage Black ARBO', 6, '20 in a box', 1, '2018-05-01 00:39:59', '2018-05-01 14:39:39'),
(74, 'Sausage Black Cortex', 16, '16 in a box', 1, '2018-05-01 00:39:59', '2018-05-01 13:05:50'),
(75, 'EPDM - 20 cm', 1, 'Qty in pallets', 4, '2018-05-01 00:39:59', '2018-05-01 13:00:30'),
(76, 'EPDM - 40 cm', 1, 'Qty in pallets', 4, '2018-05-01 00:39:59', '2018-05-01 13:00:54'),
(77, 'EPDM - 1 m', 1, 'Qty in pallets', 4, '2018-05-01 00:39:59', '2018-05-01 13:00:06'),
(78, 'Screen Wash', 3, '5L tube', 4, '2018-05-01 00:39:59', '2018-05-01 14:40:57'),
(79, 'Square White Foam Tape', 5, 'Qty in rolls', 4, '2018-05-01 00:39:59', '2018-05-01 14:47:14'),
(80, '115 mm insulation boards', 0, '1200x1200 Qty in boards', 4, '2018-05-01 00:39:59', '2018-05-01 14:37:34');

-- --------------------------------------------------------

--
-- Структура на таблица `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`) VALUES
(1, 'Keyboard', '10.00', 'Ergonomic and stylish!'),
(2, 'mouse', '5.00', 'Very good mouse');

-- --------------------------------------------------------

--
-- Структура на таблица `screw`
--

CREATE TABLE `screw` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `qty_unit_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `length` int(11) NOT NULL,
  `diameter` decimal(5,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `number_of_screws` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `screw`
--

INSERT INTO `screw` (`id`, `type_id`, `qty_unit_id`, `name`, `length`, `diameter`, `qty`, `description`, `updated_at`, `created_at`, `number_of_screws`) VALUES
(1, 2, 1, 'DF2-SS-LS-A15', 25, '6.30', 6, 'for flashings', '2018-05-07 19:44:03', '2018-05-07 07:36:22', 500),
(2, 2, 1, 'DF2-SS-LS-A15', 25, '6.30', 1, 'for flashings', '2018-05-07 19:44:16', '2018-05-07 07:37:46', 100),
(3, 2, 3, 'DF2-SS-LS-A15', 25, '6.30', 99, 'for flashings', '2018-05-07 19:44:28', '2018-05-07 07:38:37', 100),
(4, 2, 1, 'DF12-TD', 45, '6.30', 23, '100 in a box', '2018-05-07 19:44:41', '2018-05-07 07:39:37', 100),
(5, 2, 1, 'DF12-SS', 40, '5.50', 5, '2200 in a box', '2018-05-07 19:44:51', '2018-05-07 07:41:04', 2200),
(6, 2, 1, 'DF12-SS', 40, '5.50', 1, '200 in a box', '2018-05-07 19:44:59', '2018-05-07 07:41:43', 200),
(7, 2, 1, 'HTF', 57, '6.30', 12, 'for concrete', '2018-05-07 19:52:42', '2018-05-07 07:42:32', 100),
(8, 2, 1, 'DF3-SS-A15', 25, '5.50', 3, 'washer', '2018-05-07 19:53:55', '2018-05-07 07:43:54', 1000),
(9, 2, 1, 'DF3-TD', 30, '6.30', 22, 'metal washer built in', '2018-05-07 19:54:11', '2018-05-07 07:45:18', 800),
(10, 2, 1, 'DF3-TD', 30, '6.30', 1, 'metal washer built in', '2018-05-07 19:54:30', '2018-05-07 07:48:28', 100),
(11, 2, 1, 'DF6-TD', 30, '6.30', 76, 'metal washer built in', '2018-05-07 19:54:44', '2018-05-07 07:50:10', 500),
(12, 2, 1, 'DF25', 65, '6.30', 19, 'drill tip', '2018-05-07 19:55:04', '2018-05-07 07:51:47', 500),
(13, 2, 1, 'DF6-SS-A15', 30, '5.50', 15, 'with washer', '2018-05-07 19:55:31', '2018-05-07 07:53:56', 1000),
(14, 2, 1, 'DF3-SSA4-P', 25, '5.50', 8, 'star head', '2018-05-07 19:53:23', '2018-05-07 07:56:23', 5000),
(15, 2, 1, 'DF3-SSA4-P', 75, '5.50', 5, 'star head', '2018-05-07 19:53:40', '2018-05-07 07:59:33', 1000),
(16, 1, 2, 'HDS 40 mm', 40, '5.50', 46, 'for cement boards', '2018-05-07 19:49:58', '2018-05-07 08:54:26', 1000),
(17, 1, 2, 'HDS 150 mm', 150, '5.50', 2, NULL, '2018-05-07 19:56:06', '2018-05-07 08:55:35', 1000),
(18, 1, 2, 'HDS 175 mm', 175, '5.50', 123, NULL, '2018-05-07 19:56:22', '2018-05-07 08:56:17', 1000),
(19, 1, 2, 'HDS 305 mm', 305, '5.50', 7, NULL, '2018-05-07 19:56:29', '2018-05-07 08:57:25', 250),
(20, 1, 1, 'HDS 405 mm', 405, '5.50', 3, NULL, '2018-05-07 19:56:35', '2018-05-07 08:58:13', 250),
(21, 1, 1, 'HDS 455 mm', 455, '5.50', 55, NULL, '2018-05-07 19:56:43', '2018-05-07 08:58:53', 250),
(22, 1, 2, 'HDS 250 mm', 250, '5.50', 0, NULL, '2018-05-07 19:50:34', '2018-05-07 08:59:31', 0),
(23, 2, 1, 'DF3-SSA4-P', 50, '5.50', 3, 'star head', '2018-05-07 20:30:46', '2018-05-07 20:30:46', 1000);

-- --------------------------------------------------------

--
-- Структура на таблица `screw_qty_unit`
--

CREATE TABLE `screw_qty_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `screw_qty_unit`
--

INSERT INTO `screw_qty_unit` (`id`, `name`) VALUES
(1, 'Boxes'),
(2, 'Buckets'),
(3, 'Packs');

-- --------------------------------------------------------

--
-- Структура на таблица `screw_type`
--

CREATE TABLE `screw_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `screw_type`
--

INSERT INTO `screw_type` (`id`, `name`) VALUES
(1, 'Fixings'),
(2, 'Roof Screws');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isolation`
--
ALTER TABLE `isolation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screw`
--
ALTER TABLE `screw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D05DF2ACC54C8C93` (`type_id`),
  ADD KEY `IDX_D05DF2AC1E5E22AA` (`qty_unit_id`);

--
-- Indexes for table `screw_qty_unit`
--
ALTER TABLE `screw_qty_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screw_type`
--
ALTER TABLE `screw_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isolation`
--
ALTER TABLE `isolation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `screw`
--
ALTER TABLE `screw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `screw_qty_unit`
--
ALTER TABLE `screw_qty_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `screw_type`
--
ALTER TABLE `screw_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `screw`
--
ALTER TABLE `screw`
  ADD CONSTRAINT `FK_D05DF2AC1E5E22AA` FOREIGN KEY (`qty_unit_id`) REFERENCES `screw_qty_unit` (`id`),
  ADD CONSTRAINT `FK_D05DF2ACC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `screw_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
