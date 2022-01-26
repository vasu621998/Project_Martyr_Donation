-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 08:12 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `civilian`
--

CREATE TABLE `civilian` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `adhaar` bigint(20) DEFAULT NULL,
  `bname` varchar(20) NOT NULL,
  `acc` bigint(20) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `ifsc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `civilian`
--

INSERT INTO `civilian` (`uname`, `pass`, `email`, `mob`, `country`, `adhaar`, `bname`, `acc`, `bank`, `ifsc`) VALUES
('ckbhensdadia', '', 'ckbhensdadia@gmail.com', 9874563219, 'India', 321045698741, 'ckb', 987520145236, 'pnb', '987yuj25kj0'),
('njbuch', 'njbnjb', 'njb@gmail.com', 8541235785, 'India', 852014796302, 'niyati', 8745201251, 'kotak', 'uydt4785nch'),
('ppatel', '21041997', 'ppatel@gmail.com', 9898120600, 'UK', 120145987362, 'prashit', 9874652105, 'pnb', '5478fcvds21'),
('pspatel', '07051998', 'pspatel@gmail.com', 7567761691, 'India', 987452103654, 'pratik', 8541207896, 'sbi', '98745derfc1'),
('vpatel', '06021998', 'pvasu@gmail.com', 7383930694, 'India', 987456321012, 'vasu', 7541201258, 'icici', '98745dfrtsg'),
('sps', 'spssps', 'sps@gmail.com', 9874632150, 'India', 520147896320, 'siddharth', 98701254102, 'icici', '65478asedc1'),
('vbpatel', 'merebhai', 'vbpatel@gmail.com', 9874563210, 'USA', 12365478963, 'vimal', 987456321025, 'wb', '98745bdhol5'),
('vnd', 'vndvnd', 'vndangar@gmail.com', 8547896321, 'UK', 852014796325, 'vanraj', 9874521025, 'hdfc', 'jdkrf98745c');

-- --------------------------------------------------------

--
-- Table structure for table `soldier`
--

CREATE TABLE `soldier` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `adhaar` bigint(20) NOT NULL,
  `sold_name` varchar(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `acc` bigint(15) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `soldier`
--

INSERT INTO `soldier` (`uname`, `pass`, `email`, `mob`, `adhaar`, `sold_name`, `id`, `bname`, `acc`, `bank`, `ifsc`, `amount`) VALUES
('dchourasiya', '30032016', 'dchourasiya@gmail.com', 9870145632, 987012368745, 'devendra chourasiya', 751402, 'devendra', 9874025168, 'sbi', '2547djuy102', 100000),
('ddas', '03072016', 'ddas@gmail.com', 8521479630, 201365478952, 'dibakar das', 587421, 'dibakar', 1201459876, 'pnb', '5478oiubd12', 100000),
('dghosh', '18072016', 'dghosh@gmail.com', 9874102563, 541203698745, 'dipak ghosh', 874596, 'dipak', 4125789630, 'hdfc', '87459dfsg1i', 100000),
('gyadav', '13042016', 'gyadav@gmail.com', 7589641250, 987401256301, 'gokul chand yadav', 845210, 'gokul', 8512047896, 'pnb', '547dfgst210', 350),
('hjs25', '25062016', 'hjsingh@gmail.com', 7894561230, 789456123015, 'havildar singh', 123456, 'h j singh', 123654789, 'bob', 'asjdk41257f', 350),
('ksingh', '06122016', 'ksingh@gmail.com', 8547596210, 102365108970, 'kamal singh', 789654, 'kamal', 78945601231, 'pnb', '4157dhtb24d', 350),
('Pmondal', '19072016', 'pmondal@gmail.com', 7589641230, 201365789642, 'palash mondal', 754120, 'palash', 4102587963, 'icici', '210dfsgt1d1', 350),
('psaroj', '28012017', 'psaroj@gmail.com', 9541278541, 954781201452, 'paras saroj', 954781, 'paras', 2103654789, 'bob', '654dfrg78re', 350),
('skumar', '01092016', 'skumar@gmail.com', 9874102563, 987014523698, 'sachin kumar', 954102, 'sachin', 9874520125, 'icici', '987456sdefr', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civilian`
--
ALTER TABLE `civilian`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mob` (`mob`),
  ADD UNIQUE KEY `acc` (`acc`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`),
  ADD UNIQUE KEY `adhaar` (`adhaar`);

--
-- Indexes for table `soldier`
--
ALTER TABLE `soldier`
  ADD UNIQUE KEY `email` (`email`,`mob`,`adhaar`,`id`,`acc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
