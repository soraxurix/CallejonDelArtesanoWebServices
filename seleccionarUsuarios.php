<?php
$email = $_GET['email'];
$pass = $_GET['pass'];
// $email = "uri";
// $pass = "123";

include("connection.php");

$consulta = "SELECT * from usuarios where email = '$email' and pass = '$pass'";
// $consulta = "SELECT * from usuarios where email = '$email'";
$result = mysqli_query($con, $consulta);

$data = array();
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}
echo json_encode($data);

 ?>
