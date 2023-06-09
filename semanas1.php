<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>semana 1</title>
</head>
<body>
       <h2>Semana 1</h2><br><br>
    <div>
         <form action="semanas1.php" method="post">
    
                <input type="date" name="Dia1_se1"><br><br>
                <input type="date" name="Dia2_se1"><br><br>
                <input type="date" name="Dia3_se1"><br><br>
                <input type="date" name="Dia4_se1"><br><br>
                <input type="date" name="Dia5_se1"><br><br>
                <input type="date" name="Dia6_se1"><br><br>
                <input type="date" name="Dia7_se1"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['Dia1_se1']) && !empty($_POST['Dia1_se1']) && 
        isset($_POST['Dia2_se1']) && !empty($_POST['Dia2_se1']) && 
        isset($_POST['Dia3_se1']) && !empty($_POST['Dia3_se1']) &&
        isset($_POST['Dia4_se1']) && !empty($_POST['Dia4_se1']) && 
        isset($_POST['Dia5_se1']) && !empty($_POST['Dia5_se1']) &&
        isset($_POST['Dia6_se1']) && !empty($_POST['Dia6_se1']) && 
        isset($_POST['Dia7_se1']) && !empty($_POST['Dia7_se1'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO semana1 (Dia1_se1,Dia2_se1,Dia3_se1,Dia4_se1,Dia5_se1,Dia6_se1,Dia7_se1) VALUES('$_POST[Dia1_se1]','$_POST[Dia2_se1]','$_POST[Dia3_se1]','$_POST[Dia4_se1]','$_POST[Dia5_se1]','$_POST[Dia6_se1]','$_POST[Dia7_se1]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }

    ?>
