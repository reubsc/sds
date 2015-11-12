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

--Table structure for Role Based Access Control
-- //create the auth item table`
--

CREATE TABLE IF NOT EXISTS `tbl_auth_item` (
    `name` varchar(64) NOT NULL,
    `type` integer NOT NULL,
    `description` text,
    `bizrule` text,
    `data` text,
    PRIMARY KEY (`name`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;


-- --------------------------------------------------------
--
-- Indexes for table `members`
--
-- ALTER TABLE `tbl_auth_item`
--   ADD PRIMARY KEY (`memberID`),
--   ADD UNIQUE KEY `memberName` (`memberName`),
--   ADD KEY `fk_members_membershipTypes1_idx` (`membershipTypeID`),
--   ADD KEY `fk_members_regions1_idx` (`regionID`);

