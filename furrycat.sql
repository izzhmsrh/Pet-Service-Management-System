-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220709.4e08d2933b
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furrycat`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BOOKING_ID` int(30) NOT NULL,
  `CUST_ID` int(30) NOT NULL,
  `SERVICE_ID` int(30) NOT NULL,
  `BOOK_DATE` date NOT NULL,
  `BOOK_TIME` time NOT NULL,
  `NO_OF_CATS` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BOOKING_ID`, `CUST_ID`, `SERVICE_ID`, `BOOK_DATE`, `BOOK_TIME`, `NO_OF_CATS`) VALUES
(123, 111, 1, '2022-07-15', '13:06:00', 2),
(124, 111, 2, '2022-07-14', '17:48:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUST_ID` int(30) NOT NULL,
  `CUST_USERNAME` text NOT NULL,
  `CUST_PASS` text NOT NULL,
  `CUST_NAME` text NOT NULL,
  `CUST_EMAIL` text NOT NULL,
  `CUST_PHONE` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUST_ID`, `CUST_USERNAME`, `CUST_PASS`, `CUST_NAME`, `CUST_EMAIL`, `CUST_PHONE`) VALUES
(111, 'Sarah', 'Sarah123', 'Sarah', 'sarah@gmail.com', 182024653),
(222, 'Aini', 'aini', 'Aini', 'aini@gmail.com', 182334444),
(333, 'Pina', 'pina', 'Pina', 'pina@gmail.com', 12344321),
(444, 'Wani', '1', 'Wani', 'wani@gmail.com', 19222222),
(1111, 'Pika', 'pika', 'pika', 'pika@gmail.com', 189999999);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_ID` int(30) NOT NULL,
  `EMP_NAME` text NOT NULL,
  `EMP_NO_PHONE` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_ID`, `EMP_NAME`, `EMP_NO_PHONE`) VALUES
(2020, 'Zahidi', 192024311),
(2021, 'Nazira', 123322111),
(2022, 'Maisarah', 182221321),
(2023, 'Athira', 177543322),
(2024, 'Nabilah', 192221233);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SERVICE_ID` int(30) NOT NULL,
  `SERVICE_NAME` text NOT NULL,
  `SERVICE_IMAGE` text NOT NULL,
  `SERVICE_DESCRIPTION` text NOT NULL,
  `SERVICE_COST` double NOT NULL,
  `EMP_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SERVICE_ID`, `SERVICE_NAME`, `SERVICE_IMAGE`, `SERVICE_DESCRIPTION`, `SERVICE_COST`, `EMP_ID`) VALUES
(1, 'Soft Tissues', 'softTissues.png', 'Well equipped operating room and skilled veterinary', 50, 2020),
(2, 'Pet Consultations', 'consultation.png', 'Provides pet diet recommendations as well as reviews of pet conditions.', 30, 2021),
(3, 'Pet Grooming', 'grooming.png', 'Provides pet\'s bathing, combing, clipping, grooming, and cutting a pet\'s nails.', 40, 2021),
(4, 'Pet Treatment', 'treatment.png', 'Offers therapy, parasite control vaccination and treat the wound services for pets.', 50, 2022),
(5, 'Pet Dentistry', 'dentistry.png', 'Dentistry includes the cleaning, adjustment, scaling, brushing, or repair of pets\' teeth', 40, 2020),
(6, 'Pet Surgery', 'surgery.png', 'Give x-rays and blood tests. Describe the suitable treatment. Diagnose illnesses.', 60, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BOOKING_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`),
  ADD KEY `SERVICE_ID` (`SERVICE_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SERVICE_ID`),
  ADD KEY `EMP_ID` (`EMP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BOOKING_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`CUST_ID`) REFERENCES `customers` (`CUST_ID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`SERVICE_ID`) REFERENCES `service` (`SERVICE_ID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



