<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= saludbucal.xls");
?>

<table>
  <?php
            include 'database.php';

            $sql="Select * from `form`";  
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
    
        ?>

</table>