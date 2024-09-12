-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2024 at 01:26 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fieture`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

DROP TABLE IF EXISTS `flower`;
CREATE TABLE IF NOT EXISTS `flower` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `originalprice` decimal(10,2) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mother''s day, Valentine''s day, Graduation',
  `subcategory` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Fresh, Knitted, Soap',
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `discount` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`id`, `name`, `originalprice`, `category`, `subcategory`, `description`, `image`, `date_added`, `discount`, `price`) VALUES
(133, '3 stalk fresh red rose bouquet', 68.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/3stalkFreshRedRoses.JPG', '2024-04-11 06:58:21', 0, 68.00),
(134, 'garden style bouquet', 108.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/gardenStyleBouquet.JPG', '2024-04-12 07:14:06', 0, 108.00),
(135, '3 stalk soap pink roses bouquet', 68.00, 'Valentine\'s day', 'Soap', 'Lorem ipsum dolor sit amet', '../product_image/3stalkSoapPinkRosesBouquet.JPG', '2024-04-12 08:08:24', 0, 68.00),
(136, '3 stalk sunflower bouquet', 68.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/3stalkSunflowerBouquet.JPG', '2024-04-12 08:13:19', 0, 68.00),
(137, '5 stalk graduation sunflower bouquet', 79.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/5stalkGraduationSunflowerBouquet.JPG', '2024-04-12 08:16:37', 0, 79.00),
(138, '5 stalk sunflower mix chamomile bouquet', 85.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/5stalkSunflowerMixChamomileBouquet.JPG', '2024-04-12 10:46:39', 0, 85.00),
(141, '9 Stalk Fresh Tulip Bouquet', 128.00, 'Mother\'s day', 'Fresh', 'Tulips are spring-blooming perennial herbaceous bulbiferous geophytes in the Tulipa genus. Their flowers are usually large, showy, and brightly coloured, generally red, orange, pink, yellow, or white. They often have a different coloured blotch at the base of the tepals, internally.', '../product_image/9stalkFreshTulipBouquet.JPG', '2024-04-18 10:04:55', 20, 108.00),
(139, '5 stalk pink roses bouquet', 85.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet', '../product_image/5stalkPinkRosesBouquet.JPG', '2024-04-12 10:49:11', 0, 85.00),
(140, '8 stalk soap res roses bouquet', 108.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '../product_image/8stalkSoapResRosesBouquet.JPG', '2024-04-12 10:57:13', 0, 108.00),
(142, '12 Stalk White Roses Bouquet', 128.00, 'Valentine\'s day', 'Fresh', 'White roses stand for innocence and purity. Giving white roses on anniversaries symbolise eternity. White roses are also suitable as gifts for newly-weds as they represent unity.', '../product_image/12stalkWhiteRosesBouquet.JPG', '2024-04-18 10:13:52', 0, 128.00),
(143, 'Cappucino Soap Roses Bouquet', 138.00, 'Mother\'s day', 'Soap', 'Soap flower is an ordinary bar of soap customized hand carved into a delicate of flower. \r\nThis bouquet comes with 12 stalk soap roses.', '../product_image/12stalkCappucinoSoapRosesBouquet.JPG', '2024-04-18 10:19:52', 20, 118.00),
(144, 'Cappuccino Mix White Roses Bouquet', 179.00, 'Mother\'s day', 'Soap', 'Make your loved one feel like royalty with the Rachel Cappuccino Rose Bouquet. These luxurious cappuccino roses in their elegant wrap will add that touch of glamour to any message you send.\r\nThis bouquet comes with 14 stalk soap roses.', '../product_image/14stalkCappucinoMixWhiteRosesBouquet.JPG', '2024-04-18 10:19:52', 60, 119.00),
(145, 'Pink Rose Bouquet', 250.00, 'Mother\'s day', 'Fresh', 'The “Forever Thankful Mother’s Day Pink Daisy Hand Bouquet” is a heartfelt and charming floral arrangement crafted to express eternal gratitude and love on Mother’s Day. This delightful hand bouquet features delicate pink daisies and soft pink roses, symbolizing admiration, appreciation, and the everlasting bond between a mother and child.\r\nThis bouquet comes with 3 stalk pink fresh roses.', '../product_image/33stalkPinkRoseBouquet.JPG', '2024-04-18 10:35:30', 35, 215.00),
(146, 'Soap Roses Flower Bucket', 265.00, 'Mother\'s day', 'Soap', 'The pink daisies, with their cheerful blooms, represent innocence, joy, and the cherished memories shared with a mother. Paired with the gentle beauty of pink roses, symbolizing gratitude and grace, the bouquet becomes a visual tribute to the unwavering love and support of a mother.\r\n\r\nAs you hold this bouquet, you can feel the warmth and tenderness it embodies, evoking fond memories and heartfelt sentiments. The “Forever Thankful Mother’s Day Pink Daisy Hand Bouquet” is more than just a collection of flowers; it’s a symbol of enduring love and appreciation that lasts a lifetime. Present this bouquet to your mother as a token of gratitude and love, expressing eternal thanks for all she has done. 🌸💖🌼\r\nThis bouquet comes with 36 stalk soap roses.', '../product_image/36stalkSoapRosesFlowerBucket.JPG', '2024-04-18 10:42:42', 40, 225.00),
(147, 'Balletcore Knitted Rose Bouquet', 39.00, 'Valentine\'s day', 'Knitted', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '../product_image/balletcoreKnittedRoseBouquet.JPG', '2024-04-18 10:48:58', 0, 39.00),
(148, 'Chamomile Bouquet', 58.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/chamomileBouquet.JPG', '2024-04-18 10:48:58', 0, 58.00),
(149, 'Fresh Graduation Bouquet', 150.00, 'Graduation', 'Fresh', 'Yellow and pink sunflower bouquet isn’t a combination you see very often, but this combination is playful and cute. Sunflowers are symbolic of a long life, but they also represent good luck for the future. Graduation evokes many feelings about new steps in life, and sunflowers can approach the topic of the future with a sense of positivity and optimism. Lilies represent a number of things, including devotion and innocence. The sunflower’s yellow colour symbolizes vitality, intelligence, and happiness. The colour yellow also traditionally symbolizes friendship.', '../product_image/freshGraduationBouquet.JPG', '2024-04-18 10:58:18', 22, 128.00),
(150, 'Fresh Cappuccino roses', 39.00, 'Mother\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/freshCappuccinoRoses.JPG', '2024-04-18 12:04:35', 0, 39.00),
(151, 'Mix Fresh Pink Roses Bouquet', 190.00, 'Mother\'s day', 'Fresh', 'The “Forever Thankful Mother’s Day Pink Daisy Hand Bouquet” is a heartfelt and charming floral arrangement crafted to express eternal gratitude and love on Mother’s Day. This delightful hand bouquet features delicate pink daisies and soft pink roses, symbolizing admiration, appreciation, and the everlasting bond between a mother and child.', '../product_image/freshPinkRosesBouquet.JPG', '2024-04-18 12:07:57', 32, 158.00),
(152, 'Fresh Red Cappuccino Roses Bouquet', 280.00, 'Mother\'s day', 'Fresh', 'The “Tender Grateful Mother’s Day Orange Carnation Hand Bouquet” is a warm and affectionate floral arrangement meticulously crafted to convey deep gratitude and appreciation on Mother’s Day. This endearing hand bouquet features vibrant orange carnations and delicate champagne roses, symbolizing admiration, thankfulness, and the cherished bond between a mother and her child.\r\n\r\nThe orange carnations, with their radiant petals, represent enthusiasm, admiration, and the joyous moments shared with a mother. Paired with the subtle beauty of champagne roses, symbolizing grace and appreciation, the bouquet becomes a heartfelt expression of gratitude and love.\r\n\r\nAs you hold this bouquet, you can feel the tender emotions it evokes, reminding you of the countless acts of kindness and selflessness of a mother’s love. The “Tender Grateful Mother’s Day Orange Carnation Hand Bouquet” is more than just a collection of flowers; it’s a heartfelt tribute to the extraordinary woman who has shaped your l', '../product_image/freshRedCappuccinoRosesBouquet.JPG', '2024-04-18 12:14:50', 70, 210.00),
(153, 'Fresh Red Mix White Roses Bouquet', 150.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshRedMixWhiteRosesBouquet.JPG', '2024-04-19 07:21:14', 0, 150.00),
(154, 'Fresh Sunflower Bouquet', 79.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshSunflowerBouquet.JPG', '2024-04-19 07:23:47', 0, 79.00),
(155, 'Fresh Sunflower Chamomile Bouquet', 89.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshSunflowerChamomileBouquet.JPG', '2024-04-19 07:27:16', 0, 89.00),
(156, 'Fresh Sunflower Gypsophila Bouquet', 95.00, 'Graduation', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshSunflowerGypsophilaBouquet.JPG', '2024-04-19 07:29:55', 0, 95.00),
(157, 'Fresh Violet Mix Roses Bouquet', 129.00, 'Mother\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshVioletMixRosesBouquet.JPG', '2024-04-19 07:32:37', 20, 109.00),
(158, 'Fresh White Eustoma Grandiflorum Bouquet', 129.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../product_image/freshWhiteEustomaGrandiflorumBouquet.JPG', '2024-04-19 07:36:00', 0, 129.00),
(159, 'Knitted Garden Style Bouquet', 159.00, 'Mother\'s day', 'Knitted', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/knittedGardenStyleBouquet.JPG', '2024-04-20 23:49:10', 30, 129.00),
(100, 'Knitted Tulip Rose Bouquet', 169.00, 'Mother\'s day', 'Knitted', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/knittedTulipRoseBouquet.JPG', '2024-04-20 23:52:01', 30, 139.00),
(160, 'Knitted Sunflower Graduation Bouquet', 139.00, 'Graduation', 'Knitted', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/knittedSunflowerGraduationBouquet.JPG', '2024-04-20 23:54:48', 0, 139.00),
(101, 'Ice Cream Cone Fresh Flower Bouquet', 139.00, 'Valentine\'s day', 'Fresh', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/iceCreamConeFreshFlower.JPG', '2024-04-20 23:57:20', 0, 139.00),
(161, 'Knitted Mix Bouquet', 129.00, 'Mother\'s day', 'Knitted', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '../product_image/knittedMixBouquet.JPG', '2024-04-21 00:02:56', 30, 99.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(4, 'kk', 'kk987@gmail.com', '$2y$10$m04PCanaGGaifjuY4pP1U.RDzug/YcwGAIxqkvsomLL8e87P4FVS.'),
(2, 'jiajie', 'jiajie123@gmail.com', '$2y$10$2va2DDnmousyMJBkCB2QgeNZ4Lo7veQ2yJPJ6vRbPexTJYAjOyB/S'),
(3, 'jichew', 'jj123@gmail.com', '$2y$10$pqcZ8bp5MInLLZvrYwTCt.oZ4uqd1G/ogzHaP4uAbeIlncaEqQ7t6'),
(5, 'sChua', 'sc0001@gmail.com', '$2y$10$6h4sneYmiaSWKp.lSisRwOIaTGiyntUy.Hol8e.1D.0Ob3xBuFYtS');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `username`, `pname`, `image`, `receiver`, `quantity`, `price`) VALUES
(3, 'kk', 'garden style bouquet', '../product_image/gardenStyleBouquet.JPG', 'kk', 1, 108),
(10, 'jiajie', '5 stalk sunflower mix chamomile bouquet', '../product_image/5stalkSunflowerMixChamomileBouquet.JPG', 'jj', 1, 85);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
