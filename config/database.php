<?php
// File ini TIDAK ada di PDF, tetapi diperlukan oleh require_once di login.php & index.php.
// Default Laragon: user root, tanpa password.
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aplikasi_penjualan";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
