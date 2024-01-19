<?php 
	
	class Login
	
	{

		public function Restaurar_Password($usuario,$contrasena){

			$cmd = LoginModel::Restaurar_Password($usuario,$contrasena);
			
		}

		public function Login_Usuario($usuario,$contrasena){
			// $url_base = 'C:\xampp743\htdocs';
			// error_log("entro en el if: " . PHP_EOL, 3, $url_base.'\tienda1\error_log.txt');
			$cmd = LoginModel::Login_Usuario($usuario,$contrasena);
			
		}

		
	}
		
 ?>