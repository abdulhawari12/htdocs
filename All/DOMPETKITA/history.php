<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/history.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>History</title>
  </head>
  <body>
    <!--- navbar bottom --->
      <div class="navbot">
    <ul>
      <a href="index.php">
        <li class="list">
          <i class="bi bi-house-door-fill"></i>
          <p class="text">Home</p>
        </li>
      </a>
      <a href="history.php">
        <li class="list active">
          <i class="bi bi-clock-history"></i>
          <p class="text">History</p>
        </li>
      </a>
      <a href="statis.php">
        <li class="list">
          <i class="bi bi-pie-chart-fill"></i>
          <p class="text">Statistic</p>
        </li>
      </a>
      <a href="account.php">
        <li class="list">
          <i class="bi bi-person-fill"></i>
          <p class="text">Account</p>
        </li>
      </a>
    </ul>
  </div>
    <!--- end --->
    <div class="navbar">
      <h3>History</h3>
    </div>
    
    <div class="content">
      <div class="title">
        <h3>Today</h3>
        <span>27 June, 2022</span>
      </div>
      
      <div class="main-content">
        <img src="img/unipin.png"/>
        <div class="box">
          <h3>Unipin</h3>
          <p>27 June, 04:10 AM</p>
        </div>
        <h3 class="min"> -$30.55</h3>
      </div>
      
      <div class="main-content">
        <img src="img/gopay.jpeg"/>
        <div class="box">
          <h3>Gopay</h3>
          <p>27 June, 12:19 AM</p>
        </div>
        <h3 class="min"> -$12.00</h3>
      </div>
      
      <div class="title">
        <h3>Yesterday</h3>
        <span>30 May, 2022</span>
      </div>
      
      <div class="main-content">
        <img src="img/dana.jpeg"/>
        <div class="box">
          <h3>Dana</h3>
          <p>30 May, 15:17 AM</p>
        </div>
        <h3 class="min"> -$10.00</h3>
      </div>
      
      <div class="main-content">
        <img src="img/bca.png"/>
        <div class="box">
          <h3>BCA</h3>
          <p>30 May, 20:16 AM</p>
        </div>
        <h3 class="tambah"> +$50.00</h3>
      </div>
      
      <div class="title2">
        <span>20 April, 2022</span>
      </div>
      
       <div class="main-content">
        <img src="img/ovo.jpeg"/>
        <div class="box">
          <h3>OVO</h3>
          <p>20 April, 22:00 PM</p>
        </div>
        <h3 class="tambah"> +$41.00</h3>
      </div>
      
      <div class="title2">
        <span>25 March, 2022</span>
      </div>
      
      <div class="main-content">
        <img src="img/bri.png"/>
        <div class="box">
          <h3>BRI</h3>
          <p>25 March, 12:12 AM</p>
        </div>
        <h3 class="min"> -$25.00</h3>
      </div>
      
      <div class="title2">
        <span>14 March, 2022</span>
      </div>
      
      <div class="main-content">
        <img src="img/trustwallet.png"/>
        <div class="box">
          <h3>Trust Wallet</h3>
          <p>14 March, 00:22 PM</p>
        </div>
        <h3 class="tambah"> +$95.00</h3>
      </div>
    </div>
<script>
  const list = document.querySelectorAll(".list");
								
								function activelink(){
								list.forEach((item)=>
								item.classList.remove("active"));
								this.classList.add("active");
								}
			list.forEach((item)=>
							  item.addEventListener("click", activelink));
					
				</script>
</script>
  </body>
</html>