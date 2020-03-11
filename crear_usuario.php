<?php

$per_id = $_POST['per_id'];
$usu_password = $_POST['usu_password'];
$usu_password2 = $_POST['usu_password2'];
$usu_login= $_POST['usu_login'];
if ($usu_password == $usu_password2) {
  require("conn.php");
  $query2 = "INSERT INTO usuarios (usu_login, per_id, usu_password)
  VALUES ('$usu_login', (SELECT DISTINCT per_id FROM perfiles WHERE per_nombre = '$per_id'), '$usu_password')";
  $resultado = $conn->query($query2);
  mysqli_close($conn);
}else {
  require("conn.php");
  $query3 = "INSERT INTO usuarios (usu_login, per_id, usu_password)
  VALUES ('$usu_login', 'error', '$usu_password')";
  $resultado = $conn->query($query3);
  mysqli_close($conn);
}


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
              El Usuario <u><?php echo $usu_login ?></u> ha sido creado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: verifique Contraseñas .</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
