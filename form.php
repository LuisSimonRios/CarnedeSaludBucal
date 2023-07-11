<?php

session_start();

if (!isset($_SESSION["user"])) {

  header("Location: login.php");

}





require "database.php";



if(isset($_POST['submit'])){

  $documento = $_POST["documento"];

  $edad = $_POST["edad"];

  $fecha_valoracion = $_POST["fecha_valoracion"];

  $fecha_prox_cita = $_POST["fecha_prox_cita"];

  $aplicacion_barniz = $_POST["aplicacion_barniz"];

  $cop = $_POST["cop"];

  $firma = $_POST["firma"];

  $ips = $_POST["ips"];

  $observaciones = $_POST["observaciones"];

  

$query = "INSERT INTO form (documento, edad, fecha_valoracion, fecha_prox_cita, aplicacion_barniz, cop, firma, ips, observaciones) VALUES('$documento', 
'$edad', '$fecha_valoracion', '$fecha_prox_cita', '$aplicacion_barniz', '$cop', '$firma', '$ips', '$observaciones')";

mysqli_query($conn, $query);

echo

"

<script> alert('La información se registro exitosamente'); </script>

";

}

?>



<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formulario</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link

    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"

    rel="stylesheet">

  <link rel="stylesheet" href="css/form-styles.css">

</head>



<body>

  <div class="container">

    <div class="title">Valoración dental y general</div>

    <form action="#" method="post">

      <div class="user-details">

        <div class="input-box">

          <span class="details">Confirme el documento</span>

          <input type="int" name="documento" placeholder="Ingrese el documento" required>

        </div>

        <div class="input-box">

          <span class="details">Confirme la edad</span>

          <select name="edad" required>

            <option value="" selected hidden>Edad</option>

            <option value="6 meses">6 meses</option>

            <option value="1 ano">1 año</option>

            <option value="1 ano y medio">1 año y medio</option>

            <option value="2 anos">2 anos</option>

            <option value="2 anos y medio">2 años y medio</option>

            <option value="3 anos">3 años</option>

            <option value="3 anos y medio">3 años y medio</option>

            <option value="4 anos">4 años</option>

            <option value="4 anos y medio">4 años y medio</option>

            <option value="5 anos">5 años</option>

            <option value="5 anos y medio">5 años y medio</option>

            <option value="6 anos">6 años</option>

            <option value="6 anos y medio">6 años y medio</option>

            <option value="7 anos">7 años</option>

            <option value="7 anos y medio">7 años y medio</option>

            <option value="8 anos">8 años</option>

            <option value="8 anos y medio">8 años y medio</option>

            <option value="9 anos">9 anos</option>

            <option value="9 anos y medio">9 años y medio</option>

            <option value="10 anos">10 años</option>

            <option value="10 anos y medio">10 años y medio</option>

            <option value="11 anos">11 años</option>

            <option value="11 anos y medio">11 años y medio</option>

            <option value="12 anos">12 años</option>

            <option value="12 anos y medio">12 años y medio</option>

            <option value="13 anos">13 años</option>

            <option value="13 anos y medio">13 años y medio</option>

            <option value="14 anos">14 años</option>

            <option value="14 anos y medio">14 años y medio</option>

            <option value="15 anos">15 años</option>

            <option value="15 anos y medio">15 años y medio</option>

            <option value="16 anos">16 años</option>

            <option value="16 anos y medio">16 años y medio</option>

            <option value="17 anos">17 años</option>

            <option value="17 anos y medio">17 años y medio</option>

          </select>

        </div>

        <div class="input-box">

          <span class="details">Fecha valoración</span>

          <input type="date" name="fecha_valoracion" required>

        </div>

        <div class="input-box">

          <span class="details">Fecha próxima cita</span>

          <input type="date" name="fecha_prox_cita" required>

        </div>

        <div class="input-box">

          <span class="details">Aplicación de barniz fluor</span>

          <input type="date" name="aplicacion_barniz" required>

        </div>

        <div class="input-box-1">

          <span class="details">COP</span>

          <input type="number" id="num1" placeholder="Dientes cariados" required>

          <input type="number" id="num2" placeholder="Dientes perdidos" required>

          <input type="number" id="num3" placeholder="Dientes obturados" required>

          <button class="add" id="add">=</button>

          <input class="resultado" type="number" id="result" name="cop" placeholder="" readonly>

        </div>

        <div class="input-box">

          <span class="details">Firma del profesional</span>

          <input type="file" name="firma" placeholder="Firma del profesional">

        </div>

        <div class="input-box">

          <span class="details">Ingrese el nombre de la IPS</span>

          <input type="text" name="ips" placeholder="Ingrese la IPS" required>

        </div>

        <div class="input-box">

          <span class="details">Observaciones</span>

          <input type="text" name="observaciones" class="div-observ" placeholder="Ingrese las observaciones" required>

        </div>

      </div>

      <div class="button">

        <input type="submit" name="submit" value="Registrar">

      </div>

    </form>

  </div>



  <script>

  var n1 = document.getElementById("num1");

  var n2 = document.getElementById("num2");

  var n3 = document.getElementById("num3");

  var res = document.getElementById("result");



  document.getElementById("add").addEventListener("click", function() {

    res.value = parseInt(n1.value) + parseInt(n2.value) + parseInt(n3.value);

  });

  </script>

</body>



</html>