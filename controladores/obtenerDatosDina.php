<?php 
	require "../modelos/personas.php";
	$personas = new Persona();
	$QueryId=$_POST['b'];

 
	if ($QueryId == "1")
	{
		$array_Datos = $personas->listar3();
	}else if ($QueryId == "2")
	{
		$array_Datos = $personas->listar4();
	}else
	{
		$array_Datos = $personas->listar5();
	}


	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

		if ($array_Datos > 0){
			$arrheadColum = explode ( ',' , $array_Datos[0]['colhead'] );
			$totalColum = count($arrheadColum);
			$arrNomColum = explode ( ',' , $array_Datos[0]['colval'] );
			?>
			 <table class="table table-bordered">
			  <thead>
				<tr>
				<?php foreach($arrheadColum as $itemHead): ?>
					<th><?php echo $itemHead;?></th>
				<?php endforeach; 	?>		  
				</tr>
			</thead>
			<tbody>
				<?php foreach($array_Datos as $item): ?>
					<tr>
						<?php for ($i=0; $i < $totalColum; $i++) { 
							$valtem = trim($arrNomColum[$i]);
							?>
							<td><?php echo $item[$valtem];?></td>
						<?php } ?>
					</tr>
				<?php endforeach; 	?>
			</tbody>
		</table>
			
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			
			<?php
		}


 ?>