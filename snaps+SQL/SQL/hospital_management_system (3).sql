-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 10:58 PM
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
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(9) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Admin_username` varchar(30) NOT NULL,
  `Admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_name`, `Admin_username`, `Admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', '098765');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `Admin_id` int(9) NOT NULL,
  `Doctor_id` int(9) NOT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`Admin_id`, `Doctor_id`, `Patient_ssn`) VALUES
(1, 3, 867154),
(1, 7, 54216);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_id` int(9) NOT NULL,
  `No_of_days` int(11) NOT NULL,
  `Food_charges` int(11) NOT NULL,
  `Doctor_fee` int(11) NOT NULL,
  `Medicine_fee` int(11) NOT NULL,
  `ICU` int(11) NOT NULL,
  `Sugeon_fee` int(11) NOT NULL,
  `theater_fee` int(11) NOT NULL,
  `other_expences` int(11) NOT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_id`, `No_of_days`, `Food_charges`, `Doctor_fee`, `Medicine_fee`, `ICU`, `Sugeon_fee`, `theater_fee`, `other_expences`, `Patient_ssn`) VALUES
(1, 86248, 924, 643784, 6234786, 62478, 642378, 643287, 89374, 5),
(2, 86248, 924, 643784, 6234786, 62478, 642378, 643287, 89374, 5),
(3, 697, 686, 66786, 68, 76, 979, 9789, 979, 65402),
(4, 697, 686, 66786, 68, 76, 979, 9789, 979, 65402),
(5, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(6, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(7, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(8, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(9, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(10, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(11, 6786, 686, 6786, 67, 678, 786, 68, 76, 4),
(12, 6786, 686, 6786, 67, 678, 786, 68, 76, 4);

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `Admin_id` int(9) NOT NULL,
  `Bill_id` int(9) NOT NULL,
  `Patcare_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`Admin_id`, `Bill_id`, `Patcare_id`) VALUES
(1, 5, 1),
(1, 5, 1),
(1, 5, 1),
(1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `discharge_sheet`
--

CREATE TABLE `discharge_sheet` (
  `Dischargesheet_id` int(9) NOT NULL,
  `med_togive` text DEFAULT NULL,
  `revisit_date` date DEFAULT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discharge_sheet`
--

INSERT INTO `discharge_sheet` (`Dischargesheet_id`, `med_togive`, `revisit_date`, `Patient_ssn`) VALUES
(1, 'panadol', '2023-08-25', 3),
(2, 'fgg', '2023-08-24', 3),
(3, 'fgg', '2023-08-24', 3),
(4, 'para', '3004-02-23', 1),
(5, 'para', '3004-02-23', 1),
(6, 'dvevcdv', '0543-03-31', 1),
(7, 'fgfsb', '2023-08-24', 1),
(8, 'k,mjhfasjk', '0005-03-07', 2),
(9, 'bjk', '2023-08-16', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_id` int(9) NOT NULL,
  `Doctor_name` varchar(30) NOT NULL,
  `Doctor_mobile` varchar(20) NOT NULL,
  `Doctor_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_id`, `Doctor_name`, `Doctor_mobile`, `Doctor_password`) VALUES
(1, 'imam', '03046624422', 'imam'),
(2, 'fakhar', '03046624423', 'fakhar'),
(3, 'babar', '03046624424', 'babar'),
(4, 'rizwan', '03046624425', 'rizwan'),
(5, 'iftikhar', '03046624426', 'iftikhar'),
(6, 'salman', '03046624427', 'salman'),
(7, 'nawaz', '03046624428', 'nawaz'),
(8, 'shadab', '03046624429', 'shadab'),
(9, 'shaheen', '03046624410', 'shaheen'),
(10, 'naseem', '03046624411', 'naseem');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `Doctor_id` int(9) NOT NULL,
  `Patientreport_id` int(9) NOT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`Doctor_id`, `Patientreport_id`, `Patient_ssn`) VALUES
(3, 1, 4),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `generate`
--

CREATE TABLE `generate` (
  `Admin_id` int(9) NOT NULL,
  `Dischargesheet_id` int(9) NOT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generate`
--

INSERT INTO `generate` (`Admin_id`, `Dischargesheet_id`, `Patient_ssn`) VALUES
(1, 1, 3),
(1, 3, 3),
(1, 4, 1),
(1, 8, 2),
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `patcare`
--

CREATE TABLE `patcare` (
  `Patcare_id` int(9) NOT NULL,
  `Patcare_name` varchar(30) NOT NULL,
  `Patcare_mobile` varchar(20) NOT NULL,
  `Patcare_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patcare`
--

INSERT INTO `patcare` (`Patcare_id`, `Patcare_name`, `Patcare_mobile`, `Patcare_password`) VALUES
(1, 'hafeez', '03456584528', 'hafeez'),
(2, 'ahmad', '03456584527', 'ahmad'),
(3, 'azhar', '03456584526', 'azhar'),
(4, 'misbah', '03456584525', 'misbah'),
(5, 'afridi', '03456584524', 'afridi'),
(6, 'fawad', '03456584523', 'fawad'),
(7, 'razzaq', '03456584522', 'razzaq'),
(8, 'sarfraz', '03456584521', 'sarfraz'),
(9, 'hassan', '03456584520', 'hassan'),
(10, 'kamran', '03456584518', 'kamran');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_name` varchar(30) NOT NULL,
  `Patient_ssn` int(9) NOT NULL,
  `Patient_no` int(9) NOT NULL,
  `Patient_age` int(11) NOT NULL,
  `Patient_gender` char(1) NOT NULL,
  `Patient_mobile` varchar(20) NOT NULL,
  `medical_con` text NOT NULL,
  `seriousness_level` text NOT NULL,
  `assigned_doc_id` int(30) NOT NULL,
  `Patcare_id` int(9) NOT NULL,
  `Admin_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_name`, `Patient_ssn`, `Patient_no`, `Patient_age`, `Patient_gender`, `Patient_mobile`, `medical_con`, `seriousness_level`, `assigned_doc_id`, `Patcare_id`, `Admin_id`) VALUES
('Ahmad', 0, 43, 43, 'M', '034612234', 'GUIHJB', 'BKJGHJG', 2, 7, 1),
('Harris', 1, 1, 54, 'M', '03046624982', '[value-7]', '[value-8]', 1, 1, 1),
('Harris', 2, 1, 12, 'M', '03046636792', '[value-7]', '[value-8]', 2, 1, 1),
('Shafiq Ahmed', 3, 2, 23, 'M', '03046626738', '[value-7]', '[value-8]', 3, 1, 1),
('Asad Shafiq', 4, 2, 32, 'M', '03046624420304662478', '[value-7]', '[value-8]', 3, 1, 1),
('Shan Masood', 5, 2, 32, 'M', '03046624408', '[value-7]', '[value-8]', 3, 1, 1),
('Amir Sohail', 234, 43, 43, 'M', '03046624409', '[value-7]', '[value-8]', 4, 5, 1),
('Hassan', 756, 54, 43, 'M', '03046624432', '[value-7]', '[value-8]', 2, 4, 1),
('Ali', 8671, 5, 54, 'M', '03046624427', '[value-7]', '[value-8]', 2, 2, 1),
('Ali', 8678, 5, 82, 'M', '03379472347', '[value-7]', '[value-8]', 3, 2, 1),
('ah', 54216, 5, 6, 'M', '7879897', 'ghghjg', 'gjkhgkj', 7, 6, 1),
('Ahmad', 65402, 2, 91, 'M', '03046624422', '[value-7]', '[value-8]', 5, 1, 1),
('Ali', 867154, 5, 32, 'M', '03046624421', '[value-7]', '[value-8]', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patientreport`
--

CREATE TABLE `patientreport` (
  `Patientreport_id` int(9) NOT NULL,
  `Medical_con_before` text NOT NULL,
  `Medical_con_after` text NOT NULL,
  `Treatment_given` text NOT NULL,
  `Med_togive` text NOT NULL,
  `Labtest` text NOT NULL,
  `Patient_ssn` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientreport`
--

INSERT INTO `patientreport` (`Patientreport_id`, `Medical_con_before`, `Medical_con_after`, `Treatment_given`, `Med_togive`, `Labtest`, `Patient_ssn`) VALUES
(1, 'Med condition before', 'Med condition after', 'surgery', 'panadol', 'no', 4),
(2, 'before', 'before', 'hk', 'gjhkg', 'gjjhkgjhk', 4),
(3, 'gjhgjhgh', 'ghgh', 'gjhg', 'jhg', 'jg', 4),
(4, 'gjhgjhgh', 'ghgh', 'gjhg', 'jhg', 'jg', 4),
(6, 'fgdfg', 'dfgdfgv', 'dfgf\r\n', 'gsfgv', 'fgfg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient_bill`
--

CREATE TABLE `patient_bill` (
  `Patient_ssn` int(9) NOT NULL,
  `Bill_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_bill`
--

INSERT INTO `patient_bill` (`Patient_ssn`, `Bill_id`) VALUES
(4, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Bill_id` (`Bill_id`),
  ADD KEY `Patcare_id` (`Patcare_id`);

--
-- Indexes for table `discharge_sheet`
--
ALTER TABLE `discharge_sheet`
  ADD PRIMARY KEY (`Dischargesheet_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `Patientreport_id` (`Patientreport_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `generate`
--
ALTER TABLE `generate`
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Dischargesheet_id` (`Dischargesheet_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `patcare`
--
ALTER TABLE `patcare`
  ADD PRIMARY KEY (`Patcare_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ssn`),
  ADD KEY `Patcare_id` (`Patcare_id`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `patientreport`
--
ALTER TABLE `patientreport`
  ADD PRIMARY KEY (`Patientreport_id`),
  ADD KEY `Patient_ssn` (`Patient_ssn`);

--
-- Indexes for table `patient_bill`
--
ALTER TABLE `patient_bill`
  ADD KEY `Patient_ssn` (`Patient_ssn`),
  ADD KEY `Bill_id` (`Bill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `discharge_sheet`
--
ALTER TABLE `discharge_sheet`
  MODIFY `Dischargesheet_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patcare`
--
ALTER TABLE `patcare`
  MODIFY `Patcare_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patientreport`
--
ALTER TABLE `patientreport`
  MODIFY `Patientreport_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`),
  ADD CONSTRAINT `assign_ibfk_2` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`),
  ADD CONSTRAINT `assign_ibfk_3` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `deliver`
--
ALTER TABLE `deliver`
  ADD CONSTRAINT `deliver_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`),
  ADD CONSTRAINT `deliver_ibfk_2` FOREIGN KEY (`Bill_id`) REFERENCES `bill` (`Bill_id`),
  ADD CONSTRAINT `deliver_ibfk_3` FOREIGN KEY (`Patcare_id`) REFERENCES `patcare` (`Patcare_id`);

--
-- Constraints for table `discharge_sheet`
--
ALTER TABLE `discharge_sheet`
  ADD CONSTRAINT `discharge_sheet_ibfk_1` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`),
  ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`Patientreport_id`) REFERENCES `patientreport` (`Patientreport_id`),
  ADD CONSTRAINT `file_ibfk_3` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `generate`
--
ALTER TABLE `generate`
  ADD CONSTRAINT `generate_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`),
  ADD CONSTRAINT `generate_ibfk_2` FOREIGN KEY (`Dischargesheet_id`) REFERENCES `discharge_sheet` (`Dischargesheet_id`),
  ADD CONSTRAINT `generate_ibfk_3` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Patcare_id`) REFERENCES `patcare` (`Patcare_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`);

--
-- Constraints for table `patientreport`
--
ALTER TABLE `patientreport`
  ADD CONSTRAINT `patientreport_ibfk_2` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`);

--
-- Constraints for table `patient_bill`
--
ALTER TABLE `patient_bill`
  ADD CONSTRAINT `patient_bill_ibfk_1` FOREIGN KEY (`Patient_ssn`) REFERENCES `patient` (`Patient_ssn`),
  ADD CONSTRAINT `patient_bill_ibfk_2` FOREIGN KEY (`Bill_id`) REFERENCES `bill` (`Bill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
