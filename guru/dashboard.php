<?php
session_start();

// CEK OTORISASI (PENTING!)
if (!isset($_SESSION['role'])) {
    header("Location: ../auth/login.php");
    exit;
}

if ($_SESSION['role'] != 'guru') {
    // Jika login tapi bukan guru, hentikan script!
    die("Akses ditolak anda bukan guru. <href = '../auth/lougout.php'>");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
</head>

<body>
    <h1>Selamat Datang, Guru <?php echo $_SESSION['nama']; ?></h1>
    <p>Anda login sebagai: <?php echo $_SESSION['username']; ?></p>

    <a href="../auth/logout.php">[ Logout ]</a>
</body>

</html>