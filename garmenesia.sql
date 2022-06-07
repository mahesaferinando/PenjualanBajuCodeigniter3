-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 13.58
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garmenesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL,
  `nama` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `gambar` varchar(128) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(15) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_sewa` int(15) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `nama_barang`, `deskripsi_barang`, `harga_sewa`, `gambar`) VALUES
(53, 'Tshirt', '---', 250000, '1625057884.JPG'),
(54, 'Outwear', '----', 250000, '1625057919.JPG'),
(55, 'Wearpack', '----', 250000, '1625057961.JPG'),
(56, 'Polo Shirt', '----', 250000, '1625057993.JPG'),
(57, 'Seragam Kemaja', '----', 250000, '1625058046.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text DEFAULT NULL,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(13, 'Kementerian PUPR Selesai Bangun Jaringan Irigasi di Lampung dan Garut', '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) telah menuntaskan dua dari tujuh Proyek Strategis Nasional (PSN)&nbsp;<a href=\"https://www.liputan6.com/bisnis/read/4287624/menteri-pupr-bakal-desain-ulang-jaringan-irigasi-food-estate-di-kalteng\">Irigasi</a>. Dua proyek tersebut adalah Daerah Irigasi (DI) Umpu Sistem di Lampung dan Daerah Irigasi (DI) Leuwigoong di Kabupaten Garut, Jawa Barat.</p>\r\n\r\n<p>Pembangunan jaringan irigasi pada Daerah Irigasi Umpu Sistem di Lampung berupa saluran suplesi sepanjang 6 km dengan luas areal pelayanan 7.500 ha. Sementara untuk Daerah Irigasi Leuwigoong berupa saluran irigasi primer sepanjang 86 km yang mengairi area potensial seluas 5.313 ha.</p>\r\n\r\n<p>Menteri PUPR Basuki Hadimuljono mengatakan, Kementerian PUPR telah membangun banyak bendungan di berbagai daerah. Selanjutnya akan diikuti dengan pengembangan dan pengelolaan jaringan&nbsp;<a href=\"https://www.liputan6.com/tag/kementerian-pupr\">irigasi</a>&nbsp;untuk menunjang produktivitas sentra-sentra pertanian.</p>\r\n\r\n<p>&quot;Pembangunan bendungan diikuti oleh pembangunan jaringan irigasi. Dengan demikian bendungan yang dibangun dengan biaya besar dapat memberikan manfaat yang nyata dimana air akan mengalir sampai ke sawah-sawah milik petani,&quot; jelas Menteri Basuki dalam keterangan tertulis, Kamis (30/7/2020).</p>\r\n\r\n<p>Adapun penetapan 7 PSN&nbsp;<a href=\"https://www.liputan6.com/bisnis/read/4287624/menteri-pupr-bakal-desain-ulang-jaringan-irigasi-food-estate-di-kalteng\">Irigasi</a>&nbsp;diatur dalam Peraturan Presiden Nomor 56 Tahun 2018 tentang perubahan atas Peraturan Presiden No. 58 Tahun 2017 tentang Percepatan Pelaksanaan Proyek Strategis Nasional (PSN).</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4422ad5531329ade5f5b37c278493133.jpg', '2020-08-02 08:23:35'),
(16, 'Bisnis Pertanian Menjajikan saat Pandemi COVID-19', '<p><strong>Jakarta</strong>&nbsp;-&nbsp;</p>\r\n\r\n<p>Menteri Pertanian Syahrul Yasin Limpo memperkirakan dalam dua tahun ke depan, bisnis yang masih bisa berjalan dengan baik adalah bisnis di sektor pertanian. Hal ini terlihat dari perkembangan ekspor yang terus meningkat setiap bulannya.</p>\r\n\r\n<p>&quot;Berdasarkan data yang ada ekspor yang tumbuh selama pandemi COVID-19 hanya sektor pertanian,&quot; ujarnya dalam keterangan tertulis, Senin (27/7/2020).</p>\r\n\r\n<p>&quot;Untuk komoditinya yang menjadi andalan adalah kelapa sawit, karet dan kakao. Kalau ekspor pertanian di tahun 2019 sebesar Rp 400 triliun, ke depan kita harus bisa mencapai 1000 triliun dengan peningkatan 300 persen,&quot; jelasnya.Neraca dagang pertanian juga surplus sebesar Rp 55,09 triliun. Dari angka tersebut, komoditas tanaman pangan menyumbang Rp 52,07 triliun, hortikultura Rp 11,81 triliun dan peternakan Rp 20 triliun. Kemudian disusul komoditas perkebunan yang menyumbang paling banyak yakni sebesar Rp 138,76 triliun.</p>\r\n\r\n<p>Menilik hal itu, Ketua Badan Pengurus Pusat Himpunan Pengusaha Muda Indonesia (BPP HIPMI) Mardani H. Maming mendorong para pengusaha yang berasal dari kalangan generasi milenial terjun langsung dan berkecimpung di dunia bisnis yang bergerak di sektor pertanian.</p>\r\n\r\n<p>Menurut Mardani, sektor pertanian memiliki potensi besar dan mampu menyelamatkan negara dari ancaman krisis global. Sektor pertanian adalah sektor utama yang memiliki tingkat prioritas dalam menghadapi pandemi COVID-19.</p>\r\n\r\n<p>&quot;Sektor pertanian bisa kita seriuskan dengan mengajak anak muda masuk ke sana dan memaksimalkan program pemerintah,&quot; ucap Mardani.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mardani mengatakan perkembangan teknologi dan alat mesin pertanian yang begitu pesat membuat akses bisnis semakin terbuka lebar. Di samping itu, peluang tersebut juga bisa dimanfaatkan masyarakat untuk menerapkan konsep family farming dengan menjadikan lahan sempit dan pekarangan rumah sebagai lahan hidroponik dan aeroponik.</p>\r\n\r\n<p>&quot;Seiring berjalannya waktu dengan berbagai macam teknologi yang ada, kita bisa lihat di perkotaan banyak inisiatif melakukan pertanian berskala besar dengan basis komunitas seperti hidroponik dan aeroponik,&quot; katanya.</p>\r\n\r\n<p>&quot;Konsep ini menurut saya bisa diterapkan di kota-kota padat penduduk karena hanya dengan memanfaatkan lahan sempit seperti pekarangan rumah. Saya kira inisiatif seperti ini sangat bagus dan perlu dikoneksikan serta dikolaborasikan dengan kebijakan yang tepat,&quot; imbuhnya.</p>\r\n\r\n<p>Sementara itu, Wakil Ketua Umum Badan Pengurus Pusat Himpunan Pengusaha Muda Indonesia (BPP HIPMI) Anggawira mendorong para petani di seluruh daerah mulai memanfaatkan perkembangan teknologi dan informasi yang ada untuk meningkatkan produksi.</p>\r\n\r\n<p>&quot;Dengan teknologi dan informasi, para petani bisa langsung menjual hasil produksinya melalui marketplace. Nah inisiatif ini bisa kita kembangkan ke samping karena banyak kebutuhan lainya yang menjadi konsumsi sehari-hari. Misalnya di pemenuhan protein hewani,&quot; jelasnya.</p>\r\n\r\n<p>Sementara itu, Wakil Ketua Umum Kamar Dagang dan Industri (Kadin) bidang Perdagangan Benny Soetrisno menuturkan sektor pertanian adalah basis penting yang secara konkret berhasil menyumbang kontribusi besar pada pertumbuhan ekonomi nasional. Terutama di saat krisis dan pandemi COVID-19 melanda seluruh dunia.</p>\r\n\r\n<p>&quot;Contohnya, dari timur sampai barat kita punya kopi. Coklat bagus Sulawesi Selatan produksi utamanya coklat. Selain itu merica di Bangka Belitung jadi suplai dunia. Jadi pertanian kita ini sangat unggul sekali,&quot; ungkapnya.</p>\r\n\r\n<p>Untuk itu, Benny mendorong para pengusaha agar mendukung dan terjun langsung pada bisnis yang bergerak di sektor pertanian. Apalagi, Indonesia memiliki kelebihan komoditi yang tidak dimiliki oleh semua negara.</p>\r\n\r\n<p>Source : finance.detik.com</p>\r\n', 'b6bf4bd2a1e4efca6f71c69c88e51051.jpeg', '2020-08-03 09:02:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Admin', 'admin@gmail.com', 'def.jpg', '$2y$10$8zzsCN3VrnJ7zC8GAD01CuIpynPyR/EDaLpH8lsN5GlCFs0z7gQbi', 1, 1, 1624558922),
(16, 'User', 'user@gmail.com', 'def.jpg', '$2y$10$PI/mQ0GOocOtZTKL1v2EReOsNjQg7k/TRO1OFBblzPh7.3syDPHJ2', 2, 1, 1624588890);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sewa`
--

