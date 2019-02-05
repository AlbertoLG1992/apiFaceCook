<?php

include_once 'Usuario.php';

class ApiUsuario{
	
    /*
    Función que devuelve todos los usuarios de la base de datos
    */
    function getAll(){
        $usuario = new Usuario();
        $listaUsuarios = array();
		
        $res = $usuario->obtenerUsuarios();
		
        if($res->rowCount()){
			
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "Login" => $row['login'],
                    "Pass" => $row['pass'],
                    "Nombre" => $row['nombre'],
                    "Apellidos" => $row['apellidos'],
                    "Fecha de nacimiento" => $row['fecha_nacimiento'],
                    "Email" => $row['email'],
                    "Coordenada X" => $row['coordenada_x'],
                    "Coordenada Y" => $row['coordenada_y'],
                    "Telefono" => $row['tlf'],
                    "Foto" => $row['foto'],
                    "Fecha de alta" => $row['fecha_alta'],
                    "Comentarios" => $row['comentarios'],
                );
                array_push($listaUsuarios, $item);
            }
        
            $this -> printJSON($listaUsuarios);
            
        }else{
            $this -> mostrarMensaje('No existen elementos en la Base de Datos');
        }
    }

    /*
    Función que devuelve todos los datos de un usuario cuyo id se inserta como parametro
    */
    function getById($id){
        $usuario = new Usuario();
        $listaUsuarios = array();
        
        $res = $usuario->obtenerUsuario($id);
        
        if($res->rowCount() == 1){
            
            $row = $res -> fetch();

            $item=array(
                    "Login" => $row['login'],
                    "Pass" => $row['pass'],
                    "Nombre" => $row['nombre'],
                    "Apellidos" => $row['apellidos'],
                    "Fecha de nacimiento" => $row['fecha_nacimiento'],
                    "Email" => $row['email'],
                    "Coordenada X" => $row['coordenada_x'],
                    "Coordenada Y" => $row['coordenada_y'],
                    "Telefono" => $row['tlf'],
                    "Foto" => $row['foto'],
                    "Fecha de alta" => $row['fecha_alta'],
                    "Comentarios" => $row['comentarios'],
                );
                array_push($listaUsuarios, $item);
        
            $this -> printJSON($listaUsuarios);
            
        }else{
            $this -> mostrarMensaje('El usuario no existe en la Base de Datos');
        }
    }

    /*
    Función indica si un usuario existe en la base de datos o no, en caso afirmativo
    comprueba que la contraseña es correcta
    */
    function loguearUsuario($login, $pass){
        $usuario = new Usuario();
        $listaUsuarios = array();
        
        $res = $usuario->obtenerUsuario($login);

        if($res->rowCount() == 1){

            $res = $usuario->autentificarUsuario($login, $pass);
        
            if($res->rowCount() == 1){
        
                $this -> mostrarMensaje('Pass correcta');
            
            }else{
                $this -> mostrarMensaje('Pass erronea');
            }
        }else{
            $this -> mostrarMensaje('Usuario no existe');
        }
    }

    /*
    Función que muestra por pantalla un array que recibe como parámetro codificandolo a JSON
    */
    function printJSON($array){
        echo json_encode($array);
    }

    /*
    Función que muestra por pantalla un error que recibe como parámetro
    */
    function mostrarMensaje($mensaje){
        echo json_encode(array('mensaje' => $mensaje));
    }
}
?>