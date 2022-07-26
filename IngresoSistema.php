<?php
// PROGRAMA DE VISUALIZACI�N DEL VEH�CULO POR USUARIO VIAJERO
include "conexion.php";
$mysqli = new mysqli($host, $user, $pw, $db); // Aquí se hace la conexión a la base de datos.
                               
?> 

<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="Img/iconoCB1.PNG">
    <link rel="icon" href="Img/fondo2.jpg">
    <meta charset="utf-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="Recursos/estilos/login.css">
  </head>

  <body background="Recursos/Img/fondo2.jpg">



  <div class="inicioSesion">
    <div class="login-box">
   
      <img src="Recursos/Img/iconoCB1.png" class="avatar" alt="Avatar Image">
      <h1>Inicio de sesión</h1>
      <form method="POST" action="validar.php">
        <!-- USERNAME INPUT -->
        <label for="login1">Identificación</label>
        <input type="text" value="" name="login1" placeholder="Ingrese su número de identificación">
        <!-- PASSWORD INPUT -->
        <label for="passwd1">Contraseña</label>
        <input type="password" value="" name="passwd1" placeholder="Ingrese su contraseña" required>
        <input type="submit" value="Iniciar sesión" name="Enviar">
        <div class="volver"><a href="index.php">Volver</a><br></div>
        
        <label for="password">
        <?php
          if (isset($_GET["mensaje"]))
           {
            $mensaje = $_GET["mensaje"];
            if ($_GET["mensaje"]!=""){
        ?>
  	            Datos Incorrectos:
                    <?php 
                       if ($mensaje == 1)
                         echo "El password del usuario no coincide.";
                       if ($mensaje == 2)
                         echo "No hay usuarios con el login (usuario) ingresado o est� inactivo.";
                       if ($mensaje == 3)
                         echo "No se ha logueado en el Sistema. Por favor ingrese los datos.";
                       if ($mensaje == 4)
                         echo "Su tipo de usuario, no tiene las credenciales suficientes para ingresar a esta opci�n.";
                    ?>    
          </label>
        <?php 
            }
          }
        ?>
      </form>
    </div>
    </div>
  </body>
</html>