<?php
    include dirname(__FILE__).'/../conn.php';

    $bigObj = [];

    $rs = $conn->query("SELECT * FROM clientes");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['clientes'][] = $row;
        }
    }

    $rs = $conn->query("SELECT * FROM tipos_op");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['tipos_op'][] = $row;
        }
    }

    $rs = $conn->query("SELECT * FROM tipos_op");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['tipos_op'][] = $row;
        }
    }

    $rs = $conn->query("SELECT * FROM proveedores");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['proveedores'][] = $row;
        }
    }

    $rs = $conn->query("SELECT * FROM productos");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['productos'][] = $row;
        }
    }

    $rs = $conn->query("SELECT * FROM tallas");
    if ($rs->num_rows > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $bigObj['tallas'][] = $row;
        }
    }
    
    //print_r(json_encode($bigObj));
    $conn-> close();
