<?php
    require "../modelos/graficos.php";
    $graficos = new Grafico();
    $array_Result = $graficos->DatosGrafico1();
    
    //Para Montos
    $array_Productos = "[";
	foreach($array_Result as $item): 
		$array_Productos .= $item['monto'] . ",";	
	endforeach; 
	$array_Productos = trim($array_Productos, ',');	
	$array_Productos .= "]";

	// Para Nombres
	$array_ProNom = "[";
	foreach($array_Result as $item): 
		$array_ProNom .= "'" . $item['nombre'] . "' ,";	
	endforeach; 
	$array_ProNom = trim($array_ProNom, ',');	
	$array_ProNom .= "]";


    $jsonMonto = json_encode($array_Productos);
    $jsonNombre = json_encode($array_ProNom);
?>
<script type="text/javascript">
    var datosJsonMont = eval(<?php echo $jsonMonto ?>);
    var datosJsonNom = eval(<?php echo $jsonNombre ?>);
    console.log(datosJsonMont) ;
    console.log(datosJsonNom) ;

    $('.sparklines').sparkline('html');
    $('#ticker2').sparkline(datosJsonMont,{ type: 'line', 
        Width: '800px', 
        height: '200' ,
        defaultPixelsPerValue: 30
         } );
    
    $("#demo-sparkline-pie").sparkline(datosJsonMont, {
        type: 'pie',
        width: '200',
        height: '200',
        tooltipChartTitle: 'Productos Ventas',
        tooltipFormat: '{{offset:offset}} ({{percent.1}}%)',
        tooltipValueLookups: {
            'offset': datosJsonNom
        },
        sliceColors: ['#2d4859','#fe7211','#7ad689','#128376'],
    });

</script>

<div class="row">
    <div class="panel panel-danger panel-colorful">
        <div class="pad-all">
            <p class="text-lg text-semibold">Grafico de Torta</p>
        </div>
        <div class="pad-btm text-center">
        <!--Placeholder-->
            <div id="loader" class="text-center">
                <div id="demo-sparkline-pie" class="inlinebar"></div>  
            <br>
            </div>
        </div>
    </div>
    <br>
<div class="row">
<!--Sparkline Line Chart-->
    <!--===================================================-->
    <div class="panel panel-info panel-colorful">
        <div class="pad-all">
            <p class="text-lg text-semibold">Grafico Lineal1</p>
        </div>
        <div class="pad-all text-center">
            <!--Placeholder-->
            <span id="ticker2"">Loading...</span>
        </div>
    </div>
    <!--===================================================-->
<!--End Sparkline Line Chart-->



</div>
