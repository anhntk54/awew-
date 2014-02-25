-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2014 at 02:06 PM
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
  `type` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `short_description`, `description`, `image`, `path`, `seo_title`, `seo_description`, `active`, `create_date`, `update_date`, `user_id`, `hot`, `rate`, `type`) VALUES
(6, 'Arsenal và Man City sẽ tranh đua ngôi vô địch như thế nào?', 'arsenal-va-man-city-se-tranh-dua-ngoi-vo-dich-nhu-the-nao', '\r\n(TinTheThao.com.vn) - Với việc Arsenal và Man City “rủ nhau” thất trận 0-2 ngay tại sân nhà trước những đại diện của Đức và Tây Ban Nha, bóng đá Anh gần như chắc chắn sẽ mất đi hai đại diện ở vòng tứ kết. Với tình hình như vậy, Arsenal và Man City sẽ có cơ hội dồn hết sức lực vào giải quốc nội. Khi đó, cơ hội để xưng vương vào tháng 5 của hai đội bóng này sẽ lớn hơn?', '\r\n\r\n<strong>Man City trước cơ hội lặp lại lịch sử c&aacute;ch đ&acirc;y hai năm?</strong><br />\r\n<br />\r\nHai năm trước, Man City ở lần đầu ti&ecirc;n dự Champions League đ&atilde; bị loại ngay từ v&ograve;ng bảng. Ở giải quốc nội, những tưởng nửa xanh th&agrave;nh Manchester sẽ bị MU bỏ xa trong cuộc chiến đến ng&ocirc;i v&ocirc; địch. C&oacute; l&uacute;c khoảng c&aacute;ch ấy l&ecirc;n đến 8 điểm. Nhưng rồi với lực lượng h&ugrave;ng hậu cộng với việc rảnh ch&acirc;n kh&ocirc;ng phải thi đấu ở đấu trường ch&acirc;u &Acirc;u, Man City đ&atilde; trở đứng dậy v&agrave; bắt kịp MU. Cuối c&ugrave;ng, đội b&oacute;ng chủ s&acirc;n Etihad đ&atilde; l&agrave;m l&ecirc;n một cuộc lật đổ ngoạn ngục với hai b&agrave;n thắng ở ph&uacute;t cuối trước QPR. Th&agrave;nh t&iacute;ch hai năm trước, liệu Man City c&oacute; thể lập lại ở m&ugrave;a giải n&agrave;y?<br />\r\n&nbsp;\r\n<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:200px" summary="">\r\n	<tbody>\r\n		<tr>\r\n			<td><img src="http://localhost/giaingoaihang/backend/images/content/news-content-290894263.jpg" style="border:0px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bỏ qua s&acirc;n chơi C&uacute;p C1, Man City ho&agrave;n to&agrave;n c&oacute; thể tự tin v&agrave;o một kết quả kh&aacute;c ở giải Quốc nội. Ảnh: Internet</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\nMuốn thế, Man City phải c&oacute; được hai điều. Một l&agrave; kiếm được 3 điểm tuyệt đối trước những đội b&oacute;ng nhỏ. Hai l&agrave; toan t&iacute;nh hợp l&iacute; mỗi khi gặp c&aacute;c đội b&oacute;ng đối đầu trực tiếp.<br />\r\n<br />\r\nMan City năm nay c&oacute; phong độ kh&aacute; tốt tr&ecirc;n s&acirc;n nh&agrave;, nhưng tr&ecirc;n s&acirc;n kh&aacute;ch họ c&oacute; phong độ rất phập ph&ugrave;. Đ&oacute; l&agrave; l&iacute; do họ hay mất điểm trước những đội b&oacute;ng nhược tiểu lu&ocirc;n lấy s&acirc;n nh&agrave; l&agrave; điểm tựa. Điều n&agrave;y tưởng chừng như l&agrave; dễ d&agrave;ng với lực lượng h&ugrave;ng hậu của Man City hiện tại. Song kh&ocirc;ng ai d&aacute;m chắc được điều n&agrave;y. Giải ngoại hạng lu&ocirc;n khốc liệt v&agrave; kh&oacute; đo&aacute;n nhất l&agrave; l&uacute;c giải c&agrave;ng về cuối &ndash; khi ấy, c&aacute;c đội b&oacute;ng v&igrave; cuộc chiến trụ hạng sẽ bị dồn v&agrave;o ch&acirc;n tường v&agrave; chiến đấu như những chiến binh.<br />\r\n<br />\r\nC&ograve;n lại, khi đối đầu với c&aacute;c đội b&oacute;ng lớn, Man City phải rất cẩn trọng. Những trận thua như Chelsea l&agrave; điều học tr&ograve; &ocirc;ng Pelergrini kh&ocirc;ng được ph&eacute;p lặp lại nếu muốn v&ocirc; địch. Những chuyến l&agrave;m kh&aacute;ch ở Alfield, Old Trafford v&agrave; đặc biệt l&agrave; ở Emirates, Man City buộc phải đ&aacute; rất thận trọng. Họ kh&ocirc;ng được ph&eacute;p thua trước khi nghĩ đến chiến thắng.<br />\r\n<br />\r\nT&oacute;m lại, chiến thắng hầu hết c&aacute;c đội b&oacute;ng nhỏ v&agrave; c&oacute; th&agrave;nh t&iacute;ch đối đầu tạm được trước c&aacute;c chiến l&agrave;m kh&aacute;ch với c&aacute;c đối thủ cạnh tranh lớn l&agrave; con đường ngắn nhất dẫn thầy tr&ograve; &ocirc;ng Pelergrini đến chức v&ocirc; địch Ngoại hạng.<br />\r\n<br />\r\n<strong>Arsenal sẽ tr&ocirc;ng chờ v&agrave;o sự l&igrave; đ&ograve;n?</strong><br />\r\n<br />\r\nArsenal bao nhi&ecirc;u năm nay vẫn bị coi l&agrave; những đứa trẻ kh&ocirc;ng bao giờ lớn. Kh&ocirc;ng ngẫu nhi&ecirc;n, c&aacute;c ph&aacute;o thủ bị chế giễu như vậy. Th&ocirc;ng thường, kịch bản của Arsenal những năm gần đ&acirc;y l&agrave; sung sức ở giai đoạn đầu m&ugrave;a, sau đ&oacute; hụt hơi v&agrave;o khoảng thời gian sau Gi&aacute;ng sinh, phong độ trồi sụt k&eacute;o đến khoảng th&aacute;ng 4 v&agrave; họ chỉ bức tốc v&agrave;o khoảng 4,5 năm trận cuối m&ugrave;a giải, nhưng thường những kết quả tốt muộn m&agrave;ng kia kh&ocirc;ng đưa họ đi đến những danh hiệu, c&ugrave;ng lắm chỉ l&agrave; cuộc cạnh tranh vị tr&iacute; ch&iacute;nh thức dự Champions League m&agrave; th&ocirc;i.<br />\r\n&nbsp;\r\n<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:200px" summary="">\r\n	<tbody>\r\n		<tr>\r\n			<td><img src="http://localhost/giaingoaihang/backend/images/content/news-content-646637315.jpg" style="border:0px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Arsenal sẽ dồn hết sức lực cho đấu trường Premier League để thoả m&atilde;n cơn kh&aacute;t danh hiệu. Ảnh: Internet</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\nNăm nay, họ c&oacute; sự bổ sung một Sanogo trẻ trung, một Oezil đắc gi&aacute; nhất trong lịch sử c&acirc;u lạc bộ, cộng th&ecirc;m việc rất c&oacute; thể bị loại sớm ở Champions League, Arsenal liệu c&oacute; thể tận dụng được cơ hội n&agrave;y để giải tỏa cơn kh&aacute;t danh hiệu?<br />\r\n<br />\r\nĐương nhi&ecirc;n, muốn giải quyết được vấn đề danh hiệu, trước hết Arsenal phải vững v&agrave;ng t&acirc;m l&iacute; trước mọi trận đấu. Những năm trước, Arsenal khi hưng phấn đ&aacute; rất hủy diệt nhưng khi thua họ rất dễ d&agrave;ng bị t&acirc;m l&iacute; v&agrave; vướng v&agrave;o những trận đấu thất vọng li&ecirc;n tiếp. C&ograve;n nhớ v&agrave;o năm 2008, Arsenal khoảng 10 v&ograve;ng đấu cuối c&ugrave;ng vẫn đang dẫn đầu. Song, sau trận h&ograve;a đau đớn trước Birmingham, Arsenal tụt dốc kh&ocirc;ng phanh v&agrave; kết th&uacute;c giải đấu với vị tr&iacute; thứ 3. Đ&acirc;y l&agrave; một b&agrave;i học nhớ đời v&agrave; muốn tiến xa ở m&ugrave;a giải n&agrave;y Arsenal cần phải ghi nhớ kĩ. Đ&aacute;ng mừng cho Arsenal, m&ugrave;a giải năm nay họ c&oacute; th&agrave;nh t&iacute;ch đối đầu rất tốt với c&aacute;c đội b&oacute;ng nhỏ. Họ chỉ mất điểm trước Aston Villa, West Brom, Everton v&agrave; Southampton. Trong khi đ&oacute;, Chelsea v&agrave; Man City mất điểm nhiều hơn Arsenal khi đối đầu với c&aacute;c đội b&oacute;ng chiếu dưới. Đ&acirc;y phải chăng l&agrave; l&iacute; do khiến cổ động vi&ecirc;n Arsenal c&oacute; thể mơ mộng?\r\n\r\n\r\n\r\n&nbsp;\r\n\r\n<strong>Nguồn:&nbsp;<em>Quốc Phi - Thể thao Việt Nam</em></strong>\r\n\r\n&nbsp;\r\n', '1392977307-95307136480445.jpg', '../images/articles/2014-02-21/', 'Arsenal và Man City sẽ tranh đua ngôi vô địch như thế nào?', 'Arsenal và Man City sẽ tranh đua ngôi vô địch như thế nào?', 2, '2014-02-21 17:08:27', '2014-02-21 17:08:27', 17, 0, 0, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `article_image`
--

INSERT INTO `article_image` (`id`, `article_id`, `image`, `alt`, `path`) VALUES
(1, 5, 'Penguins.jpg', 'Penguins.', '../images/articles/2014-02-12/slide_640_350/'),
(2, 5, 'Koala.jpg', 'Koala.', '../images/articles/2014-02-12/slide_640_350/'),
(3, 5, 'Hydrangeas.jpg', 'Hydrangeas.', '../images/articles/2014-02-12/slide_640_350/');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `url`, `description`, `create_date`, `user_id`, `active`, `order_possition`, `type`, `seo_title`, `seo_description`) VALUES
(6, 0, 'Tin chuyển nhượng', 'tin-chuyen-nhuong', 'Tin chuyển nhượng', '2014-01-14 23:21:59', 17, 0, 1, 'A', 'Tin chuyển nhượng', 'Tin chuyển nhượng'),
(7, 0, 'Ngoại hạng Anh', 'ngoai-hang-anh', 'Ngoại hạng Anh', '2014-01-14 23:23:17', 17, 0, 2, 'A', 'Ngoại hạng Anh', 'Ngoại hạng Anh'),
(8, 0, 'Champions League', 'champions-league', 'Champions League', '2014-01-14 23:24:22', 17, 0, 3, 'A', 'Chelsea Champions League', 'Tin tuc chelsea Champions League'),
(9, 8, 'Lịch thi đấu', 'lich-thi-dau', 'Lịch thi đấu', '2014-01-14 23:34:16', 17, 0, 1, 'A', 'lich thi dau champions league cua chelsea fc', 'tong hop lich thi dau champions league cua chelsea fc'),
(10, 8, 'Bảng xếp hạng', 'bang-xep-hang', 'Bảng xếp hạng', '2014-01-14 23:35:05', 17, 0, 2, 'A', 'Bảng xep hang champions league, cup C1 cua chelsea', 'Bảng xep hang champions league, cup C1 cua chelsea');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `category_relation`
--

