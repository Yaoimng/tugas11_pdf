<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Siswa</h1>
        
        <form action="proses_tambah.php" method="POST">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" id="no_hp" name="no_hp" required>
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            
            <div style="margin-top: 20px;">
                <button type="submit" class="btn">Simpan</button>
                <a href="index.php" class="btn btn-secondary" style="margin-left: 10px;">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>