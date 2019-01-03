<?php

 echo "<h1>Ejercicio 2</h1>";
 echo "<p>Escribir un script en PHP que nos muestre por pantalla todos los numeros pares que hay del 1 al 100.</p>";
 echo "<h2>Solucion:</h2>";

$limite = 100;

for ($i = 1; $i <= $limite; $i++) {
  if (($i % 2) == 0) {
    if($i != $limite) {
      echo $i.", ";
    }
    else {
      echo $i;
    }
  }
}

echo "<br /><br /><a href='/'>Volver</a>";