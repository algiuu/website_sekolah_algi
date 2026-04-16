<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Pelajaran</title>
</head>\
<body>
    <h1>Tambah Mata Pelajaran</h1>
    <form action="fungsi_tambah_mapel.php" method="post">
        <label>Kode Mapel:</label><br>
        <input type="number" name="kode_mapel" id="kode_mapel" required><br>
        <label>Nama Mapel:</label><br>
        <input type="text" name="nama_mapel" id="nama_mapel" required><br>
        <label>Guru (NIP):</label><br>
        <select name="nip" id="nip">
            <?php
                $query = 'SELECT nip, nama_guru FROM guru';
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['nip']."'>".$row['nip']." - ".$row['nama_guru']."</option>";
                }
            ?>
        </select>
        <br>
        <label>Jumlah Jam:</label><br>
        <input type="number" name="jumlah_jam" id="jumlah_jam" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>