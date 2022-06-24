<?php
require("functions/functions.php");

$data = query("SELECT * FROM buat_memo");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Catatan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#3E92CC"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  </head>
<body>
    <div class="popup-edit-box">
      <div class="edit-box">
      <input type="checkbox" id="semua" onchange="checkedAll(this)"/>
      <label for="semua" class="label">Semua</label>
      <h3 class="jumlah">Pilih item</h3>
      <button type="button" class="batal">Batal</button>
      </div>
    </div>
      <div class="navigation">
        <h3>Catatan</h3>
        <div class="setting-up">
          <a href="#" class="edit">Edit</a>
          <a href="#" class="view">
          <img src="icons/ic_dots_horizontal.png"/>
          </a>
        </div>
      </div>
        <div class="slider-content">
          <div class="slider-content-card aktif" onclick="Semua()">
            <h3>Semua</h3>
          </div>
          <div class="slider-content-card" onclick="Folder()">
            <h3>Folder</h3>
          </div>
        </div>

    <!--- content --->
<div class="main-content">
    <div class="searching">
      <input type="text" name="search" placeholder=" " class="search" autocomplete="off" required="" id="search"/>
      <label for="search" class="title-search">Cari Catatan</label>
      <button type="submit" name="submit" class="submit"><img src="icons/ic_card_search.png"/></button>
    </div>
        <?php foreach($data as $row) :?>
      <div class="card-content">
        <input type="checkbox" name="checkbox" class="checkbox"/>
        <div class="card-content-text">
          <span class="text"><?= $row['judul'];?></span>
          <p>
          <?= $row['waktu'];?></p>
        </div>
      </div>
      <?php endforeach; ?>
    <div class="navigation-bottom">
      <a href="alarm.php">
      <div class="btn-card" onclick="pengingatBaru()">
        <img src="icons/ic_alarm.png"/>
        <h3>Pengingat Baru</h3>
      </div>
      </a>
      <a href="buatMemo.php">
        <div class="btn-card">
        <img src="icons/ic_square_edit_outline.png"/>
        <h3>Buat Memo</h3>
      </div>
      </a>
    </div>
    </div>
    <!--- content end --->
    
    <!--- popup-box-sm --->
     <div class="popup-box-sm">
     <button type="button" class="btnClose">
         <img src="icons/ic_close.png"/>
       </button>
      <div class="items-popup-box-sm">
        <ul>
         <li>
           <a href="#">
           Sinkronisasi
           </a></li>
         <li>
           <a href="#">
           Pengaturan
         </a></li>
        </ul>
       </div>
     </div>
    <!--- popup-box-sm --->
<script src="js/script.js"></script>
<script src="js/jquery.js"></script>
<script>
function Semua(){
  window.location.href = "index.php";
}
function Folder(){
  window.location.href = "folder.php";
}
</script>
</body>
</html>