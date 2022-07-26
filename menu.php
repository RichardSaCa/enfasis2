<?php
  include "conexion.php";
  include "iniciar_sesionUsuario.php";
  //include "iniciar_sesionEPS.php";
  $mysqli = new mysqli($host, $user, $pw, $db); // Aquí se hace la conexión a la base de datos.
                                                 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html>
   <head>
       <link rel="icon" href="Recursos/Img/iconoCB1.png">
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 

      <link rel="icon" href="Recursos/Img/iconoCB1.png">
     
      <link rel="stylesheet"  href="Recursos/estilos/estilo.css">
      <link rel="stylesheet"  href="Recursos/estilos/style.css">
      <link rel="stylesheet"  href="Recursos/estilos/style_menu.css">
      <link rel="stylesheet"  href="Recursos/estilos/slider.css">
      <link rel="stylesheet"  href="Recursos2/asistenciaMedica1.css">
         
      <title> Menu Paciente </title>
      <link rel="icon" href="Recursos/Img/iconoCB1.png">
     
    </head>  

    <!-- ABANO FFF6DD
      azul "#1836b2"
      morado "#a066cb"
      celeste "#86c7ed" -->
    <body>


    <header class="header">
    <div class="container logo-nav-container">
      <h1 align=center>
        <a href="#" class="logo"><img src="Recursos/Img/iconoCB1.png"><br><b>
          </b></font></a>
      </h1>
      

      <?php

      $id_usuario=$_SESSION["id_usuario"];
      $id_u_enc =  md5 ($id_usuario);
      ?>
       
       <!-- <font FACE="arial" weight="bold" SIZE=2  color="#033474"> <b><u><?php  echo "IDusuario</u>:   ".$_SESSION["id_usuario"];?> </b></font><br> -->

          <nav class="navigation">
            <ul>
              <li><a href="ModificarPaciente.php?IDusu=<?php echo $id_u_enc ?>">Perfil</a></li> 
              <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
          </nav>
        </div>
      </header>

    <br>
    <table border="0" width=80% high=100% cellpadding="10" style="margin: 0 auto;">
        <tr>  
            <td align = center ><a class="btnMenu" href="menu.php">Inicio</a></td>
            <td align = center ><a class="btnMenu" href="buscarRutas.php">Buscar Rutas</button></a></td>
            <td align = center ><a class="btnMenu" href="2.php">Venta de productos</button></td>
            <td align = center ><a class="btnMenu" href="3.php">Noticias de Reciclaje</button></td>         
        </tr>
    </table>
    <br>
    
    <table> 
    <?php 
      if (isset($_GET["mensaje"]))
      {
        $mensaje = $_GET["mensaje"];
        if ($_GET["mensaje"]!=""){?>
  		     <tr>
             <td> </td>
             <td height="30%" align="left">
                  <table width=100% border=0>
                   <tr>
                    <?php 
                       if ($mensaje == 1)
                         echo "<td bgcolor=#e6d6f3 class=_espacio_celdas_p 					
                          style=color: #fff; font-weight: bold >Usuario actualizado correctamente.";
                       if ($mensaje == 2)
                         echo "<td bgcolor=#a066cb class=_espacio_celdas_p 					
                          style=color: #fff; font-weight: bold >Usuario no fue actualizado correctamente. ";
  
                      ?>
                    </td>
                   </tr>
                  </table>
              </td>
              <td> </td>
    		     </tr>
           <?php
        }
      }  
    ?>
    </table>

   
    <h3>Bienvenido usuario </h3>
    <h3>NOTICIAS Y PUBLICACIONES</h3>

    <div class="containerprueba">
  
      <ul class="slider">
        <li id="slide1">
          <img src="Recursos/Img/one.JPEG">
        </li>
        <li id="slide2">
          <img src="Recursos/Img/two.JPEG">
        </li>
        <li id="slide3">
          <img src="Recursos/Img/three.JPEG">
        </li>
        <li id="slide4">
          <img src="Recursos/Img/four.JPEG">
        </li>
        <li id="slide5">
          <img src="Recursos/Img/five.JPEG">
        </li>
      </ul>
      
      <ul class="menu">
        <li>
          <a href="#slide1"></a>
        </li>
        <li>
          <a href="#slide2"></a>
        </li>
         <li>
          <a href="#slide3"></a>
        </li>
        <li>
          <a href="#slide4"></a>
        </li>
        <li>
          <a href="#slide5"></a>
        </li>
      </ul>
      
    </div>

    <br> <br> 
    <h4>Colombia solo recicla el 16,5 % de las más de 12 millones de toneladas de residuos sólidos</h4>
    <h5>que produce anualmente, por lo que la entrada en vigencia el ... </h5>
    <button type="button" class="btn btn-dark">Leer mas</button>

</body>
</html>
