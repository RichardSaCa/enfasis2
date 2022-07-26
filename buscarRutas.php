<?php
// hello wosdldskl


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

  <link rel="stylesheet" href="Recursos/estilos/estilo.css">
  <link rel="stylesheet" href="Recursos/estilos/style.css">
  <link rel="stylesheet" href="Recursos/estilos/buscarRutas.css">
  <link rel="stylesheet" href="Recursos/estilos/style_menu.css">
  <link rel="stylesheet" href="Recursos/estilos/slider.css">
  <link rel="stylesheet" href="Recursos2/asistenciaMedica1.css">

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

      $id_usuario = $_SESSION["id_usuario"];
      $id_u_enc =  md5($id_usuario);
      ?>

      <!-- <font FACE="arial" weight="bold" SIZE=2  color="#033474"> <b><u><?php echo "IDusuario</u>:   " . $_SESSION["id_usuario"]; ?> </b></font><br> -->

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
      <td align=center><a class="btnMenu" href="menu.php">Inicio</a></td>
      <td align=center><a class="btnMenu" href="buscarRutas.php">Buscar Rutas</button></a></td>
      <td align=center><a class="btnMenu" href="2.php">Venta de productos</button></td>
      <td align=center><a class="btnMenu" href="3.php">Noticias de Reciclaje</button></td>
    </tr>
  </table>
  <br>

  <table>
    <?php
    if (isset($_GET["mensaje"])) {
      $mensaje = $_GET["mensaje"];
      if ($_GET["mensaje"] != "") { ?>
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


<h3 class="sub">Buscar Rutas </h3>
<h3 class="sub1">Arrastre el marcador hasta la direccion de su casa, luego presione guardar:</h3>

<style>
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  #map {
    width: 80%;
    height: 100%;
    margin: 0 auto;
    /*position: absolute;*/
    border: 40px solid #66cba4;
  }

  #coords {
    width: 500px;
  }
</style>

<div id="map"></div>
<form class="form" method="POST" action="save_buscarRuta.php">
  <input style="margin: auto; text-align:center; " type="text" id="coords" value="coordenada" name="coordena" />
  <input class="button" type="submit" value="Guardar" />
</form>
<script>
  var marker; //variable del marcador
  var coords = {}; //coordenadas obtenidas con la geolocalizaci�n

  //Funcion principal
  initMap = function() {

    //usamos la API para geolocalizar el usuario

    // Cuando no funcione geolocalizaci�n, se comentan las siguientes lineas y se asigna coordenadas fijas
    // Si funciona la geolocalizaci�n, se pueden descomentar las l�neas y utilizarla, sin asignar coordenadas fijas
    //        navigator.geolocation.getCurrentPosition(
    //          function (position){
    //            coords =  {
    //              lng: position.coords.longitude,
    //              lat: position.coords.latitude
    //            };
    //            setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa

    coords = {
      lat: 2.4400000,
      lng: -76.6100000
    };
    setMapa(coords);
    //        },function(error){console.log(error);});

  }



  function setMapa(coords) {
    //Se crea una nueva instancia del objeto mapa
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(coords.lat, coords.lng),

    });

    //Creamos el marcador en el mapa con sus propiedades
    //para nuestro obetivo tenemos que poner el atributo draggable en true
    //position pondremos las mismas coordenas que obtuvimos en la geolocalizaci�n
    marker = new google.maps.Marker({
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: new google.maps.LatLng(coords.lat, coords.lng),

    });
    //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
    //cuando el usuario a soltado el marcador
    marker.addListener('click', toggleBounce);

    marker.addListener('dragend', function(event) {
      //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
      document.getElementById("coords").value = this.getPosition().lat() + "," + this.getPosition().lng();
    });
  }

  //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }

  // Carga de la libreria de google maps 
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC8s0x9Y9GSSi-AqFcBwzLHdHWGidkUl8&callback&callback&callback=initMap"></script> <!-- Se deben reemplazar las XXXX por la API Key de Google MAPS -->

<?php
if (isset($_GET["mensaje"])) {
  $mensaje = $_GET["mensaje"];
  if ($_GET["mensaje"] != "") { ?>
    <table>
      <tr>
        <td> </td>
        <td height="20%" align="left">
          <table width=60% border=1>
            <tr>
              <?php
              if ($mensaje == 3){
                // echo "<td bgcolor=#DDFFDD class=_espacio_celdas_p 					
                //     style=color: #000000; font-weight: bold >Ubicacion creada correctamente.";
              ?>
              <script>
                alert("Dirección guardada correctamente.")
              </script>
              <?php
              }
            if ($mensaje == 4){
              // echo "<td bgcolor=#FFDDDD class=_espacio_celdas_p 					
              //         style=color: #000000; font-weight: bold >Inconveniente al crear la ubicacion.";
              ?>
              <script>
                alert("Inconveniente al crear la dirección.")
              </script>
          <?php
        // echo "</td></tr>
        //         </table>
        //     </td>
        //    </tr>
        // <table>";
      }
    }
  }
          ?>

          <!-- <button type="button" class="btn btn-dark">Leer mas</button> -->

</body>

</html>