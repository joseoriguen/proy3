<?php

# utilizar e modeo 
include("../modelos/contactos.php");
$contactos = new Contacto();

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['id'])){
			$errors[] = "ID vacío";
		}   else if (
			!empty($_POST['id']) 
			
		){

		
		$id=intval($_POST['id']);
		$query_delete = $contactos->eliminar($id);

		if ($query_delete == 0){
			$messages[] = "Los datos se han eliminado de manera exitosa.";
		} else{
			$errors []= "Error al Eliminar, intenta nuevamente.";
		}
		} else {
			$errors []= "Error desconocido.";
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
						<strong>¡Mensaje!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>