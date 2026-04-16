<?php
include "../koneksi.php";

if (isset($_GET['kode_mapel'])) {
    $kode_mapel = $_GET['kode_mapel'];
    $query = "DELETE FROM mapel WHERE kode_mapel = '$kode_mapel'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil dihapus.');
                window.location.href='lihat_mapel.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');
                window.location.href='lihat_mapel.php';
              </script>";
    }
} else {
    header("Location: lihat_mapel.php");
}
?>