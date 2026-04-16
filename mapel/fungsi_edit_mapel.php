<?php
include "../koneksi.php";

$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$nip = $_POST['nip'];
$jumlah_jam = $_POST['jumlah_jam'];

$query = "UPDATE mapel SET nama_mapel='$nama_mapel', nip='$nip', jumlah_jam='$jumlah_jam' WHERE kode_mapel='$kode_mapel'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
            alert('Data berhasil diubah.');
            window.location.href='lihat_mapel.php';
          </script>";
} else {
    echo "<script>
            alert('Terjadi kesalahan saat update data.');
            window.location.href='tambah_mapel.php';
          </script>";
}
?>


