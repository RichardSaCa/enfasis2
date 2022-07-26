<?php
                                                
session_start();
if ($_SESSION["autenticado"] != "SIx3")
    {
      header('Location: IngresoSistema.php?mensaje=3');
    }
else
    {      
       $mysqli = new mysqli($host, $user, $pw, $db);
  	   $sqlusu = "SELECT * from tipo_usuario where IDtipousu='1'";
       $resultusu = $mysqli->query($sqlusu);
       $rowusu = $resultusu->fetch_array(MYSQLI_NUM);
  	    $desc_tipo_usuario = $rowusu[1];
        if ($_SESSION["tipo_usuario"] != $desc_tipo_usuario)
          header('Location: IngresoSistema.php?mensaje=4');
    }

    ?>