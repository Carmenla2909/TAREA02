<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CUESTONARIO</title>
<!-- Agregar bulma.min.css -->
<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
    <div class="hero-body">
    <p class="title">INFORMACION DEL GENERO MUSICAL
    </p>
    </div>
    </section>

    <section class="section">

          <form action="coleccion.php" method="post">
               <div>
                    <label>Nombre De La Cancion:</label>
                    <input type="text" class="input" name="nombre" placeholder="Escribe el nombre de la cancion">
               </div>

               <div>
                    <label>Fecha De Estreno:</label>
                    <input type="text" class="input" name="fecha" placeholder="Escribe la fecha de estreno">
               </div>

               <div>
                    <label for="name">Genero De La Cancion:</label>
	                <select name="genero">
                        <option value="regueton">Regueton</option>
                        <option value="salsa">Salsa</option>
                        <option value="banda">Banda</option>
                        <option value="bachata">Barchata</option>
                    </select> <br></br>
                </div>

               <div>
                    <label>Descripción:</label>
                    <textarea name="descripcion" class="input" placeholder="Agregue la descripción">

                    </textarea>
               </div>

               <input type="submit" class="button is-link" value="Guardar">
          </form>

     </section>
</body>
</html>