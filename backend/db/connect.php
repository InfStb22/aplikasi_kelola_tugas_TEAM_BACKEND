<?php
// Mengambil konfigurasi dari file environment
$host = getenv('DB_HOST') ?: 'localhost';  // Menggunakan variabel lingkungan, fallback ke localhost jika tidak ada
$user = getenv('DB_USER') ?: 'root';       // Menggunakan variabel lingkungan, fallback ke root jika tidak ada
$password = getenv('DB_PASS') ?: '';       // Menggunakan variabel lingkungan, fallback ke kosong jika tidak ada
$dbname = getenv('DB_NAME') ?: 'aplikasi_jadwal_mata_kuliah';  // Nama database

// Membuat koneksi menggunakan mysqli
$conn = new mysqli($host, $user, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    error_log("Koneksi gagal: " . $conn->connect_error);  // Menyimpan error ke log tanpa menampilkan ke user
    die("Koneksi gagal, silakan coba lagi nanti.");
}

// Menggunakan charset UTF-8 untuk keamanan dan kompatibilitas
$conn->set_charset("utf8");
