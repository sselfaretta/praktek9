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
      <title>Dashboard</title>  
      <style>  
           /*css pengaturan tampilan teks yang akan ditampilkan, yaitu selamat datang,... dan logout*/ 
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
     <!--menampilkan teks selamat datang,(isi sesuai username yang dimasukkan saat login)! ;)-->
     <center><h1>Selamat Datang, <?php echo $_SESSION['USER_NAME'] ?>! ;)</h1></center>
     <br><br><br>
     <!--menampilkan teks logout beserta link untuk menuju ke halaman logout.php-->
     <h3><a href="logout.php">Logout</a></h3>  
 </body>  
 </html>