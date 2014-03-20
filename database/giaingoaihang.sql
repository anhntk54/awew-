CREATE TABLE IF NOT EXISTS `event_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(300) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `style` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `user_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(300) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `style` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;