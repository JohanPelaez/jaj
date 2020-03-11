<?php

$prod_nombre = $_POST['prod_nombre'];
$subcat= $_POST['subCat_id'];
$prov_id = $_POST['prov_id'];
$prod_cod_stock = $_POST['prod_cod_stock'];
$prod_cod_color = $_POST['prod_cod_color'];
$color= $_POST['color'];
$prod_inventario_no_talla = $_POST['prod_inventario_no_talla'];

require("conn.php");
$query2 = "INSERT INTO productos (prod_nombre, subCat_id, prov_id, prod_cod_stock, prod_cod_color, prod_color, prod_inventario_no_talla)
 VALUES ('$prod_nombre', (SELECT subCat_id FROM sub_categorias where subCat_nombre = '$subcat'),
 (SELECT prov_id FROM proveedores where prov_nombre = '$prov_id'), '$prod_cod_stock',
 '$prod_cod_color', '$prod_color', '$prod_inventario_no_talla')";
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
              El producto <u><?php echo $prod_nombre ?></u> ha sido creado. </span><br><br>
              <?php } else { ?>
              <span class="modal_heading">Error: Puede que el producto <u><?php echo $prod_nombre ?></u> ya esté creado.</span><br><br>
              <?php } ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
