<?php
/* 
 Un bucle o ciclo, en programación, es una secuencia de instrucciones de código que se ejecuta repetidas veces, 
 * hasta que la condición asignada a dicho bucle deja de cumplirse.
 * Los tres bucles más utilizados en programación son el bucle while, el bucle for y el bucle do-while.
 *while(codicion){
    Secuencia de instrucciones dadas;
}
 *  */
$num = $_GET['numero'];
echo "<h1>Tabla de multiplicar del ".$num." por medio del whilw</h1>";
if(isset($num)){
    $cont=0;
    while ($cont <= 10){
        echo "El resultado de $num * $cont = ".$cont*$num."<br>";
        $cont++;
    }
   
 /*for($i=0;$i<=10;$i++){
 *      Secucnuca de intrucciones dadas;
 * }*/
 echo "<br>";
 echo "<h1>Tabla de multiplicar del ".$num." por medio del bucle for </h1>";
 for ($i=0;$i<=10;$i++){
    echo "El resultado de $num * $i = ".$i*$num."<br>"; 
 }
 $inc= 0;
 echo "<br>";
 echo "<h1>Tabla de multiplicar del ".$num." por medio del bucle do-while</h1>";
 do{
    echo "El resultado de $num * $inc = ".$inc*$num."<br>";
    $inc++;
 }while($inc <=10);
}else{
     echo "Debe ingresar el numero a calcular en la URL.....!";
}

/*
 * $inc++; $inc--
 * $inc = $inc + 1
 * $inc+1; 
 * 
 */

