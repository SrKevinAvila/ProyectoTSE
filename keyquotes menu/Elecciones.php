<?php include './coneccion.php';?>
<html>
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
    <div class="jumbotron">

        <form action="manejadorAlumno.php?accion=save" method="post" id="alumno">
            <table class="table-bordered"><p align="center">
                
                APERTURA DE ELECCIONES<BR>
             SELECCION LO QUE A CONTINUACION SE SOLICITA: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    
            </div>
            <div class="col-xs-2">
                <input type="checkbox" value="Presidente" name="countries[]" /><label>Presidente.</label><br><br>
                <input type="checkbox" value="Alcalde" name="countries[]" /><label>Alcalde.</label><br><br>
                <input type="checkbox" value="Diputados" name="countries[]" /><label>Diputados.</label><br><br>
            </div>
            </div>
    <BR>
            <div class="row">
            <div class="col-xs-2">
                AÑO :    
            </div>
            <div class="col-xs-2">
                <input type="text" name="NOMBRE" class="required form-control">
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