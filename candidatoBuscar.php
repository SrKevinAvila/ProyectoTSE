<html>
<link rel="stylesheet" type="text/css" href="personal.css">
<script src="estilo-menu/jquery.js"></script>
<meta charset="utf-8">
<script src="estilo-menu/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="edit.ico">
<TITLE>Modificar Candidato</title>

<script>

    function sololetras(e){

        key=e.keyCode || e.which;

        teclado=String.fromCharCode(key).toLowerCase();
        letras=" aábcdeéfghiíjklmnñoópqrstuúvwxyz";
        especiales="8-37-38-46-164";

        teclado_especial=false;

        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;break;
            }
        }

        if(letras.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

    }

    </script>

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
                <li><a href="Partido.php" > Registrar Partidos </a></li>
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
                <li><a href="http://localhost/Original/manejadorCiudadano.php?accion=con"> Ciudadanos Registrados </a></li><br>
                <center><li> -Reporte de Votos- </a></li></center><br>
                <li><a href="reporte.php"> Reporte General </a></li>
                <li><a href="reporteAlcalde.php"> Reporte de Votos Alcalde </a></li>
                <li><a href="reporteDiputado.php"> Reporte de Votos Diputados </a></li>
                <li><a href="reportePresidente.php"> Reporte de Votos Presidenciales </a></li>
              </ul>
            </li>
         
          </ul>

          <?php
          echo("<ul class='nav navbar-nav navbar-right'><li><a href='#'><img src='personal.ico' width='15' height='20'>BIENVENIDO ".$_SESSION["nombre_usuario"]."</a></li><li><a href='cerrar_sesion.php'><img src='cerrar.ico' width='15' height='20'>CERRAR SESIÓN</a></li></ul>");

?>
 </div>
      </div>
    </div>
    <br><br><br><br>
<?php include './clases/coneccion.php';?>
<?php $conexion = new mysqli('localhost', 'root', '', 'tribunal');?>
<?php $sql = "SELECT * FROM candidato WHERE id = '".$_REQUEST['id']."';";
    $datos = consultaD($con,$sql,3);
  ?>
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
        <script type="text/javascript">
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
    val = d.value
    largo = val.length
    val = val.split(sep)
    val2 = ''
    for(r=0;r<val.length;r++){
        val2 += val[r]  
    }
    if(nums){
        for(z=0;z<val2.length;z++){
            if(isNaN(val2.charAt(z))){
                letra = new RegExp(val2.charAt(z),"g")
                val2 = val2.replace(letra,"")
            }
        }
    }
    val = ''
    val3 = new Array()
    for(s=0; s<pat.length; s++){
        val3[s] = val2.substring(0,pat[s])
        val2 = val2.substr(pat[s])
    }
    for(q=0;q<val3.length; q++){
        if(q ==0){
            val = val3[q]
        }
        else{
            if(val3[q] != ""){
                val += sep + val3[q]
                }
        }
    }
    d.value = val
    d.valant = val
    }
}
</script>
    </head>
    <body>
    <div class="jumbotron">

        <form action="manejadorCandidato.php?accion=save" method="post" id="candidato">
            <table class="table-bordered"><p align="center">
                <br>INSCRIPCION DE CANDIDATOS<br>
             INSERTE LOS DATOS QUE A CONTINUACION SE SOLICITAN: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    APELLIDOS DEL CANDIDATO:
            </div>
            <div class="col-xs-2">
                    <input type="text" name="apellido" name"letras" placeholder="Sanchez Ramos" value='<?php print $datos[0][1] ?>' class="required form-control" onkeypress="return sololetras(event)" onpaste="return false">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">
                    NOMBRE DEL CANDIDATO:
            </div>
            <div class="col-xs-2">
                    <input type="text" name="nombre" name"letras" placeholder="David Enrique" value='<?php print $datos[0][2] ?>' class="required form-control" onkeypress="return sololetras(event)" onpaste="return false">
            </div>
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">  
                DUI DEL CANDIDATO:
            </div>
                <div class="col-xs-2">  
                <input type="hidden" name="dui" onkeypress="return solonumeros(event)" onpaste="return false" value='<?php print $datos[0][2] ?>'>
                    <input type="text" name="dui" id="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" value='<?php print $datos[0][1] ?>' placeholder="00000000-0" class="required form-control">
                </div>
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">
                TIPO DE CANDIDATURA:
                </div>
                <div class="col-xs-2">
                <div class="input-group">
                   <input type="radio" name="independiente" id="presidenciales" value="I"/> Independientes<br>
            </div>
            </div>
            <div class="col-xs-2">
            <div class="input-group">  
            <input type="radio" name="partidario" id="diputados" value="P"/> Partidario
            <select name='partidario' class="required form-control">
                <option value="">[seleccionar]</option>
                  <option value="FMLN">FMLN</option>
                  <option value="ARENA">ARENA</option>
                  <option value="GANA">GANA</option>
                </select>
            </div>
            </div>
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">
            CARGO DEL CANDIDATO:
                </div>
            <div class="col-xs-2">
                <select name='cargos' value='<?php print $datos[0][4] ?>' class="required form-control">
                    <option value="">[seleccionar]</option>
                    <option value="ALCALDE">ALCALDE</option>
                    <option value="DIPUTADO">DIPUTADO</option>
                    <option value="PRESIDENTE">PRESIDENTE</option>
                </select>
            </div>      
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">
            DEPARTAMENTO:
            </div>
            <div class="col-xs-2">
                <select name="depto" id="depto" class="required form-control">
               <option value="">[seleccionar]</option>
                      <option value='<?php print $datos[0][5] ?>'> </option>
              <?php 
              $sql2 ="SELECT departamento FROM candidato WHERE id = '".$datos[0][6]."'";
              $da = consultaD($con,$sql2,3);
              //print $da[0][0];
               ?>
      
                <?php
                $result = $conexion->query("SELECT * FROM departamentos");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                    }
                }
                ?>

            </select>
            </div>      
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">
            MUNICIPIO:
                </div>
            <div class="col-xs-2">
               <select name="municipio" id="municipio" class="required form-control">
                  <option value='<?php print $datos[0][6] ?>'>  </option>
                  
          
             <?php 
              $sql2 ="SELECT municipio FROM candidato WHERE nombre = '".$datos[0][7]."'";
              $da = consultaD($con,$sql2,3);
              //print $da[0][0];
               ?>
             
            
                  
              <script language="javascript">
                  $(document).ready(function(){
                      $("#depto").change(function () {
                          $("#depto option:selected").each(function () {
                              id_depto = $(this).val();
                              $.post("municipios.php", { id_depto: id_depto }, function(data){
                                  $("#municipio").html(data);
                              });
                          });
                      })
                  });
              </script>
            </div>      
            </div>
    <br>
            <div class="row">
            <td colspan="2"> 
            <input type="submit" name="bot" value="ENVIAR" class="btn btn-prymary">
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