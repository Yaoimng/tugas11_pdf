# 🎓 Tugas Pemrograman Web: Sistem Laporan Siswa - Implementasi FPDF

## Deskripsi Proyek
Proyek ini merupakan implementasi sistem cetak laporan data siswa berbasis web dengan output PDF untuk SMK Negeri 2 Langsa. Sistem ini memungkinkan pengguna untuk menampilkan, menambah, dan mencetak data siswa kelas IX jurusan Rekayasa Perangkat Lunak dalam format PDF.

![Preview Laporan](https://github.com/user-attachments/assets/bd083817-c431-4481-8cc4-53bd9d9e65f9)

---

## Fitur
- Menampilkan daftar siswa dalam tampilan tabel
- Menambahkan data siswa baru ke dalam database
- Mencetak laporan daftar siswa dalam format PDF
- Antarmuka pengguna yang responsif dan mudah digunakan

---

## Detail Implementasi

### Database
Database terdiri dari satu tabel yaitu `mahasiswa` dengan struktur sebagai berikut:
```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    no_hp VARCHAR(15) NOT NULL,
    tanggal_lahir DATE NOT NULL
);
```

### Koneksi Database
Koneksi database diimplementasikan di file `koneksi.php`:
```php
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tutorial";

$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### Pembuatan PDF
Pembuatan PDF menggunakan library FPDF dengan implementasi sebagai berikut:
1. Membuat objek FPDF dan mengatur ukuran halaman A5 landscape
2. Menambahkan header dengan nama sekolah dan jurusan
3. Membuat tabel untuk menampilkan data siswa
4. Mengambil data dari database dan menampilkannya di tabel PDF
5. Output dokumen PDF ke browser

---

## Catatan Pengembang
Proyek ini dikembangkan sebagai tugas individu untuk mata kuliah Pemrograman Web. Implementasi ini adalah contoh sederhana yang bisa dikembangkan lebih lanjut dengan menambahkan fitur seperti:
- Fitur edit dan hapus data siswa
- Pencarian dan filter data
- Autentikasi pengguna
- Tampilan yang lebih menarik dengan framework CSS
