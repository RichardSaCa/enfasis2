<?php
// PROGRAMA DE VISUALIZACI�N DEL VEH�CULO POR USUARIO VIAJERO
include "conexion.php";
$mysqli = new mysqli($host, $user, $pw, $db); // Aquí se hace la conexión a la base de datos.
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <link rel="icon" href="img/iconoCB1.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Recursos/Img/iconoCB1.png">
  <link rel="stylesheet" href="Recursos/estilos/EstilosRegistro.css">
  <link rel="stylesheet" href="Recursos/estilos/estilo.css">
  <link rel="stylesheet" href="Recursos/estilo/style.css">

  <title> Registro de Usuarios </title>
</head>


<body>

  <header class="header">
    <div class="container logo-nav-container">
      <h1 align=center>
        <a href="#" class="logo"><img src="Recursos/Img/iconoCB1.png"><br><b>
          </b></font></a>
      </h1>
      <nav class="navigation">
        <ul>
          <li><a href="IngresoSistema.php">Iniciar sesión</a></li>
          <li><a href="index.php">Volver</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <Br>
  <form action="" class="form" method="POST">
    <h2 class="form_title"> Registrar Usuario</h2>
    <div class="form_container">
      <div class="form_group">
        <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" ">
        <label for="nombre" class="form_label">Nombre completo</label>
        <span class="form_line"></span>
      </div>
    </div>

    <div class="form_container">
      <div class="form_group">
        <input type="number" name="NumID" id="NumID" class="form_input" placeholder=" " required min="100" minlength="3">
        <label for="NumID" class="form_label">Número de identificación</label>
        <span class="form_line"></span>
      </div>
    </div>

    <div class="form_container">
      <div class="form_group">
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form_input" placeholder=" " required min="100" max="999" minlength="3" maxlength="3">
        <label for="fechaNacimiento" style="color: #037410" class="form_label">Fecha de nacimiento</label>


        <span class="form_line"></span>
      </div>
    </div>
        </select>


        <div class="form_container">
          <div class="form_group">
              
              <p><label style="color: #037410"><b>Seleccione Genero</b> </label> </p>
              <select name="genero" class="form-select" required>
              <option disabled>Seleccione Genero</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>            
                      </select>
          </div>
        <!-- <input type="submit" name="registrar" class="form_submit" value="Registrar"> -->
      </div>



    <div class="form_container">
      <div class="form_group">
        <input type="text" name="Residencia" id="Residencia" class="form_input" placeholder=" ">
        <label for="Residencia" class="form_label">Residencia</label>
        <span class="form_line"></span>
      </div>
    </div>


    <div class="form_container">
      <div class="form_group">
        <input type="text" name="correo" id="correo" class="form_input" placeholder=" ">
        <label for="correoUEPS" class="form_label">Correo electrónico</label>
        <span class="form_line"></span>
      </div>
    </div>




    <div class="form_container">
      <div class="form_group">
        <input type="password" name="contraseña" id="contraseña" class="form_input" placeholder=" " required minlength="3" maxlength="100">
        <label for="contraseña" class="form_label">Contraseña</label>
        <span class="form_line"></span>
      </div>
    </div>
    <div class="form_container">
      <div class="form_group">





















      </div>
      <input type="submit" name="registrar" class="form_submit" value="Registrar">
    </div>
  </form>


  <?php
  if (isset($_POST['registrar'])) {
    $nombre =   $_POST["nombre"];
    $NumID  =   $_POST["NumID"];
    $fechaNacimiento   =   $_POST["fechaNacimiento"];
    $Residencia = $_POST["Residencia"];
    $genero =  $_POST["genero"];


    $passwd   =   $_POST["contraseña"];
    $passwd1   = md5($passwd);
    $correo   =   $_POST["correo"];

    // Crear Usuario
      $insertarDatos = "INSERT INTO usuario (IDusu,IDtipousu ,nombre,fechaNacimiento,genero,residencia, contraseña,correo, numID) 
      VALUES (NULL, '2', '$nombre','$fechaNacimiento','$genero','$Residencia','$passwd1', '$correo','$NumID')";
      $ejecutarInsertar = mysqli_query($mysqli, $insertarDatos);

    
  }
  ?>


</body>

</html>