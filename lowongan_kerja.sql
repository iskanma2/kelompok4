USE lowongan_kerja;


CREATE TABLE lowongan_kerja (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nama VARCHAR(50) NOT NULL,
  nama_panggilan VARCHAR(50),
  nomor_hp VARCHAR(15) NOT NULL,
  alamat VARCHAR(100) NOT NULL,
  pendidikan_terakhir ENUM('SMA/SMK', 'D3', 'S1', 'S2') NOT NULL,
  pengalaman INT(2),
  universitas ENUM('Universitas Gadjah Mada', 'Institut Teknologi Bandung', 'Universitas Indonesia', 'Universitas Brawijaya', 'Universitas Airlangga') NOT NULL,
  jurusan ENUM('Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Kimia', 'Ekonomi') NOT NULL,
  departemen ENUM('Teknologi Informasi', 'Keuangan', 'Pemasaran', 'Produksi') NOT NULL,
  negara ENUM('Indonesia', 'Malaysia', 'Singapura', 'Jepang', 'Amerika Serikat') NOT NULL,
  cv VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
