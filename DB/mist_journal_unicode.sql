-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 08:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mist_journal_unicode`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `issue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `volume`, `issue`) VALUES
(1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `fn` varchar(250) DEFAULT NULL,
  `ln` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `dept` varchar(250) DEFAULT NULL,
  `institution` varchar(250) DEFAULT NULL,
  `affliation` text,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `fax` varchar(250) DEFAULT NULL,
  `foi` text,
  `website` text,
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`fn`, `ln`, `password`, `city`, `state`, `country`, `dept`, `institution`, `affliation`, `email`, `tel`, `fax`, `foi`, `website`, `id`, `author_id`) VALUES
('Pratik', 'Anwar', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'CSE', 'MIST', '', 'pratik.anwar@gmail.com', '01689583182', '', 'Web Development', '', 1, 1),
('Moumita', 'Anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moumita.anwar@gmail.com', NULL, NULL, NULL, NULL, 5, 1),
('Saadat', 'Anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saadat.anwar@gmail.com', NULL, NULL, NULL, NULL, 6, 1),
('Fazle Rabbey', 'Affan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fr.affan@gmail.com', NULL, NULL, NULL, NULL, 7, 1),
('Mr ', 'X', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moumita.anwar@gmail.com', NULL, NULL, NULL, NULL, 8, 1),
('Mr', 'Affan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fr.affan@gmail.com', NULL, NULL, NULL, NULL, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `author_index_article`
--

CREATE TABLE `author_index_article` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `abstract` text,
  `type` varchar(250) DEFAULT NULL,
  `scope` varchar(250) DEFAULT NULL,
  `keywords` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author_index_article`
--

INSERT INTO `author_index_article` (`id`, `author_id`, `title`, `abstract`, `type`, `scope`, `keywords`) VALUES
(52, 1, 'SomeTitle1', 'The electronic publishing process follows some aspects of the traditional paper-based publishing process[5] but differs from traditional publishing in two ways: 1) it does not include using an offset printing press to print the final product and 2) it avoids the distribution of a physical product (e.g., paper books, paper magazines, or paper newspapers). Because the content is electronic, it may be distributed over the Internet and through electronic bookstores, and users can read the material on a range of electronic and digital devices, including desktop computers, laptops, tablet computers, smartphones or e-reader tablets. The consumer may read the published content online a website, in an application on a tablet device, or in a PDF document on a computer. In some cases, the reader may print the content onto paper using a consumer-grade ink-jet or laser printer or via a print on demand system. Some users download digital content to their devices, enabling them to read the content even when their device is not connected to the Internet (e.g., on an airplane flight).', 'Type1', '1', 'Key1 Key2 Key3');

-- --------------------------------------------------------

--
-- Table structure for table `author_submitted_article`
--

CREATE TABLE `author_submitted_article` (
  `id` int(11) NOT NULL,
  `index_article_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author_submitted_article`
--

INSERT INTO `author_submitted_article` (`id`, `index_article_id`, `author_id`, `author_name`, `article`) VALUES
(2, 52, 1, 'Pratik Anwar', 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ce_author_message`
--

CREATE TABLE `ce_author_message` (
  `id` int(11) NOT NULL,
  `ce_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `ce_article` varchar(250) DEFAULT NULL,
  `author_article` varchar(250) DEFAULT NULL,
  `ce_message` text,
  `author_message` text,
  `messge_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ce_author_message`
--

INSERT INTO `ce_author_message` (`id`, `ce_id`, `author_id`, `ce_article`, `author_article`, `ce_message`, `author_message`, `messge_time`) VALUES
(1, 1, 1, 'lab-316.pdf', NULL, 'I have sent an attachment for copyediting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_send_article_to_se`
--

CREATE TABLE `ce_send_article_to_se` (
  `id` int(11) NOT NULL,
  `ce_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ce_send_article_to_se`
--

INSERT INTO `ce_send_article_to_se` (`id`, `ce_id`, `se_id`, `author_id`, `article`) VALUES
(1, 1, 1, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `copy_editor`
--

CREATE TABLE `copy_editor` (
  `id` int(11) NOT NULL,
  `ceFn` varchar(250) DEFAULT NULL,
  `ceLn` varchar(250) DEFAULT NULL,
  `cePassword` varchar(250) DEFAULT NULL,
  `ceCity` varchar(250) DEFAULT NULL,
  `ceState` varchar(250) DEFAULT NULL,
  `ceCountry` varchar(250) DEFAULT NULL,
  `ceInstitute` varchar(250) DEFAULT NULL,
  `ceEmail` varchar(250) DEFAULT NULL,
  `ceTel` varchar(250) DEFAULT NULL,
  `ceFax` varchar(250) DEFAULT NULL,
  `ceWebsite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `copy_editor`
--

INSERT INTO `copy_editor` (`id`, `ceFn`, `ceLn`, `cePassword`, `ceCity`, `ceState`, `ceCountry`, `ceInstitute`, `ceEmail`, `ceTel`, `ceFax`, `ceWebsite`) VALUES
(1, 'Maruf', 'Niaz', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'BUTex', 'maruf.niaz@gmail.com', '01689583182', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `fn` varchar(250) DEFAULT NULL,
  `ln` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `institute` varchar(250) DEFAULT NULL,
  `ad` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `fax` varchar(250) DEFAULT NULL,
  `research` text,
  `website` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`fn`, `ln`, `password`, `city`, `state`, `country`, `institute`, `ad`, `title`, `email`, `tel`, `fax`, `research`, `website`, `id`) VALUES
('Shihab', 'Mahmood', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'BUET', 'associateD', 'professor', 'shihab.mahmood@gmail.com', '01689583182', '', 'Electrical', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `editor_send_article_to_se`
--

CREATE TABLE `editor_send_article_to_se` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `editor_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editor_send_article_to_se`
--

INSERT INTO `editor_send_article_to_se` (`id`, `author_id`, `editor_id`, `se_id`, `article`) VALUES
(1, 1, 6, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `editor_se_message`
--

CREATE TABLE `editor_se_message` (
  `id` int(11) NOT NULL,
  `editor_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `editor_article` varchar(250) DEFAULT NULL,
  `se_article` varchar(250) DEFAULT NULL,
  `editor_message` text,
  `se_message` text,
  `message_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editor_se_message`
--

INSERT INTO `editor_se_message` (`id`, `editor_id`, `se_id`, `editor_article`, `se_article`, `editor_message`, `se_message`, `message_time`) VALUES
(1, 6, 1, 'lab-316.pdf', NULL, 'I have sent an attachment\nEditor: Shihab Mahmood\nArticle: lab 316', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layout_editor`
--

CREATE TABLE `layout_editor` (
  `id` int(11) NOT NULL,
  `leFn` varchar(250) DEFAULT NULL,
  `leLn` varchar(250) DEFAULT NULL,
  `lePassword` varchar(250) DEFAULT NULL,
  `leCity` varchar(250) DEFAULT NULL,
  `leState` varchar(250) DEFAULT NULL,
  `leCountry` varchar(250) DEFAULT NULL,
  `leInstitute` varchar(250) DEFAULT NULL,
  `leEmail` varchar(250) DEFAULT NULL,
  `leTel` varchar(250) DEFAULT NULL,
  `leFax` varchar(250) DEFAULT NULL,
  `leWebsite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proofreader`
--

CREATE TABLE `proofreader` (
  `id` int(11) NOT NULL,
  `pFn` varchar(250) DEFAULT NULL,
  `pLn` varchar(250) DEFAULT NULL,
  `pPassword` varchar(250) DEFAULT NULL,
  `pCity` varchar(250) DEFAULT NULL,
  `pState` varchar(250) DEFAULT NULL,
  `pCountry` varchar(250) DEFAULT NULL,
  `pInstitute` varchar(250) DEFAULT NULL,
  `pEmail` varchar(250) DEFAULT NULL,
  `pTel` varchar(250) DEFAULT NULL,
  `pFax` varchar(250) DEFAULT NULL,
  `pWebsite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proofreader`
--

INSERT INTO `proofreader` (`id`, `pFn`, `pLn`, `pPassword`, `pCity`, `pState`, `pCountry`, `pInstitute`, `pEmail`, `pTel`, `pFax`, `pWebsite`) VALUES
(1, 'Imran', 'Chowdhury', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'AIUB', 'imran.chowdhury@gmail.com', '01689583182', '', ''),
(2, 'Aminul', 'Roton', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'UHSC', 'aminul.roton@gmail.com', '01689583182', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publish_article`
--

CREATE TABLE `publish_article` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `issue` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publish_article`
--

INSERT INTO `publish_article` (`id`, `author_id`, `volume`, `issue`, `order`, `article`) VALUES
(1, 1, 1, 2, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `p_send_article_to_se`
--

CREATE TABLE `p_send_article_to_se` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p_send_article_to_se`
--

INSERT INTO `p_send_article_to_se` (`id`, `p_id`, `se_id`, `author_id`, `article`) VALUES
(1, 1, 1, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` int(11) NOT NULL,
  `rFn` varchar(250) DEFAULT NULL,
  `rLn` varchar(250) DEFAULT NULL,
  `rPassword` varchar(250) DEFAULT NULL,
  `rCity` varchar(250) DEFAULT NULL,
  `rState` varchar(250) DEFAULT NULL,
  `rCountry` varchar(250) DEFAULT NULL,
  `rInstitute` varchar(250) DEFAULT NULL,
  `rAd` varchar(250) DEFAULT NULL,
  `rTitle` varchar(250) DEFAULT NULL,
  `rEmail` varchar(250) DEFAULT NULL,
  `rTel` varchar(250) DEFAULT NULL,
  `rFax` varchar(250) DEFAULT NULL,
  `rResearch` text,
  `rWebsite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `rFn`, `rLn`, `rPassword`, `rCity`, `rState`, `rCountry`, `rInstitute`, `rAd`, `rTitle`, `rEmail`, `rTel`, `rFax`, `rResearch`, `rWebsite`) VALUES
(1, 'Intiser', 'Zaman', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'NSU', 'rBachDeg', 'rLecturer', 'intiser.zaman@gmail.com', '01689583182', '', 'Computer Science', ''),
(2, 'Meftahul', 'Islam', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'BUP', 'rMasDeg', 'rSLecturer', 'meftahul.islam@gmail.com', '01689583182', '', 'Marketting', ''),
(3, 'Nawsheen Rashidi', 'Oyshee', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'MIST', 'rAsscoDeg', 'rProfessor', 'nawsheen.oyshee@gmail.com', '01689583182', '', 'CSE', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_editor`
--

CREATE TABLE `section_editor` (
  `id` int(11) NOT NULL,
  `seFn` varchar(250) DEFAULT NULL,
  `seLn` varchar(250) DEFAULT NULL,
  `sePassword` varchar(250) DEFAULT NULL,
  `seCity` varchar(250) DEFAULT NULL,
  `seState` varchar(250) DEFAULT NULL,
  `seCountry` varchar(250) DEFAULT NULL,
  `seInstitute` varchar(250) DEFAULT NULL,
  `seAd` varchar(250) DEFAULT NULL,
  `seTitle` varchar(250) DEFAULT NULL,
  `seEmail` varchar(250) DEFAULT NULL,
  `seTel` varchar(250) DEFAULT NULL,
  `seFax` varchar(250) DEFAULT NULL,
  `seResearch` text,
  `seWebsite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_editor`
--

INSERT INTO `section_editor` (`id`, `seFn`, `seLn`, `sePassword`, `seCity`, `seState`, `seCountry`, `seInstitute`, `seAd`, `seTitle`, `seEmail`, `seTel`, `seFax`, `seResearch`, `seWebsite`) VALUES
(1, 'Ratul', 'Hasan', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'EWU', 'AssociateD', 'Professor', 'ratul.hasan@gmail.com', '01689583182', '', 'Web Dvelopment', ''),
(2, 'Moumita', 'Anwar', 'pass11', 'Uttara', 'Dhaka', 'Bangladesh', 'EWU', 'AssociateD', 'Lecturer', 'moumita.anwar@gmail.com', '01689583182', '', 'Finance', '');

-- --------------------------------------------------------

--
-- Table structure for table `se_author_message`
--

CREATE TABLE `se_author_message` (
  `id` int(11) NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `se_message` text,
  `author_message` text,
  `se_article` varchar(250) DEFAULT NULL,
  `author_article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_author_message`
--

INSERT INTO `se_author_message` (`id`, `se_id`, `author_id`, `se_message`, `author_message`, `se_article`, `author_article`) VALUES
(1, 1, 1, 'I have sent an attachment.\r\nArticle: lab-316\r\nNeed Changes', NULL, 'lab-316.pdf', NULL),
(2, 1, 1, NULL, 'I have checked and changed the aspects of the article: Lab-316 as the reviewer mentioned.', NULL, NULL),
(3, 1, 1, NULL, NULL, NULL, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `se_ce_message`
--

CREATE TABLE `se_ce_message` (
  `id` int(11) NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `ce_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `se_article` varchar(250) DEFAULT NULL,
  `ce_article` varchar(250) DEFAULT NULL,
  `se_message` text,
  `ce_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_ce_message`
--

INSERT INTO `se_ce_message` (`id`, `se_id`, `ce_id`, `author_id`, `se_article`, `ce_article`, `se_message`, `ce_message`) VALUES
(1, 1, 1, 1, NULL, NULL, 'I have sent an attachment.\nArticle: lab-316', NULL),
(2, 1, 1, 1, NULL, 'lab-316.pdf', NULL, 'I have copyedited the file. \r\nArticle: lab-316');

-- --------------------------------------------------------

--
-- Table structure for table `se_reviewer_meassage`
--

CREATE TABLE `se_reviewer_meassage` (
  `id` int(11) NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `se_message` text,
  `r_message` text,
  `se_article` varchar(250) DEFAULT NULL,
  `r_article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_reviewer_meassage`
--

INSERT INTO `se_reviewer_meassage` (`id`, `se_id`, `r_id`, `se_message`, `r_message`, `se_article`, `r_article`) VALUES
(1, 1, 1, 'I have sent an attachment \nArticle: lab-316', NULL, 'lab-316.pdf', NULL),
(2, 1, 2, 'I have sent an attachment \nArticle: lab-316', NULL, 'lab-316.pdf', NULL),
(3, 1, 1, NULL, 'I have reviewed lab-316', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `se_select_ce`
--

CREATE TABLE `se_select_ce` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `ce_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_select_ce`
--

INSERT INTO `se_select_ce` (`id`, `author_id`, `se_id`, `ce_id`, `article`) VALUES
(1, 1, 1, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `se_select_p`
--

CREATE TABLE `se_select_p` (
  `id` int(11) NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_select_p`
--

INSERT INTO `se_select_p` (`id`, `se_id`, `p_id`, `author_id`, `article`) VALUES
(1, 1, 1, 1, 'lab-316.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `se_select_reviewer`
--

CREATE TABLE `se_select_reviewer` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `se_id` int(11) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `submitted_article` varchar(250) DEFAULT NULL,
  `review_comment` text,
  `rating` varchar(250) DEFAULT NULL,
  `cnc` varchar(250) DEFAULT NULL,
  `figure` varchar(250) DEFAULT NULL,
  `ref` varchar(250) DEFAULT NULL,
  `understable` varchar(250) DEFAULT NULL,
  `format` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_select_reviewer`
--

INSERT INTO `se_select_reviewer` (`id`, `author_id`, `se_id`, `r_id`, `submitted_article`, `review_comment`, `rating`, `cnc`, `figure`, `ref`, `understable`, `format`) VALUES
(1, 1, 1, 1, 'lab-316.pdf', 'Change things. ', 'nc', 'Statements or passages that could be expressed more clearly & concisely', 'Figures that are redundant, difficult to understand or missing', 'Incomplete or missing references', '', ''),
(2, 1, 1, 2, 'lab-316.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `se_send_article_to_editor`
--

CREATE TABLE `se_send_article_to_editor` (
  `id` int(11) NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `editor_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `article` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_send_article_to_editor`
--

INSERT INTO `se_send_article_to_editor` (`id`, `se_id`, `editor_id`, `author_id`, `article`) VALUES
(1, 1, 3, 1, 'lab-316.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_index_article`
--
ALTER TABLE `author_index_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_submitted_article`
--
ALTER TABLE `author_submitted_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_author_message`
--
ALTER TABLE `ce_author_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_send_article_to_se`
--
ALTER TABLE `ce_send_article_to_se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy_editor`
--
ALTER TABLE `copy_editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor_send_article_to_se`
--
ALTER TABLE `editor_send_article_to_se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor_se_message`
--
ALTER TABLE `editor_se_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layout_editor`
--
ALTER TABLE `layout_editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proofreader`
--
ALTER TABLE `proofreader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publish_article`
--
ALTER TABLE `publish_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_send_article_to_se`
--
ALTER TABLE `p_send_article_to_se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_editor`
--
ALTER TABLE `section_editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_author_message`
--
ALTER TABLE `se_author_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_ce_message`
--
ALTER TABLE `se_ce_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_reviewer_meassage`
--
ALTER TABLE `se_reviewer_meassage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_select_ce`
--
ALTER TABLE `se_select_ce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_select_p`
--
ALTER TABLE `se_select_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_select_reviewer`
--
ALTER TABLE `se_select_reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_send_article_to_editor`
--
ALTER TABLE `se_send_article_to_editor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `author_index_article`
--
ALTER TABLE `author_index_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `author_submitted_article`
--
ALTER TABLE `author_submitted_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ce_author_message`
--
ALTER TABLE `ce_author_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ce_send_article_to_se`
--
ALTER TABLE `ce_send_article_to_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `copy_editor`
--
ALTER TABLE `copy_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `editor_send_article_to_se`
--
ALTER TABLE `editor_send_article_to_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `editor_se_message`
--
ALTER TABLE `editor_se_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layout_editor`
--
ALTER TABLE `layout_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proofreader`
--
ALTER TABLE `proofreader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publish_article`
--
ALTER TABLE `publish_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_send_article_to_se`
--
ALTER TABLE `p_send_article_to_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_editor`
--
ALTER TABLE `section_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `se_author_message`
--
ALTER TABLE `se_author_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `se_ce_message`
--
ALTER TABLE `se_ce_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `se_reviewer_meassage`
--
ALTER TABLE `se_reviewer_meassage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `se_select_ce`
--
ALTER TABLE `se_select_ce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `se_select_p`
--
ALTER TABLE `se_select_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `se_select_reviewer`
--
ALTER TABLE `se_select_reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `se_send_article_to_editor`
--
ALTER TABLE `se_send_article_to_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
