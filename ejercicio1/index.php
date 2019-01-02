<?php

  echo "<h1>Ejercicio 1</h1>";
  echo "Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:<br />";
  echo "<ol>";
    echo "<li>Recorrer el arreglo y mostrarlo</li><br />";
    echo "<li>Ordenarlo y mostrarlo</li><br />";
    echo "<li>Mostrar su longitud</li><br />";
    echo "<li>Buscar algun elemento</li><br />";
  echo "</ol>";
  echo "<h2>Solucion:</h2>";

// Creando el array
$enteros = [8, 123, 6378, 34, 23, 62, 2, 56];

// Recorrerlo y mostrarlo
echo "1. Arreglo original: ";
echo mostrarArreglo($enteros);

// Ordenarlo y mostrarlo
sort($enteros);
echo "2. Arreglo ordenado: ";
echo mostrarArreglo($enteros);

// Longitud del arreglo
echo "3. El arreglo tiene un total de ".count($enteros)." elementos<br />";

// Buscar un elemento del arreglo (23)
$buscado = array_search(23, $enteros);
echo "4. El numero 23, se encuentra en el indice ".$buscado;



function mostrarArreglo($arreglo) {
  $resultado = "";
  for ($i = 0; $i < count($arreglo); $i++) {
    if ($i == (count($arreglo)-1)) {
      $resultado .= $arreglo[$i]."<br />";
    } else {
      $resultado .= $arreglo[$i].", ";
    }
  }

  return $resultado;
}

echo "<br /><br /><a href='/'>Volver</a>";