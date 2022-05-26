<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "kia";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjenis_kelamin=$_POST['jenis_kelamin'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

//memasukkan nilai dalam tabel kontak pada database "kia"
$sql="INSERT INTO kontak (id, nama, jenis_kelamin, email, alamat, kota, pesan) VALUES ('','$vnama','$vjenis_kelamin','$vemail','$valamat','$vkota','$vpesan')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo "Proses simpan ke database berhasil";
//header("location:kontak.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES SIMPAN</title>
</head>
<body>
    <br><br><br>
    <a href="cetak.php">Periksa</a>
</body>
</html>