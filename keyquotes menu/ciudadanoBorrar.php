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

<?php $conexion = new mysqli('localhost', 'root', '', 'tribunal');?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <TITLE>Formulario de Registro de Votante</title>
        <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
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
    <?php 

include './clases/coneccion.php';
include './clases/Ciudadano.php';
include './clases/CiudadanoControlador.php';

$sql = "DELETE FROM ciudadano WHERE id=".$_REQUEST['id'].";";
print "<div id='dialogo' title='Exito' style='display: none;'>";
print '<p>Mensaje: ';
print consultaA($con,$sql);
print '<span class="badge glyphicon glyphicon-ok"></span></p>';
print '<a href =\'manejadorCiudadano.php?accion=con\'>ver datos</a>';

print "</div>";

 ?>

 <script>
    $(document).ready(function(){
        $("#dialogo").dialog();
    });
</script>
    </body>
</html>