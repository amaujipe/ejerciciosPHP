<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];

  if ($numero1 < $numero2) {
    echo "<h2>Solucion ejercicio 5:</h2>";

    for ($i = $numero1; $i <= $numero2; $i++) {
      if ($i != $numero2) {
        echo $i.", ";
      }
      else {
        echo $i;
      }
    }
  }
  else {
    echo "<h1>El Numero 1 debe ser menor al Numero 2</h1>";
  }

}
else {
  echo "<h1>Por favor ingresa 2 numeros</h1>";
}

echo "<br /><br /><a href='ejercicio5.html'>Volver al formulario</a>";
echo "<br /><br /><a href='/'>Volver al home</a>";