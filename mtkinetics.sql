-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 05:30 PM
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
-- Database: `mtkinetics`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `boking_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `emrnumber` int(15) NOT NULL,
  `emraddr` varchar(35) NOT NULL,
  `fitness_prob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`boking_id`, `username`, `place`, `height`, `weight`, `emrnumber`, `emraddr`, `fitness_prob`) VALUES
(1, '', 'Kodachadri', '5feet', '34kg', 2147483647, 'dasdsdadasddad', 'dasdadasdas'),
(2, '', 'Kodachadri Trek', 'ewqe', 'qweqwe', 2147483647, 'qweqe', 'qwewq'),
(3, '', 'Kp', '4.9inch', '85kg', 2147483647, 'fdasfBF', 'DCFAS'),
(4, '', 'wqdd', 'qewqew', 'ewq', 2147483647, 'wewqq', 'ewqeqe'),
(5, '', 'Kp', 'e', 'rewr', 2147483647, '321213', '3213'),
(6, '', 'eqwe', 'ewqe', 'eqwewq', 2147483647, 'weqe', 'eqwe'),
(7, '', 'Kp', '432', '3424', 2147483647, '2313', '12312'),
(8, '', 'weqe', '324', '23432', 2147483647, '33244', '4234'),
(9, '', 'wqeqew', 'eeqwe', 'eqwewq', 2147483647, '23112', '3123'),
(10, '', 'weqeqe', '213', '312', 2147483647, '213', '23'),
(11, '', 'eqwe', 'qewqew', 'qweqwe', 2147483647, '2324', '4322'),
(12, '', '1231', '1233', '123', 2147483647, '12342', '2342'),
(13, '', 'weqewq', 'qweq', 'eqwe', 2147483647, '2133', '2342'),
(14, '', 'qwe', 'eqwe', 'eqweq', 2147483647, 'sdada', 'dsad');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `fname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `username`, `password`) VALUES
('Keith Dsouza', 'dasdasdasdgmail.com', 'david'),
('JOACHIM FURTADO', 'davido3124fffurtado@gmail.comd', 'ssssss'),
('David Furtado', 'davidofffurtad@gmail.com', 'ddd'),
('DDDA', 'davidofffurtado@gmail.com', 'david'),
('Shailaja Kumar', 'sailaga@gmail.com', 'shailaja'),
('Sharan Assole', 'sharn@gmail.com', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `dateofbirth` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `email`, `password`, `phone`, `dateofbirth`) VALUES
('keith Dsouza', 'dasdasdasdgmail.com', 'david', 2147483647, '123123-01-31'),
('JOACHIM FURTADO', 'davido3124fffurtado@gmail.comd', 'ssssss', 2147483647, ''),
('David Furtado', 'davidofffurtad@gmail.com', 'ddd', 2147483647, '2020-10-28'),
('DDDA', 'davidofffurtado@gmail.com', 'david', 2147483647, '213312-03-21'),
('Shailaja Kumar', 'sailaga@gmail.com', 'shailaja', 2147483647, '0021-12-21'),
('Sharan Assole', 'sharn@gmail.com', 'ddddd', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`boking_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `boking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
