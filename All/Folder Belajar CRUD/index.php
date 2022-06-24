<?php
session_start();
require('functions.php');

//cek cookie
if( isset($_COOKIE["hide"]) && isset($_COOKIE["key"]) ) {
   $hide = $_COOKIE["hide"];
   $key = $_COOKIE["key"];
   
   // ambil username berdasarkan id
   $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $hide");
  $row = mysqli_fetch_assoc($result);
  //cek cookie dan username nya
  if( $key === hash('sha256', $row['username']) ) {
    $_SESSION['login'] = true;
  }
}

// cek username && password
if( isset($_SESSION["login"]) ) {
   header("Location : dashboard.php");
   exit;
}

 if ( isset($_POST["submit"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
   // cekk username nya
  if ( mysqli_num_rows($result) === 1 ) {
     
     // cekk password nya 
     $row = mysqli_fetch_assoc($result);
     if ( password_verify($password, $row["password"]) ) {
       
       // set session nya
       $_SESSION["login"] = true;
       
       // cek remember me
       if( isset($_POST["remember"]) ) {
         setcookie('hide', $row['id'], time()+17400);
         setcookie('key', hash('sha256', $row['username']), time()+17400);
       }
        header("Location : dashboard.php");
        exit;
     }
  }
   $error = true;
 }
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/masuk.css"/>
    <title>LOGIN PAGE</title>
  </head>
  <body>
    <?php if ( isset($error) ) : ?>
      <div id="modal">
        <div id="modal-body">
          <h3>Username Dan Password Salah!</h3>
          <button type="submit" id="btn-back">OKE</button>
        </div>
      </div>
    <?php endif; ?>
    
    <div class="container">
      <form action="" method="post">
        <h3>MASUK</h3>
       <div class="form-body">
          <input type="text" placeholder="Username.." name="username" required="" autocomplete="off" autofocus=""/>
          <input type="password" placeholder="Password.." name="password"/>
          <input type="checkbox" name="remember" id="remember"/>
          <label for="remember">Remember Me</label>
          <a href="#" id="btn"><button class="button" name="submit">MASUK</button></a>
          <div class="form-end">
            <a href="#" id="ps"><span>Lupa Kata Sandi?</span></a>
           <a href="daftar.php" id="Create_account"><span>Tidak Punya Akun? Klik Disini!</span></a>
           </div>
        </div>
      </form>
    </div>
    
    
    <script src="js/script.js"></script>
  </body>
</html>