<?php

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$suma           = $numero1 + $numero2;
$resta          = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division       = $numero1 / $numero2;

echo "<h2>Solucion ejercicio 4;</h2>";

echo "Suma: ".$numero1. " + ".$numero2." = ".$suma."<br /><br />";
echo "Resta: ".$numero1. " - ".$numero2." = ".$resta."<br /><br />";
echo "Multiplicacion: ".$numero1. " x ".$numero2." = ".$multiplicacion."<br /><br />";
echo "Division: ".$numero1. " / ".$numero2." = ".$division."<br /><br />";


echo "<br /><br /><a href='/'>Volver</a>";