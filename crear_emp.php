<?php

$emp_ced_id = $_POST['emp_ced_id'];
$emp_nombree = $_POST['emp_nombre'];
$emp_apellido1 = $_POST['emp_apellido1'];
$emp_apellido2 = $_POST['emp_apellido2'];
$emp_direccion = $_POST['emp_direccion'];
$emp_fecha_nac = $_POST['emp_fecha_nac'];
$emp_fecha_ingreso = $_POST['emp_fecha_ingreso'];
$emp_salario = $_POST['emp_salario'];
$pt_id = $_POST['pt_id'];
$emp_observaciones = $_POST['emp_observaciones'];
$emp_telefono1 = $_POST['emp_telefono1'];
$emp_telefono2 = $_POST['emp_telefono2'];
$emp_correo = $_POST['emp_correo'];

require("conn.php");
$query2 = "INSERT INTO empleados (emp_ced_id, emp_nombre, emp_apellido1, emp_apellido2, emp_direccion, emp_fecha_nac, emp_fecha_ingreso, emp_fecha_salida,
  emp_salario, pt_id, emp_observaciones, emp_telefono1, emp_telefono2, emp_correo) VALUES ('$emp_ced_id' ,'$emp_nombree', '$emp_apellido1', '$emp_apellido2', '$emp_direccion','$emp_fecha_nac',
  '$emp_fecha_ingreso', null, '$emp_salario', (SELECT pt_id FROM puestos_trabajo WHERE pt_nombre_puesto = '$pt_id'),
  '$emp_observaciones', '$emp_telefono1', '$emp_telefono2', '$emp_correo')";
$resultado = $conn->query($query2);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Principal</title>
    <!-- Ion Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>

  <section class="hero">
      <div class="text">

      </div>
  </section>

<!-- Modals Section -->
 <div class="ventana_container">
   <div class="ventana">
     <?php if($resultado){ ?>
              <span class="modal_heading">Datos Ingresados de manera Exitosa! <br>
              El empleado <u><?php echo $emp_nombree ?></u> ha sido creado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: Puede que el empleado <u><?php echo	$emp_nombree ?></u> ya está creado.</span><br><br>
              <?php } mysqli_close($conn); ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
