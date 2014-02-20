-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2014 at 05:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giaingoaihang`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(300) NOT NULL,
  `short_description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) NOT NULL,
  `path` varchar(150) NOT NULL,
  `seo_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo_description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT '0',
  `rate` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `short_description`, `description`, `image`, `path`, `seo_title`, `seo_description`, `active`, `create_date`, `update_date`, `user_id`, `hot`, `rate`) VALUES
(1, 'Ozil – Arsenal: Từ người hùng đến hàng hớ', 'ozil-–-arsenal-tu-nguoi-hung-den-hang-ho', 'Ozil đã từng mang lại những nét tươi mới cho Arsenal hồi đầu mùa, nhưng giờ mọi thứ đang đi theo chiều hướng tiêu cực với các Pháo thủ và đặc biệt là tiền vệ người Đức.', '<p style="text-align:justify"><strong>&ldquo;Bom tấn&rdquo; Ozil</strong></p>\r\n\r\n<p style="text-align:justify">42,5 triệu bảng, Arsenal đ&atilde; phải cắn răng ph&aacute; k&eacute;t để đưa Ozil về Emirates trong những ng&agrave;y cuối c&ugrave;ng của TTCN m&ugrave;a h&egrave; 2013. Đ&acirc;y l&agrave; bản hợp đồng đắt gi&aacute; nhất trong lịch sử The Gunners, bởi BLĐ đội b&oacute;ng cũng như HLV Wenger hiểu rằng, để chấm dứt 8 năm kh&ocirc;ng danh hiệu, họ kh&ocirc;ng c&ograve;n được ph&eacute;p keo kiệt nữa. Những thất bại li&ecirc;n tiếp đ&atilde; khiến Arsenal buộc phải c&oacute; c&aacute;ch nh&igrave;n kh&aacute;c tr&ecirc;n TTCN, một đội b&oacute;ng cần phải c&oacute; những si&ecirc;u sao cỡ bự v&agrave; họ đặt niềm tin v&agrave;o Ozil.</p>\r\n\r\n<p style="text-align:justify">Ozil đ&atilde; khởi đầu tại nước Anh như mơ. Tiền vệ người Đức c&oacute; ngay pha kiến tạo cho Giroud mở tỉ số ở chiến thắng 3-1 trước Suderland trong trận đầu ti&ecirc;n trở th&agrave;nh một Ph&aacute;o thủ. Sự c&oacute; mặt của Ozil tại Emirates đ&atilde; thực sự đem lại một c&uacute; h&iacute;ch cả về mặt tinh thần lẫn chuy&ecirc;n m&ocirc;n cho Arsenal để rồi c&aacute;c học tr&ograve; của Wenger đ&atilde; trở lại vị thế của một ứng vi&ecirc;n s&aacute;ng gi&aacute; cho chức v&ocirc; địch tại giải Ngoại hạng cũng như lọt v&agrave;o v&ograve;ng knock-out tại Champions League ở bảng đấu tử thần.</p>\r\n\r\n<p><img alt="Ozil – Arsenal: Từ người hùng đến hàng hớ - 1" class="news-image" src="http://localhost/giaingoaihang.com/backend/images/content/news-content-719818395.jpg" style="border:0px" /></p>\r\n\r\n<p style="text-align:center">Chơi tốt hồi đầu m&ugrave;a giải, nhưng Ozil đang sa s&uacute;t kh&ocirc;ng phanh</p>\r\n\r\n<p style="text-align:justify"><strong>&ldquo;Bom tấn&rdquo; đang tr&ecirc;n đường trở th&agrave;nh &ldquo;bom xịt&rdquo;</strong></p>\r\n\r\n<p style="text-align:justify">Arsenal vẫn đang chinh chiến tr&ecirc;n cả 3 mặt trận&nbsp;<a href="http://localhost/giaingoaihang.com/backend" style="text-decoration: none; color: rgb(0, 0, 255);">Premier League</a>, Champions League v&agrave; FA Cup, nhưng với phong độ hiện tại của c&aacute;c Ph&aacute;o thủ, kh&ocirc;ng c&oacute; g&igrave; l&agrave; đảm bảo thầy tr&ograve; Wenger sẽ chấm dứt cơn kh&aacute;t danh hiệu. Chiến thắng 2-1 c&oacute; phần may mắn trước Liverpool cuối tuần qua tại FA Cup kh&ocirc;ng thể khỏa lấp một thực tế rằng, Arsenal vẫn c&ograve;n c&aacute;ch những &ldquo;chiếc c&uacute;p&rdquo; một khoảng c&aacute;ch kh&aacute; xa, trong đ&oacute; phong độ của ng&ocirc;i sao Ozil l&agrave; một phần nguy&ecirc;n nh&acirc;n.</p>\r\n\r\n<p style="text-align:justify">Mới nhất, Ozil đ&atilde; đ&aacute; hỏng quả penalty trong trận thua 0-2 trước Bayern rạng s&aacute;ng nay ở lượt đi v&ograve;ng 1/8 Cup C1 v&agrave; sau đ&oacute; anh gần như mất h&uacute;t v&igrave; bị ảnh hưởng t&acirc;m l&yacute; nặng nề. Nếu đ&oacute; l&agrave; b&agrave;n thắng mở tỉ số, rất c&oacute; thể kết quả trận đấu sẽ đi theo chiều hướng kh&aacute;c bởi Arsenal đ&atilde; khởi đầu trước đối thủ được đ&aacute;nh gi&aacute; l&agrave; mạnh hơn kh&ocirc;ng hề tồi ch&uacute;t n&agrave;o. Trong b&oacute;ng đ&aacute; kh&ocirc;ng c&oacute; chỗ cho từ &ldquo;nếu&rdquo;, nhưng r&otilde; r&agrave;ng Ozil đ&atilde; g&acirc;y thất vọng d&ugrave; l&agrave; ng&ocirc;i sao nhận được rất nhiều sự tr&ocirc;ng chờ của NHM Ph&aacute;o thủ.</p>\r\n\r\n<p style="text-align:justify">Nhưng sự sa s&uacute;t của Ozil kh&ocirc;ng phải chỉ ở trận đấu gặp Bayern. Trong suốt hơn 2 th&aacute;ng qua ng&ocirc;i sao người Đức đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; ch&iacute;nh m&igrave;nh. Đ&atilde; 13 trận li&ecirc;n tiếp Ozil kh&ocirc;ng thể ghi b&agrave;n v&agrave; anh cũng chỉ c&oacute; vỏn vẹn 3 đường kiến tạo trong 15 trận gần nhất, những con số thống k&ecirc; qu&aacute; thất vọng với một bản hợp đồng bom tấn.</p>\r\n\r\n<p><img alt="Ozil – Arsenal: Từ người hùng đến hàng hớ - 2" class="news-image" src="http://localhost/giaingoaihang.com/backend/images/content/news-content-165039896.jpg" style="border:0px" /></p>\r\n\r\n<p style="text-align:center">Ozil đ&atilde; đ&aacute; trượt 2 quả penalty của Arsenal từ đầu m&ugrave;a</p>\r\n\r\n<p style="text-align:justify">Kh&ocirc;ng những thế, Ozil c&ograve;n g&acirc;y thất vọng ở những trận cầu đinh. Arsenal đ&atilde; thua 0-1 trước MU, 3-6 trước Man City hay 1-5 trước Liverpool v&agrave; mới nhất l&agrave; 0-2 trước Bayern, đ&oacute; đều l&agrave; những trận đấu ng&ocirc;i sao người Đức mất h&uacute;t tr&ecirc;n s&acirc;n trong sự k&igrave; vọng lớn lao của HLV, đồng đội cũng như NHM. Một ng&ocirc;i sao cỡ bự được đưa về phải tỏa s&aacute;ng ở những trận đấu lớn để gi&uacute;p đội b&oacute;ng tiến s&aacute;t tới những danh hiệu, nhưng Ozil đ&atilde; kh&ocirc;ng đ&aacute;p ứng được sự k&igrave; vọng.</p>\r\n\r\n<p style="text-align:justify">Những lời chỉ tr&iacute;ch nhằm v&agrave;o&nbsp;<u>Ozil</u>&nbsp;đ&atilde; ng&agrave;y một d&agrave;y l&ecirc;n v&agrave; đương nhi&ecirc;n sức &eacute;p ng&agrave;y một nhiều. Đ&oacute; c&oacute; thể l&agrave; con dao hai lưỡi, tiền vệ người Đức c&oacute; thể sẽ c&oacute; th&ecirc;m động lực để gi&uacute;p Arsenal vượt qua những ng&agrave;y th&aacute;ng gian kh&oacute; để chứng tỏ bản lĩnh của một ng&ocirc;i sao h&agrave;ng đầu thế giới, nhưng cũng c&oacute; thể sẽ khiến anh &ldquo;chết ch&igrave;m&rdquo; trong sự k&igrave; vọng. Ranh giới giữa &ldquo;bom tấn&rdquo; v&agrave; &ldquo;bom xịt&rdquo; tưởng như 2 đường thẳng song song giờ đ&atilde; tiệm cận v&agrave; c&oacute; thể cắt nhau l&uacute;c n&agrave;o kh&ocirc;ng biết, hệt như c&aacute;ch Ozil tự kiếm được quả phạt đền ở trận gặp Bayern nhưng cũng ch&iacute;nh anh đ&aacute; hỏng n&oacute; với c&uacute; s&uacute;t thiếu quyết đo&aacute;n. Kh&ocirc;ng ai c&oacute; thể gi&uacute;p Ozil v&agrave; chỉ c&oacute; anh mới c&oacute; thể tự cứu lấy m&igrave;nh nếu như kh&ocirc;ng muốn chết ch&igrave;m tại Emirates.</p>\r\n', '1392911313-Mourinho pre Hull LV.jpg', '../images/articles/2014-02-20/', 'Ozil – Arsenal: Từ người hùng đến hàng hớ', 'Ozil – Arsenal: Từ người hùng đến hàng hớ', 2, '2014-02-20 22:23:36', '2014-02-20 22:48:33', 17, 0, 0),
(2, 'Messi: Kẻ chinh phục vĩ đại', 'messi-ke-chinh-phuc-vi-dai', 'Là chân sút số 2 trong lịch sử Champions League, từng ghi bàn ở 14 quốc gia và 21 sân bóng khác nhau, Messi thực sự là kẻ chinh phục vĩ đại.', '<p style="text-align:justify">Với 4 lần đoạt QBV li&ecirc;n tiếp từ 2009 đến 2012 c&ugrave;ng v&ocirc; số những kỉ lục v&ocirc; tiền kho&aacute;ng hậu, d&ugrave; c&ograve;n rất trẻ nhưng&nbsp;<strong>Messi</strong>&nbsp;đ&atilde; được khắc t&ecirc;n trong ng&ocirc;i đền những huyền thoại vĩ đại nhất trong lịch sử m&ocirc;n thể thao Vua. Sẽ c&oacute; &yacute; kiến cho rằng Messi chưa đạt đến tầm của Pele hay Maradona bởi anh chưa gi&agrave;nh chức v&ocirc; địch World Cup, nhưng nếu lấy thước đo<a href="http://localhost/giaingoaihang.com/backend" style="text-decoration: none; color: rgb(0, 0, 255);">Champions League</a>&nbsp;l&agrave;m chuẩn mực, c&oacute; lẽ kh&ocirc;ng một cầu thủ n&agrave;o c&oacute; thể so b&igrave; với si&ecirc;u sao người Argentina.</p>\r\n\r\n<p style="text-align:justify">Với 3 chức v&ocirc; địch Champions League, 4 lần đoạt danh hiệu Vua ph&aacute; lưới li&ecirc;n tiếp (từ 2009 đến 2012), c&ugrave;ng 6 lần li&ecirc;n tiếp gi&uacute;p Barca lọt v&agrave;o b&aacute;n kết giải đấu danh gi&aacute; nhất ch&acirc;u &Acirc;u, Messi đ&atilde; thực sự trở th&agrave;nh huyền thoại của giải đấu n&agrave;y. Nhờ t&agrave;i năng tưởng chừng như v&ocirc; hạn, Leo đ&atilde; chinh phục mọi đỉnh cao ch&oacute;i lọi v&agrave; con đường để anh trở th&agrave;nh cầu thủ xuất sắc nhất trong lịch sử Champions League c&oacute; lẽ kh&ocirc;ng c&ograve;n bao xa nữa.</p>\r\n\r\n<p style="text-align:justify">Với 66 b&agrave;n sau 83 trận, d&ugrave; mới 26 tuổi nhưng Messi đ&atilde; trở th&agrave;nh ch&acirc;n s&uacute;t xuất sắc thứ 2 trong lịch sử Champions League, chỉ xếp sau Raul (71 b&agrave;n sau 144 trận). Nhưng n&ecirc;n nhớ, Messi đạt hiệu suất 0,79 b&agrave;n/trận, c&ograve;n &ldquo;Ch&uacute;a nhẫn&rdquo; chỉ c&oacute; hiệu suất 0,49 b&agrave;n/trận, một khoảng c&aacute;ch kh&aacute; xa, đồng thời việc Leo vượt mặt Raul chỉ c&ograve;n l&agrave; vấn đề thời gian nếu căn cứ v&agrave;o phong độ cũng như tuổi nghề của El Pulga.</p>\r\n\r\n<p><img alt="Messi: Kẻ chinh phục vĩ đại - 1" class="news-image" src="http://localhost/giaingoaihang.com/backend/images/content/news-content-865997448.jpg" style="border:0px" /></p>\r\n\r\n<p style="text-align:center">Messi đ&atilde; ghi b&agrave;n ở 14 quốc gia v&agrave; 21 s&acirc;n b&oacute;ng ở đấu trường Champions League</p>\r\n\r\n<p style="text-align:justify">Sự xuất sắc của Messi c&ograve;n thể hiện ở chỗ anh đ&atilde; chinh phục hầu khắp c&aacute;c quốc gia v&agrave; s&acirc;n b&oacute;ng nổi tiếng tại ch&acirc;u &Acirc;u. Theo thống k&ecirc;, Leo đ&atilde; ghi b&agrave;n ở 14 quốc gia v&agrave; 21 s&acirc;n vận động kh&aacute;c nhau của lục địa gi&agrave; tại Champions League. Đ&atilde; c&oacute; tới 6 s&acirc;n b&oacute;ng ở ch&acirc;u &Acirc;u từng chứng kiến Messi ghi nhiều hơn 1 b&agrave;n gồm: Celtic Park v&agrave; Eden Stadium (3 b&agrave;n); Minsk Dinamo, Santiago Bernabeu, Luzhniki, San Siro (c&ugrave;ng 2 b&agrave;n). Từ Anh, Đức, Scotland, CH S&eacute;c hay Ukraina,&rdquo;kẻ chinh phục&rdquo; Messi đều đ&atilde; khiến đối thủ phải c&uacute;i rạp. Nạn nh&acirc;n mới nhất của Messi l&agrave; Man City, đội b&oacute;ng được coi l&agrave; mạnh nhất nước Anh hiện nay nhưng cuối c&ugrave;ng vẫn phải khuất phục với tỉ số 0-2, trong đ&oacute; c&oacute; b&agrave;n mở tỉ số của Leo tr&ecirc;n chấm 11m sau khi ch&iacute;nh anh kiếm được n&oacute;.</p>\r\n\r\n<p style="text-align:justify">Với b&agrave;n thắng v&agrave;o lưới Joe Hart, Messi c&ograve;n tiếp tục nới rộng th&ecirc;m kỉ lục ghi b&agrave;n nhiều nhất ở c&aacute;c trận đấu knock-out tại Champions League l&ecirc;n con số 30. Điều đ&oacute; cho thấy, Leo nguy hiểm ra sao ở c&aacute;c trận đấu loại trực tiếp. Chắc chắn, Barca sẽ kh&ocirc;ng thể tiến s&acirc;u tại Cup C1 li&ecirc;n tiếp như vậy nếu kh&ocirc;ng c&oacute; một cầu thủ xuất sắc như Messi. Barca vốn lu&ocirc;n l&agrave; một đối b&oacute;ng mạnh với lối chơi tiqui-taca thần th&aacute;nh, nhưng g&atilde; khổng lồ xứ Catalunya cần một &ldquo;thi&ecirc;n t&agrave;i&rdquo; như&nbsp;<u>Messi</u>&nbsp;để &ldquo;t&agrave;n s&aacute;t&rdquo; đối thủ v&agrave; hướng tới c&aacute;c danh hiệu.</p>\r\n', '1392910945-bong-da-messi.jpg', '../images/articles/2014-02-20/', 'Messi: Kẻ chinh phục vĩ đại', 'Messi: Kẻ chinh phục vĩ đại', 2, '2014-02-20 22:42:25', '2014-02-20 22:42:25', 17, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_image`
--

