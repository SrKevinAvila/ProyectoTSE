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
                    <input type="text" name="nombre" placeholder="Sanchez Ramos" class="required form-control">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">
                    NOMBRE DEL CANDIDATO:
            </div>
            <div class="col-xs-2">
                    <input type="text" name="apellido" placeholder="David Enrique" class="required form-control">
            </div>
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">  
                DUI DEL CANDIDATO:
            </div>
                <div class="col-xs-2">  
                    <input type="text" name="dui" id="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" placeholder="00000000-0" class="required form-control">
                </div>
            </div>
    <br>
            <div class="row">
            <div class="col-xs-2">
                TIPO DE CANDIDATURA:
                </div>
                <div class="col-xs-2">
                <div class="input-group">
                   <input type="radio" name="independiente" id="presidenciales" value="I"  /> Independientes<br>
                   </div>
            </div>
                <div class="col-xs-2">
                <div class="input-group">  
            <input type="radio" name="independiente" id="alcaldes" value="C" onclick="if(this.checked==true){document.getElementById('coalision').style.display='';}" /> Coalision 
            <select id="coalision" name='coalision' class="required form-control" style="display:none">
                  <option value="">[seleccionar]</option>
                  <option value="FMLN">FMLN</option>
                  <option value="ARENA">ARENA</option>
                  <option value="GANA">GANA</option>
                </select><br><br>
            </div>
            </div>
            <div class="col-xs-2">
            <div class="input-group">  
            <input type="radio" name="independiente" id="diputados" value="P" onclick="if(this.checked==true){document.getElementById('partidario').style.display='';}"/> Partidario
            <select id="partidario" name='partidario' class="required form-control" style="display:none">
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
                <select name='cargos' class="required form-control">
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
            DEPARTAMANTO:
            </div>
            <div class="col-xs-2">
                <select name="depto" id="depto" class="required form-control">
                <option value="">[seleccionar]</option>
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
                  <option value="">[seleccionar]</option>
              </select>
                  
              </form>
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