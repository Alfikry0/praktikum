<?php

$host = "localhost";
$user = "root";
$pw = "";
$db = "db_login";

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
    die("koneksi gagal" . mysqli_connect_error());
}
