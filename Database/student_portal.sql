-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `full_name`, `email`, `Mobile`, `otp`, `password`, `created_at`) VALUES
(3, 'Admin One', 'Admin1@mit.asia', '7865894565', '456498', '9924a1e0e103e88c43770657202687d9', '2021-06-16 22:14:22'),
(4, 'Sanket Suresh Mangle', 'ssmangle1234@gmail.com', '9370567328', '132302', '4ae43cbe4b367ced6f67573cc13aa72a', '2021-07-12 10:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(255) NOT NULL,
  `full_name` varchar(1500) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `heading` varchar(1500) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `files` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `full_name`, `Post`, `Created_at`, `heading`, `content`, `files`) VALUES
(8, 'Nilesh Ganesh Patil', 'Principal', '2021-09-09 20:12:24', 'Technoblitz Event', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'announce/Technoblitz.png'),
(9, 'Dipa Dharmadhikari', 'Vice-Principal', '2021-09-09 20:15:50', 'Cybernatics  Virtual', 'RE : Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'announce/Technoblitz.png');

-- --------------------------------------------------------

--
-- Table structure for table `hod_data`
--

CREATE TABLE `hod_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `taddress` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod_data`
--

INSERT INTO `hod_data` (`id`, `full_name`, `email`, `Mobile`, `DOB`, `Gender`, `paddress`, `profile_image`, `password`, `taddress`, `Branch`, `Post`, `created_at`) VALUES
(2, 'Bhakti Abhirwadkar', 'Bhakti.Ahirwade@mit.asia', '9823551111', '1973-05-10', 'Female', 'Mit Aurangabad', 'Profile/female.png', 'b2023820a60123ef4e6869bacaf7d90c', 'Mit Aurangabad', 'Computer Science & Engineering', 'HOD', '2021-07-10 11:16:38'),
(3, 'Sunita Badwe', 'Sunita.Badwe@mit.asia', '9890973068', '1980-01-18', 'Female', 'Mit Aurangabad', 'Profile/female.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Electrical Engineering', 'HOD', '2021-07-10 11:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `principal_data`
--

CREATE TABLE `principal_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `taddress` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `principal_data`
--

INSERT INTO `principal_data` (`id`, `full_name`, `email`, `Mobile`, `DOB`, `Gender`, `paddress`, `profile_image`, `password`, `taddress`, `Post`, `created_at`) VALUES
(1, 'Nilesh Ganesh Patil', 'Nilesh.patil@mit.asia', '7856495234', '1957-06-08', 'male', 'Mit Aurangabad', 'Profile/male.png', '45742ac57f67ce72644701af6a30f285', 'Mit Aurangabad', 'Principal', '2021-06-15 17:17:49'),
(5, 'Dipa Dharmadhikari', 'Dipa.Dharmadhikari@mit.asia', '7865496525', '1955-11-10', 'Female', 'Mit Aurangabad', 'Profile/female.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Vice-Principal', '2021-06-16 17:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE `staff_data` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `taddress` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `AYear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`id`, `full_name`, `email`, `Mobile`, `DOB`, `Gender`, `paddress`, `profile_image`, `password`, `taddress`, `Branch`, `created_at`, `AYear`) VALUES
(1, 'Kiran Chaudhari', 'Kiran.Chaudhari@mit.asia', '9422704707', '1987-03-11', 'Male', 'Mit Aurangabad', 'Profile/male.png', 'b2023820a60123ef4e6869bacaf7d90c', 'Mit Aurangabad', 'Computer Science & Engineering', '2021-07-11 11:38:14', 'Second Year'),
(2, 'Priyanka Kapdiya', 'Priyanka.Kapdiya@mit.asia', '9657054935', '1969-12-30', 'Female', 'Mit Aurangabad', 'Profile/female.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Computer Science & Engineering', '2021-07-11 12:48:53', 'Second Year'),
(3, 'Supriya Kinariwale', 'supriya.kinariwale@mit.asia', '9822595563', '1968-06-06', 'Female', 'Mit Aurangabad', 'Profile/female.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Computer Science & Engineering', '2021-07-11 13:00:32', 'Third Year'),
(4, 'pavin shinde', 'pravinshinde@mit.asia', '9865321478', '1974-02-12', 'Male', 'aurangabad', 'Profile/male.png', '25d55ad283aa400af464c76d713c07ad', 'aurangabad', 'Electrical Engineering', '2021-08-19 17:53:02', 'Second Year'),
(5, 'Aishwarya Taur', 'Aishwarya.taur@mit.asia', '9637324117', '1994-10-19', 'Female', 'Mit Aurangabad', 'Profile/female.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Electrical Engineering', '2021-08-19 19:53:05', 'Second Year'),
(6, 'Saurabh Kohli', 'saurabh.kohli@mit.asia', '7888243989', '1990-06-19', 'Male', 'Mit Aurangabad', 'Profile/male.png', '25d55ad283aa400af464c76d713c07ad', 'Mit Aurangabad', 'Electrical Engineering', '2021-08-19 19:54:44', 'Third Year');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `profile_sign` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `sub_caste` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `taddress` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `AYear` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `signup-date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `full_name`, `DOB`, `email`, `Mobile`, `password`, `gender`, `profile_image`, `profile_sign`, `mother_tongue`, `religion`, `caste`, `sub_caste`, `paddress`, `taddress`, `Branch`, `AYear`, `country`, `state`, `district`, `pin`, `signup-date`) VALUES
(21, 'Sanket Suresh Mangle', '2001-02-23', 'ssmangle1234@gmail.com', '09370567328', 'b2023820a60123ef4e6869bacaf7d90c', 'Male', 'upload_profile/IMG_20200923_100640.jpg', 'upload_sign/IMG_20210308_195338.jpg', 'Marathi', 'Hindu', 'OBC', 'kunbi', 'iudp colony near mahakali mandir behind hanuman mandir washim', 'iudp colony near mahakali mandir behind hanuman mandir washim', 'Computer Science & Engineering', 'Second Year', 'India', 'Maharashtra', 'Washim', '444505', '2021-07-18 09:37:26'),
(22, 'Nita Shivnath Jadhav', '2001-06-06', 'nitajadhav866@gmail.com', '07083861810', '25d55ad283aa400af464c76d713c07ad', 'Female', 'upload_profile/InShot_20201224_162337580.jpg', 'upload_sign/IMG_20201224_161916.jpg', 'Marathi', 'Hindu', 'Open', 'kunbi', 'Maroti Nagar Mayur park plot no.111', 'Maroti Nagar Mayur park plot no.111', 'Computer Science & Engineering', 'Second Year', 'India', 'Maharashtra', 'Washim', '431005', '2021-07-18 10:07:27'),
(23, 'Anant Rajesh Kapse', '2002-10-17', 'anantrk111@gmail.com', '8446325209', '25d55ad283aa400af464c76d713c07ad', 'Male', 'upload_profile/male.png', 'upload_sign/IMG_20191207_140003.jpg', 'Marathi', 'Hindu', 'OBC', 'kunbi', 'Near mahatma fule chowk washim', 'Near mahatma fule chowk washim', 'Electrical Engineering', 'Third Year', 'India', 'Maharashtra', 'Washim', '444505', '2021-07-18 10:09:57'),
(24, 'Prasad Gangadhar Ayya', '2001-09-16', 'prasadayya123@gmail.com', '7249168676', '25d55ad283aa400af464c76d713c07ad', 'Male', 'upload_profile/prasad Photo.jpg', 'upload_sign/p.jpg', 'Marathi', 'Hindu', 'Open', 'kunbi', 'banjar colony aundha nagnath-431705', 'banjar colony aundha nagnath-431705', 'Computer Science & Engineering', 'Second Year', 'India', 'Maharashtra', 'Washim', '444505', '2021-07-18 10:11:50'),
(25, 'Aniket Suresh Mangle', '2000-01-13', 'aniketmangle245@gmail.com', '07620818197', '25d55ad283aa400af464c76d713c07ad', 'Male', 'upload_profile/male.png', 'upload_sign/p.jpg', 'Marathi', 'Hindu', 'Open', 'kunbi', 'iudp colony near mahakali mandir behind hanuman mandir washim', 'iudp colony near mahakali mandir behind hanuman mandir washim', 'Computer Science & Engineering', 'Third Year', 'India', 'Maharashtra', 'Washim', '444505', '2021-07-18 10:31:07'),
(26, 'Abhishek Rajesh Yadav', '2001-12-19', 'abhishekryadav12@gmail.com', '8180964114', '25d55ad283aa400af464c76d713c07ad', 'Male', 'upload_profile/abhi photo.jpg', 'upload_sign/abhi sign.jpg', 'Marathi', 'Hindu', 'OBC', 'YADAV', 'Washim', 'Washim', 'Electrical Engineering', 'Second Year', 'India', 'Maharashtra', 'Washim', '444505', '2021-08-19 20:33:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_data`
--
ALTER TABLE `hod_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal_data`
--
ALTER TABLE `principal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_data`
--
ALTER TABLE `staff_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hod_data`
--
ALTER TABLE `hod_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `principal_data`
--
ALTER TABLE `principal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_data`
--
ALTER TABLE `staff_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
