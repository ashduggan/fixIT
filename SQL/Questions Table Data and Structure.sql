SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `leftChildId` int(10) UNSIGNED DEFAULT NULL,
  `rightChildId` int(10) UNSIGNED DEFAULT NULL,
  `popularity` int(11) NOT NULL DEFAULT '0',
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suggestion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_leftchildid_foreign` (`leftChildId`),
  KEY `questions_rightchildid_foreign` (`rightChildId`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `questions` (`id`, `leftChildId`, `rightChildId`, `popularity`, `question`, `suggestion`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 0, 'Does the power button start the computer?', 'Make sure the computer is plugged in to a working electrical socket.', '2016-12-13 20:51:48', '2016-12-13 21:12:30'),
(2, 4, 5, 0, 'Does your monitor work?', 'Click or press buttons to wake the computer from sleep mode. Check that the monitor is plugged in to a working electrical socket.', '2016-12-13 20:53:40', '2016-12-13 21:04:03'),
(3, 6, 7, 0, 'Do the fans start spinning?', 'Make sure the power supply works. Try replacing it.', '2016-12-13 20:55:09', '2016-12-13 21:13:32'),
(4, 8, 9, 0, 'Do your peripheries (mouse, keyboard, etc.) work?', 'Check that they are plugged in. Check the Bluetooth settings on your computer and any Bluetooth devices. Check the batteries on any wireless devices.', '2016-12-13 20:57:42', '2016-12-13 21:11:00'),
(5, NULL, NULL, 0, 'Can you log into your computer?', 'Your computer may have locked you out.', '2016-12-13 20:59:34', '2016-12-13 20:59:34'),
(6, NULL, NULL, 0, 'Is your ram installed correctly?', 'Make sure your RAM is installed in series. Make sure they are plugged in all the way.', '2016-12-13 21:05:54', '2016-12-13 21:05:54'),
(7, NULL, NULL, 1, 'Is your computer dusted and clean?', 'Use a can of compressed air to blow out dust from all of the components.', '2016-12-13 21:06:39', '2016-12-13 21:43:23'),
(8, 10, 11, 0, 'Does your sound work?', 'Check your volume level on your computer, which can be found somewhere on your task bar (usually, the bottom-right or top-right). Ensure your speakers are plugged in correctly.', '2016-12-13 21:08:42', '2016-12-13 21:23:09'),
(9, NULL, NULL, 1, 'Do your USB drives work?', 'Try using different USB drives. Update your USB drivers. Ensure that your OS is up to date.', '2016-12-13 21:10:41', '2016-12-13 21:42:15'),
(10, 12, 13, 0, 'Is your computer frozen?', 'Restart windows explorer (windows) or finder (mac). If that doesn''t work, try restarting your computer.', '2016-12-13 21:18:26', '2016-12-13 21:31:44'),
(11, NULL, NULL, 0, 'Does your sound card work?', 'Try reinstall your sound card and motherboard drivers.', '2016-12-13 21:21:51', '2016-12-13 21:21:51'),
(12, NULL, NULL, 0, 'Can you connect to the internet?', 'Make sure you are in range of your router. Update your wireless adapter''s drivers. Call your ISP.', '2016-12-13 21:24:22', '2016-12-13 21:24:22'),
(13, NULL, NULL, 0, 'Is your computer running slow?', 'Try stopping some programs. Run a virus scan.', '2016-12-13 21:25:44', '2016-12-13 21:25:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
