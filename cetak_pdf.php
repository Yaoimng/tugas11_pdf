<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUAN NEGERI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'NIM',1,0,'C');
$pdf->Cell(80,6,'NAMA MAHASISWA',1,0,'C');
$pdf->Cell(40,6,'NO HP',1,0,'C');
$pdf->Cell(40,6,'TANGGAL LHR',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(30,6,$row['nim'],1,0,'C');
    $pdf->Cell(80,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(40,6,$row['no_hp'],1,0,'C');
    
    // Format tanggal to display in a more readable format
    $tanggal = date('Y-m-d', strtotime($row['tanggal_lahir']));
    $pdf->Cell(40,6,$tanggal,1,1,'C'); 
}

$pdf->Output();
?>