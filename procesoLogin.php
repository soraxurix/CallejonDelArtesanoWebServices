<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
// $email = "uri";
// $pass = "123";

include("connection.php");

// $consulta = "SELECT count(*) as contar from usuarios where email = '$email' and pass = '$pass'";
$consulta = "SELECT * from usuarios where email = '$email' and pass = '$pass'";

$result = mysqli_query($con, $consulta);

$data = $result->fetch_assoc();
// $data = array();
// while($row = mysqli_fetch_assoc($result)){
//   $data[] = $row;
// }

echo json_encode($data);
 ?>