CREATE TABLE IF NOT EXISTS `article_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `path` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `order_possition` int(11) NOT NULL,
  `type` char(2) NOT NULL,
  `seo_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo_description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `url`, `description`, `create_date`, `user_id`, `active`, `order_possition`, `type`, `seo_title`, `seo_description`) VALUES
(1, 0, 'Giải ngoại hạng', 'giai-ngoai-hang', 'Giải ngoại hạng', '2014-02-20 21:54:24', 17, 0, 1, 'A', 'Giải ngoại hạng', 'Giải ngoại hạng'),
(2, 0, 'Giải bóng đá Ý', 'giai-bong-da-y', 'Giải bóng đá Ý', '2014-02-20 21:55:38', 17, 0, 2, 'A', 'Giải bóng đá Ý', 'Giải bóng đá Ý'),
(3, 0, 'Giải bóng đá Đức', 'giai-bong-da-duc', 'Giải bóng đá Đức', '2014-02-20 21:55:58', 17, 0, 3, 'A', 'Giải bóng đá Đức', 'Giải bóng đá Đức'),
(4, 0, 'Giải bóng đá Tây Ban Nha', 'giai-bong-da-tay-ban-nha', 'Giải bóng đá Tây Ban Nha', '2014-02-20 21:56:26', 17, 0, 4, 'A', 'Giải bóng đá Tây Ban Nha', 'Giải bóng đá Tây Ban Nha');

