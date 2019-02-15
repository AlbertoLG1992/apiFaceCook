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

		function insertarUsuario($nick, $pass, $nombre, $apellidos, $fecha_nacimiento, $correo, $tlf, $comentarios, $rutaImagen, $latitud, $longitud){
			$query = $this->connect()->prepare('
				INSERT INTO usuarios(login, pass, nombre, apellidos, fecha_nacimiento, email, tlf, foto, fecha_alta, comentarios, latitud, longitud)
				VALUES (:login, :pass, :nombre, :apellidos, :fecha_nacimiento, :email, :tlf, :foto, CURDATE(), :comentarios, :latitud, :longitud);
				');
			$query -> execute([
				'login' => $nick, 
				'pass' => $pass,
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'fecha_nacimiento' => $fecha_nacimiento,
				'email' => $correo,
				'tlf' => $tlf,
				'foto' => $rutaImagen,
				'comentarios' => $comentarios,
				'latitud' => $latitud,
				'longitud' => $longitud
			]);
			return $query;
		}

		function insertarImagen($imagen, $rutaImagen){
			file_put_contents($rutaImagen, base64_decode($imagen));
		}
	}
	
?>