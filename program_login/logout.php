<?php   
 session_start(); 
 //menyambungkan dengan database
 $conn=mysqli_connect("localhost","root","","db_mylogin");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:index.php");  
      die();  
 }  
?>

<!--masuk html-->
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Logout</title>
</head>
<body>
     <!--menampilkan teks terima kasih,(isi sesuai username yang dimasukkan saat login)! ;)-->
     <center><h1>Terima Kasih, <?php echo $_SESSION['USER_NAME'] ?>! ;)</h1></center><br>
     <!--menampilkan teks kembali ke halaman awal, yaitu halaman login beserta link untuk menuju ke index.php-->
     <h3><a href="index.php">Kembali ke Halaman Awal</a></h3>
</body>
</html>