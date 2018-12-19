-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 06:50 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `informasi_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_visit`
--

CREATE TABLE IF NOT EXISTS `contact_visit` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `about` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact_visit`
--

INSERT INTO `contact_visit` (`id`, `firstname`, `lastname`, `email`, `subject`, `about`) VALUES
(4, 'Fathin', 'Abdillah', 'muhfathin.0607@gmail.com', 'Thanks', 'i like it'),
(5, 'Fathin', 'Abdillah', 'muhfathin.0607@gmail.com', 'Thanks', 'i like it'),
(6, 'Fathin', 'Abdillah', 'muhfathin.0607@gmail.com', 'Thanks', 'i like it'),
(7, 'ayu', 'ramdani', 'ayulestariramadani@gmail.com', 'arigatou', 'tampilannya lebih diperbaiki'),
(8, 'ayu', 'lestari', 'ayu', 'lestari', 'ayu lestari'),
(9, 'ayu', 'lestari', 'ayu', 'lestari', 'ayu lestari'),
(10, 'ayu', 'lestari', 'ayu', 'lestari', 'ayu lestari'),
(11, 'ayu', 'lestari', 'ayulestariramadani@gmail.com', 'Tugas Tutorial Web', 'dkajdlsajd');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto_dosen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `jabatan`, `foto_dosen`) VALUES
(8, 'Dr. Amil Ahmad Ilham, S.T., M.IT.', 'Lektor Kepala', '5f640cd2084685541fdbb6c1d3d2c1a9.jpg'),
(9, 'Dr-Eng. Zulkifli Tahir, S.T., M.Sc.', 'Asisten Ahli', 'a77f5ab3a94c9d22666859a318119ab1.jpg'),
(10, 'Dr. Eng. Muhammad Niswar, S.T., M.IT.', 'Lektor Kepala', 'fb3acb4bb48477d00588c07ba0c032e4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_aimp`
--

CREATE TABLE IF NOT EXISTS `dosen_aimp` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto_dosen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dosen_aimp`
--

INSERT INTO `dosen_aimp` (`id_dosen`, `nama_dosen`, `jabatan`, `foto_dosen`) VALUES
(7, 'Dr. Ir. Ingrid Nurtanio, M.T.', 'Lektor', '38e4dc8d879469e7202a812272800f5a.jpg'),
(8, 'Dr. Indrabayu,S.T., M.T., M.Bus.Sys.,', 'Lektor Kepala', 'aef44019ac633793396988f0ba581d9f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_iot`
--

CREATE TABLE IF NOT EXISTS `dosen_iot` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto_dosen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dosen_iot`
--

INSERT INTO `dosen_iot` (`id_dosen`, `nama_dosen`, `jabatan`, `foto_dosen`) VALUES
(4, 'Dr. Adnan, S.T., M.T.', 'Lektor', '704aa83a23107db37aa1ace20d505d2b.png');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `email`) VALUES
(1, 'ayulestariramadani@gmail.com'),
(2, 'ayulestariramadani@gmail.com'),
(3, 'muh'),
(4, 'muhfathin.0607@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('user','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(5, 'D42116017', '14003', 'user'),
(6, 'D42116005', 'yuu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhir`
--

