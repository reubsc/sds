-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2015 at 03:10 PM
-- Server version: 10.0.21-MariaDB
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sds`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_page`
--

CREATE TABLE IF NOT EXISTS `dashboard_page` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE IF NOT EXISTS `genders` (
  `genderID` int(11) unsigned NOT NULL,
  `genderName` varchar(45) NOT NULL,
  `Abbreviation` varchar(3) NOT NULL,
  `active` tinyint(3) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `insertedBy` int(11) NOT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`genderID`, `genderName`, `Abbreviation`, `active`, `dateCreated`, `insertedBy`, `dateModified`, `updatedBy`) VALUES
(1, 'Male', 'M', 1, '2015-10-04 09:06:49', 1, '2015-10-05 08:40:49', 1),
(2, 'Female', 'F', 1, '2015-10-04 09:08:24', 1, '2015-10-05 08:40:49', 1),
(3, 'Other', 'O', 1, '2015-10-04 09:47:40', 1, '2015-10-05 08:40:49', 1),
(4, 'Other Type', 'OT', 1, '2015-10-07 12:30:26', 0, '2015-10-07 09:30:26', 0),
(5, 'Another type', 'AT', 1, '0000-00-00 00:00:00', 0, '2015-10-07 09:31:06', 0),
(6, 'Just Yet Another Gender', 'JYA', 2, '2015-10-07 12:31:44', 0, '2015-10-07 09:31:44', 0),
(7, 'Yet Another Gender Group', 'YGG', 3, '2015-10-07 13:03:26', 0, '2015-10-07 10:03:26', 0),
(8, 'Another gender Group', 'AGG', 2, '2015-10-07 13:04:22', 0, '2015-10-07 10:04:22', 0),
(9, 'Just a Gender Group1', 'JG1', 2, '2015-10-07 13:06:05', 0, '2015-10-07 10:06:05', 0),
(10, 'Gender Tu', 'GT', 1, '2015-10-07 13:41:39', 1, '2015-10-07 10:41:39', 1),
(11, 'Gender Pekee', 'GP', 1, '2015-10-07 13:44:40', 1, '2015-10-07 10:44:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `govermentTypes`
--

CREATE TABLE IF NOT EXISTS `govermentTypes` (
  `govermentTypeID` int(11) unsigned NOT NULL,
  `govermentTypeName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govermentTypes`
--

INSERT INTO `govermentTypes` (`govermentTypeID`, `govermentTypeName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Democracy', 'Democracy', 1, 0, '2015-09-29 21:06:29', 0, '2015-09-29 18:06:29'),
(2, 'Monarchy', 'Monarchy', 1, 0, '2015-09-29 21:06:47', 0, '2015-09-29 18:06:47'),
(3, 'Republic', 'Republic', 1, 0, '2015-09-29 21:08:30', 0, '2015-09-29 18:08:30'),
(4, 'Aristocracy', 'Aristocracy', 1, 0, '2015-09-29 21:09:11', 0, '2015-09-29 18:09:11'),
(5, 'Dictactorship', 'Dictactorship', 1, 0, '2015-09-29 21:09:40', 0, '2015-09-29 18:09:40'),
(6, 'Democratic Republic', 'Democratic Republic', 1, 0, '2015-09-29 21:10:38', 0, '2015-09-29 18:10:38'),
(7, 'Medo-Persia', 'MD', 1, 1, '2015-10-07 13:48:29', 1, '2015-10-07 10:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groupID` int(5) unsigned NOT NULL,
  `groupTypeID` int(5) unsigned NOT NULL,
  `groupName` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `active` tinyint(3) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `insertedBy` int(11) DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`groupID`, `groupTypeID`, `groupName`, `description`, `active`, `dateCreated`, `insertedBy`, `dateModified`, `updatedBy`) VALUES
(1, 1, 'Power Users', 'Power Users - less previleged Admins', 1, '2015-10-04 06:27:36', NULL, '2015-10-04 03:27:36', NULL),
(2, 2, 'Guest', 'Guest account with only list / view rights', 1, '2015-10-04 06:38:52', NULL, '2015-10-04 03:39:02', NULL),
(3, 2, 'User', 'Standard User ', 1, '2015-10-04 06:52:40', 0, '2015-10-04 03:59:20', 0),
(4, 3, 'Just Another Group', 'Just Another Group', 1, '2015-10-07 13:52:31', 1, '2015-10-07 10:52:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupTypes`
--

CREATE TABLE IF NOT EXISTS `groupTypes` (
  `groupTypeID` int(5) unsigned NOT NULL,
  `groupTypeName` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `active` tinyint(3) NOT NULL,
  `activityHistory` text,
  `dateCreated` datetime DEFAULT NULL,
  `insertedBy` int(11) NOT NULL,
  `dateModified` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupTypes`
--

INSERT INTO `groupTypes` (`groupTypeID`, `groupTypeName`, `description`, `active`, `activityHistory`, `dateCreated`, `insertedBy`, `dateModified`, `updatedBy`) VALUES
(1, 'Administrator', 'Administrative Account', 1, 'Created some few minutes ago', '2015-10-01 12:30:24', 0, '2015-10-01 09:30:24', 0),
(2, 'Standard User', 'Standard User Account', 1, 'Standard User accoutn', '2015-10-01 12:31:05', 0, '2015-10-01 09:31:05', 0),
(3, 'Another Group ', 'Another Group', 1, 'Another Group', '2015-10-07 13:50:40', 1, '2015-10-07 10:50:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `languageID` int(11) unsigned NOT NULL,
  `languageName` varchar(45) NOT NULL,
  `description` varchar(50) NOT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(11) unsigned DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(11) unsigned DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languageID`, `languageName`, `description`, `abbreviation`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'English', 'English', 'Eng', 1, 0, '2015-09-28 15:21:40', 0, '2015-09-28 12:21:40'),
(2, 'French', 'French', 'Fr', 1, 0, '2015-09-28 15:24:40', 0, '2015-09-28 12:24:40'),
(3, 'German', 'German', 'Gr', 1, 0, '2015-09-28 15:24:58', 0, '2015-09-28 12:24:58'),
(4, 'Swahili', 'Kiswahili', 'Swa', 1, 0, '2015-09-28 15:25:21', 0, '2015-09-28 12:25:21'),
(5, 'Kalenjin', 'Kalenjin', 'KL', 1, 1, '2015-10-07 13:54:01', 1, '2015-10-07 10:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `memberCities`
--

CREATE TABLE IF NOT EXISTS `memberCities` (
  `memberCityID` int(11) unsigned NOT NULL,
  `memberID` int(11) unsigned DEFAULT NULL,
  `memberCityName` varchar(50) DEFAULT NULL,
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberCities`
--

INSERT INTO `memberCities` (`memberCityID`, `memberID`, `memberCityName`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 'Mombasa', 0, '2015-09-29 21:38:06', 0, '2015-09-29 18:38:06'),
(2, 4, 'Nairobi', 0, '2015-09-29 21:44:16', 0, '2015-09-29 18:44:16'),
(3, 4, 'Kisumu', 0, '2015-09-29 21:44:28', 0, '2015-09-29 18:44:28'),
(4, 2, 'Moshi', 0, '2015-09-29 21:44:59', 0, '2015-09-29 18:44:59'),
(5, 2, 'Dar es Salaam', 0, '2015-09-29 21:45:14', 0, '2015-09-29 18:45:14'),
(6, 4, 'Sotik', 1, '2015-10-07 13:56:16', 1, '2015-10-07 10:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `memberDetails`
--

CREATE TABLE IF NOT EXISTS `memberDetails` (
  `memberDetailID` int(11) unsigned NOT NULL,
  `memberID` int(11) unsigned DEFAULT NULL,
  `govermentTypeID` int(11) unsigned DEFAULT NULL,
  `capital` varchar(120) DEFAULT NULL,
  `population` bigint(15) DEFAULT NULL,
  `grossDomesticProduct` bigint(15) DEFAULT NULL,
  `numberOfTelephoneLines` bigint(15) DEFAULT NULL,
  `numberOfMobileLines` bigint(15) DEFAULT NULL,
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberDetails`
--

INSERT INTO `memberDetails` (`memberDetailID`, `memberID`, `govermentTypeID`, `capital`, `population`, `grossDomesticProduct`, `numberOfTelephoneLines`, `numberOfMobileLines`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 3, 'Nairobi', 34000000, 10, 1230000, 24000000, 0, '2015-09-29 21:13:09', 0, '2015-09-29 18:13:09'),
(2, 4, 3, 'Nakuru', 1221212112, 121, 12121212, 1212121, 0, '2015-09-29 21:17:24', 0, '2015-09-29 18:17:24'),
(3, 4, 1, 'Nairobi', 40, 34, 231212121, 12121212, 1, '2015-10-07 14:03:14', 1, '2015-10-07 11:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) unsigned NOT NULL,
  `regionID` int(11) unsigned DEFAULT NULL,
  `membershipTypeID` int(11) unsigned DEFAULT NULL,
  `memberName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dialCode` int(5) unsigned NOT NULL DEFAULT '0',
  `root_domain` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `abbrv` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ISO_CODE` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `regionID`, `membershipTypeID`, `memberName`, `dialCode`, `root_domain`, `abbrv`, `ISO_CODE`, `notes`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 2, 'Mozambique', 258, 'mz', 'moz', 'MOZ', 'Mozambique', 0, '0000-00-00 00:00:00', 0, '2015-09-29 08:29:48'),
(2, 1, 1, 'Tanzania', 256, 'tz', 'TZ', 'TZ', 'Tanzania', 0, '0000-00-00 00:00:00', 0, '2015-09-29 08:56:16'),
(3, 1, 1, 'Uganda', 255, 'ug', 'UG', '255', 'Uganda', 0, '2015-09-29 11:15:43', 0, '2015-09-29 08:16:21'),
(4, 1, 5, 'Kenya', 254, 'ke', 'ke', '254', 'Kenya', 0, '2015-09-29 13:38:35', 0, '2015-09-29 10:38:35'),
(5, 1, 2, 'South Sudan', 270, 'sd', 'SD', 'sd', 'south sudan', 0, '2015-10-01 07:15:03', 0, '2015-10-01 04:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `membershipTypes`
--

CREATE TABLE IF NOT EXISTS `membershipTypes` (
  `membershipTypeID` int(11) unsigned NOT NULL,
  `membershipTypeName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershipTypes`
--

INSERT INTO `membershipTypes` (`membershipTypeID`, `membershipTypeName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Member State', 'MS', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:49:16'),
(2, 'Potential Member State', 'PMS', 1, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Associate Member', 'AM', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Potential Associate Member', 'PAM', 1, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'Member State 1', 'MS1', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:41:55'),
(6, 'Associate Member 1', 'AM1', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:43:24'),
(7, 'Member State 2', 'MS2', 1, 0, '2015-09-28 14:47:03', 0, '2015-09-28 11:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `message` text,
  `message_read` tinyint(1) NOT NULL,
  `draft` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `organizationID` int(11) unsigned NOT NULL,
  `memberID` int(11) unsigned DEFAULT NULL,
  `organizationTypeID` int(11) unsigned DEFAULT NULL,
  `organizationName` varchar(100) NOT NULL,
  `organizationDesc` varchar(255) DEFAULT NULL,
  `organizationCode` varchar(100) NOT NULL,
  `MSISDN` bigint(20) NOT NULL,
  `otherMSISDN` bigint(20) NOT NULL,
  `telephoneNo` varchar(30) DEFAULT NULL,
  `otherTelephoneNo` varchar(30) DEFAULT NULL,
  `fax` varchar(100) NOT NULL,
  `postalAddress` varchar(160) DEFAULT NULL,
  `physicalAddress` varchar(200) DEFAULT NULL,
  `emailAddress` varchar(200) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `passwordExpiryAge` int(4) NOT NULL DEFAULT '180',
  `adminMode` enum('0','1') DEFAULT '0',
  `active` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `activityHistory` text,
  `insertedBy` int(11) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(11) NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`organizationID`, `memberID`, `organizationTypeID`, `organizationName`, `organizationDesc`, `organizationCode`, `MSISDN`, `otherMSISDN`, `telephoneNo`, `otherTelephoneNo`, `fax`, `postalAddress`, `physicalAddress`, `emailAddress`, `twitter`, `facebook`, `website`, `linkedIn`, `youtube`, `passwordExpiryAge`, `adminMode`, `active`, `activityHistory`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 3, 1, 'Safaricom Limited', 'Safaricom Limited', '100', 10000, 11000, '072222222', '', '123456', '122345', 'Safaricom House, Waiyaki Way', 'saf@saf.co.ke', '@saf', 'safbook', 'www.saf.co.le', 'saflinkedin', 'safchannel', 180, '0', 2, '', 0, '2015-09-30 14:10:28', 0, '2015-09-30 11:32:33'),
(2, 4, 1, 'Africa Telecommunication Union', 'ATU', 'ATU', 1234567, 12, '123456789', '12398761', '121212', '', '', 'info@atu-uat.org', '', '', '', '', '', 180, '0', 2, 'ATU', 1, '2015-10-07 14:26:37', 1, '2015-10-07 11:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `organizationTypes`
--

CREATE TABLE IF NOT EXISTS `organizationTypes` (
  `organizationTypeID` int(11) unsigned NOT NULL,
  `organizationTypeName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned DEFAULT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizationTypes`
--

INSERT INTO `organizationTypes` (`organizationTypeID`, `organizationTypeName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Partner', 'Partner1', 1, 0, '2015-09-29 20:25:21', 0, '2015-09-29 17:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `passwordStatuses`
--

CREATE TABLE IF NOT EXISTS `passwordStatuses` (
  `passwordStatusID` int(11) unsigned NOT NULL,
  `passwordStatus` varchar(60) NOT NULL,
  `insertedBy` int(11) unsigned DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(11) unsigned DEFAULT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwordStatuses`
--

INSERT INTO `passwordStatuses` (`passwordStatusID`, `passwordStatus`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Active', NULL, '2015-10-01 11:28:58', NULL, '2015-10-01 08:28:58'),
(2, 'Pending', 0, '2015-10-01 11:29:29', 0, '2015-10-01 08:29:29'),
(3, 'Disabled', 0, '2015-10-01 11:29:39', 0, '2015-10-01 08:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE IF NOT EXISTS `personnels` (
  `personnelID` int(11) unsigned NOT NULL,
  `organizationID` int(11) unsigned NOT NULL,
  `languageID` int(11) unsigned NOT NULL,
  `personnelTypeID` int(11) unsigned NOT NULL,
  `salutationID` int(11) unsigned NOT NULL,
  `surname` varchar(60) NOT NULL,
  `otherNames` varchar(120) NOT NULL,
  `genderID` int(11) unsigned NOT NULL,
  `IDNumber` varchar(15) DEFAULT '0',
  `MSISDN` bigint(20) NOT NULL,
  `otherMSISDN` bigint(20) NOT NULL,
  `telephoneNo` varchar(30) DEFAULT NULL,
  `otherTelephoneNo` varchar(30) DEFAULT NULL,
  `fax` varchar(100) NOT NULL,
  `postalAddress` varchar(160) DEFAULT NULL,
  `physicalAddress` varchar(200) DEFAULT NULL,
  `emailAddress` varchar(200) NOT NULL,
  `columnA` varchar(100) DEFAULT NULL,
  `columnB` varchar(100) DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `dateActivated` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  `insertedBy` int(11) unsigned DEFAULT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`personnelID`, `organizationID`, `languageID`, `personnelTypeID`, `salutationID`, `surname`, `otherNames`, `genderID`, `IDNumber`, `MSISDN`, `otherMSISDN`, `telephoneNo`, `otherTelephoneNo`, `fax`, `postalAddress`, `physicalAddress`, `emailAddress`, `columnA`, `columnB`, `active`, `dateActivated`, `dateCreated`, `insertedBy`, `dateModified`, `updatedBy`) VALUES
(1, 1, 1, 1, 4, 'Rotich', 'Reuben Cheruiyot', 1, '12345678', 1234, 123456, '987654321', '87654321', '12367788', '17200', 'Doonholm, Eastlands of Nairobi', 'test', 'A ', 'B', 2, '0000-00-00 00:00:00', '2015-10-05 12:00:51', 1, '2015-10-05 09:00:51', 1),
(2, 2, 1, 1, 1, 'Musembi', 'Cyprian', 1, '90876543', 1212121, 121212, '12121212', '1212121', '121212', '1212121', 'Westlands Area', 'musembi@atu-uat.org', 'Column A', 'Column B', 2, NULL, '2015-10-07 14:33:02', 1, '2015-10-07 11:33:02', 1),
(3, 2, 1, 2, 1, 'Alfred ', 'Ngati', 1, '9087655', 1212, 1212, '121212', '121212', '', '', '', 'alfred@atu-uat.org', 'A', 'B', 2, '2015-10-07 14:39:49', '2015-10-07 14:39:49', 1, '2015-10-07 11:39:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personnelTypes`
--

CREATE TABLE IF NOT EXISTS `personnelTypes` (
  `personnelTypeID` int(11) unsigned NOT NULL,
  `personnelTypeName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnelTypes`
--

INSERT INTO `personnelTypes` (`personnelTypeID`, `personnelTypeName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Minister', 'Minister is  a government Employee in charge of a Ministry', 1, 0, '2015-09-29 20:29:46', 0, '2015-09-29 17:29:46'),
(2, 'Permanent Secretary', 'PS - Administrator of a Ministry', 1, 0, '2015-09-29 20:30:21', 0, '2015-09-29 17:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `about` text,
  `street` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `lastname`, `firstname`, `about`, `street`) VALUES
(1, 1, 'admin', 'admin', NULL, NULL),
(2, 2, 'demo', 'demo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_fields`
--

CREATE TABLE IF NOT EXISTS `profile_fields` (
  `id` int(10) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `error_message` varchar(255) NOT NULL,
  `other_validator` varchar(255) NOT NULL,
  `default` varchar(255) NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `regionID` int(11) unsigned NOT NULL,
  `regionName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`regionID`, `regionName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'East Africa', 'EA', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:58:30'),
(2, 'West Africa', 'WA', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:58:45'),
(3, 'Central Africa', 'CA', 1, 0, '2015-09-28 14:59:07', 0, '2015-09-28 11:59:07'),
(4, 'South Africa', 'SA', 1, 0, '2015-09-28 14:59:19', 0, '2015-09-28 11:59:19'),
(5, 'North Africa', 'NA', 1, 0, '2015-09-28 14:59:33', 0, '2015-09-28 11:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salutations`
--

CREATE TABLE IF NOT EXISTS `salutations` (
  `salutationID` int(11) unsigned NOT NULL,
  `salutationName` varchar(45) NOT NULL,
  `description` varchar(50) NOT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(11) unsigned DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(11) unsigned DEFAULT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salutations`
--

INSERT INTO `salutations` (`salutationID`, `salutationName`, `description`, `abbreviation`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Mr', 'Mr', 'Mr.', 1, 0, '0000-00-00 00:00:00', 0, '2015-09-28 11:25:46'),
(2, 'Mrs.', 'Mrs', 'Mrs.', 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Professor', 'Professor', 'Prof', 1, 0, '2015-09-28 14:08:08', 0, '2015-09-28 11:08:08'),
(4, 'Honourable', 'Honourable', 'Hon,', 1, 0, '2015-09-28 14:22:14', 0, '2015-09-28 11:22:14'),
(5, 'Excellence', 'Excellence', 'Exc.', 1, 0, '2015-09-28 14:22:42', 0, '2015-09-28 11:22:42'),
(6, 'Doctor', 'Doctoral ', 'Dr.', 1, 0, '2015-09-28 14:32:30', 0, '2015-09-28 11:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionTypes`
--

CREATE TABLE IF NOT EXISTS `subscriptionTypes` (
  `subscriptionTypeID` int(11) unsigned NOT NULL,
  `subscriptionTypeName` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `insertedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(10) unsigned NOT NULL DEFAULT '0',
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userGroups`
--

CREATE TABLE IF NOT EXISTS `userGroups` (
  `userGroupID` int(11) unsigned NOT NULL,
  `userID` int(11) unsigned NOT NULL,
  `groupID` int(11) unsigned NOT NULL,
  `active` tinyint(3) unsigned NOT NULL,
  `insertedBy` int(11) unsigned DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `updatedBy` int(11) unsigned DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userGroups`
--

INSERT INTO `userGroups` (`userGroupID`, `userID`, `groupID`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 1, 1, 1, 1, '2015-10-04 07:35:44', 1, '2015-10-04 04:35:44'),
(2, 2, 3, 1, 1, '2015-10-04 07:45:18', 1, '2015-10-04 04:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '', 0, 1266571424, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '', 0, 1266543330, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_role`
--

CREATE TABLE IF NOT EXISTS `user_has_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_s`
--

CREATE TABLE IF NOT EXISTS `user_s` (
  `userID` int(11) unsigned NOT NULL,
  `organizationID` int(11) unsigned NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `fullNames` varchar(120) DEFAULT NULL,
  `emailAddress` varchar(120) DEFAULT NULL,
  `IDNumber` varchar(30) DEFAULT NULL,
  `MSISDN` bigint(15) DEFAULT NULL,
  `canAccessUI` enum('0','1') DEFAULT '1',
  `password` varchar(150) DEFAULT NULL,
  `passwordAttempts` smallint(6) NOT NULL DEFAULT '0',
  `passwordStatusID` int(11) unsigned NOT NULL,
  `datePasswordChanged` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `dateActivated` datetime DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_s`
--

INSERT INTO `user_s` (`userID`, `organizationID`, `userName`, `fullNames`, `emailAddress`, `IDNumber`, `MSISDN`, `canAccessUI`, `password`, `passwordAttempts`, `passwordStatusID`, `datePasswordChanged`, `active`, `dateActivated`, `dateCreated`, `dateModified`, `updatedBy`, `createdBy`) VALUES
(1, 1, 'rrcheri', 'Reuben Rotich', 'rrcheri@gmail.com', '123456', 123, '1', '123456', 3, 1, '2015-10-01 11:45:03', NULL, '0000-00-00 00:00:00', '2015-10-01 11:45:03', '2015-10-01 08:45:03', 0, 0),
(2, 1, 'suerotich', 'Sue Rotich', 'sue@test.com', '1234567', 765, '1', '1234', 2, 1, '2015-10-01 11:46:00', NULL, '0000-00-00 00:00:00', '2015-10-01 11:46:00', '2015-10-01 08:46:00', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard_page`
--
ALTER TABLE `dashboard_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderID`);

--
-- Indexes for table `govermentTypes`
--
ALTER TABLE `govermentTypes`
  ADD PRIMARY KEY (`govermentTypeID`),
  ADD UNIQUE KEY `govermentTypeName` (`govermentTypeName`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groupID`),
  ADD KEY `fk_groups_groupTypes` (`groupTypeID`);

--
-- Indexes for table `groupTypes`
--
ALTER TABLE `groupTypes`
  ADD PRIMARY KEY (`groupTypeID`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`languageID`),
  ADD UNIQUE KEY `languageName_UNIQUE` (`languageName`),
  ADD UNIQUE KEY `abbreviation_UNIQUE` (`abbreviation`);

--
-- Indexes for table `memberCities`
--
ALTER TABLE `memberCities`
  ADD PRIMARY KEY (`memberCityID`),
  ADD KEY `fk_memberCities_members1_idx` (`memberID`);

--
-- Indexes for table `memberDetails`
--
ALTER TABLE `memberDetails`
  ADD PRIMARY KEY (`memberDetailID`),
  ADD KEY `fk_memberDetails_members1_idx` (`memberID`),
  ADD KEY `fk_memberDetails_govermentTypes1_idx` (`govermentTypeID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`),
  ADD UNIQUE KEY `memberName` (`memberName`),
  ADD KEY `fk_members_membershipTypes1_idx` (`membershipTypeID`),
  ADD KEY `fk_members_regions1_idx` (`regionID`);

--
-- Indexes for table `membershipTypes`
--
ALTER TABLE `membershipTypes`
  ADD PRIMARY KEY (`membershipTypeID`),
  ADD UNIQUE KEY `membershipTypeName` (`membershipTypeName`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_messages_users` (`from_user_id`),
  ADD KEY `fk_messages_users1` (`to_user_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`organizationID`),
  ADD UNIQUE KEY `organizationName_UNIQUE` (`organizationName`),
  ADD KEY `fk_organizations_members1_idx` (`memberID`),
  ADD KEY `fk_organizations_organizationTypes1_idx` (`organizationTypeID`);

--
-- Indexes for table `organizationTypes`
--
ALTER TABLE `organizationTypes`
  ADD PRIMARY KEY (`organizationTypeID`),
  ADD UNIQUE KEY `organizationTypeName` (`organizationTypeName`);

--
-- Indexes for table `passwordStatuses`
--
ALTER TABLE `passwordStatuses`
  ADD PRIMARY KEY (`passwordStatusID`),
  ADD UNIQUE KEY `passwordStatus` (`passwordStatus`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`personnelID`),
  ADD KEY `fk_personnels_organizations1` (`organizationID`),
  ADD KEY `fk_personnels_personnelTypes1` (`personnelTypeID`),
  ADD KEY `fk_personnels_languages1` (`languageID`) USING BTREE,
  ADD KEY `fk_personnels_salutations` (`salutationID`) USING BTREE,
  ADD KEY `fk_personnels_gender_idx` (`genderID`) USING BTREE;

--
-- Indexes for table `personnelTypes`
--
ALTER TABLE `personnelTypes`
  ADD PRIMARY KEY (`personnelTypeID`),
  ADD UNIQUE KEY `personnelTypeName` (`personnelTypeName`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `fk_profiles_users` (`user_id`);

--
-- Indexes for table `profile_fields`
--
ALTER TABLE `profile_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varname` (`varname`,`visible`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`regionID`),
  ADD UNIQUE KEY `regionName` (`regionName`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salutations`
--
ALTER TABLE `salutations`
  ADD PRIMARY KEY (`salutationID`),
  ADD UNIQUE KEY `salutationName_UNIQUE` (`salutationName`),
  ADD UNIQUE KEY `abbreviation_UNIQUE` (`abbreviation`);

--
-- Indexes for table `subscriptionTypes`
--
ALTER TABLE `subscriptionTypes`
  ADD PRIMARY KEY (`subscriptionTypeID`),
  ADD UNIQUE KEY `subscriptionTypeName` (`subscriptionTypeName`);

--
-- Indexes for table `userGroups`
--
ALTER TABLE `userGroups`
  ADD PRIMARY KEY (`userGroupID`),
  ADD UNIQUE KEY `userID` (`userID`,`groupID`),
  ADD KEY `fk_userGroups_groups_idx` (`groupID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `superuser` (`superuser`);

--
-- Indexes for table `user_has_role`
--
ALTER TABLE `user_has_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_s`
--
ALTER TABLE `user_s`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `fk_users_organizations_idx` (`organizationID`),
  ADD KEY `fk_users_passwordStatuses_idx` (`passwordStatusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard_page`
--
ALTER TABLE `dashboard_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `genderID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `govermentTypes`
--
ALTER TABLE `govermentTypes`
  MODIFY `govermentTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `groupID` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groupTypes`
--
ALTER TABLE `groupTypes`
  MODIFY `groupTypeID` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `languageID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `memberCities`
--
ALTER TABLE `memberCities`
  MODIFY `memberCityID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `memberDetails`
--
ALTER TABLE `memberDetails`
  MODIFY `memberDetailID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `membershipTypes`
--
ALTER TABLE `membershipTypes`
  MODIFY `membershipTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `organizationID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `organizationTypes`
--
ALTER TABLE `organizationTypes`
  MODIFY `organizationTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passwordStatuses`
--
ALTER TABLE `passwordStatuses`
  MODIFY `passwordStatusID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `personnelID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personnelTypes`
--
ALTER TABLE `personnelTypes`
  MODIFY `personnelTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile_fields`
--
ALTER TABLE `profile_fields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `regionID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salutations`
--
ALTER TABLE `salutations`
  MODIFY `salutationID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscriptionTypes`
--
ALTER TABLE `subscriptionTypes`
  MODIFY `subscriptionTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userGroups`
--
ALTER TABLE `userGroups`
  MODIFY `userGroupID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_has_role`
--
ALTER TABLE `user_has_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_s`
--
ALTER TABLE `user_s`
  MODIFY `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `fk_groups_groupTypes` FOREIGN KEY (`groupTypeID`) REFERENCES `groupTypes` (`groupTypeID`);

--
-- Constraints for table `memberCities`
--
ALTER TABLE `memberCities`
  ADD CONSTRAINT `memberCities_members_idx` FOREIGN KEY (`memberID`) REFERENCES `members` (`memberID`);

--
-- Constraints for table `memberDetails`
--
ALTER TABLE `memberDetails`
  ADD CONSTRAINT `memberDetails_govermentTypes_idx` FOREIGN KEY (`govermentTypeID`) REFERENCES `govermentTypes` (`govermentTypeID`),
  ADD CONSTRAINT `memberDetails_members_idx` FOREIGN KEY (`memberID`) REFERENCES `members` (`memberID`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_membershipTypes_idx` FOREIGN KEY (`membershipTypeID`) REFERENCES `membershipTypes` (`membershipTypeID`),
  ADD CONSTRAINT `members_regions_idx` FOREIGN KEY (`regionID`) REFERENCES `regions` (`regionID`);

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_members_idx` FOREIGN KEY (`memberID`) REFERENCES `members` (`memberID`),
  ADD CONSTRAINT `organizations_organizationTypes_idx` FOREIGN KEY (`organizationTypeID`) REFERENCES `organizationTypes` (`organizationTypeID`);

--
-- Constraints for table `personnels`
--
ALTER TABLE `personnels`
  ADD CONSTRAINT `fk_personnels_gender_idx` FOREIGN KEY (`genderID`) REFERENCES `genders` (`genderID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personnels_salutation_idx` FOREIGN KEY (`salutationID`) REFERENCES `salutations` (`salutationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personnels_languages_idx` FOREIGN KEY (`languageID`) REFERENCES `languages` (`languageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personnels_organizations_idx` FOREIGN KEY (`organizationID`) REFERENCES `organizations` (`organizationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personnels_personnelTypes_idx` FOREIGN KEY (`personnelTypeID`) REFERENCES `personnelTypes` (`personnelTypeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userGroups`
--
ALTER TABLE `userGroups`
  ADD CONSTRAINT `fk_userGroups_groups_idx` FOREIGN KEY (`groupID`) REFERENCES `groups` (`groupID`),
  ADD CONSTRAINT `fk_userGroups_users_idx` FOREIGN KEY (`userID`) REFERENCES `user_s` (`userID`);

--
-- Constraints for table `user_s`
--
ALTER TABLE `user_s`
  ADD CONSTRAINT `fk_users_organizations` FOREIGN KEY (`organizationID`) REFERENCES `organizations` (`organizationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_passwordStatuses` FOREIGN KEY (`passwordStatusID`) REFERENCES `passwordStatuses` (`passwordStatusID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
