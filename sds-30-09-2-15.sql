-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2015 at 02:51 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govermentTypes`
--

INSERT INTO `govermentTypes` (`govermentTypeID`, `govermentTypeName`, `description`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'Democracy', 'Democracy', 1, 0, '2015-09-29 21:06:29', 0, '2015-09-29 18:06:29'),
(2, 'Monarchy', 'Monarchy', 1, 0, '2015-09-29 21:06:47', 0, '2015-09-29 18:06:47'),
(3, 'Republic', 'Republic', 1, 0, '2015-09-29 21:08:30', 0, '2015-09-29 18:08:30'),
(4, 'Aristocracy', 'Aristocracy', 1, 0, '2015-09-29 21:09:11', 0, '2015-09-29 18:09:11'),
(5, 'Dictactorship', 'Dictactorship', 1, 0, '2015-09-29 21:09:40', 0, '2015-09-29 18:09:40'),
(6, 'Democratic Republic', 'Democratic Republic', 1, 0, '2015-09-29 21:10:38', 0, '2015-09-29 18:10:38');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languageID`, `languageName`, `description`, `abbreviation`, `active`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 'English', 'English', 'Eng', 1, 0, '2015-09-28 15:21:40', 0, '2015-09-28 12:21:40'),
(2, 'French', 'French', 'Fr', 1, 0, '2015-09-28 15:24:40', 0, '2015-09-28 12:24:40'),
(3, 'German', 'German', 'Gr', 1, 0, '2015-09-28 15:24:58', 0, '2015-09-28 12:24:58'),
(4, 'Swahili', 'Kiswahili', 'Swa', 1, 0, '2015-09-28 15:25:21', 0, '2015-09-28 12:25:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberCities`
--

INSERT INTO `memberCities` (`memberCityID`, `memberID`, `memberCityName`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 'Mombasa', 0, '2015-09-29 21:38:06', 0, '2015-09-29 18:38:06'),
(2, 4, 'Nairobi', 0, '2015-09-29 21:44:16', 0, '2015-09-29 18:44:16'),
(3, 4, 'Kisumu', 0, '2015-09-29 21:44:28', 0, '2015-09-29 18:44:28'),
(4, 2, 'Moshi', 0, '2015-09-29 21:44:59', 0, '2015-09-29 18:44:59'),
(5, 2, 'Dar es Salaam', 0, '2015-09-29 21:45:14', 0, '2015-09-29 18:45:14');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberDetails`
--

INSERT INTO `memberDetails` (`memberDetailID`, `memberID`, `govermentTypeID`, `capital`, `population`, `grossDomesticProduct`, `numberOfTelephoneLines`, `numberOfMobileLines`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 3, 'Nairobi', 34000000, 10, 1230000, 24000000, 0, '2015-09-29 21:13:09', 0, '2015-09-29 18:13:09'),
(2, 4, 3, 'Nakuru', 1221212112, 121, 12121212, 1212121, 0, '2015-09-29 21:17:24', 0, '2015-09-29 18:17:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `regionID`, `membershipTypeID`, `memberName`, `dialCode`, `root_domain`, `abbrv`, `ISO_CODE`, `notes`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 4, 2, 'Mozambique', 258, 'mz', 'moz', 'MOZ', 'Mozambique', 0, '0000-00-00 00:00:00', 0, '2015-09-29 08:29:48'),
(2, 1, 1, 'Tanzania', 256, 'tz', 'TZ', 'TZ', 'Tanzania', 0, '0000-00-00 00:00:00', 0, '2015-09-29 08:56:16'),
(3, 1, 1, 'Uganda', 255, 'ug', 'UG', '255', 'Uganda', 0, '2015-09-29 11:15:43', 0, '2015-09-29 08:16:21'),
(4, 1, 5, 'Kenya', 254, 'ke', 'ke', '254', 'Kenya', 0, '2015-09-29 13:38:35', 0, '2015-09-29 10:38:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`organizationID`, `memberID`, `organizationTypeID`, `organizationName`, `organizationDesc`, `organizationCode`, `MSISDN`, `otherMSISDN`, `telephoneNo`, `otherTelephoneNo`, `fax`, `postalAddress`, `physicalAddress`, `emailAddress`, `twitter`, `facebook`, `website`, `linkedIn`, `youtube`, `passwordExpiryAge`, `adminMode`, `active`, `activityHistory`, `insertedBy`, `dateCreated`, `updatedBy`, `dateModified`) VALUES
(1, 3, 1, 'Safaricom Limited', 'Safaricom Limited', '100', 10000, 11000, '072222222', '', '123456', '122345', 'Safaricom House, Waiyaki Way', 'saf@saf.co.ke', '@saf', 'safbook', 'www.saf.co.le', 'saflinkedin', 'safchannel', 180, '0', 2, '', 0, '2015-09-30 14:10:28', 0, '2015-09-30 11:32:33');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `govermentTypes`
--
ALTER TABLE `govermentTypes`
  ADD PRIMARY KEY (`govermentTypeID`),
  ADD UNIQUE KEY `govermentTypeName` (`govermentTypeName`);

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
-- Indexes for table `organizationTypes`
--
ALTER TABLE `organizationTypes`
  ADD PRIMARY KEY (`organizationTypeID`),
  ADD UNIQUE KEY `organizationTypeName` (`organizationTypeName`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`organizationID`),
  ADD UNIQUE KEY `organizationName_UNIQUE` (`organizationName`),
  ADD KEY `fk_organizations_members1_idx` (`memberID`),
  ADD KEY `fk_organizations_organizationTypes1_idx` (`organizationTypeID`);

--
-- Indexes for table `personnelTypes`
--
ALTER TABLE `personnelTypes`
  ADD PRIMARY KEY (`personnelTypeID`),
  ADD UNIQUE KEY `personnelTypeName` (`personnelTypeName`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`regionID`),
  ADD UNIQUE KEY `regionName` (`regionName`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `govermentTypes`
--
ALTER TABLE `govermentTypes`
  MODIFY `govermentTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `languageID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `memberCities`
--
ALTER TABLE `memberCities`
  MODIFY `memberCityID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `memberDetails`
--
ALTER TABLE `memberDetails`
  MODIFY `memberDetailID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `membershipTypes`
--
ALTER TABLE `membershipTypes`
  MODIFY `membershipTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `organizationTypes`
--
ALTER TABLE `organizationTypes`
  MODIFY `organizationTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `organizationID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `personnelTypes`
--
ALTER TABLE `personnelTypes`
  MODIFY `personnelTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `regionID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
-- Constraints for dumped tables
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
