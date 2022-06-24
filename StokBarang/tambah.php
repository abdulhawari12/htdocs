<?php
require('functions.php');
if (isset($_POST['submit'])) {
  if ( tambah($_POST) > 0) {
    echo("<script>alert('berhasil ditambahkan')</script>");
  }else{
    echo("<script>alert('gagal ditambahkan')</script>");
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Stok Barang</title>
    <link rel="stylesheet" href="css/stokbarang.css" type="text/css" media="all" />
  </head>
<body>
  <nav class="navigation">
      <div class="nav-logo">
        <h3>PT Jaya</h3>
      </div>
      <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menuitems">
        <ul>
          <li class="items">
            <a href="index.php">Home</a>
          </li>
          <li class="items actived">
            <a href="tambah.php">Tambah Stok Barang</a>
          </li>
        </ul>
      </div>
    </nav>
    <form action="" method="post">
      <h3>Tambah Stok Barang</h3>
       <div class="input">
        <input type="number" name="kode" placeholder=" " required="" autocomplete="off" id="kode"/>
        <label for="kode">Kode</label>
      </div>
      <div class="input">
        <input type="text" name="nBarang" placeholder=" " required="" autocomplete="off" id="nBarang"/>
        <label for="nBarang">Nama barang</label>
      </div>
      <div class="input">
        <input type="number" name="kd_satuan" placeholder=" " required="" autocomplete="off" id="kd_satuan"/>
        <label for="kd_satuan">kd_satuan</label>
      </div>
      <div class="input">
        <input type="number" name="satuan" placeholder=" " required="" autocomplete="off" id="satuan"/>
        <label for="satuan">Satuan</label>
      </div>
      <div class="input">
        <input type="number" name="hBeli" placeholder=" " required="" autocomplete="off" id="hBeli"/>
        <label for="hBeli">Harga Beli</label>
      </div>
      <div class="input">
        <input type="number" name="quantity" placeholder=" " required="" autocomplete="off" id="quantity"/>
        <label for="quantity">Quantity</label>
      </div>
      <div class="input">
        <input type="number" name="diskon" placeholder=" " required="" autocomplete="off" id="diskon"/>
        <label for="diskon">Diskon</label>
      </div>
      <button type="submit" name="submit">Tambah</button>
    </form>
<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>