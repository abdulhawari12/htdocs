<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/account.css" type="text/css" media="all" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>My Account</title>
  </head>
  <body>
     <!-- navbar bottom -->
  <div class="navbot">
    <ul>
      <a href="index.php">
        <li class="list">
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
        <li class="list active">
          <i class="bi bi-person-fill"></i>
          <p class="text">Account</p>
        </li>
      </a>
    </ul>
  </div>
  <!--- end -->
    <div class="header">
      <h3>My Account</h3>
      <div class="header-body">
        <img src="img/profile.jpg"/>
      <div class="header-title">
        <h4>Abdul Hawari</h4>
        <span>abdulhawari810@gmail.com</span>
      </div>
      </div>
      
      <div class="header-table">
        <i class="bi bi-wrench-adjustable-circle-fill"></i>
      <div class="header-table-title">
        <h4>Upgrade To Pro</h4>
      </div>
      <a href="#" class="detail">
        <span>See Detail</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
      
      <div class="header-table">
        <i class="bi bi-paypal"></i>
      <div class="header-table-title">
        <h4>My Points</h4>
      </div>
      <a href="#" class="detail">
        <span>See Detail</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
      
      <div class="header-table1">
        <i class="bi bi-star-fill"></i>
      <div class="header-table-title1">
        <h4>My Stamp</h4>
      </div>
    </div>
    </div>
    
    <div class="box-content">
      <h3>Your ID</h3>
      <div class="box-qrcode">
      <div class="box-qrcode1">
        <i class="bi bi-qr-code"></i>
        <span>QR Code</span>
      </div>
      <div class="box-qrcode1">
        <i class="bi bi-upc"></i>
        <span>Loyalti Code</span>
      </div>
     </div>
    </div>
    <div class="box-content1">
      <h3>Account</h3>
      
     <div class="header-table">
        <i class="bi bi-pencil-square"></i>
      <div class="header-table-title2">
        <h4>Change Profil</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    
     <div class="header-table">
        <i class="bi bi-link-45deg"></i>
      <div class="header-table-title2">
        <h4>Connected App</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
     <div class="header-table">
        <i class="bi bi-credit-card"></i>
      <div class="header-table-title2">
        <h4>My Cards</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
     <div class="header-table2">
        <i class="bi bi-ticket-detailed-fill"></i>
      <div class="header-table-title2">
        <h4>Promo Code</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    
    </div>
    
    <div class="security">
      <h3>Security</h3>
      <div class="header-table2">
        <i class="bi bi-lock-fill"></i>
      <div class="header-table-title2">
        <h4>Change Security Code</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    </div>
    
    <div class="end-box">
      <h3>About</h3>
      <div class="header-table">
        <i class="bi bi-lightbulb-fill"></i>
      <div class="header-table-title2">
        <h4>Guide DompetKita</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="header-table">
        <i class="bi bi-card-text"></i>
      <div class="header-table-title2">
        <h4>Terms And Conditions</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="header-table">
        <i class="bi bi-check2-circle"></i>
      <div class="header-table-title2">
        <h4>Privaci Policy</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    <div class="header-table2">
        <i class="bi bi-question-circle-fill"></i>
      <div class="header-table-title2">
        <h4>Help Center</h4>
      </div>
      <a href="#" class="detail3">
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
    </div>
    
    <button type="button" name="signout" class="btn_out">Sign Out</button>
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