<!DOCTYPE html>
<html lang="en">
  <head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv ="Pragma" content ="no-cache" />
    <script type="text/javascript" >
        {        if (history.forward(1))
            location.replace(history.forward(1))
    }
    </script>
     <link rel="shortcut icon" href="home.ico">
     <script type="text/javascript">
     document.oncontextmenu=new Function("return false"); /*este codigo ayuda a que no puedan dar click derecho*/
  </script>
    <title>Men&uacute; Principal</title>

    
<link rel="stylesheet" type="text/css" href="estilo-menu/bootstrap.css">
<link rel="stylesheet" type="text/css" href="personal.css">
<script src="estilo-menu/jquery.js"></script>
<script src="estilo-menu/bootstrap.min.js"></script>
<link rel="stylesheet" href="jquery.mobile-1.0a4.1.min.css"/>
<script type="text/javascript" src="jquery1.5.min.js"> </script>
<script type="text/javascript" src="jquery.mobile-1.0a4.1.min.js"> </script>


  <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Realizar Registros <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Partido.php" data-transition="fade"> Registrar Partidos </a></li>
                <li><a href="Candidato.php"> Registrar Candidatos </a></li>
                <li><a href="RegistroVotante.php"> Registrar Ciudadanos </a></li>
                <li><a href="Elecciones.php"> Aperturar Elecciones </a></li>
                <li><a href="vota.html">  </a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/Original/manejadorPartido.php?accion=con"> Partidos Registrados </a></li>
                <li><a href="http://localhost/Original/manejadorCandidato.php?accion=con"> Candidatos Regristrados </a></li>
                <li><a href="http://localhost/Original/manejadorCiudadano.php?accion=con"> Ciudadanos Registrados </a></li>
                <br>
                <center><li> -Reporte de Votos- </a></li></center><br>
                <li><a href="reporte.php"> Reporte General </a></li>
                <li><a href="reporteAlcalde.php"> Reporte de Votos Alcalde </a></li>
                <li><a href="reporteDiputado.php"> Reporte de Votos Diputados </a></li>
                <li><a href="reportePresidente.php"> Reporte de Votos Presidenciales </a></li>
                <li><a href="Votante.php"> Simulacion de Voto </a></li>

              </ul>
            </li>
         
          </ul>

          <?php
        // SE ABREN LAS SESIONES
      	session_start();


      	// VALIDAMOS QUE SI LA VARIABLE "ok_user" Y "id_usuario" NO EXISTEN......
      	if($_SESSION["ok_user"]==false && $_SESSION["id_usuario"]<=0)
      	{

      		// .... EJECUTE ESTA ACCION....
      		header("location:index.php");
      	}

      	

      	echo("<ul class='nav navbar-nav navbar-right'><li><a href='#'><img src='personal.ico' width='20' height='20'>BIENVENIDO ".$_SESSION["nombre_usuario"]."</a></li><li><a href='cerrar_sesion.php'><img src='cerrar.ico' width='20' height='20'>CERRAR SESIÓN</a></li></ul>");
      	

      	
      	?>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="container">

      
      <br>
      <center><div class="jumbotron">
      <img src="logo.png" width="550" height="200" align="center" hspace="30" vspace="30" ></center>
      <p>
      	

      </p>
          
        </p>
      </div>

    </div> 
  </body>
 <a href="Ayuda.pdf">¿Nesecitas Ayuda? </a>


  <center>
  <footer>
  Sistema de Registros y Control de Candidatos de TSE<br>
<p>
  Para mayor informacion contactenos.....
</p>  
</footer>
</center>
</html>
