<?php
// $nombre = "Olga";
// $email = "olga@gmail.com";
// $pass = "123";
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['pass'])) {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  include("connection.php");


  $consulta = "SELECT COUNT(*) as contar  from usuarios where email = '$email'";
  $result = mysqli_query($con,$consulta);
  $array = mysqli_fetch_array($result);
  echo $array['contar'];

  if(!($array['contar'] == 1)){
    $consulta = "INSERT INTO usuarios(Nombre, Email, pass) values('$nombre','$email','$pass')";
    $result = mysqli_query($con, $consulta);
  }else {
    echo json_encode(null);
  }
}else{
	echo json_encode(null);
}

 ?>
