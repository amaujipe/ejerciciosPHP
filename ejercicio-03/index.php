<?php

echo "<h1>Ejercicio 3</h1>";
echo "<p>Escribir un programa en PHP que imprima por pantalla los cuadrados de los 40 primeros
     numeros naturales. PD: Utilizar el bluce while</p>";
echo "<h2>Solucion:</h2>";

$contador = 0;
$limite = 40;
$cuadrado = 0;

while ($contador <= $limite) {
  $cuadrado = $contador * $contador;

  if ($contador != $limite) {
    echo $cuadrado.", ";
  }
  else {
    echo $cuadrado;
  }

  $contador++;
}

echo "<br /><br /><a href='/'>Volver</a>";