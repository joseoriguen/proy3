<?php 

require_once '../configdb/conexion.php';

/**
* Clase de tabla para la creacion en BD
*/
class Cedente extends Conexion
{
	
	function Cedente()
	{
		parent::__construct();
	}

    
	public function listarCedentes(){
       $resultado = $this->conexion_db->query('SELECT * FROM cedentes ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }





}



 ?>