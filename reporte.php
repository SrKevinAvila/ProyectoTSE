<?php include_once 'config.inc.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" href="elestilo.css">
            <link rel="stylesheet" href="elecciones.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Resultados TSE</title>
<form action="cerrar.php">
        <script type="text/javascript" src="codigo.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'RESULTADOS DE ELECCIONES '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'partido ',
            data: [
            <?php $db=new Conect_MySql();
                $sql="select*from voto_alcalde";
                 $que=$db->execute($sql);
                  while ($row=$db->fetch_row($que)){ ?>
                ['<?php echo  $row ['cod_partido'] ?>', <?php echo $row ['clicks']  ?> ],

                <?php } ?>
                ]
        }]
    });
});


        </script>
    </head>
    <body>
        <div id="header">
              <ul class="nav">
                  <li><a href="Menu-Principal.php">INICIO</a></li>
                  <li><a href="resul.php">Resultado Alcalde</a></li>
                    <li><a href="resul1.php">Resultado Diputado</a></li>
                    <li><a href="resul2.php">Resultado Presidente</a></li>
              </ul>

</div>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    </body>
</html>

