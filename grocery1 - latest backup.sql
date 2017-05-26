-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 07:10 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_city` varchar(255) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_contact` varchar(50) NOT NULL,
  `cust_state` varchar(255) NOT NULL,
  `cust_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_city`, `cust_email`, `cust_contact`, `cust_state`, `cust_country`) VALUES
(1, 'Usagi', 'Sibu', 'sakitgigi77@gmail.com', '019-2445775', 'Sarawak', 'Malaysia'),
(2, 'Bautista', 'Miri', 'baubau39@yahoo.com', '016-4262213', 'Sarawak', 'Malaysia'),
(3, 'Helicoco', 'Kajang', 'helicoconut@yahoo.com', '017-4240066', 'Selangor', 'Malaysia'),
(4, 'Duacent', 'Bintulu', 'keepthechanges@gmail.com', '015-8023921', 'Sarawak', 'Malaysia'),
(6, 'Hannan Abdul', 'Mukah', 'hannandul@gg.com', '014-2699043', 'Sarawak', 'Malaysia'),
(7, 'Amirul Hesyam', 'Mukah', 'uwansumfuk@gg.com', '017-246092', 'Sarawak', 'Malaysia'),
(8, 'Faizul', 'Miri', 'fz@gg.com', '019-2464421', 'Sarawak', 'Malaysia'),
(9, 'Jackson', 'Sibu', 'jckson32@gmail.com', '014-6824231', 'Sarawak', 'Malaysia'),
(10, 'Samuel', 'Sibu', 'samsamla12@gmail.com', '014-255624', 'Sarawak', 'Malaysia'),
(11, 'Jessica', 'Bintangor', 'jessiyolo@gmail.com', '014-2523152', 'Sarawak', 'Malaysia'),
(12, 'Crystal', 'Kuching', 'crystalmaiden@gmail.com', '016-2456943', 'Sarawak', 'Malaysia'),
(13, 'Evelyn', 'Tawau', 'evelynwu53@gmail.com', '014-682423', 'Sabah', 'Malaysia'),
(14, 'Eliah', 'Cheras', 'eliahma76@gmail.com', '014-525821', 'Selangor', 'Malaysia'),
(15, 'Stefan', 'Shah Alam', 'stafan@gmail.com', '014-2388522', 'Selangor', 'Malaysia'),
(16, 'Elena', 'Puchong', 'elenanabang16@gmail.com', '019-9024212', 'Selangor', 'Malaysia'),
(17, 'Justin', 'Kuala Lumpur', 'justintin999@gmail.com', '014-2762023', 'Selangor', 'Malaysia'),
(18, 'Alan', 'Kuching', 'alanaay55@hotmail.com', '019-249852', 'Sarawak', 'Malaysia'),
(19, 'Daniel', 'Kuching', 'damndaniel@hotmail.com', '016-2990312', 'Sarawak', 'Malaysia'),
(20, 'Caroline', 'Sibu', 'carolino93@gmail.com', '010-2412352', 'Sarawak', 'Malaysia'),
(21, 'Bonnie', 'Miri', 'verybonnie76@gmail.com', '014-502831', 'Sarawak', 'Malaysia'),
(22, 'Rick', 'Miri', 'rickylukt11@gmail.com', '014-2448221', 'Sarawak', 'Malaysia'),
(23, 'Niklaus', 'Shah Alam', 'nikolokas@gmail.com', '014-5823121', 'Selangor', 'Malaysia'),
(24, 'Rebekah', 'Bintangor', 'bekakodah@yahoo.com', '014-5772301', 'Sarawak', 'Malaysia'),
(25, 'Kimmy', 'Sibu', 'verybonnie76@yahoo.com', '014-8427322', 'Sarawak', 'Malaysia'),
(26, 'Chan', 'Sibu', 'chanchancui@gmail.com', '014-5283101', 'Sarawak', 'Malaysia'),
(27, 'Hanbin', 'Shah Alam', 'hanbingor32@outlook.com', '015-2622112', 'Selangor', 'Malaysia'),
(28, 'Bobby', 'Kuala Lumpur', 'bobbybang12@outlook.com', '017-566633', 'Selangor', 'Malaysia'),
(29, 'Mina', 'Kuala Lumpur', 'minakadila@gmail.com', '018-552315', 'Selangor', 'Malaysia'),
(30, 'Aisyah', 'Miri', 'sitiaiys@gmail.com', '014-992852', 'Sarawak', 'Malaysia'),
(33, 'Umer', 'Sibu', 'umer@live.com', '014-2319954', 'Sarawak', 'Malaysia'),
(34, 'Michael', 'Miri', 'mlg@gg.com', '014-235992', 'Sarawak', 'Malaysia'),
(35, 'Patricia', 'Miri', 'patty@rocket.com', '014-99231553', 'Sarawak', 'Malaysia'),
(36, 'kali', 'Miri', 'kali@gmail.com', '018-2499751', 'Sarawak', 'Malaysia'),
(37, 'Ah Chai', 'Kuching', 'ac@dc.com', '012-2424512', 'Sarawak', 'Malaysia'),
(38, 'Mikail', 'Sibu', 'mikail58@gmail.com', '014-9856669', 'Sarawak', 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_city` varchar(255) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_contact` varchar(50) NOT NULL,
  `emp_salary` decimal(15,2) NOT NULL,
  `emp_state` varchar(255) NOT NULL,
  `emp_country` varchar(255) NOT NULL,
  `emp_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_city`, `emp_email`, `emp_contact`, `emp_salary`, `emp_state`, `emp_country`, `emp_role`) VALUES
