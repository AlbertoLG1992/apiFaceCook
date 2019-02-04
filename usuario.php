<?php
	
	include_once 'db.php';
	
	class Usuario extends DB{
		
		function obtenerUsuarios(){
			$query = $this->connect()->query('SELECT * FROM usuarios');
			
			return $query;
		}

		function obtenerUsuario($id){
			$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE login = :id');
			$query -> execute(['id' => $id]);
			
			return $query;
		}

		function autentificarUsuario($login, $pass){
			$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE login = :login AND pass = :pass');
			$query -> execute(['login' => $login, 'pass' => $pass]);
			
			return $query;
		}
	}
	
?>