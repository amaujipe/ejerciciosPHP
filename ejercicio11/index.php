<?php

echo "<h1>Ejercicio 11: Validacion de formularios</h1>";

// Mostrando los errores en caso de que existan al validar el formulario en el archivo validacion.php
if (isset($_GET['error'])) {
  $error = $_GET['error'];

  switch ($error) {
    case "missing-data":
      echo "<strong style='color:red;'>Debes completar todos los campos</strong>";
      break;

    case "name":
      echo "<strong style='color:red;'>El nombre solo puede contener letras</strong>";
      break;

    case "age":
      echo "<strong style='color:red;'>Ingresa una edad correcta</strong>";
      break;

    case "password":
      echo "<strong style='color:red;'>La contraseña debe tener al menos 5 caracteres de longitud</strong>";
      break;

    case "email":
      echo "<strong style='color:red;'>Escribe un email valido</strong>";
      break;
  }
}

?>

<form method="POST" action="validacion.php">
  <p>
    <label for="name">Nombre: </label>
    <input type="text" id="name" name="name" pattern="[A-Za-z ]+" maxlength="50" required>
    Solo letras y espacios en blanco
  </p>

  <p>
    <label for="age">Edad: </label>
    <input type="text" id="age" name="age" pattern="[0-9]+" maxlength="5" required>
    Solo numeros
  </p>

  <p>
    <label for="password">Contraseña: </label>
    <input type="password" id="password" name="password" minlength="5" maxlength="20" required>
    Minimo 5 caracteres de longitud
  </p>

  <p>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" maxlength="100" required>
  </p>

  <p>
    <input type="submit" value="Enviar">
  </p>
</form>
