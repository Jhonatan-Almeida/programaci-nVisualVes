<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>Tabla de multiplicar multideminsión del 1 al 10</h1>";

for ($i=1;$i<=10;$i++){
    echo "<h2>Tabla de multiplicar del ".$i."</h2>";
    for($j=0;$j<=12; $j++){
        echo "El resultado de $i * $j = ".$i*$j."<br>";
    }
}