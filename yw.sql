-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 04:25 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yw`
--

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE `Address` (
  `address_id` int NOT NULL,
  `user_id` int NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `pincode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Address`
--

INSERT INTO `Address` (`address_id`, `user_id`, `state`, `city`, `street`, `pincode`) VALUES
(3001, 24001, 'Karnataka', 'Bengaluru', 'Ullal Upanagar', 560056),
(3002, 24002, 'Karnataka', 'Bengaluru', 'Channasandra', 560098);

-- --------------------------------------------------------

--
-- Table structure for table `Drivers`
--

CREATE TABLE `Drivers` (
  `driver_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Drivers`
--

INSERT INTO `Drivers` (`driver_id`, `name`, `phone`, `location`, `email`) VALUES
(4001, 'Mahesh', '0000000000', '12.902188,77.518563', 'mahesh@delivery.com'),
(4002, 'Ramesh', '1111111111', '12.952637764399224, 77.54095503218228', 'ramesh@delivery.com'),
(4003, 'Suresh', '2222222222', '12.907147890376503, 77.49914068847922', 'suresh@delivery.com'),
(4004, 'Brahmesh', '3333333333', '12.92589700476944, 77.49929910528323', 'brahmesh@delivery.com'),
(4005, 'Nagananda', '7777777777', '12.963707650003279, 77.50593864138135', 'nagananda@yummie.com'),
(4006, 'Hanumantha', '0000000001', '12.935856420607399, 77.53524982213646', 'hanu@delivery.com'),
(4007, 'Lakshmisha', '0000000011', '12.936347878059921, 77.53865086292218', 'laksmi@delivery.com'),
(4008, 'Manju', '0000100011', '12.934413412244293, 77.53220283270251', 'manju@delivery.com'),
(4009, 'Murali', '9886665809', '12.935950529521122, 77.53521763541792', 'murali@delivery.com'),
(4010, 'Jayanth', '0000000123', '12.940718669920193, 77.52657019377584', 'jay@delivery.com');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `menu_id` int NOT NULL,
  `restaurant_id` int NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`menu_id`, `restaurant_id`, `item_name`, `price`, `img`) VALUES
(1, 101, 'Margherita Pizza', '85.00', './img/menu/1.jpg'),
(2, 101, 'Neapolitan pizza', '145.00', './img/menu/2.jpg'),
(3, 101, 'Veggie pizza', '190.00', './img/menu/3.jpg'),
(4, 101, 'Pepperoni', '145.00', './img/menu/4.jpg'),
(5, 101, 'Supreme Pizza', '190.00', './img/menu/5.jpg'),
(6, 101, 'Sicilian pizza', '135.00', './img/menu/6.jpg'),
(7, 101, 'Corn Pizza', '155.00', './img/menu/7.jpg'),
(8, 101, 'Indi Tandoori Paneer', '145.00', './img/menu/8.jpg'),
(9, 101, 'Moroccan Spice Pasta Pizza', '190.00', './img/menu/9.jpg'),
(10, 101, 'Achari Do Pyaza', '230.00', './img/menu/10.jpg'),
(11, 102, 'Vegetable fried rice', '260.00', './img/menu/11.jpg'),
(12, 102, 'Panner butter masala', '290.00', './img/menu/12.jpg'),
(13, 102, 'Panner biriyani', '290.00', './img/menu/13.jpg'),
(14, 102, 'Dal kichadi', '225.00', './img/menu/14.jpg'),
(15, 102, 'Kadai vegetables', '255.00', './img/menu/15.jpg'),
(16, 102, 'Roti with veg curry', '85.00', './img/menu/16.jpg'),
(17, 102, 'Egg dosa with gravy', '190.00', './img/menu/17.jpg'),
(18, 102, 'Mushroom masala rice', '285.00', './img/menu/18.jpg'),
(19, 102, 'Palak panner', '290.00', './img/menu/19.jpg'),
(20, 102, 'Chicken Guntur dry', '325.00', './img/menu/20.jpg'),
(21, 103, 'North Meals', '95.00', './img/menu/21.jpg'),
(22, 103, 'Tomato Soup', '50.00', './img/menu/22.jpg'),
(23, 103, 'Gobi Manchurian', '85.00', './img/menu/23.jpg'),
(24, 103, 'Baby Corn Manchurian', '95.00', './img/menu/24.jpg'),
(25, 103, 'Paneer Butter Masala', '165.00', './img/menu/25.jpg'),
(26, 103, 'Paneer Chilli', '125.00', './img/menu/26.jpg'),
(27, 103, 'Palak Paneer', '125.00', './img/menu/27.jpg'),
(28, 103, 'Kesari Bath', '40.00', './img/menu/28.jpg'),
(29, 103, 'Paneer Fried Rice', '90.00', './img/menu/29.jpg'),
(30, 103, 'Set Dosa', '65.00', './img/menu/30.jpg'),
(31, 104, 'Stuffed Chicken Pizza', '215.00', './img/menu/31.jpg'),
(32, 104, 'Roasted Chicken & Corn', '255.00', './img/menu/32.jpg'),
(33, 104, 'Peppy Paneer Tikka', '156.00', './img/menu/33.jpg'),
(34, 104, 'Paneer Tikka', '150.00', './img/menu/34.jpg'),
(35, 104, 'Brownie with Hot Chocolate', '125.00', './img/menu/35.jpg'),
(36, 104, 'Brownie Blast Jar', '95.00', './img/menu/36.jpg'),
(37, 104, 'Chicken Tikka Skewer', '200.00', './img/menu/37.jpg'),
(38, 104, 'Grilled Chicken Burger', '215.00', './img/menu/38.jpg'),
(39, 105, 'Masala dosa', '60.00', './img/menu/39.jpg'),
(40, 105, 'Sagu masala dosa', '65.00', './img/menu/40.jpg'),
(41, 105, 'Uddina vada', '30.00', './img/menu/41.jpg'),
(42, 105, 'Masala Vada', '30.00', './img/menu/42.jpg'),
(43, 105, 'Idli', '35.00', './img/menu/43.jpg'),
(44, 105, 'Khara Bath', '30.00', './img/menu/44.jpg'),
(45, 105, 'Kesari Bath ', '30.00', './img/menu/45.jpg'),
(46, 105, 'Poori Saagu', '45.00', './img/menu/46.jpg'),
(47, 106, 'Dry fruit with softy', '65.00', './img/menu/47.jpg'),
(48, 106, 'Eggless cake fudge ', '65.00', './img/menu/48.jpg'),
(49, 106, 'Hot chocolate fudge', '80.00', './img/menu/49.jpg'),
(50, 106, 'Gudbud', '70.00', './img/menu/50.jpg'),
(51, 106, 'Special falloda ', '75.00', './img/menu/51.jpg'),
(52, 106, 'Nut sundae', '85.00', './img/menu/52.jpg'),
(53, 106, 'Chocolate sundae', '80.00', './img/menu/53.jpg'),
(54, 106, 'honey nut crunch', '85.00', './img/menu/54.jpg'),
(55, 107, 'Allo dum biriyani ', '165.00', './img/menu/55.jpg'),
(56, 107, 'Mushroom biriyani', '180.00', './img/menu/56.jpg'),
(57, 107, 'Chilly fish', '180.00', './img/menu/57.jpg'),
(58, 107, 'Chilly chicken', '180.00', './img/menu/58.jpg'),
(59, 107, 'Veg kadai', '125.00', './img/menu/59.jpg'),
(60, 107, 'Egg fried rice', '125.00', './img/menu/60.jpg'),
(61, 107, 'Meghana special biryani', '160.00', './img/menu/61.jpg'),
(62, 107, 'Chicken lollypop', '150.00', './img/menu/62.jpg'),
(63, 108, 'Ghee plain dosa', '90.00', './img/menu/63.jpg'),
(64, 108, 'Ghee pudi masala dosa', '120.00', './img/menu/64.jpg'),
(65, 108, 'Garlic roast dosa', '120.00', './img/menu/65.jpg'),
(66, 108, 'Sakkarai Pongal ', '80.00', './img/menu/66.jpg'),
(67, 108, 'Ghee pudi khara bhath', '75.00', './img/menu/67.jpg'),
(68, 108, 'Poori saagu', '75.00', './img/menu/68.jpg'),
(69, 108, 'Gulab jamun', '35.00', './img/menu/69.jpg'),
(70, 108, 'Puliyogare', '110.00', './img/menu/70.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `driver_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`order_id`, `user_id`, `order_total`, `delivery_status`, `driver_id`, `menu_id`) VALUES
(1, 24001, '21.00', 'cooking', 4001, 27),
(2, 24001, '32.00', 'pending', 4002, 10),
(3, 24001, '43.00', 'delivered', 4003, 59);

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `payment_id` int NOT NULL,
  `order_id` int NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`payment_id`, `order_id`, `payment_method`, `amount`, `status`) VALUES
