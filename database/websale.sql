-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 08:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websale`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'T-Shirt'),
(2, 'Dress'),
(3, 'Bloomers'),
(4, 'Blouse'),
(5, 'Bodysuit'),
(6, 'Bra'),
(7, 'Cardigan'),
(8, 'Cloak'),
(9, 'Coat'),
(10, 'Dungarees'),
(11, 'Jacket'),
(12, 'Jeans'),
(13, 'Jumper'),
(14, 'Kilt'),
(15, 'Kimono'),
(16, 'Knickerbockers'),
(17, 'Shawl'),
(18, 'Shirt'),
(19, 'Shorts'),
(20, 'Skirt'),
(21, 'Sock'),
(22, 'Sweater'),
(23, 'Swimsuit'),
(24, 'Teddy'),
(25, 'Tie'),
(26, 'Tights'),
(27, 'Tops'),
(28, 'Waistcoat');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `feedback` longtext COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `size` char(4) COLLATE utf32_unicode_ci DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `price`, `size`, `total_money`) VALUES
(2920, 1, 2, 500, 'XL', 500),
(1789, 1, 1, 1000, 'XL', 1000),
(3268, 2, 4, 87, 'XL', 348),
(9988, 2, 9, 47, 'XL', 94),
(9799, 3, 3, 95, 'XL', 190),
(3674, 3, 23, 62, 'XL', 248),
(5157, 3, 4, 87, 'XL', 174);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `email` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `phone` char(11) COLLATE utf32_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf32_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `order_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `phone`, `address`, `note`, `status`, `order_time`) VALUES
(1, 'VŨ TUẤN kIỆT', 'asdas@mmm', '0562114814', 'Thuỷ Nguyên', 'This is very good', 1, '2022-07-09 15:23:30'),
(2, 'aaa', 'a.@cc.ccc', '1111111111', 'aaa', 'aaaa', 1, '2022-07-10 17:19:43'),
(3, 'Mai Dao Tuan Thanh', 'maithanh0131@gmail.com', '0828768112', 'Hà Trung, Thanh Hóa', NULL, 1, '2022-07-10 17:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `brand` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `persons_type` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sale_numbers` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `brand`, `persons_type`, `quantity`, `price`, `category_id`, `sale_numbers`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Generic Granite', 'BURBERRY', 'MEN', 538, 60, 19, 1008, '<p>The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive</p>', '2022-07-11 00:26:35', '2022-07-10 17:50:08'),
(2, 'Electronic Plastic Sausages', 'BURBERRY', 'kid', 922, 57, 2, 15, 'The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(3, 'Fantastic Metal Towels', 'ARMANI', 'men', 21, 95, 22, 17, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(4, 'Modern Plastic Keyboard', 'PRADA', 'women', 413, 87, 9, 18, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(5, 'Luxurious Frozen Salad', 'HOUSE OF VERSACE', 'women', 542, 72, 9, 28, 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(6, 'Awesome Plastic Pants', 'HOUSE OF VERSACE', 'men', 574, 47, 11, 27, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(7, 'Luxurious Rubber Shirt', 'BURBERRY', 'kid', 559, 81, 19, 14, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(8, 'Small Metal Sausages', 'HERMES', 'men', 938, 56, 7, 24, 'The Football Is Good For Training And Recreational Purposes', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(9, 'Licensed Cotton Chips', 'RALPH LAUREN', 'men', 539, 47, 3, 3, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(10, 'Generic Fresh Fish', 'FENDI', 'kid', 202, 85, 8, 5, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(11, 'Oriental Plastic Mouse', 'LOUIS VUITTON', 'women', 409, 76, 4, 12, 'The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(12, 'Gorgeous Granite Chair', 'FENDI', 'men', 769, 57, 3, 10, 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(13, 'Elegant Granite Towels', 'ARMANI', 'men', 207, 98, 5, 15, 'The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(14, 'Licensed Fresh Salad', 'CHANEL', 'women', 327, 85, 21, 3, 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(15, 'Handmade Wooden Bacon', 'HOUSE OF VERSACE', 'men', 963, 71, 13, 26, 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(16, 'Sleek Metal Gloves', 'LOUIS VUITTON', 'kid', 96, 61, 20, 2, 'The Football Is Good For Training And Recreational Purposes', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(17, 'Electronic Frozen Fish', 'ARMANI', 'women', 818, 92, 17, 8, 'The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(18, 'Small Granite Sausages', 'HOUSE OF VERSACE', 'men', 933, 88, 13, 16, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(19, 'Bespoke Frozen Pants', 'HERMES', 'kid', 983, 58, 16, 20, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(20, 'Small Cotton Bacon', 'HERMES', 'women', 560, 47, 7, 21, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(21, 'Electronic Wooden Chair', 'HERMES', 'women', 894, 49, 17, 14, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(22, 'Modern Bronze Soap', 'CHANEL', 'kid', 732, 71, 3, 16, 'Boston\'s most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(23, 'Recycled Soft Keyboard', 'HOUSE OF VERSACE', 'women', 986, 62, 5, 5, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(24, 'Handmade Wooden Bike', 'CHANEL', 'kid', 259, 94, 16, 11, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(25, 'Licensed Soft Computer', 'FENDI', 'women', 681, 54, 23, 19, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(26, 'Unbranded Fresh Sausages', 'GUCCI', 'kid', 891, 85, 17, 20, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(27, 'Bespoke Granite Pants', 'HOUSE OF VERSACE', 'men', 307, 77, 7, 3, 'The Football Is Good For Training And Recreational Purposes', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(28, 'Practical Wooden Soap', 'HERMES', 'kid', 326, 50, 21, 19, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(29, 'Sleek Cotton Keyboard', 'HOUSE OF VERSACE', 'kid', 968, 74, 11, 25, 'Carbonite web goalkeeper gloves are ergonomically designed to give easy fit', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(30, 'Intelligent Plastic Tuna', 'ARMANI', 'kid', 635, 86, 16, 2, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(31, 'Rustic Fresh Bike', 'FENDI', 'men', 145, 70, 19, 23, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(32, 'Bespoke Fresh Sausages', 'HOUSE OF VERSACE', 'men', 286, 82, 16, 9, 'Carbonite web goalkeeper gloves are ergonomically designed to give easy fit', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(33, 'Generic Cotton Shirt', 'ARMANI', 'women', 802, 75, 4, 1, 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(34, 'Handmade Fresh Shirt', 'FENDI', 'kid', 448, 83, 2, 1, 'New range of formal shirts are designed keeping you in mind. With fits and styling that will make you stand apart', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(35, 'Rustic Metal Chicken', 'RALPH LAUREN', 'women', 629, 71, 11, 25, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(36, 'Generic Granite Tuna', 'BURBERRY', 'kid', 460, 80, 24, 4, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(37, 'Sleek Concrete Table', 'HERMES', 'kid', 812, 95, 21, 29, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(38, 'Generic Bronze Soap', 'GUCCI', 'women', 292, 52, 11, 5, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(39, 'Modern Bronze Pants', 'BURBERRY', 'men', 524, 97, 15, 16, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(40, 'Recycled Wooden Chips', 'LOUIS VUITTON', 'women', 106, 63, 13, 13, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(41, 'Practical Rubber Car', 'PRADA', 'women', 408, 60, 11, 22, 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(42, 'Luxurious Fresh Bacon', 'HERMES', 'kid', 7, 69, 10, 11, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(43, 'Incredible Metal Shirt', 'HERMES', 'men', 312, 48, 24, 5, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(44, 'Modern Wooden Chips', 'BURBERRY', 'kid', 633, 47, 7, 17, 'Carbonite web goalkeeper gloves are ergonomically designed to give easy fit', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(45, 'Fantastic Plastic Shoes', 'PRADA', 'men', 574, 83, 4, 19, 'The beautiful range of Apple Naturalé that has an exciting mix of natural ingredients. With the Goodness of 100% Natural Ingredients', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(46, 'Modern Wooden Gloves', 'PRADA', 'kid', 167, 71, 18, 5, 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(47, 'Small Rubber Salad', 'HERMES', 'men', 810, 54, 17, 20, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(48, 'Gorgeous Steel Salad', 'BURBERRY', 'men', 82, 72, 15, 20, 'Boston\'s most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(49, 'Electronic Soft Ball', 'BURBERRY', 'women', 692, 55, 12, 26, 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(50, 'Awesome Plastic Soap', 'HERMES', 'men', 909, 40, 3, 17, 'Carbonite web goalkeeper gloves are ergonomically designed to give easy fit', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(51, 'Bespoke Cotton Tuna', 'ARMANI', 'women', 251, 62, 3, 24, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(52, 'Modern Soft Bacon', 'FENDI', 'men', 502, 51, 3, 5, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(53, 'Sleek Bronze Keyboard', 'ARMANI', 'kid', 916, 72, 15, 22, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(54, 'Gorgeous Cotton Sausages', 'HERMES', 'men', 196, 48, 1, 12, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(55, 'Handmade Steel Keyboard', 'HERMES', 'women', 258, 78, 21, 6, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(56, 'Licensed Wooden Pants', 'PRADA', 'kid', 670, 55, 21, 5, 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(57, 'Luxurious Soft Keyboard', 'HERMES', 'kid', 359, 62, 15, 20, 'Boston\'s most advanced compression wear technology increases muscle oxygenation, stabilizes active muscles', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(58, 'Tasty Wooden Cheese', 'ARMANI', 'kid', 170, 45, 16, 18, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(59, 'Tasty Frozen Bike', 'HOUSE OF VERSACE', 'men', 619, 71, 3, 18, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(60, 'Rustic Soft Ball', 'HERMES', 'women', 242, 98, 1, 21, 'The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12 months battery life and modern design', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(61, 'Fantastic Fresh Salad', 'CHANEL', 'women', 649, 43, 20, 18, 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(62, 'Rustic Soft Chicken', 'CHANEL', 'men', 194, 95, 15, 28, 'Andy shoes are designed to keeping in mind durability as well as trends, the most stylish range of shoes & sandals', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(63, 'Luxurious Granite Computer', 'PRADA', 'men', 982, 74, 13, 18, 'The slim & simple Maple Gaming Keyboard from Dev Byte comes with a sleek body and 7- Color RGB LED Back-lighting for smart functionality', '2022-07-10 23:22:18', '2022-07-10 23:22:18'),
(64, 'Rustic Concrete Tuna', 'PRADA', 'kid', 996, 60, 22, 19, 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive', '2022-07-10 23:22:18', '2022-07-10 23:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_product` int(11) DEFAULT NULL,
  `size` char(4) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_product`, `size`) VALUES
(1, 'XL'),
(2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnails_detail`
--

CREATE TABLE `thumbnails_detail` (
  `id_product` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `thumbnails_detail`
--

INSERT INTO `thumbnails_detail` (`id_product`, `url`) VALUES
(1, 'shop/shop-1.jpg'),
(1, 'product/details/product-1_1.jpg'),
(1, 'product/details/thumb-1_1.jpg'),
(1, 'product/details/product-1_2.jpg'),
(1, 'product/details/thumb-1_2.jpg'),
(1, 'product/details/product-1_3.jpg'),
(1, 'product/details/thumb-1_3.jpg'),
(1, 'product/details/product-1_4.jpg'),
(1, 'product/details/thumb-1_4.jpg'),
(2, 'shop/shop-2.jpg'),
(2, 'product/details/product-2_1.jpg'),
(2, 'product/details/thumb-2_1.jpg'),
(2, 'product/details/product-2_2.jpg'),
(2, 'product/details/thumb-2_2.jpg'),
(2, 'product/details/product-2_3.jpg'),
(2, 'product/details/thumb-2_3.jpg'),
(2, 'product/details/product-2_4.jpg'),
(2, 'product/details/thumb-2_4.jpg'),
(3, 'shop/shop-3.jpg'),
(3, 'product/details/product-3_1.jpg'),
(3, 'product/details/thumb-3_1.jpg'),
(3, 'product/details/product-3_2.jpg'),
(3, 'product/details/thumb-3_2.jpg'),
(3, 'product/details/product-3_3.jpg'),
(3, 'product/details/thumb-3_3.jpg'),
(3, 'product/details/product-3_4.jpg'),
(3, 'product/details/thumb-3_4.jpg'),
(4, 'shop/shop-4.jpg'),
(4, 'product/details/product-4_1.jpg'),
(4, 'product/details/thumb-4_1.jpg'),
(4, 'product/details/product-4_2.jpg'),
(4, 'product/details/thumb-4_2.jpg'),
(4, 'product/details/product-4_3.jpg'),
(4, 'product/details/thumb-4_3.jpg'),
(4, 'product/details/product-4_4.jpg'),
(4, 'product/details/thumb-4_4.jpg'),
(5, 'shop/shop-5.jpg'),
(5, 'product/details/product-5_1.jpg'),
(5, 'product/details/thumb-5_1.jpg'),
(5, 'product/details/product-5_2.jpg'),
(5, 'product/details/thumb-5_2.jpg'),
(5, 'product/details/product-5_3.jpg'),
(5, 'product/details/thumb-5_3.jpg'),
(5, 'product/details/product-5_4.jpg'),
(5, 'product/details/thumb-5_4.jpg'),
(6, 'shop/shop-6.jpg'),
(6, 'product/details/product-6_1.jpg'),
(6, 'product/details/thumb-6_1.jpg'),
(6, 'product/details/product-6_2.jpg'),
(6, 'product/details/thumb-6_2.jpg'),
(6, 'product/details/product-6_3.jpg'),
(6, 'product/details/thumb-6_3.jpg'),
(6, 'product/details/product-6_4.jpg'),
(6, 'product/details/thumb-6_4.jpg'),
(7, 'shop/shop-7.jpg'),
(7, 'product/details/product-7_1.jpg'),
(7, 'product/details/thumb-7_1.jpg'),
(7, 'product/details/product-7_2.jpg'),
(7, 'product/details/thumb-7_2.jpg'),
(7, 'product/details/product-7_3.jpg'),
(7, 'product/details/thumb-7_3.jpg'),
(7, 'product/details/product-7_4.jpg'),
(7, 'product/details/thumb-7_4.jpg'),
(8, 'shop/shop-8.jpg'),
(8, 'product/details/product-8_1.jpg'),
(8, 'product/details/thumb-8_1.jpg'),
(8, 'product/details/product-8_2.jpg'),
(8, 'product/details/thumb-8_2.jpg'),
(8, 'product/details/product-8_3.jpg'),
(8, 'product/details/thumb-8_3.jpg'),
(8, 'product/details/product-8_4.jpg'),
(8, 'product/details/thumb-8_4.jpg'),
(9, 'shop/shop-9.jpg'),
(9, 'product/details/product-9_1.jpg'),
(9, 'product/details/thumb-9_1.jpg'),
(9, 'product/details/product-9_2.jpg'),
(9, 'product/details/thumb-9_2.jpg'),
(9, 'product/details/product-9_3.jpg'),
(9, 'product/details/thumb-9_3.jpg'),
(9, 'product/details/product-9_4.jpg'),
(9, 'product/details/thumb-9_4.jpg'),
(10, 'shop/shop-10.jpg'),
(10, 'product/details/product-10_1.jpg'),
(10, 'product/details/thumb-10_1.jpg'),
(10, 'product/details/product-10_2.jpg'),
(10, 'product/details/thumb-10_2.jpg'),
(10, 'product/details/product-10_3.jpg'),
(10, 'product/details/thumb-10_3.jpg'),
(10, 'product/details/product-10_4.jpg'),
(10, 'product/details/thumb-10_4.jpg'),
(11, 'shop/shop-11.jpg'),
(11, 'product/details/product-11_1.jpg'),
(11, 'product/details/thumb-11_1.jpg'),
(11, 'product/details/product-11_2.jpg'),
(11, 'product/details/thumb-11_2.jpg'),
(11, 'product/details/product-11_3.jpg'),
(11, 'product/details/thumb-11_3.jpg'),
(11, 'product/details/product-11_4.jpg'),
(11, 'product/details/thumb-11_4.jpg'),
(12, 'shop/shop-12.jpg'),
(12, 'product/details/product-12_1.jpg'),
(12, 'product/details/thumb-12_1.jpg'),
(12, 'product/details/product-12_2.jpg'),
(12, 'product/details/thumb-12_2.jpg'),
(12, 'product/details/product-12_3.jpg'),
(12, 'product/details/thumb-12_3.jpg'),
(12, 'product/details/product-12_4.jpg'),
(12, 'product/details/thumb-12_4.jpg'),
(13, 'shop/shop-13.jpg'),
(13, 'product/details/product-13_1.jpg'),
(13, 'product/details/thumb-13_1.jpg'),
(13, 'product/details/product-13_2.jpg'),
(13, 'product/details/thumb-13_2.jpg'),
(13, 'product/details/product-13_3.jpg'),
(13, 'product/details/thumb-13_3.jpg'),
(13, 'product/details/product-13_4.jpg'),
(13, 'product/details/thumb-13_4.jpg'),
(14, 'shop/shop-14.jpg'),
(14, 'product/details/product-14_1.jpg'),
(14, 'product/details/thumb-14_1.jpg'),
(14, 'product/details/product-14_2.jpg'),
(14, 'product/details/thumb-14_2.jpg'),
(14, 'product/details/product-14_3.jpg'),
(14, 'product/details/thumb-14_3.jpg'),
(14, 'product/details/product-14_4.jpg'),
(14, 'product/details/thumb-14_4.jpg'),
(15, 'shop/shop-15.jpg'),
(15, 'product/details/product-15_1.jpg'),
(15, 'product/details/thumb-15_1.jpg'),
(15, 'product/details/product-15_2.jpg'),
(15, 'product/details/thumb-15_2.jpg'),
(15, 'product/details/product-15_3.jpg'),
(15, 'product/details/thumb-15_3.jpg'),
(15, 'product/details/product-15_4.jpg'),
(15, 'product/details/thumb-15_4.jpg'),
(16, 'shop/shop-16.jpg'),
(16, 'product/details/product-16_1.jpg'),
(16, 'product/details/thumb-16_1.jpg'),
(16, 'product/details/product-16_2.jpg'),
(16, 'product/details/thumb-16_2.jpg'),
(16, 'product/details/product-16_3.jpg'),
(16, 'product/details/thumb-16_3.jpg'),
(16, 'product/details/product-16_4.jpg'),
(16, 'product/details/thumb-16_4.jpg'),
(17, 'shop/shop-17.jpg'),
(17, 'product/details/product-17_1.jpg'),
(17, 'product/details/thumb-17_1.jpg'),
(17, 'product/details/product-17_2.jpg'),
(17, 'product/details/thumb-17_2.jpg'),
(17, 'product/details/product-17_3.jpg'),
(17, 'product/details/thumb-17_3.jpg'),
(17, 'product/details/product-17_4.jpg'),
(17, 'product/details/thumb-17_4.jpg'),
(18, 'shop/shop-18.jpg'),
(18, 'product/details/product-18_1.jpg'),
(18, 'product/details/thumb-18_1.jpg'),
(18, 'product/details/product-18_2.jpg'),
(18, 'product/details/thumb-18_2.jpg'),
(18, 'product/details/product-18_3.jpg'),
(18, 'product/details/thumb-18_3.jpg'),
(18, 'product/details/product-18_4.jpg'),
(18, 'product/details/thumb-18_4.jpg'),
(19, 'shop/shop-19.jpg'),
(19, 'product/details/product-19_1.jpg'),
(19, 'product/details/thumb-19_1.jpg'),
(19, 'product/details/product-19_2.jpg'),
(19, 'product/details/thumb-19_2.jpg'),
(19, 'product/details/product-19_3.jpg'),
(19, 'product/details/thumb-19_3.jpg'),
(19, 'product/details/product-19_4.jpg'),
(19, 'product/details/thumb-19_4.jpg'),
(20, 'shop/shop-20.jpg'),
(20, 'product/details/product-20_1.jpg'),
(20, 'product/details/thumb-20_1.jpg'),
(20, 'product/details/product-20_2.jpg'),
(20, 'product/details/thumb-20_2.jpg'),
(20, 'product/details/product-20_3.jpg'),
(20, 'product/details/thumb-20_3.jpg'),
(20, 'product/details/product-20_4.jpg'),
(20, 'product/details/thumb-20_4.jpg'),
(21, 'shop/shop-21.jpg'),
(21, 'product/details/product-21_1.jpg'),
(21, 'product/details/thumb-21_1.jpg'),
(21, 'product/details/product-21_2.jpg'),
(21, 'product/details/thumb-21_2.jpg'),
(21, 'product/details/product-21_3.jpg'),
(21, 'product/details/thumb-21_3.jpg'),
(21, 'product/details/product-21_4.jpg'),
(21, 'product/details/thumb-21_4.jpg'),
(22, 'shop/shop-22.jpg'),
(22, 'product/details/product-22_1.jpg'),
(22, 'product/details/thumb-22_1.jpg'),
(22, 'product/details/product-22_2.jpg'),
(22, 'product/details/thumb-22_2.jpg'),
(22, 'product/details/product-22_3.jpg'),
(22, 'product/details/thumb-22_3.jpg'),
(22, 'product/details/product-22_4.jpg'),
(22, 'product/details/thumb-22_4.jpg'),
(23, 'shop/shop-23.jpg'),
(23, 'product/details/product-23_1.jpg'),
(23, 'product/details/thumb-23_1.jpg'),
(23, 'product/details/product-23_2.jpg'),
(23, 'product/details/thumb-23_2.jpg'),
(23, 'product/details/product-23_3.jpg'),
(23, 'product/details/thumb-23_3.jpg'),
(23, 'product/details/product-23_4.jpg'),
(23, 'product/details/thumb-23_4.jpg'),
(24, 'shop/shop-24.jpg'),
(24, 'product/details/product-24_1.jpg'),
(24, 'product/details/thumb-24_1.jpg'),
(24, 'product/details/product-24_2.jpg'),
(24, 'product/details/thumb-24_2.jpg'),
(24, 'product/details/product-24_3.jpg'),
(24, 'product/details/thumb-24_3.jpg'),
(24, 'product/details/product-24_4.jpg'),
(24, 'product/details/thumb-24_4.jpg'),
(25, 'shop/shop-25.jpg'),
(25, 'product/details/product-25_1.jpg'),
(25, 'product/details/thumb-25_1.jpg'),
(25, 'product/details/product-25_2.jpg'),
(25, 'product/details/thumb-25_2.jpg'),
(25, 'product/details/product-25_3.jpg'),
(25, 'product/details/thumb-25_3.jpg'),
(25, 'product/details/product-25_4.jpg'),
(25, 'product/details/thumb-25_4.jpg'),
(26, 'shop/shop-26.jpg'),
(26, 'product/details/product-26_1.jpg'),
(26, 'product/details/thumb-26_1.jpg'),
(26, 'product/details/product-26_2.jpg'),
(26, 'product/details/thumb-26_2.jpg'),
(26, 'product/details/product-26_3.jpg'),
(26, 'product/details/thumb-26_3.jpg'),
(26, 'product/details/product-26_4.jpg'),
(26, 'product/details/thumb-26_4.jpg'),
(27, 'shop/shop-27.jpg'),
(27, 'product/details/product-27_1.jpg'),
(27, 'product/details/thumb-27_1.jpg'),
(27, 'product/details/product-27_2.jpg'),
(27, 'product/details/thumb-27_2.jpg'),
(27, 'product/details/product-27_3.jpg'),
(27, 'product/details/thumb-27_3.jpg'),
(27, 'product/details/product-27_4.jpg'),
(27, 'product/details/thumb-27_4.jpg'),
(28, 'shop/shop-28.jpg'),
(28, 'product/details/product-28_1.jpg'),
(28, 'product/details/thumb-28_1.jpg'),
(28, 'product/details/product-28_2.jpg'),
(28, 'product/details/thumb-28_2.jpg'),
(28, 'product/details/product-28_3.jpg'),
(28, 'product/details/thumb-28_3.jpg'),
(28, 'product/details/product-28_4.jpg'),
(28, 'product/details/thumb-28_4.jpg'),
(29, 'shop/shop-29.jpg'),
(29, 'product/details/product-29_1.jpg'),
(29, 'product/details/thumb-29_1.jpg'),
(29, 'product/details/product-29_2.jpg'),
(29, 'product/details/thumb-29_2.jpg'),
(29, 'product/details/product-29_3.jpg'),
(29, 'product/details/thumb-29_3.jpg'),
(29, 'product/details/product-29_4.jpg'),
(29, 'product/details/thumb-29_4.jpg'),
(30, 'shop/shop-30.jpg'),
(30, 'product/details/product-30_1.jpg'),
(30, 'product/details/thumb-30_1.jpg'),
(30, 'product/details/product-30_2.jpg'),
(30, 'product/details/thumb-30_2.jpg'),
(30, 'product/details/product-30_3.jpg'),
(30, 'product/details/thumb-30_3.jpg'),
(30, 'product/details/product-30_4.jpg'),
(30, 'product/details/thumb-30_4.jpg'),
(31, 'shop/shop-31.jpg'),
(31, 'product/details/product-31_1.jpg'),
(31, 'product/details/thumb-31_1.jpg'),
(31, 'product/details/product-31_2.jpg'),
(31, 'product/details/thumb-31_2.jpg'),
(31, 'product/details/product-31_3.jpg'),
(31, 'product/details/thumb-31_3.jpg'),
(31, 'product/details/product-31_4.jpg'),
(31, 'product/details/thumb-31_4.jpg'),
(32, 'shop/shop-32.jpg'),
(32, 'product/details/product-32_1.jpg'),
(32, 'product/details/thumb-32_1.jpg'),
(32, 'product/details/product-32_2.jpg'),
(32, 'product/details/thumb-32_2.jpg'),
(32, 'product/details/product-32_3.jpg'),
(32, 'product/details/thumb-32_3.jpg'),
(32, 'product/details/product-32_4.jpg'),
(32, 'product/details/thumb-32_4.jpg'),
(33, 'shop/shop-33.jpg'),
(33, 'product/details/product-33_1.jpg'),
(33, 'product/details/thumb-33_1.jpg'),
(33, 'product/details/product-33_2.jpg'),
(33, 'product/details/thumb-33_2.jpg'),
(33, 'product/details/product-33_3.jpg'),
(33, 'product/details/thumb-33_3.jpg'),
(33, 'product/details/product-33_4.jpg'),
(33, 'product/details/thumb-33_4.jpg'),
(34, 'shop/shop-34.jpg'),
(34, 'product/details/product-34_1.jpg'),
(34, 'product/details/thumb-34_1.jpg'),
(34, 'product/details/product-34_2.jpg'),
(34, 'product/details/thumb-34_2.jpg'),
(34, 'product/details/product-34_3.jpg'),
(34, 'product/details/thumb-34_3.jpg'),
(34, 'product/details/product-34_4.jpg'),
(34, 'product/details/thumb-34_4.jpg'),
(35, 'shop/shop-35.jpg'),
(35, 'product/details/product-35_1.jpg'),
(35, 'product/details/thumb-35_1.jpg'),
(35, 'product/details/product-35_2.jpg'),
(35, 'product/details/thumb-35_2.jpg'),
(35, 'product/details/product-35_3.jpg'),
(35, 'product/details/thumb-35_3.jpg'),
(35, 'product/details/product-35_4.jpg'),
(35, 'product/details/thumb-35_4.jpg'),
(36, 'shop/shop-36.jpg'),
(36, 'product/details/product-36_1.jpg'),
(36, 'product/details/thumb-36_1.jpg'),
(36, 'product/details/product-36_2.jpg'),
(36, 'product/details/thumb-36_2.jpg'),
(36, 'product/details/product-36_3.jpg'),
(36, 'product/details/thumb-36_3.jpg'),
(36, 'product/details/product-36_4.jpg'),
(36, 'product/details/thumb-36_4.jpg'),
(37, 'shop/shop-37.jpg'),
(37, 'product/details/product-37_1.jpg'),
(37, 'product/details/thumb-37_1.jpg'),
(37, 'product/details/product-37_2.jpg'),
(37, 'product/details/thumb-37_2.jpg'),
(37, 'product/details/product-37_3.jpg'),
(37, 'product/details/thumb-37_3.jpg'),
(37, 'product/details/product-37_4.jpg'),
(37, 'product/details/thumb-37_4.jpg'),
(38, 'shop/shop-38.jpg'),
(38, 'product/details/product-38_1.jpg'),
(38, 'product/details/thumb-38_1.jpg'),
(38, 'product/details/product-38_2.jpg'),
(38, 'product/details/thumb-38_2.jpg'),
(38, 'product/details/product-38_3.jpg'),
(38, 'product/details/thumb-38_3.jpg'),
(38, 'product/details/product-38_4.jpg'),
(38, 'product/details/thumb-38_4.jpg'),
(39, 'shop/shop-39.jpg'),
(39, 'product/details/product-39_1.jpg'),
(39, 'product/details/thumb-39_1.jpg'),
(39, 'product/details/product-39_2.jpg'),
(39, 'product/details/thumb-39_2.jpg'),
(39, 'product/details/product-39_3.jpg'),
(39, 'product/details/thumb-39_3.jpg'),
(39, 'product/details/product-39_4.jpg'),
(39, 'product/details/thumb-39_4.jpg'),
(40, 'shop/shop-40.jpg'),
(40, 'product/details/product-40_1.jpg'),
(40, 'product/details/thumb-40_1.jpg'),
(40, 'product/details/product-40_2.jpg'),
(40, 'product/details/thumb-40_2.jpg'),
(40, 'product/details/product-40_3.jpg'),
(40, 'product/details/thumb-40_3.jpg'),
(40, 'product/details/product-40_4.jpg'),
(40, 'product/details/thumb-40_4.jpg'),
(41, 'shop/shop-41.jpg'),
(41, 'product/details/product-41_1.jpg'),
(41, 'product/details/thumb-41_1.jpg'),
(41, 'product/details/product-41_2.jpg'),
(41, 'product/details/thumb-41_2.jpg'),
(41, 'product/details/product-41_3.jpg'),
(41, 'product/details/thumb-41_3.jpg'),
(41, 'product/details/product-41_4.jpg'),
(41, 'product/details/thumb-41_4.jpg'),
(42, 'shop/shop-42.jpg'),
(42, 'product/details/product-42_1.jpg'),
(42, 'product/details/thumb-42_1.jpg'),
(42, 'product/details/product-42_2.jpg'),
(42, 'product/details/thumb-42_2.jpg'),
(42, 'product/details/product-42_3.jpg'),
(42, 'product/details/thumb-42_3.jpg'),
(42, 'product/details/product-42_4.jpg'),
(42, 'product/details/thumb-42_4.jpg'),
(43, 'shop/shop-43.jpg'),
(43, 'product/details/product-43_1.jpg'),
(43, 'product/details/thumb-43_1.jpg'),
(43, 'product/details/product-43_2.jpg'),
(43, 'product/details/thumb-43_2.jpg'),
(43, 'product/details/product-43_3.jpg'),
(43, 'product/details/thumb-43_3.jpg'),
(43, 'product/details/product-43_4.jpg'),
(43, 'product/details/thumb-43_4.jpg'),
(44, 'shop/shop-44.jpg'),
(44, 'product/details/product-44_1.jpg'),
(44, 'product/details/thumb-44_1.jpg'),
(44, 'product/details/product-44_2.jpg'),
(44, 'product/details/thumb-44_2.jpg'),
(44, 'product/details/product-44_3.jpg'),
(44, 'product/details/thumb-44_3.jpg'),
(44, 'product/details/product-44_4.jpg'),
(44, 'product/details/thumb-44_4.jpg'),
(45, 'shop/shop-45.jpg'),
(45, 'product/details/product-45_1.jpg'),
(45, 'product/details/thumb-45_1.jpg'),
(45, 'product/details/product-45_2.jpg'),
(45, 'product/details/thumb-45_2.jpg'),
(45, 'product/details/product-45_3.jpg'),
(45, 'product/details/thumb-45_3.jpg'),
(45, 'product/details/product-45_4.jpg'),
(45, 'product/details/thumb-45_4.jpg'),
(46, 'shop/shop-46.jpg'),
(46, 'product/details/product-46_1.jpg'),
(46, 'product/details/thumb-46_1.jpg'),
(46, 'product/details/product-46_2.jpg'),
(46, 'product/details/thumb-46_2.jpg'),
(46, 'product/details/product-46_3.jpg'),
(46, 'product/details/thumb-46_3.jpg'),
(46, 'product/details/product-46_4.jpg'),
(46, 'product/details/thumb-46_4.jpg'),
(47, 'shop/shop-47.jpg'),
(47, 'product/details/product-47_1.jpg'),
(47, 'product/details/thumb-47_1.jpg'),
(47, 'product/details/product-47_2.jpg'),
(47, 'product/details/thumb-47_2.jpg'),
(47, 'product/details/product-47_3.jpg'),
(47, 'product/details/thumb-47_3.jpg'),
(47, 'product/details/product-47_4.jpg'),
(47, 'product/details/thumb-47_4.jpg'),
(48, 'shop/shop-48.jpg'),
(48, 'product/details/product-48_1.jpg'),
(48, 'product/details/thumb-48_1.jpg'),
(48, 'product/details/product-48_2.jpg'),
(48, 'product/details/thumb-48_2.jpg'),
(48, 'product/details/product-48_3.jpg'),
(48, 'product/details/thumb-48_3.jpg'),
(48, 'product/details/product-48_4.jpg'),
(48, 'product/details/thumb-48_4.jpg'),
(49, 'shop/shop-49.jpg'),
(49, 'product/details/product-49_1.jpg'),
(49, 'product/details/thumb-49_1.jpg'),
(49, 'product/details/product-49_2.jpg'),
(49, 'product/details/thumb-49_2.jpg'),
(49, 'product/details/product-49_3.jpg'),
(49, 'product/details/thumb-49_3.jpg'),
(49, 'product/details/product-49_4.jpg'),
(49, 'product/details/thumb-49_4.jpg'),
(50, 'shop/shop-50.jpg'),
(50, 'product/details/product-50_1.jpg'),
(50, 'product/details/thumb-50_1.jpg'),
(50, 'product/details/product-50_2.jpg'),
(50, 'product/details/thumb-50_2.jpg'),
(50, 'product/details/product-50_3.jpg'),
(50, 'product/details/thumb-50_3.jpg'),
(50, 'product/details/product-50_4.jpg'),
(50, 'product/details/thumb-50_4.jpg'),
(51, 'shop/shop-51.jpg'),
(51, 'product/details/product-51_1.jpg'),
(51, 'product/details/thumb-51_1.jpg'),
(51, 'product/details/product-51_2.jpg'),
(51, 'product/details/thumb-51_2.jpg'),
(51, 'product/details/product-51_3.jpg'),
(51, 'product/details/thumb-51_3.jpg'),
(51, 'product/details/product-51_4.jpg'),
(51, 'product/details/thumb-51_4.jpg'),
(52, 'shop/shop-52.jpg'),
(52, 'product/details/product-52_1.jpg'),
(52, 'product/details/thumb-52_1.jpg'),
(52, 'product/details/product-52_2.jpg'),
(52, 'product/details/thumb-52_2.jpg'),
(52, 'product/details/product-52_3.jpg'),
(52, 'product/details/thumb-52_3.jpg'),
(52, 'product/details/product-52_4.jpg'),
(52, 'product/details/thumb-52_4.jpg'),
(53, 'shop/shop-53.jpg'),
(53, 'product/details/product-53_1.jpg'),
(53, 'product/details/thumb-53_1.jpg'),
(53, 'product/details/product-53_2.jpg'),
(53, 'product/details/thumb-53_2.jpg'),
(53, 'product/details/product-53_3.jpg'),
(53, 'product/details/thumb-53_3.jpg'),
(53, 'product/details/product-53_4.jpg'),
(53, 'product/details/thumb-53_4.jpg'),
(54, 'shop/shop-54.jpg'),
(54, 'product/details/product-54_1.jpg'),
(54, 'product/details/thumb-54_1.jpg'),
(54, 'product/details/product-54_2.jpg'),
(54, 'product/details/thumb-54_2.jpg'),
(54, 'product/details/product-54_3.jpg'),
(54, 'product/details/thumb-54_3.jpg'),
(54, 'product/details/product-54_4.jpg'),
(54, 'product/details/thumb-54_4.jpg'),
(55, 'shop/shop-55.jpg'),
(55, 'product/details/product-55_1.jpg'),
(55, 'product/details/thumb-55_1.jpg'),
(55, 'product/details/product-55_2.jpg'),
(55, 'product/details/thumb-55_2.jpg'),
(55, 'product/details/product-55_3.jpg'),
(55, 'product/details/thumb-55_3.jpg'),
(55, 'product/details/product-55_4.jpg'),
(55, 'product/details/thumb-55_4.jpg'),
(56, 'shop/shop-56.jpg'),
(56, 'product/details/product-56_1.jpg'),
(56, 'product/details/thumb-56_1.jpg'),
(56, 'product/details/product-56_2.jpg'),
(56, 'product/details/thumb-56_2.jpg'),
(56, 'product/details/product-56_3.jpg'),
(56, 'product/details/thumb-56_3.jpg'),
(56, 'product/details/product-56_4.jpg'),
(56, 'product/details/thumb-56_4.jpg'),
(57, 'shop/shop-57.jpg'),
(57, 'product/details/product-57_1.jpg'),
(57, 'product/details/thumb-57_1.jpg'),
(57, 'product/details/product-57_2.jpg'),
(57, 'product/details/thumb-57_2.jpg'),
(57, 'product/details/product-57_3.jpg'),
(57, 'product/details/thumb-57_3.jpg'),
(57, 'product/details/product-57_4.jpg'),
(57, 'product/details/thumb-57_4.jpg'),
(58, 'shop/shop-58.jpg'),
(58, 'product/details/product-58_1.jpg'),
(58, 'product/details/thumb-58_1.jpg'),
(58, 'product/details/product-58_2.jpg'),
(58, 'product/details/thumb-58_2.jpg'),
(58, 'product/details/product-58_3.jpg'),
(58, 'product/details/thumb-58_3.jpg'),
(58, 'product/details/product-58_4.jpg'),
(58, 'product/details/thumb-58_4.jpg'),
(59, 'shop/shop-59.jpg'),
(59, 'product/details/product-59_1.jpg'),
(59, 'product/details/thumb-59_1.jpg'),
(59, 'product/details/product-59_2.jpg'),
(59, 'product/details/thumb-59_2.jpg'),
(59, 'product/details/product-59_3.jpg'),
(59, 'product/details/thumb-59_3.jpg'),
(59, 'product/details/product-59_4.jpg'),
(59, 'product/details/thumb-59_4.jpg'),
(60, 'shop/shop-60.jpg'),
(60, 'product/details/product-60_1.jpg'),
(60, 'product/details/thumb-60_1.jpg'),
(60, 'product/details/product-60_2.jpg'),
(60, 'product/details/thumb-60_2.jpg'),
(60, 'product/details/product-60_3.jpg'),
(60, 'product/details/thumb-60_3.jpg'),
(60, 'product/details/product-60_4.jpg'),
(60, 'product/details/thumb-60_4.jpg'),
(61, 'shop/shop-61.jpg'),
(61, 'product/details/product-61_1.jpg'),
(61, 'product/details/thumb-61_1.jpg'),
(61, 'product/details/product-61_2.jpg'),
(61, 'product/details/thumb-61_2.jpg'),
(61, 'product/details/product-61_3.jpg'),
(61, 'product/details/thumb-61_3.jpg'),
(61, 'product/details/product-61_4.jpg'),
(61, 'product/details/thumb-61_4.jpg'),
(62, 'shop/shop-62.jpg'),
(62, 'product/details/product-62_1.jpg'),
(62, 'product/details/thumb-62_1.jpg'),
(62, 'product/details/product-62_2.jpg'),
(62, 'product/details/thumb-62_2.jpg'),
(62, 'product/details/product-62_3.jpg'),
(62, 'product/details/thumb-62_3.jpg'),
(62, 'product/details/product-62_4.jpg'),
(62, 'product/details/thumb-62_4.jpg'),
(63, 'shop/shop-63.jpg'),
(63, 'product/details/product-63_1.jpg'),
(63, 'product/details/thumb-63_1.jpg'),
(63, 'product/details/product-63_2.jpg'),
(63, 'product/details/thumb-63_2.jpg'),
(63, 'product/details/product-63_3.jpg'),
(63, 'product/details/thumb-63_3.jpg'),
(63, 'product/details/product-63_4.jpg'),
(63, 'product/details/thumb-63_4.jpg'),
(64, 'shop/shop-64.jpg'),
(64, 'product/details/product-64_1.jpg'),
(64, 'product/details/thumb-64_1.jpg'),
(64, 'product/details/product-64_2.jpg'),
(64, 'product/details/thumb-64_2.jpg'),
(64, 'product/details/product-64_3.jpg'),
(64, 'product/details/thumb-64_3.jpg'),
(64, 'product/details/product-64_4.jpg'),
(64, 'product/details/thumb-64_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `phone` char(11) COLLATE utf32_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `email` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `password` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `role_id`, `phone`, `address`, `email`, `password`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'ABC', 1, '0342929022', 'Ha Noi', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-09 00:00:00', '2022-07-09 00:00:00', NULL),
(2, 'Thanh', 1, '0828768112', 'Hà Nội', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-11 00:33:52', '2022-07-11 00:33:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `thumbnails_detail`
--
ALTER TABLE `thumbnails_detail`
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thumbnails_detail`
--
ALTER TABLE `thumbnails_detail`
  ADD CONSTRAINT `thumbnails_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