(1, 'Rouffino', 'Sarikei', 'namste@gg.com', '0142325523', '700.00', 'Sarawak', 'Malaysia', 'Cashier'),
(2, 'Sarah', 'Sibu', 'sarah23@gmail.com', '0149923523', '700.00', 'Sarawak', 'Malaysia', 'Cashier'),
(3, 'Adam', 'KL', 'Adm97@gmail.com', '012454634', '1000.00', 'Selangor', 'Malaysia', 'Cashier'),
(4, 'Lucas', 'Kuching', 'Lucas2@gg.com', '0142223315', '600.00', 'Sarawak', 'Malaysia', 'Cashier'),
(5, 'Yong', 'Sibu', 'Yoga2@walao.com', '011525322', '900.00', 'Sarawak', 'Malaysia', 'Cashier'),
(6, 'Amanda', 'Miri', 'ada@this.com', '0142424152', '950.00', 'Sarawak', 'Malaysia', 'Cashier'),
(7, 'Eunice', 'Miri', 'Enices@gg.com', '0146622432', '650.00', 'Sarawak', 'Malaysia', 'Cashier'),
(8, 'Lim', 'Sarikei', 'fzxck@haha.com', '01494123313', '1000.00', 'Sarawak', 'Malaysia', 'Cashier'),
(9, 'Chen', 'Kapit', 'Chen22@hotmail.com', '015879665', '1100.00', 'Sarawak', 'Malaysia', 'Cashier'),
(10, 'Lyn', 'Kuching', 'Lynas@live.com', '142341562', '2500.00', 'Sarawak', 'Malaysia', 'Cleaner'),
(11, 'Eric', 'Miri', 'song@live.com', '142421525', '800.00', 'Sarawak', 'Malaysia', 'Cashier'),
(12, 'Shawn', 'Tawau', 'shawn@holy.com', '125561622', '700.00', 'Sabah', 'Malaysia', 'Cleaner'),
(13, 'Irdina', 'Sandakan', 'dina98@gg.com', '188452322', '600.00', 'Sabah', 'Malaysia', 'Cleaner'),
(14, 'Brendan', 'Miri', 'bren@gg.com', '114235663', '800.00', 'Sarawak', 'Malaysia', 'Cleaner'),
(15, 'Najihah', 'Tawau', 'Najib@gg.com', '19974423', '740.00', 'Sabah', 'Malaysia', 'Cleaner'),
(16, 'Hilmi', 'Kapit', 'hilma@gg.com', '112355366', '900.00', 'Sarawak', 'Malaysia', 'Cleaner'),
(17, 'Ivan', 'Miri', 'van@gmail.com', '0128788785', '800.00', 'Sarawak', 'Malaysia', 'Stocker'),
(18, 'John', 'West Newbury', 'cena@gmail.com', '145353263', '700.00', 'Massachusetts', 'United States', 'Stocker'),
(19, 'Carmen', 'Kuching', 'carmen98@gmail.com', '14223512', '600.00', 'Sarawak', 'Malaysia', 'Stocker'),
(20, 'Celine', 'Sibu', 'mua@mail.com', '123152332', '800.00', 'Sarawak', 'Malaysia', 'Stocker'),
(21, 'Jeffrey', 'Sarikei', 'jeffy@hotmail.com', '121522311', '900.00', 'Sarawak', 'Malaysia', 'Stocker'),
(22, 'Jessie', 'Sandakan', 'jj@gg.com', '162423122', '600.00', 'Sabah', 'Malaysia', 'Stocker'),
(23, 'Alice', 'Sibu', 'wonderland@live.com', '149124244', '900.00', 'Sarawak', 'Malaysia', 'Stocker'),
(24, 'Simon', 'Tawau', 'law@gg.com', '112424313', '800.00', 'Sabah', 'Malaysia', 'Stocker'),
(25, 'Bieber', 'Sibu', 'jb@gamq.com', '132351662', '600.00', 'Sarawak', 'Malaysia', 'Stocker'),
(26, 'Mark', 'Kapit', 'zuck@fb.com', '014845454', '900.00', 'Sarawak', 'Malaysia', 'Cashier'),
(27, 'Mairu', 'Miri', 'mairu@walao.com', '014-2455823', '500.00', 'Sarawak', 'Malaysia', 'Stocker'),
(29, 'Alice', 'Sibu', 'ali@gmail.com', '014-2498221', '300.00', 'Sarawak', 'Malaysia', 'Cleaner');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `fb_name` varchar(255) NOT NULL,
  `fb_contact` varchar(50) NOT NULL,
  `fb_email` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `fb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`fb_name`, `fb_contact`, `fb_email`, `comment`, `fb_id`) VALUES
('Alensander Gra\'am Bell', '0147902315', 'agb@yoyo.com', 'The staff needs to be more friendly with the customers. They seems to be so sad and dull.', 1),
('Alexandra', '015-9858968', 'alxdrr322@hotmail.com', 'Good navigation of websites and reasonable price1', 2),
('Dead man', '9913255232', 'js@pirates.com', 'Arrr! ye mateys! where\'s my rum!?', 3),
('Umer', '015-5597777', 'umersaram@hotmail.com', 'I think the website should adapt javascript', 4),
('Cheng Loh', '014-2315523', 'lohcheng@gg.om', 'I really love the products! IT\'s all high quality and clean!', 5),
('Baccarola', '015-8889466', 'baccanojoke@hotmail.com', 'I love the design of the webpage, simple but great', 6),
('John', '012-24403213', 'iluvbecky@gag.com', 'U wan\r\nsum fuk?', 7),
('Kim Jong Un', '015-9993331', 'jongun87@yahoo.com', 'yu bu se yeo?', 8),
('Yiiong', '014-24231599', 'syiong@gmail.com', 'What is this? Your employee are so rude! please fire the employee with yellow hair.', 9),
('Barbossa', '018-8996166', 'barbossa44@yahoo.com', 'Dead man tells no tale', 10),
('YouKnowMe?', '000-00000000', '', 'The time will come', 11),
('Jack Sparrow', '015-9986155', 'jack.sp@hotmail.com', 'Why is there no rum ???', 12),
('Obama', '016-6659133', 'obama.b88@usa.com', 'this online grocery, i APPROVED !', 13),
('Donald Trump', '255-525-5251', 'mrpresident@potus.com', 'We must build A Wall!', 14),
('Bruce Lee', '013-5699868', 'b.lee40@hotmail.com', 'WATERRRRRRRRRR', 15),
('Alan Lee', '02-5242241', 'alan95@gmail.com', 'Clean and fresh fruits. this i like', 16),
('Jimmy Law', '014-5242321', 'jl94@gmail.com', 'I would love to come again. THANKS!', 17),
('Yusuf', '', '', 'If only the product was not always out of stock, that\'ll be great.', 18),
('iG.Chuan', '016-9986558', 'igftw@gmail.com', 'Wait, let me laugh about it. Hahaha', 19),
('Jenny', '016-4423122', '', 'please remember to stock your products more', 20),
('Timmmy Gan', '013-9985687', 'timtim@yahoo.com', 'Easy directories and simple selection of items. Keep up the good works !', 21),
('Angela Chan', '013-9854685', 'angela23@yahoo.com', 'Please include more bakery products. Thank you.', 22),
('Ahmad ', '016-2442662', 'ahmad97@gmail.com', 'your workers should give way to customers. theyre always blocking the way', 23),
('Muhammad Ali', '012-8875569', 'aliali123@yahoo.com', 'i would like to make an appointment with your manager, please contact me.', 24),
('James', '014-2355122', 'jammie@live.com', 'please learn to arrange your products.', 25),
('', '', '', '', 26),
('eline', '014-2325023', 'linalina@gg.com', 'please let me win the voucherssssss', 27),
('Jenna', '014-2324412', 'iamcute@hotmail.com', 'your products is so bad!', 28),
('Hannah Wong', '013-9696588', 'hannahnoki@yahoo.com', 'some item received has been spoiled, please improve the quality of your products !', 29),
('Annie', '014-2324555', 'jlw32@gmail.com', 'your cashier wasnt friendly', 30),
('Gandalf', '015-8475874', 'gandalfishere@gmail.com', 'You shall not pass !', 31),
('Jean', '012-8869644', 'ioio@hotmail.com', 'really need to improve customer service', 32),
('Harry Potter', '018-6985899', 'harrypott@gmail.com', 'Kinda difficult to find the item i need without search function, sorry im not wizard', 33),
('Alan', '014-231412', 'alan@ma.com', 'hello', 38),
('Alan', '014-252832', 'alan@gamci.com', 'WALAO EH', 40),
('Alan', '014-5242842', 'alan@gmail.com', 'WALAO EH', 41),
('Houston', '014-2385201', 'hs@gmil.com', 'hmmmmm', 42),
('Newgola', '015-8584955', 'newgogo@yahoo.com', 'I have no idea what to do here.', 43),
('Admodala', '015-9698855', 'momoda@yahoo.com', 'fruits are fresh and tasty\r\n', 44);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`) VALUES
(11, 'mike', '$2y$10$Gbbiin9T6Mx.npH9C4VhguQKrTHt0dj7YvCwoWcYuH58ohN2he5Su');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pro_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `pro_price` decimal(15,2) NOT NULL,
  `totalPrice` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`order_id`, `emp_id`, `pay_date`, `pro_id`, `quantity`, `pro_price`, `totalPrice`) VALUES
