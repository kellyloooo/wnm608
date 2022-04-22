-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2022 at 11:36 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klo_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Mountain Woman', 13.99, 'soap', '2022-04-16 22:29:42', '2022-04-16 22:29:42', 'Ingredients: avocado oil, coconut oil, RSPO palm oil, babassu oil, rice bran oil, sodium hydroxide, distilled water,\r\nindigo powder, cocoa powder, carrot powder, kaolin clay. Scented with Tea tree EO, Lavender EO, Eucalyptus EO, Sandalwood EO, and Oakmoss FO. *Colored with natural colorants.', 'mountain_woman.jpg', 'mountain_woman.jpg'),
(2, 'Tanned Mountain Woman', 13.99, 'soap', '2022-04-16 22:33:52', '2022-04-16 22:33:52', 'Ingredients: olive oil, coconut oil, castor oil, apricot kernel oil, macadamia nut oil, cocoa butter, shea butter, sodium\r\nhydroxide, distilled water, indigo powder, cocoa powder, carrot powder, kaolin clay. Scented with Tea tree EO, Lavender EO, Eucalyptus EO, Sandalwood EO, and Oakmoss FO. *Colored with natural colorants.', 'tanned_mountain_woman.jpg', 'tanned_mountain_woman.jpg'),
(3, 'Mountain Woman in Dark', 13.99, 'soap', '2022-04-16 22:35:55', '2022-04-16 22:35:55', 'Ingredients: olive oil, coconut oil, sweet almond oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled\r\nwater, activated charcoal, spinach powder, and carrot powder. Scented with Rosemary, Lemongrass, Peppermint, and Litsea Cubeba EO. *Colored with natural colorants.', 'mountain_woman_dark.jpg', 'mountain_woman_dark.jpg'),
(4, 'Avocado', 13.99, 'soap', '2022-04-16 22:39:28', '2022-04-16 22:39:28', 'Ingredients: avocado oil, coconut oil, RSPO palm oil, sweet almond oil, rice bran oil, shea butter, sodium hydroxide, distilled water, micas, and nettle leaves. Scented with Oakmoss Sandalwood FO & E0 and Cedarwood EO. *Colored with natural\r\ncolorants.\r\n', 'avocado.jpg', 'avocado.jpg'),
(5, 'Dino', 13.99, 'soap', '2022-04-16 22:44:02', '2022-04-16 22:44:02', 'Ingredients: olive oil, coconut oil, avocado oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled\r\nwater, activated charcoal, cocoa powder, and wormwood powder. Scented with Lavender EO. *Colored with natural colorants.', 'dino.jpg', 'dino.jpg'),
(6, 'Golden Line', 13.99, 'soap', '2022-04-16 22:45:50', '2022-04-16 22:45:50', 'Ingredients: olive oil, coconut oil, RSPO palm oil, castor oil, apricot kernel oil, shea butter, sodium hydroxide, distilled\r\nwater, kaolin clay, and micas. Scented with peppermint EO, lemongrass EO, tea tree EO, patchouli EO, and oakmoss FO. *Colored with natural colorants.', 'golden_line.jpg', 'golden_line.jpg'),
(7, 'Indigo', 13.99, 'soap', '2022-04-16 22:50:21', '2022-04-16 22:50:21', 'Ingredients: olive oil, coconut oil, sweet almond oil, castor oil, cocoa butter, sodium hydroxide, distilled water, indigo powder, and activated charcoal powder. Scented with Rosemary EO, Lavender EO, Cedarwood EO, and Patchouli EO. *Colored with natural colorants.', 'indigo.jpg', 'indigo.jpg'),
(8, 'Islet', 13.99, 'soap', '2022-04-16 22:52:25', '2022-04-16 22:52:25', 'Ingredients: olive oil, coconut oil, macadamia nut oil, cocoa butter, shea butter, sodium hydroxide, distilled water,\r\ntitanium dioxide, indigo powder, and activated charcoal powder. Scented with Lemongrass EO, and Rosemary EO. *Colored with natural colorants.', 'islet.jpg', 'islet.jpg'),
(9, 'Nuwa', 13.99, 'soap', '2022-04-16 22:54:11', '2022-04-16 22:54:11', 'Ingredients: olive oil, coconut oil, palm oil, sweet almond oil, castor oil, cocoa butter, mango butter, sodium hydroxide, distilled water, cocoa powder, titanium dioxide, and mica. Scented with white tea fragrance oil. *Colored with natural colorants.', 'nuwa.jpg', 'nuwa.jpg'),
(10, 'Phrase', 13.99, 'soap', '2022-04-16 23:02:46', '2022-04-16 23:02:46', 'Ingredients: olive oil, coconut oil, rice bran oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled\r\nwater, indigo powder, active charcoal, and kaolin clay. Scented with Tea tree EO. *Colored with natural colorants.', 'phrase.jpg', 'phrase.jpg'),
(11, 'Rosie', 13.99, 'soap', '2022-04-16 23:27:31', '2022-04-16 23:27:31', 'Ingredients: olive oil, coconut oil, apricot kernel oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled water, kaolin clay, and rose clay. Scented with Sweet orange and Italian lemon EO. *Colored with natural colorants.', 'rosie.jpg', 'rosie.jpg'),
(12, 'Stone', 13.99, 'soap', '2022-04-16 23:31:16', '2022-04-16 23:31:16', 'Ingredients: olive oil, coconut oil, sweet almond oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled water, and mica. Scented with Sweet basil, Italian lemon, and Eucalyptus EO. *Colored with natural\r\ncolorants.', 'stone.jpg', 'stone.jpg'),
(13, 'Sunset', 13.99, 'soap', '2022-04-16 23:32:29', '2022-04-16 23:32:29', 'Ingredients: olive oil, coconut oil, RSPO palm oil, sweet almond oil, castor oil, cocoa butter, sodium hydroxide, distilled water, cocoa powder, rose clay, carrot powder, and mica. Scented with olive leaf and fig fragrance oil. *Colored with natural colorants.', 'sunset.jpg', 'sunset.jpg'),
(14, 'Woody Party', 13.99, 'soap', '2022-04-16 23:33:53', '2022-04-16 23:33:53', 'Ingredients: olive oil, coconut oil, macadamia oil, castor oil, cocoa butter, shea butter, sodium hydroxide, distilled\r\nwater, sea clay, carrot powder, natural red clay, and natural brown clay. Scented with Black Spruce, peppermint, cypress, and benzoin essential oil. *Colored with natural colorants.', 'woody_party.jpg', 'woody_party.jpg'),
(15, 'Yu-Chu', 10.99, 'housework soap', '2022-04-16 23:35:01', '2022-04-16 23:35:01', 'Ingredients: olive oil, coconut oil, sodium hydroxide, distilled water, titanium dioxide, and mica. Scented with Eucalyptus EO.', 'yu_chu.jpg', 'yu_chu.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
