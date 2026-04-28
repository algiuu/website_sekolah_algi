<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">➕ Tambah Data Siswa</h3>

        <form action="simpan_siswa.php" method="POST">

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kode_kelas" class="form-select">
                    <option value="20001">XI RPL 1</option>
                    <option value="20002">XI RPL 2</option>
                    <option value="20002">XI RPL 3</option>
                    <option value="20003">XI TKJ 1</option>
                    <option value="20003">XI TKJ 2</option>
                    <option value="20003">XI TKJ 3</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">💾 Simpan</button>

            <a href="lihat_siswa.php" class="btn btn-secondary w-100 mt-2">⬅ Kembali</a>

        </form>
    </div>

</div>

</body>
</html>