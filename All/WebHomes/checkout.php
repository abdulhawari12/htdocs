<?php
require("functions/functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/checkout.css" type="text/css" media="all" />
    <title>Checkout | WebHomes</title>
  </head>
<body>
  <div class="header">
    <div class="buttonLeft" onclick="back()">
      <img src="icons/ic_arrow_left_drop_circle.png"/>
    </div>
      <div class="title">
        <h3>Checkout</h3>
      </div>
    <div class="banner-img">
      <img src="img/template/1.png"/>
    </div>
    <div class="detail">
      <h3 class="tipe">Premium</h3>
      <span class="text">
     class pertinax accusata simul has tantas maximus urbanitas quot principes patrioque leo ex finibus mollis veritus postulant finibus enim nonumes
      </span>
      <div class="box-text">
        <h3>Features : </h3>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
        <span>1. NONE</span>
      </div>
      <div class="box-text">
        <h3>Price </h3>
        <span>Rp. 1.000.000,-</span>
      </div>
      <form class="buttonBuy" method="post" action="">
        <button type="submit" name="buy">Buy Now</button>
      </form>
    </div>
  </div>
<script>
  function back(){
    window.location.href = "template.php";
  }
</script>
</body>
</html>