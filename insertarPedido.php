<?php
// $idCliente = 16;
// $idProducto = 1;


$idCliente = $_POST['Cliente'];
$idProducto = $_POST['Producto'];


include("connection.php");


$consulta = "INSERT INTO pedidos(idCliente, idProducto) values('$idCliente','$idProducto')";
$result = mysqli_query($con, $consulta);


 ?>
