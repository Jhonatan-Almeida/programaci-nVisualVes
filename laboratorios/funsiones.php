<?php

// Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto 
// y que puede reutilizarse solamente cuando invocan a la función , tantas veces como 
// queramos

// function <nombre de la funcion>(<parametros>){
//     Conjunto de instrucciones;
// }

function nombre(){
   echo " Mi nombre es Jhonatan Cesar";
} 

function apellidos(){
    echo " mis apellidos son Almeida Vaca";
}

//echo nombre()." ". apellidos()."<br>";

function nombres(){
    $html='Nellely Castro<br>';
    $html.='Ezequiel Mora<br>';
    $html.='Perter Carpio<br>';
    $html.='Lilibeth Sanchez<br>';
    $html.='Ginger Peñafiel<br>';
    return $html;
}
//echo nombres();

function tablamultiplicar($numero){
    $cadena = "";
    $cadena .= "<h1>La tabla de multiplicar del $numero </h1>";
    for($i = 0;$i <=10;$i++){
        $cadena .="El resultado de ".$i."*" . $numero." = ".$numero*$i."<br>";
    }
    return $cadena;
}
echo tablamultiplicar(8);



