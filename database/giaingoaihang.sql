CREATE TABLE IF NOT EXISTS comments (
  id int(11) NOT NULL AUTO_INCREMENT,
  comment_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  description text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  create_date datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table 'status'
--

CREATE TABLE IF NOT EXISTS `status` (
  id bigint(15) unsigned NOT NULL AUTO_INCREMENT,
  description text,
  `type` char(1) DEFAULT '',
  user_id bigint(15) unsigned NOT NULL,
  create_date timestamp NULL DEFAULT NULL,
  update_date timestamp NULL DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;