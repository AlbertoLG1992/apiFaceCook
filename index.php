<?php
    include_once 'apiUsuario.php';

    $api = new ApiUsuario();


    if (isset($_GET['login']) && isset($_GET['pass'])) {
    	$api -> loguearUsuario($_GET['login'], $_GET['pass']);

    }elseif (isset($_GET['id'])) {
    	$api -> getById($_GET['id']);

    }else{
    	$api->getAll();
    	
    }
    
    
?>