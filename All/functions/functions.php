<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","login");

// buat fungsi query
function query($query){
  // koneksi ke database dengan superglobal
  global $conn;
  // buat query
  $result = mysqli_query($conn, $query);
  // buat variabel untuk array
  $rows = [];
  // looping array 
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

// menangkap data masukan ke dalam fungsi tambah
function tambah($data){
  global $conn;
  //tangkap data ke dalam variabel
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $nomor_telepon = htmlspecialchars($data["nomor_telepon"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    
    $gambar = upload();
  if( !$gambar ){
    return false;
  }
    
    $query = "INSERT INTO form_login
               VALUES
               ('','$username','$password','$email','$nomor_telepon','$nama_lengkap','$gambar')
             ";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
}

function upload(){
  $namaFile = $_FILES["gambar"]["name"];
  $sizeFile = $_FILES["gambar"]["size"];
  $tmpFile = $_FILES["gambar"]["tmp_name"];
  $error = $_FILES["gambar"]["error"];
  
  // cek apakah tidak ada gambar yg belum di upload
if( $error === 4){
  echo "<script>
       alert('Silahkan Upload Gambar Terlebih Dahulu!');
       </script>";
 return false;
 }
  // cek apakah yg di upload gambar atau tidak
  $ekstensiGambarValid = ["jpg","png","jpeg"];
  $ekstensiGambar = explode(".", $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
 if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
    echo "<script>
       alert('Yang Anda Upload Bukan Gambar!');
       </script>";
  return false;
 }
 // cek apakah gambar ukurannya besar
 if( $sizeFile === 1000000){
    echo "<script>
       alert('Ukuran Gambar Terlalu Besar!');
       </script>";
 }
 // lolos dari pengecekan
 $namaFileBaru = uniqid();
 $namaFileBaru .= ".";
 $namaFileBaru .= $ekstensiGambar;
 
 move_uploaded_file($tmpFile, "img/" . $namaFileBaru);
 return $namaFileBaru;
 
}
// hapus
function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM form_login WHERE id = $id ");
  return mysqli_affected_rows($conn);
}
// ubah
function ubah($data){
 global $conn;
    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $nomor_telepon = htmlspecialchars($data["nomor_telepon"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // cek apakah user mau mengubah gambar
  if( $_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
  }else {
    $gambar = upload();
  }
    
    $query = "UPDATE form_login SET
          username = '$username',
          password = '$password',
          email = '$email',
          nomor_telepon = '$nomor_telepon',
          nama_lengkap = '$nama_lengkap',
          gambar = '$gambar'
           WHERE id = $id
             ";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
}
// cari
function search($search){
  $query = "SELECT * FROM form_login
            WHERE
            username LIKE '%$search%' OR 
            password LIKE '%$search%' OR
            email LIKE '%$search%' OR
            nomor_telepon LIKE '%$search%' OR
            nama_lengkap LIKE '%$search%'
           ";
     return query($query);
 }
 
 // registrasi
 function daftar ($data) {
   global $conn;
   $user = strtolower(stripslashes($data["username"]));
   $pass1 = mysqli_real_escape_string($conn ,$data["password"]);
   $pass2 = mysqli_real_escape_string($conn, $data["password2"]);
   $nomor_telepon = stripslashes($data["nomor_telepon"]);
   $email = stripcslashes($data["email"]);
   
   // cek data sudah ada atau belum
   $result = mysqli_query($conn, "SELECT username, nomor_telepon, email FROM user WHERE username = '$user'");
   
    if( mysqli_fetch_assoc($result) ){
      echo "<script> alert('Username Sudah Terdaftar');</script>";
      return false;
    }
    
   $result2 = mysqli_query($conn, "SELECT nomor_telepon FROM user WHERE nomor_telepon = '$nomor_telepon'");
   
    if( mysqli_fetch_assoc($result2) ){
      echo "<script> alert('Nomor Telepon Sudah Terdaftar');</script>";
      return false;
    }
    
   $result3 = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
   
    if( mysqli_fetch_assoc($result3) ){
      echo "<script> alert('Email Sudah Terdaftar');</script>";
      return false;
    }
   
   
  // cek apakah password nya sama atau tidak
  if( $pass1 !== $pass2 ){
    echo "<script>
          alert('Konfirmasi Password Salah!');
          </script>";
        return false;
  }
  
  // enkripsi Password
  $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
  
  // tambahkan data ke database
  mysqli_query($conn, "INSERT INTO user VALUES ('','$user','$pass1','$nomor_telepon','$email')");
  return mysqli_affected_rows($conn);
 }
 
?>