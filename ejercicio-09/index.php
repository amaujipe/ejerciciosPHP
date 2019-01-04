<?php

echo "<h1>Ejercicio 7</h1>";
echo "<p>Crear un programa que tenga 4 variables, una de tipo array, otra de tipo string,
      otra de tipo int y otra de tipo boolean, y que imprima un mensaje segun el tipo de variable
      que sea.</p>";
echo "<h2>Solucion: </h2>";

$variable1 = [];
$variable2 = "";
$variable3 = 0;
$variable4 = true;

echo "Descubre el tipo de cada variable... Elige entre 1 y 4:<br />";
$eleccion = 4;
switch ($eleccion) {
  case 1:
    if (is_array($variable1)) {
      echo "La variable 1 es de tipo array";
    }
    else {
      echo "Ooops... No se que tipo de variable es esta";
    }
    break;

  case 2:
    if (is_string($variable2)) {
      echo "La variable 2 es de tipo string";
    }
    else {
      echo "Ooops... No se que tipo de variable es esta";
    }
    break;

  case 3:
    if (is_int($variable3)) {
      echo "La variable 3 es de tipo int";
    }
    else {
      echo "Ooops... No se que tipo de variable es esta";
    }
    break;

  case 4:
    if (is_bool($variable4)) {
      echo "La variable 4 es de tipo boolean";
    }
    else {
      echo "Ooops... No se que tipo de variable es esta";
    }
    break;
}

echo "<br /><br /><a href='/'>Volver</a>";