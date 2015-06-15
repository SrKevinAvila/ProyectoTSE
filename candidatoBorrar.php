<html>
<link rel="stylesheet" type="text/css" href="personal.css">
<script src="estilo-menu/jquery.js"></script>
<script src="estilo-menu/bootstrap.min.js"></script>
        <TITLE>Eliminar Candidato</title>
<meta charset="utf-8">
 <link rel="shortcut icon" href="del.ico">

  <?php
        // SE ABREN LAS SESIONES
        session_start();


        // VALIDAMOS QUE SI LA VARIABLE "ok_user" Y "id_usuario" NO EXISTEN......
        if($_SESSION["ok_user"]==false && $_SESSION["id_usuario"]<=0)
        {

            // .... EJECUTE ESTA ACCION....
            header("location:index.php");
        }
?>


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
                <li><a href="Partido.php"> Registrar Partidos </a></li>
                <li><a href="Candidato.php"> Registrar Candidatos </a></li>
                <li><a href="RegistroVotante.php"> Registrar Ciudadanos </a></li>
                <li><a href="Elecciones.php"> Aperturar Elecciones </a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/Original/manejadorPartido.php?accion=con"> Partidos Registrados </a></li>
                <li><a href="http://localhost/Original/manejadorCandidato.php?accion=con"> Candidatos Regristrados </a></li>
                <li><a href="http://localhost/Original/manejadorCiudadano.php?accion=con"> Ciudadanos Registrados </a></li>
              </ul>
            </li>
         
          </ul>

          <?php
          echo("<ul class='nav navbar-nav navbar-right'><li><a href='#'><img src='personal.ico' width='15' height='20'>BIENVENIDO ".$_SESSION["nombre_usuario"]."</a></li><li><a href='cerrar_sesion.php'><img src='cerrar.ico' width='15' height='20'>CERRAR SESIÓN</a></li></ul>");

?>
 </div>
      </div>
    </div>
    <br><br><br><br><br><br>
    </body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" src="js/jquery.js"></script>
    </head>
<body>
<?php 

include './clases/coneccion.php';
include './clases/Candidato.php';
include './clases/CandidatoControlador.php';

$sql = "DELETE FROM candidato WHERE id=".$_REQUEST['id'].";";
print "<div id='dialogo' title='Exito' style='display: none;'>";
print '<p>Mensaje: ';
print consultaA($con,$sql);
print '<span class="badge glyphicon glyphicon-ok"></span></p>';
print '<a href =\'manejadorCandidato.php?accion=con\'>Ver datos </a>';

print "</div>";

 ?>

 <script>
    $(document).ready(function(){
        $("#dialogo").dialog();
    });
</script>
</body>
</html>