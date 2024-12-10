-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 07:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dolis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `allergens` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `storage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `image`, `description`, `allergens`, `storage`) VALUES
(1, 'Carrot Cake', '900', 'carrot.png', 'A soft, spiced dessert made with grated carrots and topped with creamy cream cheese frosting. Sweet and flavorful, it\'s perfect for any occasion!', 'Wheat, Egg, Milk, Sulphites, Nuts', 'Chilled 2-3 days'),
(2, 'Chocolate Cake', '900', 'chocolate.png', 'A rich and moist dessert made with cocoa, offering a deep and indulgent chocolate flavor. Often layered or topped with creamy chocolate frosting, it\'s a classic favorite for birthdays, parties, and special occasions. Perfect for chocolate lovers!\n\na rich ', 'Wheat (gluten), Eggs, Dairy (milk/butter), Cocoa', 'Chilled 3-4 days'),
(3, 'Mango Cake', '900', 'mango.png', 'A light and fluffy dessert made with fresh mangoes, giving it a sweet and tropical flavor. Often layered with mango-flavored cream or frosting, it’s a refreshing treat perfect for any occasion!', 'Wheat/Gluten, Soy, Egg, Milk/Dairy, Tree Nuts', 'Chilled 3-5 days'),
(4, 'Classic Chocolate Chip', '50', 'chocolatecookie.png', 'Classic Chocolate Chip is a timeless treat featuring soft, chewy cookies loaded with rich, melty chocolate chips—perfectly baked for a delightful balance of sweetness and comfort in every bite.', 'Wheat, Dairy, Eggs, Soy, Cocoa', 'Chilled 3-4 days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
