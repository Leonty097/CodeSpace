-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 05:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mktime`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Classic'),
(2, 'Special edition');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total_amount`, `order_date`) VALUES
(139, 1, 1998.00, '2024-05-01 10:30:00'),
(140, 2, 899.00, '2024-05-02 11:30:00'),
(141, 3, 1299.00, '2024-05-03 12:30:00'),
(142, 4, 1999.00, '2024-05-04 13:30:00'),
(143, 5, 2899.00, '2024-05-05 14:30:00'),
(144, 6, 999.00, '2024-05-06 15:30:00'),
(145, 7, 1998.00, '2024-05-07 16:30:00'),
(146, 8, 1299.00, '2024-05-08 17:30:00'),
(147, 9, 899.00, '2024-05-09 18:30:00'),
(148, 10, 1999.00, '2024-05-10 19:30:00'),
(149, 11, 2899.00, '2024-05-11 20:30:00'),
(150, 12, 999.00, '2024-05-12 21:30:00'),
(151, 13, 1998.00, '2024-05-13 22:30:00'),
(152, 14, 1299.00, '2024-05-14 23:30:00'),
(153, 15, 899.00, '0000-00-00 00:00:00'),
(154, 16, 1999.00, '2024-05-16 10:30:00'),
(155, 1, 2899.00, '2024-05-17 11:30:00'),
(156, 2, 999.00, '2024-05-18 12:30:00'),
(157, 3, 1998.00, '2024-05-19 13:30:00'),
(158, 4, 1299.00, '2024-05-20 14:30:00'),
(159, 1, 2898.00, '2024-06-03 20:46:54'),
(166, 1, 8095.00, '2024-06-04 23:33:12'),
(167, 1, 8095.00, '2024-06-04 23:33:12'),
(168, 1, 2898.00, '2024-06-05 10:25:35'),
(169, 1, 2898.00, '2024-06-05 10:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE `order_contents` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`content_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(96, 139, 1, 2, 999.00),
(97, 140, 2, 1, 899.00),
(98, 141, 3, 1, 1299.00),
(99, 142, 4, 1, 1999.00),
(100, 143, 5, 1, 2899.00),
(101, 144, 1, 1, 999.00),
(102, 145, 1, 2, 999.00),
(103, 146, 3, 1, 1299.00),
(104, 147, 2, 1, 899.00),
(105, 148, 4, 1, 1999.00),
(106, 149, 5, 1, 2899.00),
(107, 150, 1, 1, 999.00),
(108, 151, 1, 2, 999.00),
(109, 152, 3, 1, 1299.00),
(110, 153, 2, 1, 899.00),
(111, 154, 4, 1, 1999.00),
(112, 155, 5, 1, 2899.00),
(113, 156, 1, 1, 999.00),
(114, 157, 1, 2, 999.00),
(115, 158, 3, 1, 1299.00),
(116, 166, 4, 1, 1999.00),
(117, 166, 5, 1, 2899.00),
(118, 166, 3, 1, 1299.00),
(119, 166, 2, 1, 899.00),
(120, 166, 1, 1, 999.00),
(121, 168, 2, 1, 899.00),
(122, 168, 4, 1, 1999.00);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `payment_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_date`, `payment_amount`, `payment_method`) VALUES
(1, 139, '2024-05-01 10:30:00', 1998.00, 'Credit Card'),
(2, 140, '2024-05-02 11:30:00', 899.00, 'Credit Card'),
(3, 141, '2024-05-03 12:30:00', 1299.00, 'Credit Card'),
(4, 142, '2024-05-04 13:30:00', 1999.00, 'Credit Card'),
(5, 143, '2024-05-05 14:30:00', 2899.00, 'Credit Card'),
(6, 144, '2024-05-06 15:30:00', 999.00, 'Credit Card'),
(7, 145, '2024-05-07 16:30:00', 1998.00, 'Credit Card'),
(8, 146, '2024-05-08 17:30:00', 1299.00, 'Credit Card'),
(9, 147, '2024-05-09 18:30:00', 899.00, 'Credit Card'),
(10, 148, '2024-05-10 19:30:00', 1999.00, 'Credit Card'),
(11, 149, '2024-05-11 20:30:00', 2899.00, 'Credit Card'),
(12, 150, '2024-05-12 21:30:00', 999.00, 'Credit Card'),
(13, 151, '2024-05-13 22:30:00', 1998.00, 'Credit Card'),
(14, 152, '2024-05-14 23:30:00', 1299.00, 'Credit Card'),
(15, 153, '2024-05-15 00:00:00', 899.00, 'Credit Card'),
(16, 154, '2024-05-16 10:30:00', 1999.00, 'Credit Card'),
(140, 166, '2024-06-04 23:33:12', 8095.00, 'Credit Card'),
(141, 167, '2024-06-04 23:33:12', 8095.00, 'Credit Card'),
(142, 168, '2024-06-05 10:25:35', 2898.00, 'Credit Card'),
(143, 169, '2024-06-05 10:25:35', 2898.00, 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`) VALUES
(1, 'Skye time', 'Classic Swiss watch - Skye time', 'wa1.1.jpg', 999.00),
(2, 'Glencoe wrist', 'Classic Swiss watch - Glencoe wrist', 'wa3.3.jpg', 899.00),
(3, 'MK Ness', 'Classic Swiss watch - MK Ness', 'wa6.2.jpg', 1299.00),
(4, 'Old Blair', 'Luxury Swiss watch - Old Blair', 'wa8.1.jpg', 1999.00),
(5, 'Wee Laggan', 'Luxury Swiss watch - Wee Laggan', 'wa7.2.jpg', 2899.00);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `basket_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`basket_id`, `user_id`, `product_id`, `quantity`) VALUES
(21, 2, 2, 1),
(22, 3, 3, 1),
(23, 4, 4, 1),
(24, 5, 5, 1),
(25, 6, 5, 1),
(26, 7, 1, 1),
(27, 8, 2, 1),
(28, 9, 3, 1),
(29, 10, 4, 1),
(30, 11, 5, 1),
(31, 12, 5, 1),
(32, 13, 1, 1),
(33, 14, 2, 1),
(34, 15, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp(),
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `address`, `postal_code`, `country`) VALUES
(1, 'Tester1', 'Test', 'test@test1.com', '$2y$10$/nh.7e/WmiTACgEYn7hRQu.D0.Q0FxQPgo1xqbruIBjR1AGnjuSau', '2024-05-26 13:05:23', '123test', 'EH3 2RJ', 'UK'),
(2, 'John', 'Doe', 'john.doe@example.com', '$2y$10$/nh.7e/WmiTACgEYn7hRQu.D0.Q0FxQPgo1xqbruIBjR1AGnjuSau', '2024-05-01 10:00:00', '123 Main St', 'EH1 1AA', 'United Kingdom'),
(3, 'Jane', 'Smith', 'jane.smith@example.com', '1234', '2024-05-02 11:00:00', '456 High St', 'EH2 2BB', 'United Kingdom'),
(4, 'Alice', 'Johnson', 'alice.johnson@example.com', 'password3', '2024-05-03 12:00:00', '789 Low St', 'EH3 3CC', 'United Kingdom'),
(5, 'Bob', 'Brown', 'bob.brown@example.com', 'password4', '2024-05-04 13:00:00', '101 North St', 'EH4 4DD', 'United Kingdom'),
(6, 'Charlie', 'Davis', 'charlie.davis@example.com', 'password5', '2024-05-05 14:00:00', '202 South St', 'EH5 5EE', 'United Kingdom'),
(7, 'David', 'Wilson', 'david.wilson@example.com', 'password6', '2024-05-06 15:00:00', '303 East St', 'EH6 6FF', 'United Kingdom'),
(8, 'Eve', 'Evans', 'eve.evans@example.com', 'password7', '2024-05-07 16:00:00', '404 West St', 'EH7 7GG', 'United Kingdom'),
(9, 'Frank', 'White', 'frank.white@example.com', 'password8', '2024-05-08 17:00:00', '505 Park St', 'EH8 8HH', 'United Kingdom'),
(10, 'Grace', 'Hall', 'grace.hall@example.com', 'password9', '2024-05-09 18:00:00', '606 Oak St', 'EH9 9II', 'United Kingdom'),
(11, 'Hank', 'Allen', 'hank.allen@example.com', 'password10', '2024-05-10 19:00:00', '707 Pine St', 'EH10 1JJ', 'United Kingdom'),
(12, 'Ivy', 'Young', 'ivy.young@example.com', 'password11', '2024-05-11 20:00:00', '808 Maple St', 'EH11 2KK', 'United Kingdom'),
(13, 'Jack', 'Harris', 'jack.harris@example.com', 'password12', '2024-05-12 21:00:00', '909 Birch St', 'EH12 3LL', 'United Kingdom'),
(14, 'Karen', 'Martin', 'karen.martin@example.com', 'password13', '2024-05-13 22:00:00', '1010 Cedar St', 'EH13 4MM', 'United Kingdom'),
(15, 'Leo', 'Thompson', 'leo.thompson@example.com', 'password14', '2024-05-14 23:00:00', '1111 Elm St', 'EH14 5NN', 'United Kingdom'),
(16, 'Mona', 'Moore', 'mona.moore@example.com', 'password15', '0000-00-00 00:00:00', '1212 Spruce St', 'EH15 6OO', 'United Kingdom'),
(17, 'Tom', 'Lass', 'TLss@gmail.com', '1234', '2021-01-10 17:00:00', 'Royal Mile', 'EH1 1RQ', 'United Kingdom');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_categories`
-- (See below for the actual view)
--
CREATE TABLE `view_categories` (
`category_id` int(10) unsigned
,`category_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_orders`
-- (See below for the actual view)
--
CREATE TABLE `view_orders` (
`order_id` int(10) unsigned
,`user_id` int(10) unsigned
,`total_amount` decimal(10,2)
,`order_date` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order_contents`
-- (See below for the actual view)
--
CREATE TABLE `view_order_contents` (
`content_id` int(10) unsigned
,`order_id` int(10) unsigned
,`product_id` int(10) unsigned
,`quantity` int(10) unsigned
,`price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_payment`
-- (See below for the actual view)
--
CREATE TABLE `view_payment` (
`payment_id` int(10) unsigned
,`order_id` int(10) unsigned
,`payment_date` datetime
,`payment_amount` decimal(10,2)
,`payment_method` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_products`
-- (See below for the actual view)
--
CREATE TABLE `view_products` (
`product_id` int(10) unsigned
,`product_name` varchar(100)
,`product_description` text
,`product_image` varchar(255)
,`product_price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product_categories`
-- (See below for the actual view)
--
CREATE TABLE `view_product_categories` (
`product_id` int(10) unsigned
,`category_id` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_shopping_cart`
-- (See below for the actual view)
--
CREATE TABLE `view_shopping_cart` (
`basket_id` int(10) unsigned
,`user_id` int(10) unsigned
,`product_id` int(10) unsigned
,`quantity` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_users`
-- (See below for the actual view)
--
CREATE TABLE `view_users` (
`user_id` int(10) unsigned
,`first_name` varchar(50)
,`last_name` varchar(50)
,`email` varchar(100)
,`password` varchar(255)
,`registration_date` datetime
,`address` varchar(255)
,`postal_code` varchar(20)
,`country` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_users_orders`
-- (See below for the actual view)
--
CREATE TABLE `view_users_orders` (
`user_id` int(10) unsigned
,`first_name` varchar(50)
,`last_name` varchar(50)
,`email` varchar(100)
,`password` varchar(255)
,`registration_date` datetime
,`address` varchar(255)
,`postal_code` varchar(20)
,`country` varchar(100)
,`order_id` int(10) unsigned
,`total_amount` decimal(10,2)
,`order_date` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_users_payment`
-- (See below for the actual view)
--
CREATE TABLE `view_users_payment` (
`user_id` int(10) unsigned
,`first_name` varchar(50)
,`last_name` varchar(50)
,`email` varchar(100)
,`password` varchar(255)
,`registration_date` datetime
,`address` varchar(255)
,`postal_code` varchar(20)
,`country` varchar(100)
,`order_id` int(10) unsigned
,`payment_id` int(10) unsigned
,`payment_date` datetime
,`payment_amount` decimal(10,2)
,`payment_method` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_categories`
--
DROP TABLE IF EXISTS `view_categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_categories`  AS SELECT `categories`.`category_id` AS `category_id`, `categories`.`category_name` AS `category_name` FROM `categories` ;

-- --------------------------------------------------------

--
-- Structure for view `view_orders`
--
DROP TABLE IF EXISTS `view_orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_orders`  AS SELECT `orders`.`order_id` AS `order_id`, `orders`.`user_id` AS `user_id`, `orders`.`total_amount` AS `total_amount`, `orders`.`order_date` AS `order_date` FROM `orders` ;

-- --------------------------------------------------------

--
-- Structure for view `view_order_contents`
--
DROP TABLE IF EXISTS `view_order_contents`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order_contents`  AS SELECT `order_contents`.`content_id` AS `content_id`, `order_contents`.`order_id` AS `order_id`, `order_contents`.`product_id` AS `product_id`, `order_contents`.`quantity` AS `quantity`, `order_contents`.`price` AS `price` FROM `order_contents` ;

-- --------------------------------------------------------

--
-- Structure for view `view_payment`
--
DROP TABLE IF EXISTS `view_payment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_payment`  AS SELECT `payments`.`payment_id` AS `payment_id`, `payments`.`order_id` AS `order_id`, `payments`.`payment_date` AS `payment_date`, `payments`.`payment_amount` AS `payment_amount`, `payments`.`payment_method` AS `payment_method` FROM `payments` ;

-- --------------------------------------------------------

--
-- Structure for view `view_products`
--
DROP TABLE IF EXISTS `view_products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_products`  AS SELECT `products`.`product_id` AS `product_id`, `products`.`product_name` AS `product_name`, `products`.`product_description` AS `product_description`, `products`.`product_image` AS `product_image`, `products`.`product_price` AS `product_price` FROM `products` ;

-- --------------------------------------------------------

--
-- Structure for view `view_product_categories`
--
DROP TABLE IF EXISTS `view_product_categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product_categories`  AS SELECT `product_categories`.`product_id` AS `product_id`, `product_categories`.`category_id` AS `category_id` FROM `product_categories` ;

-- --------------------------------------------------------

--
-- Structure for view `view_shopping_cart`
--
DROP TABLE IF EXISTS `view_shopping_cart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_shopping_cart`  AS SELECT `shopping_cart`.`basket_id` AS `basket_id`, `shopping_cart`.`user_id` AS `user_id`, `shopping_cart`.`product_id` AS `product_id`, `shopping_cart`.`quantity` AS `quantity` FROM `shopping_cart` ;

-- --------------------------------------------------------

--
-- Structure for view `view_users`
--
DROP TABLE IF EXISTS `view_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_users`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`registration_date` AS `registration_date`, `users`.`address` AS `address`, `users`.`postal_code` AS `postal_code`, `users`.`country` AS `country` FROM `users` ;

-- --------------------------------------------------------

--
-- Structure for view `view_users_orders`
--
DROP TABLE IF EXISTS `view_users_orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_users_orders`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`registration_date` AS `registration_date`, `users`.`address` AS `address`, `users`.`postal_code` AS `postal_code`, `users`.`country` AS `country`, `orders`.`order_id` AS `order_id`, `orders`.`total_amount` AS `total_amount`, `orders`.`order_date` AS `order_date` FROM (`users` join `orders`) WHERE `users`.`user_id` = `orders`.`user_id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_users_payment`
--
DROP TABLE IF EXISTS `view_users_payment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_users_payment`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`registration_date` AS `registration_date`, `users`.`address` AS `address`, `users`.`postal_code` AS `postal_code`, `users`.`country` AS `country`, `orders`.`order_id` AS `order_id`, `payments`.`payment_id` AS `payment_id`, `payments`.`payment_date` AS `payment_date`, `payments`.`payment_amount` AS `payment_amount`, `payments`.`payment_method` AS `payment_method` FROM ((`users` join `orders` on(`users`.`user_id` = `orders`.`user_id`)) join `payments` on(`orders`.`order_id` = `payments`.`order_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`basket_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `basket_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD CONSTRAINT `order_contents_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_contents_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `product_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
