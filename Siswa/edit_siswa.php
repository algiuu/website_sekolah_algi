<?php
include "../koneksi.php";
if(isset($_GET['nis'])){
$nis = $_GET['nis'];
$query = "SELECT * FROM siswa WHERE nis = $nis";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="fungsi_edit_siswa.php" method="post">
        <label>NIS:</label><br>
        <input type="number" name="nis" id="nis" value="<?php echo $data['nis']; ?>" readonly><br>
        <label>Nama siswa:</label><br>
        <input type="text" name="nama" id="nama" value="<?php echo $data['nama_siswa']; ?>" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?> " required> <br>
        <label>Kelas(Kode Kelas):</label><br>
        <select name="kode_kelas" id="kode_kelas">
            <?php
                $query_alamat = 'SELECT kode_kelas, nama_kelas FROM kelas';
                $result_alamat = mysqli_query($koneksi, $query_alamat);
                while ($row = mysqli_fetch_assoc($result_alamat)){
                    $selected = ($row['kode_kelas'] == $data['kode_kelas']) ? "selected" : "";
                    echo "<option value='".$row['kode_kelas']."' $selected>".$row['kode_kelas']." - ".$row['nama_kelas']."</option>";
                }
            ?>
        </select>
        <br>
        
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>