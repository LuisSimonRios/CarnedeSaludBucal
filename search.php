<?php
session_start();

if (!isset($_SESSION["user"])) {

  header("Location: login.php");

}

include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscar registros</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>

  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-mt-4">
          <div class="card-header">
            <h4>Consultar registros de usuarios</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-7">
                <form method="post">
                  <div class="input-group">
                    <input type="text" placeholder="Ingresar el documento o edad a consultar" class="form-control"
                      name="search">
                    <button class="btn btn-dark btn-sm" name="submit">Buscar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <table class="table">
          <?php
          if(isset($_POST['submit'])){
            $search=$_POST['search'];

            $sql="Select * from `form` where documento like '%$search%' or edad like '%$search%'";  
            $result = mysqli_query($conn,$sql);
            if($result){
              if(mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th>ID</th> 
                <th>Documento</th>
                <th>Edad</th>
                <th>Fecha de valoración</th>
                <th>Fecha próxima cita</th>
                <th>Aplicación Barniz</th>
                <th>Dientes Cariados</th>
                <th>Dientes Perdidos</th>
                <th>Dientes Obturados</th>
                <th>COP</th>
                <th>firma</th>
                <th>IPS</th>
                <th>Observaciones</th>      
                </tr>
                </thead>
                ';
                while($row=mysqli_fetch_assoc($result)){
                echo '<tbody>
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['documento'].'</td>
                <td>'.$row['edad'].'</td>
                <td>'.$row['fecha_valoracion'].'</td>
                <td>'.$row['fecha_prox_cita'].'</td>
                <td>'.$row['aplicacion_barniz'].'</td>
                <td>'.$row['cariados'].'</td>
                <td>'.$row['perdidos'].'</td>
                <td>'.$row['obturados'].'</td>
                <td>'.$row['cop'].'</td>
                <td>'.$row['firma'].'</td>
                <td>'.$row['ips'].'</td>
                <td>'.$row['observaciones'].'</td>
                </tr>
                </tbody>';
                }
              }else {
                echo "<h2 class=text-danger>Usuario no encontrado</h2>";
              }
            }
          }
        ?>

        </table>
      </div>
    </div>
  </div>

</body>

</html>