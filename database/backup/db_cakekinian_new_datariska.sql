-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Des 2017 pada 02.05
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cakekinian_new`
--

--
-- Dumping data untuk tabel `customer`
--

-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `toko` (`id`, `nama`, `siup`, `npwp`, `no_rek`, `created_at`, `updated_at`, `kota`, `nama_bank`) VALUES
(5, 'Patata', '87929873A', 'ANJ61768192', '125091784167', NULL, NULL, 'Surabaya', 'Mandiri'),
(2, 'Lampung Banana Fooster', '2617621HAW', '152361588HSA', '14091084123', NULL, NULL, 'Lampung', 'Mandiri'),
(3, 'Bosang Makasar', '27393AJ9802', '23802813AG81', '14020801', NULL, NULL, 'Makassar', 'Mandiri'),
(4, 'Bandung Makuta', '1531GJAJ878', '72979188GAU', '140816767289', NULL, NULL, 'Bandung', 'Mandiri');

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `customer_id`, `total`, `status_pembayaran`, `kode_pembayaran`, `status_pengiriman`, `status_kedatangan`, `created_at`, `updated_at`, `tanggal_transaksi`, `deskripsi_pemesanan`) VALUES
(1, 1, 75000, 1, '1', 0, 0, NULL, NULL, '2017-12-29', 'Tambahan Toping Kacang diatas Coklat');

--
-- Dumping data untuk tabel `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
