<?php
$conn = mysqli_connect("localhost","root","","admin");

function query($query){
  global $conn;
  
  $result = mysqli_query($conn, $query);
  $rows = [];
  
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data){
  global $conn;
  
  $user = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $password2 = mysqli_real_escape_string($conn,$data["password2"]);
  
  $result = mysqli_query($conn, 
          "SELECT username FROM admin_login WHERE username = '$user'");
  if (mysqli_fetch_assoc($result)) {
     echo("<script>alert('Username Already!')</script>");
     return false;
  }
  
  if($password !== $password2){
    echo("<script>alert('Enter Your Password Failed!')</script>");
    return false;
  }
  
  $password = password_hash($password, PASSWORD_DEFAULT);
  
  mysqli_query($conn, "INSERT INTO admin_login VALUES('','$user','$password')");
  return mysqli_affected_rows($conn);
}
?>