<?php
require('functions.php');
session_start();

 if( !isset($_SESSION["login"]) ){
   header("Location : index.php");
   exit;
 }
 
$form = query("SELECT * FROM form_login");
 if ( isset($_POST["btnSearch"])) {
   $form = search($_POST["search"]);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/table.css"/>
  </head>
  <body>
 <div id="modal" class="modal">
      <div class="modal-body">
      <h3>Menghapus Data Member</h3>
       <p>Apakah Anda Ingin Menghapus <span class="title-modal"><?= $form[0]["nama_lengkap"];?></span>?</p>
      </div>
      <div class="button">
        <a href="#" id="Batal" class="Batal">Batal</a>
        <a href="hapus.php?id=<?= $form[0]["id"];?>" id="Iya" class="Iya">Iya</a>
      </div>
    </div>
 
 <section class="main">
   
   <a href="logout.php" class="btn-logout" name="logout">Logout</a>
   
    <h1>Daftar Member</h1>
   <a href="tambah.php" class="btn-tmb">Tambah Member</a>
   <form action="" method="post">
     <input type="text" name="search" placeholder="Cari Member.." autocomplete="off" autofocus/>
     <button type="submit" name="btnSearch">Search</button>
   </form>
 <div class="main-table">
  <?php $i = 1; ?>
 <?php foreach ( $form as $row) : ?>
 

 
  <div class="table">
    <div class="table-body">
      <span class="th bdr1">No</span>
      <span class="td bdr2"><?= $i;?></span>
    </div>
    <div class="table-body">
      <span class="th">Username</span>
      <span class="td"><?= $row["username"];?></span>
    </div>
    <div class="table-body">
      <span class="th">Password</span>
      <span class="td"><?= $row["password"]; ?></span>
    </div>
    <div class="table-body">
      <span class="th">Email</span>
      <span class="td"><?= $row["email"];?></span>
    </div>
    <div class="table-body">
      <span class="th">Nomor Telepon</span>
      <span class="td"><?= $row["nomor_telepon"];?></span>
    </div>
    <div class="table-body">
      <span class="th">Nama Lengkap</span>
      <span class="td"><?= $row["nama_lengkap"];?></span>
    </div>
    <div class="table-body">
      <span class="th bdr3">Gambar</span>
      <span class="td bdr4"><img src="img/<?= $row['gambar'];?>" width="40" height="40" style="border-radius: 100px;"/></span>
    </div>
    <div class="table-body">
    <a href="#" class="btn-delete" id="btn-delete"><img src="img/hapus.png"/></a>
    <a href="ubah.php?id=<?= $row['id'];  ?>" class="btn-edit"><img src="img/edit.png"/></a>
    </div>
  </div>
  <?php $i++; ?>
   <?php endforeach; ?>
 </div>
 </section>
 
 
   
 <script>
   let btnHapus = document.querySelectorAll('.btn-delete');
   let modal = document.querySelector('.modal');
   let Batal = document.querySelector('.Batal');
   btnHapus.addEventListener('click', function(){
    modal.classList.add('active');
    });
 </script>
</body>
</html>