<?php

//if(codicion){
//    codigo si cumple con el caso; 
//}else{
//    codigo si no cumple con el caso;
//}

// forma de envio de $_GET, el cual va por medio de la URL
// isset() = nos idica si existe
// empty() = nos indica si esta vacio
// is_null() = nos indica si es null
print_r ($_GET);
echo "<br>";
echo "<h1>if</h1>";
$num = $_GET['numero'];// variable $num
if (isset($num)){
    if (isset($num)){
        if($num < 7){
            echo "el estudiante reprobo";
        }else{
            echo "el estudiante aprobo";
        }
    }
}
echo "<br>";
$edad = $_GET['edad'];
if (isset($edad)){
    if($edad >= 18){
        echo "La persona es mayor de edad";
    }else{
        echo "La persona es menor de edad";
    }
}
//elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, 
//extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe 
//como false. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión 
//condicional del elseif se evalúa como true. Por ejemplo, el siguiente código debe mostrar a es mayor que b, 
//a es igual que b o a es menor que b:
echo "<br>";
echo "<h1>esleif</h1>";

$a=$_GET['a'];
$b=$_GET['b'];

if (isset($a) && isset($b)){
    if ($a > $b) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
    }
}
echo "<br>";
echo "<h1>Swich</h1>";

$color = $_GET['color'];
if (isset($color)){
    switch ($color){
        case 0:
            echo "el color es amarillo ";
            break;
        case 1:
            echo "el color es rojo";
            break;
        case 2:
            echo "el color es negro";
            break;
        case 3:
            echo "el color es azul";
            break;
    }
}

// Un seleccionador de lenguajes 
//p=El lenguaje de programación es PHP
//C= El lenguaje de programación es c#
//py= El lenguaje de programación es Phyton
//j= El lenguaje de programación es java
echo "<br>";
echo "<h1>lenguajes de programación<h1>";
$leng = $_GET['leng'];
switch ($leng){
    case "p":
        echo "El lenguaje de programación es PHP";
        break;
    case "c":
        echo "El lenguaje de programación es c#";
        break;
    case "py":
        echo "El lenguaje de programación es Phyton";
        break;
    case "j":
        echo "El lenguaje de programación es java";
        break;
}
