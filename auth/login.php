<?php
session_start();
require_once '../config/koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Cari user berdasarkan username
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    // Jika user ditemukan (jumlah baris > 0)
    if (mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_assoc($query);

        // Cek kecocokan password menggunakan password_verify()
        if (password_verify($password, $row['password'])) {
            // PRAKTIKUM 8: SETUP SESSION DI SINI NANTI
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            // PRAKTIKUM 9: REDIRECT MULTI ROLE DI SINI NANTI

            if ($row['role'] == 'admin') {
                header("Location ../admin/dashboard.php");
            } elseif ($row['role'] == 'guru') {
                header("Location ../guru/dashboard.php");
            } else {
                header("Location ../siswa/dashboard.php");
            }
            exit;
        } else {
            $error = "Password Salah";
        }
    } else {
        $error = "Username Tidak Terdaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Silahkan Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>