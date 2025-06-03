-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 juin 2025 à 20:07
-- Version du serveur : 9.1.0
-- Version de PHP : 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `radioapt`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `apt_id` int NOT NULL AUTO_INCREMENT,
  `apt_date` date NOT NULL,
  `apt_time` time NOT NULL,
  `apt_status` enum('UPCOMING','PASSED','CANCELLED') NOT NULL DEFAULT 'UPCOMING',
  `apt_registdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `apt_user_id` int NOT NULL,
  `apt_test_id` int NOT NULL,
  PRIMARY KEY (`apt_id`),
  UNIQUE KEY `unique_test_time` (`apt_test_id`,`apt_date`,`apt_time`),
  KEY `apt_user_id` (`apt_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`apt_id`, `apt_date`, `apt_time`, `apt_status`, `apt_registdate`, `apt_user_id`, `apt_test_id`) VALUES
(75, '2025-05-15', '10:00:00', 'PASSED', '2025-05-14 08:14:37', 95, 3),
(79, '2025-05-15', '10:00:00', 'PASSED', '2025-05-14 08:28:52', 95, 1),
(80, '2025-05-17', '15:30:00', 'PASSED', '2025-05-14 12:16:53', 96, 6),
(85, '2025-05-15', '17:00:00', 'PASSED', '2025-05-14 12:50:33', 97, 1),
(96, '2025-05-21', '11:00:00', 'PASSED', '2025-05-19 12:23:20', 95, 3),
(102, '2025-05-21', '11:00:00', 'PASSED', '2025-05-20 07:18:34', 95, 1),
(105, '2025-05-24', '10:00:00', 'PASSED', '2025-05-21 20:20:25', 95, 3),
(106, '2025-05-29', '11:00:00', 'PASSED', '2025-05-27 20:35:32', 95, 1),
(107, '2025-06-12', '09:00:00', 'UPCOMING', '2025-05-30 20:56:45', 95, 1),
(108, '2025-06-12', '11:00:00', 'UPCOMING', '2025-06-03 18:50:58', 95, 2);

-- --------------------------------------------------------

--
-- Structure de la table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` int NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(250) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`) VALUES
(1, 'MRI'),
(2, 'CT Scan'),
(3, 'X-ray'),
(4, 'Ultrasound'),
(5, 'PET Scan'),
(6, 'Mammography'),
(7, 'Bone Density Scan'),
(8, 'Fluoroscopy'),
(9, 'Nuclear Medicine'),
(10, 'Angiography');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `test_id` int NOT NULL AUTO_INCREMENT,
  `test_name` varchar(250) NOT NULL,
  `exam_id` int NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `exam_id` (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`test_id`, `test_name`, `exam_id`) VALUES
(1, 'Head MRI', 1),
(2, 'Chest MRI', 1),
(3, 'Abdominal CT Scan', 2),
(4, 'Chest X-ray', 3),
(5, 'Abdominal Ultrasound', 4),
(6, 'Brain PET Scan', 5),
(7, 'Mammogram', 6),
(8, 'Spine Bone Density', 7),
(9, 'Upper GI Fluoroscopy', 8),
(10, 'Thyroid Nuclear Scan', 9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role` enum('USER','ADMIN','SUPERADMIN') NOT NULL DEFAULT 'USER',
  `user_isbanned` enum('ISBANNED','ISNOTBANNED') NOT NULL DEFAULT 'ISNOTBANNED',
  `user_regist_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_email`, `user_phone`, `user_password`, `user_role`, `user_isbanned`, `user_regist_date`) VALUES
(74, 'ecsdcsd', 'tjtrj', 'sarah.marchand@email.com', '+33856789012', '$2y$10$examplehash25...', 'USER', 'ISBANNED', '2025-04-15 11:45:00'),
(77, 'bonnet', 'Victor', 'victor.bonnet@email.com', '+33889012345', '$2y$10$examplehash28...', 'ADMIN', 'ISBANNED', '2025-04-15 16:40:00'),
(81, 'HOTAK', 'Muhammad Shahid', 'me911khan@gmail.com', '0782880866', '$2y$10$H02TG7A/kamH0yY5GW6z2OiKSW8HUVwqZiBVNhea2FRZCq1tYrssm', 'SUPERADMIN', 'ISNOTBANNED', '2025-04-15 16:08:36'),
(95, 'Super', 'SUPERADMIN', 'super@admin.web', '0782880866', '$2y$10$yGOo0BM3zLLZ4dhLMdoxx.wyOev4XsPfDc8VS/d7xhHQsWbxA83XS', 'SUPERADMIN', 'ISNOTBANNED', '2025-04-26 19:16:02'),
(96, 'Admin', 'ADMIN', 'admin@admin.web', '0782880866', '$2y$10$P7GFj2lYcI6i69Fbm60eZuij5e/ygeQZSwnphMWSlwjJW5jaK0rKi', 'ADMIN', 'ISNOTBANNED', '2025-04-26 19:16:57'),
(97, 'User', 'USER', 'user@user.web', '0782880866', '$2y$10$CgZmkKRK6TzCK/7LihNBce5McPNJvonMHxv6OAfcx8jkBIm6lr.tC', 'USER', 'ISNOTBANNED', '2025-04-26 19:17:54'),
(98, 'Banned', 'BANNED', 'banned@user.web', '0782880866', '$2y$10$qdQMj7jK7yWRmo7xyi7US.z1V10Jad.VGcWDcqBG1K2GK8zmyvQhO', 'USER', 'ISBANNED', '2025-04-26 19:18:51'),
(99, 'KHAN', 'Shahid', 'khan@khan.khan', '0782880866', '$2y$10$QuDy/YDYwJ7eh9Y22i2NZ.DSqxK8gg03I5/EM2.3M0bDu9F1mdFGW', 'USER', 'ISNOTBANNED', '2025-05-27 22:24:47');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`apt_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`apt_test_id`) REFERENCES `tests` (`test_id`) ON DELETE RESTRICT;

--
-- Contraintes pour la table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
