-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 01:22 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_deal`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `name_main` varchar(20) NOT NULL,
  `name_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name_main`, `name_sub`) VALUES
(1, 'food', 'dessert'),
(2, 'food', 'food'),
(3, 'food', 'drink'),
(4, 'travel', 'transport'),
(5, 'travel', 'tour-package'),
(6, 'travel', 'hotel'),
(7, 'beauty', 'makeup'),
(8, 'beauty', 'fashion'),
(9, 'beauty', 'beauty-clinic'),
(10, 'lifestyle', 'entertainment'),
(11, 'lifestyle', 'sport'),
(12, 'lifestyle', 'electronic');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `promotion` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price_new` int(20) NOT NULL,
  `price_old` int(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `website` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL,
  `pic3` varchar(200) NOT NULL,
  `pic4` varchar(200) NOT NULL,
  `pic5` varchar(200) NOT NULL,
  `points` int(20) NOT NULL,
  `class_id` int(10) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`id`, `name`, `promotion`, `description`, `price_new`, `price_old`, `address`, `tel`, `website`, `latitude`, `longitude`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `points`, `class_id`, `date_start`, `date_end`) VALUES
(1, 'LANEIGE BB CUSHION', 'ท้าลมร้อน SALE UP TO 40%', 'บีบี Cushion สูตรใหม่ จาก Laneige ควบคุมความมันพร้อมปกปิดรูขุมขน ให้ผิวดูเรียบเนียน อย่างเป็นธรรมชาติ พิเศษด้วยเนื้อ Semi-matt Finish ทำให้ผิวดูกึ่งแมตต์ ไม่มันเยิ้ม ให้ผิวสวยเนียนใส', 959, 1598, 'Eveandboy สาขา zpell', '02-520-1111', 'zpellshopping.com', '13.98882', '100.6152566', 'laneigebbcushion_01.jpg ', 'laneigebbcushion_02.png', 'laneigebbcushion_03.png', 'laneigebbcushion_04.jpg ', 'laneigebbcushion_05.jpg ', 50, 7, '2016-05-01', '2016-05-08'),
(2, 'Vichy Eau Thermale', 'SALE 30% ', 'บริสุทธิ์และมาจากธรรมชาติ 100% ปราศจากน้ำหอม ปราศจากสารกันเสีย ปราศจากสารเติมแต่ง', 169, 241, '2164, เขตลาดกระบัง 10520', '087-678-2582', 'www.facebook.com/jambeautystory', '13.721842', '100.77946', 'VichyEauThermale_01.jpg', 'VichyEauThermale_02.png', 'VichyEauThermale_03.jpg', '', '', 50, 7, '2016-04-29', '2016-05-13'),
(3, 'Revlon Colorstay', 'Special price!!', 'Revlon Colorstay', 300, 550, 'ร้าน Watson ทั่วปะเทศ', '02-017-8899', 'www.watsons.co.th', '13.794522', '100.3066848', 'RevlonColorstay_01.jpg', 'RevlonColorstay_02.jpg', 'RevlonColorstay_03.jpg', 'RevlonColorstay_04.jpg', '', 25, 7, '2016-05-16', '2016-05-30'),
(4, 'Maybelline Velvet Matte', '55% OFF', 'นวัตกรรมใหม่จากเมย์เบลลีน…..''Unbreakable Matte'' ลิควิดลิปสติกเนื้อกำมะหยี่แบบแมท เรียบเนียน ไม่แตก ไม่ตกร่อง พร้อมสะกดทุกสายตาไว้ที่ริมฝีปากคุณ \r\nนวัตกรรมใหม่ส่งตรงจากรันเวย์แห่งมหานครนิวยอร์ค เมย์เบลลีน เวลเว็ท แมท บาย คัลเลอร์เซนเซชั่นแนล (Maybelline Velvet Matte by Color Sensational)', 150, 272, 'LADY CORNER \r\n224 ตลาดลุงเพิ่มซอย 2 ซอย วิภาวดีรังสิต 22,ถนน วิภาวดีรังสิต,แขวง จอมพล เขต จตุจักร,กรุงเทพมหานคร 10900', '084 641 4004', '', '13.7783838', '100.5284627', 'MaybellineVelvetMatte_01.jpg', 'MaybellineVelvetMatte_02.jpg', 'MaybellineVelvetMatte_03.jpg', 'MaybellineVelvetMatte_04.jpg', 'MaybellineVelvetMatte_05.jpg', 70, 7, '2016-04-01', '2016-04-09'),
(5, 'Scholl Velvet Smooth', 'Shock Price!!', 'ผลิตภัณฑ์ขัดเท้าอัตโนมัติตัวแรก จากแบรนด์ที่เข้าใจเท้าอย่าง Scholl Scholl Velvet Smooth (สกอลล์ เวลเวท สมูท)', 420, 1990, 'Avent FitFlop Usa\r\n', '095-595-1784', 'http://www.ensogo.co.th/', '13.7955585', '100.3284983', 'SchollVelvetSmooth_01.jpeg', 'SchollVelvetSmooth_02.jpeg', 'SchollVelvetSmooth_03.jpg', 'SchollVelvetSmooth_04.jpg', 'SchollVelvetSmooth_05.jpg', 33, 8, '2016-04-25', '2016-05-16'),
(6, 'CKL เครื่องหนีบผม 7 วัน 7 ทรง รุ่น 9108 (สีฟ้า/ดำ)', 'Sale for you', 'คุณสมบัติ \r\n- เครื่องหนีบผม 7 วัน 7 ทรง CKL9108\r\n- ตัวเครื่องพลาสติกสีดำ-น้ำเงิน\r\n- สามารถใช้ได้ทั้งหนีบ ม้วนผมในเครื่องตัว\r\n- แผ่นให้ความร้อนเซรามิคอย่างดี แบบโค้ง หนีบผมได้ตรงสวยธรรมชาติ\r\n- สายไฟหมุนได้ 360 องศา ทำให้ไม่พันกัน', 990, 387, 'telecorsa \r\n573 ซอย สวนมะลิเซ็นเตอร์,ถนน บำรุงเมือง,แขวง คลองมหานาค เขต ป้อมปราบศัตรูพ่าย,กรุงเทพมหานคร 10100', '02-221-3434', 'tele-thailand.com', '13.751192', '100.5103761', 'CKL_01.jpeg', 'CKL_02.jpeg', 'CKL_03.jpeg', 'CKL_04.jpeg', 'CKL_05.jpg', 10, 8, '2016-05-11', '2016-05-14'),
(7, 'Resistance Training Bands Tube Workout Exercise For Yoga', 'CUT OFF!!', 'Resistance Training Bands Tube Workout Exercise For Yoga 8 Type Fashion Body Building Fitness Equipment Tool', 167, 332, 'Telecorsa\r\n573 ซอย สวนมะลิเซ็นเตอร์,ถนน บำรุงเมือง,แขวง คลองมหานาค เขต ป้อมปราบศัตรูพ่าย,กรุงเทพมหานคร 10100', '02-221-3434', 'tele-thailand.com', '13.751192', '100.5103761', 'BandsTube_01.jpg ', 'BandsTube_02.jpg ', 'BandsTube_03.jpg ', 'BandsTube_04.jpg ', 'BandsTube_05.jpg ', 40, 11, '2016-04-11', '2016-04-25'),
(8, 'xbike รุ่นใหม่2016', 'Special', 'จักรยานออกกำลังกาย x bike new design 2016รุ่นใหม่ล่าสุด   Magnetic Bike\r\n\r\nเอ็กซ์ไบค์  เงียบกว่า ดีไซด์สวยกว่า ใช้พื้นที่เก็บน้อยกว่า  เพิ่มมือจับข้างเบาะนั่งเพื่อการทรงตัวที่ดีกว่า  และฟังก์ชั่น วัดการเต้นหัวใจ (pulse meter)', 4600, 5900, 'easybuy\r\n98 อาคาร Sathorn Square ชั้น 9,ถนน นราธิวาสราชนครินทร์,แขวง สีลม เขต บางรัก,กรุงเทพมหานคร 10500', '02-684-3333', 'easybuy.co.th', '13.7512781', '100.4775453', 'xbike_01.jpg', 'xbike_02.jpg', 'xbike_03.jpg', 'xbike_04.jpg', '', 100, 11, '2016-05-16', '2016-05-20'),
(9, 'Siam Ocean World', 'SUMMER IS FUNNY', 'มากกว่าการผจญภัยใต้ท้องทะเล เพราะ SEA LIFE Bangkok Ocean World มีกิจกรรมสุดพิเศษให้คุณได้เลือกเปิดประสบการณ์ใหม่แบบไม่ซ้ำใคร และพร้อมสร้างความประทับใจให้คุณในทุกโอกาส', 810, 1080, 'siam ocean world\r\n991 Rama 1 Road,เขต ปทุมวัน,กรุงเทพมหานคร 10330', '02-687-2000', 'sealifebangkok.com', '13.746022', '100.5330299', 'siamoceanworld_01.jpg', 'siamoceanworld_02.jpg', 'siamoceanworld_03.jpg', 'siamoceanworld_04.jpg', 'siamoceanworld_05.jpg', 100, 10, '2016-04-25', '2016-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `users_fb_id` int(10) NOT NULL,
  `deal_id` int(10) NOT NULL,
  `deal_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `deal_points` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rating_comment`
--

CREATE TABLE `rating_comment` (
  `id` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `deal_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `users_fb_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rating_like`
--

CREATE TABLE `rating_like` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `deal_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `users_fb_id` int(10) NOT NULL,
  `like_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `points` int(10) NOT NULL,
  `date` date NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `pic`, `email`, `tel`, `address`, `points`, `date`, `admin`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'C:\\xampp\\htdocs\\deal\\images\\users\\user.png', 'admin@hotmail.com', '085-1732330', '123/15 bangkok', 150, '2016-05-01', '1'),
(2, 'Kwang', '54605f62d37ef9159df9fbcfa0523a7c', 'C:\\xampp\\htdocs\\deal\\images\\users\\user1.png', 'kwang@hotmail.com', '085-4857572', '9/4 Banpong Ratchaburi', 180, '2016-05-02', '0'),
(3, 'Karn', '169c63d18c01d0f52c161cb2b9befe9f', 'C:\\xampp\\htdocs\\deal\\images\\users\\user2.png', 'karn@hotmail.com', '081-5552475', '28/12 Bangkok', 120, '2016-05-02', '0'),
(4, 'Pim', '8c4db68ff02f4fa64ef6cddb12e69072', 'C:\\xampp\\htdocs\\deal\\images\\users\\user3.png', 'pim@hotmail.com', '087-2943744', '182 salaya Nakornpatom', 220, '2016-05-05', '0'),
(5, 'Kant', '97a156ce39b1b862b5691c66fcaab666', 'C:\\xampp\\htdocs\\deal\\images\\users\\user4.png', 'kant@gmail.com', '089-2856203', '283/15 Bangkok', 150, '2016-05-06', '0'),
(6, 'Mack', '6a07c26809d867d207381667c1e42055', 'C:\\xampp\\htdocs\\deal\\images\\users\\user5.png', 'mack@gmail.com', '088-2674920', '26/9 putthamonton Nakornpatom', 120, '2016-05-03', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_fb`
--

CREATE TABLE `users_fb` (
  `id` int(10) NOT NULL,
  `fb_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `points` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_comment`
--
ALTER TABLE `rating_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_like`
--
ALTER TABLE `rating_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_fb`
--
ALTER TABLE `users_fb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating_comment`
--
ALTER TABLE `rating_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating_like`
--
ALTER TABLE `rating_like`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_fb`
--
ALTER TABLE `users_fb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
