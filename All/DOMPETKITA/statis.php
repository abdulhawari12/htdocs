<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8"/>
    <title>Statistic</title>
    <link rel="stylesheet" href="css/statis.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
        <li class="list active">
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
  
    <div class="box">
      
      <div class="var var1"></div>
      <div class="var var2"></div>
      <div class="var var3"></div>
      <div class="var var4"></div>
      
      <h3>Statistic</h3>
      <div class="box-card">
        <h1>$80.290</h1>
        <span>Total Income</span>
        <div class="box-end">
          <i class="bi bi-box-arrow-up"></i>
        <button type="button" name="shareValue" class="buttonShare">Share Value</button>
        </div>
      </div>
    </div>
    <div class="chart">
    <canvas id="myChart" width="400" height="300"></canvas>
    </div>
    
<script src="js/chart.min.js"></script>
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
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','August','September','October','November','Desember'],
        datasets: [{
            label: 'Income',
            data: [120, 190, 307, 105, 200, 300,400,100,90,107,310,280],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }]
    },
    options: {
        responsive: true,
    }
});
    </script>
  </body>
</html>