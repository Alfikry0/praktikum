-- Jalankan di phpMyAdmin pada database: db_login
CREATE TABLE IF NOT EXISTS user (
 id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
 nama VARCHAR(100) NOT NULL,
 username VARCHAR(50) NOT NULL,
 password VARCHAR(100) NOT NULL,
 role ENUM('Admin','Kasir') NOT NULL
);

-- Masukkan data admin untuk pengujian (password: admin123 di-hash dengan MD5)
INSERT INTO user (nama, username, password, role)
VALUES ('Administrator Sistem', 'admin', MD5('admin123'), 'Admin');
