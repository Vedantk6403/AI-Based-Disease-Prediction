-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2024 at 04:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthify`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease_precaution`
--

CREATE TABLE `disease_precaution` (
  `disease` varchar(39) DEFAULT NULL,
  `sym1` varchar(36) DEFAULT NULL,
  `sym2` varchar(34) DEFAULT NULL,
  `sym3` varchar(38) DEFAULT NULL,
  `sym4` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_precaution`
--

INSERT INTO `disease_precaution` (`disease`, `sym1`, `sym2`, `sym3`, `sym4`) VALUES
('Disease', 'Precaution_1', 'Precaution_2', 'Precaution_3', 'Precaution_4'),
('Drug Reaction', 'stop irritation', 'consult nearest hospital', 'stop taking drug', 'follow up'),
('Malaria', 'Consult nearest hospital', 'avoid oily food', 'avoid non veg food', 'keep mosquitos out'),
('Allergy', 'apply calamine', 'cover area with bandage', '', 'use ice to compress itching'),
('Hypothyroidism', 'reduce stress', 'exercise', 'eat healthy', 'get proper sleep'),
('Psoriasis', 'wash hands with warm soapy water', 'stop bleeding using pressure', 'consult doctor', 'salt baths'),
('GERD', 'avoid fatty spicy food', 'avoid lying down after eating', 'maintain healthy weight', 'exercise'),
('Chronic cholestasis', 'cold baths', 'anti itch medicine', 'consult doctor', 'eat healthy'),
('hepatitis A', 'Consult nearest hospital', 'wash hands through', 'avoid fatty spicy food', 'medication'),
('Osteoarthristis', 'acetaminophen', 'consult nearest hospital', 'follow up', 'salt baths'),
('(vertigo) Paroymsal  Positional Vertigo', 'lie down', 'avoid sudden change in body', 'avoid abrupt head movment', 'relax'),
('Hypoglycemia', 'lie down on side', 'check in pulse', 'drink sugary drinks', 'consult doctor'),
('Acne', 'bath twice', 'avoid fatty spicy food', 'drink plenty of water', 'avoid too many products'),
('Diabetes ', 'have balanced diet', 'exercise', 'consult doctor', 'follow up'),
('Impetigo', 'soak affected area in warm water', 'use antibiotics', 'remove scabs with wet compressed cloth', 'consult doctor'),
('Hypertension ', 'meditation', 'salt baths', 'reduce stress', 'get proper sleep'),
('Peptic ulcer diseae', 'avoid fatty spicy food', 'consume probiotic food', 'eliminate milk', 'limit alcohol'),
('Dimorphic hemmorhoids(piles)', 'avoid fatty spicy food', 'consume witch hazel', 'warm bath with epsom salt', 'consume alovera juice'),
('Common Cold', 'drink vitamin c rich drinks', 'take vapour', 'avoid cold food', 'keep fever in check'),
('Chicken pox', 'use neem in bathing ', 'consume neem leaves', 'take vaccine', 'avoid public places'),
('Cervical spondylosis', 'use heating pad or cold pack', 'exercise', 'take otc pain reliver', 'consult doctor'),
('Hyperthyroidism', 'eat healthy', 'massage', 'use lemon balm', 'take radioactive iodine treatment'),
('Urinary tract infection', 'drink plenty of water', 'increase vitamin c intake', 'drink cranberry juice', 'take probiotics'),
('Varicose veins', 'lie down flat and raise the leg high', 'use oinments', 'use vein compression', 'dont stand still for long'),
('AIDS', 'avoid open cuts', 'wear ppe if possible', 'consult doctor', 'follow up'),
('Paralysis (brain hemorrhage)', 'massage', 'eat healthy', 'exercise', 'consult doctor'),
('Typhoid', 'eat high calorie vegitables', 'antiboitic therapy', 'consult doctor', 'medication'),
('Hepatitis B', 'consult nearest hospital', 'vaccination', 'eat healthy', 'medication'),
('Fungal infection', 'bath twice', 'use detol or neem in bathing water', 'keep infected area dry', 'use clean cloths'),
('Hepatitis C', 'Consult nearest hospital', 'vaccination', 'eat healthy', 'medication'),
('Migraine', 'meditation', 'reduce stress', 'use poloroid glasses in sun', 'consult doctor'),
('Bronchial Asthma', 'switch to loose cloothing', 'take deep breaths', 'get away from trigger', 'seek help'),
('Alcoholic hepatitis', 'stop alcohol consumption', 'consult doctor', 'medication', 'follow up'),
('Jaundice', 'drink plenty of water', 'consume milk thistle', 'eat fruits and high fiberous food', 'medication'),
('Hepatitis E', 'stop alcohol consumption', 'rest', 'consult doctor', 'medication'),
('Dengue', 'drink papaya leaf juice', 'avoid fatty spicy food', 'keep mosquitos away', 'keep hydrated'),
('Hepatitis D', 'consult doctor', 'medication', 'eat healthy', 'follow up'),
('Heart attack', 'call ambulance', 'chew or swallow asprin', 'keep calm', ''),
('Pneumonia', 'consult doctor', 'medication', 'rest', 'follow up'),
('Arthritis', 'exercise', 'use hot and cold therapy', 'try acupuncture', 'massage'),
('Gastroenteritis', 'stop eating solid food for while', 'try taking small sips of water', 'rest', 'ease back into eating'),
('Tuberculosis', 'cover mouth', 'consult doctor', 'medication', 'rest');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(2, 'Vedant', 'vedantk6403@gmail.com', '$2y$10$1WGTkeTXv5fAYnXYxe4EYOhI43xoY5o.8utVTV.XooA8uYbWajXsi'),
(3, 'anku@gmail.com', 'anku@gmail.com', '$2y$10$50fTQ5k1Ib.pUruK4E0xaOjRZclZdNEWTnC9L.3UMwLGjIxpJY8Ci'),
(4, 'heena', 'h123@gmail.com', '$2y$10$x0pvyfGLJC4U43WrXYHj5eipOmXEggHHB2gw272LDg8UvfivHN2uO'),
(5, 'Drupta', 'Drupta@gmail.com', '$2y$10$XgZ0B7zogHqrU/BHNXlKT.AxBmri5NWXZI8BkkvpMujuYZQhfnW3e'),
(6, 'Ashish', 'aa8903100@gmail.com', '$2y$10$zZzzT0FFvu0MCZA0wWJlZeH8lXth11kdcUd7Aku/RTCNTBYXySSmC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
