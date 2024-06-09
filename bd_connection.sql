-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.36 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for blog_uniasselvi
CREATE DATABASE IF NOT EXISTS `blog_uniasselvi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `blog_uniasselvi`;

-- Dumping structure for table blog_uniasselvi.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` longtext,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table blog_uniasselvi.posts: 1 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `description`, `created_at`) VALUES
	(1, 'Testando psot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><br>Praesent et sagittis felis, vitae imperdiet orci. Fusce aliquet a massa in mollis. Duis non lacus sed diam consectetur dictum a vitae orci. Curabitur consequat sapien a turpis hendrerit finibus. Mauris molestie massa eu dolor tempus elementum. Suspendisse condimentum neque eget urna lacinia ultricies. Phasellus elementum libero a lorem lacinia, vel aliquet augue eleifend. Ut fringilla, augue vel hendrerit malesuada, magna massa imperdiet nunc, at rutrum lorem urna nec enim. Quisque mi urna, varius vel magna at, auctor faucibus sapien.<br> Nulla facilisi. Fusce sollicitudin sem id ex blandit, mollis porttitor quam malesuada.', '2024-06-09 11:17:27'),
	(2, '123213', '123123123', '2024-06-09 14:24:31');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
