<?php
// Halaman uji koneksi. Buka: http://localhost/aplikasi-penjualan/cek-koneksi.php
// HAPUS file ini kalau sudah selesai dipakai.
require_once 'config/database.php';

function ok($t)  { echo "<p style='color:#198754'>&#10004; " . htmlspecialchars($t) . "</p>"; }
function bad($t) { echo "<p style='color:#dc3545'>&#10008; " . htmlspecialchars($t) . "</p>"; }

echo "<body style='font-family:sans-serif;padding:20px'><h3>Cek Koneksi Database</h3>";
ok("Koneksi ke MySQL dan database \"$db\" berhasil.");

try {
    $r = $koneksi->query("SELECT id_user, nama, username, role FROM user ORDER BY id_user");
    ok("Tabel user ditemukan, jumlah data: " . $r->num_rows);
    echo "<table border='1' cellpadding='6' style='border-collapse:collapse'><tr><th>ID</th><th>Nama</th><th>Username</th><th>Role</th></tr>";
    while ($row = $r->fetch_assoc()) {
        echo "<tr><td>{$row['id_user']}</td><td>" . htmlspecialchars($row['nama']) . "</td><td>"
           . htmlspecialchars($row['username']) . "</td><td>" . htmlspecialchars($row['role']) . "</td></tr>";
    }
    echo "</table>";
    if ($r->num_rows === 0) bad("Tabel masih kosong. Jalankan ulang database.sql.");
} catch (mysqli_sql_exception $e) {
    bad("Tabel user belum ada atau tidak bisa dibaca. Jalankan database.sql dulu. (" . $e->getMessage() . ")");
}
echo "<p><a href='login.php'>Ke halaman login</a></p></body>";
