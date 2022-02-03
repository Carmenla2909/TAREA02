<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INFORMACION</title>
<!-- Agregar bulma.min.css -->
<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-primary">
<div class="hero-body">
<p class="title">GUARDAR INFRORAMACION</p>
</div>
</section>

   <section class="section">

   <?php //CUESTIONARIO

        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];

        $pelicula = fopen("musica.txt", "a+");

	    while (!feof($musica)) {
					$linea = fgets($musica);
					echo nl2br($musica);


					$crearArchivo = fopen("notas.txt", "w");
          fwrite($crearArchivo, "Esta es la primera línea de mi archivo de texto");
          fputs($crearArchivo, "<br>Esta es mi segunda línea");
          fclose($crearArchivo);
				}
	

	    $fclose($musica);

    ?>

</section>
</body>
</html>