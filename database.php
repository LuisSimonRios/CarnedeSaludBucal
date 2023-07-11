<?php

$hostName = "localhost";
$dbUser = "root";
$dbPasword = "";
$dbName = "saludbucal";
$conn = mysqli_connect($hostName, $dbUser, $dbPasword, $dbName);
if (!$conn) {
  die("Algo salio mal");
}

?>