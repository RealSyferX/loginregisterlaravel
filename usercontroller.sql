-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2024 at 02:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usercontroller`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `product_name`, `product_img`, `price`, `quantity`) VALUES
(1, 'K.', 'product_images/tDk2RXfpwNJ1dIaiAoSsXXyOXW6TnH5q3fn5bQNF.webp', 111, 11),
(3, 'DAM', 'product_images/koAMDldUSkaSogXe7KsTqsko9oI8Oh6Q5GFZPSto.webp', 40, 1337),
(4, 'FlyE', 'product_images/B3UssDa6xTLTwK9YrR3AwSvVTlnSJczls3rYI2Gc.webp', 30, 12629),
(5, 'Ketamine', 'product_images/RpGdd0Ku5wLfzhA9oHDbvArs1eZ0hRmxhV3DkcgL.webp', 140, 49),
(6, 'CISA/NSA Hacking Tool', 'product_images/kT6kvxsph5LiCZlY7OOSHNaXqV7pb67njPtV64OS.webp', 7980000, 5),
(7, 'hehe', 'product_images/F51mb8HUtDAvsFpbdS0iH5bthvHpUa4ZDLDUNnAC.jpg', 11, 232);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `remember_token`, `email_verified_at`) VALUES
('asd@asd.asd', 'asd@asd.asd', 'asd', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aaa@aa.aa', NULL, 'aaa@aa.aa', NULL, '$2y$12$Q.t68ZaPhJepwU/gsXf8X.dyooXUtX0.Zq7ZmefsujxkrV7U72NbC', NULL, '2024-08-18 18:12:22', '2024-08-18 18:12:22'),
(2, '123@123.123', NULL, '123@123.123', NULL, '$2y$12$0n6MehOobHhsCyfy/FAvsOfXGAoaGXtN60wDHTZQf7wwOSVz4nSpG', NULL, '2024-08-18 18:13:55', '2024-08-18 18:13:55'),
(4, 'abc', NULL, 'abc@abc.abc', NULL, '$2y$12$3RYZRooHZD5tGYqvCJlhE.QPSGaNRzUVoLMGCCxEk4vtXPKgcSIDO', NULL, '2024-08-18 18:15:48', '2024-08-18 18:15:48'),
(7, 'awawd@ffr2.21', NULL, 'awawd@ffr2.21', NULL, '$2y$12$e9Ey4FZ3sb58Uvz3u6j4uuwtPfJxgycS9PRTAGvFBNccHSQryv5L2', NULL, '2024-08-25 22:51:47', '2024-08-25 22:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
