-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 06:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yojobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `jobid` int(11) NOT NULL,
  `postedby` varchar(400) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `postname` varchar(100) NOT NULL,
  `applicantsname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `work` varchar(1000) NOT NULL,
  `school` varchar(500) NOT NULL,
  `college` varchar(500) NOT NULL,
  `university` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`jobid`, `postedby`, `cname`, `postname`, `applicantsname`, `birthdate`, `email`, `contact`, `address`, `skills`, `work`, `school`, `college`, `university`) VALUES
(8, '', '', ' Salesman', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(6, '', '', ' Analyst', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(4, '', '', ' Manager', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(5, '', '', ' Junior Officer', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(8, '', '', ' Salesman', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(1, '', '', ' Junior Software Developer', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(6, '', ' Yoda', ' Analyst', 'Shakhawat Hoshein Patwari', '1990-02-22', 'shomiq@titumircollege.edu', 2147483647, 'Mirpur', 'South Indian Movie Dekha', 'N/A', 'N/A', 'N/A', 'N/A'),
(4, '', ' Eastern Bank Ltd', ' Manager', 'Jannatul Adon', '1996-10-19', 'na831532@gmail.com', 0, 'Shiddheshwari', 'PHP', 'A lot', 'Wills', '', 'EWU'),
(8, '', ' Trade Point', ' Salesman', 'Jannatul Adon', '1996-10-19', 'na831532@gmail.com', 0, 'Shiddheshwari', 'PHP', 'A lot', 'Wills', '', 'EWU'),
(11, '', ' Eastern Bank Ltd.', ' hshghg', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(7, 'anik@gamil.com', 'Foodiez', ' Cheff', 'Kazi Jahidur Rahaman Riyad', '1996-01-05', 'riyad.jr359@gmail.com', 1534524734, 'DIT', 'PHP', 'Nope', 'KAHS', 'GCCC', 'EWU'),
(1, 'mib@gmail.com', 'Linkstaff Software Ltd.', ' Junior Software Developer', 'Syed Jobayer Arfin', '1997-02-18', 'arfin@nomail.com', 2147483647, 'bashundhara r/a', 'PHP, JAVA, DoT NET, Android App', 'n/a', 'CA', 'DRMC', 'AIUB'),
(2, 'mib@gmail.com', 'Datasoft', ' Software Developer', 'Syed Jobayer Arfin', '1997-02-18', 'arfin@nomail.com', 2147483647, 'bashundhara r/a', 'PHP, JAVA, DoT NET, Android App', 'n/a', 'CA', 'DRMC', 'AIUB'),
(3, 'mib@gmail.com', 'Pi Solutions', ' CEO', 'Syed Jobayer Arfin', '1997-02-18', 'arfin@nomail.com', 2147483647, 'bashundhara r/a', 'PHP, JAVA, DoT NET, Android App', 'n/a', 'CA', 'DRMC', 'AIUB'),
(9, 'raselewu@hotmail.com', 'Eastern Bank Ltd.', ' hshghg', 'Aurin Tabassum', '0000-00-00', 'aurin@putput.com', 0, '', '', '', '', '', ''),
(8, 'raselewu@hotmail.com', 'Trade Point', ' Salesman', 'Kazi Jahidur Rahaman', '1996-01-06', 'riyad.jr359@gmail.com', 2147483647, 'DIT Project R/A', 'C++, C', 'Intern', 'CA', 'GCCC', 'East West University'),
(7, 'anik@gamil.com', 'Foodiez', ' Cheff', '', '2019-12-10', 'sadaf@lol.com', 1688888888, 'hgsfcgsf', 'jhjsg', 'mnxghs', 'jhgjhgd', 'jdghsgd', 'jhsjwgs');

-- --------------------------------------------------------

--
-- Stand-in structure for view `applist`
-- (See below for the actual view)
--
CREATE TABLE `applist` (
`jobid` int(11)
,`postedby` varchar(400)
,`cname` varchar(500)
,`postname` varchar(100)
,`applicantsname` varchar(100)
,`birthdate` date
,`email` varchar(100)
,`contact` int(11)
,`address` varchar(500)
,`skills` varchar(1000)
,`work` varchar(1000)
,`school` varchar(500)
,`college` varchar(500)
,`university` varchar(500)
);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `numberofpost` int(11) NOT NULL,
  `education` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `email`, `cname`, `pname`, `numberofpost`, `education`, `description`) VALUES
(1, 'mib@gmail.com', 'Linkstaff Software Ltd.', 'Junior Software Developer', 0, '', ''),
(2, 'mib@gmail.com', 'Datasoft', 'Software Developer', 0, '', ''),
(3, 'mib@gmail.com', 'Pi Solutions', 'CEO', 0, '', ''),
(4, 'mib@gmail.com', 'Eastern Bank Ltd', 'Manager', 0, '', ''),
(5, 'mib@gmail.com', 'Bangladesh Krishi Bank', 'Junior Officer', 0, '', ''),
(6, 'mib@gmail.com', 'Yoda', 'Analyst', 0, '', ''),
(7, 'anik@gamil.com', 'Foodiez', 'Cheff', 0, '', ''),
(8, 'raselewu@hotmail.com', 'Trade Point', 'Salesman', 100, 'HSC', 'Delivering Products'),
(9, 'raselewu@hotmail.com', 'Eastern Bank Ltd.', 'hshghg', 1113, 'aaaahshaj', 'nsmanm'),
(10, 'raselewu@hotmail.com', 'Eastern Bank Ltd.', 'hshghg', 1113, 'aaaahshaj', 'nsmanm'),
(11, 'raselewu@hotmail.com', 'Eastern Bank Ltd.', 'hshghg', 1113, 'aaaahshaj', 'nsmanm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(40) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `usertype` varchar(30) NOT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `organisation` varchar(100) DEFAULT NULL,
  `skills` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `img` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `birthdate`, `email`, `password`, `usertype`, `contact`, `address`, `organisation`, `skills`, `work`, `school`, `college`, `university`, `img`) VALUES
('Kazi Jahidur Rahaman', '1996-01-06', 'riyad.jr359@gmail.com', '12345', 'seeker', '03687215653', 'DIT Project R/A', 'Pi Corp', 'C++, C', 'Intern', 'CA', 'GCCC', 'East West University', 'photos/Photo1.jpg'),
('Kazi Jahidur Rahaman', NULL, 'riyad.jr359@gmail.com', '1', 'employer', '0', '', '', '', '', '', '', '', ''),
('Jannatul Adon', '1999-02-17', 'na831532@gmail.com', '1234', 'seeker', '999999999999', 'Siddheshwari', 'Yoda', 'PHP, JAVA, DoT NET, Android App', 'YODA', 'Wills', 'Wills', 'EWU', 'photos/51868854_930499370478547_2561674222258618368_n.jpg'),
('Kazi Billaler Rahaman Rasel', '1994-05-15', 'raselewu@hotmail.com', '1234', 'employer', '', 'DIT R/A', 'Eastern Bank Ltd.', 'MS Office, SPSS', 'TradePoint', 'City Corp. Boys School', 'Commerce College CTG', 'EWU, NSU', 'photos/87153.jpg'),
('Kazi Billaler Rahaman', NULL, 'raselewu2@hotmail.com', '1234', 'employer', '0', '', '', '', '', '', '', '', ''),
('Musharrat Islam Barsha', '2017-02-06', 'mib@gmail.com', '12345', 'employer', '999999999999', 'Dhbh', 'qdmnsbanm', 'php', 'nscbns', 'qmnbdw', 'nsbnb', 'xbmsnbx', 'photos/25552398_1742024132771940_3180375020418977635_n.jpg'),
('S. M. Muhaiminul Haque Anik', '2008-07-29', 'anik@gamil.com', '12345', 'employer', '0191883893', 'Banasree', 'Foodiez', 'Cricket', 'Keeping', 'NIS', 'NIC', 'EWU', ''),
('Shakhawat Hoshein Patwari Somiq', '1995-07-04', 'shomiq@titumircollege.edu', '12345', 'seeker', '1987482164872', 'Badda, Dhaka', 'Toto Company', 'MS Office, Ghumaite Pari, Tamil Movie Dekhte Pari', 'Khai Khai Company', 'Monurhat High School', 'Monurhat College', 'Titumir College', 'photos/1.jpg'),
('Syed Jobayer Arfin', '1997-02-18', 'arfin@nomail.com', '12345', 'seeker', '0021902819082', 'bashundhara r/a', 'datasoft', 'PHP, JAVA, DoT NET, Android App', 'n/a', 'CA', 'DRMC', 'AIUB', ''),
('Aurin Tabassum', '1996-02-13', 'aurin@putput.com', '1234', 'seeker', '01688888888', 'jatrabari', 'datasoft', 'shob pare', 'rannabanna', 'akschool', 'city college', 'EWU', 'photos/IMG-20160730-WA0005_1.jpg'),
('ABCD', NULL, 'ABC@gmail.com', '1111', 'employer', NULL, NULL, NULL, '', '', '', '', '', ''),
('', '2019-12-10', 'sadaf@lol.com', '11111', 'seeker', '01688888888', 'hgsfcgsf', 'hxhgsav', 'jhjsg', 'mnxghs', 'jhgjhgd', 'jdghsgd', 'jhsjwgs', 'photos/11049655_10206048886155010_91106920464599459_n.jpg');

-- --------------------------------------------------------

--
-- Structure for view `applist`
--
DROP TABLE IF EXISTS `applist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `applist`  AS  select `applications`.`jobid` AS `jobid`,`applications`.`postedby` AS `postedby`,`applications`.`cname` AS `cname`,`applications`.`postname` AS `postname`,`applications`.`applicantsname` AS `applicantsname`,`applications`.`birthdate` AS `birthdate`,`applications`.`email` AS `email`,`applications`.`contact` AS `contact`,`applications`.`address` AS `address`,`applications`.`skills` AS `skills`,`applications`.`work` AS `work`,`applications`.`school` AS `school`,`applications`.`college` AS `college`,`applications`.`university` AS `university` from `applications` where (`applications`.`postedby` = 'mib@gmail.com') group by `applications`.`postname` order by `applications`.`jobid` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
