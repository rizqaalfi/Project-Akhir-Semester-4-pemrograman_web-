-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 07:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devita_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buktitransfer`
--

CREATE TABLE `tbl_buktitransfer` (
  `id_transfer` int(11) NOT NULL,
  `nama_pengirim` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_transfer` date NOT NULL,
  `jam_transfer` time NOT NULL,
  `bank_transfer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `foto_bukti` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_penjualan` varchar(16) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buktitransfer`
--

INSERT INTO `tbl_buktitransfer` (`id_transfer`, `nama_pengirim`, `tgl_transfer`, `jam_transfer`, `bank_transfer`, `foto_bukti`, `no_penjualan`) VALUES
(5, 'Rangga Putra', '2020-06-20', '20:13:07', 'BRI', 'bkt-1592668874.jpg', 'PJL/20200601/001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapenerima`
--

CREATE TABLE `tbl_datapenerima` (
  `id_datapenerima` int(11) NOT NULL,
  `nama_penerima` varchar(60) CHARACTER SET latin1 NOT NULL,
  `nohp_penerima` varchar(15) CHARACTER SET latin1 NOT NULL,
  `alamat_penerima` text CHARACTER SET latin1 NOT NULL,
  `kode_pos` varchar(10) CHARACTER SET latin1 NOT NULL,
  `provinsi_penerima` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kabkota_penerima` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kurir_pengiriman` varchar(8) CHARACTER SET latin1 NOT NULL,
  `paket_pengiriman` varchar(30) CHARACTER SET latin1 NOT NULL,
  `etd_paket` varchar(15) CHARACTER SET latin1 NOT NULL,
  `ongkir_paket` int(11) NOT NULL,
  `berat_kiriman` int(11) NOT NULL,
  `no_penjualan` varchar(16) CHARACTER SET latin1 NOT NULL,
  `kode_plg` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_datapenerima`
--

INSERT INTO `tbl_datapenerima` (`id_datapenerima`, `nama_penerima`, `nohp_penerima`, `alamat_penerima`, `kode_pos`, `provinsi_penerima`, `kabkota_penerima`, `kurir_pengiriman`, `paket_pengiriman`, `etd_paket`, `ongkir_paket`, `berat_kiriman`, `no_penjualan`, `kode_plg`) VALUES
(19, 'Rangga Putra', '085321404002', 'Jl. Paradise, Coldplay, Kota Mataram', '20477', 'Nusa Tenggara Barat (NTB)', 'Mataram', 'tiki', 'ECO', '4', 44000, 250, 'PJL/20200601/001', '2020032901'),
(20, 'Haidar Baihaqi', '085239072433', 'Jl. Jendral Soedirman No 47, Kebun Tunggal, Semarang, Jawa Tengah.', '50227', 'Jawa Tengah', 'Semarang', 'jne', 'REG', '1-2', 15000, 750, 'PJL/20200622/001', '2020051201');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapengiriman`
--

CREATE TABLE `tbl_datapengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `no_resi` varchar(20) CHARACTER SET latin1 NOT NULL,
  `jasa_kirim` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tgl_kirim` date NOT NULL,
  `lama_kirim` varchar(10) CHARACTER SET latin1 NOT NULL,
  `catatan_kirim` text CHARACTER SET latin1 DEFAULT NULL,
  `tgl_record` date NOT NULL,
  `no_penjualan` varchar(16) CHARACTER SET latin1 NOT NULL,
  `id_pgw` varchar(6) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_datapengiriman`
--

INSERT INTO `tbl_datapengiriman` (`id_pengiriman`, `no_resi`, `jasa_kirim`, `tgl_kirim`, `lama_kirim`, `catatan_kirim`, `tgl_record`, `no_penjualan`, `id_pgw`) VALUES
(6, 'MTR200620KB', 'Tiki', '2020-06-21', '3-5', 'Mohon segera konfirmasi kami jika barang telah diterima, Terima kasih telah berbelanja dan kami tunggu orderan selanjutnya.', '2020-06-20', 'PJL/20200601/001', 'PGW001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grup`
--

CREATE TABLE `tbl_grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_grup`
--

INSERT INTO `tbl_grup` (`id_grup`, `nama_grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Blouse'),
(2, 'Kemeja'),
(3, 'Jaket'),
(4, 'Dress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `qty` int(11) NOT NULL,
  `id_prd` varchar(20) NOT NULL,
  `harga_prd` int(11) NOT NULL,
  `nama_prd` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_keranjang` varchar(15) NOT NULL,
  `ukuran_prd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`qty`, `id_prd`, `harga_prd`, `nama_prd`, `username`, `id_keranjang`, `ukuran_prd`) VALUES
(1, 'PRD007', 110000, 'Jihad Blue', '0', '', '0'),
(3, 'PRD001', 125000, 'Bellanova Green', '', 'PRD001', 'XL'),
(1, 'PRD009', 375000, 'Dress Morilla White', 'rizqa', 'PRD009rizqa', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `kode_plg` varchar(10) NOT NULL,
  `nama_plg` varchar(50) NOT NULL,
  `gender_plg` enum('Laki-laki','Perempuan') NOT NULL,
  `email_plg` varchar(50) NOT NULL,
  `username_plg` varchar(30) NOT NULL,
  `password_plg` varchar(30) NOT NULL,
  `tglregis_plg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`kode_plg`, `nama_plg`, `gender_plg`, `email_plg`, `username_plg`, `password_plg`, `tglregis_plg`) VALUES
('2020032901', 'Rangga Putra Rizdillah', 'Laki-laki', 'ranggaputra@gmail.com', 'rangga', 'rangga', '2020-03-29'),
('2020040401', 'Arif Setyo', 'Laki-laki', 'arifsetyo@gmail.com', 'arif', 'arif', '2020-04-04'),
('2020051201', 'Haidar Baihaqi', 'Laki-laki', 'haidarbaihaqi@gmail.com', 'haidar', 'haidar', '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `no_penjualan` varchar(16) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `jam_penjualan` time NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `diskon_penjualan` int(11) NOT NULL,
  `bayar_penjualan` int(11) NOT NULL,
  `metode_penjualan` enum('Offline','Online') NOT NULL,
  `lunas_penjualan` enum('Lunas','Pending') NOT NULL,
  `status_penjualan` enum('Belum Bayar','Menunggu Verifikasi','Verifikasi','Dikirim','Selesai') NOT NULL,
  `kode_plg` varchar(10) DEFAULT NULL,
  `id_pgw` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`no_penjualan`, `tgl_penjualan`, `jam_penjualan`, `total_penjualan`, `diskon_penjualan`, `bayar_penjualan`, `metode_penjualan`, `lunas_penjualan`, `status_penjualan`, `kode_plg`, `id_pgw`) VALUES
('PJL/20200522/001', '2020-05-22', '12:33:46', 90000, 0, 90000, 'Offline', 'Lunas', 'Selesai', NULL, 'PGW001'),
('PJL/20200527/001', '2020-05-27', '11:59:56', 234000, 10, 250000, 'Offline', 'Lunas', 'Selesai', NULL, 'PGW001'),
('PJL/20200601/001', '2020-06-02', '00:10:35', 90000, 0, 0, 'Online', 'Lunas', 'Dikirim', '2020032901', NULL),
('PJL/20200602/002', '2020-06-02', '20:23:31', 220000, 0, 250000, 'Offline', 'Lunas', 'Selesai', NULL, 'PGW001'),
('PJL/20200622/001', '2020-06-22', '18:58:07', 260000, 0, 0, 'Online', 'Pending', 'Belum Bayar', '2020051201', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualandetail`
--

CREATE TABLE `tbl_penjualandetail` (
  `no_pjl_detail` int(11) NOT NULL,
  `id_prd` varchar(12) NOT NULL,
  `id_ukuran` int(11) NOT NULL,
  `harga_prd` int(11) NOT NULL,
  `diskon_prd` int(11) NOT NULL,
  `jml_prd` int(11) NOT NULL,
  `subtotal_prd` int(11) NOT NULL,
  `no_penjualan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualandetail`
--

INSERT INTO `tbl_penjualandetail` (`no_pjl_detail`, `id_prd`, `id_ukuran`, `harga_prd`, `diskon_prd`, `jml_prd`, `subtotal_prd`, `no_penjualan`) VALUES
(19, 'PRD003', 87, 90000, 0, 1, 90000, 'PJL/20200522/001'),
(26, 'PRD014', 132, 170000, 0, 1, 170000, 'PJL/20200527/001'),
(27, 'PRD013', 128, 90000, 0, 1, 90000, 'PJL/20200527/001'),
(28, 'PRD003', 87, 90000, 0, 1, 90000, 'PJL/20200601/001'),
(29, 'PRD013', 127, 90000, 0, 1, 90000, 'PJL/20200602/002'),
(31, 'PRD012', 124, 170000, 0, 1, 170000, 'PJL/20200622/001'),
(32, 'PRD013', 127, 90000, 0, 1, 90000, 'PJL/20200622/001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_prd` varchar(12) NOT NULL,
  `nama_prd` varchar(60) NOT NULL,
  `kategori_prd` varchar(15) NOT NULL,
  `harga_prd` int(11) NOT NULL,
  `diskon_prd` int(11) NOT NULL,
  `stok_prd` int(11) NOT NULL,
  `berat_prd` int(11) NOT NULL,
  `deskripsi_prd` text DEFAULT NULL,
  `gambar_prd` varchar(70) NOT NULL,
  `S` int(11) NOT NULL,
  `M` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `XL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_prd`, `nama_prd`, `kategori_prd`, `harga_prd`, `diskon_prd`, `stok_prd`, `berat_prd`, `deskripsi_prd`, `gambar_prd`, `S`, `M`, `L`, `XL`) VALUES
('PRD001', 'Bellanova Green', '1', 125000, 0, 20, 200, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', 'download.jpg', 4, 5, 12, 22),
('PRD002', 'Dellish vertical Bata', '2', 97000, 0, 42, 250, 'Warna : Lilac, Black, Light Gray, Sage Green\r\nMaterial : Chiffon\r\nSKU :  B1100266001\r\nB1100222002, B1100203003\r\n\r\nUkuran yang Dikenakan Model\r\nSize: M\r\nTinggi Model: 176 cm\r\nLingkar dada x Pinggang x Pinggul : 82cm x 60cm x 88cm\r\n\r\nLingkar Dada    :\r\nS 102 , M 106 , L 110 , XL 114 cm\r\nLebar Bahu  :\r\nS 12 , M 14, L 16 , XL 18 cm\r\nPanjang Tangan :\r\nS 42 , M 44 , L 46 , XL 48 cm\r\nPanjang Baju  :\r\nS 68 , M 70 , L 72, XL 74 cm\r\n\r\nCUCI DENGAN TANGAN\r\nJANGAN GUNAKAN PEMUTIH \r\nHINDARI DRY CLEAN \r\nSETRIKA DENGAN SUHU RENDAH\r\n', '0d93321efd98f6c37ca58e28a40be4f2.jpg', 12, 22, 2, 8),
('PRD003', 'Dress Anora', '4', 375000, 0, 38, 450, NULL, '6ea7fcad24b08988d24bd5fd5016085f.jpg', 8, 8, 9, 1),
('PRD005', 'Zebra Noxa Blue', '2', 75000, 0, 26, 250, 'Warna : Lilac, Black, Light Gray, Sage Green\r\nMaterial : Chiffon\r\nSKU :  B1100266001\r\nB1100222002, B1100203003\r\n\r\nUkuran yang Dikenakan Model\r\nSize: M\r\nTinggi Model: 176 cm\r\nLingkar dada x Pinggang x Pinggul : 82cm x 60cm x 88cm\r\n\r\nLingkar Dada    :\r\nS 102 , M 106 , L 110 , XL 114 cm\r\nLebar Bahu  :\r\nS 12 , M 14, L 16 , XL 18 cm\r\nPanjang Tangan :\r\nS 42 , M 44 , L 46 , XL 48 cm\r\nPanjang Baju  :\r\nS 68 , M 70 , L 72, XL 74 cm\r\n\r\nCUCI DENGAN TANGAN\r\nJANGAN GUNAKAN PEMUTIH \r\nHINDARI DRY CLEAN \r\nSETRIKA DENGAN SUHU RENDAH\r\n', '9c5214900391b95deae0d95f646523ae.jpg', 0, 0, 0, 0),
('PRD006', 'Xuana Alexandra', '1', 82000, 0, 28, 250, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', '30e9351c0d6551d1da6bc3318cf18965.jpg', 0, 0, 0, 0),
('PRD007', 'Jihad Blue', '1', 110000, 0, 13, 250, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', '054afe9bed77cd12aaf097dcf7decaeb.jpg', 0, 0, 0, 0),
('PRD008', 'Turbidity Jordan', '1', 140000, 0, 27, 250, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', '74f997399d1f8b982bb5466851605aae.jpg', 0, 0, 0, 0),
('PRD009', 'Dress Morilla White', '4', 375000, 0, 30, 450, '', '76e44b4a0d261504338e7af41467ed06.jpg', 0, 0, 0, 0),
('PRD010', 'Noxa Korean Set', '4', 500000, 0, 44, 250, '', 'd6d48b5b1d6a55e65fde809538650c77.jpg', 0, 0, 0, 0),
('PRD011', 'Blouse Atia', '1', 100000, 0, 30, 200, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', 'ef86fdf9bca08bf57c355f556332feae.jpg', 0, 0, 0, 0),
('PRD012', 'Loli Rafeila', '1', 125000, 0, 15, 500, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', 'f39b6e09bdde780684d3cd0b0c3e8fac.jpg', 0, 0, 0, 0),
('PRD013', 'Inara Dress', '4', 90000, 0, 44, 250, '', 'ff1f7d384c83f810602b2ba866fe4ac3.jpg', 0, 0, 0, 0),
('PRD014', 'Vinnera', '1', 170000, 0, 30, 500, 'Deskripsi Product : \r\n - Blouse Casual Lengan Panjang\r\n - Dengan Detail Kupnat Dibagian Depan\r\n - Bentuk Lengan Baloon dengan Mnaset dua Kancing \r\n- Bukaan Dengan Kancing Dibagian Belakang \r\n- SIluet A-line yang Nyaman dan Leluasa untuk untuk Dikenakan\r\n - Material Premium Tidak Stretch dan Tidak Transparent \r\n SKU : A3100265149  \r\n\r\nUkuran Product : \r\nLebar Bahu X Lingkar Dada X Panjang Baju X Panjang lengan\r\n - S (35 CM X 94 CM X 65 CM X 55 CM)\r\n - M (37 CM X 98 CM X 66 CM X 56 CM) \r\n- L (39 CM X 102 CM X 67 CM X 57 CM)\r\n - XL (41 CM X 104 CM X 68 CM X 58 CM) \r\n\r\n Perawatan : Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah', 'LINNET Pattern _ No_122 Standing Collar Blouse _ Etsy.jpg', 0, 0, 0, 0),
('PRD015', 'Jenny Dress', '2', 130000, 0, 17, 250, 'Warna : Lilac, Black, Light Gray, Sage Green\r\nMaterial : Chiffon\r\nSKU :  B1100266001\r\nB1100222002, B1100203003\r\n\r\nUkuran yang Dikenakan Model\r\nSize: M\r\nTinggi Model: 176 cm\r\nLingkar dada x Pinggang x Pinggul : 82cm x 60cm x 88cm\r\n\r\nLingkar Dada    :\r\nS 102 , M 106 , L 110 , XL 114 cm\r\nLebar Bahu  :\r\nS 12 , M 14, L 16 , XL 18 cm\r\nPanjang Tangan :\r\nS 42 , M 44 , L 46 , XL 48 cm\r\nPanjang Baju  :\r\nS 68 , M 70 , L 72, XL 74 cm\r\n\r\nCUCI DENGAN TANGAN\r\nJANGAN GUNAKAN PEMUTIH \r\nHINDARI DRY CLEAN \r\nSETRIKA DENGAN SUHU RENDAH\r\n', 'Purple - Plaid - Point Collar - Unlined - Dresses.jpg', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `grup` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `grup`) VALUES
(1, 'rizqa', 'rizqa@gmail.com', '1234', 2),
(2, 'lois', 'lois@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buktitransfer`
--
ALTER TABLE `tbl_buktitransfer`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `bkt_nopjl` (`no_penjualan`);

--
-- Indexes for table `tbl_datapenerima`
--
ALTER TABLE `tbl_datapenerima`
  ADD PRIMARY KEY (`id_datapenerima`),
  ADD KEY `pnrm_nopjl` (`no_penjualan`);

--
-- Indexes for table `tbl_datapengiriman`
--
ALTER TABLE `tbl_datapengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `pngrmn_nopjl` (`no_penjualan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`kode_plg`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`no_penjualan`),
  ADD KEY `pjl_idpgw` (`id_pgw`),
  ADD KEY `pjl_kdplg` (`kode_plg`);

--
-- Indexes for table `tbl_penjualandetail`
--
ALTER TABLE `tbl_penjualandetail`
  ADD PRIMARY KEY (`no_pjl_detail`),
  ADD KEY `pjld_idprd` (`id_prd`),
  ADD KEY `pjld_nopjl` (`no_penjualan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_prd`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buktitransfer`
--
ALTER TABLE `tbl_buktitransfer`
  MODIFY `id_transfer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_datapenerima`
--
ALTER TABLE `tbl_datapenerima`
  MODIFY `id_datapenerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_datapengiriman`
--
ALTER TABLE `tbl_datapengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_penjualandetail`
--
ALTER TABLE `tbl_penjualandetail`
  MODIFY `no_pjl_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buktitransfer`
--
ALTER TABLE `tbl_buktitransfer`
  ADD CONSTRAINT `bkt_nopjl` FOREIGN KEY (`no_penjualan`) REFERENCES `tbl_penjualan` (`no_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_datapenerima`
--
ALTER TABLE `tbl_datapenerima`
  ADD CONSTRAINT `pnrm_nopjl` FOREIGN KEY (`no_penjualan`) REFERENCES `tbl_penjualan` (`no_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_datapengiriman`
--
ALTER TABLE `tbl_datapengiriman`
  ADD CONSTRAINT `pngrmn_nopjl` FOREIGN KEY (`no_penjualan`) REFERENCES `tbl_penjualan` (`no_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `pjl_kdplg` FOREIGN KEY (`kode_plg`) REFERENCES `tbl_pelanggan` (`kode_plg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penjualandetail`
--
ALTER TABLE `tbl_penjualandetail`
  ADD CONSTRAINT `pjld_idprd` FOREIGN KEY (`id_prd`) REFERENCES `tbl_produk` (`id_prd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pjld_nopjl` FOREIGN KEY (`no_penjualan`) REFERENCES `tbl_penjualan` (`no_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
