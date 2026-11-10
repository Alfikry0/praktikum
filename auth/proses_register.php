<?php
require_once '../config/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];
    $role = $_POST['role'];

    // 1. Validasi Password Berbeda
    if ($password !== $konfirmasi) {
        echo "<script>alert('Password dan Konfirmasi tidak cocok'); window.location='register.php'</script>script>";
        exit;
    }
    // 2. Validasi Username/Email sudah ada atau belum
    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE '$username' OR email");
    if (mysqli_num_rows($cek_user) > 0) {
        echo "<script>alert('Username atau Email sudah terdaftar!'); window.location='register.php'</script>";
        exit;
    }

    // 3. HASH PASSWORD (PENTING KEMANAN!)
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // 4. Simpan ke database
    $query = "INSERT INTO users (nama, username, email, password, role)
            VALUES('$nama', '$username','$email','$password_hashed','$role')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('registrasi berhasil! Silahkan Login'); window.location='login.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
