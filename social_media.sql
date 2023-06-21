-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:03 PM
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
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `massage` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `post_date` varchar(100) NOT NULL,
  `rating` double NOT NULL,
  `rating_count` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `massage`, `pic`, `post_date`, `rating`, `rating_count`) VALUES
(66, 31, '', 'photos/uOeEbjGR.jpg', '16 June, 2023', 0, 0),
(67, 31, '', 'photos/lzKNRbCK.jpg', '16 June, 2023', 0, 0),
(68, 31, '\"Capturing moments of serenity in the heart of nature.\"', 'photos/mylKBtBa.jpg', '16 June, 2023', 0, 0),
(69, 31, '', 'photos/lXHHHswz.jpg', '16 June, 2023', 0, 0),
(70, 31, 'Seeking solace in the untamed beauty of the natural world.\"', 'photos/HEJqhqog.jpg', '16 June, 2023', 0, 0),
(72, 31, '', 'photos/MJwyYggg.jpg', '16 June, 2023', 0, 0),
(73, 31, '\"Witnessing the dance of light and shadows in nature\'s theater.\"', 'photos/PvjdrpZG.jpg', '16 June, 2023', 0, 0),
(74, 31, '', 'photos/BFuJONYh.jpg', '16 June, 2023', 0, 0),
(75, 31, '', 'photos/NqnCQkce.jpg', '16 June, 2023', 0, 0),
(76, 31, '', 'photos/MCXMTtdi.jpg', '16 June, 2023', 0, 0),
(77, 31, '\"Where every leaf tells a story, and every breeze whispers a secret.\"', 'photos/lgFMzlol.jpg', '16 June, 2023', 0, 0),
(78, 31, '', 'photos/TQxoGoFn.jpg', '16 June, 2023', 0, 0),
(79, 31, '', 'photos/GjvxnQpl.jpg', '16 June, 2023', 0, 0),
(80, 31, '', 'photos/EgwvwqIc.jpg', '16 June, 2023', 0, 0),
(81, 31, '\"Chasing sunsets and catching dreams in the wild.\"', 'photos/xeAsBYDt.jpg', '16 June, 2023', 0, 0),
(82, 31, '', 'photos/kwFtNvkH.jpg', '16 June, 2023', 0, 0),
(83, 31, '', 'photos/xWBWsyBi.jpg', '16 June, 2023', 0, 0),
(84, 31, 'lmmerse yourself in the beauty of nature through my lens', 'photos/zovyvvaD.jpg', '16 June, 2023', 0, 0),
(85, 31, '\"Finding harmony in the delicate balance of nature.\"', 'photos/dgIxWlev.jpg', '16 June, 2023', 0, 0),
(86, 31, '\"Unveiling the extraordinary in the ordinary scenes of nature.\"', 'photos/EuXrvVWC.jpg', '16 June, 2023', 0, 0),
(87, 32, '\"Through my lens, nature\'s whispers become a symphony.\"', 'photos/YjdCLVbq.jpg', '16 June, 2023', 0, 0),
(88, 32, '', 'photos/TKbPmzHo.jpg', '16 June, 2023', 0, 0),
(89, 32, '', 'photos/bQyPodJC.jpg', '16 June, 2023', 0, 0),
(90, 32, '', 'photos/RjnAtZJx.jpg', '16 June, 2023', 0, 0),
(91, 32, '\"Nature\'s silent poetry, captured in vivid detail.\"', 'photos/vYfdtQDo.jpg', '16 June, 2023', 0, 0),
(92, 32, '', 'photos/GncRtwKi.jpg', '16 June, 2023', 0, 0),
(93, 32, '\"Exploring the endless wonders nature has to offer, one frame at a time.\"', 'photos/MujqGegP.jpg', '16 June, 2023', 0, 0),
(94, 32, '', 'photos/DPwVCShO.jpg', '16 June, 2023', 0, 0),
(95, 32, '\"Celebrating the intricate beauty of the natural world.\"', 'photos/BciLVprd.jpg', '16 June, 2023', 0, 0),
(96, 32, '', 'photos/rEgijtnN.jpg', '16 June, 2023', 0, 0),
(97, 32, '', 'photos/qYRIhlln.jpg', '16 June, 2023', 0, 0),
(98, 32, '', 'photos/dEYOauyk.jpg', '16 June, 2023', 0, 0),
(99, 32, '\"Revealing the raw power and breathtaking elegance of the wild.\"', 'photos/VpZmBHYj.jpg', '16 June, 2023', 0, 0),
(100, 32, '', 'photos/uXErmqAx.jpg', '16 June, 2023', 0, 0),
(101, 32, '\"A window into the soul of nature, through the eyes of my camera.\"', 'photos/tXJEmMQR.jpg', '16 June, 2023', 0, 0),
(102, 32, '', 'photos/lrRQGyxP.jpg', '16 June, 2023', 0, 0),
(103, 32, '\"Nature\'s masterpieces, frozen in time through my lens.\"', 'photos/mFvGyHFW.jpg', '16 June, 2023', 0, 0),
(104, 33, '\"Discovering the extraordinary in nature\'s ordinary moments.\"', 'photos/QvTgpDTI.jpg', '16 June, 2023', 0, 0),
(105, 33, '', 'photos/YUiyGAPh.jpg', '16 June, 2023', 0, 0),
(106, 33, '\"Capturing the essence of tranquility in nature\'s embrace.\"', 'photos/BSTMXNPI.jpg', '16 June, 2023', 0, 0),
(107, 33, '', 'photos/btGwwJGW.jpg', '16 June, 2023', 0, 0),
(108, 33, '\"Unveiling the intricate details that make nature a work of art.\"', 'photos/MGEtwhWX.jpg', '16 June, 2023', 0, 0),
(109, 33, '', 'photos/KghzwDwo.jpg', '16 June, 2023', 0, 0),
(110, 33, '\"Every frame holds a story of nature\'s resilience and beauty.\"', 'photos/fJDctVUT.jpg', '16 June, 2023', 0, 0),
(111, 33, '', 'photos/qXUVINCh.jpg', '16 June, 2023', 0, 0),
(112, 33, '\"Reflecting on the power and serenity found in nature\'s reflection.\"', 'photos/GqcoegbK.jpg', '16 June, 2023', 0, 0),
(113, 33, '', 'photos/kEIWSsUb.jpg', '16 June, 2023', 0, 0),
(114, 33, '', 'photos/aKFyQXXE.jpg', '16 June, 2023', 0, 0),
(115, 33, '\"In the realm of nature, I find my truest sense of belonging.\"', 'photos/jRSzrCfD.jpg', '16 June, 2023', 0, 0),
(116, 33, '', 'photos/sfsAoZki.jpg', '16 June, 2023', 0, 0),
(117, 33, '', 'photos/XRckqSCi.jpg', '16 June, 2023', 0, 0),
(118, 33, '\"Embracing the rhythm of nature\'s heartbeat in every photograph.\"', 'photos/JmHkqzmC.jpg', '16 June, 2023', 0, 0),
(119, 33, '\"Witnessing the seasons change, painting nature\'s canvas anew.\"', 'photos/xxKLKbJS.jpg', '16 June, 2023', 0, 0),
(120, 33, '\"From the grand landscapes to the tiniest details, nature never ceases to amaze.\"', 'photos/GNKljvPL.jpg', '16 June, 2023', 0, 0),
(121, 33, '\"Photographing the moments when nature whispers its secrets.\"', 'photos/VwXFjGvZ.jpg', '16 June, 2023', 0, 0),
(122, 33, '', 'photos/FjtvSNww.jpg', '16 June, 2023', 0, 0),
(123, 33, '\"Nature\'s kaleidoscope of colors, captured in all its splendor.\"', 'photos/sOZKNcFx.jpg', '16 June, 2023', 0, 0),
(124, 34, '', 'photos/TYfhGVXx.jpg', '16 June, 2023', 0, 0),
(125, 34, '\"Unearthing the hidden gems that lie off the beaten path.\"', 'photos/EzYUotiu.jpg', '16 June, 2023', 0, 0),
(126, 34, '', 'photos/OfPkhBtJ.jpg', '16 June, 2023', 0, 0),
(127, 34, '\"Communing with nature\'s wild spirit through my camera lens.\"', 'photos/ktwALljN.jpg', '16 June, 2023', 0, 0),
(128, 34, '\"Seeking stillness amidst the chaos of the natural world.\"', 'photos/TpkQQPWh.jpg', '16 June, 2023', 0, 0),
(129, 34, '', 'photos/mZMksRaU.jpg', '16 June, 2023', 0, 0),
(130, 34, '', 'photos/KmwrghCA.jpg', '16 June, 2023', 0, 0),
(131, 34, '', 'photos/rZHcsahg.jpg', '16 June, 2023', 0, 0),
(132, 34, '', 'photos/EZuqBjaA.jpg', '16 June, 2023', 0, 0),
(133, 34, '\"Revealing the interconnectedness that binds all living things in nature\'s web.\"', 'photos/tFyKyQMN.jpg', '16 June, 2023', 0, 0),
(134, 34, '', 'photos/SuaFqmWf.jpg', '16 June, 2023', 0, 0),
(135, 34, '', 'photos/sgogFMEX.jpg', '16 June, 2023', 0, 0),
(136, 34, '\"Nature\'s symphony of sights and sounds, captured in a single frame.\"', 'photos/weeqKqOx.jpg', '16 June, 2023', 0, 0),
(137, 34, '\"Discovering hidden treasures in the wilderness.\"', 'photos/yVCuybFS.jpg', '16 June, 2023', 0, 0),
(138, 34, '\"Embarking on a visual journey through nature\'s breathtaking landscapes.\" \"Witnessing the ever-chang', 'photos/sTLGVLHC.jpg', '16 June, 2023', 0, 0),
(139, 34, '', 'photos/EUZhhEoi.jpg', '16 June, 2023', 0, 0),
(140, 34, '\"Reveling in the silence of nature\'s sanctuary.\"', 'photos/eRZIdngX.jpg', '16 June, 2023', 0, 0),
(141, 34, '', 'photos/nbYIRLCN.jpg', '16 June, 2023', 0, 0),
(142, 34, '\"Discovering the harmony between light and nature\'s elements.\"', 'photos/SrhwmvbU.jpg', '16 June, 2023', 0, 0),
(143, 34, '', 'photos/tnUWcUJK.jpg', '16 June, 2023', 0, 0),
(144, 34, '', 'photos/fChpYXDq.jpg', '16 June, 2023', 0, 0),
(145, 34, '\"Preserving moments of natural splendor, one click at a time.\"', 'photos/bbTUXMxu.jpg', '16 June, 2023', 0, 0),
(146, 34, '', 'photos/bnqFPazI.jpg', '16 June, 2023', 0, 0),
(147, 34, '\"Capturing the raw and untamed beauty that nature so graciously offers.\"', 'photos/LUeQNXMv.jpg', '16 June, 2023', 0, 0),
(148, 34, '', 'photos/UrXuUTab.jpg', '16 June, 2023', 0, 0),
(149, 35, '\"Nature\'s perfection revealed through the lens of my camera.\"', 'photos/PVIriLEa.jpg', '16 June, 2023', 0, 0),
(150, 35, '', 'photos/QrhqxbKf.jpg', '16 June, 2023', 0, 0),
(151, 35, '\"Exploring nature\'s playground, where adventure knows no bounds.\"', 'photos/ApNIcUxk.jpg', '16 June, 2023', 0, 0),
(152, 35, '', 'photos/yivavSkG.jpg', '16 June, 2023', 0, 0),
(153, 35, '', 'photos/osLpMOYr.jpg', '16 June, 2023', 0, 0),
(154, 35, '', 'photos/zgYcaaCz.jpg', '16 June, 2023', 0, 0),
(155, 35, '', 'photos/RwRavfaZ.jpg', '16 June, 2023', 0, 0),
(156, 35, 'Exploring nature\'s playground, where adventure knows no bounds.\"', 'photos/ODWmGHVw.jpg', '16 June, 2023', 0, 0),
(157, 35, '', 'photos/LUeNjFsT.jpg', '16 June, 2023', 0, 0),
(158, 35, '\"Immersing myself in nature\'s poetry, each photograph a verse.\"', 'photos/zqZDZspa.jpg', '16 June, 2023', 0, 0),
(159, 35, '\"Immersing myself in nature\'s poetry, each photograph a verse.\"', 'photos/piJNOdst.jpg', '16 June, 2023', 0, 0),
(160, 35, '', 'photos/QRvOAsgY.jpg', '16 June, 2023', 0, 0),
(161, 35, '\"Photographing the delicate balance between chaos and serenity in nature.\"', 'photos/xPnkdFzd.jpg', '16 June, 2023', 0, 0),
(162, 35, '', 'photos/IdfYpkjY.jpg', '16 June, 2023', 0, 0),
(163, 35, '', 'photos/ECsGGsTG.jpg', '16 June, 2023', 0, 0),
(164, 35, '', 'photos/AGOlHodQ.jpg', '16 June, 2023', 0, 0),
(165, 35, '', 'photos/UUuAOjfj.jpg', '16 June, 2023', 0, 0),
(166, 35, '', 'photos/gItDAmiS.jpg', '16 June, 2023', 0, 0),
(167, 35, 'Unveiling the hidden gems that lie beneath nature\'s canopy.\"', 'photos/pbBiitOV.jpg', '16 June, 2023', 0, 0),
(168, 35, '', 'photos/pNRCJiuA.jpg', '16 June, 2023', 0, 0),
(169, 35, '', 'photos/iaNKquQC.jpg', '16 June, 2023', 0, 0),
(170, 35, '\"Seeking the extraordinary in the simplicity of nature\'s patterns.\"', 'photos/jspZFsZF.jpg', '16 June, 2023', 0, 0),
(171, 35, '', 'photos/JVAttXlo.jpg', '16 June, 2023', 0, 0),
(172, 35, '', 'photos/pHcmpCDX.jpg', '16 June, 2023', 0, 0),
(173, 35, '\"Nature\'s beauty is a reminder of the miracles that surround us.\"', 'photos/SQeEZAbY.jpg', '16 June, 2023', 0, 0),
(174, 35, '', 'photos/AUGJBPoz.jpg', '16 June, 2023', 0, 0),
(175, 35, '\"Capturing the magic of nature, where dreams and reality intertwine.\"', 'photos/MtoRLniN.jpg', '16 June, 2023', 0, 0),
(176, 35, '\"Step into the realm of nature\'s wonder, where time slows down and the ordinary transforms into the ', 'photos/IDVOiafF.jpg', '16 June, 2023', 0, 0),
(177, 35, '\"Where the wild meets serenity.\"\'', 'photos/SNwDsDon.jpg', '16 June, 2023', 0, 0),
(178, 35, '\"Nature\'s artistry captured.\"', 'photos/TTTaxGrX.jpg', '16 June, 2023', 0, 0),
(179, 36, '\"Beauty found in every leaf and petal.\"', 'photos/ytbLWPLb.jpg', '16 June, 2023', 0, 0),
(180, 36, '\"Discover the magic of the natural world.\"', 'photos/YibDSYrf.jpg', '16 June, 2023', 0, 0),
(181, 36, '', 'photos/EQybRrvr.jpg', '16 June, 2023', 0, 0),
(182, 36, '', 'photos/iBMkISxN.jpg', '16 June, 2023', 0, 0),
(183, 36, '\"Nature\'s symphony in every frame.\"', 'photos/XcHHeQrQ.jpg', '16 June, 2023', 0, 0),
(184, 36, '', 'photos/hDKugDno.jpg', '16 June, 2023', 0, 0),
(185, 36, '\"Embracing the wonders of the great outdoors.\"', 'photos/wUUvqCTq.jpg', '16 June, 2023', 0, 0),
(186, 36, '', 'photos/lQgjwtIN.jpg', '16 June, 2023', 0, 0),
(187, 36, '', 'photos/oUjjqTDF.jpg', '16 June, 2023', 0, 0),
(188, 36, '\"Seeking beauty in the simplest of things.\"', 'photos/KuOyGVRJ.jpg', '16 June, 2023', 0, 0),
(189, 36, '', 'photos/TSizvKvi.jpg', '16 June, 2023', 0, 0),
(190, 36, '', 'photos/QEyzNRos.jpg', '16 June, 2023', 0, 0),
(191, 36, '', 'photos/KUSpuzEY.jpg', '16 June, 2023', 0, 0),
(192, 36, '\"Preserving nature\'s moments of awe.\"', 'photos/ONnuJXGb.jpg', '16 June, 2023', 0, 0),
(193, 36, '', 'photos/FewExQJa.jpg', '16 June, 2023', 0, 0),
(194, 36, '', 'photos/yagTNdFM.jpg', '16 June, 2023', 0, 0),
(195, 36, '', 'photos/ckFkXmxX.jpg', '16 June, 2023', 0, 0),
(196, 36, '', 'photos/gtJHRwMZ.jpg', '16 June, 2023', 0, 0),
(197, 36, '', 'photos/AFiAvBMc.jpg', '16 June, 2023', 0, 0),
(198, 36, '\"Nature\'s tranquility, frozen in time.\"', 'photos/GvnVnYJe.jpg', '16 June, 2023', 0, 0),
(199, 36, '', 'photos/tyMkvdGI.jpg', '16 June, 2023', 0, 0),
(200, 36, '\"Lost in the beauty of nature\'s embrace.\"', 'photos/owUtZRpy.jpg', '16 June, 2023', 0, 0),
(201, 36, '', 'photos/UmOOgjLk.jpg', '16 June, 2023', 0, 0),
(202, 36, '\"Nature\'s secrets revealed through my lens.\"', 'photos/KgoUuNKz.jpg', '16 June, 2023', 0, 0),
(203, 36, '\"In the stillness of nature, find your inner peace.\"', 'photos/uzkoXICh.jpg', '16 June, 2023', 0, 0),
(204, 36, '\"A visual symphony composed by the elements of nature.\"', 'photos/XtfIlbeA.jpg', '16 June, 2023', 0, 0),
(205, 36, '', 'photos/rBJOmloB.jpg', '16 June, 2023', 0, 0),
(206, 36, '', 'photos/WUBBBFmg.jpg', '16 June, 2023', 0, 0),
(207, 36, '', 'photos/tAMKUQWk.jpg', '16 June, 2023', 0, 0),
(208, 36, '\"Witnessing the extraordinary in the ordinary moments of nature.\"', 'photos/NohmpaxW.jpg', '16 June, 2023', 0, 0),
(209, 36, '', 'photos/JGZeMmRj.jpg', '16 June, 2023', 0, 0),
(210, 36, '\"The beauty of nature is a gentle reminder of life\'s miracles.\"', 'photos/SlqQeKbf.jpg', '16 June, 2023', 0, 0),
(211, 36, '', 'photos/bMPymcNL.jpg', '16 June, 2023', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `date_of_birth`, `address`, `mobile_number`, `email`, `passwords`, `profile_picture`) VALUES
(29, 'bangla', 'desh', '2023-06-05', 'asdfsaf', 2147483647, 'bangla@gmail.com', 'bangla@gmail.com', 'profile/photo_2022-08-30_08-16-49.jpg'),
(31, 'Md', 'Razib', '2023-06-16', 'Purbofarakpur, Bheramara, Kushtia', 1644556056, 'razib15-3637@diu.edu.bd', 'razib15-3637', 'profile/photo_2022-08-30_08-16-49.jpg'),
(32, 'Michael T.', 'Knapp', '2001-02-06', '1550 Snyder Avenue Matthews, NC 28105', 1544464856, 'shahadot23-945@diu.edu.bd', 'shahadot23-945', 'profile/1111.jpeg'),
(33, 'RAKIBUL ', 'ISLAM', '2014-03-11', '1712 Harron Drive Baltimore, MD 21201', 1879845649, 'rakib15-3461@edu.bd.diu', 'rakib15-3461@edu.bd.diu', 'profile/photo_2023-05-03_18-19-09.jpg'),
(34, 'Meherin', 'Nisha', '1999-12-05', 'Jamalpur Dhaka Bangladesh', 1874564684, 'nur15-3529@diu.edu.bd', 'nur15-3529', 'profile/IMG_20230606_220838_438.jpg'),
(35, 'Tithe', 'Akther', '1995-02-15', 'Gajipur Dhaka Bangladesh', 1189654465, 'tithie15-3259@diu.edu.bd', 'tithie15-3259', 'profile/photo_2023-03-16_21-22-45.jpg'),
(36, 'Umme Ammara', 'Juthi', '2001-06-05', 'Dhaka', 1586865554, 'juthi123@gmail.com', 'juthi123', 'profile/photo_2023-06-16_16-47-39 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `user_id`, `post_id`, `rate`) VALUES
(43, 31, 79, 1),
(44, 31, 78, 1),
(45, 31, 77, 1),
(46, 31, 73, 1),
(47, 31, 75, 1),
(48, 31, 67, 1),
(49, 31, 66, 1),
(50, 31, 76, 1),
(51, 31, 69, 1),
(52, 31, 70, 1),
(53, 31, 68, 1),
(54, 31, 80, 1),
(55, 31, 81, 1),
(56, 31, 74, 1),
(57, 31, 84, 1),
(58, 31, 85, 1),
(59, 31, 86, 1),
(60, 31, 83, 1),
(61, 31, 82, 1),
(63, 32, 95, 1),
(64, 32, 68, 1),
(65, 32, 97, 1),
(66, 32, 83, 1),
(67, 32, 82, 1),
(68, 32, 72, 1),
(69, 32, 66, 1),
(70, 33, 120, 1),
(71, 33, 119, 0),
(72, 33, 92, 1),
(73, 33, 103, 0),
(74, 33, 101, 1),
(75, 33, 78, 1),
(76, 33, 72, 0),
(77, 33, 70, 1),
(78, 33, 113, 1),
(79, 33, 81, 1),
(80, 33, 86, 1),
(81, 33, 80, 1),
(82, 33, 108, 1),
(83, 33, 97, 1),
(84, 33, 102, 1),
(85, 33, 82, 1),
(86, 33, 104, 1),
(87, 33, 111, 1),
(88, 33, 84, 1),
(89, 33, 85, 1),
(90, 33, 94, 1),
(91, 33, 99, 1),
(92, 33, 66, 1),
(93, 33, 105, 1),
(94, 33, 96, 1),
(95, 33, 109, 1),
(96, 34, 110, 1),
(97, 34, 80, 0),
(98, 34, 131, 1),
(99, 34, 96, 0),
(100, 34, 72, 1),
(101, 34, 138, 1),
(102, 34, 98, 1),
(103, 34, 67, 1),
(104, 34, 115, 1),
(105, 34, 139, 1),
(106, 34, 146, 1),
(107, 34, 83, 1),
(108, 34, 90, 1),
(109, 34, 88, 1),
(110, 34, 147, 1),
(111, 34, 124, 1),
(112, 34, 122, 1),
(113, 34, 119, 1),
(114, 34, 117, 1),
(115, 34, 104, 1),
(116, 34, 103, 1),
(117, 34, 125, 1),
(118, 34, 99, 1),
(119, 34, 123, 0),
(120, 34, 77, 1),
(121, 34, 78, 1),
(122, 34, 135, 1),
(123, 34, 140, 1),
(124, 34, 141, 1),
(125, 34, 101, 0),
(126, 34, 89, 1),
(127, 34, 129, 1),
(128, 34, 85, 1),
(129, 34, 109, 1),
(130, 34, 148, 1),
(131, 34, 66, 1),
(132, 34, 144, 1),
(133, 34, 142, 1),
(134, 35, 161, 1),
(135, 35, 81, 0),
(136, 35, 127, 0),
(137, 35, 101, 0),
(138, 35, 96, 0),
(139, 35, 170, 1),
(140, 35, 165, 1),
(141, 35, 132, 1),
(142, 35, 69, 0),
(143, 35, 79, 0),
(144, 35, 173, 1),
(145, 35, 136, 1),
(146, 35, 177, 1),
(147, 35, 158, 0),
(148, 35, 118, 1),
(149, 35, 66, 1),
(150, 35, 111, 1),
(151, 35, 146, 1),
(152, 35, 68, 0),
(153, 35, 120, 1),
(154, 35, 163, 0),
(155, 35, 72, 0),
(156, 35, 87, 0),
(157, 35, 147, 1),
(158, 35, 67, 1),
(159, 35, 89, 1),
(160, 35, 83, 1),
(161, 35, 159, 1),
(162, 35, 82, 0),
(163, 35, 77, 0),
(164, 35, 166, 0),
(165, 35, 107, 1),
(166, 35, 143, 1),
(167, 35, 90, 1),
(168, 35, 160, 0),
(169, 35, 168, 1),
(170, 35, 123, 1),
(171, 35, 92, 1),
(172, 35, 76, 1),
(173, 35, 121, 1),
(174, 35, 134, 1),
(175, 35, 152, 1),
(176, 35, 73, 1),
(177, 36, 132, 1),
(178, 36, 96, 1),
(179, 36, 185, 1),
(180, 36, 157, 1),
(181, 36, 207, 1),
(182, 36, 190, 0),
(183, 36, 195, 1),
(184, 36, 106, 1),
(185, 36, 79, 1),
(186, 36, 192, 0),
(187, 36, 164, 1),
(188, 36, 209, 1),
(189, 36, 80, 1),
(190, 36, 111, 1),
(191, 36, 193, 1),
(192, 36, 77, 1),
(193, 36, 197, 0),
(194, 36, 91, 1),
(195, 36, 70, 1),
(196, 36, 136, 1),
(197, 36, 123, 0),
(198, 36, 103, 0),
(199, 36, 69, 1),
(200, 36, 102, 1),
(201, 36, 76, 1),
(202, 36, 166, 0),
(203, 36, 95, 1),
(204, 36, 187, 1),
(205, 36, 101, 0),
(206, 36, 135, 1),
(207, 36, 113, 0),
(208, 36, 161, 1),
(209, 36, 186, 1),
(210, 36, 210, 0),
(211, 36, 143, 1),
(212, 36, 155, 0),
(213, 36, 133, 1),
(214, 36, 114, 1),
(215, 36, 130, 1),
(216, 36, 97, 1),
(217, 36, 90, 0),
(218, 36, 122, 1),
(219, 36, 163, 0),
(220, 36, 73, 1),
(221, 36, 100, 1),
(222, 36, 115, 1),
(223, 36, 152, 1),
(224, 36, 189, 1),
(225, 36, 171, 1),
(226, 36, 66, 0),
(227, 36, 139, 1),
(228, 36, 162, 1),
(229, 36, 211, 1),
(230, 36, 120, 1),
(231, 36, 109, 1),
(232, 36, 82, 1),
(233, 36, 84, 1),
(234, 36, 140, 1),
(235, 36, 204, 1),
(236, 36, 108, 1),
(237, 36, 88, 1),
(238, 36, 154, 0),
(239, 36, 134, 1),
(240, 36, 196, 1),
(241, 36, 188, 1),
(242, 36, 94, 1),
(243, 36, 125, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Test` FOREIGN KEY (`user_id`) REFERENCES `profiles` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `posts` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
