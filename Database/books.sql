-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books database`
--

CREATE TABLE `books database` (
  `id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `bookprice` int(255) NOT NULL,
  `semester` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `bookauthorname` varchar(255) NOT NULL,
  `book_cover_photo` varchar(255) NOT NULL,
  `book_Pdf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books database`
--

INSERT INTO `books database` (`id`, `bookname`, `bookprice`, `semester`, `branch`, `subject`, `bookauthorname`, `book_cover_photo`, `book_Pdf`, `email`, `mobileno`) VALUES
(1, 'Maths', 100, 1, 'it', 'Maths', 'harsh', '../Database/uploadedcoverphoto/maths.jpeg', '../Database/uplodedbookpdf/RusselResume.pdf', 'harshvaghasiya2123@gmail.com', 2147483647),
(2, 'physics', 200, 1, 'it', 'Physics', 'harsh', '../Database/uploadedcoverphoto/physics.jpeg', '../Database/uplodedbookpdf/RusselResume.pdf', 'harshvaghasiya21@gmail.com', 2147483647),
(3, 'chemistry', 300, 1, 'it', 'Chemistry', 'harsh', '../Database/uploadedcoverphoto/chemistry.jpg', '../Database/uplodedbookpdf/RusselResume.pdf', 'harshvaghasiya21@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `enrollnment` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `mobileno`, `name`, `enrollnment`, `semester`, `branch`, `password`) VALUES
(1, 'harshvaghasiya21@gmail.com', '+917016541653', 'Vaghasiya Harsh Vipulbhai', '200170116009', '6', 'it', 'Harsh@21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books database`
--
ALTER TABLE `books database`
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
-- AUTO_INCREMENT for table `books database`
--
ALTER TABLE `books database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
