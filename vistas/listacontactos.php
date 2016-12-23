<?php
    require "../modelos/contactos.php";
    $contactos = new Contacto();
    $array_Contactos = $contactos->listarTodos();

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){

		$num = 1;
		if ($num>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>Id</th>
				  <th>Nombre</th>
				  <th>Apellido</th>
				  <th>Telefono</th>
				  <th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($array_Contactos as $item): ?>
					<tr>
						<td><?php echo $item['id'];?></td>
						<td><?php echo $item['nombre'];?></td>
						<td><?php echo $item['apellido'];?></td>
						<td><?php echo $item['telefono'];?></td>
						
						<td>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $item['id']?>" data-nombre="<?php echo $item['nombre']?>" data-apellido="<?php echo $item['apellido']?>" data-telefono="<?php echo $item['telefono']?>" ><i class='ti-pencil'></i> Modificar</button>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $item['id']?>"  ><i class=' ti-trash '></i> Eliminar</button>
						</td>
					</tr>
				<?php endforeach; 	?>
			</tbody>
		</table>
		<div class="table-pagination pull-right">
		
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			
			<?php
		}
	}
?>