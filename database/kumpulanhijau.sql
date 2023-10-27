-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2023 pada 11.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kumpulanhijau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Arasya', 'admin'),
('Rahmat', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `judul_berita` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `nama_create_news` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`judul_berita`, `isi`, `nama_create_news`, `tgl`) VALUES
('Sampah Rongsok Menjadi Masalah', 'Sampah rongsok, atau yang dikenal juga sebagai sampah elektronik, telah menjadi masalah serius di seluruh dunia. Dalam beberapa dekade terakhir, pertumbuhan teknologi telah membanjiri pasar dengan perangkat elektronik, dan ini telah meningkatkan masalah limbah elektronik. Sampah rongsok yang tidak terkelola dengan baik dapat merusak lingkungan dan kesehatan manusia, sehingga perlunya perhatian serius dalam penanganannya.\r\n\r\nSampah rongsok adalah istilah yang merujuk pada semua barang elektronik yang tidak digunakan lagi atau sudah rusak, termasuk komputer, ponsel, televisi, peralatan rumah tangga, dan banyak lagi. Sebagian besar sampah rongsok mengandung bahan berbahaya seperti merkuri, plumbum, kadmium, dan berbagai senyawa kimia beracun lainnya. Ketika dibiarkan di tempat pembuangan sampah biasa, bahan-bahan berbahaya ini dapat mencemari tanah dan air tanah, menyebabkan potensi bahaya bagi ekosistem dan kesehatan manusia.\r\n\r\nSampah rongsok juga berdampak negatif pada lingkungan melalui emisi gas rumah kaca selama produksi dan pemrosesan perangkat elektronik. Selain itu, penanganan yang tidak benar terhadap sampah elektronik seringkali mengarah pada praktik ilegal seperti e-waste dumping di negara-negara berkembang, yang dapat menyebabkan kerusakan ekosistem dan kesehatan manusia yang serius.\r\n\r\nMasalah ini menjadi semakin urgent seiring dengan pertumbuhan pesat industri teknologi. Konsumen sering kali membeli perangkat elektronik baru dan menggantikan yang lama bahkan jika perangkat lama masih berfungsi. Akibatnya, semakin banyak sampah rongsok terakumulasi. Meskipun ada beberapa upaya untuk mendaur ulang atau mendaur ulang sebagian besar sampah rongsok, masih ada banyak yang akhirnya berakhir di tempat pembuangan sampah.\r\n\r\nPemerintah, produsen elektronik, dan konsumen perlu bekerja sama untuk mengatasi masalah ini. Pemerintah dapat mendorong regulasi yang lebih ketat terkait dengan manajemen sampah elektronik dan mendorong produsen untuk merancang perangkat dengan masa pakai yang lebih lama dan komponen yang mudah diganti. Produsen, di sisi lain, dapat mengambil tanggung jawab dalam siklus hidup produk mereka dengan merancang perangkat yang lebih ramah lingkungan dan dengan mengambil langkah-langkah untuk mendaur ulang lebih banyak komponen elektronik.\r\n\r\nPara konsumen juga memiliki peran penting dalam mengurangi masalah sampah rongsok dengan memilih untuk memperbaiki perangkat mereka daripada menggantinya dengan yang baru ketika mungkin, atau dengan mendaur ulang perangkat lama mereka dengan benar.\r\n\r\nDalam rangka mengatasi masalah sampah rongsok yang semakin meningkat, kerjasama antara semua pihak akan sangat penting. Dengan tindakan yang tepat, kita dapat mengurangi dampak buruk sampah rongsok pada lingkungan dan kesehatan manusia, sambil menjaga dunia tetap menjadi tempat yang baik untuk generasi yang akan datang.', 'Arasya', '2023-10-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_lengkap`, `alamat`, `kategori`) VALUES
(12350, 'Arasya Rafi', 'Jalan Komplek 2', 'Rongsok Sedang ( Komputer, Monitor dll)'),
(12351, 'Arasya Rafi', 'Jalan Jalan Lab', 'Rongsok Sedang ( Komputer, Monitor dll)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_panjang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama_panjang`) VALUES
(12345, 'arasya', 'arasya12@gmail.com', '12', 'Arasya Rafi Purta'),
(12346, 'arsrfi', 'arasyarafi130@gmail.com', '12', 'arasya'),
(12347, 'sa', 'sa@gmail.om', '12', 'ahaha'),
(12352, 'Koko', 'kko@gmail.com', '12', 'Koko');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12352;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12353;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
