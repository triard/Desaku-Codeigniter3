-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2020 pada 13.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desaku_proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar_judul` varchar(50) NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_alamat`
--

CREATE TABLE `detail_alamat` (
  `id` int(11) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `nomor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_surat`
--

CREATE TABLE `detail_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_surat`
--

INSERT INTO `detail_surat` (`id`, `nama`) VALUES
(1, 'Surat Keterangan Usaha'),
(2, 'Surat Keterangan Tidak Mampu'),
(3, 'Surat Keterangan Miskin'),
(4, 'Surat Keterangan Belum Pernah Menikah'),
(5, 'Surat Keterangan Kelahiran'),
(6, 'Surat Keterangan Kematian'),
(7, 'Surat Keterangan Beda Nama'),
(8, 'Surat Keterangan Penghasilan'),
(9, 'Surat Keterangan Harga Tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` char(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Hidup','Mati') NOT NULL DEFAULT 'Hidup',
  `nomor_kk` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL DEFAULT 'Laki-Laki',
  `agama` enum('Islam','Kristen Protestan','Kristen Katolik','Budha','Hindu','Konghucu','dll') NOT NULL DEFAULT 'Islam',
  `status_penduduk` enum('Tetap','Tidak Tetap','Pendatang') NOT NULL DEFAULT 'Tetap',
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` enum('Tidak Sekolah','SD','SMP','SMP','SMA','S1','S2','S3','S4','D1','D2','D3','D4') NOT NULL DEFAULT 'Tidak Sekolah',
  `pekerjaan` varchar(20) NOT NULL,
  `status_kawin` enum('Kawin','Belum Kawin') NOT NULL DEFAULT 'Belum Kawin',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_login`
--

CREATE TABLE `penduduk_login` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_user` enum('Penduduk') NOT NULL DEFAULT 'Penduduk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nik` char(20) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `id_penduduk` char(20) NOT NULL DEFAULT '',
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `id_detail_surat` int(11) NOT NULL,
  `nik` char(20) NOT NULL,
  `isi` text NOT NULL,
  `tgl_permohonan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Proses','Dapat diambil','Gagal') NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_user` enum('Admin','Sekretaris') NOT NULL DEFAULT 'Admin',
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi1` text DEFAULT NULL,
  `misi2` text DEFAULT NULL,
  `misi3` text DEFAULT NULL,
  `misi4` text DEFAULT NULL,
  `misi5` text DEFAULT NULL,
  `proker1` text DEFAULT NULL,
  `proker2` text DEFAULT NULL,
  `proker3` text DEFAULT NULL,
  `proker4` text DEFAULT NULL,
  `proker5` text DEFAULT NULL,
  `proker6` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_agenda_user` (`id_user`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_artikel_user` (`id_user`);

--
-- Indeks untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `FK_penduduk_detail_alamat` (`id_alamat`);

--
-- Indeks untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_penduduk_login_penduduk` (`username`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__penduduk` (`nik`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_struktur_organisasi_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_surat_detail_surat` (`id_detail_surat`),
  ADD KEY `FK_surat_penduduk` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_agenda_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_artikel_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_penduduk_detail_alamat` FOREIGN KEY (`id_alamat`) REFERENCES `detail_alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  ADD CONSTRAINT `FK_penduduk_login_penduduk` FOREIGN KEY (`username`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `FK__penduduk` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `FK_struktur_organisasi_penduduk` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `FK_surat_detail_surat` FOREIGN KEY (`id_detail_surat`) REFERENCES `detail_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_surat_penduduk` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
