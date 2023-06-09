<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>semana 5</title>
</head>
<body>
       <h2>Semana 5</h2><br><br>
    <div>
         <form action="semanas5.php" method="post">
    
                <input type="date" name="Dia1_se5"><br><br>
                <input type="date" name="Dia2_se5"><br><br>
                <input type="date" name="Dia3_se5"><br><br>
                <input type="date" name="Dia4_se5"><br><br>
                <input type="date" name="Dia5_se5"><br><br>
                <input type="date" name="Dia6_se5"><br><br>
                <input type="date" name="Dia7_se5"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['Dia1_se5']) && !empty($_POST['Dia1_se5']) && 
        isset($_POST['Dia2_se5']) && !empty($_POST['Dia2_se5']) && 
        isset($_POST['Dia3_se5']) && !empty($_POST['Dia3_se5']) &&
        isset($_POST['Dia4_se5']) && !empty($_POST['Dia4_se5']) && 
        isset($_POST['Dia5_se5']) && !empty($_POST['Dia5_se5']) &&
        isset($_POST['Dia6_se5']) && !empty($_POST['Dia6_se5']) && 
        isset($_POST['Dia7_se5']) && !empty($_POST['Dia7_se5'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO semana5 (Dia1_se5,Dia2_se5,Dia3_se5,Dia4_se5,Dia5_se5,Dia6_se5,Dia7_se5) VALUES('$_POST[Dia1_se5]','$_POST[Dia2_se5]','$_POST[Dia3_se5]','$_POST[Dia4_se5]','$_POST[Dia5_se5]','$_POST[Dia6_se5]','$_POST[Dia7_se5]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }

    ?>