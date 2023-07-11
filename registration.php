<?php
session_start();
if (isset($_SESSION["user"] )) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
  body {
    padding: 50px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    background: url("img/bg-textura.png");
    background-repeat: repeat;
    border-radius: 10px;
  }

  .form-group {
    margin-bottom: 30px;
  }

  .img-logo2 {
    width: 50%;
    margin-left: 25%;
    margin-bottom: 30px;
  }

  .form-btn {
    margin-bottom: 10px;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="div-logo2">
      <img class="img-logo2" src="img/logo2.png" alt="logo">
    </div>
    <?php
    if (isset($_POST["submit"])) {
      $nombreCompleto = $_POST["nombreCompleto"];
      $fechaNacimiento = $_POST["fechaNacimiento"];
      $numeroId = $_POST["numeroId"];
      $telefono = $_POST["telefono"];
      $contrasena = $_POST["contrasena"];
      $rcontrasena = $_POST["rcontrasena"];

      $passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);

      $errors = array();

      if (
        empty($nombreCompleto) or empty($fechaNacimiento) or empty($numeroId) or empty($telefono)
        or empty($contrasena) or empty($rcontrasena)
      ) {
        array_push($errors, "Todos los campos son obligatorios");
      }
      if (strlen($contrasena) < 8) {
        array_push($errors, "La contraseña debe tener minimo 8 caracteres");
      }
      if ($contrasena !== $rcontrasena) {
        array_push($errors, "Las contraseñas no coinciden");
      }
      require_once "database.php";
      $sql = "SELECT * FROM users WHERE numeroId = '$numeroId'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "Este número de identificación ya se encuentra registrado!");
      }
      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {

        $sql = "INSERT INTO users (nombreCompleto, fechaNacimiento, numeroId, telefono, contrasena) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "ssiis", $nombreCompleto, $fechaNacimiento, $numeroId, $telefono, $passwordHash);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>Te has registrado correctamente.</div>";
        } else {
          die("Algo salio mal");
        }
      }

    }
    ?>

    <form action="registration.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="nombreCompleto" placeholder="Nombre completo">
      </div>
      <div class="form-group">
        <input type="date" class="form-control" name="fechaNacimiento" placeholder="Fecha de nacimiento">
      </div>
      <div class="form-group">
        <input type="int" class="form-control" name="numeroId" placeholder="Número de identificación">
      </div>
      <div class="form-group">
        <input type="int" class="form-control" name="telefono" placeholder="Teléfono">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="contrasena" placeholder="Nueva contraseña">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="rcontrasena" placeholder="Repita contraseña">
      </div>
      <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="Registrarse" name="submit">
      </div>
    </form>
    <p>¿Ya eres usuario? <a href="login.php">Ingresa aqui</a></p>
  </div>
</body>

</html>