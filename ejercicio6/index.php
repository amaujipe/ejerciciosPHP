<?php

echo "<h1>Ejercicio 6</h1>";
echo "<p>Mostrar una tabla de html con las tablas de multiplicar del 1 al 10</p>";
echo "<h2>Solucion: </h2>";

echo "<table border='1'>";
  // Cabecera de las tablas
  echo "<tr>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<th>Tabla del $i</th>";
    }
  echo "</tr>";

  // Contenido de las tablas
  for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
      for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "<td>".$j." x ".$i." = ".$resultado."</td>";
      }
    echo "</tr>";
  }
echo "</table>";