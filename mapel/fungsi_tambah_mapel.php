<?php
include "../koneksi.php";

$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$nip = $_POST['nip'];
$jumlah_jam = $_POST['jumlah_jam'];

$query = "INSERT INTO mapel (kode_mapel, nama_mapel, nip, jumlah_jam) VALUES ('$kode_mapel', '$nama_mapel', '$nip', '$jumlah_jam')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
            alert('Data berhasil ditambahkan.');
            window.location.href='lihat_mapel.php';
          </script>";
} else {
    echo "<script>
            alert('Terjadi kesalahan saat menambahkan data.');
            window.location.href='tambah_mapel.php';
          </script>";
}
?>
