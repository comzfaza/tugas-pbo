<?php
// Koneksi simpel
// $conn = mysqli_connect("localhost", "root", "", "bebasaja");
// if (!$conn) {
//   die("Koneksi Gagal");
// }
// echo "Koneksi Berhasil";

// PDO -> PHP DATA OBJECT

// instansiasi class
$koneksi = new PDO("mysql:host=localhost;dbname=bebasaja", "root", "");
// $koneksi->query("INSERT INTO siswa VALUES ('6','cobaBelajarBackEnd')");
// $koneksi->query("DELETE FROM siswa WHERE id=6");
// $koneksi->query("UPDATE siswa SET nama='kerbau' WHERE id=2");
$koneksi->query("SELECT * FROM siswa WHERE id=2");

// mengecek database berhasil terkoneksi atau tidak
if ($koneksi) {
    echo "Database berhasil terkoneksi";
} else {
    echo "Database gagal terkoneksi";
}
?>