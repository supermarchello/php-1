-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `lesson5`;

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `views` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `images` (`views`, `id`, `name`, `size`, `path`) VALUES
(4,	1,	'1',	0,	'images'),
(2,	2,	'2',	0,	'images');

-- 2019-03-15 08:21:32
