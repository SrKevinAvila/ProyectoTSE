<html>
<link rel="stylesheet" type="text/css" href="personal.css">
<script src="estilo-menu/jquery.js"></script>
<meta charset="utf-8">
<script src="estilo-menu/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="star.ico">

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
                <li><a href="Menu-Principal.php"> Menu Principal </a></li>
                <li><a href="Partido.php"> Registrar Partidos </a></li>
                <li><a href="Candidato.php"> Registrar Candidatos </a></li>
                <li><a href="RegistroVotante.php"> Registrar Ciudadanos </a></li>   
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
   
            
          </ul>
        </div>
      </div>
    </div>
    <br><br><br><br>
<?php include './clases/coneccion.php';?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <TITLE>Formulario de Elecciones</title>
        <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
    <?php
if (isset($_POST['enviar'])) {
    if (is_array($_POST['countries'])) {
        $selected = '';
        $num_countries = count($_POST['countries']);
        $current = 0;
        foreach ($_POST['countries'] as $key => $value) {
            if ($current != $num_countries-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }
    }
    else {
        $selected = 'Debes seleccionar un país';
    }

    echo '<div>Has seleccionado: '.$selected.'</div>';
}    
?>
    <div class="jumbotron">

        <form action="Menu-Principal.php" method="post" id="alumno">
            <table class="table-bordered"><p align="center">
                <br>
                APERTURA DE ELECCIONES<BR>
             SELECCION LO QUE A CONTINUACION SE SOLICITA: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    
            </div>
            <div class="col-xs-2">
                <input type="checkbox" value="P" name="presidente" /><label>Presidente.</label><br><br>
                <input type="checkbox" value="A" name="alcalde" /><label>Alcalde.</label><br><br>
                <input type="checkbox" value="D" name="diputado" /><label>Diputados.</label><br><br>
            </div>
            </div>
    <BR>
            <div class="row">
            <div class="col-xs-2">
                AÑO :    
            </div>
            <div class="col-xs-2">
                <input type="text" name="anio" class="required form-control">
            </div>
            </div>
    <BR>        
            <div class="row">
            <td colspan="2"> 
            <input type="submit" name="bot" value="Apertura" class="btn btn-prymary">
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