(1, 1, '2017-05-26 03:52:38', 1, 7, '5.00', '35.00'),
(2, 2, '2017-05-26 03:52:38', 2, 2, '5.00', '10.00'),
(3, 5, '2017-05-26 03:52:38', 3, 6, '3.00', '18.00'),
(4, 7, '2017-05-26 03:52:38', 4, 2, '7.00', '14.00'),
(5, 2, '2017-05-26 03:52:38', 5, 1, '6.00', '6.00'),
(6, 1, '2017-05-26 03:52:38', 6, 3, '10.00', '30.00'),
(7, 9, '2017-05-26 03:52:38', 7, 6, '8.00', '48.00'),
(8, 8, '2017-05-26 03:52:38', 8, 10, '1.00', '10.00'),
(9, 6, '2017-05-26 03:52:38', 9, 20, '2.00', '40.00'),
(10, 1, '2017-05-26 03:52:38', 10, 15, '7.00', '105.00'),
(11, 2, '2017-05-26 03:52:38', 11, 2, '12.00', '24.00'),
(12, 3, '2017-05-26 03:52:38', 12, 4, '2.00', '8.00'),
(13, 6, '2017-05-26 03:52:38', 13, 12, '1.50', '18.00'),
(14, 7, '2017-05-26 03:52:38', 14, 5, '4.50', '22.50'),
(15, 8, '2017-05-26 03:52:38', 15, 5, '2.00', '10.00'),
(16, 2, '2017-05-26 03:52:38', 16, 2, '5.00', '10.00'),
(17, 1, '2017-05-26 03:52:38', 17, 6, '2.70', '16.20'),
(18, 10, '2017-05-26 03:52:38', 18, 1, '3.60', '3.60'),
(19, 9, '2017-05-26 03:52:38', 19, 2, '7.20', '14.40'),
(20, 5, '2017-05-26 03:52:38', 20, 1, '8.00', '8.00'),
(21, 9, '2017-05-26 03:52:38', 21, 5, '3.00', '15.00'),
(22, 5, '2017-05-26 03:52:38', 22, 2, '15.00', '30.00'),
(23, 9, '2017-05-26 03:52:38', 23, 5, '8.00', '40.00'),
(24, 5, '2017-05-26 03:52:38', 24, 2, '5.00', '10.00'),
(25, 9, '2017-05-26 03:52:38', 25, 5, '10.00', '50.00'),
(26, 5, '2017-05-26 03:52:38', 26, 2, '123.00', '246.00');

