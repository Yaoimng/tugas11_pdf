-- Create the database
CREATE DATABASE tutorial;

-- Use the database
USE tutorial;

-- Create the mahasiswa table
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    no_hp VARCHAR(15) NOT NULL,
    tanggal_lahir DATE NOT NULL
);

-- Insert sample data (based on your image)
INSERT INTO mahasiswa (nim, nama_lengkap, no_hp, tanggal_lahir) VALUES
('71102132', 'Nuris Akbar', '089699935552', '2017-09-02'),
('71102133', 'M Hafidz Muzaki', '089699935553', '2017-09-02'),
('71102134', 'Wahyu Safrizal', '089699935554', '2017-09-03'),
('71102135', 'Irma Muliana', '089699935555', '2017-09-03');