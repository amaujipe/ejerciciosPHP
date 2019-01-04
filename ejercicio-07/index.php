<?php

echo "<h1>Ejercicio 7</h1>";
echo "<p>Crear un programa que añada valores a un arreglo mientras que su longitud sea menor a 120
      y luego mostrarlo en pantalla.</p>";
echo "<h2>Solucion: </h2>";

$misNumeros = [];
$tamanoArreglo = 0;
$contador = 0;

while ($contador < 120) {
  $misNumeros[$contador] = rand(1, 1000);
  $contador++;
}

$tamanoArreglo = count($misNumeros);

for($i = 0; $i < $tamanoArreglo; $i++) {
  echo $misNumeros[$i].", ";
}


echo "<br /><br /><a href='/'>Volver</a>";