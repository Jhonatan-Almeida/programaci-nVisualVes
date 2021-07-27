<?php

/* 
Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
 hasta que cierra sesión o cierra el navegador.
 */

// Iniciar una session
// el session_start() debe permanecer en todas las paginas donde desea manetner la session 

session_start();

$variable_local = "Yo soy una variable local";
$_SESSION['variable_session'] = "Yo soy una variable de sesión que persiste los datos";

echo $variable_local."<br>";
echo $_SESSION['variable_session']."<br>";
?>
<a href="pagina.php">Ir a pagina</a>
<a href="logout.php">Cerrar</a>