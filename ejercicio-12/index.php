<?php

echo "<h1>Ejercicio 12</h1>";
echo "<p>Crear una sesion que aumente su valor en uno o disminuya en uno en funcion de si el 
      parametro get counter esta a uno o a cero.</p>";
echo "<h2>Solucion:</h2>";

session_start();

// Creando la variable numero que cambiara durante la sesion
if (!isset($_SESSION["numero"])) {
  $_SESSION["numero"] = 0;
}

// Aumentando el valor de la variable numero
if (isset($_GET["counter"]) && $_GET["counter"]==1) {
  $_SESSION["numero"]++;
}

// Dismuyendo el valor de numero
if (isset($_GET["counter"]) && $_GET["counter"]==0) {
  $_SESSION["numero"]--;
}

?>

<h3>El valor de la sesion numero es: <?=$_SESSION["numero"]?></h3>
<p><a href="index.php?counter=1">Aumentar el valor</a></p>
<p><a href="index.php?counter=0">disminuir el valor</a></p>
