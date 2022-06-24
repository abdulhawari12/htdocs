<?php
require("functions.php");
$id = $_GET['id'];
 if ( hapus($id) > 0) {
   echo("<script>alert('Berhasil Dihapus')</script>");
   header("Location: index.php");
   exit;
 }else {
   echo("<script>alert('Gagal Dihapus')</script>");
   header("Location: index.php");
   exit;
 }
?>