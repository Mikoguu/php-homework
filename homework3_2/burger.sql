-- Adminer 4.8.1 MySQL 8.3.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `address`) VALUES
(1,	3,	'2024-05-05 12:52:38',	NULL),
(2,	3,	'2024-05-05 12:54:15',	NULL),
(3,	3,	'2024-05-05 12:59:14',	NULL),
(4,	3,	'2024-05-05 12:59:31',	NULL),
(5,	3,	'2024-05-05 12:59:50',	NULL),
(6,	4,	'2024-05-05 13:06:20',	NULL),
(7,	5,	'2024-05-05 13:11:37',	'Sonovaya, 1, 1, 18, '),
(8,	5,	'2024-05-05 13:12:36',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(9,	5,	'2024-05-05 13:17:15',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(10,	5,	'2024-05-05 13:17:33',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(11,	5,	'2024-05-05 13:17:54',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(12,	6,	'2024-05-05 13:18:13',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(13,	6,	'2024-05-05 13:18:23',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(14,	6,	'2024-05-05 13:18:26',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(15,	6,	'2024-05-05 13:18:26',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(16,	6,	'2024-05-05 13:18:29',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(17,	7,	'2024-05-05 13:18:39',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(18,	8,	'2024-05-05 13:19:07',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(19,	9,	'2024-05-05 13:19:48',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(20,	9,	'2024-05-05 13:19:50',	'+7 (987) 757 92 96, Sonovaya, 1, 1, 18, '),
(21,	10,	'2024-05-05 13:22:41',	'+7 (333) 333 33 33, mittova, 13, a, 4, '),
(22,	10,	'2024-05-05 13:23:00',	'+7 (333) 333 33 33, mittova, 13, a, 4, '),
(23,	11,	'2024-05-05 13:23:06',	'+7 (333) 333 33 33, mittova, 13, a, 4, '),
(24,	12,	'2024-05-05 14:44:36',	'+7 (111) 111 11 11, mittova, 10, 1, 10, '),
(25,	12,	'2024-05-05 14:44:43',	'+7 (111) 111 11 11, mittova, 10, 1, 10, '),
(26,	12,	'2024-05-05 14:44:46',	'+7 (111) 111 11 11, mittova, 10, 1, 10, '),
(27,	12,	'2024-05-05 14:44:49',	'+7 (111) 111 11 11, mittova, 10, 1, 10, ');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `orders_count` int unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

INSERT INTO `users` (`id`, `email`, `orders_count`, `name`) VALUES
(1,	'ekaterina+5@ankr.com',	1,	''),
(2,	'ekaterina1@ankr.com',	1,	''),
(3,	'lol.nanny@mail.ru',	2,	''),
(4,	'lol.anny@mail.ru',	1,	'Lisa'),
(5,	'anny@mail.ru',	5,	'Katya'),
(6,	'anndy@mail.ru',	5,	'Katya'),
(7,	'am@mail.ru',	1,	'Katya'),
(8,	'amaa@mail.ru',	1,	'Katya'),
(9,	'amaqqa@mail.ru',	2,	'Katya'),
(10,	'ekaterinda@ankr.com',	2,	'kdds'),
(11,	'ekaterinwwda@ankr.com',	1,	'kdds'),
(12,	'lol.nan@mail.ru',	4,	'Helen');

-- 2024-05-09 07:16:29
