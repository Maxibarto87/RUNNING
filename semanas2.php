<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>semana 2</title>
</head>
<body>
       <h2>Semana 2</h2><br><br>
    <div>
         <form action="semanas2.php" method="post">
    
                <input type="date" name="Dia1_se2"><br><br>
                <input type="date" name="Dia2_se2"><br><br>
                <input type="date" name="Dia3_se2"><br><br>
                <input type="date" name="Dia4_se2"><br><br>
                <input type="date" name="Dia5_se2"><br><br>
                <input type="date" name="Dia6_se2"><br><br>
                <input type="date" name="Dia7_se2"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['Dia1_se2']) && !empty($_POST['Dia1_se2']) && 
        isset($_POST['Dia2_se2']) && !empty($_POST['Dia2_se2']) && 
        isset($_POST['Dia3_se2']) && !empty($_POST['Dia3_se2']) &&
        isset($_POST['Dia4_se2']) && !empty($_POST['Dia4_se2']) && 
        isset($_POST['Dia5_se2']) && !empty($_POST['Dia5_se2']) &&
        isset($_POST['Dia6_se2']) && !empty($_POST['Dia6_se2']) && 
        isset($_POST['Dia7_se2']) && !empty($_POST['Dia7_se2'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO semana2 (Dia1_se2,Dia2_se2,Dia3_se2,Dia4_se2,Dia5_se2,Dia6_se2,Dia7_se2) VALUES('$_POST[Dia1_se2]','$_POST[Dia2_se2]','$_POST[Dia3_se2]','$_POST[Dia4_se2]','$_POST[Dia5_se2]','$_POST[Dia6_se2]','$_POST[Dia7_se2]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }

    ?>