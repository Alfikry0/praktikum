<?php
session_start();
session_unset(); // Kosongkan semua data session
session_destroy(); // Hancurkan session

// Arahkan kembali ke halaman login
header("Location: login.php");
exit;
