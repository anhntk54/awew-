-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2014 at 04:13 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_chelsea`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `short_description`, `description`, `image`, `path`, `seo_title`, `seo_description`, `active`, `create_date`, `update_date`, `user_id`, `hot`, `rate`) VALUES
(1, 'Capello khuyên Chelsea đừng tiếp tục mơ về Higuain', 'capello-khuyen-chelsea-dung-tiep-tuc-mo-ve-higuain', 'Vì HLV trưởng tuyển Nga tin rằng Napoli không đời nào lại để Higuain ra đi vào thời điểm này.', '<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:200px" summary="">\r\n	<tbody>\r\n		<tr>\r\n			<td><img src="http://localhost/app.chelsea/backend/images/content/news-content-699646296.jpg" style="border:0px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nTrong những ng&agrave;y gần đ&acirc;y, truyền th&ocirc;ng tại Anh v&agrave; Italia đ&atilde; rộ l&ecirc;n th&ocirc;ng tin về việc Chelsea đang l&ecirc;n kế hoạch duyệt chi số tiền 45 triệu bảng nhằm mang Higuian về Stamford Bridge để giải quyết b&agrave;i to&aacute;n tr&ecirc;n h&agrave;ng c&ocirc;ng của m&igrave;nh.<br />\r\n<br />\r\nTuy nhi&ecirc;n trong một dịp trả lời phỏng vấn tr&ecirc;n Fox Sport Italia về vấn đề n&agrave;y, HLV l&atilde;o l&agrave;ng Capello lại cho rằng The Blues gần như kh&ocirc;ng c&oacute; cơ hội trong vụ chuyển nhượng n&agrave;y, khi m&agrave; Napoli đang phải sống &#39;dựa&#39; v&agrave;o khả năng của ch&acirc;n s&uacute;t người Argentina:<br />\r\n<br />\r\n<em>&quot;Sẽ kh&ocirc;ng c&oacute; nhiều tiền đạo c&oacute; thể &#39;chuyển nh&agrave;&#39; trong th&aacute;ng Gi&ecirc;ng n&agrave;y. Mourinho từng huấn luyện Higuain tại Real v&agrave; hiểu r&otilde; cậu ấy c&oacute; thể l&agrave;m được những g&igrave;. Tuy nhi&ecirc;n Napoli sẽ kh&ocirc;ng thể để cậu ấy nếu như kh&ocirc;ng t&igrave;m được một người thay thế xứng đ&aacute;ng. Với một cầu thủ như cậu ấy, th&igrave; chắc chắn đ&oacute; sẽ l&agrave; cả một vấn đề.&quot;&nbsp;&nbsp;</em><br />\r\n<br />\r\nChuyển đến Napoli v&agrave;o m&ugrave;a H&egrave; vừa qua với số tiền 30 triệu euro, v&agrave; anh cũng đ&atilde; nhanh ch&oacute;ng để lại dấu ấn của m&igrave;nh chỉ sau 19 trận ra s&acirc;n kể từ đầu m&ugrave;a, khi ghi tổng cộng 13 b&agrave;n thắng v&agrave; 6 đường kiến tạo.</p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<p>&nbsp; <strong>Nguồn:&nbsp;<em>X&uacute; - TTVN</em></strong></p>\r\n', '1388307370-f8de17c3e3974d1590d6634a5dc85794jpg1377160404.jpg', '../images/articles/2013-12-29/', 'ko', 'ko', 2, '2013-12-29 15:51:14', '2014-01-14 23:28:28', 17, 1, 0),
(2, 'Hull City 0-2 Chelsea: Hazard và Torres đưa The Blues lên ngôi đầu', 'hull-city-02-chelsea-hazard-va-torres-dua-the-blues-len-ngoi-dau', 'Hai bàn thắng của Eden Hazard và Fernando Torres đã giúp Chelsea đánh bại Hull City qua đó vượt mặt Arsenal để tạm thời lên ngôi đầu bảng Premier League.', '<p>Với phong độ đang l&ecirc;n cao c&ugrave;ng sức mạnh vượt trội, Chelsea tự tin đẩy cao đội h&igrave;nh tấn c&ocirc;ng ngay từ đầu d&ugrave; phải l&agrave;m kh&aacute;ch. Nhưng Hull City với lối chơi ph&ograve;ng ngự phản c&ocirc;ng chắc chắn khiến c&aacute;c học tr&ograve; của Jose Mourinho gặp kh&ocirc;ng &iacute;t kh&oacute; khăn trong việc triển khai b&oacute;ng v&agrave; phải rất cẩn trọng ở nhiệm vụ ph&ograve;ng ngự.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:200px" summary="">\r\n	<tbody>\r\n		<tr>\r\n			<td><img src="http://localhost/app.chelsea/backend/images/content/news-content-984436050.jpg" style="border:0px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nỞ hiệp 1, c&oacute; l&uacute;c Hull City c&ograve;n kiểm so&aacute;t b&oacute;ng lần lướt hơn khi c&aacute;c cầu thủ Chelsea chơi thiếu tập trung. C&agrave;ng chơi, The Blues c&agrave;ng cho thấy sự bế tắc. Khi c&oacute; một v&agrave;i cơ hội th&igrave; c&aacute;c ch&acirc;n s&uacute;t của họ như Torres, Willian v&agrave; đặc biệt l&agrave; Oscar ở ph&uacute;t 33 lại kh&ocirc;ng thể tận dụng được.<br />\r\n<br />\r\nSau giờ nghỉ, Chelsea bắt đầu đẩy cao nhịp độ tấn c&ocirc;ng. Nhưng thế trận của họ chỉ khởi sắc hơn khi Eden Hazard c&oacute; b&agrave;n khai th&ocirc;ng thế bế tắc.&nbsp;<strong>Ph&uacute;t 56, tiền vệ người Bỉ tự tin đi b&oacute;ng rồi tung c&uacute; dứt điểm ngay s&aacute;t v&ograve;ng cấm, b&oacute;ng đi cực hiểm khiến thủ th&agrave;nh McGregor kh&ocirc;ng thể l&agrave;m g&igrave; hơn.</strong>&nbsp;Đ&oacute; cũng l&agrave; b&agrave;n thắng thứ 9 của Hazard ở Premier League.<br />\r\n<br />\r\nTừ đ&oacute;, trận đấu diễn ra đầy s&ocirc;i nổi bởi sự &aacute;p đảo to&agrave;n diện sức tấn c&ocirc;ng như vũ b&atilde;o của đội kh&aacute;ch. Ph&uacute;t 74, từ đường chuyền của Willian, Oscar trong v&ograve;ng cấm c&oacute; c&uacute; ra ch&acirc;n nhanh nhưng hậu vệ Hull City đ&atilde; cản ph&aacute; th&agrave;nh c&ocirc;ng.<br />\r\n<br />\r\nNhững ph&uacute;t cuối trận, d&ugrave; kh&ocirc;ng nỗ lực tấn c&ocirc;ng nữa, Chelsea vẫn c&oacute; th&ecirc;m b&agrave;n thắng thứ 2.<strong>Người lập c&ocirc;ng l&agrave; Fernando Torres ở ph&uacute;t 87 với c&uacute; s&uacute;t ch&igrave;m từ đường chuyền của Willian.</strong><br />\r\n<br />\r\nThắng lợi 2-0 ngay tr&ecirc;n s&acirc;n của Hull gi&uacute;p Chelsea c&oacute; 46 điểm để tạm thời vươn l&ecirc;n dẫn đầu bảng xếp hạng Premier League.</p>\r\n', '1389454369-Bayern Munich vs Chelsea (7).jpg', '../images/articles/2014-01-11/', 'Hai bàn thắng của Eden Hazard và Fernando Torres đã giúp Chelsea đánh bại Hull City qua đó vượt mặt ', 'Hai bàn thắng của Eden Hazard và Fernando Torres đã giúp Chelsea đánh bại Hull City qua đó vượt mặt Arsenal để tạm thời lên ngôi đầu bảng Premier League.', 2, '2014-01-11 22:32:50', '2014-01-14 23:28:47', 17, 0, 0),
(3, 'Hull City Chelsea: Dấu ấn chiến thuật', 'hull-city-chelsea-dau-an-chien-thuat', 'Một lần nữa Mourinho thể hiện khả năng chỉ đạo tuyệt vời.', '<p style="text-align:justify">Đang bị chỉ tr&iacute;ch v&igrave; lối chơi ti&ecirc;u cực thời gian gần đ&acirc;y,&nbsp;<strong>Chelsea</strong>&nbsp;tiếp tục thể hiện bộ mặt nhợt nhạt của m&igrave;nh. D&ugrave; chỉ phải đối đầu với đội b&oacute;ng được đ&aacute;nh gi&aacute; yếu hơn rất nhiều, nhưng The Blues đ&atilde; bị đội chủ nh&agrave; Hull chia cắt gần như trong suốt hiệp 1. Tuy nhi&ecirc;n, sau 45 ph&uacute;t đầu ti&ecirc;n, c&aacute;c học tr&ograve; của Mourinho lại l&agrave; người c&oacute; cơ hội ngon ăn nhất, nhưng Oscar đ&atilde; kh&ocirc;ng thắng được thủ m&ocirc;n McGregor của Hull trong pha đối mặt rất thuận lợi.</p>\r\n\r\n<p style="text-align:justify">Nhưng sang hiệp 2, Chelsea đ&atilde; thể hiện bộ mặt kh&aacute;c hẳn. Sau hiệp 1 giữ sức, Mourinho đ&atilde; chỉ đạo cho c&aacute;c học tr&ograve; dồn l&ecirc;n để đẩy Hull v&agrave;o thế chống đỡ. Ph&uacute;t 56, từ pha xử l&yacute; tuyệt vời của Hazard trước v&ograve;ng cấm, tiền vệ người Bỉ đ&atilde; tung c&uacute; s&uacute;t rất căng mở tỉ số trận đấu.</p>\r\n\r\n<p><img alt="Hull City – Chelsea: Dấu ấn chiến thuật - 1" class="news-image" src="http://localhost/app.chelsea/backend/images/content/news-content-899017434.jpg" style="border:0px" /></p>\r\n\r\n<p style="text-align:center">Hazard một lần nữa trở th&agrave;nh người h&ugrave;ng của Chelsea</p>\r\n\r\n<p style="text-align:justify">C&oacute; được b&agrave;n thắng, Chelsea tiếp tục chơi chắc chắn v&agrave; chủ động cầm b&oacute;ng khiến cho Hull rất kh&oacute; tiếp cận khung th&agrave;nh của Cech. Trong thế trận như vậy, kh&ocirc;ng bất ngờ khi The Blues c&oacute; th&ecirc;m b&agrave;n thắng. Từ một pha phản c&ocirc;ng ở ph&uacute;t 87, Torres đảo b&oacute;ng qua một hậu vệ của Hull trước khi dứt điểm quyết đo&aacute;n bằng ch&acirc;n tr&aacute;i ấn định chiến thắng 2-0 cho Chelsea.</p>\r\n\r\n<p style="text-align:justify">Gi&agrave;nh 3 điểm tr&ecirc;n s&acirc;n KC trong một trận đấu c&oacute; dấu ấn chiến thuật đậm n&eacute;t của HLV Mourinho, Chelsea đ&atilde; tạm thời vươn l&ecirc;n dẫn đầu BXH với 46 điểm sau 21 v&ograve;ng đấu.</p>\r\n\r\n<p style="text-align:justify"><strong>Chung cuộc</strong>:&nbsp;<u>Hull City &ndash; Chelsea</u>&nbsp;0-2</p>\r\n\r\n<p style="text-align:justify"><strong>Ghi b&agrave;n:&nbsp;</strong>Hazard (56), Torres (87)</p>\r\n\r\n<p style="text-align:justify"><strong>Đội h&igrave;nh ra s&acirc;n</strong>:</p>\r\n\r\n<p style="text-align:justify"><em>Hull City: McGregor, Chester, Bruce, Davies, Elmohamady, Figueroa, Meyler, Huddlestone, Livermore, Boyd, Sagbo.</em></p>\r\n\r\n<p style="text-align:justify"><em>Chelsea: Cech, Azpilicueta, Cahill, Terry, Cole, Ramires, David Luiz, Willian, Oscar, Hazard, Torres.</em></p>\r\n\r\n<p style="text-align:justify"><strong>Th&ocirc;ng số trận đấu:</strong></p>\r\n\r\n<p><img alt="Hull City – Chelsea: Dấu ấn chiến thuật - 2" class="news-image" src="http://localhost/app.chelsea/backend/images/content/news-content-947753958.jpg" style="border:0px" /></p>\r\n\r\n<p style="text-align:justify"><strong>Chấm điểm cầu thủ:</strong></p>\r\n\r\n<p><img alt="Hull City – Chelsea: Dấu ấn chiến thuật - 3" class="news-image" src="http://localhost/app.chelsea/backend/images/content/news-content-431915850.jpg" style="border:0px" /></p>\r\n', '1389454481-1389447928-bong-da-chelsea.jpg', '../images/articles/2014-01-11/', 'Một lần nữa Mourinho thể hiện khả năng chỉ đạo tuyệt vời.', 'Một lần nữa Mourinho thể hiện khả năng chỉ đạo tuyệt vời.', 2, '2014-01-11 22:34:41', '2014-01-14 23:28:06', 17, 0, 0),
(4, 'HULL CITY V CHELSEA: PHÁT BIỂU TRƯỚC TRẬN ĐẤU', 'hull-city-v-chelsea-pha?t-bie?u-truo?c-tra?n-da?u', 'Do đã có quãng thời gian gần một tuần để có sự chuẩn bị tốt nhất trước trận đấu với Hull City nên HLV Jose Mourinho có lý do để lớn tiếng tuyên bố Chelsea đã sẵn sàng để giành lấy chiến thắng thứ ba liên tiếp trong năm 2014.', '<p>Trước chuyến h&agrave;nh qu&acirc;n đến s&acirc;n KC, HLV Mourinho như thường lệ đ&atilde; d&agrave;nh thời gian để trả lời cuộc họp b&aacute;o. &Ocirc;ng đặc biệt thể hiện sự hứng th&uacute; của m&igrave;nh khi được t&aacute;i đấu với Steve Bruce khi hai người đ&atilde; chạm tr&aacute;n với nhau ngay ở v&ograve;ng đấu mở m&agrave;n Premier League.<br />\r\n<br />\r\n&quot;Ch&uacute;ng t&ocirc;i c&oacute; cơ hội lớn để gi&agrave;nh chiến thắng v&agrave;o ng&agrave;y mai mặc d&ugrave; đ&oacute; hẳn nhi&ecirc;n l&agrave; một trận đấu v&ocirc; c&ugrave;ng kh&oacute; khăn. Mọi trận đấu ở Premier League đều rất kh&oacute; khăn, m&agrave; th&ecirc;m v&agrave;o đ&oacute; l&agrave; những ph&acirc;n t&iacute;ch của t&ocirc;i về c&ocirc;ng việc của Steve Bruce.&quot; HLV Jose Mourinho nhận định.<br />\r\n<br />\r\n&quot;Nếu như gi&agrave;nh chiến thắng th&igrave; ch&uacute;ng t&ocirc;i sẽ tạm thời leo l&ecirc;n ng&ocirc;i đầu bảng d&ugrave; chỉ l&agrave; trong v&agrave;i giờ. V&agrave; như t&ocirc;i cũng đ&atilde; n&oacute;i, ch&uacute;ng t&ocirc;i vẫn đang duy tr&igrave; trong nh&oacute;m dẫn đầu v&agrave; thực hiện tốt c&ocirc;ng việc kh&oacute; khăn l&agrave; tiếp tục hiện diện trong Top4.</p>\r\n\r\n<p style="text-align:center"><img alt="Hull City v Chelsea: Phát biểu trước trận đấu" src="http://localhost/app.chelsea/backend/images/content/news-content-160096053.jpg" style="height:236px; max-width:460px; width:420px" title="Hull City v Chelsea: Phát biểu trước trận đấu - http://localhost/app.chelsea/backend" /></p>\r\n\r\n<p>&quot;B&ecirc;n cạnh đ&oacute; l&agrave; nhiệm vụ cải thiện đội b&oacute;ng, c&aacute;c cầu thủ để chuẩn bị cho một thời k&igrave; th&agrave;nh c&ocirc;ng nữa như qu&atilde;ng thời gian từ 2004-2012.&quot;<br />\r\n<br />\r\nHLV Mourinho cũng k&igrave; vọng việc c&oacute; nhiều hơn thời gian để chuẩn bị cho chuyến l&agrave;m kh&aacute;ch sắp tới sẽ gi&uacute;p &ocirc;ng c&ugrave;ng c&aacute;c học tr&ograve; gặt h&aacute;i được kết quả tốt.<br />\r\n<br />\r\n&quot;Việc c&oacute; nhiều thời gian l&agrave; tốt cho ch&uacute;ng t&ocirc;i, c&aacute;c cầu thủ rốt cuộc cũng đ&atilde; c&oacute; một ng&agrave;y nghỉ v&agrave; ch&uacute;ng t&ocirc;i c&oacute; th&ecirc;m ba ng&agrave;y để l&agrave;m việc. Ch&uacute;ng t&ocirc;i đ&atilde; c&ugrave;ng nhau tập luyện, n&acirc;ng cao chiến thuật v&agrave; cải thiện một số vấn đề c&ograve;n tồn đọng.<br />\r\n<br />\r\n&quot;Ngo&agrave;i ra l&agrave; tin tốt từ sự hồi phục của Lampard v&agrave; Ivanovic. Tất nhi&ecirc;n l&agrave; trận tới th&igrave; họ vẫn chưa sẵn s&agrave;ng. Mặc d&ugrave; vậy song một tuần vừa qua, do kh&ocirc;ng phải thi đấu v&agrave;o giữa tuần n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; thu được những kết quả t&iacute;ch cực v&agrave; hy vọng rằng trận đấu v&agrave;o ng&agrave;y mai sẽ phản &aacute;nh đ&uacute;ng những nỗ lực của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Vị chiến lược gia người Bồ Đ&agrave;o Nha cũng d&agrave;nh tặng những lời khen cho c&aacute;c học tr&ograve; khi đ&atilde; cố gắng hết sức m&igrave;nh để gi&uacute;p Chelsea vượt qua qu&atilde;ng thời gian c&agrave;y ải về lịch thi đấu vừa qua. Trong đ&oacute; The Blues đ&atilde; thu được bốn chiến thắng v&agrave; h&ograve;a một trận. Thủ m&ocirc;n Petr Cech cũng chỉ phải nhận duy nhất một b&agrave;n thua trong qu&atilde;ng thời gian n&agrave;y.</p>\r\n\r\n<p><img alt="" src="http://localhost/lovingrape.com/images/articles/content/images/chelsea-mou(2).jpg" style="height:280px; width:420px" /><br />\r\n<br />\r\n&quot;T&ocirc;i nghĩ rằng một số cầu thủ k&igrave; cựu đang chơi với một phong độ v&ocirc; c&ugrave;ng ấn tượng. Đặc biệt l&agrave; John Terry. Đ&acirc;y hẳn nhi&ecirc;n l&agrave; một t&iacute;n hiệu đ&aacute;ng mừng khi m&agrave; phong độ của cậu ấy v&agrave;o m&ugrave;a giải năm ngo&aacute;i l&agrave; tương đối xấu.<br />\r\n<br />\r\n&quot;Mọi người cũng c&oacute; thể thấy một số cầu thủ trẻ như tiến v&agrave;o một kh&ocirc;ng gian kh&aacute;c vậy. Những người như Oscar, Eden [Hazard] v&agrave; Willian. D&ugrave; đang phải căng sức thi đấu ở một giải đấu v&ocirc; c&ugrave;ng khắc nghiệt song ch&uacute;ng t&ocirc;i vẫn đang tiến bộ từng ng&agrave;y.&quot;</p>\r\n', '1389454580-Mourinho pre Hull LV.jpg', '../images/articles/2014-01-11/', '', '', 2, '2014-01-11 22:36:20', '2014-01-14 23:27:47', 17, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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
(22, 7, 4, 'A'),
(23, 6, 3, 'A'),
(24, 7, 3, 'A'),
(25, 6, 1, 'A'),
(26, 8, 1, 'A'),
(27, 7, 2, 'A');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=230 ;

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
(220, 55, 17, 'A'),
(227, 60, 1, 'A'),
(228, 55, 1, 'A'),
(229, 60, 2, 'A');

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
