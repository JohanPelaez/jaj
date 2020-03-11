<?php

$prov_nombre = $_POST['prov_nombre'];
$prov_ced_identidad = $_POST['prov_ced_identidad'];
$prov_direccion = $_POST['prov_direccion'];
$prov_tel1 = $_POST['prov_tel1'];
$prov_tel2 = $_POST['prov_tel2'];
$prov_correo = $_POST['prov_correo'];
$cli_id = $_POST['prov_id'];

require("conn.php");
$query2 = "UPDATE proveedores SET prov_nombre = '$prov_nombre', prov_ced_identidad = '$prov_ced_identidad', prov_direccion = '$prov_direccion',
prov_telefono1 = '$prov_tel1', prov_telefono2 = '$prov_tel2', prov_correo = '$prov_correo' WHERE prov_id='$cli_id'";
$resultado = $conn->query($query2);
mysqli_close($conn);

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
              <span class="modal_heading">Datos ingresados de manera Exitosa! <br>
              El proveedor <u><?php echo $prov_nombre ?></u> ha sido actualizado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: El proveedor <u><?php echo $prov_nombre ?></u> no pudo ser actualizado.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
