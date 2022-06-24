<?php
require("functions/functions.php");
session_start();
if (isset($_SESSION["login"])) {
  header("Location : login.php");
  exit;
}
if (isset($_POST["submit"])) {
  if(tambah($_POST) > 0)
  {
    echo("<script>
const Swal = document.querySelector('.alert');
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: true,
  timer: 1500
});
  </script>");
  }else {
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#ef6351ff"/>
    <link rel="stylesheet" href="css/register.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Sign-Up | WebHomes</title>
  </head>
<body>
  <form action="" method="post">
    <h3>Sign Up</h3>
    <div class="input">
      <input type="text" name="username" placeholder=" " id="user" required="" autocomplete="off"/>
      <label for="user" class="tooltips1">Username</label>
    </div>
    <div class="input">
      <input type="password" name="password" placeholder=" " id="pass2"/>
      <label for="pass2" class="tooltips2">Password</label>
    </div>
    <div class="input">
      <input type="password" name="password2" placeholder=" " id="pass3"/>
      <label for="pass3" class="tooltips3">Enter Password</label>
    </div>
    <div class="checkbox">
      <i class="bi bi-eye" id="showPass" onclick="showPass()"></i>
      <label for="showPass">Show Password</label>
    </div>
    <button type="submit" name="submit">Sign Up</button>
  </form>
<script src="js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  
const btnBack = document.getElementById("btnCheck");
btnBack.addEventListener('click', function(){
  window.location.href='login.php';
});
var stat = false;
function showPass(){
  if(stat){
  document.getElementById("pass3").setAttribute("type","password");
  document.getElementById("showPass").style.color="#11101d";
  document.getElementById("pass2").setAttribute("type","password");
  stat = false;
  }else{
  document.getElementById("pass3").setAttribute("type","text");
  document.getElementById("showPass").style.color="#ef6351ff";
  document.getElementById("pass2").setAttribute("type","text");
  stat = true;
  }
}
</script>
</body>
</html>