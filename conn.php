<?php
$conn = mysqli_connect('localhost', 'manantia_admin', 'CMJZOe@rfG,y', 'manantia_jaj');
//$conn = mysqli_connect('localhost', 'root', '', 'jaj_textil_v2');

if($conn->connect_error){

  die('Error en la conexion' . $conn->connect_error);

}

?>
