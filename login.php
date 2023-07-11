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
  <title>Iniciar Sesión</title>
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
    if (isset($_POST["login"])) {
      $loginId = $_POST["loginId"];
      $logincontrasena = $_POST["logincontrasena"];
      require_once "database.php";
      $sql = "SELECT * FROM users WHERE numeroId = '$loginId'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        if (password_verify($logincontrasena, $user["contrasena"])) {
          session_start();
          $_SESSION["user"] = "yes";
          header("Location: index.php");
          die();
        } else {
          echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
        }
      } else {
        echo "<div class='alert alert-danger'>Datos erroneos</div>";
      }
    }
    ?>

    <form action="login.php" method="post">
      <div class="form-group">
        <input type="text" placeholder="Ingresa número de identificación" name="loginId" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" placeholder="Ingrese la contraseña" name="logincontrasena" class="form-control">
      </div>
      <div class="form-btn">
        <input type="submit" value="Ingresar" name="login" class="btn btn-primary">
      </div>
    </form>
    <div>
      <p>¿No registrado? <a href="registration.php">Registrate aqui</a></p>
    </div>
  </div>

</body>

</html>