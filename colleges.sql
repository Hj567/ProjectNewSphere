-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2020 at 12:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `description` varchar(800) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `lat`, `lng`, `description`, `Date`) VALUES
(1, 'DPS International ', 28.570101, 77.178596, '', NULL),
(2, 'P.E.S\'s Modern College of Engineering', 18.525730, 73.846397, '', NULL),
(3, 'Fergusson College, Pune', 18.522816, 73.838898, '', NULL),
(4, 'Symbiosis Institute Of Computer Studies and Research', 18.533438, 73.833679, '', NULL),
(5, 'Manipal Institute of Technology', 18.518368, 73.814720, '', NULL),
(6, 'Air Force School', 18.573631, 73.916290, '', NULL),
(7, 'Army Public School Dighi Camp', 18.591740, 73.874680, '', NULL),
(8, 'Pune International School', 18.577974, 73.896263, '', NULL),
(9, 'The Lexicon International School, Kalyani Nagar', 18.546551, 73.901199, '', NULL),
(10, 'The Orbis School', 18.532551, 73.950134, '', NULL),
(11, 'HelloWorld', 69.542580, 118.452072, '', NULL),
(17, 'Hardik Jain', 28.579275, 77.258476, 'Hello this is a test?????', NULL),
(18, 'Tanush Jain', 28.579275, 77.258476, 'Hello this is a test!!!', NULL),
(19, 'Sangeeta Jain ', 12.930253, 77.571686, 'Test 2 Append Text', NULL),
(20, 'Test 3', 12.930253, 77.571686, 'Test 3 ', '2020-06-12'),
(21, 'Nursing Tails', 12.921483, 77.545883, 'Helped 3 stray dogs near Maharani Bagh Gurudwara', '2020-09-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
