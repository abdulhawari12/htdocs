<?php
$conn = mysqli_connect("localhost","root","","stokbarang");

function query($query){
  global $conn;
  
  $result = mysqli_query($conn,$query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data){
  global $conn;
  $kode = $data['kode'];
  $nama = htmlspecialchars($data['nBarang']);
  $kd = $data['kd_satuan'];
  $satuan = $data['satuan'];
  $beli = $data['hBeli'];
  $quantity = $data['quantity'];
  $diskon = $data['diskon'];
  
  $query = mysqli_query($conn, "INSERT INTO stok_barang VALUES('','$kode','$nama','$kd','$satuan','$quantity','$diskon','$beli')");
  return mysqli_affected_rows($conn);
}
function hapus($id){
  global $conn;
  
  mysqli_query($conn,"DELETE FROM stok_barang WHERE id = $id");
  return mysqli_affected_rows($conn);
}
?>