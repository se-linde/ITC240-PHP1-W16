CREATE TABLE IF NOT EXISTS `highlights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `lat` decimal(10,8) NOT NULL DEFAULT '0.00000000',
  `lng` decimal(11,8) NOT NULL DEFAULT '0.00000000',
  PRIMARY KEY (`id`)
);

INSERT INTO `highlights` (`id`, `name`, `lat`, `lng`) VALUES
(1, 'Roberts Tower', '48.993665', '-123.084800'),
(2, 'Roberts Louvre', '48.992067', '-123.084049'),
(3, 'Roberts d''Orsay', '48.996305', '-123.085336'),
(4, 'Roberts du Luxembourg', '49.001873', '-123.088662'),
(5, 'Roberts Plantee', '48.992496', '-123.086730');