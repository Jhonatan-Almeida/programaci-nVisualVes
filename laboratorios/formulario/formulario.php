<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Formulario en PHP</title>
	</head>
	<body>
		<h1>Formulario en PHP</h1>
                <label >van imprimir los nombres</label>
		<form method="POST" action="recibir.php">
			<p>
				<label for="nombre">Nombre</label>
                                <input type="text" name="nombre" placeholder="Ingrese el Nombre"/>
			</p>
			
			<p>
				<label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" placeholder="Ingrese el apellido"/>
			</p>
			
			<input type="submit" value="Enviar datos"/>
		</form>
	</body>
</html>

