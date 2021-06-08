<?php
$id = $_GET['id'];

// $email = "uri";
// $pass = "123";

include("connection.php");

$consulta = "SELECT c.idCarrito, p.Nombre, p.Precio   from carrito c inner join productos p on p.idProducto = c.idProducto inner join usuarios u on u.idCliente = c.idCliente where u.idCliente ='$id'";
// $consulta = "SELECT * from usuarios where email = '$email'";
$result = mysqli_query($con, $consulta);

$data = array();
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}
echo json_encode($data);
 ?>
