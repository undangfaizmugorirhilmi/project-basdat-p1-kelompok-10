-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Undang Felix Cahyanto', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1352025327_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `diskusi_id` int(11) NOT NULL,
  `diskusi_posting` int(11) NOT NULL,
  `diskusi_tanggal` datetime NOT NULL,
  `diskusi_member` int(11) NOT NULL,
  `diskusi_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`diskusi_id`, `diskusi_posting`, `diskusi_tanggal`, `diskusi_member`, `diskusi_isi`) VALUES
(12, 8, '2023-11-18 13:14:14', 16, '<p>ya bego lu</p>'),
(13, 8, '2023-11-19 16:35:07', 16, '<p>a</p>'),
(14, 8, '2023-11-21 06:36:26', 16, '<p>a</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Umum'),
(23, 'Kesehatan Kucing'),
(24, 'Adopsi Kucing');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_nama` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_hp` varchar(20) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_alamat` text NOT NULL,
  `member_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_nama`, `member_email`, `member_hp`, `member_password`, `member_alamat`, `member_foto`) VALUES
(15, 'Anya Dyah', 'violetevergarden@gmail.com', '110', 'dcacb1dc144e8de33ce954da79ab34c0', 'Leidenschaftlich', ''),
(16, 'Violet Evergarden', 'violetevergarden2@gmail.com', '083811839193', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Leidenschaftlich', ''),
(17, 'Violet Evergarden', 'violetevergarden3@gmail.com', '0999', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Leidenschaftlich', '');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `posting_tanggal` datetime NOT NULL,
  `posting_member` int(11) NOT NULL,
  `posting_kategori` int(11) NOT NULL,
  `posting_judul` varchar(255) NOT NULL,
  `posting_isi` text NOT NULL,
  `posting_dibaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`posting_id`, `posting_tanggal`, `posting_member`, `posting_kategori`, `posting_judul`, `posting_isi`, `posting_dibaca`) VALUES
(7, '2023-11-09 14:52:49', 14, 23, 'Kucing aku sakitt AAAAA', '<p>Kucing aku bentol gede kenapa yang tolong plissss takut mati anjir hehehe</p>', 1),
(8, '2023-11-09 14:58:50', 15, 23, 'Kucing aku sakitt AAAAA TOLONGGG', '<p>Kucing aku bentol2 anjirr tuluung gimana ini hiks pliss<img src=\"http://<br />\r\n<b>Warning</b>:  move_uploaded_file(gambar/diskusi/3def184ad8f4755ff269862ea77393dd.jpeg): Failed to open stream: Permission denied in <b>/Applications/XAMPP/xamppfiles/htdocs/project_forum/summernote_upload.php</b> on line <b>13</b><br />\r\n<br />\r\n<b>Warning</b>:  move_uploaded_file(): Unable to move &amp;quot;/Applications/XAMPP/xamppfiles/temp/phpV96qE3&amp;quot; to &amp;quot;gambar/diskusi/3def184ad8f4755ff269862ea77393dd.jpeg&amp;quot; in <b>/Applications/XAMPP/xamppfiles/htdocs/project_forum/summernote_upload.php</b> on line <b>13</b><br />\r\nlocalhost/project_forum/gambar/diskusi/3def184ad8f4755ff269862ea77393dd.jpeg\"></p>', 101),
(9, '2023-11-23 10:39:08', 17, 1, 'Kucing aku sakitthelp', '', 2),
(10, '2023-11-23 10:42:49', 17, 1, 'Kucing aku sakitt AAAAA', '<p>hh</p>', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`diskusi_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `diskusi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
