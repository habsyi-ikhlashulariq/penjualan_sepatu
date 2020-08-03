-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 10.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan-sepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_brg`
--

CREATE TABLE `tbl_brg` (
  `kd_brg` int(11) NOT NULL,
  `img_brg` varchar(50) NOT NULL,
  `nm_brg` varchar(100) NOT NULL,
  `hrg_brg` varchar(11) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `jb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_brg`
--

INSERT INTO `tbl_brg` (`kd_brg`, `img_brg`, `nm_brg`, `hrg_brg`, `ukuran`, `deskripsi`, `tgl_upload`, `jb`) VALUES
(1, 'SneakerOlahraga.jpg', 'Sneaker Modern', '20000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 2),
(2, 'sneakercewek.jpg', 'Sneaker Cewek Keren', '10000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 2),
(3, 'ket.jpg', 'Sepatu Kets Kekinian', '40000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 2),
(4, 'bootscewek.jpeg', 'Boots Cewek Modern', '20000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 1),
(5, 'koboicewek.jpg', 'Sepatu Koboi Cewek', '40000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 3),
(6, 'casual.jpeg', 'Casual Terbaru Keren', '30000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 6),
(7, 'casualcewek.jpg', 'Casual Cewek Modern', '40000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 6),
(8, 'bootscowok2.jpg', 'Boots Cowok Keren', '50000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 1),
(9, 'koboicowok.jpg', 'Koboi Cowok', '60000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 3),
(10, 'pantopel.jpg', 'Patopel Anak Muda', '100000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 5),
(11, 'pantopelcewek.jpg', 'Pantopel Cewek Keren', '100000', '30, 31, 35', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 5),
(12, 'pantopelcowok.jpg', 'Pantopel Cowok Keren', '100000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 5),
(13, 'olahraga.jpg', 'Sepatu Olahraga Pria', '150000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 4),
(14, 'olahraga2.jpg', 'Olahraga Wanita Keren', '200000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 4),
(15, 'olahragacewek2.jpg', 'Sepatu Olahraga Cewek', '100000', '40, 41, 42', 'Bahan terbuat Dari Kain Berkualitas', '2020-06-08', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `kd_menu` int(11) NOT NULL,
  `menu_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_footer`
--

INSERT INTO `tbl_footer` (`kd_menu`, `menu_footer`) VALUES
(1, '&copy; 2020 | &nbsp; Digi Shop | &nbsp; All Rights Reserved');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header`
--

CREATE TABLE `tbl_header` (
  `kd_menu` int(11) NOT NULL,
  `nm_menu` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_header`
--

INSERT INTO `tbl_header` (`kd_menu`, `nm_menu`, `link`) VALUES
(1, 'Home', ''),
(2, 'Tentang Kami', 'll'),
(3, 'Cara Order', 'll');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenisbrg`
--

CREATE TABLE `tbl_jenisbrg` (
  `kd_jb` int(11) NOT NULL,
  `jenis_brg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenisbrg`
--

INSERT INTO `tbl_jenisbrg` (`kd_jb`, `jenis_brg`) VALUES
(1, 'boots'),
(2, 'sneaker'),
(3, 'koboi'),
(4, 'olahraga'),
(5, 'pantopel'),
(6, 'casual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `kd_menu` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`kd_menu`, `alamat`, `no_telp`, `email`) VALUES
(3, '234, New york Street, <br> Just Location, USA', '+09-456-567-89', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`kd_user`, `nama`, `email`, `password`, `avatar`) VALUES
(2, 'sari', 'tes@gmail.com', '12345', 'default.png'),
(5, 'Kampret', 'admin@gmail.com', '$2y$10$.PA.Lg7qrvQReD.rgKfG9OZDCvNrkkOuf8t39in1rxuYQjkfOtB8S', 'user1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_marketplace`
--

CREATE TABLE `tbl_marketplace` (
  `kd_menu` int(11) NOT NULL,
  `img_marketplace` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_marketplace`
--

INSERT INTO `tbl_marketplace` (`kd_menu`, `img_marketplace`, `link`) VALUES
(1, 'bl.png', 'bl'),
(2, 'lazada.png', 'lazada'),
(3, 'tk.png', 'tokopedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `kd_menu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `class` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`kd_menu`, `nama`, `class`, `link`) VALUES
(1, 'digishop', 'fa fa-facebook-square fa-3x', 'll'),
(2, 'digishp21', 'fa fa-twitter-square fa-3x', 'll'),
(3, '@digi_shop', 'fa fa-instagram fa-3x', 'll');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_brg`
--
ALTER TABLE `tbl_brg`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `tbl_jenisbrg`
--
ALTER TABLE `tbl_jenisbrg`
  ADD PRIMARY KEY (`kd_jb`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indeks untuk tabel `tbl_marketplace`
--
ALTER TABLE `tbl_marketplace`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`kd_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_brg`
--
ALTER TABLE `tbl_brg`
  MODIFY `kd_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_header`
--
ALTER TABLE `tbl_header`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenisbrg`
--
ALTER TABLE `tbl_jenisbrg`
  MODIFY `kd_jb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_marketplace`
--
ALTER TABLE `tbl_marketplace`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
