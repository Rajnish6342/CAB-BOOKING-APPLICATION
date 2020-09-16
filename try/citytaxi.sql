-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 09:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citytaxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `name`) VALUES
(1, 'rajnishsingh.n@gmail.com', '12345', 'Rajnish Singh'),
(2, 'test@gmail.com', 'Test@12345', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bk_id` int(11) NOT NULL,
  `v_id` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `book_ref` int(10) NOT NULL,
  `start_loc` varchar(250) NOT NULL,
  `end_loc` varchar(250) NOT NULL,
  `pickup_date` varchar(30) NOT NULL,
  `pickup_time` varchar(30) NOT NULL,
  `dropoff_date` varchar(30) NOT NULL,
  `dropoff_time` varchar(30) NOT NULL,
  `trip_time` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `bk_status` int(11) NOT NULL,
  `bk_date` date NOT NULL,
  `canc_date` date NOT NULL,
  `canc_res` varchar(50) DEFAULT NULL,
  `canc_cmnt` varchar(100) DEFAULT NULL,
  `fare` varchar(30) DEFAULT NULL,
  `dist` varchar(30) DEFAULT NULL,
  `drvr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bk_id`, `v_id`, `price`, `book_ref`, `start_loc`, `end_loc`, `pickup_date`, `pickup_time`, `dropoff_date`, `dropoff_time`, `trip_time`, `username`, `phone_num`, `email_id`, `bk_status`, `bk_date`, `canc_date`, `canc_res`, `canc_cmnt`, `fare`, `dist`, `drvr`) VALUES
(5, 1, 23, 36078, 'Dadar, Mumbai, Maharashtra, India', 'Vapi, Gujarat, India', '03/19/2020', '12:00 am', '03/19/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish Singh', '2147483647', 'rajnishsingh.n@gmail.com', 1, '2020-04-05', '0000-00-00', NULL, NULL, '3510.72', '152.64', 'dada@da.com'),
(7, 1, 23, 15069, 'Dadra  nagar haveli', 'Vapi ', '03/19/2020', '12:00 am', '03/19/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Ritesh', '52368', 'rita@m.com', 2, '0000-00-00', '0000-00-00', NULL, NULL, '', '', NULL),
(8, 1, 23, 26852, 'Valsad', 'Vapi', '03/20/2020', '12:00 am', '03/20/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish Singh', '7016544306', 'admin@admin.com', 2, '0000-00-00', '2020-03-23', NULL, NULL, '', '', NULL),
(9, 4, 25, 73675, 'daman', 'vapi', '03/22/2020', '12:00 am', '03/23/2020', '12:00 am', '1 days, 0 hours, 0 minutes', 'Rajnish', '741258', 'admin@admin.com', 1, '2020-03-10', '2020-03-26', NULL, NULL, '204', '8.16', 'dada@da.com'),
(10, 7, 30, 53116, 'Varanasi, Uttar Pradesh, India', 'Ahmedabad, Gujarat, India', '03/23/2020', '12:00 am', '03/23/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish', '741258', 'admin@admin.com', 2, '0000-00-00', '2020-03-28', 'Personal Issues', 'ok', '32559.9', '1085.33', ''),
(12, 7, 30, 64864, 'Cine Planet, Ruby Block, Satyam Enclave, Kompally, Hyderabad, Telangana, India', 'Valsad Station Road, Suki Talavdi, Mograwadi, Valsad, Gujarat, India', '03/25/2020', '12:00 am', '03/25/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish', '741258', 'admin@admin.com', 1, '2020-03-25', '0000-00-00', NULL, NULL, '20283.3', '676.11', 'dada@da.com'),
(13, 3, 6, 80956, 'Dadra Nagar Haveli School', 'daman', '03/28/2020', '12:00 am', '03/28/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish Singh', '7016544306', 'admin@admin.com', 2, '2020-03-28', '2020-03-28', 'Other', '', NULL, NULL, NULL),
(14, 7, 30, 97048, 'Vasant Kunj, New Delhi, Delhi, India', 'Neptune Element IT Park, Shree Nagar, Thane West, Thane, Maharashtra, India', '2020-03-30', '11:00 am', '04/11/2020', '7:00 am', '7 days, 20 hours, 0 minutes', 'Rajnish Singh', '7016544306', 'admin@admin.com', 0, '2020-03-30', '0000-00-00', NULL, NULL, '33668.7', '1122.29', 'dada@da.com');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(11) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `e` varchar(100) NOT NULL,
  `f` varchar(100) NOT NULL,
  `g` varchar(100) NOT NULL,
  `h` varchar(100) NOT NULL,
  `i` varchar(100) NOT NULL,
  `j` varchar(100) NOT NULL,
  `k` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`) VALUES
(7, '65011', 'Sasa', 'asa', '03/18/2020', '1:00 am', '03/18/2020', '2:00 am', '0 days, 1 hours, 0 minutes', 'rajnish', '852369', 'raja@gm.com'),
(8, '70525', 'Vapi Railway station', 'Daman sea face road', '03/18/2020', '12:00 am', '03/18/2020', '1:00 am', '0 days, 1 hours, 0 minutes', 'Rajnish Singh', '704655864', 'rajnishsingh.n@gmail.com'),
(9, '88553', 'dasd', 'dd', '03/19/2020', '1:00 am', '03/19/2020', '2:00 am', '0 days, 1 hours, 0 minutes', 'as', '852', 'dd@mm.c');

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `addr` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` bigint(15) NOT NULL,
  `cntid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`addr`, `email`, `mno`, `cntid`) VALUES
