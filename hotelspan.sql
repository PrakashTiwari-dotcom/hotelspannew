-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 02:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelspan`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `date`, `time`, `venue`, `organizer`) VALUES
(20, 'submitting image', 'hansy elon musk', '../uploads/em.jpg', '0000-00-00', '00:00:00.000000', 'butwal', 'self'),
(23, 'software devlopment', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/Sdev.jpg', '2020-02-09', '11:11:00.000000', 'butwal', 'Ansu Tech'),
(29, 'new event', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/05.png', '2020-11-13', '10:10:00.000000', 'Nepathya college', 'nepathya college'),
(30, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/04t.jpg', '0000-00-00', '14:22:00.000000', 'sidid', 'didiid'),
(31, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/03.jpg', '0000-00-00', '14:22:00.000000', 'sidid', 'sss'),
(32, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/03.jpg', '2020-11-11', '14:22:00.000000', 'sidid', 'kdjdjd'),
(33, 'kldlkdld', 'This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/02-1.jpg', '2020-11-11', '14:22:00.000000', 'sidid', 'kddld'),
(34, 'new try', 'This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventwill be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/Sdev.jpg', '1111-11-11', '11:11:00.000000', 'butwal', 'self'),
(35, 'new', 'lorem ipsum lore Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iure beatae? Quo, minima veritatis. Consectetur dolore blanditiis cumque similique, tempora quia ipsam. Non similique dolorum minima fuga vitae quas soluta facilis quidem enim? Ullam harum animi incidunt natus consectetur quia repellendus sequi est hic quod mollitia, fugit pariatur itaque? Modi optio, fugit aut minima, dolorum voluptas minus expedita consequuntur, libero amet nobis iusto ullam? Id, eveniet nostrum! Dolore minus temporibus iusto voluptate, aperiam doloremque, similique quos veritatis nihil inventore cumque omnis, magnam reiciendis natus. Ab quam exercitationem amet molestias! Placeat amet, minima perspiciatis iure vel est a eum temporibus tempore.', '../uploads/events/bullet.jpg', '2020-11-11', '10:10:00.000000', 'hotel span', 'self');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(53, '../uploads/gallery/38651723_1881164605252357_669698560949747712_n.jpg'),
(54, '../uploads/gallery/62270520_2209151272721382_571813979941240832_n.jpg'),
(56, '../uploads/gallery/cocktail1.jpg'),
(57, '../uploads/gallery/cocktail2.jpg'),
(60, '../uploads/gallery/barista1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'abc', 'abc'),
(2, 'stepup', 'stepup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
