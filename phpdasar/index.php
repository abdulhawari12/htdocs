<?php

 class Hitung
 {
  public $harga=0;
  public $diskon=0;
  function Cek_Harga(){
   //nilai diskon = nilai harga dikali nilai diskon dibagi 100
   $hasil=$this->harga*($this->diskon/100);
   //harga setelah di diskon adalah harga barang dikurangi nilai diskon
   return($this->harga - $hasil);
  }
 }

?>

<?php
  //mengset nilai variabel err ketika kosong
  $diskon_err = $harga_barang_err = $hasil ="";
  //validasi
  if($_SERVER['REQUEST_METHOD']=='POST'){

  if(empty(trim($_POST['diskon']))){
   $diskon_err="Nilai diskon tidak boleh kosong";
  }else{
   $diskon=$_POST['diskon'];
  }
  if(empty(trim($_POST['harga_barang']))){
   $harga_barang_err="Harga barang tidak boleh kosong";
  }else{
   $harga_barang=$_POST['harga_barang'];
  }

  //mengecek apakah ada data yang error sebelum menghitung harga barang 
  //jika error kosong maka eksekusi perhitungan
  if(empty($diskon_err)&& empty($harga_barang_err)){

   $objek= new Hitung;
   //menyimpan nilai variabel harga barang dan nilai diskon didalam objek
   $objek->harga=$harga_barang;
   $objek->diskon=$diskon;
   //menyimpan hasil didalam variabel
   $hasil="<b>Harga barang setelah di diskon adalah : </b>".number_format($objek->Cek_Harga()).'<br/> <br/>';
   
   /*Anda bisa menulisnya menggunakan percabangan jika ada kondisi tertentu yang ingin dipenuhi misal jika nilai diskon tidak boleh lebih besar dari 10%
   
   if($objek->diskon>10){
    echo "Nilai diskon tidak boleh lebih dari 10";
   }elseif..... bla bla
   */
  }
 }
?>
<html>
<head>
 <title>Aplikasi Hitung Harga Diskon - ROOT93</title>
</head>
<body>
<div align="center" style="margin: 50px 0; padding: 15px 0; border:5px solid #ccc;">
 <h3>Menghitung Harga Barang Setelah di Diskon Menggunakan Script PHP<br/>
  WWW.ROOT93.CO.ID
 </h3>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <label>Nilai Diskon : </label>
  <span style="color: red;"><?php echo $diskon_err; ?></span>
  <input type="number" name="diskon"  /><br/><br/>
  <label>Harga Barang :</label>
  <span style="color: red;"><?php echo $harga_barang_err; ?></span>
  <input type="number" name="harga_barang" /><br/><br/>
  <input type="submit" name="submit" value="CEK HARGA">
 </form>
 <?php echo $hasil; ?>
</div>

</body>
</html>