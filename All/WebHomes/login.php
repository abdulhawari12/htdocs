<?php
require("functions/functions.php");
session_start();
if(isset($_COOKIE["key"]) && isset($_COOKIE["value"])){
  $key = $_COOKIE["key"];
  $value = $_COOKIE["value"];
  
  $result = mysqli_query($conn, "SELECT username FROM admin_login WHERE id = '$key'");
  
  $rows = mysqli_fetch_assoc($result);
   if($value === hash('sha256',$rows["username"])){
     $_SESSION["login"] = true;
   }
}
if(isset($_SESSION["login"])){
  header("Location: homepage.php");
  exit;
}
 if (isset($_POST["submit"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  
  $result = mysqli_query($conn, "SELECT * FROM admin_login WHERE username = '$user'");
  
  if(mysql_num_rows($result) === 1){
    $rows = mysqli_fetch_assoc($result);
    if(password_verify($pass,$rows["password"])){
      $_SESSION["login"] = true;
      if(isset($_POST["remember"])){
        setcookie('key', $rows["id"]);
        setcookie('value', hash('sha256',$rows["username"]),time()+17400);
      }
      header("Location: homepage.php");
      exit;
    }
  }
  $err = true;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#ef6351ff"/>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Sign-In | WebHomes</title>
  </head>
<body>
  <form action="" method="post">
    <h3>Sign In</h3>
    <div class="input">
      <input type="text" name="username" placeholder=" " id="user" required="" autocomplete="off"/>
      <label for="user" class="tooltips1">Username</label>
    </div>
    <div class="input">
      <input type="password" name="password" placeholder=" " id="pass1"/>
      <label for="pass1" class="tooltips2">Password</label>
     <i class="bi bi-eye" onclick="show()"></i>
    </div>
    <div class="input-check">
    <input type="checkbox" name="remember" id="remember"/>
    <label for="remember">Remember Me!</label>
    </div>
    <button type="submit" name="submit">Sign In</button>
  </form>
<script src="js/script.js"></script>
</body>
</html>