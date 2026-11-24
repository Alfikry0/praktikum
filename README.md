# Aplikasi Penjualan (sesuai PDF Modul 02-03 + LKPD CRUD Pengguna)

## Struktur folder
```
aplikasi-penjualan/
  config/
    database.php      koneksi MySQL (variabel $koneksi)
    koneksi.php       pemanggil database.php (cadangan)
  modul/
    user/
      index.php       CRUD pengguna (LKPD Tahap #1 - #12)
  dashboard.php       Modul 03, Langkah 3.2
  index.php           Modul 03, Langkah 3.1 (kerangka + routing)
  login.php           Modul 02, Langkah 2.1
  logout.php          Modul 02, Langkah 2.2
  database.sql        kode untuk phpMyAdmin
  cek-koneksi.php     halaman tes koneksi (hapus setelah dipakai)
```

## Cara pasang
1. Nyalakan Apache dan MySQL (Laragon: Start All).
2. Salin folder `aplikasi-penjualan` ke `C:\laragon\www\` (XAMPP: `C:\xampp\htdocs\`).
3. Buka phpMyAdmin (`http://localhost/phpmyadmin`) -> tab **SQL** -> paste isi `database.sql` -> **Go**.
4. Tes koneksi: `http://localhost/aplikasi-penjualan/cek-koneksi.php`
5. Login: `http://localhost/aplikasi-penjualan/login.php`  ->  `admin` / `admin123`
6. Menu Data Pengguna: `http://localhost/aplikasi-penjualan/index.php?page=user`

## Pengaturan koneksi (config/database.php)
host `localhost`, user `root`, password kosong, database `aplikasi_penjualan`, port `3306`.
Ubah port di baris `$port` kalau MySQL kamu bukan di 3306.

## Catatan
- Menu Produk, Pelanggan, Pesanan, dan Faktur memang belum ada modulnya di PDF,
  jadi akan muncul "Modul ... belum tersedia" (sesuai PDF Modul 03).
- `config/database.php` dan `cek-koneksi.php` tidak ditulis di PDF; ditambahkan agar aplikasi bisa jalan.
