<?php

$cli_nombre = $_POST['cli_nombre'];
$cli_ced_identidad = $_POST['cli_ced_identidad'];
$cli_direccion = $_POST['cli_direccion'];
$cli_tel1 = $_POST['cli_tel1'];
$cli_tel2 = $_POST['cli_tel2'];
$cli_correo = $_POST['cli_correo'];

require("conn.php");
$query2 = "INSERT INTO clientes (cli_nombre, cli_ced_identidad, cli_direccion, cli_telefono1, cli_telefono2, cli_correo)
VALUES ('$cli_nombre', '$cli_ced_identidad', '$cli_direccion', '$cli_tel1', '$cli_tel2', '$cli_correo')";
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
              <span class="modal_heading">Datos Ingresados de manera Exitosa! <br>
              El cliente <u><?php echo $cli_nombre ?></u> ha sido creado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: Puede que el cliente <u><?php echo $cli_nombre ?></u> ya está creado.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
