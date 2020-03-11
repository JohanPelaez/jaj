<?php

$subCat_nombre = $_POST['subCat_nombre'];
$cat_nombre= $_POST['cat_nombre'];
$subCat_descripcion = $_POST['subCat_descripcion'];
$subCat_id = $_POST['subCat_id'];

require("conn.php");
$query2 = "UPDATE sub_categorias SET subCat_nombre='$subCat_nombre', cat_id=(SELECT cat_id FROM categorias where cat_nombre_id = '$cat_nombre'),
 subCat_descripcion='$subCat_descripcion' WHERE subCat_id='$subCat_id'";
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
              La sub-categoría <u><?php echo $subCat_nombre ?></u> ha sido actualizada. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: La sub-categoría <u><?php echo $subCat_nombre ?></u> no pudo ser actualizada.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
