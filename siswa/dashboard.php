<?php
session_start();

// CEK OTORISASI (PENTING!)
if (!isset($_SESSION['role'])) {
    header("Location: ../auth/login.php");
    exit;
}

if ($_SESSION['role'] != 'siswa') {
    // Jika login tapi bukan siswa, hentikan script!
    die("Akses ditolak anda bukan siswa. <href = '../auth/lougout.php'>");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
</head>

<body>
    <h1>Selamat Datang, Siswa <?php echo $_SESSION['nama']; ?></h1>
    <p>Anda login sebagai: <?php echo $_SESSION['username']; ?></p>

    <a href="../auth/logout.php">[ Logout ]</a>
</body>

</html>