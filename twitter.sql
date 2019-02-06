CREATE TABLE `users`
(
  `id` int
(10) unsigned NOT NULL AUTO_INCREMENT,
  `twitter_id` bigint
(20) unsigned DEFAULT NULL,
  `twitter_username` varchar
(20) DEFAULT NULL,
  PRIMARY KEY
(`id`),
  UNIQUE KEY `twitter_id`
(`twitter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
