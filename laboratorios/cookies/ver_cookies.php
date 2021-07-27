<?php

/* 
Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal,
es un array asociativo.
 */

//var_dump($_COOKIE);

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "La variable cookie de micookie no existe";
}
if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else{
    echo "La variable cookie de oneyear no existe";
}
?>
<a href="crear_cookies.php">Crear</a><br>
<a href="borrar_cookies.php">Borrar</a>

