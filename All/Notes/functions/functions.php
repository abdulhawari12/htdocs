<?php 
$konek = mysqli_connect("localhost","root","","notes");
function query($query){
  global $konek;
 
 $result = mysqli_query($konek,$query);
 
 $rows = [];
 
 while( $row = mysqli_fetch_assoc($result)){
   $rows[] = $row;
 }
 return $rows;
}

function tambah($data){
  global $konek;
  $judul = htmlspecialchars($data["judul"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $query = "INSERT INTO buat_memo VALUES('','$judul','$keterangan',CURRENT_TIMESTAMP)";

  mysqli_query($konek,$query);
  return mysqli_affected_rows($konek);
}
?>