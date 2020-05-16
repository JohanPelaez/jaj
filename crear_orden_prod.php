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
    (null,null, `$cli_id`, `$op_pedido_de`, `$op_OC`, 
    `$op_num_op`, `$op_num_sub_op`, `$OP_espe_prenda`, `$op_fecha_pedido`, `$op_fecha_entrega`, `$op_tallaje_uti`, 
    `$op_especificaciones`, `$op_lleva_bolsas`, `$op_bolsa_bordada`, `$op_ubicacion_bolsa`, `$op_detalles_bolsa`, 
    `$op_lleva_vivos`, `$op_ubicacion_vivos`, `$op_detalles_vivos`, `$op_lleva_boton`, `$op_boton_cuello`, 
    `$op_color_boton`, `$op_color_ojal`, `$op_color_hilo`, `$op_detalles_boton`, `$op_delantal_ajuste`, 
    `$op_delantal_pasadores`, `$op_delantal_detalles`, `$op_lleva_zipper`, `$op_color_zipper`, 
    `$op_detalles_zipper`, `$op_img1`, `$op_img2`, `$op_log_bor`, `$op_log_sub`, `$op_log_pol`, 
    `$op_detalles_sublimacion`, `$op_detalles_poliflex`, `$op_empaque_por`, `$op_detalle_empaque`)";

    $resultado = $conn->query($query);
    $id = $conn->insert_id;
    mysqli_close($conn);
    
    var_dump($_POST);
    print_r('hello '.$query);
}
