<?php 

require_once '../configdb/conexion.php';

/**
* Clase de tabla para la creacion en BD
*/
class camposTabla extends Conexion
{
	
	function camposTabla()
	{
		parent::__construct();
	}

    
	public function listarCamposTabla($tabla){
       $resultado = $this->conexion_db->query('SHOW COLUMNS FROM '. $tabla .' FROM agenda ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }





}



 ?>