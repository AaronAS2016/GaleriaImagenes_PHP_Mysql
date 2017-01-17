<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Galería</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir foto</h1>
		</div>
	</header>	

	<div class="contenedor">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="post" enctype="multipart/form-data">
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Titulo de la foto</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripcion:</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

			<?php if(isset($error)){mostrarError($error);}?>

			<input type="submit" class="submit" value="Subir Foto">

		</form>
	</div>

	<footer>
		<p class="copyright">Galería creada por Aaron Saban</p>
	</footer>
	
</body>
</html>