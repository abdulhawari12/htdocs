<?php
require('functions/functions.php');

if (isset($_POST["submit"])) {
  if(tambah($_POST) > 0){
    echo "sukses";
  }
  else {
    echo "gagal";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#3E92CC"/>
    <link rel="stylesheet" href="css/buatmemo.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/boostraps.min.css" type="text/css" media="all" />
    <title>Buat Memo</title>
  </head>
  <body>
    <div class="container-fluid">
      <form action="" method="post">
      <div class="navigation">
        <button type="button" name="button" class="left" onclick="buttonLeft()">
          <img src="icons/ic_arrow_left_thick.png"/>
        </button>
        <div class="btn-box">
          <button type="button" class="btnReplay1">
            <img src="icons/ic_reply.png"/>
          </button>
          <button type="button" class="btnReplay2">
            <img src="icons/ic_share.png"/>
          </button>
          <button type="submit" class="btnReplay3" name="submit">
            <img src="icons/ic_check.png"/>
          </button>
        </div>
      </navigation>
    </div>
   <div class="container-fluid">
        <input type="text" name="judul" placeholder="Masukkan judul" id="judul" autocomplete="off" required=""/>
        <textarea type="textarea" class="textarea" name="keterangan" id="textarea" autofocus=""></textarea>
    </div>
    <div class="navigation-bottom">
      <div class="box-card-img">
        <img src="icons/ic_alphabetical_variant.png"/>
      </div>
      <div class="box-card-img">
        <img src="icons/ic_message_image.png"/>
      </div>
      <div class="box-card-img">
        <img src="icons/ic_alarm.png"/>
      </div>
      <div class="box-card-img">
        <img src="icons/ic_wallpaper.png"/>
      </div>
     </form>
    </div>
<script src="js/script.js"></script>
</body>
</html>