-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 05:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `foto_customer` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `phone`, `email`, `address`, `foto_customer`, `password`, `created_at`, `updated_at`) VALUES
(6, 'Saifuloh', 'Jamil', '09876333342', 'admin@mail.com', 'jakarta utara', '', '$2y$10$SrsHcGuOwBCOxZ2GiNLhceDjNH7/KJ8uSGyPvA92TvA5P.PO495xa', '2023-10-11 03:30:17', '2023-10-13 03:27:39'),
(7, 'Andreas', 'Aji', '089455453432', '2110512045@mahasiswa.upnvj.ac.id', 'Jl. Latumenten 2 Jakarta', '', '$2y$10$pt3jE/6kLAKpvvs8CSG6puAyQunbzeGIIzeKoHP.zXUt6RAlPTj5a', '2023-10-11 03:43:57', '2023-10-13 03:54:39'),
(8, 'Andreas', 'Aji', NULL, 'andreasaji@gmail.com', NULL, '', '$2y$10$kN5gqnLNS93giwSbq68GBOQBAOVoi3syEKWONAKe88fkaFs5LMVLq', '2023-10-11 04:20:37', '2023-10-11 04:20:37'),
(9, 'Elkan', 'Baggott', NULL, 'elkanbaggot@gmail.com', NULL, '', '$2y$10$defX7MhDNNBkb/AOkcDhrePuZBOBbU11cOGuMFaRs11BqXE01TdNC', '2023-10-11 06:26:40', '2023-10-11 06:26:40'),
(10, 'Boaz', 'Salossa', NULL, 'boaz@gmail.com', NULL, NULL, '$2y$10$hOeTjIuFrJuTloJxflk/2uTdBkA68ScUrfkqTAp6ThgytbJh9ULV6', '2023-10-13 03:35:00', '2023-10-13 03:35:00'),
(11, 'andik', 'alim', NULL, 'andik@gmail.com', NULL, NULL, '$2y$10$3qTeQU6CypIDomyMe2cEf.a2qejQoE6koz6uzRj2V2bwPnmiCPiZq', '2023-10-13 03:49:31', '2023-10-13 03:49:31'),
(12, 'Andreas', 'Aji', '089653764622', 'andreasaji2002@gmail.com', 'Grogol Jakarta Barat', NULL, '$2y$10$KwE2c5tvOSEPn0ZZBNrHM.PCQwJ.3MfY0p5/vAIGWnKFoWoU7CafW', '2023-10-13 11:37:01', '2023-10-13 11:39:27'),
(13, 'Mesut', 'Ozil', NULL, 'ozil@gmail.com', NULL, NULL, '$2y$10$J2RCJve7pClS31BL3vlqf.gp59IrF2nfmW3wstv9InWIxLp5p7KE.', '2023-10-13 11:55:14', '2023-10-13 11:55:14'),
(14, 'Ruben', 'Diaz', '081214314131', 'rudi@gmail.com', 'Pamulang', NULL, '$2y$10$iXzYUdIjTlzfBCUdWM6ADubL0W0KyVmqrVJGg5SextRmmLWIwHCx2', '2023-10-13 12:02:47', '2023-10-13 12:03:15'),
(15, 'Muhammad', 'Zaky', NULL, 'zaky@gmail.com', NULL, NULL, '$2y$10$TFmUG4RV88rdwLAfUcrWs.2Y6Sdf5PS5ABNiTXob6pVGRXHbgooLG', '2023-10-14 02:04:41', '2023-10-14 02:04:41'),
(16, 'Muhammad', 'Ibnu', NULL, 'ibnu@gmail.com', NULL, NULL, '$2y$10$lnOr6g2OkOS7LFQQ.V3rNOBUw/e4AV4hQmt6cNl3D2JxPALQdxHGS', '2023-10-14 02:05:55', '2023-10-14 02:05:55'),
(17, 'Andreas', 'Aji', NULL, 'aji@gmail.com', NULL, NULL, '$2y$10$sGn6ucOdU9HebAgJahfTHu3CIFdsmL8SqsS0xplsd1zBPTZ0Ydp/O', '2023-10-14 07:28:36', '2023-10-14 07:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Event', 'Rayakan perayaan dan acara terbaik dengan tempat pilihan terbaik dan akses lebih mudah.', 'pgzyadfTjAZUT3L8Pc7aHUMpH8NdMb-metaZmFzaWxpdGFza2FtaTEuc3Zn-.svg', '2023-10-11 07:01:27', '2023-10-11 07:03:49'),
(2, 'Meeting', 'Ruang rapat nyaman, menciptakan suasana ideal untuk pertemuan bisnis yang efektif dan produktif', 'hE61DRByydozrF16Q4oReIpm9t6nJg-metaZmFzaWxpdGFza2FtaTIuc3Zn-.svg', '2023-10-11 07:03:18', '2023-10-11 07:03:56'),
(3, 'Photo Shoot', 'Ruang foto dengan design profesional, memberikan pengalaman pemotretan yang baik.', 'JoYIqByOmfcfHoTtAxIQTixCBuGhQr-metaZmFzaWxpdGFza2FtaTMuc3Zn-.svg', '2023-10-11 07:04:22', '2023-10-11 07:15:21'),
(4, 'Video Shoot', 'Ruang video shoot lengkap untuk menciptakan hasil video yang memukau dan profesional.', 'mCHe9IKUieW8v384zcqvasqbhrJ4eW-metaZmFzaWxpdGFza2FtaTQuc3Zn-.svg', '2023-10-11 07:04:55', '2023-10-11 07:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE `hosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `foto_host` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`id`, `username`, `nama_toko`, `firstname`, `lastname`, `phone`, `telp`, `email`, `address`, `foto_host`, `password`, `created_at`, `updated_at`) VALUES
(1, 'kapiswara', 'Resort Mewah', 'Andreas', 'Aji', '089653764622', '', 'andreasaji2002@gmail.com', 'Jakarta Barat', '', 'yellowclaw', '2023-10-11 05:08:49', '2023-10-11 23:55:25'),
(2, '', '', 'Lionel', 'Messi', NULL, '', 'lionelmessi@gmail.com', NULL, '', '$2y$10$tgAThr0bastgANI8qhn/SeEvocT6ZA0oKyIIRpWC4iFWw5bMoVOo6', '2023-10-11 07:44:24', '2023-10-11 07:44:24'),
(3, 'andreeee', 'andrespace', 'Andreas', 'Aji', '08123123123', '0212233456', 'andreasaji83@gmail.com', 'Grogol Jakarta Barat', '', '$2y$10$QiGKLNFWIrHje2RMfiL/r.s3rvG.YWEhehjDkAATxH2FRSz81dQe6', '2023-10-11 09:43:23', '2023-10-13 05:43:44'),
(4, 'thohirs', 'thohirss', 'Erick ', 'Thohir', '0812123123123', '', 'thohir@gmail.com', 'Kemang Jakarta Selatan', NULL, 'YELLOWCLAW', '2023-10-12 23:56:41', '2023-10-12 23:56:41'),
(5, 'radityadika', 'dikastore', 'Raditya', 'Dika', '08123123123', '021234234', 'dika21@gmail.com', 'Kemang Jakarta Selatan', NULL, '$2y$10$0aeOQT1/.VkczfeC4/rrcuMyAXx1vsrxRWeVE/JSGT0Cb9fpj.QlK', '2023-10-12 23:58:50', '2023-10-13 09:56:14'),
(6, 'ernestprakasa', 'nestttt', 'Ernest', 'Prakasa', '08234234234', '', 'ernest@gmail.com', 'BSD Tangerang Selatan', NULL, '$2y$10$WJyUdJqPgMthBGFzraeAG.F1jCeti9EURV4weCSSioIxmUWR0gP.y', '2023-10-12 23:59:29', '2023-10-13 00:02:31'),
(7, NULL, NULL, 'Andreas', 'Aji', NULL, NULL, 'andreasaji2002@gmail.com', NULL, NULL, '$2y$10$IPGUNAtLBi4.DxrOfoOGDuZnwWqwRbrbmStuV4AwEyAyFJFPMX.H2', '2023-10-13 11:40:43', '2023-10-13 11:40:43'),
(8, NULL, NULL, 'Andreas', 'Aji', NULL, NULL, 'andreasaji2002@gmail.com', NULL, NULL, '$2y$10$xMkbWJS948wTKJh9aZ8GxuTek9iClmtlEpkX.a.Huvu.3.5Do5quS', '2023-10-13 11:41:19', '2023-10-13 11:41:19'),
(9, 'dimsss', 'dimasshop', 'Dimas', 'Drajad', '081329029900', '0212323231', 'dimas@gmail.com', 'Jelambar', NULL, '$2y$10$9CddD0xXt0G6hFkTWYdzVOtpvFWN/2EYxJgmC4bgNEUzyNna0LfBO', '2023-10-13 11:42:09', '2023-10-13 11:48:51'),
(10, 'tiboooo', 'tibostore', 'Titus', 'Bonai', '08113513315', '021143135', 'tibo@gmail.com', 'Jelambar', NULL, '$2y$10$rPM4BANvcRFOaEAvOB038.OtFJK7aZIE4rhS5O5lm7vMkKRc16ocG', '2023-10-13 11:56:19', '2023-10-14 06:44:29'),
(11, 'yuniiiiii', 'yunishop', 'Yuni', 'Shara', '081324468902', '02133445556', 'yuni@gmail.com', 'Tomang Tinggi Jakbar', NULL, '$2y$10$Wc/Q4HPhr1nYE4QPlStEi.l1uWq6FsIpif3lnMWHH..8Wl6G6Ku2i', '2023-10-13 11:59:27', '2023-10-13 12:00:19'),
(12, NULL, NULL, 'Ruben', 'Sanada', NULL, NULL, 'sanada@gmail.com', NULL, NULL, '$2y$10$06UececAapUo.Rtw.RK7aeycGeTjKdxbUO0kTB/SmYe3Br0pmMPVi', '2023-10-14 02:06:23', '2023-10-14 02:06:23'),
(13, NULL, NULL, 'Luiz', 'Diaz', NULL, NULL, 'diaz@gmail.com', NULL, NULL, '$2y$10$4GGgf9ZwX.QeOzQU14Pne.yuOHi5jipATKD6l/e/jMtv1jA0WcNf6', '2023-10-14 02:07:52', '2023-10-14 02:07:52'),
(14, NULL, NULL, 'Admin', 'Admin', NULL, NULL, 'admin@mail.com', NULL, NULL, '$2y$10$VUclIa4RR/KBw9vI9cC4QeZ7LbwlmdMLVDaltV8SI1XfMWq//QuJy', '2023-10-14 02:17:20', '2023-10-14 02:17:20'),
(15, 'bamstoko', 'bambangtoko', 'Bambang', 'Pamungkas', '083141434111', '0212202090', 'bambang@gmail.com', 'Pondok Labu', NULL, '$2y$10$5OpV4yDUIqnTsVCXG0uE6e8r.yRpzW8VNtG68rVkIIFKN4KZsU05m', '2023-10-14 06:33:58', '2023-10-14 06:34:35'),
(16, NULL, NULL, 'Andi', 'Setiawa', NULL, NULL, 'andi@gmail.com', NULL, NULL, '$2y$10$KMehbxn6PiOkHhkgj4C1U.DEv8t9uhSnkEUjUAA8fc4YvfhybzqFu', '2023-10-14 07:27:27', '2023-10-14 07:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_11_052937_create_users_table', 2),
(6, '2023_10_11_071622_create_customers_table', 3),
(7, '2023_10_11_071622_create_hosts_table', 3),
(8, '2023_10_11_103932_table_user', 4),
(9, '2023_10_11_123226_create_reviews_table', 5),
(10, '2023_10_11_134148_create_facilities_table', 6),
(11, '2023_10_12_060346_tambah_kolom_host', 7),
(12, '2023_10_12_060906_rename_kolom_host', 8),
(13, '2023_10_12_061212_tambah_kolom_customer', 9),
(14, '2023_10_12_061537_create_products_table', 10),
(15, '2023_10_12_063434_create_product_host_table', 11),
(16, '2023_10_12_093956_create_product_facility_table', 12),
(17, '2023_10_12_094234_tambah_kolom_products', 13),
(18, '2023_10_12_094941_create_product_facility_table', 14),
(19, '2023_10_13_112851_tambah_kolom_telp', 15),
(20, '2023_10_13_113900_tambah_kolom_telpo', 16),
(21, '2023_10_13_181751_tambah_kolom_hidden', 17),
(22, '2023_10_13_182056_tambah_kolom_verify', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verify` tinyint(1) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nomor_penjual` varchar(255) DEFAULT NULL,
  `luas_tanah` varchar(255) DEFAULT NULL,
  `luas_bangunan` varchar(255) DEFAULT NULL,
  `kamar_mandi` varchar(255) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `kapasitas` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `verify`, `nama`, `kategori`, `informasi`, `provinsi`, `kota`, `kecamatan`, `harga`, `username`, `nomor_penjual`, `luas_tanah`, `luas_bangunan`, `kamar_mandi`, `periode`, `kapasitas`, `deskripsi`, `thumbnail`, `foto1`, `foto2`, `foto3`, `foto4`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ruang Kantor SCBD', 'Meeting', 'Ruangan Kantor Daerah SCBD', 'DKI Jakarta', 'Jakarta Pusat', 'Kuningan', 20000000, '1', '089653764622', '200', '400', '5', 'Bulan', 75, 'Disewakan perkantoran di sudirman, Jakarta Selatan  Luas tanah : 1594 Luas bangunan : 7.650 Kamar mandi per lantai ada 5 Daya listrik : 860 KVA Sumber air : PAM Lokasi bebas banjir Jalan masuk 2 mobil Akses tol becak kayu, stasiun cawang', '8abBGvQLhesL0j4QcN7NIitsgUkxuz-metaaW1hZ2UxLnN2Zw==-.svg', 'iuZazDPNdVdWTe1bHPcf581sr0gker-metaaW1hZ2UyLnN2Zw==-.svg', 'UzfyV8yM4QjvwqcWAx8ItpREMd3ZzH-metaaW1hZ2UzLnN2Zw==-.svg', 'YItlzTbheqT6E103GEKSqhWQt5GNAl-metaaW1hZ2U0LnN2Zw==-.svg', 'wgg3q3hqyGuDWgY02vojb81n5AyeJr-metaaW1hZ2U1LnN2Zw==-.svg', '2023-10-12 02:18:36', '2023-10-13 11:26:20'),
(2, 1, 'Kemang\'s Photo', 'Photo Shoot', 'Studio Foto Modern di Kemang', 'DKI Jakarta', 'Jakarta Selatan', 'Kemang', 1000000, '1', '089653764622', '90', '70', '5', 'Tahun', 20, 'Studio Foto yang menampilkan nuansa modern yang memikat para pengunjung', 'oVCAp9Xwi9RSzC5P2zkSiRSG1uwmwb-metaYXJ0aXN0LXByb3BzLXBob3RvZ3JhcGh5LXN0dWRpby0yMDIxMDgyNDA0MDMwOS5qcGc=-.jpg', NULL, NULL, NULL, NULL, '2023-10-12 03:30:05', '2023-10-13 11:28:37'),
(3, 1, 'Boiler\'s Office', 'Meeting', 'Ruang perkantoran dengan view citylight di daerah Kuningan Jakarta', 'DKI Jakarta', 'Jakarta Selatan', 'Kuningan', 50000000, '1', '089653764622', '200', '250', '29', 'Bulan', 500, 'Ruang kantor mewah dilengkapi access card untuk ruangan dan lift', 'qUZI3PXI7Cxh56c4glFNKdPN7MuJg8-metaMWMxNEUxMzFhMWgxNDFrLjFfMTEuanBn-.jpg', NULL, NULL, NULL, NULL, '2023-10-12 03:48:59', '2023-10-13 11:28:46'),
(4, 1, 'Bonjer\'s Hall', 'Event', 'Aula besar nan megah yang mampu menampung ratusan orang untuk dapat mengikuti event yang diselenggarakan', 'DKI Jakarta', 'Jakarta Barat', 'Kebon Jeruk', 250000000, '1', '089653764622', '400', '350', '30', 'Tahun', 300, 'Aula besar nan megah yang dapatt menampung banyak orang untuk event yang anda selenggarakan', 'UiHLau8zJCofcBFhSyOwk9d2gO5Gw8-metaZ2FuZGFyaWEtY2l0eS1oYWxsLXNld2EtZnVuY3Rpb24tcm9vbS1qYWthcnRhLXNlbGF0YW4tbGFyZ2UuanBn-.jpg', NULL, NULL, NULL, NULL, '2023-10-12 04:08:48', '2023-10-13 11:28:55'),
(5, 1, 'Raja Foto Studio', 'Photo Shoot', 'Melayani semua aktifitas foto anda', 'Sumatera Utara', 'Medan', 'Medan', 500000, '1', '089653764622', '90', '75', '3', 'Tahun', 20, 'Melayani semua aktifitas foto anda', 'i2pFqbkJFqzxRTwhGoxWpVzt7gP8xo-metac3R1ZGlvLWZvdG9fMTY5LmpwZWc=-.jpg', NULL, NULL, NULL, NULL, '2023-10-12 10:45:38', '2023-10-13 11:29:06'),
(6, 1, 'Cibubur Meeting Room', 'Meeting', 'Tempat meeting yang nyaman', 'DKI Jakarta', 'Jakarta Timur', 'Cibubur', 123000000, '1', '089653764622', '70', '50', '9', 'Tahun', 100, 'Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil     ', 'kRdtBcWHmY4xhpANaINCspJ6U0OtMc-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'oyblfylyadrvdt1znR4AsmTCD6q3Jm-metaaW1hZ2VzICgyKS5qcGc=-.jpg', '9IAOV5SUIP7MeeZKNsi7YvOyL4FCeU-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', 'EP4xrou6Nd4eiApltKqYTNRbknIlnk-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', 'dkTetRtZXXyyQH0hfG86gLLL7AlnST-metaZG93bmxvYWQgKDQpLmpwZw==-.jpg', '2023-10-12 23:49:39', '2023-10-13 11:29:16'),
(7, 1, 'UpMeet', 'Meeting', 'Ruang rapat dengan akses mudah ke tol JORR', 'DKI Jakarta', 'Jakarta Selatan', 'Ragunan', 300000000, '4', '08123123123', '200', '100', '19', 'Tahun', 180, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'r7LQ0iMWXxOAidNJwh2MQ6VmcfpVmL-metaaW1hZ2VzICgyKS5qcGc=-.jpg', 'P2QLdN7oJVY8LG7NNvCAwi5hvmi5bg-metaZG93bmxvYWQgKDQpLmpwZw==-.jpg', 'W7cMyPxNcJK9Ql6A09o0lipFGDEckc-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'iOwHLLo4ktOmRIFz8ghPBQqtO6Bjmy-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', 'mtsJ3NUtbFiaJ8nOWFMZRRhV6ZB9lf-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', '2023-10-13 00:05:32', '2023-10-13 11:29:26'),
(8, 1, 'MeetingYuks', 'Meeting', 'Ruang meeting nyaman di Utara Jakarta', 'DKI Jakarta', 'Jakarta Utara', 'Pluit', 135000000, '6', '08234234234', '200', '180', '39', 'Bulan', 200, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'K6xOA7mqsV70LHqvztxQ0xvXHyvoTJ-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', 'EAiUoUjHS6KdMZqokq7xgPptpJODaz-metaZG93bmxvYWQgKDQpLmpwZw==-.jpg', '3X5Nb0ZavDHogQUQye4DeeR4r7cEPk-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'FfhePBzG9rwKzmdfnPadTDCJcfIK5X-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', 's1w2ZtlvZm1L93HoSxKQLWsGc7NEz5-metaaW1hZ2VzICgyKS5qcGc=-.jpg', '2023-10-13 00:07:44', '2023-10-13 11:29:37'),
(9, 1, 'UNJ Hall', 'Event', 'Aula besar di Kampus UNJ', 'DKI Jakarta', 'Jakarta Timur', 'Rawamangun', 100000000, '5', '08123123123', '150', '100', '10', 'Bulan', 1000, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', '5xxPcWjHVADBalWD72WGjudVtsXD2X-metaaW1hZ2VzICgzKS5qcGc=-.jpg', 'Oo1n0NtWcROGBUYkbGJyxjxZc4flsl-metaaW1hZ2VzICgyKS5qcGc=-.jpg', 'fmtiKkYhTf8jmgXWg7tY2RGkWypjeW-metaaW1hZ2VzICgxKS5qcGc=-.jpg', 'bRu172dtBcN6KbpCUZvnWAd5bRrxJ2-metaaW1hZ2VzICg1KS5qcGc=-.jpg', 'jglUxIitGkEouH8szgOD0JsFDKBS0B-metaaW1hZ2VzICg0KS5qcGc=-.jpg', '2023-10-13 00:14:19', '2023-10-13 11:29:47'),
(10, 1, 'Med\'s Hall', 'Event', 'Ruangan aula besar di pusat kota Medan', 'Sumatera Utara', 'Medan', 'Medan', 120000000, '5', '0813123123', '400', '300', '25', 'Tahun', 500, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'CX9FGJuVvQY6BcaO4o0KGeJfJG0Ead-metaaW1hZ2VzLmpwZw==-.jpg', 'uWMtRgesSf3TboeroqBbuwF7c3lTfv-metaZG93bmxvYWQuanBn-.jpg', '15DrjnaoyBXt5Bwa5NGCvaK1ZMgy1n-metaaW1hZ2VzICg0KS5qcGc=-.jpg', 'lMdzB9bRmoqDQfJX6ev3bCLIlfL042-metaaW1hZ2VzICgzKS5qcGc=-.jpg', '6pbcPJPSTGfwXHIX6owF2S8ovCsZCX-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', '2023-10-13 00:38:49', '2023-10-13 11:29:57'),
(11, 1, 'Aula Bhineka Tunggal Ika', 'Event', 'Aula besar di kampus UPNVJ', 'DKI Jakarta', 'Jakarta Selatan', 'Pondok Labu', 150000000, '1', '089653764622', '150', '100', '10', 'Tahun', 200, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', '5oFYqhP3a1rqfZqpg5XiT2ywFUelaZ-metaaW1hZ2VzICgyKS5qcGc=-.jpg', 'vWds4vtQAjbKXAlGbvVxXmlBLY8kyB-metaaW1hZ2VzICg1KS5qcGc=-.jpg', 'YhZWSM3X878ajih77Suziqp46dDglD-metaaW1hZ2VzICgxKS5qcGc=-.jpg', 'xoiQt3RhhVYtaBdMuN0uwnLCptNHf1-metaZG93bmxvYWQuanBn-.jpg', 'pDl51pfysRkisyl1jmuhFfPz3hk3d8-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', '2023-10-13 00:41:38', '2023-10-13 11:34:32'),
(12, 1, 'NextStudio', 'Video Shoot', 'Studio untuk shooting video terbesar di Harmoni', 'DKI Jakarta', 'Jakarta Pusat', 'Harmoni', 250000000, '6', '08234234234', '200', '180', '10', 'Tahun', 100, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'CpYN5kFuBwriNrUzDt7C5KbtTECPYq-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', 'qWtMvC2h1COZcSiVP9mQKwgCcC0PlP-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', 'MzwZNlu76uR5jQsRTTmP4WhX1fgGSU-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'deTRc37ZxJmRvKosvp1zIoC3JxPJVf-metaZG93bmxvYWQuanBn-.jpg', 'QeVqgRKHTBwMVAaDwhlH7sgdfrGaNa-metaaW1hZ2VzLmpwZw==-.jpg', '2023-10-13 00:44:11', '2023-10-13 11:34:39'),
(13, 1, 'Kota Medan Studio', 'Video Shoot', 'Studio Video di pusat kota Medan', 'Sumatera Utara', 'Medan ', 'Medan', 200000000, '5', '08123123123', '200', '190', '20', 'Bulan', 15, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'YrGyfBx28R4ThShVjC31CH3U2ERNlu-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'LU0lSy4beLI1D6cKkmQEgQH9PZJUy1-metaZG93bmxvYWQgKDQpLmpwZw==-.jpg', 'P7m74bh792E9xdddFw41ko4XLGHtvi-metaaW1hZ2VzLmpwZw==-.jpg', '4PJeo1tGhIi0l7WcKoNCOzGyV1BMUu-metaaW1hZ2VzICgxKS5qcGc=-.jpg', 'XX6um1leOEAHJyeAIH0u68LBSna92m-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', '2023-10-13 00:47:50', '2023-10-13 11:34:46'),
(14, 1, 'Ned\'s Photo', 'Photo Shoot', 'Studio foto terbesar di Grogol', 'DKI Jakarta', 'Jakarta Barat', 'Grogol Petamburan', 200000000, '4', '08131313131313', '100', '75', '10', 'Tahun', 25, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', 'lUhDhEWNOLm4GS8mJyKjziHZmBFQ1R-metaaW1hZ2VzLmpwZw==-.jpg', 'phZTRWQxgqDQ7XkEUSuZMdp8mC8KKO-metaZm90b29vby5qcGc=-.jpg', '4oS0lue03wqzhaZojXpyHyyloo74Ri-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', 'LHZ5fKervKgRFqkTqtmcjfNd4p7RTM-metaZG93bmxvYWQuanBn-.jpg', '7L0tnHpbSeqO591NvODTkaBy4UY7JB-metac3R1ZGlvLWZvdG9fMTY5LmpwZWc=-.jpg', '2023-10-13 00:53:04', '2023-10-13 11:34:52'),
(15, 1, 'Upbeat Entertainment', 'Video Shoot', 'Studio rekaman untuk video terbesar di Sudirman', 'DKI Jakarta', 'Jakarta Pusat', 'Sudirman', 300000000, '1', '089653764622', '200', '150', '10', 'Bulan', 50, ' Luas tanah : 1594                  Luas bangunan : 7.650                  Kamar mandi per lantai ada 5                  Daya listrik : 860 KVA                  Sumber air : PAM                  Lokasi bebas banjir                  Jalan masuk 2 mobil    ', '2Z98OFMjpQIZ0PA21WjxKZGfY1omoG-metaaW1hZ2VzLmpwZw==-.jpg', '0JB8ikA6r58IN0i6wC11fu3VhmkwIj-metaZG93bmxvYWQgKDEpLmpwZw==-.jpg', 'zIQ7desVXhEB1zGdJqA5aLy85WF9rP-metaZG93bmxvYWQgKDQpLmpwZw==-.jpg', 'gFsZdbAZ0HPqt9M2toqbrBCKmmjeg9-metaZG93bmxvYWQgKDMpLmpwZw==-.jpg', 'PWrW4pl69Xmi4ZdRRv2UIJubzOP8ck-metaZG93bmxvYWQgKDIpLmpwZw==-.jpg', '2023-10-13 00:56:39', '2023-10-13 11:34:59'),
(16, 0, 'aaaaaaaaaaa', 'Event', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaawwwwwwwwww', 22222222, NULL, NULL, NULL, NULL, NULL, NULL, 20, 'aaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, '2023-10-13 07:20:05', '2023-10-13 07:20:05'),
(17, 0, 'aaaaaaaaa', 'Event', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 2222222, NULL, NULL, NULL, NULL, NULL, NULL, 22, 'aaaaaaaaaaaaaaaaa', 'product_images/1697207375_download (3).jpg', NULL, NULL, NULL, NULL, '2023-10-13 07:29:35', '2023-10-13 07:29:35'),
(18, 0, 'Ruang Meeting Kemang', 'Meeting', 'Ruang Meeting Kemang', 'DKI Jakarta', 'Jakarta Selatan', 'Kemang', 2000000, NULL, NULL, NULL, NULL, NULL, NULL, 20, 'Ruang Meeting Kemang', 'product_images/1697208254_images.jpg', NULL, NULL, NULL, NULL, '2023-10-13 07:44:14', '2023-10-13 07:44:14'),
(19, 1, 'Joglo Foto Studio', 'Photo Shoot', 'Informasi Joglo Foto Studio', 'DKI Jakarta', 'Jakarta Selatan', 'Kemang', 2000000, '1', NULL, '20', '20', '5', 'Bulan', 20, 'Deskripsi Joglo Foto Studio', 'product_images/1697208568_download (1).jpg', NULL, NULL, NULL, NULL, '2023-10-13 07:49:29', '2023-10-14 01:44:32'),
(20, 0, 'Tes Banyak', 'Video Shoot', 'Tes Banyak', 'Tes Banyak', 'banyak', 'banyak', 2000000, NULL, NULL, '22', '22', '22', 'Tahun', 22, 'Tes Banyak', 'product_images/1697209505_fotoooo.jpg', NULL, NULL, NULL, NULL, '2023-10-13 08:05:05', '2023-10-13 08:05:05'),
(21, 0, 'Tes Banyak', 'Photo Shoot', 'Info tes banyak', 'DKI Jakarta', 'Jakarta Selatan', 'Kemang', 200000, NULL, NULL, '20', '20', '20', 'Tahun', 20, 'info tes produk', 'product_images/1697213218_studio-foto_169.jpeg', 'product_images/1697213218_download.jpg', 'product_images/1697213218_download (2).jpg', 'product_images/1697213218_images (1).jpg', 'product_images/1697213218_images.jpg', '2023-10-13 09:06:58', '2023-10-13 09:06:58'),
(22, 0, 'AAAAAAAAAAA', 'Video Shoot', 'SSSSSSSSSSSSSSS', 'DETEWRTW', 'SSGSSF', 'RGGRGWRW', 2000000, NULL, NULL, '20', '20', '20', 'Tahun', 20, 'EREEREQERQ', 'product_images/1697215010_images (1).jpg', 'product_images/1697215010_images (2).jpg', 'product_images/1697215010_images (4).jpg', 'product_images/1697215010_images (5).jpg', 'product_images/1697215010_images.jpg', '2023-10-13 09:36:50', '2023-10-13 09:36:50'),
(23, 0, 'Tess', 'Meeting', 'AEFAFDFADAF', 'DKI Jakarta', 'AEKFNMAFA', 'ANFKFALD', 2000000, NULL, NULL, '222', '200', '20', 'Bulan', 20, 'AFDAAFADFFD', 'product_images/1697215925_images.jpg', 'product_images/1697215925_download.jpg', 'product_images/1697215925_images (3).jpg', 'product_images/1697215925_download.jpg', 'product_images/1697215925_images (4).jpg', '2023-10-13 09:52:05', '2023-10-13 09:52:05'),
(24, 0, 'AAAAAAAA', 'Video Shoot', 'AAAAAAAAAAA', 'gladgaga', 'jsngsfgnks', 'njgnnalfj', 3333333, NULL, NULL, '33', '33', '33', 'Tahun', 33, 'ffafaagagarga', 'product_images/1697217414_images (1).jpg', 'product_images/1697217414_images (5).jpg', 'product_images/1697217414_images (2).jpg', 'product_images/1697217414_images (3).jpg', 'product_images/1697217414_download.jpg', '2023-10-13 10:16:54', '2023-10-13 10:16:54'),
(25, 0, 'AAAAAAAAqeqeqq', 'Video Shoot', 'AAAAAAAAAAA', 'gladgagaafaeqe', 'jsngsfgnks', 'njgnnalfj', 3333333, NULL, NULL, '33', '33', '33', 'Tahun', 33, 'ffafaagagarga', 'product_images/1697217590_images (1).jpg', 'product_images/1697217590_images (5).jpg', 'product_images/1697217590_images (2).jpg', 'product_images/1697217590_images (3).jpg', 'product_images/1697217590_download.jpg', '2023-10-13 10:19:50', '2023-10-13 10:19:50'),
(26, 0, 'gfeqgqgqgeq', 'Event', 'wegwgw', 'jgjwkww', 'jkgwb', 'jennek', 22222, NULL, NULL, '22', '32', '3', 'Tahun', 22, 'gonwnw qeigojgwgowrg', 'product_images/1697217706_images (5).jpg', 'product_images/1697217706_download (3).jpg', 'product_images/1697217706_download (1).jpg', 'product_images/1697217706_images (4).jpg', 'product_images/1697217706_images (1).jpg', '2023-10-13 10:21:46', '2023-10-13 10:21:46'),
(29, 0, 'Aula Pancasila', 'Event', 'Aula yang berada di UPNVJ', 'DKI Jakarta', 'Jakarta Selatan', 'Pondok Labu', 20000000, NULL, NULL, '50', '30', '4', 'Bulan', 200, 'Deskripsi AULA PANCASILA', 'product_images/1697223516_images (1).jpg', 'product_images/1697223516_download (3).jpg', 'product_images/1697223516_images (2).jpg', 'product_images/1697223516_images (2).jpg', 'product_images/1697223516_download (1).jpg', '2023-10-13 11:58:36', '2023-10-13 11:58:36'),
(30, 0, 'Aula Yuni', 'Event', 'Aula Milik Yuni', 'DKI Jakarta', 'Jakarta Pusat', 'Menteng', 20000000, NULL, NULL, '75', '50', '8', 'Tahun', 100, 'Deskripsinya Aula Milik Yuni', 'product_images/1697223715_images (1).jpg', 'product_images/1697223715_images (2).jpg', 'product_images/1697223715_download.jpg', 'product_images/1697223715_images (5).jpg', 'product_images/1697223715_download (1).jpg', '2023-10-13 12:01:55', '2023-10-14 06:51:50'),
(31, 1, 'Event Hall Senayan', 'Event', 'Informasi Event Hall Senayan', 'DKI Jakarta', 'Jakarta Pusat', 'Senayan', 20000000, NULL, NULL, '90', '85', '10', 'Tahun', 200, 'Deskripsi Event Hall Senayan', 'product_images/1697275403_images (2).jpg', 'product_images/1697275403_download (3).jpg', 'product_images/1697275403_download.jpg', 'product_images/1697275403_images (5).jpg', 'product_images/1697275403_images.jpg', '2023-10-14 02:23:23', '2023-10-14 06:51:37'),
(32, 1, 'Aula Maxy', 'Event', 'Aula besar di dalam gedung Maxy Academy', 'DKI Jakarta', 'Jakarta Selatan', 'Kuningan', 20000000, NULL, '08123123123', '300', '250', '20', 'Tahun', 200, 'Akses tol dalam kota Dekat dengan rumah sakit dan bandara Dekat dengan pusat perbelanjaan dan kantor polisi', 'NjDxuQXhGyAC7KyEUR72iOG1dPo8JZ-metaaW1hZ2VzICg1KS5qcGc=-.jpg', 'tQCbsidrTjWz977OOnleuw25RJE4WN-metaaW1hZ2VzICg0KS5qcGc=-.jpg', 'arM1RnJQCGeE6a0YBlIOmjbmSQzL0d-metaaW1hZ2VzICgzKS5qcGc=-.jpg', 'D3MEMOUim2UxwuaEUXoQHXQ2loaIvo-metaaW1hZ2VzICgyKS5qcGc=-.jpg', 'tPXLacq3JqKOYuBMNmtIt3BO1GOybS-metaaW1hZ2VzLmpwZw==-.jpg', '2023-10-14 06:56:04', '2023-10-14 07:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_facility`
--

CREATE TABLE `product_facility` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_facility`
--

INSERT INTO `product_facility` (`id`, `product_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_host`
--

CREATE TABLE `product_host` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `host_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_host`
--

INSERT INTO `product_host` (`id`, `product_id`, `host_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 8, 6, NULL, NULL),
(9, 9, 5, NULL, NULL),
(10, 10, 5, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 6, NULL, NULL),
(13, 13, 5, NULL, NULL),
(14, 14, 4, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 19, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `nama`, `role`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Andreas Aji', 'Penyewa', 'Workfrom.id adalah platform yang sangat membantu saya untuk menemukan tempat kerja yang sesuai dengan kebutuhan saya. Saya dapat dengan mudah mencari tempat kerja berdasarkan lokasi, harga, dan fasilitas yang tersedia.', '2023-10-11 05:39:20', '2023-10-11 05:39:20'),
(2, 'Sandiaga', 'Penyedia', 'Saya sangat senang bisa bekerja sama dengan workfrom.id. Mereka membantu saya untuk menyewakan gedung saya dengan lebih mudah dan cepat. Prosesnya transparan dan menguntungkan bagi kedua belah pihak. Saya akan terus bekerja sama dengan workfrom.id di masa', '2023-10-11 05:40:41', '2023-10-11 05:40:41'),
(3, 'Marc Klok', 'Penyewa', 'Saya baru saja mencoba workfrom.id dan saya sangat terkesan. Platform ini menawarkan harga yang sangat terjangkau, terutama untuk photoshot. Saya juga senang dengan fasilitas yang ditawarkan untuk photoshot di workfrom.id. Semuanya lengkap dan bersih.', '2023-10-11 05:41:13', '2023-10-11 05:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$py.H7IE41cwaEaQkiskplutA7V4SrSob.0plnpyRxfH17Q0QBfUAC', NULL, '2023-10-11 03:41:49', '2023-10-11 03:41:49'),
(2, 'admin', 'andreasaji2002@gmail.com', NULL, '$2y$10$rKtbmG4HjHom85EwsCkXM./exEitE8k0q8FkgVCyrvnfK3UeieXYW', NULL, '2023-10-12 02:03:40', '2023-10-12 02:03:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_facility`
--
ALTER TABLE `product_facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_facility_product_id_foreign` (`product_id`),
  ADD KEY `product_facility_facility_id_foreign` (`facility_id`);

--
-- Indexes for table `product_host`
--
ALTER TABLE `product_host`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_host_product_id_foreign` (`product_id`),
  ADD KEY `product_host_host_id_foreign` (`host_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_facility`
--
ALTER TABLE `product_facility`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_host`
--
ALTER TABLE `product_host`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_facility`
--
ALTER TABLE `product_facility`
  ADD CONSTRAINT `product_facility_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `hosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_facility_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_host`
--
ALTER TABLE `product_host`
  ADD CONSTRAINT `product_host_host_id_foreign` FOREIGN KEY (`host_id`) REFERENCES `hosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_host_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
