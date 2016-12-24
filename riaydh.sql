-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2014 at 02:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `riaydh`
--

-- --------------------------------------------------------

--
-- Table structure for table `capital`
--

CREATE TABLE IF NOT EXISTS `capital` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular5` varchar(50) NOT NULL,
  `debit5` int(11) NOT NULL,
  `credit5` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capital`
--

INSERT INTO `capital` (`dno`, `date`, `particular5`, `debit5`, `credit5`, `balance`) VALUES
(499, '15.01.2014', '(Invest)Revenue/Owner equeaty/expence', 0, 12000, 12000),
(509, '09-11-2014', '(Invest)Revenue/Owner equeaty/expence', 0, 3000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`dno`, `date`, `particular`, `debit`, `credit`, `balance`) VALUES
(499, '15.01.2014', '(Invest)Revenue/Owner equeaty/expence', 12000, 0, 12000),
(500, '14.01.2014', '(Notes payable)Notes Payable', 5000, 0, 5000),
(506, '15.01.2014', '(Service on cash)Revenue/Owner equeaty/expence', 100, 0, 100),
(507, '15.01.2014', '(Notes payable)Notes Payable', 100, 0, 100),
(508, '10.01.2014', '(Paid on cash)Supplies', 0, -100, -100),
(509, '09-11-2014', '(Invest)Revenue/Owner equeaty/expence', 3000, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `dno` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `balance` int(11) NOT NULL,
  `t1` int(11) NOT NULL,
  `tt1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `tt2` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=511 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`dno`, `date`, `balance`, `t1`, `tt1`, `t2`, `tt2`) VALUES
(499, '15.01.2014', 12000, 1, 1, 7, 1),
(500, '14.01.2014', 5000, 1, 1, 5, 1),
(506, '15.01.2014', 100, 1, 1, 7, 1),
(507, '15.01.2014', 100, 1, 1, 5, 1),
(508, '10.01.2014', 100, 1, -1, 3, 1),
(509, '09-11-2014', 3000, 1, 1, 7, 1),
(510, '18.01.2014', 5000, 6, 1, 7, -1);

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE IF NOT EXISTS `data2` (
  `dno` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `tname1` varchar(50) NOT NULL,
  `dc2` varchar(50) NOT NULL,
  `tname2` varchar(50) NOT NULL,
  `dc` varchar(50) NOT NULL,
  `tname3` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL,
  `t1` int(11) NOT NULL,
  `tt1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `tt2` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`dno`, `date`, `tname1`, `dc2`, `tname2`, `dc`, `tname3`, `balance`, `t1`, `tt1`, `t2`, `tt2`) VALUES
(500, '14.01.2014', 'Cash', 'Dr', 'Notes Payable', 'Cr', '', 5000, 1, 1, 5, 1),
(506, '15.01.2014', 'Cash', 'Dr', 'Revenue/Owner equeaty/expence', 'Cr', 'Service on cash', 100, 1, 1, 7, 1),
(507, '15.01.2014', 'Cash', 'Dr', 'Notes Payable', 'Cr', 'Notes payable', 100, 1, 1, 5, 1),
(508, '10.01.2014', 'Cash', 'Cr', 'Supplies', 'Dr', 'Paid on cash', 100, 1, -1, 3, 1),
(509, '09-11-2014', 'Cash', 'Dr', 'Revenue/Owner equeaty/expence', 'Cr', 'Invest', 3000, 1, 1, 7, 1),
(510, '18.01.2014', 'Account Payable', 'Dr', 'Revenue/Owner equeaty/expence', 'Cr', 'Expence on due', 5000, 6, 1, 7, -1);

-- --------------------------------------------------------

--
-- Table structure for table `data3`
--

