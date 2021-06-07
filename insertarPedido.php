<?php
// $idCliente = 16;
// $idProducto = 1;
// $idMetodo = "Efectivo";

$idCliente = $_POST['Cliente'];
$idProducto = $_POST['Producto'];
$idMetodo = $_POST['Metodo'];


include("connection.php");


$consulta = "INSERT INTO pedidos(idCliente, idProducto, metodoPago) values('$idCliente','$idProducto','$idMetodo')";
$result = mysqli_query($con, $consulta);


 ?>
