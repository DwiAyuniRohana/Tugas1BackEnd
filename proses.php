<?php 
session_start();
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = ($_POST ['password']);

if($username == 'dwiayuni' AND $password == 'blt88'){

  session_start();
  $_SESSION['berhasil'] = true;

  header("Location: admin.php");
}else{
  echo "<script>alert('login gagal, username atau password salah');document.location='login.php'</script>";
}
  
}
 ?>