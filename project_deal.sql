-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 06:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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
(1, 'FOOD', 'Dessert'),
(2, 'FOOD', 'Food'),
(3, 'FOOD', 'Drink'),
(4, 'TRAVEL', 'Transport'),
(5, 'TRAVEL', 'Tour-package'),
(6, 'TRAVEL', 'Hotel'),
(7, 'BEAUTY', 'Makeup'),
(8, 'BEAUTY', 'Fashion'),
(9, 'BEAUTY', 'Beauty-clinic'),
(10, 'LIFESTYLE', 'Entertainment'),
(11, 'LIFESTYLE', 'Sport'),
(12, 'LIFESTYLE', 'Electronic');

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
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
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
(1, 'LANEIGE BB CUSHION', 'ท้าลมร้อน SALE UP TO 40%', 'บีบี Cushion สูตรใหม่ จาก Laneige ควบคุมความมันพร้อมปกปิดรูขุมขน ให้ผิวดูเรียบเนียน อย่างเป็นธรรมชาติ พิเศษด้วยเนื้อ Semi-matt Finish ทำให้ผิวดูกึ่งแมตต์ ไม่มันเยิ้ม ให้ผิวสวยเนียนใส', 959, 1598, 'Eveandboy สาขา zpell', '02-520-1111', 'zpellshopping.com', '13.79484970', '100.20162680', 'laneigebbcushion_01.jpg ', 'laneigebbcushion_02.png', 'laneigebbcushion_03.png', 'laneigebbcushion_04.jpg ', 'laneigebbcushion_05.jpg ', 50, 7, '2016-05-01', '2016-05-08'),
(2, 'Vichy Eau Thermale', 'SALE 30% ', 'บริสุทธิ์และมาจากธรรมชาติ 100% ปราศจากน้ำหอม ปราศจากสารกันเสีย ปราศจากสารเติมแต่ง', 169, 241, '2164, เขตลาดกระบัง 10520', '087-678-2582', 'www.facebook.com/jambeautystory', '13.72330340', '100.73707480', 'VichyEauThermale_01.jpg', 'VichyEauThermale_02.png', 'VichyEauThermale_03.jpg', '', '', 50, 7, '2016-04-29', '2016-05-13'),
(3, 'Revlon Colorstay', 'Special price!!', 'Revlon Colorstay', 300, 550, 'ร้าน Watson ทั่วปะเทศ', '02-017-8899', 'www.watsons.co.th', '13.87629720', '100.40986230', 'RevlonColorstay_01.jpg', 'RevlonColorstay_02.jpg', 'RevlonColorstay_03.jpg', 'RevlonColorstay_04.jpg', '', 25, 7, '2016-05-16', '2016-05-30'),
(4, 'Maybelline Velvet Matte', '55% OFF', 'นวัตกรรมใหม่จากเมย์เบลลีน…..''Unbreakable Matte'' ลิควิดลิปสติกเนื้อกำมะหยี่แบบแมท เรียบเนียน ไม่แตก ไม่ตกร่อง พร้อมสะกดทุกสายตาไว้ที่ริมฝีปากคุณ \r\nนวัตกรรมใหม่ส่งตรงจากรันเวย์แห่งมหานครนิวยอร์ค เมย์เบลลีน เวลเว็ท แมท บาย คัลเลอร์เซนเซชั่นแนล (Maybelline Velvet Matte by Color Sensational)', 150, 272, 'LADY CORNER \r\n224 ตลาดลุงเพิ่มซอย 2 ซอย วิภาวดีรังสิต 22,ถนน วิภาวดีรังสิต,แขวง จอมพล เขต จตุจักร,กรุงเทพมหานคร 10900', '084 641 4004', '', '13.80646800', '100.56003040', 'MaybellineVelvetMatte_01.jpg', 'MaybellineVelvetMatte_02.jpg', 'MaybellineVelvetMatte_03.jpg', 'MaybellineVelvetMatte_04.jpg', 'MaybellineVelvetMatte_05.jpg', 70, 7, '2016-04-01', '2016-04-09'),
(5, 'Scholl Velvet Smooth', 'Shock Price!!', 'ผลิตภัณฑ์ขัดเท้าอัตโนมัติตัวแรก จากแบรนด์ที่เข้าใจเท้าอย่าง Scholl Scholl Velvet Smooth (สกอลล์ เวลเวท สมูท)', 420, 1990, 'Avent FitFlop Usa\r\n', '095-595-1784', 'http://www.ensogo.co.th/', '13.74679250', '100.53700310', 'SchollVelvetSmooth_01.jpeg', 'SchollVelvetSmooth_02.jpeg', 'SchollVelvetSmooth_03.jpg', 'SchollVelvetSmooth_04.jpg', 'SchollVelvetSmooth_05.jpg', 30, 8, '2016-04-25', '2016-05-16'),
(6, 'CKL เครื่องหนีบผม 7 วัน 7 ทรง รุ่น 9108 (สีฟ้า/ดำ)', 'Sale for you', 'คุณสมบัติ \r\n- เครื่องหนีบผม 7 วัน 7 ทรง CKL9108\r\n- ตัวเครื่องพลาสติกสีดำ-น้ำเงิน\r\n- สามารถใช้ได้ทั้งหนีบ ม้วนผมในเครื่องตัว\r\n- แผ่นให้ความร้อนเซรามิคอย่างดี แบบโค้ง หนีบผมได้ตรงสวยธรรมชาติ\r\n- สายไฟหมุนได้ 360 องศา ทำให้ไม่พันกัน', 990, 387, 'telecorsa \r\n573 ซอย สวนมะลิเซ็นเตอร์,ถนน บำรุงเมือง,แขวง คลองมหานาค เขต ป้อมปราบศัตรูพ่าย,กรุงเทพมหานคร 10100', '02-221-3434', 'tele-thailand.com', '13.75112740', '100.51044290', 'CKL_01.jpeg', 'CKL_02.jpeg', 'CKL_03.jpeg', 'CKL_04.jpeg', 'CKL_05.jpg', 10, 8, '2016-05-11', '2016-05-14'),
(7, 'Resistance Training Bands Tube Workout Exercise For Yoga', 'CUT OFF!!', 'Resistance Training Bands Tube Workout Exercise For Yoga 8 Type Fashion Body Building Fitness Equipment Tool', 167, 332, 'Telecorsa\r\n573 ซอย สวนมะลิเซ็นเตอร์,ถนน บำรุงเมือง,แขวง คลองมหานาค เขต ป้อมปราบศัตรูพ่าย,กรุงเทพมหานคร 10100', '02-221-3434', 'tele-thailand.com', '13.75112740', '100.51044290', 'BandsTube_01.jpg ', 'BandsTube_02.jpg ', 'BandsTube_03.jpg ', 'BandsTube_04.jpg ', 'BandsTube_05.jpg ', 40, 11, '2016-04-11', '2016-04-25'),
(8, 'xbike รุ่นใหม่2016', 'Special', 'จักรยานออกกำลังกาย x bike new design 2016รุ่นใหม่ล่าสุด   Magnetic Bike\r\n\r\nเอ็กซ์ไบค์  เงียบกว่า ดีไซด์สวยกว่า ใช้พื้นที่เก็บน้อยกว่า  เพิ่มมือจับข้างเบาะนั่งเพื่อการทรงตัวที่ดีกว่า  และฟังก์ชั่น วัดการเต้นหัวใจ (pulse meter)', 4600, 5900, 'easybuy\r\n98 อาคาร Sathorn Square ชั้น 9,ถนน นราธิวาสราชนครินทร์,แขวง สีลม เขต บางรัก,กรุงเทพมหานคร 10500', '02-684-3333', 'easybuy.co.th', '13.72211130', '100.52684940', 'xbike_01.jpg', 'xbike_02.jpg', 'xbike_03.jpg', 'xbike_04.jpg', '', 100, 11, '2016-05-16', '2016-05-20'),
(9, 'Siam Ocean World', 'SUMMER IS FUNNY', 'มากกว่าการผจญภัยใต้ท้องทะเล เพราะ SEA LIFE Bangkok Ocean World มีกิจกรรมสุดพิเศษให้คุณได้เลือกเปิดประสบการณ์ใหม่แบบไม่ซ้ำใคร และพร้อมสร้างความประทับใจให้คุณในทุกโอกาส', 810, 1080, 'siam ocean world\r\n991 Rama 1 Road,เขต ปทุมวัน,กรุงเทพมหานคร 10330', '02-687-2000', 'sealifebangkok.com', '13.74602720', '100.53302990', 'siamoceanworld_01.jpg', 'siamoceanworld_02.jpg', 'siamoceanworld_03.jpg', 'siamoceanworld_04.jpg', 'siamoceanworld_05.jpg', 50, 10, '2016-04-25', '2016-05-30'),
(10, 'Coffee Gallery', 'เลือกอร่อยกับเมนู All Day Breakfast', 'ราคา 105 บาท สำหรับเมนู All Day Breakfast', 105, 175, 'สยามเซ็นเตอร์ ชั้น 1', '02-658-1550', 'https://th-th.facebook.com/CG.CoffeeGallery', '13.74603760', '100.53302990', 'coffee-gallery_01.jpg', 'coffee-gallery_02.jpg', 'coffee-gallery_03.jpg', 'coffee-gallery_04.jpg', 'coffee-gallery_05.jpg', 60, 1, '2016-04-25', '2016-07-25'),
(11, 'Gourmandises Cafe & Bakery', 'ลิ้มรสกับเบเกอรีโฮมเมด', 'ราคา 599 บาท สำหรับเซตเค้ก (1.5 ปอนด์) โดยเลือกจาก 6 รสชาติ จำนวน 1 ก้อน', 599, 1294, 'โรงแรมสวิสโฮเต็ล ปาร์คนายเลิศ, 2 ถนนวิทยุ แขวงลุมพีนี เขตปทุมวัน กรุงเทพฯ 10330', '02-253-0123 ', 'http://www.swissotel.com/hotels/bangkok-nai-lert-park/dining/gourmandises-cafe-bakery/', '13.74725010', '100.54515790', 'gourmangdise-cafe-bakery-siwissotel_01.jpg', 'gourmangdise-cafe-bakery-siwissotel_02.jpg', 'gourmangdise-cafe-bakery-siwissotel_03.jpg', 'gourmangdise-cafe-bakery-siwissotel_04.jpg', 'gourmangdise-cafe-bakery-siwissotel_05.jpg', 180, 1, '2016-05-17', '2016-07-31'),
(12, 'Miki Ojisan no Mise', 'ชีสสสส...กันเต็มที่! ยิ้มรับความสด อร่อยถูกใจกับชีสเค้กสไตล์ญี่ปุ่น', 'Miki Ojisan no Mise เสกสวรรค์ด้วยรสชาติแสนอร่อย เอาใจคนรักชีสเค้กโดยเฉพาะ\r\nกลมกล่อม อร่อย หวานมันแบบไม่เลี่ยน ลิ้มละเลียดความสุขที่มีให้เลือกหลากหลายรสชาติ', 219, 300, 'เซ็นทรัลเวิลด์ ชั้น 7 ใน Food Hall', '02-660-9100', 'https://www.facebook.com/media/set/?set=a.225046077512998.76690.214998771851062', '13.74665810', '100.53700570', 'miki-ojisan_01.jpg', 'miki-ojisan_02.jpg', 'miki-ojisan_03.jpg', 'miki-ojisan_04.jpg', 'miki-ojisan_05.jpg', 150, 1, '2016-05-05', '2016-06-05'),
(13, 'SQUEEZE by Tipco', 'Squeeze พรีเมี่ยมสมูทตี้จากผลไม้เต็มๆแก้ว ด้วยเนื้อละเอียด เนียน นุ่ม', 'สมูทตี้แต่ละแก้ว ใช้ผลไม้เต็มแก้วตั้งแต่ 2-4 ชนิด มาปั่นรวมกัน จนได้สมูทตี้เนื้อเนียนนุ่ม ที่ใครได้ลองแล้วเป็นต้องชอบ', 65, 105, 'เซ็นทรัล พระราม 9', '02-103-4969', 'http://www.tipco.net/products', '13.75843300', '100.56406710', 'tipco-squeeze_01.jpg', 'tipco-squeeze_02.jpg', 'tipco-squeeze_03.jpg', 'tipco-squeeze_04.jpg', 'tipco-squeeze_05.jpg', 120, 3, '2016-05-25', '2016-08-04'),
(14, 'Fisherman''s Resort, Haad Chao Samran', 'โปรโมชั่นสำหรับที่พัก 1 คืนใน Garden Villa สำหรับ 2 ท่าน พร้อมอาหารเช้า', 'เพียง 2 ชั่วโมงจากกรุงเทพฯ คุณก็จะได้พบกับ "ฟิชเชอร์แมน รีสอร์ท" ณ หาดเจ้าสำราญ ชายหาดเงียบสงบ พร้อมบรรยากาศของหมู่บ้านชาว''เลดั้งเดิม พักใน Garden Villa วิลล่าส่วนตัวที่ล้ำเสน่ห์ด้วยระเบียงกว้างขวาง สวนเขียวขจีและวิวรายล้อม ทั้งยังสะดวกสบายด้วยโทรทัศน์พร้อมช่องเคเบิลต่างประเทศ อินเทอร์เน็ตไร้สาย ห้องน้ำหรู และพื้นที่ใช้สอยโอ่โถง', 1999, 5940, '170 หมู่ 1 หาดเจ้าสำราญ อ.เมือง จ.เพชรบุรี 76100 ', '032-441-370 ', 'http://www.thefishermansresort.com/', '13.01134210', '100.05244450', 'fishermans-resort-haad-chao-samran_01.jpg', 'fishermans-resort-haad-chao-samran_02.jpg', 'fishermans-resort-haad-chao-samran_03.jpg', 'fishermans-resort-haad-chao-samran_04.jpg', 'fishermans-resort-haad-chao-samran_05.jpg', 220, 6, '2016-06-01', '2016-08-16'),
(15, 'Centara Chaan Talay Resort & Villas, Trat', 'ค้นฟ้า คว้าความสำราญ ณ จุดนัดพบของทะเลใสและฟ้าคราม รวมอาหารเช้า สำหรับ 2 ท่าน', 'Life is Suite! สวีทหวานได้ใจ ให้คุณสบายเป็นแพ็กคู่ที่ Centara Chaan Talay Resort & Villas จังหวัดตราด รีสอร์ทหรูบนเนื้อที่ครอบคลุมชายหาดซึ่งยังสมบูรณ์ไม่ถูกทำลายไปตามกาลเวลา และยังสามารถมองเห็นเกาะช้างอันสวยงาม', 1890, 8239, '4/2 หมู่ 9 ต.แหลมกรูด อ.เมือง จ.ตราด 23000 ', '090-880-0248 ', 'http://www.centarahotelsresorts.com/cct/cct', '12.13795440', '102.63732390', 'centara-chaan-talay-resort-villas-trat_01.jpg', 'centara-chaan-talay-resort-villas-trat_02.jpg', 'centara-chaan-talay-resort-villas-trat_03.jpg', 'centara-chaan-talay-resort-villas-trat_04.jpg', 'centara-chaan-talay-resort-villas-trat_05.jpg', 150, 6, '2016-04-26', '2016-10-31'),
(16, 'Putahracsa Resort (Oceanbed Jacuzzi Villa), Hua Hin', '“รักษา”ใจที่เคยป่วย เพียงมาชื่นชมความสวยระดับอายุวัฒนะ!', '“พุทธรักษา หัวหิน” รีสอร์ทบูติกห้าดาวสุดหรู ซึ่งมีประวัติความเป็นมากว่า 3 ยุคสมัย ตั้งแต่รุ่นคุณยายจนถึงรุ่นหลาน ตั้งอยู่บนถนนแนบเคหาสน์ ซึ่งไม่ไกลจากสถานีรถไฟ และยังเป็นแหล่งรวมร้านอาหารและสถานที่ท่องเที่ยวมากมาย ผสมผสานศาสตร์แห่งการผักผ่อน บรรยากาศแห่งความผ่อนคลาย และสอดแทรกวิถีชีวิตดั้งเดิมของชาวหัวหินได้อย่างลงตัว พร้อมการออกแบบตกแต่งสไตล์ร่วมสมัยเพื่อมอบความเงียบและเป็นส่วนตัวสำหรับทริปพิเศษ', 39000, 6500, '22/65 ถนนแนบเคหาสน์ อ.หัวหิน จ.ประจวบคีรีขันธ์ 77110', '032-531-470', 'http://www.putahracsa.com/', '12.63766320', '99.95417130', 'putahracsa-hua-hin-oceanbed-jacuzzi-villas_01.jpg', 'putahracsa-hua-hin-oceanbed-jacuzzi-villas_02.jpg', 'putahracsa-hua-hin-oceanbed-jacuzzi-villas_03.jpg', 'putahracsa-hua-hin-oceanbed-jacuzzi-villas_04.jpg', 'putahracsa-hua-hin-oceanbed-jacuzzi-villas_05.jpg', 280, 6, '2016-04-19', '2016-09-30'),
(17, 'A.Mallika the Authentic Thai Cuisine', 'บุกอาณาจักรอาหารไทย', 'บุกอาณาจักรอาหารไทยรสชาติอร่อยการันตีด้วยการเปิดบริการมายาวนานกว่า 20 ปี พิถีพิถันเพื่อให้ได้มื้ออาหารพิเศษสุดได้ที่ร้าน อ.มัลลิการ์\r\nอิ่มอร่อยไปกับหลากหลายเมนูอาหารไทยประยุกต์หลากประเภทที่มีมากกว่า 400 เมนูคุณภาพซึ่งหารับประทานที่อื่นได้ยาก เช่น ขาหมูกรอบแกงไตปลา ไข่เจียวซาลาเปาปู ปลาร้าทรงเครื่อง ห่อหมกขนมถ้วย ยำชะอมกรอบ ผัดกระเฉดปาท่องโก๋ เนื้อนกกระจอกเทศผัดกะเพราป่า และอีกหลากหลายเมนู ก่อนปิดท้ายมื้อนี้ด้วยน้ำฟักทองปั่นหรือน้ำมะม่วงปั่นให้เย็นชื่นใจ', 350, 500, '13/10 ถ.ประเสริฐมนูกิจ แขวงนวมินทร์ เขตบึงกุ่ม กทม.', '02-946-1000', 'http://www.mallika.co.th/', '13.70436930', '100.50077540', 'a-mallika-the-authentic_01.jpg', 'a-mallika-the-authentic_02.jpg', 'a-mallika-the-authentic_03.jpg', 'a-mallika-the-authentic_04.jpg', 'a-mallika-the-authentic_05.jpg', 150, 2, '2016-04-01', '2016-07-31'),
(18, 'OSHA Cafe (Cash Voucher) เอเชียทีค', 'เปิดประสบการณ์ใหม่ “The Best authentic Thai taste with modern twist”', 'จากต้นตำรับความอร่อยบนแผ่นดินซานฟรานซิสโกอย่างยาวนาน  สู่สาขาแรกในประเทศไทยด้วยความอร่อยหรูหราในแบบ Fine Dining บริเวณใจกลางเมืองย่านธุรกิจของกรุงเทพการันตีคุณภาพด้วยรางวัลจากหลายสถาบัน ร้านอาหารโอชาไทย (OSHA Thai Restaurant & Bar) พร้อมสานต่อความความอร่อยล้ำครั้งใหม่ในเขตเมืองเก่าบนพื้นที่ศูนย์การค้าริมแม่น้ำเจ้าพระยาที่ใหญ่ที่สุดในเอเชียภายใต้ชื่อ  โอชาคาเฟ่  (OSHA Cafe)', 690, 1500, 'ศูนย์การค้าเอเชียทีค เดอะ ริเวอร์ฟร้อนท์ ห้อง E03 โกดัง10 ถนนเจริญกรุง แขวงวัดพระยาไกร เขตบางคอแหลม กทม 10120 ', '02-046-9441 ', 'http://www.oshabangkok.com/,www.oshabangkok.com%20www.facebook/oshabangkok', '13.70436930', '100.50077540', 'osha-cafe-cash-voucher_01.jpg', 'osha-cafe-cash-voucher_02.jpg', 'osha-cafe-cash-voucher_03.jpg', 'osha-cafe-cash-voucher_04.jpg', 'osha-cafe-cash-voucher_05.jpg', 100, 2, '2016-04-21', '2016-07-31'),
(19, 'เกาหลี Romantic Spring', '5 วัน 3 คืน โดยสายการบินไทยแอร์เอเชียเอ็กซ์', 'ชม ถนนสายวัฒนธรรมวอลมิโด ริมทะเลแสนโรแมนติค ลิ้มรสเมนูขึ้นชื่อ จาจังเมียน ชื่อดัง\r\nสัมผัสบรรยากาศสุดแสนโรแมนติค ที่ เกาะนามิ\r\nชมเทศกาลดอกไม้หลากสีสัน ที่ สวนสนุกเอเวอร์แลนด์ + บัตรเครื่องเล่นแบบไม่จำกัดรอบ', 10900, 15000, 'ประเทศเกาหลี', '02-530-9899', 'planetholidaystravel.com', '36.64915830', '127.03102130', 'seoul1.jpg', 'seoul2.jpg', 'seoul3.jpg', 'seoul4.jpg', 'seoul5.jpg', 180, 5, '2016-05-20', '2016-09-20'),
(20, 'Nokair', ' Let’s go holiday', 'ราคาพิเศษเริ่มต้นที่ 839 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว) สำหรับเส้นทางกระบี่', 839, 1290, 'กระบี่', '090-2337592', 'http://www.nokair.com/', '8.06933730', '98.92461830', 'krabi1.jpg', 'krabi2.jpg', 'krabi3.jpg', 'krabi4.jpg', 'krabi5.jpg', 120, 4, '2016-04-22', '2016-05-22'),
(21, 'Santorini Park Cha-Am', 'เสียงหัวเราะอยู่ “ที่นี่” แฮปปี้วันหยุดที่ซานโตรินี พาร์ค กับตั๋วเครื่องเล่น 5 ใบ', 'สัมผัส “สีสันใหม่แห่งประสบการณ์ความสนุก” ภายใต้คอนเซปต์เก๋ “Amused Shopping Experience” แห่งแลนด์มาร์คที่กำลังครองใจใครต่อหลายคนอย่าง ซานโตรินี พาร์ค ชะอำ', 399, 600, 'ถนนเพชรเกษม อ.ชะอำ จ.เพชรบุรี 76120', '032772999', 'http://www.santoriniparkchaam.com', '12.76023770', '99.93127010', 'santorini-park-cha-am_1.jpg', 'santorini-park-cha-am_2.jpg', 'santorini-park-cha-am_3.jpg', 'santorini-park-cha-am_4.jpg', 'santorini-park-cha-am_5.jpg', 80, 5, '2016-04-01', '2016-08-31'),
(22, 'Teru Sushi Bistro (Set Menu)', 'เสิร์ฟความสุขทุกคำทุกชิ้น อร่อยเพลินลิ้นฟินๆ กับอาหารญี่ปุ่นต้นตำรับละลานตา', 'ลูกพระอาทิตย์ยังติดใจ กับความสดใหม่ของวัตถุดิบ ลิ้มรสความนุ่มของปลาชิ้นหนา ที่หนุบหนับยามเคี้ยว อบอุ่นชื่นใจเมื่อได้กินเซตอาหารที่มาพร้อมซุปร้อนๆ แล้วยิ้มแก้มปริทุกคราเมื่อได้ชิมข้าวหน้าต่างๆ ฟินอุราคนรักอาหารญี่ปุ่นทุกคน', 540, 369, '137/2 ถนนสุขุมวิท 21 (อโศกมนตรี) แขวงคลองตันเหนือ เขตวัฒนา กรุงเทพฯ 10110', '0952525377', 'https://www.facebook.com/terubistro?fref=ts', '13.74748380', '100.56227720', 'teru-sushi-bistro-set-menu_01.jpg', 'teru-sushi-bistro-set-menu_02.jpg', 'teru-sushi-bistro-set-menu_03.jpg', 'teru-sushi-bistro-set-menu_04.jpg', 'teru-sushi-bistro-set-menu_05.jpg', 120, 2, '2016-05-30', '2016-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `deal_id` int(10) NOT NULL,
  `deal_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `deal_points` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `users_id`, `deal_id`, `deal_name`, `date`, `deal_points`) VALUES
(1, 4, 3, 'Revlon Colorstay', '2016-05-30', 25),
(2, 9, 21, 'Santorini Park Cha-Am', '2016-05-30', 80),
(3, 10, 9, 'Siam Ocean World', '2016-05-30', 100),
(4, 3, 3, 'Revlon Colorstay', '2016-05-30', 25),
(5, 3, 15, 'Centara Chaan Talay Resort & Villas, Trat', '2016-05-30', 150),
(6, 5, 3, 'Revlon Colorstay', '2016-05-30', 25),
(7, 5, 21, 'Santorini Park Cha-Am', '2016-05-30', 80),
(8, 5, 3, 'Revlon Colorstay', '2016-05-30', 25),
(9, 8, 18, 'OSHA Cafe (Cash Voucher) เอเชียทีค', '2016-05-30', 100),
(10, 2, 3, 'Revlon Colorstay', '2016-05-30', 25);

-- --------------------------------------------------------

--
-- Table structure for table `rating_comment`
--

CREATE TABLE `rating_comment` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `deal_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating_comment`
--

INSERT INTO `rating_comment` (`id`, `date`, `deal_id`, `users_id`, `comment`) VALUES
(1, '2016-05-30', 10, 4, 'so delicious :)'),
(2, '2016-05-30', 21, 9, 'I want to go here'),
(3, '2016-05-30', 13, 9, 'อยากกินจังงงง'),
(4, '2016-05-30', 11, 10, 'so goodddd'),
(5, '2016-05-30', 10, 10, 'ไปกินกันนนน'),
(6, '2016-05-30', 16, 10, 'want to go now'),
(7, '2016-05-30', 3, 3, 'ถูกจังเลยยย'),
(8, '2016-05-30', 18, 6, 'ไปกินมาแล้ว อร่อยมากกก'),
(9, '2016-05-30', 11, 6, 'อร่อยจริงงง'),
(10, '2016-05-30', 13, 5, 'It''s good'),
(11, '2016-05-30', 3, 5, 'Wowwww'),
(12, '2016-05-30', 12, 5, 'งั่มๆ น่ากินจัง'),
(13, '2016-05-30', 11, 8, 'go go gooo'),
(14, '2016-05-30', 12, 8, 'อยากไปปปป ^^'),
(15, '2016-05-30', 11, 2, 'Wowww I''m hungry');

-- --------------------------------------------------------

--
-- Table structure for table `rating_like`
--

CREATE TABLE `rating_like` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `deal_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `like_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating_like`
--

INSERT INTO `rating_like` (`id`, `date`, `deal_id`, `users_id`, `like_num`) VALUES
(1, '2016-05-30', 10, 4, 1),
(2, '2016-05-30', 3, 4, 1),
(3, '2016-05-30', 21, 9, 1),
(4, '2016-05-30', 9, 9, 1),
(5, '2016-05-30', 11, 10, 1),
(6, '2016-05-30', 10, 10, 1),
(7, '2016-05-30', 21, 10, 1),
(8, '2016-05-30', 9, 10, 1),
(9, '2016-05-30', 3, 3, 1),
(10, '2016-05-30', 15, 3, 1),
(11, '2016-05-30', 18, 6, 1),
(12, '2016-05-30', 9, 6, 1),
(13, '2016-05-30', 11, 6, 1),
(14, '2016-05-30', 13, 5, 1),
(15, '2016-05-30', 17, 8, 1),
(16, '2016-05-30', 3, 8, 1),
(17, '2016-05-30', 9, 8, 1),
(18, '2016-05-30', 11, 8, 1),
(19, '2016-05-30', 12, 8, 1),
(20, '2016-05-30', 18, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
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
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Jellyfish.jpg', 'admin@hotmail.com', '085-1732323', '123/15 samsen bangkok', 144, '2016-05-01', '1'),
(2, 'Kwang', '54605f62d37ef9159df9fbcfa0523a7c', 'Tulips.jpg', 'kwang@hotmail.com', '085-4857572', '9/4 Pakrat Banpong Ratchaburi', 102, '2016-05-02', '0'),
(3, 'Karn', '169c63d18c01d0f52c161cb2b9befe9f', 'IMG_9497.JPG', 'karn@hotmail.com', '081-5552475', '280/12 Bangkok', 19, '2016-05-02', '0'),
(4, 'Pim', '8c4db68ff02f4fa64ef6cddb12e69072', 'Desert.jpg', 'pim@hotmail.com', '087-2943742', '182/2 Chonburi', 49, '2016-05-05', '0'),
(5, 'Kant', '97a156ce39b1b862b5691c66fcaab666', 'Penguins.jpg', 'kant@gmail.com', '089-2856203', '283/15 Bangkok', 37, '2016-05-06', '0'),
(6, 'Mack', '6a07c26809d867d207381667c1e42055', 'user5.png', 'mack@gmail.com', '088-2674929', '26/9 putthamonton Nakornpatom', 165, '2016-05-07', '0'),
(7, 'Pin', '8a6f503814aa4a7cd863e68c7778fbdb', 'user6.png', 'pin@gmail.com', '084-1335524', '23 m.4 Salaya Putthamonton Nakornpathom', 145, '2016-05-08', '0'),
(8, 'Ball', '7a10ea1b9b2872da9f375002c44ddfce', 'user7.jpg', 'ball@hotmail.com', '089-3236667', '21/1 m.3 Putthamonthon sai2 Nakornpathom', 42, '2016-05-09', '0'),
(9, 'Bream', '468b83718851dba2927766460570f422', 'user8.jpg', 'bream@gmail.com', '088-3479241', '23/3 Pinklou Bangkok', 89, '2016-05-09', '0'),
(10, 'kong', '153ddfb15ae1e37b7cf004b201c3e3fd', 'Koala.jpg', 'kong@hotmail.com', '0890045632', '23/13 Sangchan place', 23, '2016-05-30', '0');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `rating_comment`
--
ALTER TABLE `rating_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rating_like`
--
ALTER TABLE `rating_like`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
