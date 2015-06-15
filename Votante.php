
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <TITLE>Formulario Votante</title>
        <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <link href="keypad/jquery.keypad.css" rel="stylesheet">
<script src="keypad/min.js"></script>
<script src="keypad/jquery.plugin.js"></script>
<script src="keypad/jquery.keypad.js"></script>
<script>
$(function () {
    $('#defaultKeypad').keypad();
    $('#inlineKeypad').keypad({onClose: function() {
        alert($(this).val());
    }});
});
</script>
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

        <form action="Vota.html" method="post" id="alumno">
            <table class="table-bordered"><p align="center">
              
                INICIO DE SESION VOTANTE<BR>
             INSERTE EL DATO QUE A CONTINUACION SE SOLICITA: <br><br>
            <div class="row">
            <div class="col-xs-2">  
                DUI:
            </div>
                <div class="col-xs-2">  
                    <input type="text" name="DUI" id="defaultKeypad" onchange="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" class="required form-control">
                </div>
                </div>
    <BR>
            <div class="row">
            <td colspan="2"> 
            <input type="submit" name="bot" value="Iniciar Votante" class="btn btn-primary">
            </div>
            </div>
        </TABLE>
        </form>
        </div>
    </body>
</html>