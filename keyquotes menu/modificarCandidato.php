<html>
<link rel="stylesheet" type="text/css" href="personal.css">
<script src="estilo-menu/jquery.js"></script>
<script src="estilo-menu/bootstrap.min.js"></script>


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
                <li><a href="Partido.html"> Registrar Partidos </a></li>
                <li><a href="Candidato.html"> Registrar Candidatos </a></li>
                <li><a href="RegistroVotante.html"> Registrar Ciudadanos </a></li>
              
              </ul>
            </li>
          <ul class="nav navbar-nav navbar-right">
            <li class="btn btn-lg btn-primary"  href="../../components/#navbar" role="button">Menu</a></li>
            <li class="btn btn-lg btn-primary" href="Menu-Principal.html" role="button">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </div>
<?php include './clases/coneccion.php';?>
<?php $conexion = new mysqli('localhost', 'root', '', 'tribunal');?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <TITLE>Formulario de Candidato</title>
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

$alumnoA = new CandidatoControlador();

//$accion = $_REQUEST['accion']; 
//switch ($accion) {
    //case 'save':
    if(isset($_REQUEST['bot'])){
                $alumnoA->setId('NULL');
                $alumnoA->setnombre($_REQUEST['nombre']);
                $alumnoA->setapellido($_REQUEST['apellido']);
                $alumnoA->setdui($_REQUEST['dui']);
                $alumnoA->setindependiente($_REQUEST['independiente']);
                $alumnoA->setpartidario($_REQUEST['partidario']);
                $alumnoA->setcargo($_REQUEST['cargos']);
                $alumnoA->setdepto($_REQUEST['depto']);
                $alumnoA->setmunicipio($_REQUEST['municipio']);
                $datosObj=array($alumnoA->getId(),
                                $alumnoA->getnombre(),
                                $alumnoA->getapellido(),
                                $alumnoA->getdui(),
                                $alumnoA->getindependiente(),
                                $alumnoA->getpartidario(),
                                $alumnoA->getcargo(),
                                $alumnoA->getdepto(),
                                $alumnoA->getmunicipio());

            print "<div id='dialogo' title='Exito' style='display:none;'>";
            print "<p>Mensaje:";
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';

            print "</div>";
        }
?>
<script charset="utf-8">
    $(document).ready(function(){
        $("#dialogo").dialog();
    });
</script>
    </body>
</html>