<?php	
	namespace Models;
	
	use Models\DataBase;

	class Usuario{
		private $id;
		private $nombre;
		private $apellido;


		public function __construct($nombre='',$apellido='')
		{
			$this->nombre= $nombre;
			$this->apellido= $apellido;
		}

		public function setAtribute($key,$value)
		{
			$this->$key=$value;
		}

		public function getAtribute($key)
		{
			return $this->$key;
		}

		public function create()
		{
			$db= DataBase::getInstance();
			$sql= "INSERT INTO usuarios (nombre,apellido) VALUES (:nombre,:apellido)";
			$consulta= $db->prepare($sql);
			$consulta->bindParam(':nombre',$this->nombre);
			$consulta->bindParam(':apellido',$this->apellido);
			$resultado= $consulta->execute();
			return $resultado;

		}

		public function list()
		{
			$db= DataBase::getInstance();
			$sql= "SELECT * FROM usuarios";
			$consulta= $db->prepare($sql);			
			$consulta->execute();
			$resultado= $consulta->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		}

		public function getUser()
		{
			$db= DataBase::getInstance();
			$sql= "SELECT * FROM usuarios WHERE id=:id";
			$consulta= $db->prepare($sql);	
			$consulta->bindParam(':id',$this->id);
			$consulta->execute();
			$resultado= $consulta->fetch(\PDO::FETCH_OBJ);
			return $resultado;
		}

		public function update()
		{
			$db= DataBase::getInstance();
			$sql= "UPDATE usuarios SET nombre=:nombre,apellido=:apellido WHERE id=:id";
			$consulta= $db->prepare($sql);
			$consulta->bindParam(':id',$this->id);	
			$consulta->bindParam(':nombre',$this->nombre);
			$consulta->bindParam(':apellido',$this->apellido);		
			$resultado= $consulta->execute();
			return $resultado;
		}

		public function delete()
		{
			$db= DataBase::getInstance();
			$sql= "DELETE FROM usuarios WHERE id=:id";
			$consulta= $db->prepare($sql);
			$consulta->bindParam(':id',$this->id);
			$resultado= $consulta->execute();
			return $resultado;
		}

		

		

	}

?>