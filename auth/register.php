<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>

<body>
    <h2>Form Pendaftaran</h2>
    <form action="progres_register.php" method="POST">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama" required> <br><br>>

        <label for="">Username</label>
        <input type="text" name="username" required> <br><br>>

        <label for="">Email</label>
        <input type="email" name="email" required> <br><br>>

        <label for="">Password</label>
        <input type="text" name="password" required> <br><br>>

        <label for="">Konfirmasi Password</label>
        <input type="text" name="konfirmasi_password" required> <br><br>>

        <label for="">Daftar Sebagai</label>
        <option value="siswa">Siswa</option>
        <option value="guru">Guru</option>
        <option value="admin">Admin</option>

        <button type="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>

</html>