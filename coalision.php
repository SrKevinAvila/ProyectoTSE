<!DOCTYPE HTML>
<?php include './clases/coneccion.php';?>
<?php $conexion = new mysqli('localhost', 'root', '', 'tribunal');?>
<head>
    <title>Formulario Coalicion</title>
    <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" src="js/jquery.js"></script>
    <script src="./jquery/jquery.min.js"></script>
    <style>
   /* body{width:;margin:0 auto;overflow-x:hiden;}
    select{width:180px;margin:0 0 50px 0;border:1px solid #ccc;padding:10px;border-radius:10px 0 0 10px;}
    .clear{clear:both;text-align:center}
    div{float:left;width:200px;text-align:center}
    input {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
    .izq{border-radius:10px 0 0 10px;}
    .der{border-radius:0 10px 10px 0;}*/
    </style>
</head>
<body>
<div class="container">
  <form action="manejadorCoalicion.php?accion=save"  class="form-horizontal"method="post" id="formulario">
      
            <center><br>INSCRIPCION DE COALICION<br>
             INSERTE LOS DATOS QUE A CONTINUACION SE SOLICITAN: <br><br>
            <div class="row">
            <div class="col-xs-2">
                    <label >NOMBRE DE LA COALICION:</label>
            </div>
            <div class="col-xs-2">
                    <input type="text" name="nombrecoalicion" placeholder="Unidad" class="form-control" required>
            </div>
          
            <div class="col-xs-2">
              <label>TIPO DE COALISION:</label>
            </div>
            <div class="col-xs-2">
                <select name='tipo' required class="form-control" onchange="if (this.options[this.selectedIndex].value=='NACIONAL'){document.getElementById('depto').style.display='none';document.getElementById('municipio').style.display='none'} if (this.options[this.selectedIndex].value='DEPARTAMENTAL'){document.getElementById('municipio').style.display='none'} if (this.options[this.selectIndex].value='MUNICIPAL'" >
                    <option value="">[seleccionar]</option>
                    <option value="NACIONAL">NACIONAL</option>
                    <option value="DEPARTAMENTAL">DEPARTAMENTAL</option>
                    <option value="MUNICIPAL">MUNICIPAL</option>
                </select>
            </div>      
            </div>   
            <div class="row">
            <div class="col-xs-2">
               <label>DEPARTAMANTO:</label> 
            </div>
            <div class="col-xs-2">
                <select name="depto" id="depto" class="form-control" required >
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

            
            <div class="col-xs-2">
                <label>MUNICIPIO:</label>
            </div>
            <div class="col-xs-2">
                    <select name="municipio" id="municipio" class="form-control" required>
                       <option value="">[seleccionar]</option>
                    </select>  
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
                 
           
          </div><br><hr>
     

          <div class="row">
            <div class="col-xs-4">
            <label>PARTIDOS:</label><br>
            <select name="origen[]" id="origen" multiple="multiple" size="8" class="form-control">
                <?php
                $sql="SELECT id_partido,nombre FROM partido";
                $datos=consultaD($con,$sql);
                foreach ($datos as $value) {
                    print "<option value='";
                    print $value['nombre']."'";
                    print ">";
                    print $value['nombre'];
                    print "</option>";
                }
                ?>
            </select>
              
            </div>
          
            <div class="col-xs-4">
                <center><input type="button" class="pasar izq" value="Pasar &raquo;"><input type="button" class="quitar der" value="&laquo; Quitar"></center>
            </div>
            <div class="col-xs-4">
                <label>PARTIDOS EN COALICION:</label>
                <select name="partidosCoalicion[]" id="partidosCoalicion" multiple="multiple" size="8" class="form-control" required>
                    <script type="text/javascript">
                        function valida(){ 
                        if (document.forms['coalicion']['partidosCoalicion'].length  <=1 ) 
                            alert("debe por lo menos escojer 2 opciones"); 
                        }
                    </script>
                </select>
            </div>
            </div><br><hr>
            <div class="row">

            <div> <input type="submit" name="bot" value="Guardar" class="btn btn-primary col-md-offset-6"></div>
            </div>
       
    </form>
</div>
    
    <script type="text/javascript">
    $().ready(function() 
    {
        $('.pasar').click(function() { return !$('#origen option:selected').remove().appendTo('#partidosCoalicion'); });  
        $('.quitar').click(function() { return !$('#partidosCoalicion option:selected').remove().appendTo('#origen'); });
        $('.pasartodos').click(function() { $('#origen option').each(function() { $(this).remove().appendTo('#destino'); }); });
        $('.quitartodos').click(function() { $('#destino option').each(function() { $(this).remove().appendTo('#origen'); }); });
    }); 
    </script>
</body>
</html>