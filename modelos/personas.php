<?php 
require_once '../configdb/conexion.php';

class Persona extends Conexion
{

	function Persona()
	{
		parent::__construct();
	}

	public function listar3(){
       $resultado = $this->conexion_db->query('SELECT idpersona, nombre, apellido, "Id,Nombre,Apellido" as colhead, "idpersona,nombre,apellido" as colval FROM personas ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }

	public function listar4(){
       $resultado = $this->conexion_db->query('SELECT idpersona, nombre, apellido, direccion, "Id,Nombre,Apellido,Direccion" as colhead, "idpersona,nombre,apellido,direccion" as colval FROM personas ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }

    public function listar5(){
     $resultado = $this->conexion_db->query('SELECT idpersona, nombre, apellido, direccion,telefono, "Id,Nombre,Apellido,Direccion,Telefono" as colhead, "idpersona,nombre,apellido,direccion,telefono" as colval FROM personas ');
     $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
     return $registros;
    }

}

 ?>