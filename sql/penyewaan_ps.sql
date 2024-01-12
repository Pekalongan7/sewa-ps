-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 04.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan_ps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penyewaan_ps`
--

CREATE TABLE `data_penyewaan_ps` (
  `id_sewa` int(11) NOT NULL,
  `nama_sewa` varchar(25) NOT NULL,
  `nomor_ps` varchar(25) NOT NULL,
  `lama_sewa` varchar(100) NOT NULL,
  `makanan` varchar(25) NOT NULL,
  `minuman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penyewaan_ps`
--

INSERT INTO `data_penyewaan_ps` (`id_sewa`, `nama_sewa`, `nomor_ps`, `lama_sewa`, `makanan`, `minuman`) VALUES
(1, 'huhuh', '12', '12 jam', 'mie goreng', 'es teh'),
(3, 'udin', '12', '1', 'potato', 'soda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_data_user`
--

INSERT INTO `tbl_data_user` (`id_user`, `username`, `fullname`, `level`, `password`, `foto_user`) VALUES
(2, 'nedy', 'nedy janda', 1, '1234', '1703936191_a6ac37aa77d2b9cd71c9.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penyewaan_ps`
--
ALTER TABLE `data_penyewaan_ps`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_penyewaan_ps`
--
ALTER TABLE `data_penyewaan_ps`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
