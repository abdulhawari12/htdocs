<?php 
require('functions/functions.php');
session_start();

 if( isset($_SESSION["login"]) ){
   header("Location : index.php");
   exit;
 }

if( isset($_POST["daftar"]) ){
  if( daftar($_POST) > 0){
    echo "<script>
         alert('Daftar Berhasil');
         </script>";
  }else {
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/regist.css"/>
    <title>Halaman | Login</title>
 </head>
<body>
  <section id="main" class="dark">
    <form action="" method="post" id="form" class="dark">
    <!-- checkbox mode dark / night -->
    <div class="mode"></div>
    <!-- end  -->
         <h3 class="dark">Daftar</h3>
        <div id="form-body" class="dark">
          
          <input type="text" name="email" placeholder="Masukkan Gmail ..." required="" autocomplete="off" autofocus class="dark"/>
          
          <input type="text" name="nomor_telepon" placeholder="Masukkan Nomor Telepon ..." required="" autocomplete="off" autofocus class="dark"/>
          
          <input type="text" name="username" placeholder="Masukkan Username ..." required="" autocomplete="off" autofocus class="dark"/>
          
          <input type="password" name="password" placeholder="Masukkan Kata sandi ..." class="dark"/>
         
          <input type="password" name="password2" placeholder="Masukkan Kata Sandi Baru ..." class="dark"/>
         
          <button type="submit" name="daftar" id="btn-login" class="dark">Daftar</button>
          
          <div id="link-items" class="dark">
            <a href="index.php">Sudah Punya Akun?</a>
          </div>
          
        </div>
   </form>
 </section>
<script src="js/script.js"></script>
</body>
</html>