--
-- Triggers `payments`
--
DELIMITER $$
CREATE TRIGGER `Incr_quantity2` AFTER INSERT ON `payments` FOR EACH ROW UPDATE products
SET quantity = quantity - NEW.quantity
WHERE pro_id = NEW.pro_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `total_price` BEFORE INSERT ON `payments` FOR EACH ROW BEGIN
SET NEW.totalPrice = NEW.quantity*NEW.pro_price;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` decimal(15,2) NOT NULL,
  `pro_mem_price` decimal(15,2) DEFAULT NULL,
  `pro_description` text NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pro_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_mem_price`, `pro_description`, `quantity`, `pro_type`) VALUES
(1, 'Cabbage', '5.00', '4.50', 'Beijing cabbages', 93, 'Vegetable'),
(2, 'Bacon', '5.00', '4.50', 'Bacon is life', 113, 'Meat'),
(3, 'Spinach', '3.00', '2.70', 'Malaysia spinach', 94, 'Vegetable'),
(4, 'Lecttuce', '7.00', '6.30', 'USA lecttuce', 98, 'Vegetable'),
(5, 'Potato', '6.00', '5.40', 'Australia Potato', 175, 'Vegetable'),
(6, 'Chocolate', '10.00', '9.00', 'Chocolateko', 97, 'Snack'),
(7, 'Potato Chips', '8.00', '7.20', 'Mr potato', 94, 'Snack'),
(8, 'Candies', '1.00', '0.90', 'Candy crash', 90, 'Snack'),
(9, 'Apple', '2.00', '1.80', 'Fuji Apple', 210, 'Fruit'),
(10, 'Fish', '7.00', '6.30', 'Dolly fish', 420, 'Frozen Food'),
(11, 'Chicken', '12.00', '10.80', 'Chicken Attack', 648, 'Frozen Food'),
(12, 'Kiwi', '2.00', '1.80', 'Zespri kiwi', 681, 'Fruit'),
(13, 'Tomato', '1.50', '1.35', 'Tomato king', 438, 'Fruit'),
(14, 'Pineapple', '4.50', '4.05', 'Loco pine', 180, 'Fruit'),
(15, 'Orange', '2.00', '1.80', 'Extraordinary orange', 345, 'Fruit'),
(16, 'Durian', '5.00', '4.50', 'Best smell fruit', 168, 'Fruit'),
(17, 'Lemon', '3.00', '2.70', 'Lemon Lame', 244, 'Fruit'),
(18, 'Papaya', '4.00', '3.60', 'Papakandaya', 171, 'Fruit'),
(19, 'Crab', '8.00', '7.20', 'Crab from nowhere', 43, 'Frozen Food'),
(20, 'Squid', '8.00', '7.20', 'Squid some ink', 39, 'Frozen Food'),
(21, 'Ice-cream', '3.00', '2.70', 'Chilling best pal', 45, 'Snack'),
(22, 'Beef', '15.00', '13.50', 'Australia imported beefo', 48, 'Meat'),
(23, 'Nugget', '8.00', '7.20', 'Chick,Beef,Lamp mixed nugget', 300, 'Frozen Food'),
(24, 'Fishballs', '5.00', '4.50', 'Ball of fishes', 518, 'Frozen Food'),
(25, 'Egg', '10.00', '9.00', 'Plant of eggs', 1095, 'Vegetable'),
(26, 'Kettle', '123.00', '110.70', 'kettle in malaysia', 20, 'Kitchenware'),
(27, 'Jug', '123.00', '110.70', 'To fill water', 60, 'Kitchenware'),
(28, 'Spoon & Fork', '4.00', '3.60', 'For eating', 60, 'Kitchenware'),
(29, 'Frying Pan', '25.00', '22.50', 'For frying ', 223, 'Kitchenware'),
(32, 'Full Cream Milk', '7.00', '6.30', 'Milk with full cream', 98, 'Dairy'),
(33, 'Chocolate Milk', '9.50', '8.55', 'Milk flavoured chocolate', 42, 'Dairy'),
(34, 'Strawberry Milk', '9.50', '8.55', 'Strawberry flavoured milk', 30, 'Dairy'),
(35, 'Mutton', '25.00', '22.50', 'Goat meat', 20, 'Meat');

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `discount` BEFORE INSERT ON `products` FOR EACH ROW set NEW.pro_mem_price = NEW.pro_price-NEW.pro_price*(10/100)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `discount2` BEFORE UPDATE ON `products` FOR EACH ROW set NEW.pro_mem_price = NEW.pro_price-NEW.pro_price*(10/100)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(11) NOT NULL,
  `supp_name` varchar(255) NOT NULL,
  `supp_contact` varchar(50) NOT NULL,
  `supp_email` varchar(50) NOT NULL,
  `supp_city` varchar(255) NOT NULL,
  `supp_state` varchar(255) NOT NULL,
  `supp_type` varchar(255) NOT NULL,
  `supp_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_name`, `supp_contact`, `supp_email`, `supp_city`, `supp_state`, `supp_type`, `supp_country`) VALUES
