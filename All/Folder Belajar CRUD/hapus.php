<?php
require('functions.php');

session_start();

 if( !isset($_SESSION["login"]) ){
   header("Location : index.php");
   exit;
 }

$id = $_GET["id"];
if ( hapus($id) > 0) {
  echo "<html>
<head>
  <meta charset='UTF-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
  <style>
.main{
background: rgba(0,0,0,0.8);
position: fixed;
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
top: 0;
left: 0;
}
.notice{
  background: white;
  border-radius: 20px;
  height: 250px;
  width: 90%;
  text-align: center;
  padding-top: 20px;
}
.notice h2{
  margin-top: 20px;
}
.button{
  background: #fff;
  width: 100%;
  height: 50px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 80px;
}
.button a{
  background: #0099ff;
  width: 150px;
  height: 40px;
  padding:  10px;
  text-decoration: none;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  font-size: 18px;
  font-weight: 700;
}
 </style>
</head>
 <body>    
  <div class='main'>
    <div class='notice'>
      <h2>Data Berhasil Di Hapus</h2>
      <div class='button'>
        <a href='index.php'>OKE</a>
      </div>
    </div>
  </div>
 </body>
</html>
";
}else {
  echo "<html>
<head>
  <meta charset='UTF-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
  <style>
.main{
background: rgba(0,0,0,0.8);
position: fixed;
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
top: 0;
left: 0;
}
.notice{
  background: white;
  border-radius: 20px;
  height: 250px;
  width: 90%;
  text-align: center;
  padding-top: 20px;
}
.notice h2{
  margin-top: 20px;
}
.button{
  background: #fff;
  width: 100%;
  height: 50px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 80px;
}
.button a{
  background: #0099ff;
  width: 150px;
  height: 40px;
  padding:  10px;
  text-decoration: none;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  font-size: 18px;
  font-weight: 700;
}
 </style>
</head>
 <body>    
  <div class='main'>
    <div class='notice'>
      <h2>Data Gagal Di Hapus</h2>
      <div class='button'>
        <a href='index.php'>OKE</a>
      </div>
    </div>
  </div>
 </body>
</html>";
}
?>
       