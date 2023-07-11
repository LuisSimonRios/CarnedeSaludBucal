<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carné de Salud Bucal</title>
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://kit.fontawesome.com/e710ba57a1.js" crossorigin="anonymous"></script>
  <style>
  .logo {
    text-align: center;
    margin-bottom: 10px;
    padding-left: 10%;
    width: 90%;
  }

  .logo-img {
    width: 14%;
  }

  .logout-button {
    width: 10%;
  }

  body {
    background: url("img/bg-textura.png");
    background-repeat: repeat;
  }

  .navbar {
    background-color: #00416a;
    font-weight: bold;
  }

  .div-title {
    margin-top: 100px;
    text-align: center;
  }

  .title {
    font-size: 38px;
    font-weight: bold;
    color: #00416a;
    text-decoration: none;
  }

  .bottom-space {
    margin-bottom: 25px;
  }

  .link-text {
    text-decoration: none;
  }

  .link-text:hover {
    text-decoration: underline;
  }

  .div-ad {
    text-align: center;
    margin-top: 30px;
  }

  .ad-img {
    width: 50%;
  }

  .button {
    display: flex;
    justify-content: center;
    height: 45px;
    margin: 40px 0 0px 0;
  }

  .button input {
    height: 100%;
    width: 83%;
    margin: auto;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .button input:hover {
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    cursor: pointer;
  }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark">
    <div class="logo">
      <img class="logo-img" src="img/logo.png" alt="Manizales-logo">
    </div>
    <div class="logout-button">
      <a href="logout.php" class="btn btn-warning">Cerrar sesión</a>
    </div>

  </nav>

  <!-- Carousel -->
  <div class="row">
    <div class="col">
      <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/s4.jpg" class="w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/s5.jpg" class="w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/s6.jpg" class="w-100" alt="">
          </div>
        </div>

        <!-- Controles de Anterior y Siguiente -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide #1"></button>
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-current="true"
            aria-label="Slide #2"></button>
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-current="true"
            aria-label="Slide #3"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="div-ad col-md-12">
    <img class="ad-img" src="img/ad.jpeg" alt="">
  </div>

  <div class="div-title">
    <h1 class="title">Carné de Salud Bucal</h1a>
  </div>
  <div class="button">
    <input type="submit" onclick="navigate()" value="Consultar registros de usuarios">
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-primary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">06</h3>
                <h6>Meses</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-primary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">1</h3>
                <h6>Año</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">1</h3>
                <h6>Año y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success ">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class=" bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-dress fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">2</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-dress fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">2</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">3</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">3</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">4</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">4</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">5</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">5</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class=" bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-primary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">6</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-primary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">6</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-child-reaching fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">7</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-child-reaching fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">7</h3>
                <h6>Año y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success ">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class=" bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">8</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">8</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">9</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">9</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-dress fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">10</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-dress fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">10</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">11</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">11</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class=" bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-primary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">12</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-primary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">12</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">13</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-success text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">13</h3>
                <h6>Año y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-success ">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class=" bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">14</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-warning text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-children fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">14</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-warning">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">15</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-danger text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-face-grimace fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">15</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-danger">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-reaching fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">16</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-secondary text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa-solid fa-child-reaching fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">16</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-secondary">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">17</h3>
                <h6>Años</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>

      <div class="bottom-space col-md-3">
        <div class="card text-center">
          <div class="card-header bg-info text-white">
            <div class="row align-items-center">
              <div class="col">
                <i class="fa fa-teeth-open fa-4x"></i>
              </div>
              <div class="col">
                <h3 class="display-3">17</h3>
                <h6>Años y Medio</h6>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <h5>
              <a href="form.php" target="_blank" class="link-text text-info">Valorar <i
                  class="fa-solid fa-circle-right"></i></a>
            </h5>
          </div>
        </div>
      </div>


    </div>
  </div>
  <script>
  function navigate() {
    window.open("search.php", '_blank');
  }
  </script>
  <script src="js/efectos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
</body>

</html>