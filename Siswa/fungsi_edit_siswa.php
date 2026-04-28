<?php
include "../koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kode_kelas = $_POST['kode_kelas'];

$query = "UPDATE siswa SET nis='$nis', nama='$nama', alamat='$alamat' WHERE kode_kelas='$kode_kelas'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
            alert('Data berhasil diubah.');
            window.location.href='lihat_siswa.php';
          </script>";
} else {
    echo "<script>
            alert('Terjadi kesalahan saat update data.');
            window.location.href='input_siswa.php';
          </script>";
}
?>


