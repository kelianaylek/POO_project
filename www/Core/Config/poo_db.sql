-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour poo_db
CREATE DATABASE IF NOT EXISTS `poo_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `poo_db`;

-- Listage de la structure de la table poo_db. friends
CREATE TABLE IF NOT EXISTS `friends` (
  `user_id` int(11) DEFAULT NULL,
  `friend_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table poo_db.friends : ~12 rows (environ)
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` (`user_id`, `friend_id`) VALUES
	(1, 3),
	(3, 1),
	(1, 2),
	(2, 1),
	(1, 4),
	(4, 1),
	(3, 4),
	(4, 3),
	(3, 2),
	(2, 3),
	(4, 2),
	(2, 4);
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;

-- Listage de la structure de la table poo_db. messages
CREATE TABLE IF NOT EXISTS `messages` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `poll_id` int(11) DEFAULT NULL,
  `message_content` varchar(50) DEFAULT NULL,
  `message_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table poo_db.messages : ~0 rows (environ)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Listage de la structure de la table poo_db. polls
CREATE TABLE IF NOT EXISTS `polls` (
  `poll_id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_title` varchar(80) NOT NULL,
  `poll_answer1` varchar(20) NOT NULL,
  `poll_answer2` varchar(20) NOT NULL,
  `poll_link` varchar(40) DEFAULT NULL,
  `poll_top_percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `poll_limit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `poll_creator` varchar(80) NOT NULL,
  `accepted_id` int(11) DEFAULT NULL,
  `poll_answer1_votes` int(11) DEFAULT '0',
  `poll_answer2_votes` int(11) DEFAULT '0',
  PRIMARY KEY (`poll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table poo_db.polls : ~5 rows (environ)
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;
INSERT INTO `polls` (`poll_id`, `poll_title`, `poll_answer1`, `poll_answer2`, `poll_link`, `poll_top_percent`, `created_at`, `poll_limit`, `poll_creator`, `accepted_id`, `poll_answer1_votes`, `poll_answer2_votes`) VALUES
	(1, 'Que vais-je manger ?', 'Japonais', 'Chinois', NULL, NULL, '2020-12-02 23:15:19', '2023-01-01 01:00:00', 'naylek', 1, 0, 0),
	(2, 'Je fais quoi ce soir ?', 'Dodo', 'Sport', NULL, NULL, '2020-12-02 23:16:59', '2020-12-03 01:00:00', 'naylek', 1, 0, 0),
	(3, 'Que prÃ©fÃ©rez-vous ?', 'Le canard', 'Le foie gras', NULL, NULL, '2020-12-02 23:18:14', '2020-12-06 01:00:00', 'timogo', 4, 0, 0),
	(4, 'Je regarde quoi au cinema ?', 'Film 1', 'Film 2', NULL, NULL, '2020-12-02 23:20:48', '2020-12-03 07:00:00', 'matthis', 2, 0, 0),
	(5, 'Je demande quoi a noÃ«l ?', 'Une tÃ©lÃ©vision', 'Une ps5', NULL, NULL, '2020-12-02 23:22:17', '2020-12-20 15:00:00', 'hugo', 3, 0, 0);
/*!40000 ALTER TABLE `polls` ENABLE KEYS */;

-- Listage de la structure de la table poo_db. polls_answered
CREATE TABLE IF NOT EXISTS `polls_answered` (
  `poll_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table poo_db.polls_answered : ~0 rows (environ)
/*!40000 ALTER TABLE `polls_answered` DISABLE KEYS */;
/*!40000 ALTER TABLE `polls_answered` ENABLE KEYS */;

-- Listage de la structure de la table poo_db. users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(65) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_isOnline` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table poo_db.users : ~4 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_isOnline`) VALUES
	(1, 'naylek', 'raoultkelian@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
	(2, 'matthis', 'matthis@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
	(3, 'hugo', 'hugo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
	(4, 'timogo', 'timogo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
