<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h2>Usuarios</h2><br><br>
<div>
    <form action="usuarios.php" method="post">

    <input type="text" name="usuario_us" placeholder="Ingresa tu Usuario"><br><br>
    <input type="password" name="contraseña_cr" placeholder="Ingresa tu contraseña"><br><br>
    <input type="submit" value="Enviar">

    </form>
</div>

</body>
</html>

<?php

include ("conexion.php");

if (isset($_POST['usuario_us']) && !empty($_POST['usuario_us']) &&  
     isset($_POST['contraseña_cr']) && !empty($_POST['contraseña_cr'])) {

        $conn= mysqli_connect($servername,$username,$password,$database);
        mysqli_query($conn,("INSERT INTO usuarios (usuario_us,contraseña_cr) VALUES('$_POST[contraseña_cr]')"));
        echo "datos insertados!!";
   
   
       }else {
           echo "";
       }
   
   
   
   
   
   ?>


