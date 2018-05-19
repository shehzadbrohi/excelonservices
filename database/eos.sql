-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 12:52 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eos`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `clientser`
--
CREATE TABLE `clientser` (
`c_name` varchar(50)
,`s_name` varchar(40)
,`e_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `clientservices`
--

CREATE TABLE `clientservices` (
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientservices`
--

INSERT INTO `clientservices` (`c_id`, `s_id`, `e_id`) VALUES
(6, 1, 2),
(16, 3, 2),
(13, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `dateadded` text NOT NULL,
  `totalamount` int(11) NOT NULL,
  `paymentdatesuggested` text NOT NULL,
  `paymenttype` varchar(20) NOT NULL,
  `validtill` text NOT NULL,
  `serviceclient_id` int(11) NOT NULL,
  `paymentstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `dateadded`, `totalamount`, `paymentdatesuggested`, `paymenttype`, `validtill`, `serviceclient_id`, `paymentstatus`) VALUES
(8, '10-15-2016', 4500, '10-16-2016', 'Easypaisa', '10-25-2016', 6, 0),
(9, '10-16-2016', 5500, '10-07-2016', 'Cash', '10-15-2016', 16, 1),
(10, '10-16-2016', 4500, '10-16-2016', 'Cash', '10-15-2016', 13, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `paymentreport`
--
CREATE TABLE `paymentreport` (
`c_name` varchar(50)
,`s_name` varchar(40)
,`e_name` varchar(50)
,`dateadded` text
,`totalamount` int(11)
,`paymentdatesuggested` text
,`paymenttype` varchar(20)
,`validtill` text
,`paymentstatus` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_name`, `s_cost`) VALUES
(1, 'Inbound', 4500),
(2, 'Outbound', 6000),
(3, 'Telemarketing', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`c_id`, `c_name`, `cstatus`) VALUES
(6, 'Shehzad.co', 1),
(7, 'My company', 1),
(8, 'Aptech', 1),
(9, 'Mongo Tech', 1),
(10, 'Ek thi Company', 1),
(11, 'Huzaifa & co', 1),
(12, 'Dalda', 1),
(13, 'Masan Developers', 1),
(14, 'kolsons', 1),
(15, 'Onboard', 1),
(16, 'Talha & co', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `id` int(11) NOT NULL,
  `d_name` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`id`, `d_name`, `status`) VALUES
(1, 'HR Management', 1),
(2, 'Administration', 1),
(3, 'Service', 1),
(4, 'Training', 1),
(5, 'Internet Security', 1),
(6, 'Auditors', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_fname` varchar(50) NOT NULL,
  `e_contact` varchar(20) NOT NULL,
  `e_department` varchar(50) NOT NULL,
  `e_designation` varchar(50) NOT NULL,
  `e_services` text NOT NULL,
  `e_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`e_id`, `e_name`, `e_fname`, `e_contact`, `e_department`, `e_designation`, `e_services`, `e_img`) VALUES
(1, 'zahra', 'abdullah ', '33-3333-3', 'IT', 'Officer', 'Inbound', 'batman new helmet.png'),
(2, 'shehzad', 'yaqoob', '3400839399', 'Internet Security', 'Officer', 'Outbound', 'shehzad.jpg'),
(3, 'yasir', 'Matthew', '(725) 222-4029', 'Service', 'Officer', 'Telemarketing', 'character.png'),
(4, 'Huzaifa', 'khan', '3433334333', '(725) 222-4029', 'Service', 'Telemarketing', 'huzaifa.png'),
(5, 'Ahmed', 'Khan', '7252224029', 'Administration', 'Manager', 'Inbound', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblpro`
--

CREATE TABLE `tblpro` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_desc` text NOT NULL,
  `p_image` text NOT NULL,
  `p_price` int(30) NOT NULL,
  `c_name` text NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpro`
--

INSERT INTO `tblpro` (`p_id`, `p_name`, `p_desc`, `p_image`, `p_price`, `c_name`, `e_id`) VALUES
(1, 'Accp Ipro', 'this is the sample product of aptech.', 'accp.jpg', 6000, 'aptech', 2),
(2, 'Dell Pc', 'This is the advertisement of dell product etc.', 'Dell Computer.png', 2400, 'Masan Developers', 1),
(3, 'Q Mobile e60', 'Qmobile E60 - Wireless Radio', 'q_mobile_e60.jpg', 5000, 'Huzaifa & co', 2),
(4, 'Mezan Tea', 'mezan is company of chai ki patti', 'mezan_tea.jpg', 100, 'My company', 1),
(7, 'Hp core i3 laptop', 'this is laptop ', 'hp-g6-1305-core-i3-display.jpg', 5000, 'Mongo Tech', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

CREATE TABLE `tbl_details` (
  `d_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` text NOT NULL,
  `duname` int(11) NOT NULL,
  `dcid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`d_id`, `name`, `phone`, `email`, `service`, `duname`, `dcid`) VALUES
(3, 'Shehzad Yaqoob', '03400839399', 'shazrb@hotmail.com', 'Telemarketing', 4, 7),
(4, 'Matthew M. Helms', '7252224029', 'shahidumar94@gmail.com', 'Telemarketing', 4, 6),
(5, 'Yaqoob', '03400839399', 'shahzadbrohi@hotmail.com', 'Telemarketing', 4, 10),
(6, 'Shehzad', '03400839399', 'info@shehzad.co', 'Inbound', 1, 7),
(7, 'sir afnan', '7252224029', 'afnanyousuf@gmail.com', 'Inbound', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` text NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` text NOT NULL,
  `u_type` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `u_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `email`, `u_name`, `u_pass`, `u_type`, `e_id`, `u_status`) VALUES
(1, 'Zahra', 'Abdullah', 'bahrianblogging@gmail.com', 'Zahra', '202cb962ac59075b964b07152d234b70', 2, 1, '1'),
(2, 'Shehzad', 'Yaqoob', 'info@shehzad.co', 'shehzad', '202cb962ac59075b964b07152d234b70', 1, 2, '1'),
(4, 'Huzaifa', 'khan', 'huzaifakhan@gmail.com', 'Huzaifa.khan', '6080f78b8300a1ba423f640ebd9a2568', 2, 4, '1'),
(5, 'Yasir', 'Mathew', 'yasirmathew@gmail.com', 'yasir', '202cb962ac59075b964b07152d234b70', 2, 3, '1'),
(6, 'Ahmed', 'Khan', 'ahmedkhan@gmail.com', 'Ahmed.Khan', '9193ce3b31332b03f7d8af056c692b84', 2, 5, '1');

-- --------------------------------------------------------

--
-- Structure for view `clientser`
--
DROP TABLE IF EXISTS `clientser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clientser`  AS  select `tblcompany`.`c_name` AS `c_name`,`services`.`s_name` AS `s_name`,`tblemployee`.`e_name` AS `e_name` from (((`clientservices` join `tblcompany` on((`tblcompany`.`c_id` = `clientservices`.`c_id`))) join `services` on((`services`.`s_id` = `clientservices`.`s_id`))) join `tblemployee` on((`tblemployee`.`e_id` = `clientservices`.`e_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `paymentreport`
--
DROP TABLE IF EXISTS `paymentreport`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `paymentreport`  AS  select `tblcompany`.`c_name` AS `c_name`,`services`.`s_name` AS `s_name`,`tblemployee`.`e_name` AS `e_name`,`payment`.`dateadded` AS `dateadded`,`payment`.`totalamount` AS `totalamount`,`payment`.`paymentdatesuggested` AS `paymentdatesuggested`,`payment`.`paymenttype` AS `paymenttype`,`payment`.`validtill` AS `validtill`,`payment`.`paymentstatus` AS `paymentstatus` from ((((`payment` join `clientservices` on((`clientservices`.`c_id` = `payment`.`serviceclient_id`))) join `tblcompany` on((`tblcompany`.`c_id` = `clientservices`.`c_id`))) join `services` on((`services`.`s_id` = `clientservices`.`s_id`))) join `tblemployee` on((`tblemployee`.`e_id` = `clientservices`.`e_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tblpro`
--
ALTER TABLE `tblpro`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_details`
--
ALTER TABLE `tbl_details`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblpro`
--
ALTER TABLE `tblpro`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_details`
--
ALTER TABLE `tbl_details`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
