<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Sekolah</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
        }
        .card:hover {
            transform: scale(1.03);
            transition: 0.3s;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-dark bg-dark shadow">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">🎓 Website Sekolah</span>
    </div>
</nav>


<div class="container mt-5">

    <div class="text-center text-white mb-4">
        <h1>Dashboard</h1>
        <p>Manajemen Data Sekolah</p>
    </div>

    <div class="row justify-content-center">

        
        <div class="col-md-4">
            <div class="card shadow text-center p-4">
                <h3>📋 Data Siswa</h3>
                <p>Lihat semua data siswa</p>
                <a href="siswa/lihat_siswa.php" class="btn btn-primary">Buka</a>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card shadow text-center p-4">
                <h3>📋 Data Mapel</h3>
                <p>Input data siswa baru</p>
                <a href="mapel/lihat_mapel.php" class="btn btn-success">Buka</a>
            </div>
        </div>

    </div>

</div>

<footer class="text-center text-white mt-5">
    <p>© 2026 Website Sekolah</p>
</footer>

</body>
</html>