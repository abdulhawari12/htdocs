<?php
$conn = mysqli_connect("localhost","root","","login");

function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];
   
   while($row = mysqli_fetch_assoc($result)){
     $rows[] = $row;
   }
   return $rows;
}
function register($data){
  global $conn;
  $user = strtolower(stripcslashes($data['user']));
  $pass = mysqli_real_escape_string($conn,$data['pass1']);
  $pass2 = mysqli_real_escape_string($conn,$data['pass2']);
  $result = mysqli_query($conn, "SELECT username FROM form WHERE username = '$user'");
   if (mysqli_fetch_assoc($result)){
     echo ("<script>alert('$user Sudah Terdaftar')</script>");
     return false;
   }
   if ($pass != $pass2){
     echo "<script>alert('Password Tidak Sesuai')</script>";
     return false;
   }
   $pass = password_hash($pass, PASSWORD_DEFAULT);
  $query = mysqli_query($conn, "INSERT INTO form VALUES('','$user','$pass')");
  return mysqli_affected_rows($conn);
}
?>