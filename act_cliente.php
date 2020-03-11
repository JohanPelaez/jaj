<?php

$cli_nombre = $_POST['cli_nombre'];
$cli_ced_identidad = $_POST['cli_ced_identidad'];
$cli_direccion = $_POST['cli_direccion'];
$cli_tel1 = $_POST['cli_tel1'];
$cli_tel2 = $_POST['cli_tel2'];
$cli_correo = $_POST['cli_correo'];
$cli_id = $_POST['cli_id'];

require("conn.php");
$query2 = "UPDATE clientes SET cli_nombre = '$cli_nombre', cli_ced_identidad = '$cli_ced_identidad', cli_direccion = '$cli_direccion',
cli_telefono1 = '$cli_tel1', cli_telefono2 = '$cli_tel2', cli_correo = '$cli_correo' WHERE cli_id='$cli_id'";
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
              El cliente <u><?php echo $cli_nombre ?></u> ha sido actualizado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: El cliente <u><?php echo $cli_nombre ?></u> no pudo ser actualizado.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