('ROFEL COLLEGE NEAR VAPI', 'rofel@grims.com', 987654321, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cont_us`
--

CREATE TABLE `cont_us` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(25) NOT NULL,
  `cont_email` varchar(25) NOT NULL,
  `cont_sub` varchar(30) NOT NULL,
  `cont_msg` longtext NOT NULL,
  `cont_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont_us`
--

INSERT INTO `cont_us` (`cont_id`, `cont_name`, `cont_email`, `cont_sub`, `cont_msg`, `cont_status`) VALUES
(48, 'Rajnish Singh', 'raja@gmail.com', 'Trip Enquiry', 'I have booked a trip on date and I want to know status about that Ref:67852', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `co_id` int(11) NOT NULL,
  `co_txt` varchar(20) NOT NULL,
  `co_type` varchar(20) NOT NULL,
  `co_dis` varchar(10) NOT NULL,
  `co_date` varchar(15) NOT NULL,
  `co_count` int(10) NOT NULL,
  `co_status` int(1) NOT NULL,
  `co_creat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`co_id`, `co_txt`, `co_type`, `co_dis`, `co_date`, `co_count`, `co_status`, `co_creat`) VALUES
(2, 'RAJ123', 'Amount', '120', '2020-03-17', 120, 0, ''),
(3, 'SEJ212', 'Percent', '10', '2020-03-19', 12, 0, '2020-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `dada`
--

CREATE TABLE `dada` (
  `id` int(11) NOT NULL,
  `d_mail` varchar(30) NOT NULL,
  `d_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dada`
--

INSERT INTO `dada` (`id`, `d_mail`, `d_pass`) VALUES
(1, 'dada@da.com', 'dada');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `d_id` int(11) NOT NULL,
  `d_fname` varchar(25) NOT NULL,
  `d_sname` varchar(20) NOT NULL,
  `d_s1` varchar(30) NOT NULL,
  `d_s2` varchar(30) NOT NULL,
  `d_city` varchar(20) NOT NULL,
  `d_state` varchar(20) NOT NULL,
  `d_zip` int(6) NOT NULL,
  `d_mail` varchar(25) NOT NULL,
  `d_mno` bigint(10) NOT NULL,
  `d_gen` varchar(10) NOT NULL,
  `d_pimg` varchar(25) NOT NULL,
  `d_limg` varchar(25) NOT NULL,
  `d_status` int(3) NOT NULL DEFAULT 0,
  `d_pass` varchar(30) NOT NULL,
  `d_jdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`d_id`, `d_fname`, `d_sname`, `d_s1`, `d_s2`, `d_city`, `d_state`, `d_zip`, `d_mail`, `d_mno`, `d_gen`, `d_pimg`, `d_limg`, `d_status`, `d_pass`, `d_jdate`) VALUES
(3, 'Rajnish', 'Singh', 'Navin Building Room No 22 Near', 'rajnish', 'Dabhel', 'india', 396210, 'dada@da.com', 7016544306, 'Male', '', 'raja.jpg', 1, 'dada', '2020-02-11'),
(15, 'sujeet', 'Singh', 'Navin Building Room No 22 Near', 'rajnish', 'Dabhel', 'india', 396210, 'Rajnishsingh.n@gmail.com', 987564321, 'Male', '', 'DSC_0186.JPG', 1, 'sasa', '2020-03-13'),
(17, 'Deepak ', 'Kushwaha', 'Daman', 'Daman', 'Daman', 'Daman&Diu', 396210, 'raja@gm.com', 741256398, 'Male', '', '228684.png', 1, '12345', '2020-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `gtitle` varchar(30) NOT NULL,
  `gmig` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gtitle`, `gmig`) VALUES
(2, 'TATA NEXON', 'gallery-2.jpg'),
(3, 'trip', 'gallery-3.jpg'),
(4, 'maps', 'gallery-5.jpg'),
(5, 'one more', 'service-details-2.jpg'),
(6, 'check', 'about-page.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `uno` bigint(15) DEFAULT NULL,
  `upass` varchar(20) NOT NULL,
  `u_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `uname`, `uemail`, `uno`, `upass`, `u_status`) VALUES
(12, 'Rajnish', 'rajnishsingh.n@gmail.com', 7016544306, '12345', 0),
(14, 'Rajnish', 'admin@admin.com', 7016544306, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `v_no` varchar(15) NOT NULL,
  `v_type` varchar(20) NOT NULL,
  `v_model` varchar(15) NOT NULL,
  `v_cap` int(10) NOT NULL,
  `v_price` int(10) NOT NULL,
  `v_canc` int(10) NOT NULL,
  `v_ins` varchar(10) NOT NULL,
  `v_img` varchar(25) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `v_no`, `v_type`, `v_model`, `v_cap`, `v_price`, `v_canc`, `v_ins`, `v_img`, `v_name`, `v_status`) VALUES
(1, 'gj15bs3186', 'SUV', '2016', 4, 19, 23, '29-10-2016', 'nissan-offer.png', 'TAXI', 0),
(3, 'DD032018', 'SUV', '2019', 3, 5, 6, '20-10-2012', 'marcedes-offer.png', 'CAR 2', 0),
(4, 'DD03J2021', 'SUV', '2015', 6, 15, 25, '12-10-2012', 'bmw-offer.png', 'CAR 1', 0),
(7, 'CD01J3214', 'VAN', '2015', 4, 8, 30, '2020-03-23', 'offer-toyota.png', 'ALTO 800', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vtypes`
--

CREATE TABLE `vtypes` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vtypes`
--

INSERT INTO `vtypes` (`t_id`, `t_name`) VALUES
(1, 'SUV'),
(2, 'VAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`cntid`);

--
-- Indexes for table `cont_us`
--
ALTER TABLE `cont_us`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vtypes`
--
ALTER TABLE `vtypes`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `cntid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cont_us`
--
ALTER TABLE `cont_us`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vtypes`
--
ALTER TABLE `vtypes`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
