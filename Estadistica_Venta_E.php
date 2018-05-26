<?php
    require 'conexion.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Contenido de la entrega de Minimercado'
        },
        subtitle: {
            text: 'Ventas Gravadas'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Cantidad entregada',
            data: 
            [
                <?php
                    $resultados = mysqli_query($conexion, "SELECT * FROM Factura_Venta");
                    while ($consulta = mysqli_fetch_array($resultados)){
                ?>
                    ['<?php echo $consulta['Nombre_Producto'];?>', <?php echo $consulta['Cantidad'];?> ],
                <?php
                     }
                ?>
            ]
        }]
    });
});
        </script>
    </head>
    <body>

        <script src="js/highcharts.js"></script>
        <script src="js/highcharts-3d.js"></script>
        <script src="js/modules/exporting.js"></script>

        <div id="container" style="height: 400px"></div>
        <br><br><br><br>
        <center>
            <a href="Estadisticas_Usuario.php" class="btn btn-primary btn-sm">Volver al Menu</a>
        </center>       
    </body>
</html>
