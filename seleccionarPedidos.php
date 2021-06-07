<?php
$id = $_GET['id'];

// $email = "uri";
// $pass = "123";

include("connection.php");

$consulta = "SELECT pr.Nombre as 'Nombre Producto', idPedido, u.Nombre as 'Nombre usuario', pe.metodoPago as 'Metodo Pago' from pedidos pe inner join productos pr on pr.idProducto = pe.idProducto  inner join usuarios u on u.idCliente = pe.idCliente where u.idCliente='$id'";
// $consulta = "SELECT * from usuarios where email = '$email'";
$result = mysqli_query($con, $consulta);

$data = array();
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}
echo json_encode($data);

 ?>
