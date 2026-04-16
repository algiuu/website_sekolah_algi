<?php
include "../koneksi.php";
if(isset($_GET['kode_mapel'])){
$kode_mapel = $_GET['kode_mapel'];
$query = "SELECT * FROM mapel WHERE kode_mapel = $kode_mapel";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Pelajaran</title>
</head>
<body>
    <h1>Edit Mata Pelajaran</h1>
    <form action="fungsi_edit_mapel.php" method="post">
        <label>Kode Mapel:</label><br>
        <input type="number" name="kode_mapel" id="kode_mapel" value="<?php echo $data['kode_mapel']; ?>" readonly><br>
        <label>Nama Mapel:</label><br>
        <input type="text" name="nama_mapel" id="nama_mapel" value="<?php echo $data['nama_mapel']; ?>" required><br>
        <label>Guru (NIP):</label><br>
        <select name="nip" id="nip">
            <?php
                $query_guru = 'SELECT nip, nama_guru FROM guru';
                $result_guru = mysqli_query($koneksi, $query_guru);
                while ($row = mysqli_fetch_assoc($result_guru)){
                    $selected = ($row['nip'] == $data['nip']) ? "selected" : "";
                    echo "<option value='".$row['nip']."' $selected>".$row['nip']." - ".$row['nama_guru']."</option>";
                }
            ?>
        </select>
        <br>
        <label>Jumlah Jam:</label><br>
        <input type="number" name="jumlah_jam" id="jumlah_jam" value="<?php echo $data['jumlah_jam']; ?>" required><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>