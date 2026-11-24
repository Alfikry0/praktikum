-- ============================================================
-- DATABASE APLIKASI PENJUALAN (sesuai PDF Modul 02-03, Langkah 0.1)
-- Cara pakai: phpMyAdmin -> tab "SQL" -> paste semua -> klik Go
-- ============================================================
CREATE DATABASE IF NOT EXISTS aplikasi_penjualan;
USE aplikasi_penjualan;

CREATE TABLE IF NOT EXISTS user (
 id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
 nama VARCHAR(100) NOT NULL,
 username VARCHAR(50) NOT NULL,
 password VARCHAR(100) NOT NULL,
 role ENUM('Admin','Kasir') NOT NULL
);

-- Data admin untuk pengujian (password: admin123 di-hash dengan MD5)
INSERT INTO user (nama, username, password, role)
VALUES ('Administrator Sistem', 'admin', MD5('admin123'), 'Admin');
