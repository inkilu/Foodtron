-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 09:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodtron_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`) VALUES
('591931414', 'Ghee Masala Dosa', '80');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`) VALUES
(200, 'Chocolate Shake', 60),
(201, 'Mango Lassi', 50),
(202, 'Banana Lassi', 40),
(203, 'Cherry Blossom', 50),
(204, 'Blue Lagoon', 50),
(205, 'Litchi Mojo', 50),
(206, 'Red Lime', 50);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Cid` varchar(11) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Complaint` varchar(2000) NOT NULL,
  `repl` varchar(2000) NOT NULL,
  `sts` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`Cid`, `Uname`, `Email`, `Complaint`, `repl`, `sts`) VALUES
('166', 'Gautham', 'gautham@gmail.com', 'Nice Website', 'Thank You!', 'RESPONDED'),
('176', 'Arun', 'arun@gmail.com', 'Good website', 'nice', 'RESPONDED'),
('397', 'jithin', 'jithin@gmail.com', 'Kidu', 'Thank You!', 'RESPONDED'),
('5', 'Gautham', 'midun@gmail.com', 'Midun M nalla website kidu', 'Thank You!', 'RESPONDED');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(100, 'Ghee Masala Dosa', 80),
(101, 'Spicy Chilly Chicken', 120),
(102, 'Biryani', 180),
(103, 'Fried Rice', 165),
(104, 'Beef Steak', 230),
(105, 'Spicy Chicken Burger', 120),
(106, 'Ceaser Salad', 65);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `dtype` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `house` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `aptno` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `noc` varchar(20) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `expmonth` varchar(20) NOT NULL,
  `expyear` varchar(20) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `prods` varchar(2000) NOT NULL,
  `payment` int(30) NOT NULL,
  `dstatus` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `dtype`, `fname`, `lname`, `house`, `street`, `aptno`, `town`, `zip`, `email`, `phno`, `noc`, `cardtype`, `cardno`, `expmonth`, `expyear`, `cvv`, `prods`, `payment`, `dstatus`) VALUES
('121', 'hd', 'john', 'kunj', 'gautham ho12m', 'Kuzhimattom', '123444', 'Kottayam', '212121', 'vcvc@gmail.com', '7689874675', 'Kunj Poli', 'visa', '222222222222', 'april', '2026', '22222', 'Ceaser Salad,Spicy Chilly Chicken,Biryani', 404, 'Delivered'),
('177', 'hd', 'Gautham', 'Krishna', 'Madamana Illam', 'Velloothuruthy', 'Kuzhimattom p.o', 'Kottayam', '686533', 'gautham@gmail.com', '9497441773', 'Gautham Krishna M', 'visa', '1234567465', 'april', '2023', '223', 'Biryani,Banana Lassi,Cherry Blossom', 309, 'Delivered'),
('182', 'hd', 'john', 'kunj', 'vcvc', 'gg', 'ggjgjgj', 'Kottayam', '56556', 'vcvc@gmail.com', '44455', 'bbgjggj', 'visa', '7989898', 'jan', '2021', '777', 'Ghee Masala Dosa', 93, 'Delivered'),
('274', 'dt', 'john', 'kunj', 'Somalayam', 'Valiyapaara', 'vcvc', 'gg', '212121', 'babu@gmail.com', '7689874675', 'pooran', 'visa', '22222', 'jan', '2021', '234', 'Blue Lagoon,Cherry Blossom,Chocolate Shake', 199, 'Not Delivered'),
('483', 'hd', 'Arun', 'Padmanabhan', 'Nandanam', 'Kochi', 'Kuzhimattom p.o', 'Karachi', '67889', 'midun@gmail.com', '676868686', 'Midun M', 'visa', '7900770700', 'jan', '2021', '456', 'Ghee Masala Dosa', 93, 'Delivered'),
('552', 'hd', 'sir', 'jithin', 'Nandanam', 'Kochi', 'Kuzhimattom p.o', 'Kottayam', '688007', 'sir123@gmail.com', '702344563', 'sir', 'other', '123', 'jan', '2021', '21', 'Ghee Masala Dosa,Ghee Masala Dosa,Ghee Masala Dosa', 279, 'Delivered'),
('561', 'hd', 'Midun', 'M', 'Nandanam', 'Kochi', 'Kandam', 'Karachi', '567654', 'midun@gmail.com', '9878765678', 'Midun M', 'visa', '2334556675467', 'aug', '2024', '234', 'Biryani,Ceaser Salad', 271, 'Delivered'),
('907', 'hd', 'jithin', 'M', 'Nandanam', 'Kochi', 'Kuzhimattom p.o', 'Karachi', '346545', 'jithin@gmail.com', '3456789765', 'Midun M', 'visa', '3456765456', 'may', '2023', '456', 'Spicy Chicken Burger', 133, 'Delivered'),
('968', 'hd', 'Arun', 'Padmanabhan', 'Nandanam', 'Kochi', 'Kuzhimattom p.o', 'Kottayam', '456786', 'gautham@gmail.com', '9878654567', 'Arun Padmanabhan', 'visa', '1234', 'jan', '2021', '234', 'Banana Lassi,Ghee Masala Dosa,Beef Steak,Ghee Masala Dosa,Biryani,Ghee Masala Dosa', 768, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(8, 'John', 'John@gmail.com', 'john123'),
(9, 'Babu', 'babu@gmail', '1234'),
(10, 'Gautham', 'gautham@gmail', '12345'),
(11, 'Midun', 'midun@gmail.com', '12345'),
(12, 'jithin', 'jithin@gmail.com', '1234'),
(13, 'miss', 'miis@gmail.com', '123'),
(14, 'Arun', 'arun@gmail.com', '12345'),
(15, 'sir', 'sir123@gmail.com', '123456'),
(16, 'Ajai', 'ajaijose007@gmail.co', 'jose123'),
(17, 'Varun', 'varun123@gmail.com', 'varun123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
