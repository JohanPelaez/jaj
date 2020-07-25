<?php

if (isset($_POST["hecha_por"])) {
    $cli_id = $_POST["cliente"];
    $op_pedido_de = $_POST[""];
    $op_OC = $_POST["orden_compra"];
    $op_num_op = $_POST["op"];
    $op_num_sub_op = $_POST["op2"];
    $op_fecha_pedido = $_POST["fecha_sol"];
    $op_fecha_entrega = $_POST["fecha_ent"]; 

    $op_tallaje_uti = $_POST[""];
    $op_especificaciones = $_POST["tallas_especificaciones"];

    $op_lleva_bolsas = $_POST["bolsa"];
    $op_bolsa_bordada = $_POST["bolsa_bordada"];
    $op_ubicacion_bolsa = $_POST["bolsa_ubicacion"];
    $op_detalles_bolsa = $_POST["op_detalles_bolsa"];

    $op_lleva_vivos = $_POST["vivos"];
    $op_ubicacion_vivos = $_POST["ubicacion_vivos"];
    $op_detalles_vivos = $_POST["op_detalles_vivos"];

    $op_lleva_boton = $_POST["boton"];
    $op_boton_cuello = $_POST["boton_cuello"];
    $op_color_boton = $_POST["color_boton"];
    $op_color_ojal = $_POST["color_ojal"];
    $op_color_hilo = $_POST["color_hilo"];
    $op_detalles_boton = $_POST["op_detalles_boton"];

    $op_delantal_ajuste = $_POST["delantal"];
    $op_delantal_pasadores = $_POST["pasadores"];
    $op_delantal_detalles = $_POST["op_detalles_delantal"];

    $op_lleva_zipper = $_POST["zipper"];
    $op_color_zipper = $_POST["color_zipper"];
    $op_detalles_zipper = $_POST["op_detalles_zipper"];

    $op_img1 = $_POST[""];
    $op_img2 = $_POST[""];

    $op_log_bor = $_POST["bordado_logo"];
    $op_log_sub = $_POST["sublimacion_logo"];
    $op_log_pol = $_POST["poliflex"];
    $op_detalles_sublimacion = $_POST["op_detalles_logo"];
    $op_detalles_poliflex = $_POST["op_detalles_poliflex"];
    $op_empaque_por = $_POST[""];
    $op_detalle_empaque = $_POST[""];

    require("conn.php");

    $query = "INSERT INTO `ordenesProduccion`(`op_num_id`, `tipOP_id`, `cli_id`, `op_pedido_de`, `op_OC`, 
    `op_num_op`, `op_num_sub_op`, `OP_espe_prenda`, `op_fecha_pedido`, `op_fecha_entrega`, `op_tallaje_uti`, 
    `op_especificaciones`, `op_lleva_bolsas`, `op_bolsa_bordada`, `op_ubicacion_bolsa`, `op_detalles_bolsa`, 
    `op_lleva_vivos`, `op_ubicacion_vivos`, `op_detalles_vivos`, `op_lleva_boton`, `op_boton_cuello`, 
    `op_color_boton`, `op_color_ojal`, `op_color_hilo`, `op_detalles_boton`, `op_delantal_ajuste`, 
    `op_delantal_pasadores`, `op_delantal_detalles`, `op_lleva_zipper`, `op_color_zipper`, 
    `op_detalles_zipper`, `op_img1`, `op_img2`, `op_log_bor`, `op_log_sub`, `op_log_pol`, 
    `op_detalles_sublimacion`, `op_detalles_poliflex`, `op_empaque_por`, `op_detalle_empaque`) VALUES 
    (null, null, '$cli_id', '$op_pedido_de', '$op_OC', 
    '$op_num_op', '$op_num_sub_op', '$OP_espe_prenda', '$op_fecha_pedido', '$op_fecha_entrega', '$op_tallaje_uti', 
    '$op_especificaciones', '$op_lleva_bolsas', '$op_bolsa_bordada', '$op_ubicacion_bolsa', '$op_detalles_bolsa', 
    '$op_lleva_vivos', '$op_ubicacion_vivos', '$op_detalles_vivos', '$op_lleva_boton', '$op_boton_cuello', 
    '$op_color_boton', '$op_color_ojal', '$op_color_hilo', '$op_detalles_boton', '$op_delantal_ajuste', 
    '$op_delantal_pasadores', '$op_delantal_detalles', '$op_lleva_zipper', '$op_color_zipper', 
    '$op_detalles_zipper', '$op_img1', '$op_img2', '$op_log_bor', '$op_log_sub', '$op_log_pol', 
    '$op_detalles_sublimacion', '$op_detalles_poliflex', '$op_empaque_por', '$op_detalle_empaque')";  

    $resultado = $conn->query($query);
    $id = $conn->insert_id;
    mysqli_close($conn);
}

