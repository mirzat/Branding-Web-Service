-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 02:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deltak`
--
CREATE DATABASE IF NOT EXISTS `deltak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `deltak`;

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE IF NOT EXISTS `metadata` (
  `name` varchar(256) DEFAULT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`name`, `logo`, `url`) VALUES
('Purdue University', 'http://www.purdue.edu/purdue/globals/graphics/v4_purdue/PU_signature_white_bg_215x80.png', 'http://www.purdue.edu/'),
('Lawrence Univeristy', 'http://www.lawrence.edu/sites/all/themes/zen_lawrence_university/logo.png', 'http://www.lawrence.edu/'),
('University of Minnesota', 'http://www1.umn.edu/prod/fragments/ur_common/assets/img/homesite-sprite-v3.png', 'http://www1.umn.edu/twincities/index.html'),
('UC San Diego', 'http://www.ucsd.edu/common/cwp/active-cherry/img/sprite_base.png', 'http://ucsd.edu/'),
('University of Colorado Boulder', 'http://www.colorado.edu/profiles/cu_homepage/themes/cu_960_responsive/logo.png', 'http://www.colorado.edu/'),
('University of Rochester', 'http://www.rochester.edu/templatefiles/rwd/img/header-logo.png', 'http://www.rochester.edu/'),
('Lehigh University', 'http://www4.lehigh.edu/Media/Website%20Resources/images/admissionsv4/admissions_logo.gif', 'http://www4.lehigh.edu/default.aspx'),
('Virginia Tech University', 'https://assets.cms.vt.edu/global_assets/images/vt_logo_tm_320px.png', 'https://www.vt.edu/'),
('Washington University in St. Louis', 'http://wustl.edu/assets/css/images/logo-wustl-index.jpg', 'http://wustl.edu/'),
('University of California, Berkeley', 'http://www.berkeley.edu/img/sections/berkeley-text-brand.gif', 'http://www.berkeley.edu/index.html');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
