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
<?php include './coneccion.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <TITLE>Formulario de Partido</title>
        <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
    <div class="jumbotron">

        <form action="manejadorAlumno.php?accion=save" method="post" id="alumno" enctype="multipart/form-data">
            <table class="table-bordered"><p align="center">
               
                INSCRIPCION DE LA COALISION<BR>
             INSERTE LOS DATOS QUE A CONTINUACION SE SOLICITAN: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    NOMBRE DE LA COALISION:
            </div>
            <div class="col-xs-2">
                    <input type="text" name="APELLIDO" class="required form-control">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">
                    DEPARTAMENTO:
            </div>
            <div class="col-xs-2">
                    <input type="file" name="imagen" >
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">  
                MUNICIPIO:
            </div>
            <div class="col-xs-2">  
                <input type="text" name="DUI" class="required form-control">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">  
                REPRESENTANTE:
            </div>
                <div class="col-xs-2">  
                    <input type="text" name="DUI" class="required form-control">
                </div>
                </div>
    <BR>
            <div class="row">
            <td colspan="2"> 
            <input type="submit" name="bot" value="enviar" class="btn btn-prymary">
            </div>
            </div>

        </TABLE>

        </form>
        </div>
        <script type="text/javascript">
        $().ready(function(){
            $("#alumno").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim: 'slide'
                    }
                );
            }
        )
        </script>
    </body>
</html>