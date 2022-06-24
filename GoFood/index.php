<?php
session_start();
require('functions/functions.php');
 
 if ( isset($_COOKIE['hide']) && isset($_COOKIE['key']) ) {
   $hide = $_COOKIE['hide'];
   $key = $_COOKIE['key'];
   
   $result = mysqli_query($conn,"SELECT username FROM form WHERE id = $hide");
   $row = mysqli_fetch_assoc($result);
   if( $key === hash('sha256', $row['username'])){
     $_SESSION['login'] = true;
   }
 }
  if(isset($_SESSION['login'])){
    header('Location : homepage.php');
    exit;
  }
  if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $result = mysqli_query($conn, "SELECT * FROM form WHERE username = '$user'");
    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user'] = $row['username'];
      if(password_verify($pass,$row['password'])){
        
        $_SESSION['login'] = true;
        
        setcookie('hide', $row['id'], time()+432000);
        setcookie('key',hash('sha256',$row['username']), time()+432000);
      }
      header("Location: homepage.php");
      exit;
    }
    $error = true;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign in | E-commerce</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
  </head>
<body>
  <?php if(isset($error)):?>
  <div class="modal showModal">
    <div class="modal-body">
      <h3>username and password wrong!</h3>
      <i class="fa fa-close"></i>
      <button type="button" id="btn-close">close</button>
    </div>
  </div>
  <?php endif;?>
 <form action="" method="post" enctype="multipart/form-data">
   <h3>Sign in</h3>
   <div class="inputText">
     <input type="text" name="user" id="user" placeholder=" " autocomplete="off"
     required=""/>
     <label for="user">Username</label>
   </div>
   <div class="inputText">
     <input type="password" name="pass" id="pass" placeholder=" " required=""/>
     <label for="pass">Password</label>
     <i class="fa fa-eye" onclick="show1()"></i>
   </div>
   <a href="#" class="links">Forgot password</a>
   <button class="button" type="submit" name="submit" id="submit">Sign in</button>
   <a href="register.php" class="link">don't have an account?</a>
 </form>
<script src="js/script.js"></script>
<script>
const btnClose = document.querySelector('#btn-close'),
      modal = document.querySelector('.modal');
btnClose.addEventListener('click', function(){
  modal.classList.remove('showModal');
});
</script>
</body>
</html>