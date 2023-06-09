<?php 

$servername = "localhost";
$database = "running";
$username = "root";
$password = "";

//Crea Conexión

$conn =mysqli_connect($servername, $username, $password, $database);

// Controla conexión
if (!$conn){

die("Fallo la conexión :".mysqli_connect_error());



}
echo "";
mysqli_close($conn);
?>