<?php

echo "<h1>Ejercicio 13</h1>";
echo "Crear una funcion que valide un email con filter_var recogido por get, validarlo y mostrar el
      resultado";
echo "<h2>Solucion: </h2>";

function validarEmail($email) {
  $validar = "¡No valido!";

  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validar = "¡Valido!";
  }

  return $validar;
}


if (isset($_GET['email'])) {
  echo validarEmail($_GET['email']);
}
else {
  echo "Debes pasar un email por get";
}