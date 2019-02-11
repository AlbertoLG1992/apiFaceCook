<?php
    include_once 'apiUsuario.php';

    $api = new ApiUsuario();

    if (isset($_POST['nick'])){
    	$api -> agregarUsuario($_POST['nick'], $_POST['pass'], $_POST['nombre'], $_POST['apellidos'], $_POST['fecha_nacimiento'], $_POST['correo'],
    		$_POST['tlf'], $_POST['comentarios'],$_POST['imagen']);

    }elseif (isset($_POST['login']) && isset($_POST['pass'])) {
    	$api -> loguearUsuario($_POST['login'], $_POST['pass']);

    }elseif (isset($_POST['id'])) {
    	$api -> getById($_POST['id']);

    }else{
    	$api->getAll();
    	
    }
    
    
?>