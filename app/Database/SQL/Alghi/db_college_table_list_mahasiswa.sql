CREATE TABLE list_mahasiswa (
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_perguruan_tinggi` int(11) DEFAULT NULL,
  `nipd` varchar(50) DEFAULT NULL,
  `ipk` decimal(3,2) DEFAULT NULL,
  `total_sks` int(11) DEFAULT NULL,
  `id_sms` char(36) NOT NULL,
  `id_mahasiswa` varchar(50) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `nama_agama` varchar(255) DEFAULT NULL,
  `id_prodi` varchar(50) DEFAULT NULL,
  `nama_program_studi` varchar(255) DEFAULT NULL,
  `id_status_mahasiswa` int(11) DEFAULT NULL,
  `nama_status_mahasiswa` varchar(255) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `id_periode` varchar(50) DEFAULT NULL,
  `nama_periode_masuk` varchar(255) DEFAULT NULL,
  `id_registrasi_mahasiswa` char(36) DEFAULT NULL,
  `id_periode_keluar` varchar(50) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `tgl_create` date DEFAULT NULL,
  `status_sync` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;