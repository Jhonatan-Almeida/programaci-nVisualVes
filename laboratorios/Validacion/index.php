<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Validación de formularios PHP</title>
	</head>
	<body>
		<h1>Validar formularios en PHP</h1>
<?php
    if (isset($_GET['error'])){
        $error = $_GET['error'];
        if ($_GET['error'] == "faltan_valores"){
            echo "<strong style='color:red'>Introduce todos los datos del formulario</strong>";
        }
        if($_GET['error'] == "nombre"){
            echo "<strong style='color:red'>Introduce bien el nombre</strong>";
        }
        if($_GET['error'] == "apellido"){
            echo "<strong style='color:red'>Introduce bien el apellido</strong>";
        }
        if($_GET['error'] == "edad"){
            echo "<strong style='color:red'>Introduce bien el edad</strong>";
        }
        if($_GET['error'] == "email"){
            echo "<strong style='color:red'>formato de correo no adecuado</strong>";
        }
        if($_GET['error'] == "password"){
            echo "<strong style='color:red'>Introduce un password</strong>";
        }
    }
?>
            <form method="POST" action="procesar_formulario.php">
                                    <label for="nombre">Nombre</label><br/>
                                    <input type="text" name="nombre"><br/>

                                    <label for="apellidos">Apellidos</label><br/>
                                    <input type="text" name="apellidos" ><br/>

                                    <label for="edad">Edad</label><br/>
                                    <input type="number" name="edad"><br/>

                                    <label for="email">Email</label><br/>
                                    <input type="text" name="email"><br/>

                                    <label for="pass">Contraseña</label><br/>
                                    <input type="password" name="pass" ><br/>

                                    <input type="submit" value="Enviar" />
            </form>
        </body>
</html>