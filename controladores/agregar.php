<?php

# utilizar e modeo 
include("../modelos/contactos.php");
$contactos = new Contacto();
    
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['nombre'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['apellido'])){
			$errors[] = "Apellido vacío";
		} else if (empty($_POST['telefono'])){
			$errors[] = "Telefono vacío";
		} else if (
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido']) &&
			!empty($_POST['telefono'])
			
		){

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		
		$query_update = $contactos->guardar($nombre,$apellido,$telefono);
		
		if ($query_update == 0){
			$messages[] = "Los datos se guardaron de manera Exitosa.";
		} else{
			$errors []= "Error al guardar, intente nuevamente." ;
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