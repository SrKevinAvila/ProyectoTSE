<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>efecto scroll en menu</title>

    <link rel="stylesheet" href="style/index_style.css">

    <script src="jquery.min.js"></script>
    <script src='js/script.js'></script>
</head>
<body>
    <header>
        <?php
            include("menu.php");
        ?>

        <br><br><br>
            <?php include './clases/coneccion.php';?>
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

        <form action="manejadorPartido.php?accion=save" method="post" id="alumno" enctype="multipart/form-data">
            <table class="table-bordered"><p align="center">
               
                INSCRIPCION DE PARTIDOS<BR>
             INSERTE LOS DATOS QUE A CONTINUACION SE SOLICITAN: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    NOMBRE DEL PARTIDO:
            </div>
            <div class="col-xs-2">
                    <input type="text" name="nombre" placeholder="FMLN" class="required form-control">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">
                    BANDERA DEL PARTIDO:
            </div>
            <div class="col-xs-2">
                    <input type="file" name="imagen" >
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">  
                DUI DEL PRESIDENTE DEL PARTIDO:
            </div>
            <div class="col-xs-2">  
                <input type="text" name="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" placeholder="00000000-0" class="required form-control">
            </div>
            </div>
    <br>        
            <div class="row">
            <div class="col-xs-2">  
                NOMBRE DEL PRESIDENTE:
            </div>
                <div class="col-xs-2">  
                    <input type="text" name="presidente" class="required form-control">
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


          
        </p>
      </center>

    <section id='banner'>
        
    </section>

    <section id='body'>
        
    </section>

        </script>
    </body>
</html>