$reporte = $_POST;

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="view/css/estilos-orden.css" rel="stylesheet" type="text/css">
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
    <div class="row">
      <div class="col-md-3">
        <img class="logo" src="view/img/jaj-logo-rep.png" alt="Logo">
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4"><?=$reporte["cliente"]?></div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-6">Hecha por:</div>
              <div class="col-md-6"><?=$reporte["hecha_por"]?></div>
            </div>
            <div class="row">
              <div class="col-md-6">Orden de compra:</div>
              <div class="col-md-6"><?=$reporte["orden_compra"]?></div>
            </div>
            <div class="row">
              <div class="col-md-6">OP#:</div>
              <div class="col-md-6"><?=$reporte["op"]?> - <?=$reporte["op2"]?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="separator"></div>

    <div class="row">
      <div class="col-md-1">Prenda:</div>
      <div class="col-md-3"><?=$reporte["op2"]?></div>
      <div class="col-md-2">Fec. Solicitud</div>
      <div class="col-md-2"><?=$_POST["fecha_sol"];?></div>
      <div class="col-md-2"> Fec. Entrega</div>
      <div class="col-md-2"><?=$_POST["fecha_ent"];?></div>
    </div>

    <?php if ($reporte["bolsa"] == 1): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>BOLSAS</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Lleva Bolsa?</div>
            <div class="col-md-8"><?=$_POST["bolsa"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Es bordada?</div>
            <div class="col-md-8"><?=$_POST["bolsa_bordada"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación bolsa </div>
            <div class="col-md-8"><?=$_POST["bolsa_ubicacion"];?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Detalles</div>
            <div class="col-md-8"><?=$_POST["op_detalles_bolsa"];?></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($reporte["vivos"] == 1): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>VIVOS</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Lleva Vivos?</div>
            <div class="col-md-8"><?=$_POST["vivos"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["ubicacion_vivos"];?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Detalles</div>
            <div class="col-md-8"><?=$_POST["op_detalles_vivos"];?></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($reporte["boton"] == 1): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>OJALES Y BOTONES</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Lleva Vivos?</div>
            <div class="col-md-8"><?=$_POST["boton"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["boton_cuello"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["color_boton"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["color_ojal"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["color_hilo"];?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Detalles</div>
            <div class="col-md-8"><?=$_POST["op_detalles_boton"];?></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($reporte["delantal"] == 1): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>DELANTALES</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Lleva Vivos?</div>
            <div class="col-md-8"><?=$_POST["delantal"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["pasadores"];?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Detalles</div>
            <div class="col-md-8"><?=$_POST["op_detalles_delantal"];?></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($reporte["zipper"] == 1): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>ZIPPER</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Lleva Vivos?</div>
            <div class="col-md-8"><?=$_POST["zipper"];?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Ubicación vivos </div>
            <div class="col-md-8"><?=$_POST["color_zipper"];?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4">Detalles</div>
            <div class="col-md-8"><?=$_POST["op_detalles_zipper"];?></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

   </div>
 </div>
</body>
</html>
