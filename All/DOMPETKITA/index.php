<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/all.css"/>
    <title>E-Wallet</title>
    <meta name="theme-color" content="#D8E8F8">
    <meta name="msapplication-navbutton-color" content="#D8E8F8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
</head>
<body>
  <!-- navbar bottom -->
  <div class="navbot">
    <ul>
      <a href="index.php">
        <li class="list active">
          <i class="bi bi-house-door-fill"></i>
          <p class="text">Home</p>
        </li>
      </a>
      <a href="history.php">
        <li class="list">
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
  <!--- end -->
    <div class="navbar">
      <div class="profile">
        <img src="img/profile.jpg"/>
        <div class="title-profile">
          <span>Good Morning</span>
          <h3>Abdul Hawari</h3>
        </div>
      </div>
        <a href="#">
          <i class="bi bi-bell-fill"></i>
        </a>
    </div>
  <div class="main">
    <div class="box1">
      <div class="box1-body">
        <h3>$20.03</h3>
        <p>Your Balance</p>
      </div>
      <h5>Active</h5>
    </div>
    <div class="box2">
      <span class="text1">**** 8670</span>
      <span class="text2">VISA</span>
    </div>
    </div>
    <div class="table">
      <div class="table-menu">
        <img src="img/scanner.png" class="img"/>
        <p class="title1">Pay</p>
      </div>
      <div class="table-menu">
        <img src="img/transfer.png" class="img"/>
        <p class="title1">Transfer</p>
      </div>
      <div class="table-menu">
        <img src="img/saving.png" class="img"/>
        <p class="title1">Savings</p>
      </div>
    </div>
    
    <div class="content-main">
      <div class="main-heading">
        <h3>Last Transaction</h3>
        <a href="history.php">See All</a>
      </div>
      
      <div class="main-body">
        <img src="img/unipin.png"/>
        <div class="headding">
          <h3>Unipin</h3>
          <p>27 June, 04:10 AM</p>
        </div>
        <h3 class="min"> -$30.55 </h3>
      </div>
      
      <div class="main-body">
        <img src="img/gopay.jpeg"/>
        <div class="headding">
          <h3>Gopay</h3>
          <p>27 June, 12:19 AM</p>
        </div>
        <h3 class="min"> -$12.00</h3>
      </div>
      
      <div class="main-body">
        <img src="img/dana.jpeg"/>
        <div class="headding">
          <h3>Dana</h3>
          <p>30 May, 15:17 PM</p>
        </div>
        <h3 class="min"> -$10.00 </h3>
      </div>
      
      <div class="main-body">
        <img src="img/bca.png"/>
        <div class="headding">
          <h3>BCA</h3>
          <p>30 May, 20:16 AM</p>
        </div>
        <h3 class="tambah"> +$50.00 </h3>
      </div>
      
      <div class="main-body">
        <img src="img/ovo.jpeg"/>
        <div class="headding">
          <h3>OVO</h3>
          <p>20 April, 22:00 PM</p>
        </div>
        <h3 class="tambah"> +$41.00 </h3>
      </div>
      
      <div class="main-body">
        <img src="img/bri.png"/>
        <div class="headding">
          <h3>BRI </h3>
          <p>25 March, 12:12 AM</p>
        </div>
        <h3 class="min"> -$25.00 </h3>
      </div>
      
      <div class="main-body">
        <img src="img/trustwallet.png"/>
        <div class="headding">
          <h3>Trust Wallet</h3>
          <p>14 March, 00:22 PM</p>
        </div>
        <h3 class="tambah"> +$95.00 </h3>
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
		/* charts js */
		/* end*/
</script>
</body>
</html>