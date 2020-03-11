<?php

$prod_id = $_POST['prod_idcrear'];
$tala_id= $_POST['talla_id_stock'];
$prod_tall_genero = $_POST['prod_talla_generocrear'];
$prod_tall_cantidad = $_POST['prod_tall_can'];
$prod_tall_especificaciones = $_POST['talla_prod_descripcion'];

require("conn.php");
$query2 = "INSERT INTO producto_tallas
 VALUES ((SELECT productos.prod_id
    FROM productos INNER JOIN sub_categorias ON productos.subCat_id=sub_categorias.subCat_id INNER JOIN proveedores ON proveedores.prov_id=productos.prov_id WHERE prod_id IN (SELECT productos.prod_id FROM productos
      INNER JOIN sub_categorias ON productos.subCat_id = sub_categorias.subCat_id INNER JOIN
     categorias ON sub_categorias.cat_id = categorias.cat_id WHERE categorias.cat_id = 3) and productos.prod_nombre = '$prod_id'),
      (SELECT talla_id FROM tallas where talla_nombre = '$tala_id'),
      '$prod_tall_genero', '$prod_tall_cantidad', '$prod_tall_especificaciones')";
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
     <?php if($resultado){
       $query3 = "UPDATE productos SET prod_inventario_no_talla = prod_inventario_no_talla + $prod_tall_cantidad
        WHERE prod_id = (SELECT productos.prod_id
           FROM productos INNER JOIN sub_categorias ON productos.subCat_id=sub_categorias.subCat_id INNER JOIN proveedores ON proveedores.prov_id=productos.prov_id WHERE prod_id IN (SELECT productos.prod_id FROM productos
             INNER JOIN sub_categorias ON productos.subCat_id = sub_categorias.subCat_id INNER JOIN
            categorias ON sub_categorias.cat_id = categorias.cat_id WHERE categorias.cat_id = 3) and productos.prod_nombre = '$prod_id')";
            $resultado2 = $conn->query($query3);
            if ($resultado2) {?>
              <span class="modal_heading">Datos Ingresados de manera Exitosa! <br>
                Se le agregaron <u><?php echo $prod_tall_cantidad ?></u> Uds. en talla <u><?php echo $tala_id ?></u><br>
              al producto <u><?php echo $prod_id ?></u> . </span><br><br>
            <?php }else { ?>
            <span class="modal_heading">Error: El producto <u><?php echo $prod_nombre ?></u> se agregó sin embargo notificar al desarrollador de esto.</span><br><br>
            <?php } ?>
              <?php } else { ?>
              <span class="modal_heading">Error: con <u><?php  echo $prod_id ?></u>, Verifique bien la información.</span><br><br>
              <?php }
              mysqli_close($conn); ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
