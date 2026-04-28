<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Pelajaran</title>
    <style>
        h1 {
            text-align: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: aqua;
            color: black;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;

        }

        
        .container {
            background-color: white;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            width: 80%;
            position: relative;
            left: 100px;
        }
        #tombol_tambah {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            position: absolute;
            left: 30px;
            top: 2.8px;
        }

        #tombol_tambah:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Daftar Siswa</h1>
    <hr>
    <br>
    <div class="container">
        <input type="button" id="tombol_tambah" value="Tambah siswa" onclick="window.location.href='input_siswa.php'">
        <table>
            <tr>
                <th>Nis </th>
                <th>Nama siswa </th>
                <th>Alamat </th>
                <th>Kode Kelas </th>
                <th>action</th>
            </tr>
            <?php
            $query = "SELECT * FROM siswa";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nis'] . "</td>";
                echo "<td>" . $row['nama_siswa'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['kode_kelas'] . "</td>";
                echo "<td><input type='button' value='Hapus' onclick=\"if(confirm('Apakah anda yakin?')) window.location.href='hapus_siswa.php?nis=" . $row['nis'] . "'\" style='background-color:red; color:white;'>
                <input type='button' value='Edit' onclick=\"window.location.href='edit_siswa.php?nis=". $row['nis'] . "'\" style='background-color:green; color:white'>
                </td>";
                
                echo "</tr>";
            }
            ?>
        </table>
        
    </div>
</body>

</html>