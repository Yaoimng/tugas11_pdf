<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    
    // Insert data into the database
    $query = "INSERT INTO mahasiswa (nim, nama_lengkap, no_hp, tanggal_lahir) 
              VALUES ('$nim', '$nama_lengkap', '$no_hp', '$tanggal_lahir')";
    
    if (mysqli_query($connect, $query)) {
        // Redirect to index page with success message
        header("Location: index.php?status=success");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
?>