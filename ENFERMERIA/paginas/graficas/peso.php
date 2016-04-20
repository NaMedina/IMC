
<?php
	  $conexion = require('../../conf/config.php');
	  $per=$_GET["id_per"];
      $query1 = "select peso_actual from datos where id_persona=$per order by fecha;";
      $resultados = $mysqli->query($query1);
	
	?>
    <?php
	  $per=$_GET["id_per"];
      $query3 = "select fecha from diagnostico where id_persona=$per and  order by fecha;";
      $resultados2 = $mysqli->query($query3);
	
	?>
         <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Historial de Peso</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="area-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="file:///C|/Users/Atem/Documents/Escuela/js/jquery-1.7.2.min.js"></script>
    <script src="file:///C|/Users/Atem/Documents/Escuela/js/excanvas.min.js"></script>
    <script src="file:///C|/Users/Atem/Documents/Escuela/js/bootstrap.js"></script>
    <script src="file:///C|/Users/Atem/Documents/Escuela/js/base.js"></script>
    <script src="file:///C|/Users/Atem/Documents/Escuela/js/Chart.js"></script>
    <script>
	
	<?php while ($imp=$resultado->fetch-array() and $imp2=$resultado2->fetch-array()) { ?>
				
				var lineChartData = {
            labels: ["<?php echo $imp2[Fecha] ?>"," <?php echo $imp2[Fecha] ?>", "<?php echo $imp2['Fecha'] ?>", "<?php echo $imp2['Fecha'] ?>", "<?php echo $imp2['Fecha'] ?>", "<?php echo $imp2['Fecha'] ?>", "<?php echo $imp2['Fecha'] ?>"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [<?php echo $imp ?>, <?php echo $imp['peso_actual'] ?>, <?php echo $imp['peso_actual'] ?>, <?php echo $imp['peso_actual'] ?>, <?php echo $imp['peso_actual'] ?>, <?php echo $imp['peso_actual'] ?>, <?php echo $imp['peso_actual'] ?>]
				}
			]

        }
		<?php } ?>

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);
		
				</script>