(2024001, 3, 'CREDIT CARD', '43.00', 'Success'),
(2024002, 2, 'DEBIT CARD', '21.00', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `rating_id` int NOT NULL,
  `user_id` int NOT NULL,
  `restaurant_id` int NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Restaurants`
--

CREATE TABLE `Restaurants` (
  `restaurant_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `desp` varchar(300) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Restaurants`
--

INSERT INTO `Restaurants` (`restaurant_id`, `name`, `address`, `phone`, `desp`, `img`) VALUES
(101, 'Dominos', 'DP 65807 R1/9/MAGR/GL-S/4, Ground Floor, Namma Metro, MG Road, Bangalore', '9886665807', 'Domino’s has more than 20,000 stores in over 90 international markets across the globe, and we’re still growing! ', './img/res/101.jpg'),
(102, 'Nandhana Palace', '#7, 4th B block, Near BDA Complex, Koramangala, Bangalore – 560034', '08046131111', 'At our Andhra Restaurant, we promise an intimate and relaxed dining experience to our patrons and ensure them a memorable food experience every time. We’ve redefined the authentic Andhra style restaurant.', './img/res/102.jpg'),
(103, 'Shanti Sagar', 'Marenahalli Main Rd, Govindaraja Nagar Ward, PF Layout, Vijayanagar, Bengaluru, Karnataka 560040', '08023400234', 'a commercial establishment that provides lodging, meals, and other services to guests, travelers, and tourists', './img/res/103.jpg'),
(104, 'Onesta', '#335,IdealHome.BKVHVP Aracade,Rajarajeshwari Temple Rd,Rajarajeshwari, Nagar,Bengaluru,Karnataka,560098', '9513736269', 'Onesta has always aimed to be more than just a pizzeria. We intend to become an experience for all. It’s our customer experience that inspires us to create more fun recipes', './img/res/104.jpg'),
(105, 'Vidyarthi Bhavan', '32, Gandhi Bazaar Main Rd, Gandhi Bazaar, Basavanagudi, Bengaluru, Karnataka 560004', '08026677588', 'Vidyarthi Bhavan, a heritage South Indian vegetarian restaurant, started in 1943 as a small student\'s eatery.', './img/res/105.jpg'),
(106, 'Cool Joint', '11th Main, 70, 30th Cross Rd, Geetha Colony, 4th T Block East, Jayanagar, Bengaluru, Karnataka 560011', '9035444671', 'Cool joint is the best place to have sandwiches in Jayanagar. The place is always crowded with people but the service is really fast.', './img/res/106.jpg'),
(107, 'Meghana Foods', '52, 1st Floor, 33rd Cross Rd, near Cafe Coffee Day, 4th Block, Jayanagar, Bengaluru, Karnataka 560011', '70229 02913', 'Meghana, meaning rain, is a restaurant that was started in the year 2006, at Koramangala, Bengaluru with the intention of serving authentic Andhra style food', './img/res/107.jpg'),
(108, 'Rameshwaram Cafe', '119, 12TH B CROSS, 19TH MAIN, J P NAGAR 2ND PHASE, BANGALORE, KARNATAKA - 560078', '8151999191', 'The Rameshwaram Cafe is a premium South Indian chain of QSR module and is a trademark registered brand under the mother company M/s. Altran Ventures Pvt. Ltd.', './img/res/108.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `name`, `email`, `password`, `phone`) VALUES
(24001, 'Vivek', 'vivek@example.com', 'password', '1234567890'),
(24002, 'Vinay', 'vinay@example.com', 'wordpass', '0987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Drivers`
--
ALTER TABLE `Drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `Restaurants`
--
ALTER TABLE `Restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Address`
--
ALTER TABLE `Address`
  MODIFY `address_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3031;

--
-- AUTO_INCREMENT for table `Drivers`
--
ALTER TABLE `Drivers`
  MODIFY `driver_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4011;

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024052;

--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `rating_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Restaurants`
--
ALTER TABLE `Restaurants`
  MODIFY `restaurant_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24156;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Address`
--
ALTER TABLE `Address`
  ADD CONSTRAINT `Address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);

--
-- Constraints for table `Menu`
--
ALTER TABLE `Menu`
  ADD CONSTRAINT `Menu_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `Restaurants` (`restaurant_id`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `Drivers` (`driver_id`),
  ADD CONSTRAINT `Orders_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `Orders_ibfk_5` FOREIGN KEY (`menu_id`) REFERENCES `Menu` (`menu_id`);

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `Orders` (`order_id`);

--
-- Constraints for table `Rating`
--
ALTER TABLE `Rating`
  ADD CONSTRAINT `Rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `Rating_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `Restaurants` (`restaurant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
