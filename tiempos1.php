<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>categorias</title>
</head>
<body>
       <h2>Datos Running</h2><br><br>
    <div>
         <form action="tiempos1.php" method="post">
    
                <input type="text" name="Kilometros_ru" placeholder="Ingrese sus Kilometros"><br><br>
                <input type="number" name="Hora_ru" placeholder="Ingrese su Hora"><br><br>
                <input type="number" name="Minutos_ru" placeholder="Ingrese su Minutos"><br><br>
                <input type="number" name="Segundos_ru" placeholder="Ingrese sus Segundos"><br><br>
                <input type="submit" value="enviar" placeholder=""><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['Kilometros_ru']) && !empty($_POST['Kilometros_ru']) && 
        isset($_POST['Hora_ru']) && !empty($_POST['Hora_ru']) && 
        isset($_POST['Minutos_ru']) && !empty($_POST['Minutos_ru']) && 
        isset($_POST['Segundos_ru']) && !empty($_POST['Segundos_ru'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO tiempos (Kilometros_ru,Hora_ru,Minutos_ru,Segundos_ru) VALUES('$_POST[Kilometros_ru]','$_POST[Hora_ru]','$_POST[Minutos_ru]','$_POST[Segundos_ru]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }





?>