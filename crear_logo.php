<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.

$dir_subida = dirname(__FILE__).'/files/';
$fichero_subido = $dir_subida . basename($_FILES['logo']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['logo']['tmp_name'], $fichero_subido)) {
    $log_name = $_POST['name'];
    $log_image = $_FILES['logo']['name'];
    $cli_id = $_POST['cliente'];
    require("conn.php");
    $query2 = "INSERT INTO logos (log_nombre, cli_id, imagen) VALUES ('$log_name', '$cli_id', '$log_image')";
    $resultado = $conn->query($query2);
    mysqli_close($conn);
} else {
    $resultado = false;
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
    <link href="view/css/style.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<!-- Modals Section -->
	<div class="ventana_container">
		<div class="ventana">
			<?php if($resultado){ ?>
					<span class="modal_heading">Datos Ingresados de manera Exitosa! <br>
					El Logo ha sido creado. </span><br><br>
					<?php } else { ?>
					<span class="modal_heading">Error: Puede que la categoría <u><?php echo $cat_nombre_id ?></u> ya está creada.</span><br><br>
					<?php } ?>
			<a href="/" class="btn">REGRESAR</a>
		</div>
	</div>
</body>
</html>