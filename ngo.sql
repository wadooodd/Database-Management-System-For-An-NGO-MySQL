-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2021 at 06:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretaker`
--

DROP TABLE IF EXISTS `caretaker`;
CREATE TABLE IF NOT EXISTS `caretaker` (
  `Caretakerid` int(255) NOT NULL,
  `CaretakerName` varchar(255) NOT NULL,
  `Guardianid` int(255) DEFAULT NULL,
  `Parentid` int(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `phone` int(255) NOT NULL, -- phone INT
  `cnic` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `staff_member` varchar(255) NOT NULL, -- staff member = YES or NO 
  `Feeid` int(255) DEFAULT NULL,
  `no_of_childern` int(255) NOT NULL,
  `Sid` int(255) DEFAULT NULL,
  `Relation` varchar(255) NOT NULL,
  PRIMARY KEY (`Caretakerid`),
  KEY `Feeid` (`Feeid`),
  KEY `Parentid` (`Parentid`),
  KEY `Guardianid` (`Guardianid`),
  KEY `Sid` (`Sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------Populating caretaker Table

INSERT INTO `caretaker`(`Caretakerid`,`CaretakerName`,`Guardianid`,`Parentid`,`address`,`number`,`phone`,`cnic`,`email`,`staff_member`,`Feeid`,`no_of_childern`,`Sid`,`Relation`) VALUES
(100,'Ahmed',NULL,101,'WahCantt',0316,453,37406,'ahmed@gmail.com','No',01,2,1111,'Father'),
(200,'Salar',NULL,102,'Islamabad',0333,521,4860,'salar@gmail.com','No',02,1,1112,'Father'),
(300,'Fatima',NULL,103,'Rawalpindi',0334,456,7353,'wadood@gmail.com','No',03,1,1113,'Mother'),
(400,'Ayesha',NULL,104,'Lahore',0321,567,6784,'kamran@gmail.com','No',04,2,1114,'Mother'),
(500,'Sobia',NULL,105,'Attock',0331,675,1112,'tahir@gmail.com','Yes',05,1,1115,'Mother'),
(600,'Areeba',006,NULL,'Islamabad',0332,588,3455,'areeba@gmail.com','No',06,1,1116,'Sister');


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `Classid` int(255) NOT NULL,
  `Session_name` varchar(255) NOT NULL,
  `Class_name` varchar(255) NOT NULL,
  `Sections` varchar(255) NOT NULL,
  `sessionid` int(255) DEFAULT NULL,
  `Sid` int(255) DEFAULT NULL,
  PRIMARY KEY (`Classid`),
  KEY `sessionid` (`sessionid`),
  KEY `Sid` (`Sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating class table
INSERT INTO `class`(`Classid`,`Session_name`,`Class_name`,`Sections`,`sessionid`,`Sid`)VALUES
(1,'Spring','Grade One','A',10,1111),
(2,'Autumn','Grade Two','A',20,1112),
(3,'Summer','Grade Three','A',30,1113),
(4,'Winter','Grade Four','A',40,1114);
-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `Courseid` int(255) NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `Subjectid` int(255) DEFAULT NULL,
  PRIMARY KEY (`Courseid`),
  KEY `Subjectid` (`Subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating course table
INSERT INTO `course`(`Courseid`,`Course_name`,`Subjectid`)VALUES
(1000,'Playgroup',1111),
(2000,'Nursery',2222),
(3000,'Prep',3333),
(4000,'Advance',4444),
(5000,'Primary',5555);

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

DROP TABLE IF EXISTS `father`;
CREATE TABLE IF NOT EXISTS `father` (
  `Fatherid` int(255) NOT NULL,
  PRIMARY KEY (`Fatherid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating father table
INSERT INTO `father`(`Fatherid`)VALUES
(301),
(302),
(303),
(304),
(305);
-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `Feeid` int(255) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Fee_amount` int(255) NOT NULL, -- Fee amount INT
  `discount_amount` int(255) NOT NULL,
  PRIMARY KEY (`Feeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating fee table
INSERT INTO `fee`(`Feeid`,`Reason`,`Fee_amount`,`discount_amount`)VALUES
(01,'Financial Reasons',2000,1000),
(02,'Financial Reasons',2000,500),
(03,'Financial Reasons',3000,1500),
(04,'Financial Reasons',3000,2000),
(05,'Child of a staff member',2000,2000);
-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

DROP TABLE IF EXISTS `guardian`;
CREATE TABLE IF NOT EXISTS `guardian` (
  `Guardianid` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Reason_Absence` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Guardianid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating guardian table
INSERT INTO `guardian`(`Guardianid`,`Gender`,`Reason_Absence`)VALUES
(001,'male','Out of City'),
(002,'male','Out of City'),
(003,'female','Sick'),
(004,'female','Sick'),
(005,'female','Sick'),
(006,'female','Sick');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `Hid` int(255) NOT NULL,
  `Sid` int(255) DEFAULT NULL,
  `Classid` int(255) DEFAULT NULL,
  `Caretakerid` int(255) DEFAULT NULL,
  `sessionid` int(255) NOT NULL,
  PRIMARY KEY (`Hid`),
  KEY `Sid` (`Sid`),
  KEY `Caretakerid` (`Caretakerid`),
  KEY `Classid` (`Classid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating history table
INSERT INTO `history`(`Hid`,`Sid`,`Classid`,`Caretakerid`,`sessionid`)VALUES
(010,1111,1,100,10),
(020,1112,2,200,20),
(030,1113,3,300,30),
(040,1114,4,400,40),
(050,1115,5,500,50);

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

DROP TABLE IF EXISTS `mother`;
CREATE TABLE IF NOT EXISTS `mother` (
  `Motherid` int(255) NOT NULL,
  PRIMARY KEY (`Motherid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating mother table
INSERT INTO `mother`(`Motherid`)VALUES
(201),
(202),
(203),
(204),
(205);
-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `Parentid` int(255) NOT NULL,
  `Motherid` int(255) DEFAULT NULL,
  `Fatherid` int(255) DEFAULT NULL,
  `Guardianid` int(255) DEFAULT NULL,
  PRIMARY KEY (`Parentid`),
  KEY `Motherid` (`Motherid`),
  KEY `Fatherid` (`Fatherid`),
  KEY `Guardianid` (`Guardianid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating parent table
INSERT INTO `parent`(`Parentid`,`Motherid`,`Fatherid`,`Guardianid`)VALUES
(101,201,301,NULL),
(102,202,302,NULL),
(103,203,303,NULL),
(104,204,304,NULL),
(105,205,305,NULL),
(NULL,NULL,NULL,006);
-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

DROP TABLE IF EXISTS `registers`;
CREATE TABLE IF NOT EXISTS `registers` (
  `Course_status` varchar(255) NOT NULL,-- completed / Not completed
  `Sid` int(255) DEFAULT NULL,
  `Courseid` int(255) DEFAULT NULL,
  KEY `Sid` (`Sid`),
  KEY `Courseid` (`Courseid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating registers table
INSERT INTO `registers`(`Course_status`,`Sid`,`Courseid`)VALUES
('Not Completed',1111,1000),
('Not Completed',1112,2000),
('Not Completed',1113,3000),
('Not Completed',1114,4000),
('Completed',1115,5000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Sid` int(255) NOT NULL,
  `OrderNumber` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL, -- Name Varchar 
  `Age` int(255) NOT NULL,
  `photo` blob,
  `Parentid` int(255) DEFAULT NULL,
  `Courseid` int(255) DEFAULT NULL,
  `Classid` int(255) DEFAULT NULL,
  `Caretakerid` int(255) DEFAULT NULL,
  PRIMARY KEY (`Sid`),
  KEY `Parentid` (`Parentid`),
  KEY `Courseid` (`Courseid`),
  KEY `Classid` (`Classid`),
  KEY `Caretakerid` (`Caretakerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- populating student table
INSERT INTO `student`(`Sid`,`OrderNumber`,`Name`,`Age`,`photo`,`Parentid`,`Courseid`,`Classid`,`Caretakerid`)VALUES
(1111,1,'Talha',11,'',101,1000,1,100),
(1112,2,'Sabir',13,'',102,2000,2,200),
(1113,3,'Haris',10,'',103,3000,3,300),
(1114,4,'Usman',9,'',104,4000,4,400),
(1115,5,'Hamza',7,'',105,5000,5,500);
-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `Subjectid` int(255) NOT NULL,
  `Courseid` int(255) DEFAULT NULL,
  PRIMARY KEY (`Subjectid`),
  KEY `Courseid` (`Courseid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- populating subject table

INSERT INTO `subject`(`Subjectid`,`Courseid`)VALUES
(1111,1000),
(2222,2000),
(3333,3000),
(4444,4000),
(5555,5000);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
