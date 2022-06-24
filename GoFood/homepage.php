<?php
require('functions/functions.php');
session_start();

 if( !isset($_SESSION["login"]) ){
   header("Location : index.php");
   exit;
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0099ff" />
    <link rel="stylesheet" href="css/homepage.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />
    <title>GooFood | Homepage</title>
  </head>
<body>
  <nav class="navigation">
    <div class="logo-title">
      <h3 class="nav-title">GooFood</h3>
    </div>
    <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="menu-items">
      <ul>
        <li class="items actived">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="items">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Cart</span>
          </a>
        </li>
        <li class="items">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Account</span>
          </a>
        </li>
        <li class="items">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
          </a>
        </li>
        <li class="items">
          <a href="logout.php">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <h1>
  Selamat Datang, <?= $_SESSION['user']; ?>
  </h1>
<script src="js/script.js"></script>
</body>
</html>