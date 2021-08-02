-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2021 pada 11.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginbot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idlevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `idlevel`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(4, 'dodo', '21232f297a57a5a743894a0e4a801fc3', 3),
(5, 'kucing', '21232f297a57a5a743894a0e4a801fc3', 3),
(6, 'debi', '21232f297a57a5a743894a0e4a801fc3', 4),
(7, 'bubun', '21232f297a57a5a743894a0e4a801fc3', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(11) NOT NULL,
  `judul_buku` varchar(70) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `idprofil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `stok`, `harga`, `idprofil`) VALUES
(1, 'Pemrograman Visual Basic 6', 20, 60000, 2),
(2, 'ArchGis For Berginer', 30, 120000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `foto`) VALUES
(1, 'Budi Rahardjo', 'Laki-Laki', '08958777787', 'Jln Cikaracak', ''),
(2, 'Wiro', 'L', '089532322', 'Jln.Tes 123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_akses`
--

CREATE TABLE `level_akses` (
  `idlevel` int(11) NOT NULL,
  `levelname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_akses`
--

INSERT INTO `level_akses` (`idlevel`, `levelname`) VALUES
(2, 'Administrator'),
(3, 'Author'),
(4, 'Supervisor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` int(11) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `kode_buku`, `item`, `idcustomer`) VALUES
(1, 2, 2, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(8) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `idadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`idprofil`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `foto`, `idadmin`) VALUES
(1, 'Abdul Goni', 'L', 'Jln.Cibuntu No 34', '0895873', '', 2),
(2, 'Dodo', 'L', 'Jln.XXXXXX', '08888832', '', 4),
(4, 'Meong', 'L', 'Jln.Neong', '083838', '', 5),
(5, 'debi', 'L', 'Jln.Buntu no 6', '09778777', '', 6),
(6, 'bubun', 'L', 'Jln.Anu no89', '089938', '', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `idlevel` (`idlevel`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`),
  ADD KEY `idprofil` (`idprofil`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indeks untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `kode_buku` (`kode_buku`),
  ADD KEY `idcustomer` (`idcustomer`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`),
  ADD KEY `idadmin` (`idadmin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `kode_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  MODIFY `idlevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idlevel`) REFERENCES `level_akses` (`idlevel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`idprofil`) REFERENCES `profil` (`idprofil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`idcustomer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
