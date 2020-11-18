-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(6) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `usertype`, `emailid`) VALUES
(8, 'pramuka', '202cb962ac59075b964b07152d234b70', 'reguser', 'user@gmail.com'),
(9, 'Juz', '202cb962ac59075b964b07152d234b70', 'admin', 'user2@gmail.com'),
(10, 'pathmika', '202cb962ac59075b964b07152d234b70', 'seller', 'seller@gmail.com'),
(11, 'shifna', '202cb962ac59075b964b07152d234b70', 'nutrition', 'nutritionist@gmail.com'),
(12, 'Kumar', '202cb962ac59075b964b07152d234b70', 'delivery', 'delivery@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `subject`, `message`) VALUES
('Anjali', 'anjali@gmail.com', 'Register as Delivery person', 'can i get more information about registering as a delivery person');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydriver`
--

CREATE TABLE `deliverydriver` (
  `username` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `license` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverydriver`
--

INSERT INTO `deliverydriver` (`username`, `nic`, `license`, `contact`, `email`, `password`) VALUES
('Ramesh', '667589123v', '2587469321', 789564883, 'Rama@gmail.com', 'rama@123'),
('L.K.Gunawardana', '772564138v', '8956231596', 777584861, 'lkg@gmail.com', 'lkg123');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `foodName` varchar(30) NOT NULL,
  `calories` int(11) NOT NULL,
  `protein` float NOT NULL,
  `fat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `foodName`, `calories`, `protein`, `fat`) VALUES
(1, 'Barley', 346, 9, 1.4);

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `Item_id` int(222) NOT NULL,
  `Res_id` int(222) NOT NULL,
  `FName` varchar(222) NOT NULL,
  `Description` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`Item_id`, `Res_id`, `FName`, `Description`, `price`, `img`) VALUES
(1, 2, 'Grilled Chicken Sandwich', '370 calories, 34 grams protein, 10 grams fat. They keep the fat low with a smokey honey mustard dressing and a healthy spring mix of greens.', '300.00', '5fb4c35dab756.jpg'),
(2, 1, 'Fried Rice', 'Shrimp fried rice, 1 cup Calories: 321 •Carbs: 42g •Fat: 12g •Protein: 11g', '450.00', '5fb4c41636095.jpg'),
(3, 2, 'Pork Fried Rice', 'Pork Fried Rice, 1 cup Calories: 335 •Carbs: 42g •Fat: 13g •Protein: 12g', '500.00', '5fb4c45656557.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionist`
--

CREATE TABLE `nutritionist` (
  `username` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutritionist`
--

INSERT INTO `nutritionist` (`username`, `nic`, `status`, `email`) VALUES
('Amali Finseka', '772564138v', 'Bsc.in Nutrition & Dietetics.(University of Hawai)', 'amali@gmail.com'),
('L.K.Gunawardana', '667589123v', 'Bachelor of Science in Nutrition & Dietetics(University of New Mexico, Albuquerque)', 'lkg@gmail.com'),
('R.B.Rameshkujmar', '667589123v', 'Bsc(Special) in Food Science & Nutrition.(university of Wayamba)', 'rbRamesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `email`, `title`, `message`) VALUES
(13, 'Anjali', 'Anjali@gmail.com', 'Healthy Fish masala ', 'Its my first post like and share . Do you love fish that try this delicious food which is healthy to'),
(14, 'Nimal ', 'Nimal88@gmail.com', 'Saambar Sooru', 'Rice cooked with lentils, vegetables with a glaze of tamarind juice.It is a Tamil cultural vegetaria');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `uid` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bmi` float NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`uid`, `name`, `username`, `address`, `age`, `gender`, `height`, `weight`, `bmi`, `password`) VALUES
(1, 'Juzly Ahamed', 'Juz', 'Kattankudy', 22, 'Male', 1.72, 65, 22, '123');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `location`, `description`, `image`) VALUES
(7, 'Green Food', 'colombo 10', 'sfsdfsfsfsfsffsfssfdfsd', 'Images/restaurant/1.jpg'),
(8, 'The Escape', 'Galle', 'dfsfkjjgjgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'Images/restaurant/2.jpg'),
(9, ' Walawwa Kade', 'Kandy', 'assdsddggghjgsghggdsgdjsgdgsjdgjggjsgjsghjdgsjgjdsgjsgsgdgsjhgdggjsggshjgsjgjsgjhsgjdgjds', 'Images/restaurant/3.jpg'),
(10, 'Monkeybean Cafe', 'Maharagama', 'dasauyutruwuyuieiytyuetuqyeiyqeyqiyewyeyqiyeuqueqyuieyyeuiweyqiyeuie', 'Images/restaurant/4.jpg'),
(11, 'Vege Dine', 'Maharagama', 'sdhjshdjkhdhhHJKHBJBZBZBXJKBJKBKJBKbjkbkjbbbsdhsdsdhjhjgjsdgd', 'Images/restaurant/5.jpg'),
(12, 'Matara Bath Kade', 'Colombo 7', 'fsssjhkhhhshfhshshdfhhhdhjhdkhshjkddskhjkkhdfhsdfsd', 'Images/restaurant/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `res_id` int(11) NOT NULL,
  `storename` varchar(50) NOT NULL,
  `storeaddress` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `businesstype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`res_id`, `storename`, `storeaddress`, `firstname`, `lastname`, `phonenumber`, `email`, `businesstype`) VALUES
(1, 'Mathara bath kade', '113/1,Horana,Kaluthara', 'Pathmika', 'Weerarathna', 723685591, 'mathara@gmail.com', 'Restaurant'),
(2, 'dansala', '123,ragama', 'saman', 'perera', 116985736, 'dansala@com', 'Restaurant'),
(3, 'sri vihar', '45,thunmulla', 'chamath', 'nishantha', 341236896, 'sarath@com', 'Conveniencestore');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(11) NOT NULL,
  `usertype` varchar(11) NOT NULL,
  `description` varchar(11) NOT NULL,
  `amount` float NOT NULL,
  `status` varchar(11) NOT NULL,
  `emailid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `username`, `usertype`, `description`, `amount`, `status`, `emailid`) VALUES
(1, '2020-11-10', 'Juzly', 'reguser', 'Concultancy', 500, 'Due', 'juzlyahamed8@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `age` decimal(3,0) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bmi` float NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `emailid`, `age`, `height`, `weight`, `bmi`, `password`) VALUES
(1, 'Juz', 'Juzly', 'juzlyahamed8@gmail.com', '22', 173, 71, 22.4, '202cb962ac59075b964b'),
(2, 'Naaz', 'Nazik', 'naaz@gmail.com', '24', 170, 96, 29, '202cb962ac59075b964b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `deliverydriver`
--
ALTER TABLE `deliverydriver`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `Res_id` (`Res_id`);

--
-- Indexes for table `nutritionist`
--
ALTER TABLE `nutritionist`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `Item_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD CONSTRAINT `fooditem_ibfk_1` FOREIGN KEY (`Res_id`) REFERENCES `seller` (`res_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