CREATE TABLE IF NOT EXISTS `tugasakhir` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `judul_ta` varchar(50) NOT NULL,
  `latarbelakang` varchar(200) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `penulis1` varchar(50) NOT NULL,
  `penulis2` varchar(50) NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `gambar_ta` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tugasakhir`
--

INSERT INTO `tugasakhir` (`id_ta`, `judul_ta`, `latarbelakang`, `abstract`, `tujuan`, `penulis1`, `penulis2`, `pembimbing1`, `pembimbing2`, `gambar_ta`) VALUES
(3, 'Program Konversi Berkas Not Angka Ke Format Musik ', 'Domain permasalahan dalam tugas akhir ini adalah protokol komunikasi musik elektronik yaitu MIDI. Topik yang dipilih dari domain ini adalah cara mengkonversi bahasa tulisan musik yang dipahami oleh ma', 'Pada Tugas Akhir ini dilakukan studi mengenai notasi angka serta struktur dan format file MIDI. Hasil studi dilanjutkan dengan mempelajari cara transformasi not angka menjadi format musik MIDI. Hasil studi dilanjutkan dengan mengimplementasikan cara konversi dan sinkronisasi tersebut dalam sebuah program scorewriters yang berfungsi untuk mengkonversikan not angka menjadi bahasa musik MIDI. Pada akhirnya, dilakukan pengujian terhadap aplikasi yang telah dibangun. Pada tugas akhir ini dikembangkan', 'STUDI LITERATUR a) Sejarah, Elemen Pembentuk dan Notasi Musik Musik adalah salah satu bentuk seni yang tertua. Alat berburu pada masyarakat primitif yang saling dipukulkan mungkin adalah alat musik pe', 'Selvira Afiffa', ' 13504050', 'Dr. Amil Ahmad Ilham, S.T., M.IT.', 'Dr-Eng. Zulkifli Tahir, S.T., M.Sc.', 'ad92634ed0f9af4236dbf47c962c5216.PNG'),
(4, 'Optical Character Recognition Untuk Deteksi Pelat ', 'Untuk membuat aplikasi yang mampu mengidentifikasi pelat nomor kendaraan dalam area kampus teknik unhas yang berada di Kabupaten Gowa dengan menggunakan Local Binary Pattern Cascade Classifier untuk m', 'Membuat aplikasi yang mampu mengenali identitas dan status pemilik kendaraan dalam area kampus', 'Menganalisis akurasi dari implementasi sistem', 'YUSRAN MANSYUR', 'D42113317', 'Dr. Eng Intan Sari Areni, S.T., M.T.', 'Dr Indrabayu S.T., M.T., M.Bus.Sys', '1421d342d9a21d17bdee22627f296fb3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhir_aimp`
--

CREATE TABLE IF NOT EXISTS `tugasakhir_aimp` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `judul_ta` varchar(50) NOT NULL,
  `latarbelakang` varchar(200) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `penulis1` varchar(50) NOT NULL,
  `penulis2` varchar(50) NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `gambar_ta` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tugasakhir_aimp`
--

INSERT INTO `tugasakhir_aimp` (`id_ta`, `judul_ta`, `latarbelakang`, `abstract`, `tujuan`, `penulis1`, `penulis2`, `pembimbing1`, `pembimbing2`, `gambar_ta`) VALUES
(2, 'Study, Analysis, Implementation and Comparison bet', 'Over the past few years, the amount of data in various uses became large. Every minute, data are increasing because data are being used widely in all kinds of industry nowadays. Data are used not only', 'Abstract - Because of the excess use of images in various areas and fields, compression algorithm for image became popular and necessary to reduce the size of the image whenever needed. Different kinds of compression algorithms are developed and used for different purposes and most of them are already standardized by several international organizations. Each algorithm has its own advantages and disadvantages. In this final year project, analysis towards JPEG and JPEG2000 image compression algori', '2. Literature Study 2.1 Digital Image A digital image is a rectangular array of dots, or picture elements, arranged in m rows and n columns. The expression m×n is called the resolution of the image, a', 'Thazin Aungsoe', ' (13504163)', 'Dr. Indrabayu,S.T., M.T.', 'Dr. Ir. Ingrid Nurtanio, M.T.', '98f3cc7e5380c14e5972491fc83bc7c8.png'),
(3, 'APLIKASI PENDETEKSI PLAT NOMOR SECARA REAL-TIME DE', 'Plat nomor kendaraan digunakan sebagai indetitas kendaraan ketika memasuki daerah tertentu. Dalam mencatat kendaraan yang keluar masuk tersebut. Tenaga yang diandalkan hanya tangan manusia. Hal ini te', 'Pada Tugas Akhir ini dilakukan studi mengenai notasi angka serta struktur dan format file MIDI. Hasil studi dilanjutkan dengan mempelajari cara transformasi not angka menjadi format musik MIDI. Hasil studi dilanjutkan dengan mengimplementasikan cara konversi dan sinkronisasi tersebut dalam sebuah program scorewriters yang berfungsi untuk mengkonversikan not angka menjadi bahasa musik MIDI. Pada akhirnya, dilakukan pengujian terhadap aplikasi yang telah dibangun. Pada tugas akhir ini dikembangkan', 'Pada uji coba sistem pembacaan plat nomor, akan dilakukan pengujian akurasi pembacaan karakter dengan pengubahan nilai k pada proses Algoritma K-NN dan pengambilan gambar plat nomor kendaraan ini akan', 'EDI KADIR', 'D42110964', 'Dr. Indrabayu,S.T., M.T.', 'Dr. Ir. Ingrid Nurtanio, M.T.', 'd63dd8360d7ea0af3fda278303503020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhir_iot`
--

