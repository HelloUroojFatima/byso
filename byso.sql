-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 07:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byso`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `postalCode` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userId`, `email`, `name`, `mobile`, `password`, `postalCode`, `address`, `city`) VALUES
(15, 'cutoolove@gmail.com', 'Fatima Qousain ', 2147483647, '11111111', 54920, 'mera dill', 'Lahore'),
(16, 'Socialact123@gmail.com', 'Abdullah Sardar', 2147483647, '453454', 54920, 'House#60,Street#11, kotli peer Abdur Rehman Bagbanpura, LHR', 'Lahore'),
(17, 'Uroojfatima2502@outlook.com', 'urooj', 2147483647, '12345678', 54920, 'House#60,Street#11, kotli peer Abdur Rehman Bagbanpura, LHR', 'Lahore'),
(19, 'abdullahsardar928@gmail.com', 'Abdullah Sardar', 2147483647, '12345', 54920, 'House#60,Street#11, kotli peer Abdur Rehman Bagbanpura, LHR', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL,
  `totalAmount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `paymentType` varchar(100) NOT NULL,
  `accountNumber` int(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `skinType` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `name`, `price`, `description`, `category`, `skinType`, `quantity`, `gender`, `image1`, `image2`, `brand`) VALUES
(1, 'Daily facial cleanser', 3500, 'CETAPHIL DAILY FACIAL CLEANSER: Reinforces skin\'s moisture barrier, balances skin, perfect for sensitive, and combination skin. \r\n#1 SELLING HYDRATING FACIAL CLEANSER: Clinically tested to remove dirt, excess oils and makeup without leaving skin dry or tight.\r\nDEVELOPED FOR EVEN THE MOST SENSITIVE SKIN: This hypoallergenic, non-comedogenic skin cleanser deep cleans without clogging pores.\r\nGENTLE ENOUGH FOR DAILY USE: Gentle formula for use daily, morning and night.\r\nGENTLE FOAMING FORMULA: Deep cleans without stripping skin of natural moisture leaving it feeling refreshed and balanced.', 'Lotion', 'Oily, Combination, Sensitive', 15, 'Unisex', '../img/Daily facial cleanser.png', '../img/Daily facial cleanser1.png', 'Cetaphil'),
(2, 'Soothing cleanser', 4000, 'Soothing Cleanser is a potent cleansing foam formulated with a rich amilite surfactant and a 22% concentration combining sorbitol, glycerin, orchid extract, and cucumber extract to gently remove impurities while soothing and comforting sensitive, compromised, or post-procedure skin. This soap free cleanser dispenses a dense cleansing foam that transforms on contact into a comforting emulsion to provide a mild yet effective clean. Tested post-procedure.', 'Face wash, Cleanser\r\n', 'Dry, Normal, Oily, Combination, Sensitive', 15, 'Unisex', '../img/Soothing cleanser.png', '../img/Soothing cleanser1.png', 'Skin Ceuticals'),
(3, 'Ferulic Vitamin C Serum', 2500, 'Experience advanced environmental protection with SkinCeuticals C E Ferulic; a potent Vitamin C serum that delivers visible anti-aging benefits. Free from parabens, the formula is gentle yet effective and is suitable for normal, dry and even sensitive skin types. The serum delivers an array of enviable benefits that last over 72 hours. Simply smooth 4-5 drops of the fast-absorbed solution over the face, neck and décolletage. Boasting an antioxidant blend of 15% Pure Vitamin C (L-Ascorbic Acid), 1% Vitamin E (Alpha Tocopherol) and 0.5% Ferulic Acid, the daytime serum envelops skin in a protective veil.', 'Serum', 'Dry, Normal,  Sensitive', 15, 'Unisex', '../img/C E Ferulic Vitamin C Serum.png', '../img/C E Ferulic Vitamin C Serum1.png', 'Skin Ceuticals'),
(4, 'UV Clear Tinted Spectrum', 5500, 'Oil-free EltaMD UV Clear helps calm and protect sensitive skin types prone to breakouts, rosacea and discoloration. It contains niacinamide (vitamin B3), hyaluronic acid and lactic acid, ingredients that promote the appearance of healthy-looking skin. Very lightweight and silky, it may be worn with makeup or alone. New tinted formula helps even-out most skin tones.', 'Sunscreen', 'Acne', 15, 'Unisex', '../img/UV Clear Tinted Broad-Spectrum SPF46.png', '../img/UV Clear Tinted Broad-Spectrum SPF461.png', 'EltaMD'),
(5, 'Cucumber Eye Masks', 5500, 'Help awaken the appearance of tired eyes with these energizing eye contour gel patches, which help reduce the look of puffiness, dark circles, fine lines and wrinkles. Cucumber Extract helps naturally detoxify, nourish, hydrate and de-puff the look of skin.', 'Mask', 'Acne', 15, 'Unisex', '../img/Cucumber Hydra-Gel Eye Masks.png', '../img/Cucumber Hydra-Gel Eye Masks1.png', 'Peter Thomas Roth'),
(6, 'Aloe & hydration ', 1095, 'The unique composition of skin\'s own moisturizer, moisture-locking lipids and care providing oils bind and hold water in the skin thus the moisture cannot evaporate easily into the surrounding area. The skin is well protected from drying out, because water loss is reduced and the moisture level of the skin is increased.', 'Lotion', 'All ', 15, 'Unisex', '../img/Aloe & hydration.jpg', '../img/Aloe & hydration1.jpg', 'Nivea'),
(7, 'Vitamin A & E Face wash', 1250, 'Innovative formula with liquorice and berry extracts gives the skin even-toned fairness Reduces dark pigmentation protects the skin from the sun with UV filters.', 'Face wash', 'All ', 15, 'Unisex', '../img/Vitamin A & E Face wash.jpg', '../img/Vitamin A & E Face wash1.jpg', 'Nivea'),
(8, 'Shower Gel', 800, 'For Men who want soothing and refreshing skin care. The caring formula with soothing Bamboo Milk and a calming scent gently cleanses and moisturizes your skin. Developed by experts, all NIVEA Bath Care products contain a special combination of ingredients to care for and protect your skin from moisture loss even after the shower.', 'Body wash', 'All', 15, 'Men', '../img/Shower Gel.jpg', '../img/Shower Gel1.jpg', 'Nivea'),
(9, 'Vitamin C Serum', 1100, 'Tired of dull skin, pigmentation, and dark spots? Breathe new life into your skin and get a bright, spot-less complexion with the new Garnier Light Complete Vitamin C Booster Serum, Garnier’s most concentrated spot-reduction formula. This Vitamin C Booster serum is an anti-oxidant rich face serum which brightens your skin from the first application and reduces dark spots and acne marks in just 3 days.', 'Serum', 'Normal', 15, 'Women', '../img/Vitamin C Serum.jpg', '../img/Vitamin C Serum1.jpg', 'Garnier'),
(10, 'Neem purifying Face wash', 500, 'Purify your skin with Pure Active Neem Purifying Face Wash enriched with the power of Neem Leaf Extract and Tea Tree Oil. Skin feels clean, fresh and looks clearer.', 'Face wash', 'Oily', 15, 'Unisex', '../img/Neem purifying Face wash.jpg', '../img/Neem purifying Face wash1.jpg', 'Garnier'),
(11, 'Tissue Mask Bright', 550, 'Contains 3x Lemon and Vitamin C. Removes spots, reduces dullness and reveals a radiant complexion. UVA/UVB sun protection. ', 'Mask', 'All', 15, 'Women', '../img/Tissue Mask Bright.jpg', '../img/Tissue Mask Bright1.jpg', 'Garnier'),
(12, 'Micellar Cleansing Water', 1000, 'All-in-1 Cleanser & Makeup Remover. Cleanses + removes makeup + refreshes. No rinse, no harsh rubbing.', 'Cleanser', 'All', 15, '', '../img/Micellar Cleansing Water.jpg', '../img/Micellar Cleansing Water1.jpg', 'Garnier'),
(13, 'Power White duo Foam', 800, 'Garnier Men creates PowerWhite: Garnier\'s face wash for men that removes impurities and dark dead cells for an intensive fairness action. »Immediate deep cleansing: Its formula, enriched with anti-oxidant grape water, eliminates impurities. Intensive dead cell removal: Enriched with brightening lemon extract and gentle micro-polishing beads, it remove dark dead cells and visibly brightens skin. ', 'Face wash', 'All', 15, 'Men', '../img/Power White duo Foam.jpg', '../img/Power White duo Foam1.jpg', 'Garnier '),
(14, 'Drops of Youth', 3500, 'Target the first signs of ageing with our youth-enhancing concentrate. This refreshing gel-like serum is infused with three plant stem cells, and leaves skin feeling instantly smoother and replenished with moisture. Skin unveils a healthy luminosity and a youthful bounce. ', 'Serum', 'All', 15, 'Women', '../img/Drops of Youth.jpg', '../img/Drops of Youth1.jpg', 'The body shop'),
(15, 'Berry Lip Scrub ', 3000, 'Keep lips feeling soft and smooth all Christmas with our special edition Festive Berry Sugar Lip Scrub. Smooth on some of our scrub. The exfoliating sugar crystals help buff away dead skin cells, leaving lips feeling silky-soft. Made with cranberry seed oil from North America and handcrafted Community Fair Trade shea butter from Ghana, it has a sweet, tangy, fruity and juicy berry scent that will leave you feeling seriously festive. This is the perfect little Christmas gift or stocking filler.', 'Lip Balm', 'All', 15, 'Women', '../img/Berry Lip Scrub.jpg', '../img/Berry Lip Scrub1.jpg', 'The body shop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
