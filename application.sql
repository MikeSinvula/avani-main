-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(1, '', 0, '', '2018-03-05', 'Not Allowed'),
(2, '', 0, '', '2018-03-05', 'Not Allowed'),
(3, '', 0, '', '2018-03-05', 'Not Allowed'),
(4, '', 0, '', '2018-03-05', 'Not Allowed'),
(5, '', 2147483647, '', '2018-03-06', 'Not Allowed'),
(6, 'queenie', 2147483647, 'junk@gmail.com', '2018-03-08', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`, `role`) VALUES
(1, 'Admin', '1234', 'Manager'),
(2, 'clerk', '12345', 'Reservation_Clerk'),
(3, 'Tangos', 'shikomba@11', 'Reservation_Clerk'),
(4, 'Mike', 'mike@10', 'Reservation_clerk');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `birthday_a` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `points` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `phone`, `username`, `Birthday`, `birthday_a`, `password`, `points`) VALUES
(1, 'Mikey', 'Mike', '2147483647', 'Mikey Mike', '2001-02-07', '', 'MIKE', '0'),
(3, 'Mike', 'Vokes', '2147483647', 'Mike Vokes', '1994-02-08', '', 'vokes@10', '0'),
(4, 'Elizabeth', 'Lily', '2147483647', 'Lily', '2018-03-15', '', 'lily', '0'),
(5, 'Jones', 'Kula', '2147483647', 'Jones', '1996-01-19', '', 'jones@10', '0'),
(6, 'Michael', 'Kula', '2147483647', 'Michael  Kula', '2005-03-19', '', 'michael', '0'),
(7, 'Daisy', 'Junk', '2147483647', 'Daisy', '2004-03-19', '', 'Daisy', '0'),
(8, 'Sandy', 'Tonata', '2147483647', 'Sandy Tonata', '2005-03-19', '', 'sandy', '0'),
(9, 'Mikey', 'Engelbrecht', '2147483647', 'Mike', '2006-03-19', '', 'mike', '0'),
(10, 'Tonata', 'Engelbrecht', '2147483647', 'Tonata', '2011-03-19', '', 'to', '0'),
(11, 'Kula', 'Kula', '816515879', 'Kula', '2005-11-20', '', 'kula@10', '0'),
(12, 'Michael', 'Boss', '+264816515879', 'Michael', '2008-03-20', '', 'michael', '0'),
(13, 'Sinvula', 'Sinvula', '0816515879', 'Sinvula', '1998-03-23', '', 'sinvula@10', '0'),
(14, 'Peinge', 'Omake', '0814928453', 'Peinge', '2003-12-23', '', 'peinge@10', '0'),
(15, 'Daisy', 'Jones', '0816515879', 'Daisy Jones', '2008-03-25', '', 'Daisy@10', '0'),
(16, 'Robert', 'David', '0816515879', 'Robert', '2004-03-26', '', 'robert', '0');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Points on promotion', '+264816515879', 'Get points now with our online reservation booking system, All you have to do is create an account with us, login and begin making reservations'),
(2, 'Discount on points', 'Points', 'Book now with Avani online and get yourself free points for future use when booking with us');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(55, 'Mr.', 'Michael ', 'Pacman', 'Guest House', 'Single', 1, '2018-03-02', '2018-03-05', 540.00, 556.20, 10.80, 'Breakfast', 5.40, 3),
(60, 'Dr.', 'Jones', 'Kula', 'Superior Room', 'Single', 1, '2018-03-19', '2018-03-20', 320.00, 332.80, 9.60, 'Half Board', 3.20, 1),
(63, 'Miss.', 'Peni', 'Lena', 'Superior Room', 'Single', 1, '2018-03-23', '2018-03-24', 320.00, 332.80, 9.60, 'Breakfast', 3.20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', 0),
(2, 'Superior Room', 'Double', 'NotFree', 49),
(3, 'Superior Room', 'Triple', 'Free', 0),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', 0),
(6, 'Deluxe Room', 'Single', 'NotFree', 34),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', 0),
(10, 'Guest House', 'Single', 'NotFree', 55),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', 0),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(50, 'Miss.', 'Amy', 'Amy', 'aamy@gmail.com', 'Namibian', 'Namibia', '+264816515879', 'Superior Room', 'Single', '1', 'Breakfast', '2018-03-02', '2018-03-04', 'Conform', 2),
(55, 'Mr.', 'Michael ', 'Pacman', 'pacman@gmail.com', 'Namibian', 'Namibia', '+264816515879', 'Guest House', 'Single', '1', 'Breakfast', '2018-03-02', '2018-03-05', 'Conform', 3),
(56, 'Rev .', 'Foibe', 'Kandadi', 'fndadi@yahoo.com', 'Non Namibian ', 'Zimbabwe', '+264812183048', 'Superior Room', 'Double', '1', 'Full Board', '2018-03-02', '2018-03-03', 'Not Confirm', 1),
(57, 'Miss.', 'peni', 'peni', 'peni@gmail.com', 'Namibian', 'Namibia', '+264812183048', 'Deluxe Room', 'Triple', '1', 'Breakfast', '2018-03-15', '2018-03-31', 'Not Confirm', 16),
(58, 'Dr.', 'MIKEY', 'MIKE', 'mikesinvula@yahoo.com', 'Namibian', 'Namibia', '+264816515879', 'Superior Room', 'Single', '1', 'Room only', '2018-03-09', '2018-03-12', 'Not Confirm', 3),
(59, 'Miss.', 'Lily', 'Lily', 'lily@gmail.com', 'Namibian', 'Namibia', '+264816515879', 'Superior Room', 'Single', '1', 'Breakfast', '2018-03-15', '2018-03-16', 'Not Confirm', 1),
(61, 'Miss.', 'Jones', 'Jones', 'johnjonesjohn@gmail.com', 'Namibian', 'Namibia', '+264816515879', 'Deluxe Room', 'Double', '1', 'Full Board', '2018-03-19', '2018-03-20', 'Not Confirm', 1),
(62, 'Dr.', 'Peinge', 'Omake', 'pomake.ileni@gmail.com', 'Namibian', 'Namibia', '+264814928453', 'Guest House', 'Double', '1', 'Breakfast', '2018-03-29', '2018-04-02', 'Not Confirm', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `position`) VALUES
(1, 'wennie', 'mid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
