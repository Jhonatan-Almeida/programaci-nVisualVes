<?php
/*Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o ratrear el comportamiendo del mismo
 * en la web.
 */
// Crear cookie
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//cookie básica

setcookie("micookie","Este es el valor de la galleta");

//cookie con expiración 

setcookie("oneyear","Esta es una cookie que dura 365 dias", time()+(60*60*24*365));

header("Location: ver_cookies.php");