INSERT INTO `category_relation` (`id`, `category_id`, `table_id`, `table_name`) VALUES
(11, 3, 11, 'A'),
(12, 4, 11, 'A'),
(13, 3, 18, 'A'),
(14, 4, 18, 'A'),
(15, 3, 13, 'A'),
(16, 4, 13, 'A'),
(17, 3, 12, 'A'),
(21, 3, 17, 'A'),
(28, 7, 6, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `sub_title` varchar(70) NOT NULL,
  `sub_content` varchar(140) NOT NULL,
  `location_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `end_date` datetime NOT NULL,
  `begin_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `article_id`, `rate`) VALUES
(2, 0, 19, 0.869793),
(3, 0, 19, 1.93229),
(4, 0, 19, 2.86979),
(5, 0, 19, 3.99479),
(6, 0, 19, 0.932293),
(7, 0, 19, 4.86979);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `image`, `alt`, `category_id`) VALUES
(1, '000_DV1172255.jpg', 'chelsea fc ', 1),
(2, '_018.jpg', 'chelsea fc', 1),
(3, '_012.jpg', '_012.', 0),
(4, '_011.jpg', '_011.', 0),
(5, '000_DV1172265.jpg', '000_DV1172265.', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `frequency`, `url`, `description`, `title`) VALUES
(55, 'Rape Asian', 1, 'rape-asian', 'Rape asian ', 'Rape asian'),
(56, 'test', 1, 'test', '', ''),
(57, 'abc', 1, 'abc', '', ''),
(58, 'xyz', 1, 'xyz', '', ''),
(59, 'gsdags', 1, 'gsdags', '', ''),
(60, 'chelsea', 1, 'chelsea', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `tag_connect`
--

INSERT INTO `tag_connect` (`id`, `tag_id`, `table_id`, `table_name`) VALUES
(204, 56, 11, 'A'),
(205, 55, 11, 'A'),
(206, 57, 19, 'A'),
(207, 55, 19, 'A'),
(208, 59, 19, 'A'),
(209, 56, 19, 'A'),
(210, 56, 18, 'A'),
(211, 55, 18, 'A'),
(212, 59, 13, 'A'),
(213, 57, 12, 'A'),
(214, 56, 12, 'A'),
(215, 55, 12, 'A'),
(216, 58, 12, 'A'),
(220, 55, 17, 'A');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `fullName`, `roles`, `lastAccessTime`, `lastIPAccess`, `isBlock`, `createDate`, `createBy`, `avatar`, `id`, `phone`) VALUES
('tocoti', 'minhtienuet@gmail.com', '$2a$13$r2reRavbkOJZV3/SW5psDuBxg1jtN73K2YpRlRtRwke/e4P2CjLCW', 'Loving Rape', 'admin', NULL, NULL, 0, NULL, 0, '1381659071-1924-499x352.jpg', 17, 1689935018),
('member', 'tongcongtien@gmail.com', '$2a$13$LbiKsPv8Sw84jfcs5Ir12uG66ifVybKGpkGEC7Jh1DoQhHxHWKWPO', 'Tống công Tiến', 'member', NULL, NULL, 0, '2013-10-14 16:58:13', 0, NULL, 18, NULL),
('trieunhu', 'anhntk54@gmail.com', '$2a$13$r2reRavbkOJZV3/SW5psDuBxg1jtN73K2YpRlRtRwke/e4P2CjLCW', 'Nhữ Tuấn anh', 'admin', NULL, NULL, 0, '2014-02-11 12:25:20', 0, NULL, 19, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
