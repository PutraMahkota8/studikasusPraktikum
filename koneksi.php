<?php
$host = "localhost";
$user = "root";
$pass = ""; // default password XAMPP biasanya kosong
$db   = "drakor_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
