<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","db_mylogin");  
 $msg=""; 
 //menyambungkan halaman web dengan database 
 if (isset($_POST['submit'])) {  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      $sql=mysqli_query($conn,"select * from tbl_login where username='$email' && password='$password'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
           //jika login berhasil  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_NAME']=$row['username'];  
           header("location:cetak.php");
           //jika login gagal (username/pw tidak sesuai), maka pesan yang akan ditampilkan...
      }else{  
           $msg="Mohon, Masukkan Data yang Valid!";  
      }  
 }  
 ?> 

 <!--masuk html-->
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" type="text/css" href="css/style.css">  
      <title>Halaman Awal Login</title>  
 </head>  
 <body>  
 <div class="main">  
      <div class="flex">  
           <div class="content">
                <h2 class="title">Login</h2>  
                <form method="post" action="">  
                     <!--membuat kolom untuk input username dan password-->
                     <label for="username">Username</label>  
                     <div class="box">  
                          <input type="text" name="email" placeholder="Username" class="form-control" required>  
                     </div>  
                     <label for="password">Password</label>  
                     <div class="box">  
                          <input type="password" name="password" placeholder="Password" class="form-control" required>  
                     </div> 
                     <!--tombol login, jika berhasil masuk cetak.php-->
                     <div class="btn-box">  
                          <input type="submit" name="submit" value="Login" class="btn submit-btn">  
                     </div>  
                     <!--jika gagal, menampilkan pesan gagal yang telah ditentukan-->
                     <div class="error">  
                          <?php echo $msg ?>  
                     </div>  
                </form>  
           </div>  
      </div>  
 </div>  
 </body>  
 </html>  