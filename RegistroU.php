<?php
// PROGRAMA DE VISUALIZACI�N DEL VEH�CULO POR USUARIO VIAJERO
include "conexion.php";
$mysqli = new mysqli($host, $user, $pw, $db); // Aquí se hace la conexión a la base de datos.
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <link rel="icon" href="img/Logo.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Recursos/Img/Logo.png">
  <link rel="stylesheet" href="Recursos/estilos/EstilosRegistro.css">
  <link rel="stylesheet" href="Recursos/estilos/estilo.css">
  <link rel="stylesheet" href="Recursos/estilo/style.css">

  <title> Registro de Usuarios </title>
</head>

<!-- ABANO FFF6DD
      azul "#1836b2"
      morado "#a066cb"
      celeste "#86c7ed" -->

<body>

  <header class="header">
    <div class="container logo-nav-container">
      <h1 align=center>
        <a href="#" class="logo"><img src="Recursos/Img/Logo.png"><br><b>
            <font color="#1836b2" size=8px>RENE WEB
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
    <h2 class="form_title"> Registrar Usuario EPS</h2>
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
        <label for="fechaNacimiento" style="color: #1836b2" class="form_label">Fecha de nacimiento</label>


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

        <p><label style="color: #1836b2"><b>Seleccione la EPS</b> </label> </p>
        <select name="EPS_UEPS" class="form-select" required>
          <option disabled>Seleccione EPS</option>

          <?php
          $sql10 = "SELECT * FROM eps;";
          $result10 = $mysqli->query($sql10);
          while ($row10 = $result10->fetch_array(MYSQLI_NUM)) {
            $nombreSistemaEPS = $row10[1];
            $id_SistemaEPS = $row10[0];
          ?>
            <option value=<?php echo $id_SistemaEPS; ?>><?php echo $nombreSistemaEPS; ?></option>
          <?php
          }
          ?>

        </select>
      </div>
      <input type="submit" name="registrar" class="form_submit" value="Registrar">
    </div>
  </form>


  <?php
  if (isset($_POST['registrar'])) {
    $nombre =   $_POST["nombre"];
    $NumID  =   $_POST["NumID"];
    $fechaNacimiento   =   $_POST["fechaNacimiento"];
    $EPS   =   $_POST["EPS_UEPS"];

    $passwd   =   $_POST["contraseña"];
    $passwd1   = md5($passwd);
    $correo   =   $_POST["correo"];
    // $sql11 = "SELECT nombreSistemaEPS  from eps where id_SistemaEPS=$EPS";
    // $result11 = $mysqli->query($sql11);
    // $TipoUsu   =   $_POST["TipoUsu"];


    // $sqlL = "SELECT COUNT(id_UEPS),NumID FROM usuarioeps where NumID='$NumID'";
    // $result2 = $mysqli->query($sqlL);
    // $row2 = $result2->fetch_array(MYSQLI_NUM);

    // Crear Usuario
    
      $insertarDatos = "INSERT INTO usuario (IDtipousu ,nombre,fechaNacimiento,EPS, contraseña,correo, id_EPS,numID) 
      VALUES ('1', '$nombre','$fechaNacimiento','$nombreSistemaEPS',  '$passwd1', '$correo', '$id_SistemaEPS', '$NumID' )";
      $ejecutarInsertar = mysqli_query($mysqli, $insertarDatos);
      // if (!$ejecutarInsertar) {
      //   echo "Error en la linea de SQL";
      //   header('Location: UASGestionUsuarios_UAS.php?mensaje=4');
      // } else {
      //   header('Location: UASGestionUsuarios_UAS.php?mensaje=3');
      // }
      // } else {
      // header('Location: UASGestionUsuarios_UAS.php?mensaje=5');
    
  }
  ?>

</body>

</html>