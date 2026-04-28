<?php
include "../koneksi.php";

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $query = "DELETE FROM siswa WHERE nis = '$nis'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil dihapus.');
                window.location.href='lihat_siswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');
                window.location.href='lihat_siswa.php';
              </script>";
    }
} else {
    header("Location: lihat_siswa.php");
}
?>