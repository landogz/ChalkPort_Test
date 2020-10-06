-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_contact
CREATE DATABASE IF NOT EXISTS `db_contact` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_contact`;


-- Dumping structure for table db_contact.table_logs
CREATE TABLE IF NOT EXISTS `table_logs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL DEFAULT '0',
  `Logs` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_contact.table_logs: ~0 rows (approximately)
DELETE FROM `table_logs`;
/*!40000 ALTER TABLE `table_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_logs` ENABLE KEYS */;


-- Dumping structure for table db_contact.table_users
CREATE TABLE IF NOT EXISTS `table_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Notes` varchar(50) DEFAULT NULL,
  `profile_pic` varchar(500) DEFAULT 'Default.png',
  `Status` varchar(50) DEFAULT 'Active',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_contact.table_users: ~2 rows (approximately)
DELETE FROM `table_users`;
/*!40000 ALTER TABLE `table_users` DISABLE KEYS */;
INSERT INTO `table_users` (`ID`, `Name`, `Email`, `Address`, `Contact`, `Notes`, `profile_pic`, `Status`) VALUES
	(79, 'Bladimir Abreu', 'test@gmail.com', 'Purok 4, Tampo', '123123', '', 'wow_h2bev_(1).jpg', 'Active'),
	(80, 'Rolan Benavidez', 'rolan.benavidez@gmail.com', 'Tampo (Pob.)', '123', '', 'Neph_-Graphic_Designer.png', 'Inactive');
/*!40000 ALTER TABLE `table_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
