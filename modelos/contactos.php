<?php 

require_once '../configdb/conexion.php';

class Contacto extends Conexion
{
	private $id;
	private $nombre;
	private $apellido;
	private $telefono;

	public function getId() 
	{
      return $this->id;
	}

	public function getNombre() 
	{
      return $this->nombre;
	}

	public function getApellido() 
	{
      return $this->apellido;
	}

	public function getTelefono() 
	{
      return $this->telefono;
	}
	
	public function setNombre($nombre) {
      $this->nombre = $nombre;
  	}

  	public function setApellido($apellido) {
      $this->apellido = $apellido;
  	}

  	public function setTelefono($telefono) {
      $this->telefono = $telefono;
  	}


	function Contacto()
	{
		parent::__construct();
	}


	public function listarTodos(){
       $resultado = $this->conexion_db->query('SELECT * FROM contactos ');
       $registros = $resultado-> fetch_All(MYSQLI_ASSOC);
       return $registros;
    }

    public function guardar($nombre, $apellido, $telefono){

    	$resultado = $this->conexion_db->query("INSERT INTO contactos (nombre,apellido,telefono) values('$nombre', '$apellido', '$telefono') ");
    	return 0;
    }

    public function actualizar($id, $nombre, $apellido, $telefono){

    	$resultado = $this->conexion_db->query("UPDATE contactos 
    		SET nombre = '$nombre',
    			apellido = '$apellido',
    			telefono = '$telefono' 
    		WHERE id = '$id' ");
    	return 0;
    }

    public function eliminar($id){

    	$resultado = $this->conexion_db->query("DELETE FROM contactos WHERE id = '$id' ");
    	return 0;
    }

}


 ?>