(1, 'Master Meat', '019-5656877', 'mmeato35@hotmail.com', 'Kanowit', 'Sarawak', 'Meat', 'Malaysia'),
(2, 'Vegetology', '019-5844448', 'iluvvege@gmail.com', 'Miri', 'Sarawak', 'Vegetable', 'Malaysia'),
(3, 'ElsaSupplies', '015-6468885', 'letitgo111@hotmail.com', 'Bintulu', 'Sarawak', 'Frozen Food', 'Malaysia'),
(4, 'ProfessorSnack', '018-3659855', 'harrylovesnack67@hotmail.com', 'Sibu', 'Sarawak', 'Snack', 'Malaysia'),
(5, 'NinjaFruit', '049-3656998', 'ninjaja@yahoo.com', 'Sibu', 'Sarawak', 'Fruit', 'malaysia'),
(7, 'MooDairy', '014-2385920', 'mdairy@mdairy.com', 'Sandakan', 'Sabah', 'Dairy', ''),
(8, 'KitchenNeeds', '012-4259231', 'KN@corp.com', 'Kuching', 'Sarawak', 'Kitchenware', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplying`
--

CREATE TABLE `supplying` (
  `stock_id` int(11) NOT NULL,
  `stock_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stock_product` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `supp_id` int(11) DEFAULT NULL,
  `pro_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplying`
--

INSERT INTO `supplying` (`stock_id`, `stock_date`, `stock_product`, `quantity`, `supp_id`, `pro_id`, `emp_id`) VALUES
(1, '2017-05-26 03:53:12', 'Mutton', 20, 1, 35, 19),
(2, '2017-05-26 03:53:12', 'Strawberry Milk', 30, 7, 34, 12),
(3, '2017-05-26 03:53:12', 'Chocolate Milk', 22, 7, 33, 15),
(4, '2017-05-26 03:53:12', 'Full Cream Milk', 28, 7, 32, 12),
(5, '2017-05-26 03:53:12', 'Frying Pan', 22, 8, 29, 17),
(6, '2017-05-26 03:53:12', 'Spoon & Fork', 10, 8, 28, 12),
(7, '2017-05-26 03:53:12', 'Jug', 10, 8, 27, 12),
(8, '2017-05-26 03:53:12', 'Kettle', 10, 8, 26, 11),
(9, '2017-05-26 03:53:12', 'Egg', 100, 1, 25, 11),
(10, '2017-05-26 03:53:12', 'Fishballs', 220, 3, 24, 13),
(11, '2017-05-26 03:53:12', 'Nugget', 205, 3, 23, 17),
(12, '2017-05-26 03:53:12', 'Beef', 20, 1, 22, 19),
(13, '2017-05-26 03:53:12', 'Ice-cream', 100, 3, 24, 17),
(14, '2017-05-26 03:53:12', 'Squid', 20, 3, 20, 15),
(15, '2017-05-26 03:53:12', 'Crab', 25, 3, 19, 14),
(16, '2017-05-26 03:53:12', 'Papaya', 22, 5, 18, 13),
(17, '2017-05-26 03:53:12', 'Lemon', 100, 5, 17, 13),
(18, '2017-05-26 03:53:12', 'Durian', 20, 5, 16, 13),
(19, '2017-05-26 03:53:12', 'Orange', 200, 5, 15, 15),
(20, '2017-05-26 03:53:12', 'Pineapple', 35, 5, 14, 15),
(21, '2017-05-26 03:53:12', 'Tomato', 300, 5, 13, 15),
(22, '2017-05-26 03:53:12', 'Kiwi', 500, 5, 12, 15),
(23, '2017-05-26 03:53:12', 'Chicken', 500, 1, 11, 15),
(24, '2017-05-26 03:53:12', 'Fish', 300, 3, 10, 15),
(25, '2017-05-26 03:53:12', 'Apple', 100, 5, 9, 13);

--
-- Triggers `supplying`
--
DELIMITER $$
CREATE TRIGGER `Incr_quantity` AFTER INSERT ON `supplying` FOR EACH ROW UPDATE products
SET quantity = quantity + NEW.quantity
WHERE pro_id = NEW.pro_id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_contact` (`cust_contact`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_contact` (`emp_contact`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `payments_ibfk_3` (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `pro_name` (`pro_name`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`),
  ADD UNIQUE KEY `supp_contact` (`supp_contact`);

--
-- Indexes for table `supplying`
--
ALTER TABLE `supplying`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `supplying_ibfk_1` (`supp_id`),
  ADD KEY `supplying_ibfk_2` (`pro_id`),
  ADD KEY `fk_emplyee` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `supplying`
--
ALTER TABLE `supplying`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `payments_ibfk_3` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`);

--
-- Constraints for table `supplying`
--
ALTER TABLE `supplying`
  ADD CONSTRAINT `fk_emplyee` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `supplying_ibfk_1` FOREIGN KEY (`supp_id`) REFERENCES `supplier` (`supp_id`),
  ADD CONSTRAINT `supplying_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
