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
                        
			<p>
				<label for="apellidos">email</label>
                                <input type="email" name="email"/>
			</p>
                        <p>
				<label for="apellidos">Edad</label>
                                <input type="number" name="edad"/>
			</p>
                        <p>
				<label for="apellidos">Color</label>
                                <input type="color" name="color"/>
			</p>
                        <p>
				<label for="apellidos">Contraseña</label>
                                <input type="password" name="password"/>
			</p>
                        <p>
				<label for="apellidos">Sexo</label>
                                Masculino<input type="radio" name="sexo" value="0"/> Femenino<input type="radio" name="sexo" value="1"/>
			</p>
                        <p>
				<label for="apellidos">Nacionalidad</label>
                                Ecuatoriano<input type="checkbox" name="nacionalidad" value="0"/> 
                                Peruano<input type="checkbox" name="nacionalidad" value="1"/>
                                Colombianos<input type="checkbox" name="nacionalidad" value="2"/>
                                Venezolano<input type="checkbox" name="nacionalidad" value="3"/>
			</p>
                        <p>
				<label for="apellidos">Pagina</label>
                                <input type="url" name="pagina"/>
			</p>
                        <p>
				<label for="apellidos">Cuidad</label>
                                <select>
                                    <option>Daule</option>
                                    <option>Guayaquil</option>
                                    <option>Babahoyo</option>
                                    <option>Montalvo</option>
                                    <option>Guaranda</option>
                                  
                                </select>
			</p>
                        <p>
				<label for="apellidos">Descripción</label>
                                <textarea name="descripcion"></textarea>
			</p>
			<input type="submit" value="Enviar datos"/>
                        <input type="button" value="button"
		</form>
	</body>
</html>

