<?php

echo "<h1>Ejercicio 7</h1>";
echo "<p>Crear un programa que compruebe si una variable esta vacia, y si esta vacia, rellenarla
      con un texto en minusculas y mostrarlo en mayusculas y negrita.</p>";
echo "<h2>Solucion: </h2>";

$miCadena = "asd";

if (empty($miCadena)) {
  $miCadena = "¡esta es una maravillosa frase que me encontre por ahi!";
  echo "<strong>".strtoupper($miCadena)."</strong>";
}
else {
  echo "La variable tiene este contenido: ".$miCadena;
}


echo "<br /><br /><a href='/'>Volver</a>";