-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 09:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artist` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_type`, `price`, `image`, `artist`) VALUES
(18, 'Rabbit-hearted', 'Print', '55', 'abos_print_rabbit-hearted.jpg', 'A Bowl of Soba'),
(19, 'Remember Me (As I Am Now)', 'Print', '55', 'abos_print_remember me (as i am now).JPG', 'A Bowl of Soba'),
(20, 'The Other State of the Matter', 'Print', '75', 'abos_print_the other state of the matter.png', 'A Bowl of Soba'),
(21, 'Thinkin Bout You', 'Print', '120', 'abos_print_thinking bout you.png', 'A Bowl of Soba'),
(22, 'Alien Superstar', 'Sticker', '25', 'abos_sticker_alien superstar.png', 'A Bowl of Soba'),
(23, 'Nights', 'Sticker', '25', 'abos_sticker_nights orange.jpg', 'A Bowl of Soba'),
(24, 'Heartstealer', 'Sticker', '25', 'abos_sticker_ninja heartstealer.png', 'A Bowl of Soba'),
(25, 'Swagapino', 'Sticker', '25', 'abos_sticker_swagapino pink.png', 'A Bowl of Soba'),
(26, 'World of My Own ', 'Sticker', '25', 'abos_sticker_world of my own.png', 'A Bowl of Soba'),
(27, 'In Silence', 'Zine', '100', 'abos_in silence.jpg', 'A Bowl of Soba'),
(28, 'Balloons', 'Print', '30', 'love rhi_ balloons.png', 'Love, Rhi'),
(29, 'Is This Love', 'Print', '120', 'love rhi_ is this love.jpeg', 'Love, Rhi'),
(30, 'Nightmare', 'Print', '100', 'love rhi_Nightmare 2023.PNG', 'Love, Rhi'),
(31, 'Twin', 'Print', '100', 'love rhi_twin.png', 'Love, Rhi'),
(32, 'Ambiency', 'Print', '70', 'Likha ni Yya_Ambiency_.png', 'Likha ni Yya'),
(33, 'Average Delusion Enjoyer', 'Print', '70', 'Likha ni Yya_Average Delusion Enjoyer_size.png', 'Likha ni Yya'),
(34, 'Celestial Feelings', 'Print', '70', 'Likha ni Yya_Celestial Feelings_.png', 'Likha ni Yya'),
(35, 'I Hope The World Finds Me', 'Print', '100', 'Likha ni Yya_i hope the world finds me.png', 'Likha ni Yya'),
(36, 'Feel! Feel! Feel!', 'Print', '70', 'Likha ni Yya_Feel! Feel! Feel!_.png', 'Likha ni Yya'),
(37, 'Ocean Dweller, Star Seeker', 'Print', '70', 'Likha ni Yya_Ocean Dweller, Star Seeker_.png', 'Likha ni Yya'),
(38, 'So Much Rage but Nowhere to Put It', 'Print', '70', 'Likha ni Yya_So much rage but nowhere to put it-1_.png', 'Likha ni Yya'),
(39, 'Transcending', 'Print', '70', 'Likha ni Yya_Transcending_.png', 'Likha ni Yya'),
(40, 'Fishbowl for Two', 'Sticker', '25', 'fisbowl for two_sticker.png', 'Likha ni Yya'),
(41, 'Hammerhead Shark', 'Sticker', '25', 'hammerhead shark_sticker.png', 'Likha ni Yya'),
(42, 'Pink Shark', 'Sticker', '25', 'pink shark_sticker.png', 'Likha ni Yya'),
(43, 'Paninigarilyo', 'Sticker', '25', 'demi_ang paninigarilyo (1).png', 'Demitlog'),
(44, 'KABABAIHAN', 'Sticker', '25', 'demi_KABABAIHAN AY LAMANG.png', 'Demitlog'),
(45, 'Get In the Jeep, Bestie', 'Sticker', '25', 'demi_get in the jeep, bestieb- Sticker.png', 'Demitlog'),
(46, 'Hapag', 'Print', '120', 'demi_Hapag.png', 'Demitlog'),
(47, 'FXXXK U', 'Print', '120', 'demi_FXXK U.jpg', 'Demitlog'),
(48, 'James', 'Print', '120', 'demi_James.png', 'Demitlog'),
(49, 'Kabinet', 'Print', '120', 'demi_Kabinet.png', 'Demitlog'),
(50, 'Kahit Wala Ka', 'Print', '120', 'demi_Kahit Wala Ka.png', 'Demitlog'),
(51, 'Mirrorball Girlie', 'Print', '120', 'demi_mirrorball girlie edited ver.png', 'Demitlog'),
(52, 'Ngawa', 'Print', '120', 'demi_Ngawa.png', 'Demitlog'),
(53, 'Blood Bath', 'Print', '100', 'blood bath.jpg', 'Arabellat'),
(54, 'Blood Stain', 'Print', '100', 'blood stain.jpg', 'Arabellat'),
(55, 'Flies', 'Print', '70', 'flies.jpg', 'Arabellat'),
(56, 'Hello, Anxiety', 'Print', '100', 'hello anxiety.jpg', 'Arabellat'),
(57, 'Her', 'Print', '100', 'her.jpg', 'Arabellat'),
(58, 'Let Me OUT', 'Print', '100', 'let me out.jpg', 'Arabellat'),
(59, 'Piece by Piece', 'Print', '100', 'piece by piece.jpg', 'Arabellat'),
(60, 'Who Are You', 'Print', '100', 'who are you.jpg', 'Arabellat'),
(61, 'Bangs', 'Zine', '100', 'Bangs.png', 'Likha ni Yya'),
(62, 'Cliffside', 'Print', '130', 'Cliff side Forest.jpg', 'Doman'),
(63, 'Kapawa', 'Print', '120', 'Kapawa.jpg', 'Doman'),
(64, 'Monatophobia', 'Zine', '120', 'Monatophobia.png', 'Doman'),
(65, 'Monatophobia Together', 'Print', '120', 'Monatophobia2.png', 'Doman'),
(66, 'Recover', 'Print', '150', 'Recoverd_jpg_file(994).jpg', 'Doman'),
(67, 'Balakid ng Sariling Isipan', 'Print', '120', 'Balakid ng sariling isipan_SHELL 2022.jpg', 'Kimkim'),
(68, 'Bayad Po', 'Print', '120', 'bayad po_UP TSUPER 2023.jpg', 'Kimkim'),
(69, 'Can See It All', 'Print', '100', 'Can see it all_2022.jpg', 'Kimkim'),
(70, 'Counting Sheeps', 'Sticker', '25', 'Counting Sheeps_2023.jpg', 'Kimkim'),
(71, 'PINK!', 'Sticker', '25', 'UNTITLED_2023.jpg', 'Kimkim'),
(72, 'Fuck Off', 'Print', '120', 'FUCK OFF_NATIONAL SAFE ABORTION DAY 2023.jpg', 'Kimkim'),
(73, 'Umaapaw', 'Zine', '120', 'umaapaw.png', 'Likha ni Yya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
