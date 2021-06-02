<?php
$nombre = "Olga";
$email = "olga@gmail.com";
$pass = "123";

include("connection.php");

$consulta = "INSERT INTO usuarios(Nombre, Email, pass) values('$nombre','$email','$pass')";
$result = mysqli_query($con, $consulta);
 ?>
