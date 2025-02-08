-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2025 at 06:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazoor.uz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(128) NOT NULL,
  `pr_title` varchar(128) NOT NULL,
  `pr_image` varchar(1000) NOT NULL,
  `pr_price` int(128) NOT NULL,
  `pr_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `pr_token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_title`, `pr_image`, `pr_price`, `pr_time`, `pr_token`) VALUES
(1, 'Kema', 'https://byronbay.com/wp-content/uploads/2021/11/byronstanduppaddle-99-680x500.jpeg', 500, '2025-02-07 19:45:37', '22ejii2ilkn2n2m2222131jnj2n2n2n1101'),
(2, 'Chang`i', 'https://b3852966.smushcdn.com/3852966/wp-content/uploads/2024/11/53629365679_ebd8c10e05_o-rotated-680x500.jpg?lossy=1&strip=1&webp=1', 70, '2025-02-07 19:46:33', '1928938129328100222'),
(3, 'Arqon', 'https://xperienceadventure.com/wp-content/uploads/2023/09/rappelling-in-tamil-nadu-package-680x500.jpg', 12, '2025-02-07 19:47:04', '23232382220900903022'),
(4, 'Budda', 'https://112qhm1gcvgmd.cdn.shift8web.com/wp-content/webp-express/webp-images/uploads/2023/09/Balamuri-Varanasi-Kashi-Jyotirlinga-Gaya-Prayagraj-Ayodhya-Tour-Package-From-Bangalore-680x500.jpg.webp', 0, '2025-02-07 19:49:46', '2321312999220332323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
