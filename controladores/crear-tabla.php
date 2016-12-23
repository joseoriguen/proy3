<?php 

	# utilizar el modelo 
	include("../modelos/tablas.php");
	$tablas = new Tabla();
    
    $query_update = $tablas->creartabla($_POST['data']);
    
    if ($query_update == 0){
			$messages[] = "La tabla se ha creado de manera Exitosa.";
	} else{
		$errors []= "Error al Crear Tabla, intente nuevamente." ;		
	} 

	if (isset($errors)){
		
	?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> 
				<?php
					foreach ($errors as $error) {
							echo $error;
						}
				?>
		</div>
		<?php
		}
	if (isset($messages)){
		
		?>
		<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Mensaje</strong>
				<?php
					foreach ($messages as $message) {
							echo $message;
						}
					?>
		</div>
		<?php
	}



 ?>