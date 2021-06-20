-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 11:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosegardens`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'indoor'),
(2, 'outdoor'),
(3, 'office plants');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buy`
--

CREATE TABLE `tbl_buy` (
  `Buy_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Buy_date` date NOT NULL,
  `Buy_quantity` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Plant_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `Plant_id`, `amount`, `status`, `order_id`) VALUES
(20, 20, 26, 209, 3, 12),
(21, 20, 28, 309, 3, 13),
(22, 20, 26, 209, 3, 14),
(24, 16, 26, 209, 1, 0),
(26, 20, 26, 209, 3, 15),
(28, 20, 24, 309, 3, 16),
(29, 20, 26, 209, 3, 18),
(30, 20, 25, 299, 3, 19),
(31, 20, 24, 309, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_design`
--

CREATE TABLE `tbl_design` (
  `design_id` int(11) NOT NULL,
  `design_name` varchar(100) NOT NULL,
  `design_description` varchar(100) NOT NULL,
  `dstatus` int(11) NOT NULL,
  `dimage1` varchar(100) NOT NULL,
  `designer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_design`
--

INSERT INTO `tbl_design` (`design_id`, `design_name`, `design_description`, `dstatus`, `dimage1`, `designer_id`) VALUES
(1, 'Landscape Masters - Garden Designing | Landscape Designing | Kochi11111111111', 'Landscape Masters - Garden Designing | Landscape Designing | KochiPattathil Building, 2nd Floor,, 22', 1, '2019-10-08.jpg', 22),
(2, 'Landscape Masters - Garden Designing 1| Landscape Designing | Kochi', 'Landscape Masters - Your perfect match for landscaping and garden designing in Kochi', 1, '2019-09-28.jpg', 22),
(4, 'Landscape Masters - Garden Designing 1| Landscape Designing | Kochi', 'xvcxv', 1, '2019-09-09.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `Fd_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `role`, `username`, `password`, `status`) VALUES
(16, 'user', 'jeswin', '7472bc62bdc0177f6d1c555d7ec81e83', 1),
(20, 'user', 'febily', '4022f94e35e4811f844e2d9d0b4f7638', 1),
(14, 'user', 'ahil123', '3675b7d486abfafdbd9f561cff9c1320', 1),
(13, 'user', 'ahil123', '3675b7d486abfafdbd9f561cff9c1320', 1),
(19, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(22, 'gardner', 'sachu', '66d6176ed18880a2bff8370b1cc95d22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `Order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Status` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`Order_id`, `user_id`, `Date`, `Status`, `total`) VALUES
(12, 20, '2021-05-17', 1, 309),
(13, 20, '2021-05-17', 1, 409),
(14, 20, '2021-05-18', 1, 309),
(15, 20, '2021-05-31', 1, 309),
(16, 20, '2021-06-05', 1, 409),
(17, 20, '2021-06-05', 1, 0),
(18, 20, '2021-06-05', 1, 0),
(19, 20, '2021-06-05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Pay_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Pay_date` date NOT NULL,
  `Pay_mode` varchar(20) NOT NULL,
  `Pay_amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plant`
--

CREATE TABLE `tbl_plant` (
  `Plant_id` int(11) NOT NULL,
  `Plant_name` varchar(50) NOT NULL,
  `Plant_category` int(20) NOT NULL,
  `Plant_description` varchar(50) NOT NULL,
  `Plant_height` varchar(20) NOT NULL,
  `Common_name` varchar(50) NOT NULL,
  `Bloom_time` varchar(50) NOT NULL,
  `Flower_colour` varchar(20) NOT NULL,
  `Planting_care` varchar(50) NOT NULL,
  `Plant_amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Image1` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_plant`
--

INSERT INTO `tbl_plant` (`Plant_id`, `Plant_name`, `Plant_category`, `Plant_description`, `Plant_height`, `Common_name`, `Bloom_time`, `Flower_colour`, `Planting_care`, `Plant_amount`, `Status`, `Image1`) VALUES
(23, 'Jade mini', 1, 'Crassula Green Mini can be propagated by stem cutt', '150cm', 'Jade Plant Mini', 'NO FLOWER', 'The Crassula Green M', 'Low maintenance', 295, 1, 'crassulagreenmini_45.jpg'),
(26, 'Portulaca Oleracea', 2, 'Portulaca Oleracea, 10 O Clock is an annual succul', '6 inch (15 cm)', 'Red root, Common purslane, Verdolaga, Little hogwe', 'Summer to frost', 'Yellow', 'Easy to grow', 209, 1, 'dsfd.jpg'),
(24, 'Scented rose ', 2, 'Scented roses are known for its distinct fragrance', '12 inch (30 cm)', 'Damask rose, rose of Castile', 'year-round', 'Any Color', 'Apply 4 cups (Approx. 200 ml) water when the topso', 309, 1, 'nurserylive-rose-red-plant_295x295.jpg'),
(25, 'Money plant marble prince', 1, 'marble prince plants are best to fill the house wi', '4 inch (10 cm)', 'Pothos, Devils Ivy and Silver Vine.', 'Rarely blooms.', 'Greenish-colored spa', 'Apply 1 cup (Approx. 50 ml) water when the topsoil', 299, 1, 'moneyplant.jpg'),
(27, 'Miniature Rose', 2, 'The rose is a perennial flowering plant.The flower', '19 inch (48 cm)', 'Mini rose, Rosa, Gulab', 'Year-round', 'pink', 'Apply 4 cups (Approx. 200 ml) water when the topso', 299, 1, '21.jpg'),
(28, 'Tagar Mini ', 2, 'rape Jasmine is a common flowering, ornamental and', '18 inch (46 cm)', 'Crape Jasmine', 'all season', 'White', 'Full Sun to Partial Shade', 309, 1, 'nurserylive-tagar-mini_362x362.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quantity`
--

CREATE TABLE `tbl_quantity` (
  `qid` int(11) NOT NULL,
  `Plant_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quantity`
--

INSERT INTO `tbl_quantity` (`qid`, `Plant_id`, `quantity`) VALUES
(2, 23, 11),
(3, 26, 6),
(4, 24, 9),
(5, 25, 9),
(6, 27, 10),
(7, 28, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `Reg_id` int(11) NOT NULL,
  `login_id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`Reg_id`, `login_id`, `fname`, `lname`, `email`, `phone`) VALUES
(12, 8, 'adhin', 'babu', 'adhin@gmail.com', 7907212392),
(18, 16, 'jeswin', 'antony', 'jeswin@gmail.com', 7907212392),
(20, 19, 'admin', 'admin', 'admin@gmail.com', 965925708),
(21, 20, 'febily', 'franklin', 'febzfranklin@gmail.com', 9605925708),
(22, 21, 'NIMMY', 'JULIET', 'febzfranklin@gmail.com', 9497418661),
(23, 22, 'Sachu', 'siby', 'febzfranklin@gmail.com', 9497418661);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_buy`
--
ALTER TABLE `tbl_buy`
  ADD PRIMARY KEY (`Buy_id`),
  ADD UNIQUE KEY `Reg_id` (`Reg_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_design`
--
ALTER TABLE `tbl_design`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`Fd_id`),
  ADD UNIQUE KEY `Reg_id` (`Reg_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Pay_id`),
  ADD UNIQUE KEY `Reg_id` (`Reg_id`);

--
-- Indexes for table `tbl_plant`
--
ALTER TABLE `tbl_plant`
  ADD PRIMARY KEY (`Plant_id`);

--
-- Indexes for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`Reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_design`
--
ALTER TABLE `tbl_design`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_plant`
--
ALTER TABLE `tbl_plant`
  MODIFY `Plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