CREATE TABLE `user_sewa` (
  `id` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lama` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `kemasan` varchar(128) NOT NULL,
  `namalengkap` varchar(128) NOT NULL,
  `nohp` varchar(128) NOT NULL,
  `jasa` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambardesain` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Katalog', 'user/katalog', 'fas fa-fw fa-clipboard-list', 1),
(3, 1, 'Status Pembayaran', 'user/status', 'fas fa-fw fa-money-check-alt', 1),
(4, 2, 'Beli', 'user/sewa', 'fas fa-shopping-cart', 1),
(5, 1, 'Management', 'sewa', 'fas fa-fw fa-plus', 1),
(6, 3, 'Pengelolaan Menu Web', 'menu', 'fas fa-fw fa-cogs', 0),
(7, 4, 'Profil Pembuat Web', 'tentang', 'fas fa-fw fa-users', 0),
(8, 3, 'Pengelolaan Sub Menu', 'user/katalog', 'fas fa-fw fa-clipboard-list', 0),
(12, 4, 'Upload Pembayaran', 'user/bayar', 'fas fa-receipt', 1),
(13, 2, 'Ganti Kata Sandi', 'user/gantikatasandi', 'fas fa-fw fa-key', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sewa`
--
ALTER TABLE `user_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sewa`
--
ALTER TABLE `user_sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
