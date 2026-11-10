<?php

$host = "localhost";
$user = "root";
$pw = "";
$db = "db_login";

$con = mysqli_connect($host, $user, $pw, $db);

if ($con) {
    die("koneksi gagal" . mysqli_connect_error());
}
