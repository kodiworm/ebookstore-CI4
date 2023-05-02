-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 07:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3 ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(10, 'oppo', 'opoo@email.com', '098278738', 'oppo address', '', '2021-02-09 12:17:25', '2021-02-09 12:17:25'),
(11, 'Sulp Op', 'sul@mail.com', '0789566423', 'jijio', '', '2021-02-09 12:58:29', '2021-02-09 12:58:29'),
(12, 'Kodi Worm', 'kodiworm@gmail.com', '0789564321', 'Nairobi, nairobi', '', '2021-02-09 13:06:30', '2021-02-09 13:06:30'),
(13, 'Paul Demecco', 'paul@gmail.com', '0745233122', 'Machakos, King\'ang\'ani', '', '2021-02-09 13:12:57', '2021-02-09 13:12:57'),
(14, 'opo', 'paul@gmail.com', '0712543876', 'Nairobi, nairobi', '', '2021-02-09 13:54:07', '2021-02-09 13:54:07'),
(15, 'Kelvin Mwangi', 'www.kvomwas@gmail.com', '0799555444', 'Machakos', '', '2021-02-09 14:43:47', '2021-02-09 14:43:47'),
(16, 'Clinton Otieno', 'clintotieno@email.domain', '0756234122', 'Kisumu, Dalla', '', '2021-02-11 13:16:32', '2021-02-11 13:16:32'),
(17, 'Ken Njuguna', 'ken@gmail.com', '0799555444', 'Machakos', '', '2021-02-11 15:17:21', '2021-02-11 15:17:21'),
(18, 'martin', 'mato@email.com', '0799555444', 'kitui', '', '2021-02-16 19:44:52', '2021-02-16 19:44:52'),
(19, 'Paul Demecco', 'demecco@gmail.com', '0756234122', 'popote', '', '2021-05-25 11:38:02', '2021-05-25 11:38:02'),
(20, 'Paul Demecco', 'demecco@gmail.com', '0718529631', 'popote', '', '2021-05-26 18:06:44', '2021-05-26 18:06:44'),
(21, 'embara,mnag', 'abokionyundo@gmail.com', '098278738', 'mVC', '', '2021-05-26 18:16:15', '2021-05-26 18:16:15'),
(22, 'oppo', 'opoo@email.com', '0111234123', 'oppo address', '', '2021-06-12 16:18:31', '2021-06-12 16:18:31'),
(23, 'kelvin', 'jonte2@gmail.com', '12345676', 'beru', '', '2021-06-15 18:05:22', '2021-06-15 18:05:22'),
(24, 'scott primary school', 'scott@primary.ac.ke', '0201245455', 'Machakos', '', '2021-06-15 19:22:31', '2021-06-15 19:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_quantity`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
(9, 10, 0, 399.00, '1', '2021-02-09 12:17:25', '2021-02-09 12:17:25'),
(10, 11, 0, 745.00, '1', '2021-02-09 12:58:29', '2021-02-09 12:58:29'),
(11, 12, 0, 711.00, '1', '2021-02-09 13:06:30', '2021-02-09 13:06:30'),
(12, 13, 0, 1126.00, '1', '2021-02-09 13:12:57', '2021-02-09 13:12:57'),
(13, 14, 0, 738.00, '1', '2021-02-09 13:54:08', '2021-02-09 13:54:08'),
(14, 15, 0, 989.00, '1', '2021-02-09 14:43:47', '2021-02-09 15:25:10'),
(15, 16, 0, 983.00, '1', '2021-02-11 13:16:33', '2021-02-11 13:16:33'),
(16, 17, 0, 884.00, '1', '2021-02-11 15:17:21', '2021-02-11 15:17:21'),
(17, 18, 0, 1500.00, '1', '2021-02-16 19:44:52', '2021-02-16 19:44:52'),
(18, 19, 0, 555.00, '1', '2021-05-25 11:38:02', '2021-05-25 11:38:02'),
(19, 20, 0, 2295.00, '1', '2021-05-26 18:06:44', '2021-05-26 18:06:44'),
(20, 21, 0, 395.00, '1', '2021-05-26 18:16:16', '2021-05-26 18:16:16'),
(21, 22, 0, 340.00, '1', '2021-06-12 16:18:31', '2021-06-12 16:18:31'),
(22, 23, 0, 575.00, '1', '2021-06-15 18:05:23', '2021-06-15 18:05:23'),
(23, 24, 0, 395.00, '1', '2021-06-15 19:22:31', '2021-06-15 19:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float(10,2) NOT NULL,
  `placed_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `sub_total`, `placed_on`) VALUES
(1, 9, 1, 1, 399.00, '2021-02-09 13:15:28'),
(2, 10, 7, 1, 406.00, '2021-02-09 13:15:28'),
(3, 11, 8, 1, 305.00, '2021-02-09 13:15:28'),
(4, 12, 2, 1, 395.00, '2021-02-09 13:15:28'),
(5, 13, 5, 1, 339.00, '2021-02-09 13:15:28'),
(6, 14, 3, 2, 650.00, '2021-02-09 13:15:28'),
(7, 15, 8, 1, 305.00, '2021-02-11 10:16:33'),
(8, 16, 17, 1, 150.00, '2021-02-11 12:17:21'),
(9, 17, 16, 1, 1500.00, '2021-02-16 16:44:52'),
(10, 18, 8, 1, 305.00, '2021-05-25 08:38:02'),
(11, 19, 3, 2, 650.00, '2021-05-26 15:06:44'),
(12, 20, 2, 1, 395.00, '2021-05-26 15:16:16'),
(13, 21, 20, 1, 340.00, '2021-06-12 13:18:31'),
(14, 22, 18, 1, 235.00, '2021-06-15 15:05:23'),
(15, 23, 2, 1, 395.00, '2021-06-15 16:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  `product_signature` varchar(150) NOT NULL DEFAULT 'ebookstore',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `status`, `product_signature`, `created_at`, `updated_at`) VALUES
(1, 'cre-1.jpeg', 'Visionary CRE Activities Grade 1', 'Christian Religious Activities is a learning area aimed at instilling in the learner moral and spiritual values to enable him or her live a morally upright life and fit well in society.\r\nKLB Visionary Grade 1 Christian Religious Activities Learner\'s Workbook has been developed in line with the requirements of the new Competence Based Curriculum Design.The experiences have been developed in tandem with the thematic integrated approach that is recommended for children at this level. The book is generously illustrated to enliven the content and the text follows the design closely.\r\nThis Workbook has employed a child-centred approach where all experiences are centred on the child\'s interests, knowledge and application to real life situations in line with the Life Approach Method of teaching Christian Religious Education. Learners encounter different situations and gain experience from what happens around them. Every lesson has something to draw from day-to-day occurrences. This Learner\'s Workbook has, therefore, used short texts in simple language with familiar situations that are created to help learners understand more difficult concepts.\r\nGender-equitable roles have been reflected so as to erase the association of certain tasks with specific gender. For example, both boys and girls are involved in household chores, playing musical instruments and actively participating in church activities. The principle of inclusivity has been taken care of by having illustrations of children with special needs involved in common activities with other children to make learners appreciate them as part of the society.\r\nThis Learner\'s book is basically a Workbook with numerous practical activities within and at the end of every lesson to enable the learner to practise doing on their own. The simple exercises like drawing, colouring, singing and reciting memory verses are integrated within the lessons so as to make learning interesting and participatory.', 399.00, '1', 'ebookstore', '2021-01-22 11:30:29', '2021-01-22 14:30:29'),
(2, 'english-aid-1.jpg', 'English Aid Activity book Grade 1', 'English Aid Activity book Grade 1', 395.00, '1', 'ebookstore', '2021-01-22 11:36:27', '2021-01-22 14:36:27'),
(3, 'primary-maths-1.jpeg', 'Primary Mathematics Activities Grade 1', 'This is the first book in the new series of Primary Mathematics written specifically for the competence-based curriculum. The coursebook is intended for use by Grade 1 learners. It prepares the learner for day to day living and number work in higher levels of schooling.\r\n\r\nThe unique strength of the book lies in the following areas:\r\n• Adequate coverage of the new curriculum concepts and skills with a strong activity orientation.\r\n• A variety of examples enclosed in coloured frames to promote self-study and ease of use.\r\n• A variety of exercises that test the understanding of every concept and skill learnt.\r\n\r\nThe book comes with a separate comprehensive teacher\'s guide and a set of wall charts.\r\nThis book has been designed with special reference to learners with different learning abilities.', 325.00, '1', 'ebookstore', '2021-01-22 11:38:32', '2021-01-22 14:38:32'),
(5, 'sound-and-read-1.jpg', 'Sound and Read Book 1 Revised Edition', 'This book will provide a sure reading and spelling ability for all reading beginners of all ages. The Reader must complete both Sound and Read Books One and Two for the best results.', 339.00, '1', 'ebookstore', '2021-01-27 21:56:16', '2021-01-28 00:56:16'),
(6, 'spotlight_eng_1.jpg', 'Spotlight English Activities Learner\'s book Grade 1', 'by Beatrice Nakholi, David Kabura, Jean Munyi, Oliver Ochieng\', Stephen Adhoch\r\n\r\nISBN: 9789966571427SKU: 2010101002571\r\nCovers all the strands, sub-strands and learning outcomes of the Primary English 1 Competency-based Curriculum.\r\n\r\nRelevant learning experiences are provided in form of activities within the level of the learners. All the four language skills. concepts and competencies are addressed per curriculum demands. Encourages learner-centred learning approaches by use of practical and group work activities with examples. Attractive full-colour illustrations are used to clarify language concepts. Develops concepts by using environment and real-life experiences to foster skills. attitude and values in learners. Numerous relevant Assessment Activities have been carefully developed per language skill. Practice Activities are provided for each skill to assess developed concepts for respective learning outcome. Sum up Activities are provided at the end of theme for formative assessment \r\n\r\nLearner-centred approaches, discovery-based and inquiry-based activities have been applied to develop concepts. core competencies, values and Pertinent Contemporary Issues (PC1s). A Teacher\'s Guide is available for this title. ', 399.00, '1', 'ebookstore', '2021-01-27 22:08:33', '2021-01-28 01:08:33'),
(7, 'math-activities-1.jpg', 'Tops Extension Mathematics GD1', 'ops Extension Environmental is developed to help learners acquire the core competencies in the new curriculum. The Workbook is easy to use, has a variety of activities therefore making learning enjoyable.', 406.00, '1', 'ebookstore', '2021-01-27 22:28:57', '2021-01-28 01:28:57'),
(8, 'kiswahili-1.jpg', 'OUP Kiswahili Dadisi Grade 1 Workbook', 'by OUP Kenya\r\n\r\nISBN: 9780195747362SKU: 2010127000810\r\nKiswahili Dadisi, Mazoezi ya Lugha, Workbook ni mfululizo wa kipekee wa vitabu vya mazoezi katika mfumo mpya wa umilisi, Vitabu hivi vinaelekeza kikamilifu kufanya mazoezi ya lugha kwa njia ya kufurahisha na kuelimisha. Kila kitabu katika mfululizo huu kimefanyiwa utafiti wa kina na kuandikwa kwa ustadi ili kuwasaidia wanafunzi kupata umitisi wa msingi, ujuzi, maadili na kuwa na mitazamo bora maishani.', 305.00, '1', 'ebookstore', '2021-01-27 22:28:58', '2021-01-28 01:28:58'),
(9, 'comp-1.jpg', 'Mastering Computers Book 1 (Smartbrains)', 'by IT Panel\r\n\r\nISBN: 9780996671811SKU: 2010108000138\r\nMastering Computers is a book intended for use by pre-primary pupils. It has been thoroughly researched on and introduces pupils to the simplest and most basic ways of computers.', 500.00, '1', 'ebookstore', '2021-01-27 22:28:58', '2021-01-28 01:28:58'),
(10, '20210204010211_64.jpg', 'The Terrible Thesis', 'The Terrible Thesis', 1250.00, '1', 'kvomwas', '2021-02-04 00:15:11', '2021-02-04 03:15:11'),
(13, '20210204010221_48.jpg', 'The Terrible Thesis', 'The Terrible Thesis', 1250.00, '1', 'kvomwas', '2021-02-04 00:27:21', '2021-02-04 03:27:21'),
(16, '20210208110254_73.jpg', 'Kodi Worm', 'Kodiworm Book Description', 1500.00, '1', 'kodiworm', '2021-02-08 10:07:54', '2021-02-08 13:07:54'),
(17, '20210210200258_65.jpeg', 'Admin Book 1', 'Admin Book description 1', 150.00, '1', 'kvomwas', '2021-02-10 19:03:58', '2021-02-10 22:03:58'),
(18, '20210210200219_63.jpg', 'Admin Book 2', 'Admin book description 2', 235.00, '1', 'kvomwas', '2021-02-10 19:13:19', '2021-02-10 22:13:19'),
(19, '20210211130226_57.jpeg', 'Oppo Book', 'Oppo book description ', 250.00, '1', 'kvomwas', '2021-02-11 12:19:26', '2021-02-11 15:19:26'),
(20, '20210526170551_32.jpg', 'Fasihi Simulizi', 'High school kiswahili ', 340.00, '1', 'kvomwas', '2021-05-26 15:28:51', '2021-05-26 18:28:51'),
(21, '20210615180620_65.jpg', 'Book Name', 'Book Description', 1200.00, '1', 'kvomwas', '2021-06-15 16:57:20', '2021-06-15 19:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `fullname`, `username`, `email`, `phone`, `dob`, `gender`, `password`, `created_at`, `updated_at`) VALUES
(8, 'Kodi Worm', 'kodiworm', 'kodiworm@gmail.com', '0718529631', '1997-12-03', 'male', '827ccb0eea8a706c4c34a16891f84e7b', '2021-02-04 01:17:04', '2021-02-04 01:17:04'),
(9, 'Kvo Mwas', 'kvomwas', 'www.kvomwas@gmail.com', '0712543876', '1999-01-06', 'male', '827ccb0eea8a706c4c34a16891f84e7b', '2021-02-04 03:02:13', '2021-02-04 03:02:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
