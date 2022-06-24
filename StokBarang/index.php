<?php
require("functions.php");
$rows = mysqli_query($conn,"SELECT * FROM stok_barang");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | PT jaya</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
          <li class="items actived">
            <a href="index.php">Home</a>
          </li>
          <li class="items">
            <a href="tambah.php">Tambah Stok Barang</a>
          </li>
        </ul>
      </div>
    </nav>
  <section class="banner">
    <h3>Selamat Datang, Admin</h3>
  </section>
  <table class="table">
    <thead>
      <th>Kode</th>
    <th>Nama barang</th>
    <th>Kd_Satuan</th>
    <th>Satuan</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Quantity</th>
    <th>Diskon</th>
    <th>Total Harga Jual</th>
    <th>Total Harga Beli</th>
    </thead>
   <?php foreach ($rows as $row): ?>
     <?php
    $jumlah = $row['quantity'];
    $hargaBeli = $row['harga_beli'];
    $diskon = $row['diskon'];
    $persen = ($diskon /100 ) * $hargaBeli;
    $jumlahBeli = $jumlah * $hargaBeli - $persen;
    $persen2 = (20 / 100);
    $jumlahJ = $persen2 * $hargaBeli;
    $hargaJual = $jumlahJ + $hargaBeli;
    $jumlahJual = $hargaJual * $jumlah;
    $totalSemuaJual = $hargaJual + $jumlahJual;
?>
    <tbody>
    <tr>
      <td data-label="kode"><?= $row['kode'];?></td>
      <td data-label="Nama barang"><?=$row['nama_barang'];?></td>
      <td data-label="Kd_Satuan"><?=$row['kd_satuan'];?></td>
      <td data-label="Satuan"><?=$row['satuan'];?></td>
      <td data-label="Harga Beli">Rp <?=number_format($row['harga_beli']);?></td>
      <td data-label="Harga Jual">Rp <?= number_format($hargaJual);?></td>
      <td data-label="Quantity"><?=$row['quantity'];?></td>
      <td data-label="Diskon"><?=$row['diskon'];?>%</td>
      <td data-label="Total Harga Jual">Rp. <?= number_format($jumlahJual);?></td>
      <td data-label="Total Harga Beli">Rp. <?= number_format($jumlahBeli);?></td>
      <td><a href="hapus.php?&id=<?= $row['id'];?>">Hapus</a></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
  <div class="total">
    <h3>Total : </h3>
    <div class="input">
      <label> Total Harga Jual</label>
    <input type="text" placeholder="Rp. <?= number_format($totalSemuaJual);?>" name="totalJual" id="tJual" readonly=""/>
    <label> Total Harga Beli</label>
    <input type="text" placeholder=" " name="totalBeli" id="tBeli" readonly=""/>
    </div>
  </div>
 <script src="js/script.js"></script>
</body>
</html>