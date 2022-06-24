<?php 
function salam($waktu = "Datang", $nama = "Admin"){
  return "Selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Functions</title>
  </head>
  <body>
    <h1><?= salam();?></h1>
  </body>
</html>