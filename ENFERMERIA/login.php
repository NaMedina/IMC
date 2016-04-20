<?php
		
		include('validarInicio.php')
		

	class login
	{
		public $usuario_id;
		//private $logueado = false;

		
		public function loguearse($usuario, $contrasena)
		{
			if ($usuario) {
				$this->usuario_id = $_SESSION['k_username'] = $usuario->id;
				//$this->logueado = true;
				header('location: ../paginas/registro/datosper.php');

			}
		}

		/*public function desbloguearse()   $_SESSION['k_username'] = $rowTotal["usuario"];
		{
			unset($this->usuario_id);
			unset($_POST["usuario_id"]);
			//$this->logueado = false;
		}
		*/
		private function verificar_logueo()
		{
			if (isset($_POST["usuario_id"])) {
			  $this->usuario_id = $_SESSION["usuario"];
			  //$this->logueado = true;
			}
			else
			{
				unset($this->usuario_id);
				//$this->logueado = false;
			}
		}
	}

	$entrar = new login();

?>