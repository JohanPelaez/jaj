<?php

$cat_nombre_id = $_POST['cat_nombre_id'];
$supCat_id= $_POST['supCat_id'];
$cat_descripcion = $_POST['cat_descripcion'];

require("conn.php");
$query2 = "INSERT INTO categorias (cat_nombre_id, supCat_id, cat_descripcion) VALUES ('$cat_nombre_id', (SELECT SupCat_id FROM super_categorias where supCat_nombre = '$supCat_id'), '$cat_descripcion')";
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
              La categoría <u><?php echo $cat_nombre_id ?></u> ha sido creada. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: Puede que la categoría <u><?php echo $cat_nombre_id ?></u> ya está creada.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
