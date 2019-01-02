<?php

echo "<h1>Ejercicio 14</h1>";
echo "Crear una interfaz de usuario (formulario) con dos input y 4 botones para +, -, *, /";
echo "<h2>Solucion: </h2>";

if (!empty($_GET['numero1']) && !empty($_GET['numero2']) && !empty($_GET['operacion'])) {
  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];
  $operacion = $_GET['operacion'];

  switch ($operacion) {
    case "sumar":
      $resultado = $numero1 + $numero2;
      echo $numero1." + ".$numero2." = ".$resultado;
      break;

    case "restar":
      $resultado = $numero1 - $numero2;
      echo $numero1." - ".$numero2." = ".$resultado;
      break;

    case "multiplicar":
      $resultado = $numero1 * $numero2;
      echo $numero1." x ".$numero2." = ".$resultado;
      break;

    case "dividir":
      $resultado = $numero1 / $numero2;
      echo $numero1." / ".$numero2." = ".$resultado;
      break;
  }
}
else {
  echo "Ingresa la informacion completa";
}


?>

<form action="index.php" method="GET">
  <p>
    <label for="numero1">Numero 1: </label>
    <input type="number" id="numero1" name="numero1">
  </p>

  <p>
    <label for="numero2">Numero 2: </label>
    <input type="number" id="numero2" name="numero2">
  </p>

  <input type="submit" value="sumar" name="operacion">
  <input type="submit" value="restar" name="operacion">
  <input type="submit" value="multiplicar" name="operacion">
  <input type="submit" value="dividir" name="operacion">
</form>
