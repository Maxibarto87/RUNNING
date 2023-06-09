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
         <form action="datosrunnings.php" method="post">
    
                <input type="text" name="Nombres_ru" placeholder="Ingrese su numero"><br><br>
                <input type="text" name="Apellido_ru" placeholder="Ingrese su Apellido"><br><br>
                <input type="text" name="Domicilio_ru" placeholder="Ingrese su Domicilio"><br><br>
                <input type="text" name="Localidad_ru" placeholder="Ingrese su Localidad"><br><br>
                <input type="text" name="Provincia_ru" placeholder="Ingrese su Provincia"><br><br>
                <input type="number" name="Telefono_ru" placeholder="Numero de Telefono"><br><br>
                <input type="number" name="Peso_ru" placeholder="Ingrese su peso"><br><br>
                <input type="number" name="Edad_ru" placeholder="Ingrese su Edad"><br><br>
                <input type="email" name="Email_ru" placeholder="Ingrese su Email"><br><br>
                <input type="submit" value="enviar" ><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['Nombres_ru']) && !empty($_POST['Nombres_ru']) && 
        isset($_POST['Apellido_ru']) && !empty($_POST['Apellido_ru']) && 
        isset($_POST['Domicilio_ru']) && !empty($_POST['Domicilio_ru']) && 
        isset($_POST['Localidad_ru']) && !empty($_POST['Localidad_ru']) && 
        isset($_POST['Provincia_ru']) && !empty($_POST['Provincia_ru']) && 
        isset($_POST['Telefono_ru']) && !empty($_POST['Telefono_ru']) && 
        isset($_POST['Peso_ru']) && !empty($_POST['Peso_ru']) && 
        isset($_POST['Edad_ru']) && !empty($_POST['Edad_ru']) &&
        isset($_POST['Email_ru']) && !empty($_POST['Email_ru'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO datosrunning (Nombres_ru,Apellido_ru,Domicilio_ru,Localidad_ru,Provincia_ru,Telefono_ru,Peso_ru,Edad_ru,Email_ru) VALUES('$_POST[Nombres_ru]','$_POST[Apellido_ru]','$_POST[Domicilio_ru]','$_POST[Localidad_ru]','$_POST[Provincia_ru]','$_POST[Telefono_ru]','$_POST[Peso_ru]','$_POST[Edad_ru]','$_POST[Email_ru]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }





?>