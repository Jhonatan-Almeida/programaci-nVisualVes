<?php

//Algunas variables predefinidas en PHP son "superglobales", lo que significa que están 
//disponibles en todos los ámbitos a lo largo del script. No es necesario emplear global 
//$variable; para acceder a ellas dentro de las funciones o métodos.

echo '<h1>Variables Super Globales - Variable del Servidor</h1>';

//var_dump($_SERVER);

echo "<br>";
echo '<h3>DIRECCIÓN DEL SERVER</h3>';
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo '<h3>NOMBRE DEL SERVER</h3><br>';
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo '<h3>SOFTWARE DEL SERVER</h3><br>';
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo '<h3>DIRECCIÓN DEL SERVER</h3><br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo '<h3>DIRECCIÓN DE LA IP REMOTA</h3><br>';
echo $_SERVER['REMOTE_ADDR'];

 

