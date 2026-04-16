<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah_algi");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>