<?php
include "../koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kode_kelas = $_POST['kode_kelas'];

$query = "INSERT INTO siswa (nis, nama, alamat, kode_kelas) 
          VALUES ('$nis', '$nama', '$alamat', '$kode_kelas')";

mysqli_query($koneksi, $query);

// redirect ke halaman lihat data
header("Location: lihat_siswa.php");

if ($result) {
    echo "<script>
            alert('Data berhasil ditambahkan.');
            window.location.href='lihat_siswa.php';
          </script>";
} else {
    echo "<script>
            alert('Terjadi kesalahan saat menambahkan data.');
            window.location.href='tambah_siswa.php';
          </script>";
}
?>