<?php 

require_once '../configdb/conexion.php';

/**
* Clase de tabla para la creacion en BD
*/
class Tabla extends Conexion
{
	
	function Tabla()
	{
		parent::__construct();
	}

    public function creartabla($campos1){

    	$campos	= json_decode($_POST['data']);

    	$total = count($campos);
    	$strSql = "CREATE TABLE " . $campos[0]->tabla ."( ";
    	$esID = 0;
		$resp = 0;

		foreach($campos as $obj){
	        $strSql .= " " . $obj->nombre." ".$obj->tipo. " ";
	        
	        //Para tamaños de los campos
	        if($obj->tipo == "INT" && $obj->tamano.trim()  != "") 
	        {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }
	        elseif($obj->tipo == "DECIMAL" && $obj->tamano.trim()  != "") 
	        {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }
	        elseif($obj->tipo == "FLOAT" && $obj->tamano.trim()  != "") 
	        {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }
	        elseif($obj->tipo == "DOUBLE" && $obj->tamano.trim()  != "") 
	        {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }
	        elseif ($obj->tipo == "VARCHAR" ) {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }elseif ($obj->tipo == "CHAR") {
	        	$strSql .= " (" . $obj->tamano . ") ";
	        }

	        //Si es NOT NULL
	        if ($obj->sinull == "SI" && $esID == 0 ){
	        	$strSql .= " NOT NULL AUTO_INCREMENT ";
	        	$esID = 1;
	        }elseif ($obj->sinull == "SI") {
	        	$strSql .= " NOT NULL ";
	        }else{
	        	$strSql .= " NULL ";
	        }
	        $strSql .= ", ";
	        
		}

		$strSql .= "KEY (" .$campos[0]->nombre . ") ) ENGINE=MyISAM ; ";
		$strSql .= "";
    	
    	try {
			
			if ($this->conexion_db->query($strSql) === TRUE) {
			    $resp = 0;
			} else {
			    echo "Error creating table: " . $conexion_db->error;
			    $resp = 1;
			}
			
		} catch (Exception $e) {
		    $mensj = "Caught exception: ".  $e->getMessage() ;
		}
		
    	return $resp;
    }






}



 ?>