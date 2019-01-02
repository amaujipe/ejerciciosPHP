<?php

echo "<h1>Ejercicio 7</h1>";
echo "<p>Crear un array con el contenido de la siguiente tabla y mostrar su contenido simulando la tabla :</p>";
echo "<table border='1'>";
  echo "<tr>";
    echo "<th>Accion</th>";
    echo "<th>Aventura</th>";
    echo "<th>Deportes</th>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>GTA</td>";
    echo "<td>Assasins Creed</td>";
    echo "<td>Fifa 19</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>Call Of Dutty</td>";
    echo "<td>Crash</td>";
    echo "<td>PES 19</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>PugB</td>";
    echo "<td>Prince Of Persia</td>";
    echo "<td>Moto GP 19</td>";
  echo "</tr>";
echo "</table>";
echo "<h2>Solucion: </h2>";

// Creando el arreglo
$videoJuegos = [
  "Accion"   => ['GTA', 'Call Of Dutty', 'PugB'],
  "Aventura" => ['Assasins Creed', 'Crash', 'Prince Of Persia'],
  "Deportes" => ['Fifa 19', 'PES 19', 'MotoGP 19']
];

// Creando una variable que almacena un arreglo con las categorias de los videojuegos
$categorias = array_keys($videoJuegos);

// Creando una variable con el numero de columnas que contendra la tabla
$columnas = count($videoJuegos);

echo "<table border='1'>";

  // Imprimiendo la cabecera de la tabla
  echo "<tr>";
    foreach ($categorias as $categoria) {
      echo"<th>".$categoria."</th>";
    }
  echo "</tr>";

  // Imprimiendo el contenido de la tabla
  for ($i = 0; $i < $columnas; $i++) {
    // Creando una nueva fila
    echo "<tr>";

      // Aqui esta la magia
      for ($j = 0; $j < $columnas; $j++) {

        // Cambiando la categoria cada vez que cambia j con el fin de completar la fila
        switch ($j) {
          case 0:
            $llave = $categorias[$j];
            break;
          case 1:
            $llave = $categorias[$j];
            break;
          case 2:
            $llave = $categorias[$j];
            break;
        }

        // Imprimiendo el mismo indice de cada categoria para completar la fila
        echo "<td>".$videoJuegos[$llave][$i]."</td>";
      }
    echo "</tr>";
  }
echo "</table>";


echo "<br /><br /><a href='/'>Volver</a>";