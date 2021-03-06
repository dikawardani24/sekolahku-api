CREATE DATABASE IF NOT EXISTS sekolahku;
USE sekolahku;
CREATE TABLE IF NOT EXISTS siswa(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  nama_depan VARCHAR(50) NOT NULL,
  nama_belakang VARCHAR(50) NOT NULL,
  no_hp VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL,
  tgl_lahir DATE NOT NULL,
  gender VARCHAR(10) NOT NULL,
  jenjang VARCHAR(10) NOT NULL,
  hobi VARCHAR(100) NOT NULL,
  alamat TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS guru(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  nama_depan VARCHAR(50) NOT NULL,
  nama_belakang VARCHAR(50) NOT NULL,
  no_hp VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL,
  tgl_lahir DATE NOT NULL,
  gender VARCHAR(10) NOT NULL,
  jenjang VARCHAR(10) NOT NULL,
  hobi VARCHAR(100) NOT NULL,
  alamat TEXT NOT NULL
);
