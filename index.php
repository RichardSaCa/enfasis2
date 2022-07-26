<?php

// PROGRAMA DE VISUALIZACI�N DEL VEH�CULO POR USUARIO VIAJERO
include "conexion.php";
$mysqli = new mysqli($host, $user, $pw, $db); // Aquí se hace la conexión a la base de datos.

                                                 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html>
   <head>
      <link rel="icon" href="Recursos/Img/Logo.png">
     <link rel="stylesheet"  href="Recursos/estilos/estilo.css">
      <link rel="stylesheet"  href="Recursos/estilos/style.css">
      <link rel="stylesheet"  href="Recursos/estilos/boton.css">
      <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Página Principal </title>
    </head>  

    <!-- ABANO FFF6DD
      azul "#1836b2"
      morado "#a066cb"
      celeste "#86c7ed" -->
    <body>

    <header class="header">
      <div class="container logo-nav-container">
        <h1 align=center >
          <a href="#" class="logo"><img src="Recursos/Img/iconoCB1.png"><br><b><font color="#95bb72"  </b></font></a>
        </h1>
        <nav class="navigation">
         


          <ul id="menu">
          <li><a href="IngresoSistema.php">Iniciar sesión</a></li>
          <li><a id=" navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Registrarse
                            </a>
            <ul>
              
              <li id="r1"><a class="dropdown-item" id="r11" href="RegistroUsuario.php">Usuario</a></li>
              <br>
              <li id="r2"><a class="dropdown-item" id="r22" href="RegistroEmpresa.php">Empresa Recicladora</a></li>
            </ul>  
          </li>
        </ul>


        </nav>
      </div>
    </header>

    <main class="main"> 
      <div class="container">
        <h1 align=center >
           <font color="#19874c">Código de colores para el reciclaje </font>
        </h1>
        
        <div id="kiko-slider">
  
            <ul class="slider">
              <li id="slide1">
                <img src="Recursos/Img/tres.JPEG"/>
              </li>
              <li id="slide2">
                <img src="Recursos/Img/dos.JPEG"/>
              </li>
              <li id="slide3">
                <img src="Recursos/Img/uno.JPEG"/>
              </li>
              <li id="slide4">
                <img src="Recursos/Img/cuatro.JPEG"/>
              </li>
              <li id="slide5">
                <img src="Recursos/Img/cinco.JPEG"/>
              </li>
            </ul>
            
            <ul class="menu">
              <li>
                <a href="#slide1">1</a>
              </li>
              <li>
                <a href="#slide2">2</a>
              </li>
              <li>
                <a href="#slide3">3</a>
              </li>
              <li>
                <a href="#slide4">4</a>
              </li>
              <li>
                <a href="#slide5">5</a>
              </li>
            </ul>
            
          </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p></p>
      </div>
</footer>
    
      
  
    </body>
</html>