CREATE TABLE IF NOT EXISTS `tugasakhir_iot` (
  `id_ta` int(11) NOT NULL AUTO_INCREMENT,
  `judul_ta` varchar(50) NOT NULL,
  `latarbelakang` varchar(200) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `penulis1` varchar(50) NOT NULL,
  `penulis2` varchar(50) NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `gambar_ta` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tugasakhir_iot`
--

INSERT INTO `tugasakhir_iot` (`id_ta`, `judul_ta`, `latarbelakang`, `abstract`, `tujuan`, `penulis1`, `penulis2`, `pembimbing1`, `pembimbing2`, `gambar_ta`) VALUES
(1, 'PERANCANGAN DAN IMPLEMENTASI TRY OUT (UJI COBA) SN', 'Latar Belakang Memasuki era globalisasi, pendidikan formal sangat penting bagi setiap orang. Pendidikan yang bersifat sistematis, berstruktur dan bertingkat dimulai dari sekolah dasar sampai keperguru', 'Dalam persaingan masuk keperguruan Tinggi Negri yang sangat ketat, dibutuhkan persiapan yang matang, salah satunya adalah dengan melakukan Try Out (Uji Coba), agar para peserta yang ingin mengikuti ujian SNMPTN (Seleksi Nasional Masuk Perguruan Tinggi Negri) mendapatkan gambaran bagaimana ujian SNMPTN (Seleksi Nasional Masuk Perguruan Tinggi Negri), maka dengan itu dibutuhkan suatu aplikasi yang dapat membantu para peserta SNMPTN (Seleksi Nasional Masuk Perguruan Tinggi Negri) yang bersifat mobi', 'Tujuan Penelitian 1) Mengidentifikasi bagaimana sistem SNMPTN (Seleksi Nasional Masuk Perguruan Tinggi Negeri). 2) Membangun sebuah aplikasi perangkat lunak mobile yang diharapkan dapat membantu dalam', 'Kristian Ariyanto Zai', '2007-81-049', 'Dr. Adnan, S.T., M.T. ', 'Dr. Ir. Ingrid Nurtanio, M.T.', '562b737ee6b24da88f8ebd54ccedbb08.PNG'),
(2, 'Digital Image Watermarking Berbasis Least Signific', 'Pada tahun 2013, Kementrian Komunikasi dan Informatika (Kemenkominfo) mengungkapkan pengguna internet di Indonesia mencapai 63 juta orang. Dari angka tersebut, 95% menggunakan internet untuk mengakses', 'Bagaimana pengaruh algoritma Least Significant Bit (LSB) dan Discrete Wavelet Transform (DWT) pada digital image watermarking.', 'Menghasilkan informasi perbandingan antara digital image watermarking yang menggunakan algoritma Least Significant Bit (LSB) dengan digital image watermarking yang menggunakan algoritma Discrete Wavel', 'Joshua Neonanda', 'D42113501', 'Dr. Ingrid Nurtanio,M.T', 'Dr.Intan Sari Areni, S.T., M.T.', 'd56bfcf1bedc64e72ec3e36b87f57d61.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
