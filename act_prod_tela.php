<?php

$prod_nombre = $_POST['prod_nombre'];
$prod_subcat = $_POST['subcat'];
$prod_id = $_POST['prod_id'];
$prod_color= $_POST['color'];
$prod_cod_stock= $_POST['prod_cod_stock'];
$prod_cod_color= $_POST['prod_cod_tela'];
$cant_suma = $_POST['telasumar'];
$cant_resta = $_POST['telarestar'];
$suma = $cant_suma - $cant_resta;

require("conn.php");
$query2 = "UPDATE productos SET prod_inventario_no_talla = prod_inventario_no_talla + '$suma' WHERE prod_id = $prod_id";
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
                <u><?php echo $prod_nombre ?></u> actualizado con  <u><?php echo $suma ?></u> Uds/Mts.<br></span><br><br>
            <?php } else { ?>
              <span class="modal_heading">Error: con <u><?php  echo $prod_id ?></u>, Verifique bien la información.</span><br><br>
              <?php }
               ?>
     <a href="index.php" class="btn">REGRESAR</a>
   </div>
 </div>
</body>
</html>
