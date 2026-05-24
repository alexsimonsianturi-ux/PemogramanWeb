<?php
include 'koneksi.php';
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$sql = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";
$conn->query($sql);
echo "Data berhasil disimpan!<br>";
echo "<a href='index.php'>Kembali ke Halaman Index</a>";
?>