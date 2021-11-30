<?php
// $idCliente = 1;
// $idProducto = 4;

$idCliente = $_POST['Cliente'];
$idProducto = $_POST['Producto'];

include("connection.php");

$consulta = "INSERT INTO carrito (idcliente, idProducto) values ($idCliente,$idProducto)";
$result = mysqli_query($con, $Consulta);
?>