-- --------------------------------------------------------

--
-- Table structure for table `category_relation`
--

CREATE TABLE IF NOT EXISTS `category_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `table_name` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category_relation`
--

INSERT INTO `category_relation` (`id`, `category_id`, `table_id`, `table_name`) VALUES
(2, 1, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `alt` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) DEFAULT '1',
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `frequency`, `url`, `description`, `title`) VALUES
(1, 'messi', 1, 'messi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag_connect`
--

CREATE TABLE IF NOT EXISTS `tag_connect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `table_name` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tag_connect`
--

INSERT INTO `tag_connect` (`id`, `tag_id`, `table_id`, `table_name`) VALUES
(1, 1, 2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` varchar(50) DEFAULT NULL,
  `lastAccessTime` datetime DEFAULT NULL,
  `lastIPAccess` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `isBlock` int(1) DEFAULT '0',
  `createDate` datetime DEFAULT NULL,
  `createBy` int(11) DEFAULT NULL,
  `avatar` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `fullName`, `roles`, `lastAccessTime`, `lastIPAccess`, `isBlock`, `createDate`, `createBy`, `avatar`, `id`, `phone`) VALUES
('tocoti', 'minhtienuet@gmail.com', '$2a$13$OsMxvxUGNIcIoE2bhfQhdu8Tcnpb8ma83HnwSmJyXYlUhjU5tmT/y', 'Loving Rape', 'admin', NULL, NULL, 0, NULL, 0, '1381659071-1924-499x352.jpg', 17, 1689935018),
('member', 'tongcongtien@gmail.com', '$2a$13$LbiKsPv8Sw84jfcs5Ir12uG66ifVybKGpkGEC7Jh1DoQhHxHWKWPO', 'Tống công Tiến', 'member', NULL, NULL, 0, '2013-10-14 16:58:13', 0, NULL, 18, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
