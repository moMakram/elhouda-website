-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2014 at 02:27 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeraa`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) NOT NULL,
  `addresse` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `phone`, `addresse`) VALUES
(3, '01002033', 'دمنهور اخر طريق المحافظه');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1400) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `addr` varchar(1200) NOT NULL,
  `query` mediumtext NOT NULL,
  `ans` mediumtext NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `permis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `addr`, `query`, `ans`, `date`, `time`, `permis`) VALUES
(10, 'hffg', 'hhhhh', 'jjjjj', 'bbbbb', 'nnnnn', '2013-10-20', '01:22:49', 1),
(11, 'hgfg', 'hjjjjj', 'yyyyy', 'yyyyy', '', '2013-10-20', '03 :24:12', 1),
(12, 'hhhh', 'hhhh', 'hhhh', 'hhhhhhhh', '', '2013-10-20', '03 :26:20', 0),
(13, 'hhhh', 'hhhh', 'hhhh', 'hhhhhhhh', '', '2013-10-20', '03 :27:32', 0),
(14, 'ggggg', 'ffff', 'fff', 'fffffffff', '', '2013-10-20', '03 :27:46', 0),
(15, 'hhhhhhhhh', 'hhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', '', '2013-10-20', '03 :28:32', 0),
(16, 'hhhhhhhhh', 'hhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', '', '2013-10-20', '03 :29:22', 0),
(17, 'bbbbbb', 'bbbbbbbbb', 'gggggg', 'fgggg', '', '2013-10-20', '03 :29:35', 0),
(18, 'bbbbbbbbbbb', 'bbbb', 'bbb', 'gdfg', '', '2013-10-20', '03 :30', 0),
(19, 'hhhhhhhhh', 'hhhhhhhhhhhhhhh', 'hhhhhh', 'hhhhhhhhh', '', '2013-10-20', '08 :32', 0),
(20, 'ghhhhhhhhh', 'gggg', 'gggg', 'hhhhg', '', '2013-10-20', '08 :32', 0),
(21, 'ttttttttttttttttg', 'ggg', 'ffff', 'fgggggggg', '', '2013-10-20', '08 :0', 0),
(22, 'ttttttttttttttttg', 'ggg', 'ffff', 'fgggggggg', '', '2013-10-20', '08 :33', 0),
(23, 'gggggggg', 'ggggggggg', 'gggggg', 'gggggggggg', '', '2013-10-20', '08 :35', 0),
(25, 'gggggggg', 'ggggggggg', 'ggggggg', 'ggggggggg', '', '2013-10-20', '07 :36', 0),
(26, 'gggggggg', 'ggggggggg', 'ggggggg', 'ggggggggg', '', '2013-10-20', '07 :36', 0),
(27, 'gggggggg', 'gggg', 'ggg', 'ggggggg', '', '2013-10-20', '07 :37', 0),
(28, 'gggggggg', 'gggg', 'ggg', 'ggggggg', '', '2013-10-20', '07 :10:08', 0),
(29, 'ggggggggggg', 'ffffff', 'fffffffffff', 'fffffffffffff', '', '2013-10-20', '07 :10:22', 0),
(30, 'ggggggg', 'ffffffffff', 'gggggggggf', 'fffffffffffffff', '', '2013-10-20', '07 :10:38', 0),
(31, 'محمد جمال', 'm.makram39@yahoo.com', 'دمنهور', 'هل انت بخير يا مان', 'نعم انا باحسن حال', '2013-10-21', '22 :10', 1),
(32, 'ggg', 'gggggg', 'gggggggggggg', 'ffffffffffffffffffffffffff', '', '2013-10-22', '10 :10', 0),
(33, 'hhhhhhhh', 'ggggggg', 'hhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhh', '', '2013-10-26', '20 :10', 0),
(34, 'ffffff', 'fffffff', 'ddddddd', 'dddddddddddddddddd', '', '2013-10-26', '20 :10', 0),
(35, 'ggggggg', 'ffffffffff', 'fffffff', 'dddddddd', '', '2013-10-26', '20 :10', 0),
(36, 'ggggggg', 'ffffd', 'ddddddd', 'ffffffffff', '', '2013-10-26', '20 :10', 0),
(37, 'hhhhhhhh', 'gggggg', 'gggggg', 'ffffffffffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(38, 'gggggggg', 'fffff', 'ffffffffff', 'ggggggggggggggg', '', '2013-10-26', '20 :10', 0),
(39, 'gggggggggggggg', 'ffffffff', 'ddddd', 'fffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(40, 'ggggggggggg', 'fffff', 'dddddf', 'ffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(41, 'ggggggggggg', 'fffff', 'dddddf', 'ffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(42, 'bbbb', 'gggg', 'vvv', 'bbbbbbbb', '', '2013-10-26', '20 :10', 0),
(43, 'bbbb', 'gggg', 'vvv', 'bbbbbbbb', '', '2013-10-26', '20 :10', 0),
(44, 'yyyyyyyyyy', 'ttttt', 'tttt', 'tttttttttttt', '', '2013-10-26', '20 :10', 0),
(45, 'gggg', 'gggg', 'gggg', 'ggggggggggg', '', '2013-10-29', '11 :10', 0),
(46, 'iiiiiiiii', 'jjjjjjjjjj', 'lllllllllll', 'ttttttttttttttt', '', '2013-11-13', '11 :11', 0),
(47, 'fffff', 'fffffff', 'dddd', 'dddddddd', '', '2013-11-23', '22 :11', 0),
(48, 'dddddd', 'ddddd', 'ddddd', 'dddddddd', '', '2013-11-23', '22 :11', 0),
(49, 'ffff', 'ffffff', 'dddddd', 'dddddddddd', '', '2013-11-23', '22 :11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branche` varchar(50) NOT NULL,
  `contac` varchar(50) NOT NULL,
  `egymat` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `imge` varchar(50) NOT NULL,
  `maine` varchar(30) NOT NULL,
  `reade` varchar(50) NOT NULL,
  `regist` varchar(50) NOT NULL,
  `branchtit` varchar(50) NOT NULL,
  `contactit` varchar(50) NOT NULL,
  `ema` varchar(50) NOT NULL,
  `subj` varchar(50) NOT NULL,
  `egymattit` varchar(50) NOT NULL,
  `projecttit` varchar(50) NOT NULL,
  `servicetit` varchar(50) NOT NULL,
  `producttit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `branche`, `contac`, `egymat`, `project`, `service`, `product`, `name`, `imge`, `maine`, `reade`, `regist`, `branchtit`, `contactit`, `ema`, `subj`, `egymattit`, `projecttit`, `servicetit`, `producttit`) VALUES
(5, ' فروعنا', ' تواصل معنا', ' المواد المصرية', ' مشاريع', ' خدماتنا', ' منتجاتنا', 'arabic', 'photo/egypt.png', ' الرئيسية', ' اقرأ اكثر', ' التسجيل', '', '', '', '', '', '', '', ''),
(6, 'BRANCHES', 'CONTACT US', 'EGY-MATERIAL', 'PROJECTS', 'SERVICES', 'PRODUCTS', 'english', 'photo/america.png', 'HOME', 'read more', 'REGISTERATION', '', '', '', '', '', '', '', ''),
(7, ' makram', ' اسبانى 2', ' اسبانى 2', ' اسبانى 2', ' ', ' اسبانى 2', 'espain', 'photo/espain.png', 'makram', ' اسبانى 2', ' اسبانى 2', '', '', '', '', '', '', '', ''),
(8, 'm2', 'm14', 'm12', 'm9', 'm5', 'm7', 'french', 'photo/download.jpg', 'm1', 'm18', 'm4', 'our branches', 'm15', 'm16', 'm17', 'm13', 'm11', 'm6', 'm8'),
(9, '', '', '', '', '', '', 'bhhj', 'photo/algeria.png', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(3000) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `descr`, `lang`) VALUES
(3, 'Granite /ˈɡrænɨt/ is a common type of  felsic intrusive igneous rock which  is granular and phaneritic in texture.\r\nThe word "granite" comes from the Latin granum,', 'arabic'),
(4, '<p><span style="font-size: large;">نعم نحن هنا ايضا</span></p>', 'arabic'),
(5, '<p><span style="font-size: large;">نعم نحن نستطيع</span></p>', 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `picmat`
--

CREATE TABLE IF NOT EXISTS `picmat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ordere` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `picmat`
--

INSERT INTO `picmat` (`id`, `pic`, `title`, `ordere`, `lang`) VALUES
(4, 'photo/first_type.png', 'الرخام المصرى', 1, 'arabic'),
(5, 'photo/ministery.png', 'الجرانيت المصرى', 2, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` text NOT NULL,
  `name` text NOT NULL,
  `title` varchar(300) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `place`, `name`, `title`, `ordere`) VALUES
(4, 'photo/IMAG0040.jpg', 'IMAG0040.jpg', '100', 1),
(5, 'photo/IMAG0060.jpg', 'IMAG0060.jpg', '100', 2),
(6, 'photo/IMAG0084.jpg', 'IMAG0084.jpg', '100', 3),
(7, 'photo/IMAG0065.jpg', 'IMAG0065.jpg', 'الزراعه', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prev`
--

CREATE TABLE IF NOT EXISTS `prev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1200) NOT NULL,
  `password` text NOT NULL,
  `addpictures` int(11) NOT NULL,
  `updatepictures` int(11) NOT NULL,
  `aboutus` int(11) NOT NULL,
  `addlang` int(11) NOT NULL,
  `addsection` int(11) NOT NULL,
  `updatesection` int(11) NOT NULL,
  `updateabout` int(11) NOT NULL,
  `updatelang` int(11) NOT NULL,
  `addproject` int(11) NOT NULL,
  `updateproject` int(11) NOT NULL,
  `addpropic` int(11) NOT NULL,
  `updatepropic` int(11) NOT NULL,
  `addbranch` int(11) NOT NULL,
  `updatebranch` int(11) NOT NULL,
  `updatereg` int(11) NOT NULL,
  `addegytext` int(11) NOT NULL,
  `updateegytext` int(11) NOT NULL,
  `addmat` int(11) NOT NULL,
  `updatemat` int(11) NOT NULL,
  `addservice` int(11) NOT NULL,
  `updateservice` int(11) NOT NULL,
  `addprotext` int(11) NOT NULL,
  `updateprotext` int(11) NOT NULL,
  `addproduct` int(11) NOT NULL,
  `updateproduct` int(11) NOT NULL,
  `updateque` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prev`
--

INSERT INTO `prev` (`id`, `username`, `password`, `addpictures`, `updatepictures`, `aboutus`, `addlang`, `addsection`, `updatesection`, `updateabout`, `updatelang`, `addproject`, `updateproject`, `addpropic`, `updatepropic`, `addbranch`, `updatebranch`, `updatereg`, `addegytext`, `updateegytext`, `addmat`, `updatemat`, `addservice`, `updateservice`, `addprotext`, `updateprotext`, `addproduct`, `updateproduct`, `updateque`) VALUES
(1, 'makram', '123', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'm', '4', 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prevlang`
--

CREATE TABLE IF NOT EXISTS `prevlang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `idadm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prevlang`
--

INSERT INTO `prevlang` (`id`, `name`, `idadm`) VALUES
(1, 'arabic', 1),
(2, 'arabic', 2),
(3, 'espain', 2),
(4, 'arabic', 3),
(5, 'english', 3),
(6, 'espain', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `pic` varchar(70) NOT NULL,
  `showe` varchar(10) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `pic`, `showe`, `ordere`) VALUES
(2, 'Hhh', 'photo/10464029_1484649748445564_8133712616450925533_n.jpg', 'يظهر', 2),
(3, 'مشكل', 'photo/download.jpg', 'يظهر', 2);

-- --------------------------------------------------------

--
-- Table structure for table `proitem`
--

CREATE TABLE IF NOT EXISTS `proitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `ordere` int(11) NOT NULL,
  `prodname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `proitem`
--

INSERT INTO `proitem` (`id`, `pic`, `descr`, `ordere`, `prodname`) VALUES
(3, 'photo/10464029_1484649748445564_8133712616450925533_n.jpg', 'tgreg', 0, '0'),
(4, 'photo/logo.png', 'thy', 0, '0'),
(5, 'photo/logo.png', 'gdg', 0, '0'),
(18, 'photo/10464029_1484649748445564_8133712616450925533_n.jpg', 'hthh', 1, 'رخام'),
(19, 'photo/download.jpg', 'mmm', 2, 'رخام'),
(20, 'photo/logo.png', 'kjljklj', 5, 'رخام'),
(21, 'photo/logo.png', 'gfhhhh', 1, 'zag'),
(22, 'photo/download.jpg', 'jgfg', 5, 'رخام'),
(23, 'photo/download.jpg', 'jgfg', 5, 'رخام'),
(24, 'photo/3.jpg', '', 0, 'zag'),
(25, '3.jpg', '', 0, ''),
(26, 'photo/k.jpg', '', 0, 'zag'),
(27, 'photo/14408_thumb.png', 'اقوى منتج', 1, 'مشكل');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `descr` varchar(4000) NOT NULL,
  `ordere` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `pic`, `descr`, `ordere`, `lang`) VALUES
(1, 'ghfghfh', 'photo/download.jpg', 'Granite /ˈɡrænɨt/ is a common type of felsic intrusive igneous rock which is granular and phaneritic in texture. The word "granite" comes from the Latin granum, ...\r\n\r\nGranite /ˈɡrænɨt/ is a common type of felsic intrusive igneous rock which is granular and phaneritic in texture. The word "granite" comes from the Latin granum, ...\r\n\r\nGranite /ˈɡrænɨt/ is a common type of felsic intrusive igneous rock which is granular and phaneritic in texture. The word "granite" comes from the Latin granum,', 1, 'arabic'),
(2, 'hjg', 'photo/10464029_1484649748445564_8133712616450925533_n.jpg', 'thwklng nvc  lcbnkd bnklbnkdbg dffgh\r\nhngjn\r\nghjg\r\njng\r\njghj\r\ngj\r\ng\r\nhjjjjjjjjjjjh', 2, 'arabic'),
(10, 'end of', 'photo/download.jpg', '<p>the end</p>', 5, 'arabic'),
(11, 'yes we can', 'photo/download.jpg', '<p><span style="font-size: large;">no way</span></p>', 5, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `protext`
--

CREATE TABLE IF NOT EXISTS `protext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(2000) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `protext`
--

INSERT INTO `protext` (`id`, `descr`, `lang`) VALUES
(1, '<p>yes we can do it&nbsp;</p>\r\n<p>any way</p>\r\n<p>be good</p>', 'arabic'),
(2, '<p>iououoi</p>', 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(130) NOT NULL,
  `que` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `email`, `que`) VALUES
(4, 'mohamedmakram362@yahoo.com', 'gujhgjgh'),
(5, 'mohamedmakram362@yahoo.com', 'jghj'),
(6, 'mohamedmakram842@yahoo.com', 'gjygjg'),
(7, 'mohamedmakram842@yahoo.com', 'gjjgh'),
(8, 'mohamedmakram842@yahoo.comprog2015', 'jhghjjg'),
(10, 'mohamedmakram362@yahoo.com', 'jgjg'),
(11, 'mohamedmakram362@yahoo.com', 'jggjgj'),
(12, 'mohamedmakram842@yahoo.com', 'jjghjg'),
(13, 'mohamedmakram362@yahoo.com', 'ؤلبال'),
(14, 'mohamedmakram842@yahoo.com', 'bghjgj'),
(15, 'mohamedmakram362@yahoo.com', 'ghjghjjg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'mohamed', 'makram', 'mohamedmakram362@yahoo.com', '0', ''),
(4, 'mohamed', 'makram', 'mohamedmakram362@yahoo.com', '0124564', '456');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(50) NOT NULL,
  `descr` varchar(1500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `lang`, `descr`, `title`, `ordere`) VALUES
(1, 'arabic', '<p><span style="font-size: large;">هنا القاهره</span></p>', '   الرخام المشكل', 2),
(2, 'arabic', 'ytutuu', 'hgututyu', 3),
(3, 'arabic', 'tyuutu', 'uytyut', 2),
(4, 'arabic', '', 'the best', 1),
(5, 'arabic', '<p>yes we can do it</p>', 'the best', 1),
(6, 'english', '<p>ghhgcjghjgj</p>', 'sec', 1),
(7, 'arabic', '<p>gfhhjtjg</p>', 'jggj', 2),
(8, 'english', '<p>hgjg</p>', 'jhg', 2),
(9, 'english', '<p>hjkhgk</p>', 'gjg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(3000) NOT NULL,
  `ordere` int(11) NOT NULL,
  `lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `descr`, `ordere`, `lang`) VALUES
(5, '<p>hjhvhgh</p>', 2, 'arabic'),
(6, '<p>hjjjjjhkhj</p>', 5, 'arabic'),
(7, '<p>hjjjjjhkhj</p>', 5, 'arabic'),
(8, '<p>jououiop</p>', 4, 'arabic'),
(9, '<p>ojik;kl;</p>', 4, 'arabic'),
(10, '<p>,klk</p>', 5, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `texteditor`
--

CREATE TABLE IF NOT EXISTS `texteditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `texteditor`
--

INSERT INTO `texteditor` (`id`, `descr`) VALUES
(12, '<p style="text-align: center;"><span style="font-size: x-large;"><em><strong>الشركه تنتج العديد من المنتجات الزراعيه</strong></em></span></p>');
