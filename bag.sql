-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 03:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `password`) VALUES
(0, 'admin5', '25f9e794323b453885f5181f1b624d0b'),
(4, 'admin1', 'fcea920f7412b5da7be0cf42b8c93759'),
(5, 'admin4', '25f9e794323b453885f5181f1b624d0b'),
(6, 'admin5', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `bagbag`
--

CREATE TABLE `bagbag` (
  `bagID` int(11) NOT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `specification` text,
  `price` float DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagbag`
--

INSERT INTO `bagbag` (`bagID`, `categoryID`, `name`, `specification`, `price`, `img`) VALUES
(1, 8, 'Adidas Black 1', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 1, '/eProject/img/nam/Adidas/Anh1.jpg'),
(2, 8, 'Adidas Black 2', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 2, '/eProject/img/nam/Adidas/Anh2.jpg'),
(3, 8, 'Adidas Cyan', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 3, '/eProject/img/nam/Adidas/Anh3.jpg'),
(4, 8, 'Adidas Black 3', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 4, '/eProject/img/nam/Adidas/Anh4.png'),
(5, 8, 'Adidas Dark Blue', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 5, '/eProject/img/nam/Adidas/Anh5.jpg'),
(6, 8, 'Adidas Gray', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 6, '/eProject/img/nam/Adidas/Anh6.jpg'),
(7, 8, 'Adidas Stripe Gray', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 7, '/eProject/img/nam/Adidas/Anh7.png'),
(8, 8, 'Adidas Black 4', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 8, '/eProject/img/nam/Adidas/Anh8.png'),
(9, 8, 'Adidas Light Green', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 9, '/eProject/img/nam/Adidas/Anh9.png'),
(11, 8, 'Adidas Dark Blue 2', 'This backpack provides plenty of space for your device.\r\nMain compartment: The two sides slide in th', 11, '/eProject/img/nam/Adidas/Anh11.jpg'),
(12, 9, 'Hermes Black 1', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 12, '/eProject/img/nam/Hermes/Anh12.jpg'),
(13, 9, 'Hermes Black 2', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 13, '/eProject/img/nam/Hermes/Anh13.jpg'),
(14, 9, 'Hermes 3 color mix', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 14, '/eProject/img/nam/Hermes/Anh14.jpg'),
(15, 9, 'Hermes Black 3', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 15, '/eProject/img/nam/Hermes/Anh15.jpg'),
(16, 9, 'Hermes Dark Brown', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 16, '/eProject/img/nam/Hermes/Anh16.jpg'),
(17, 9, 'Hermes 2 color mix', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 17, '/eProject/img/nam/Hermes/Anh17.jpg'),
(18, 9, 'Hermes Black 4', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 18, '/eProject/img/nam/Hermes/Anh18.jpg'),
(19, 9, 'Hermes Black 5', 'Fashion design, new style\r\nSoft - Compact - Many compartments\r\nStrong, masculine, youthful and moder', 19, '/eProject/img/nam/Hermes/Anh19.jpg'),
(20, 10, 'Nike Red', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 20, '/eProject/img/nam/Nike/Anh20.jpg'),
(21, 10, 'Nike Dark Blue', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 21, '/eProject/img/nam/Nike/Anh21.jpg'),
(22, 10, 'Nike Black 1', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 22, '/eProject/img/nam/Nike/Anh22.jpg'),
(23, 10, 'Nike Black 2', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 23, '/eProject/img/nam/Nike/Anh23.jpg'),
(24, 10, 'Nike Gray 1', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 24, '/eProject/img/nam/Nike/Anh24.jpg'),
(25, 10, 'Nike Black 3', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 25, '/eProject/img/nam/Nike/Anh25.jpg'),
(26, 10, 'Nike Black 4', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 26, '/eProject/img/nam/Nike/Anh26.jpg'),
(27, 10, 'Nike Blue 1', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 27, '/eProject/img/nam/Nike/Anh27.jpg'),
(28, 10, 'Nike Gray 2', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 28, '/eProject/img/nam/Nike/Anh28.jpg'),
(29, 10, 'Nike Blue 2', 'Synthetic leather for durability\r\nAdjustable cross-body strap for convenient carrying\r\nSmall valuabl', 29, '/eProject/img/nam/Nike/Anh29.jpg'),
(30, 1, 'Chanel Black 1', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 30, '/eProject/img/nu/channel/anh30.jpg'),
(31, 1, 'Chanel 2 color mix', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 31, '/eProject/img/nu/channel/Anh31.jpg'),
(32, 1, 'Chanel Black 2', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 32, '/eProject/img/nu/channel/Anh32.jpg'),
(33, 1, 'Chanel Light Gray', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 33, '/eProject/img/nu/channel/Anh33.jpg'),
(34, 1, 'Chanel Yellow', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 34, '/eProject/img/nu/channel/Anh34.jpg'),
(35, 1, 'Chanel Black & White', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 35, '/eProject/img/nu/channel/Anh35.jpg'),
(36, 1, 'Chanel Black 3', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 36, '/eProject/img/nu/channel/Anh36.jpg'),
(37, 1, 'Chanel Pink', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 37, '/eProject/img/nu/channel/Anh37.jpg'),
(38, 1, 'Chanel Stripe', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 38, '/eProject/img/nu/channel/Anh38.jpg'),
(39, 1, 'Chanel Pink Boat', 'Classic and elegant\r\nA Chanel bag is a fashion statement to your outfit. \r\nThis clutch features a to', 39, '/eProject/img/nu/channel/Anh39.jpg'),
(40, 2, 'Charles & Keith Black 1 ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 40, '/eProject/img/nu/Charles_Keith/anh40.jpg'),
(41, 2, 'Charles & Keith White ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 41, '/eProject/img/nu/Charles_Keith/anh41.jpg'),
(42, 2, 'Charles & Keith Black 2 ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 42, '/eProject/img/nu/Charles_Keith/anh42.jpg'),
(43, 2, 'Charles & Keith Black 3 ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 43, '/eProject/img/nu/Charles_Keith/anh43.jpg'),
(44, 2, 'Charles & Keith 2 color mix ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 44, '/eProject/img/nu/Charles_Keith/anh44.jpg'),
(45, 2, 'Charles & Keith Black Flower ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 45, '/eProject/img/nu/Charles_Keith/anh45.jpg'),
(46, 2, 'Charles & Keith Dark Brown', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 46, '/eProject/img/nu/Charles_Keith/anh46.jpg'),
(47, 2, 'Charles & Keith Gray ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 47, '/eProject/img/nu/Charles_Keith/anh47.jpg'),
(48, 2, 'Charles & Keith Pink ', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 48, '/eProject/img/nu/Charles_Keith/anh47.jpg'),
(49, 2, 'Charles & Keith Blue', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 49, '/eProject/img/nu/Charles_Keith/anh48.jpg'),
(50, 2, 'Charles & Keith Red', 'Suitable for taking work, hanging out, partying. Designed with durable and stylish PU leather.\r\nReas', 50, '/eProject/img/nu/Charles_Keith/anh49.jpg'),
(51, 3, 'Coach 2 mix color', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 51, '/eProject/img/nu/coach/Anh50.jpg'),
(52, 3, 'Coach Black Star', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 52, '/eProject/img/nu/coach/Anh51.jpg'),
(53, 3, 'Coach White Diamond', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 53, '/eProject/img/nu/coach/Anh52.jpg'),
(54, 3, 'Coach Black and Green', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 54, '/eProject/img/nu/coach/Anh53.jpg'),
(55, 3, 'Coach Black', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 55, '/eProject/img/nu/coach/Anh54.jpg'),
(56, 3, 'Coach Brown Flower', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 56, '/eProject/img/nu/coach/Anh55.jpg'),
(57, 3, 'Coach Brown Flower Mini', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 57, '/eProject/img/nu/coach/Anh56.jpg'),
(58, 3, 'Coach Poppy Pattern', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 58, '/eProject/img/nu/coach/Anh57.jpg'),
(59, 3, 'Coach Pink', 'Pebbled-leather,Designer tag,Removable pouch\r\nMagnetic fastening at open top,Three internal compartm', 59, '/eProject/img/nu/coach/Anh58.jpg'),
(60, 4, 'Gucci 3 color mix', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 60, '/eProject/img/nu/Gucci/Anh60.jpg'),
(61, 4, 'Gucci Black 1', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 61, '/eProject/img/nu/Gucci/Anh61.jpg'),
(62, 4, 'Gucci Orange 1', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 62, '/eProject/img/nu/Gucci/Anh62.jpg'),
(63, 4, 'Gucci Pink', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 63, '/eProject/img/nu/Gucci/Anh63.jpg'),
(64, 4, 'Gucci Green', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 64, '/eProject/img/nu/Gucci/Anh64.jpg'),
(65, 4, 'Gucci Black 2', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 65, '/eProject/img/nu/Gucci/Anh65.jpg'),
(66, 4, 'Gucci Black 3', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 66, '/eProject/img/nu/Gucci/Anh66.jpg'),
(67, 4, 'Gucci Brown', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 67, '/eProject/img/nu/Gucci/Anh67.jpg'),
(68, 4, 'Gucci Gold', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 68, '/eProject/img/nu/Gucci/Anh68.jpg'),
(69, 4, 'Gucci Orange 2', 'Tonal buffed leather trim throughout.\r\nAdjustable leather and chain-link shoulder strap with post-st', 69, '/eProject/img/nu/Gucci/Anh69.jpg'),
(70, 5, 'Louis Vuitton Dark Brown 1', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 70, '/eProject/img/nu/LV/Anh70.jpg'),
(71, 5, 'Louis Vuitton 2 color mix 1', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 71, '/eProject/img/nu/LV/Anh71.jpg'),
(72, 5, 'Louis Vuitton Brown 1', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 72, '/eProject/img/nu/LV/Anh72.jpg'),
(73, 5, 'Louis Vuitton Dark Brown 2', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 73, '/eProject/img/nu/LV/Anh73.jpg'),
(74, 5, 'Louis Vuitton Rainbow', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 74, '/eProject/img/nu/LV/Anh74.jpg'),
(75, 5, 'Louis Vuitton Brown 2', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 75, '/eProject/img/nu/LV/Anh75.jpg'),
(76, 5, 'Louis Vuitton Light Brown', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 76, '/eProject/img/nu/LV/Anh76.jpg'),
(77, 5, 'Louis Vuitton Red Plum', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 77, '/eProject/img/nu/LV/Anh77.jpg'),
(78, 5, 'Louis Vuitton 2 color mix 2', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 78, '/eProject/img/nu/LV/Anh78.jpg'),
(79, 5, 'Louis Vuitton 2 color mix 3', 'Bag from Louis Vuitton Vintage featuring top handles,\r\nA main internal compartment, an internal logo', 79, '/eProject/img/nu/LV/Anh79.jpg'),
(80, 6, 'Styluk 2 color mix', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 80, '/eProject/img/nu/Styluk/Anh80.jpg'),
(81, 6, 'Styluk Red', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 81, '/eProject/img/nu/Styluk/Anh81.jpg'),
(82, 6, 'Styluk Black 1', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 82, '/eProject/img/nu/Styluk/Anh82.jpg'),
(83, 6, 'Styluk Brown 1', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 83, '/eProject/img/nu/Styluk/Anh83.jpg'),
(84, 6, 'Styluk Black 2', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 84, '/eProject/img/nu/Styluk/Anh84.jpg'),
(85, 6, 'Styluk Pink', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 85, '/eProject/img/nu/Styluk/Anh85.jpg'),
(86, 6, 'Styluk Brown 2', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 86, '/eProject/img/nu/Styluk/Anh86.jpg'),
(87, 6, 'Styluk Red Plum', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 87, '/eProject/img/nu/Styluk/Anh87.jpg'),
(88, 6, 'Styluk Dark Blue', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 88, '/eProject/img/nu/Styluk/Anh88.jpg'),
(89, 6, 'Styluk Brown Diamond', 'High quality leather material has high softness, the surface creates youthful, water-proof, scratch-', 89, '/eProject/img/nu/Styluk/Anh89.jpg'),
(90, 7, 'Vascara Black 1', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 90, '/eProject/img/nu/vascara/Anh90.jpg'),
(91, 7, 'Vascara Brown 1', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 91, '/eProject/img/nu/vascara/Anh91.jpg'),
(92, 7, 'Vascara Green', 'Bags made from synthetic leatherThere is 1 main compartment and 3 sub-compartmentsLock is made o', 92, '/eProject/img/nu/vascara/Anh92.jpg'),
(93, 7, 'Vascara Pink', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 93, '/eProject/img/nu/vascara/Anh93.jpg'),
(94, 7, 'Vascara Black 2', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 94, '/eProject/img/nu/vascara/Anh94.jpg'),
(95, 7, 'Vascara Red', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 95, '/eProject/img/nu/vascara/Anh95.jpg'),
(96, 7, 'Vascara Black 3', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 96, '/eProject/img/nu/vascara/Anh96.jpg'),
(97, 7, 'Vascara Dark Blue', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 97, '/eProject/img/nu/vascara/Anh97.jpg'),
(98, 7, 'Vascara Brown 2', 'Bags made from synthetic leather\r\nThere is 1 main compartment and 3 sub-compartments\r\nLock is made o', 98, '/eProject/img/nu/vascara/Anh98.jpg'),
(99, 7, 'Vascara Dark Red', 'Bags made from synthetic leatherThere is 1 main compartment and 3 sub-compartmentsLock is made o', 99, '/eProject/img/nu/vascara/Anh99.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `description` text,
  `gender` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`, `brand`, `description`, `gender`) VALUES
(1, NULL, 'Chanel', 'Chanel was founded in 1909-1910 by Gabrielle \"Coco\" Chanel', 'Women'),
(2, NULL, 'Charles & Keith', 'Charles & Keith was founded by brothers Charles and Keith Wong', 'Women'),
(3, NULL, 'Coach', 'Starting from a small family business in the Manhattan neighborhood under the Gail Leather Products brand', 'Women'),
(4, NULL, 'Gucci', 'Gucci was founded by Guccio Gucci (1881 - 1953) in Florence in 1921', 'Women'),
(5, NULL, 'Louis Vuitton', 'Louis Vuitton is named after its founder Louis Vuitton (1821-1892)', 'Women'),
(6, NULL, 'Styluk', 'Styluk was founded by James Jebbia in 1994', 'Women'),
(7, NULL, 'Vascara', 'VASCARA is a fashion brand of shoes, handbags, backpacks and wallets', 'Women'),
(8, NULL, 'Adidas', 'Adidas is named after the founder, Adolf (Adi) Dassler,in 1948', 'Men '),
(9, NULL, 'Hermes', 'Hermes founded in 1837,producing leather goods,perfume and clothes', 'Men '),
(10, NULL, 'Nike', 'Nike specializes in manufacturing sports clothes and equipment', 'Men ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `map` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phonenumber`, `email`, `map`) VALUES
(1, '285 Doi Can Street, BaDinh, Ha', '123-456-7890', 'Bagbag@aptech.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8719004726568!2d105.80739231532799!3d21.037810985993456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1557664333434!5m2!1svi!2s');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `phonenumber`, `email`, `content`) VALUES
(1, '0339603100', 'abc@gmail.com', 'Alo test thoi');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `img` varchar(90) DEFAULT NULL,
  `img2` varchar(40) DEFAULT NULL,
  `img3` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryID`, `name`, `img`, `img2`, `img3`) VALUES
(1, 'Backpacks for sports', '/eProject/img/sport/sport1.jpg', '/eProject/img/sport/sport2.jpg', '/eProject/img/sport/sport3.jpg'),
(5, 'Handbag fashion 2019', '/eProject/img/fashion/fashion1.jpg', '/eProject/img/fashion/fashion2.jpg', '/eProject/img/fashion/fashion3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `bagID` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `orderdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `confirm` varchar(50) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `bagID`, `number`, `orderdate`, `name`, `price`, `confirm`) VALUES
(0, NULL, 1, '2019-05-13 20:39:51', 'nguyen van a', 21, 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `bagbag`
--
ALTER TABLE `bagbag`
  ADD PRIMARY KEY (`bagID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
