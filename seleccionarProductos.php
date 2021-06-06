<?php
$id = $_GET['id'];

// $email = "uri";
// $pass = "123";

include("connection.php");

$consulta = "SELECT * from productos where idProducto = '$id';";
// $consulta = "SELECT * from usuarios where email = '$email'";
$result = mysqli_query($con, $consulta);

$data = array();
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}
echo json_encode($data);

 ?>
