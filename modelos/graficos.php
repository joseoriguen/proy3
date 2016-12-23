<?php 
require_once '../configdb/conexion.php';

/**
* Case para Graficos
*/
class Grafico extends Conexion
{
	
	function Grafico()
	{
		parent::__construct();
	}

	//
	public function DatosGrafico1(){
       $resultado = $this->conexion_db->query('SELECT * FROM productos ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }



}





 ?>