<?php

$prod_id = $_POST['prod_nombre'];
$prod_id_id = $_POST['prod_id'];
$tala_id= $_POST['talla_id'];
$prod_color= $_POST['color'];
$prod_tall_genero = $_POST['prod_talla_genero'];
$cant_suma = $_POST['stocksumar'];
$cant_resta = $_POST['stockrestar'];
$suma = $cant_suma - $cant_resta;

require("conn.php");
$query2 = "UPDATE producto_tallas SET prod_tall_cantidad = prod_tall_cantidad + '$suma' WHERE prod_id = (SELECT DISTINCT productos.prod_id
   FROM productos INNER JOIN sub_categorias ON productos.subCat_id = sub_categorias.subCat_id
   INNER JOIN proveedores ON proveedores.prov_id=productos.prov_id WHERE prod_id IN
   (SELECT DISTINCT productos.prod_id FROM productos
     INNER JOIN sub_categorias ON productos.subCat_id = sub_categorias.subCat_id INNER JOIN
    categorias ON sub_categorias.cat_id = categorias.cat_id WHERE categorias.cat_id = 3)
    and productos.prod_nombre = '$prod_id' and productos.prod_color = '$prod_color') AND talla_id = (SELECT DISTINCT talla_id FROM tallas where talla_nombre = '$tala_id')
    AND prod_tall_genero = '$prod_tall_genero'";
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
       $query3 = "UPDATE productos SET prod_inventario_no_talla = prod_inventario_no_talla + $suma
        WHERE prod_id = (SELECT productos.prod_id
           FROM productos INNER JOIN sub_categorias ON productos.subCat_id=sub_categorias.subCat_id INNER JOIN proveedores ON proveedores.prov_id=productos.prov_id WHERE prod_id IN (SELECT productos.prod_id FROM productos
             INNER JOIN sub_categorias ON productos.subCat_id = sub_categorias.subCat_id INNER JOIN
            categorias ON sub_categorias.cat_id = categorias.cat_id WHERE categorias.cat_id = 3) and productos.prod_nombre = '$prod_id' and productos.prod_color = '$prod_color')";
            $resultado2 = $conn->query($query3);
            if ($resultado2) {?>
              <span class="modal_heading">Datos Ingresados de manera Exitosa! <br>
                <u><?php echo $prod_id ?></u> actualizado con  <u><?php echo $suma ?></u> Uds. en talla <u><?php echo $tala_id ?></u> - <u><?php echo $prod_tall_genero ?></u><br></span><br><br>
            <?php }else { ?>
            <span class="modal_heading">Error: El producto <u><?php echo $prod_nombre ?></u> se actualizó sin embargo hubo un error en el stock general.</span><br><br>
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
