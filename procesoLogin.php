<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
// $email = "uri@gmail.com";
// $pass = "123";

include("connection.php");

// $consulta = "SELECT count(*) as contar from usuarios where email = '$email' and pass = '$pass'";
$consulta = "SELECT * from usuarios where email = '$email' and pass = '$pass'";

$result = mysqli_query($con, $consulta);

$data = $result->fetch_assoc();

if($data == null){
  echo json_encode($data);
}else{
  $consulta = "SELECT * from usuarios where email = '$email' and pass = '$pass'";
  $result = mysqli_query($con, $consulta);
  $array = mysqli_fetch_array($result);

  $variable = intval($array['idCliente']);

  echo json_encode ($variable);
}

 ?>
