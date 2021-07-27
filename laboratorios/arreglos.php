<?php

//El arreglo es un conjunto de datos utilizables como uno solo, contenedor de datos 

//$arreglo = array(elementos);
//$arreglo2 = [];
        //          0        1     2
$frutas = array("manzana","pera","uva");
 
//print_r ($frutas);

//echo $frutas[0];

//foreach ($frutas as $key => value){
//}

foreach ($frutas as $fruta){
    echo $fruta."<br>";
}

$personas = array(
            array(
            'nombre'=>'Andy German',
            'direccion'=>'La Cooperativa',      //0
            'sexo'=>'Masculino'),
    array(
            'nombre'=>'San Lucas Salazar',
            'direccion'=>'Juan Bautista',      //1
            'sexo'=>'Masculino'),
    array(
            'nombre'=>'Luis Castro',
            'direccion'=>'Piñar',              //2
            'sexo'=>'Masculino'),
        );

echo "<br>";

foreach ($personas as $key => $persona){
    echo $persona['nombre']."<br>";
}
        
var_dump($personas);
   
    

