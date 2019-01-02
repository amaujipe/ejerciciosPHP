<?php

// Creando la variable que registra el tipo de error
$error = "";

// Verificando que todos los campos fueron llenados en el formulario
if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['password']) && !empty($_POST['email'])) {

  //Cambiando el valor de la variable de errores para aclarar que NO hay errores
  $error = "ok";

  // Asignando los valores del formulario a variables
  $name     = $_POST['name'];
  $age      = $_POST['age'];
  $password = $_POST['password'];
  $email    = $_POST['email'];

  // Validando que el valor almacenado en cada variable sea el esperado

  // validando que el nombre sea correcto
  if (!is_string($name) || preg_match("/[0-9]+/", $name)) {
    $error = "name";
  }

  // validando que la edad sea correcta
  if (!is_string($age) || preg_match("/[a-zA-Z ]+/", $age)) {
    $error = "age";
  }

  // validando que el password sea correcto
  if (empty($password) || (strlen($password)<5)) {
    $error = "password";
  }

  // validando que el email sea correcto
  if (!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $error = "email";
  }
}

// Reenviando al formulario si el if de la linea 7 (el primer if del archivo) no se cumple
else {
  $error = "missing-data";
  header("Location:index.php?error=$error");
}

// Reenviando al formulario si alguno de los datos recibidos no cumple con los requerimientos
if ($error != "ok") {
  header("Location:index.php?error=$error");
}

// Mensaje que indica que toda la informacion ingresada esta correcta
else {
  echo "<strong style='color:green;'>Informacion ingresada correctamente. Gracias!</strong>";
}
