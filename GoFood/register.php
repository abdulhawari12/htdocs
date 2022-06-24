<?php
require('functions/functions.php');
session_start();

 if( isset($_SESSION["login"]) ){
   header("Location : homepage.php");
   exit;
 }
 if(isset($_POST['submit'])){
   if(register($_POST) > 0){
     echo "<div class='popup4'><div class='box4'><h4>Registrasi Berhasil</h4>
     <i class='fa fa-check-circle'></i><button type='button' class='btn-success'><i class='fa fa-close'></i></button></div></div><script>
const btnClose = document.querySelector('.btn-success');
btnClose.addEventListener('click' ,function(){
  window.location ='index.php';
});
</script>";
   }else{
     echo "<script>alert('Registrasi Gagal')</script>";
   }
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign In | E-commerce</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
  </head>
<body>
 <form action="" method="post" enctype="multipart/form-data">
   <h3>Sign Up</h3>
   <img src="assets/banner.jpg" alt="." class="form-img">
   <div class="inputText">
     <input type="text" name="user" id="user" placeholder=" " autocomplete="off" required=""/>
     <label for="user">Username</label>
   </div>
   <div class="inputText">
     <input type="password" name="pass1" id="pass1" placeholder=" " required=""/>
     <label for="pass1">Password</label>
   </div>
   <div class="inputText">
     <input type="password" name="pass2" id="pass" placeholder=" " required=""/>
     <label for="pass"> New password</label>
     <i class="fa fa-eye" onclick="show2()"></i>
   </div>
   <button class="button" type="submit" name="submit" id="submit">Sign Up</button>
 </form>
<script src="js/script.js"></script>
</body>
</html>
