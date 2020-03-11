<?php

$maq_nombre = $_POST['maq_nombre'];
$maq_ced_identidad = $_POST['maq_ced_identidad'];
$maq_direccion = $_POST['maq_direccion'];
$maq_tel1 = $_POST['maq_tel1'];
$maq_tel2 = $_POST['maq_tel2'];
$maq_correo = $_POST['maq_correo'];
$maq_que_maquila = $_POST['maq_que_maquila'];
$maq_id = $_POST['maq_id'];

require("conn.php");
$query2 = "UPDATE maquiladores SET maq_nombre = '$maq_nombre', maq_ced_identidad = '$maq_ced_identidad', maq_direccion = '$maq_direccion',
maq_telefono1 = '$maq_tel1', maq_telefono2 = '$maq_tel2', maq_correo = '$maq_correo', maq_que_maquila = '$maq_que_maquila' WHERE maq_id='$maq_id'";
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
              El Maquilador <u><?php echo $maq_nombre ?></u> ha sido actualizado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: El maquilador <u><?php echo $maq_nombre ?></u> no pudo ser actualizado.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
