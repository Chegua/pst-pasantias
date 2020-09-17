<?php 
	namespace Controllers;

	use Models\Usuario;
	
	// require_once 'Models/Usuario.php';

	class usuariosController
	{
		
		public static function index()
		{
			require_once 'Views/usuarios/homePage.php';
		}

		public static function create()
		{
			$edit= false;
			if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
				$nombre= $_POST['nombre'];
				$apellido= $_POST['apellido'];
				$usuario= new Usuario($nombre,$apellido);
				$r= $usuario->create();
			}
			
			require_once 'Views/usuarios/create.php';

		}

		public static function list()
		{
			$usuario= new Usuario();
			$result= $usuario->list();

			require_once 'Views/usuarios/list.php';
		}

		public static function update()
		{
			if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['id'])) {
				$nombre= $_POST['nombre'];
				$apellido= $_POST['apellido'];
				$id= $_POST['id'];
				$usuario= new Usuario($nombre,$apellido);
				$usuario->setAtribute('id',$id);
				$r= $usuario->update();
				self::list();
			}elseif (isset($_GET['id'])) {
				$usuario= new Usuario();
				$id= $_GET['id'];
				$usuario->setAtribute('id',$id);
				$user= $usuario->getUser();
				$edit= true;

				require_once 'Views/usuarios/create.php';
			}

		}

		public static function delete()
		{
			$usuario= new Usuario();
			$id= $_GET['id'];
			$usuario->setAtribute('id',$id);
			$r= $usuario->delete();
			self::list();

		}

		
	}

?>