CREATE TABLE IF NOT EXISTS `data3` (
  `dno` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(60) NOT NULL,
  `Cash` int(11) NOT NULL,
  `Account_Receiveable` int(11) NOT NULL,
  `Supplies` int(11) NOT NULL,
  `Office_equipment` int(11) NOT NULL,
  `Notes_Payable` int(11) NOT NULL,
  `Account_payable` int(11) NOT NULL,
  `Capital` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `data3`
--

INSERT INTO `data3` (`dno`, `date`, `Cash`, `Account_Receiveable`, `Supplies`, `Office_equipment`, `Notes_Payable`, `Account_payable`, `Capital`) VALUES
(65, '10.01.2014', 400, 0, 0, 0, 0, 400, 0),
(96, '', 100, 100, 100, 100, 100, 100, 200),
(97, '', 400, 0, 0, 0, 0, 400, 0),
(98, '', 400, 0, 0, 0, 0, 400, 0),
(99, '', 400, 0, 0, 0, 0, 400, 0),
(100, '', 400, 0, 0, 0, 0, 400, 0),
(101, '', 400, 0, 0, 0, 0, 400, 0),
(102, '', 400, 0, 0, 0, 0, 400, 0),
(103, '', 400, 0, 0, 0, 0, 400, 0),
(104, '', 400, 0, 0, 0, 0, 400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE IF NOT EXISTS `expence` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular5` varchar(50) NOT NULL,
  `debit5` int(11) NOT NULL,
  `credit5` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expence`
--

INSERT INTO `expence` (`dno`, `date`, `particular5`, `debit5`, `credit5`, `balance`) VALUES
(510, '18.01.2014', '(Expence on due)Revenue/Owner equeaty/expence', -5000, 0, -5000);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular5` varchar(50) NOT NULL,
  `debit5` int(11) NOT NULL,
  `credit5` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`dno`, `date`, `particular5`, `debit5`, `credit5`, `balance`) VALUES
(500, '14.01.2014', '()Notes Payable', 0, 5000, 5000),
(507, '15.01.2014', '(Notes payable)Notes Payable', 0, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `of`
--

CREATE TABLE IF NOT EXISTS `of` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular4` varchar(50) NOT NULL,
  `debit4` int(11) NOT NULL,
  `credit4` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payable`
--

CREATE TABLE IF NOT EXISTS `payable` (
  `dno` int(11) NOT NULL,
  `date` varchar(55) NOT NULL,
  `particular5` varchar(55) NOT NULL,
  `debit5` int(11) NOT NULL,
  `credit5` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payable`
--

INSERT INTO `payable` (`dno`, `date`, `particular5`, `debit5`, `credit5`, `balance`) VALUES
(510, '18.01.2014', '(Expence on due)Revenue/Owner equeaty/expence', 0, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE IF NOT EXISTS `receive` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular` varchar(60) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE IF NOT EXISTS `revenue` (
  `dno` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `particular5` varchar(50) NOT NULL,
  `debit5` int(11) NOT NULL,
  `credit5` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`dno`, `date`, `particular5`, `debit5`, `credit5`, `balance`) VALUES
(506, '15.01.2014', '(Service on cash)Revenue/Owner equeaty/expence', 0, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE IF NOT EXISTS `supplies` (
  `dno` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `particular3` varchar(60) NOT NULL,
  `debit3` int(50) NOT NULL,
  `credit3` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`dno`, `date`, `particular3`, `debit3`, `credit3`, `balance`) VALUES
(508, '10.01.2014', '(Paid on cash)Supplies', 100, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tran`
--

CREATE TABLE IF NOT EXISTS `tran` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `t1` int(11) NOT NULL,
  `tt1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `tt2` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tran`
--

INSERT INTO `tran` (`no`, `t1`, `tt1`, `t2`, `tt2`) VALUES
(1, 1, -1, 3, 1),
(2, 1, 1, 6, 1),
(3, 1, 1, 7, 1),
(4, 2, 1, 7, 1),
(5, 1, -1, 3, 1),
(6, 3, 1, 6, 1),
(7, 1, -1, 7, -1),
(8, 1, 1, 5, 1),
(9, 1, -1, 6, -1),
(10, 1, -1, 7, -1),
(11, 6, 1, 7, -1),
(12, 1, 1, 7, 1),
(13, 1, -1, 5, -1),
(14, 2, 1, 7, 1),
(15, 2, -1, 1, 1),
(16, 1, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE IF NOT EXISTS `trans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `name`) VALUES
(1, 'Paid on cash'),
(2, 'Borrow'),
(3, 'Service on cash'),
(4, 'Service on due'),
(5, 'Buy on cash'),
(6, 'Buy on due'),
(7, 'Cash withdrew'),
(8, 'Notes payable'),
(9, 'Cash repay borrowd'),
(10, 'Expence on cash'),
(11, 'Expence on due'),
(12, 'Invest'),
(13, 'Repay Notespayable'),
(14, 'Sell on due'),
(15, 'Get receivable'),
(16, 'Sell on cash');

-- --------------------------------------------------------

--
-- Table structure for table `variable`
--

CREATE TABLE IF NOT EXISTS `variable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `variable`
--

INSERT INTO `variable` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Account Receiveable'),
(3, 'Supplies'),
(4, 'Office Equipment'),
(5, 'Notes Payable'),
(6, 'Account Payable'),
(7, 'Revenue/Owner equeaty/expence');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
