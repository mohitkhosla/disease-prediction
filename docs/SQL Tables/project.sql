-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 09:54 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'mohit@support.com', 'd8052f9e09a17e6907629e76bbd261cc'),
(2, 'avisha@support.com', '538a723904923efe1c5769d0c6293f50');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `email`, `password`) VALUES
(1, 'mk@gmail.com', '07d935680b6501b2e42fe4baea021389'),
(2, 'avi@gmail.com', '3fca379b3f0e322b7b7967bfcfb948ad'),
(3, 'pv@gmail.com', '99bea2cd698b56b1a3b8c1701bd51c67');

-- --------------------------------------------------------

--
-- Table structure for table `viewdoctor`
--

CREATE TABLE `viewdoctor` (
  `name` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `workhours` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewdoctor`
--

INSERT INTO `viewdoctor` (`name`, `disease`, `address`, `workhours`) VALUES
('Dr. Bella Jagtap Palnitkar', 'Malaria', '189, Swami Vivekanand Road, Landmark: Above Kotak Mahindra Bank, Vile Parle, Mumbai', '11:00 AM - 2:30 PM/7:30 PM - 9:00 PM'),
('Dr. Laxman G. Jonwal', 'Malaria, Asthma', 'Plot Number 30/221, Sector 6, Landmark: Behind Ambe Mata Mandir & Near Chickuwadi Mhada Colony Bridge, Kandivali, Mumbai', '9:00 AM - 1:00 PM/5:00 PM - 8:00 PM'),
('Dr. Neeraj Kumar Tulara', 'Malaria', '#114, Dr L H Hiranandani Hospital, 1st Floor, Hill Side Avenue, Powai, Landmark: Hiranandani Gardens.', '9:00 AM - 1:00 PM/3:00 PM - 8:00 PM'),
('Dr. Sanjay S Chopra', 'Malaria', '5,Shingare Guruji Building, Landmark: Opposite Digvijay Mills,Dr B.A Road, Lalbaug., Mumbai', '9:00 AM - 1:00 PM/5:00 PM - 8:00 PM'),
('Dr. SR Garg', 'Malaria', '102, Crystal Centre, 1st Floor, Raheja Vihar, Landmark: Opp. Chandivali Studio, Mumbai', '10:30 AM - 11:30 AM'),
('Dr. Sandeep S Tilve', 'Pneumonia', '1st Floor, Pagrav Building, S V Road, Landmark: Next To Patkar College, Mumba', '5:30 PM - 9:30 PM'),
('Dr. Mehul Shah	', 'T.B, Pneumonia, Asthma', 'Motiben Dalvi Hospital 1st floor, Opposite Westside, Hughes Road, Gamdevi, Mumbai, Maharashtra - 400007, Mumbai', '6:00 PM - 8:00 PM'),
('Dr. Indu Bubna', 'T.B, Pneumonia', '8, Nishith Building, Ushma Nagar Society, Evershine Nagar, Landmark: Near Old Ryan International School, Mumbai', '11:00 AM - 1:00 PM/6:00 PM - 9:00 PM'),
('Dr. Miti A. Shah', 'Pneumonia', '6A/3, Sindhi Colony, 1st floor, Landmark: Opposite Gurukripa Hotel, Mumbai', '3:30 PM - 6:30 PM'),
('Dr. Sunita Jonwal', 'Asthma', 'Plot Number 30/221, Matoshree Bungalow, Charkop Sector 6, Landmark: Behind Ambe Mata Mandir & Near Chickuwadi Mhada Colony Bridge, Mumbai', '11:00 AM - 1:00 PM/7:00 PM - 8:00 PM'),
('Dr. Rajesh Shah', 'T.B, Asthma', '411, Krushal Commercial Complex, G M Road, Landmark: Above Shoppers Stop, Mumbai', '10:00 AM - 4:30 PM'),
('Dr. Shailesh Jain', 'Pneumonia', '317, 3rd Floor, B Wing, The Plaza Panchsheel Building, 55 Hughes Road, Landmark: Next to Dharam Palace, Mumbai', '4:00 PM - 8:00 PM'),
('Dr. Vikas Punamiya', 'Pneumonia', '35, D.E.Borges Road, Hospital Avenue, Parel, Opp Shirodkar High School, Mumbai, Mumbai', '5:00 PM - 7:00 PM'),
('Dr. Alpa Dawda', 'Asthma', 'Shop Number 9, Smruti Mandir, Valji Ladha Road, Landmark: Opposite Hira Mongi Hospital, Mumbai', '12:30 PM - 1:30 PM/7:30 PM - 9:00 PM'),
('Dr. Alaknanda Pai', 'Pneumonia, Malaria', '35/36, Mayuresh Shrishti-1, LBS Road, Landmark: Opposite Asian Paints & Near Central Bank Of India, Mumbai', '6:00 PM - 9:30 PM'),
('Dr. Sulaiman Ladhani', 'T.B, Asthma', 'Nesbit Road, Landmark: Next to St. Mary''s High School, Mumbai', '7:00 PM - 9:00 PM'),
('Dr. Mitali Agarwal', 'T.B, Pneumonia, Asthma', 'Parth Business Plaza, New Link Rd, Orlem, Kanchpada, Mumbai', '11:00 AM - 1:00 PM'),
('Dr. Arvind H. Kate', 'Pneumonia', 'Zen Multispeciality Hospital,Plot No 425, 10th Road, Chembur East, Landmark: Near Sandu Garden, Mumbai', '9:00 AM - 11:00 AM/3:00 PM - 5:00 PM'),
('Dr. Kamleshkumar Pandey', 'T.B, Pneumonia, Asthma', '404, 4th Floor, Paras Business Center, Carter Road - 1, Landmark: Near Kasturba Police Station, Mumbai', '7:30 PM - 9:00 PM'),
('Dr. Kapil Rathi', 'Tuberculosis', 'Room Number 04, Ground Floor, B-4, Golden Nest Society, Marol, Landmark: Marol Naka, Mumbai', '1:00 PM - 3:00 PM/6:00 PM - 8:45 PM'),
('Dr. Abhay Raut', 'Asthma', 'Vohra Galaxy Bldg, 1st Floor, Kalina Market, Mumbai', '11:00 AM - 1:30 PM'),
('Dr. Gupta', 'Pneumonia, Malaria', 'NSP, Palghar', '5:00 PM - 8:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
