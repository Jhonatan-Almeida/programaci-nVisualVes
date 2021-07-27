<?php
session_start();
echo $variable_local."<br>";
echo $_SESSION['variable_session']."<br>";
?>
<a href="index.php">Ir a index</a>
<a href="logout.php">Cerrar</a>
