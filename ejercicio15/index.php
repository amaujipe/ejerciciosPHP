<?php
echo "<h1>Ejercicio 15</h1>";
echo "Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100.";
echo "<h2>Ejercicio 15</h2>";

if (isset($_GET['numero'])) {
  $numero = $_GET['numero'];

  echo "Del 1 al 100, el numero ".$numero." tiene los siguientes multiplos:<br />";

  for ($i = 1; $i <= 100; $i++) {
    if ($numero % $i == 0) {
      if ($i == 100) {
        echo $i;
        echo ".";
      }
      else {
        echo $i;
        echo ", ";
      }
    }
  }
}