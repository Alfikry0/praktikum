<?php
// ============================================================
// KONEKSI DATABASE  (dipakai: require_once 'config/database.php')
// Setelah di-require, variabel $koneksi siap dipakai di semua halaman.
// ============================================================
$host = 'localhost';
$port = 3306;                  // ubah kalau MySQL kamu jalan di port lain (mis. 3307)
$user = 'root';                // default Laragon / XAMPP
$pass = '';                    // default Laragon / XAMPP: kosong
$db   = 'aplikasi_penjualan';  // nama database; ganti ke 'penjualan' kalau pakai penjualan.sql

// Error mysqli dilaporkan sebagai exception (perilaku sama di semua versi PHP)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = new mysqli($host, $user, $pass, $db, $port);
    $koneksi->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    die('<b>Koneksi database gagal.</b><br>'
      . 'Cek: MySQL sudah menyala? Nama database "' . htmlspecialchars($db) . '" sudah dibuat? Username/password/port benar?<br>'
      . '<small>Pesan error: ' . htmlspecialchars($e->getMessage()) . '</small>');
}

// Alias supaya kode lama yang memakai $con tetap jalan
$con = $koneksi;
