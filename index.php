<?php
    include_once 'apiUsuario.php';

    $api = new ApiUsuario();


    if (isset($_POST['login']) && isset($_POST['pass'])) {
    	$api -> loguearUsuario($_POST['login'], $_POST['pass']);

    }elseif (isset($_POST['id'])) {
    	$api -> getById($_POST['id']);

    }else{
    	$api->getAll();
    	
    }
    
    
?>