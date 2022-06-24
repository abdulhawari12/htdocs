<?php 
require('functions/functions.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
 <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Halaman Beranda</title>
  <link rel="stylesheet" href="css/dashboard.css"/>
  </head>
  <body>
  	<div class="nav">
	  <div class="nav-body">
				<h3>Navigation Bar</h3>
		<!--  mode dark / light -->
        <div class="mode"></div>
    <!-- end  -->
				<div class="toggleBtn">
						<span></span>
						<span></span>
						<span></span>
				</div>
	  </div>
			<div class="nav-items">
				  <ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">My Checkout</a></li>
				<li><a href="#">My Profile</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
		   	</ul>
			</div>
	</div>
	
   <div class="content">
       <div class="header">
         <h2>Rekomendasi</h2>
        <div class="card-sm">
         <img src="img/barang1.jpg"/>
         <div class="card-sm-title">
           <h3>Iphone</h3>
          <p>
            Temukan Model Iphone Yang Kamu Cari.
          </p>
           <a href="#">More</a>
         </div>
       </div>
       
       <div class="card-sm">
         <img src="img/barang1.jpg"/>
         <div class="card-sm-title">
           <h3>Samsung</h3>
          <p>
            Temukan Model Samsung Yang Kamu Cari.
          </p>
           <a href="#">More</a>
         </div>
       </div>
       
       <div class="card-sm">
         <img src="img/barang1.jpg"/>
         <div class="card-sm-title">
           <h3>Vivo</h3>
          <p>
            Temukan Model Vivo Yang Kamu Cari.
          </p>
           <a href="#">More</a>
         </div>
       </div>
       
       <div class="card-sm">
         <img src="img/barang1.jpg"/>
         <div class="card-sm-title">
           <h3>Oppo</h3>
          <p>
            Temukan Model Oppo Yang Kamu Cari.
          </p>
           <a href="#">More</a>
         </div>
       </div>
       
       <div class="card-sm">
         <img src="img/barang1.jpg"/>
         <div class="card-sm-title">
           <h3>Advan</h3>
          <p>
            Temukan Model Oppo Yang Kamu Cari.
          </p>
           <a href="#">More</a>
         </div>
       </div>
       
     </div>
     <div class="header1">
       <h1>HELLO WORLD</h1>
     </div>
	 </div>

	<script src="js/script.js"></script>
  </body>
</html>