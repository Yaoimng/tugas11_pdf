<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Laporan Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .action-btn {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .action-btn:hover {
            background-color: #45a049;
        }
        .btn-blue {
            background-color: #2196F3;
        }
        .btn-blue:hover {
            background-color: #0b7dda;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .alert {
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            border-radius: 4px;
            margin-bottom: 15px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SEKOLAH MENENGAH KEJURUAN NEGERI 2 LANGSA</h1>
        <h2 style="text-align: center;">Sistem Laporan Siswa</h2>
        
        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert" style="display: block;">
            Data berhasil disimpan!
        </div>
        <?php endif; ?>
        
        <a href="cetak_pdf.php" class="action-btn" target="_blank">Cetak Laporan PDF</a>
        <a href="tambah_siswa.php" class="action-btn btn-blue">Tambah Data Siswa</a>
        
        <h3>Daftar Siswa Kelas IX Jurusan Rekayasa Perangkat Lunak</h3>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>No HP</th>
                <th>Tanggal Lahir</th>
            </tr>
            <?php
            include 'koneksi.php';
            $result = mysqli_query($connect, "SELECT * FROM mahasiswa");
            
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['nama_lengkap']."</td>";
                echo "<td>".$row['no_hp']."</td>";
                echo "<td>".date('Y-m-d', strtotime($row['tanggal_lahir']))."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    
    <script>
        // Auto hide alert after 3 seconds
        setTimeout(function() {
            var alert = document.querySelector('.alert');
            if(alert) {
                alert.style.display = 'none';
            }
        }, 3000);
    </script>
</body>
</html>