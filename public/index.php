<?php

require_once __DIR__ . '/../src/Infrastructure/Controllers/EdificioController.php';
session_start();

if(!isset($_SESSION['usuario']) && $accion != 'login'){
    header("Location: login.php");
}
$accion = $_GET['accion'] ?? '';

$controller = new EdificioController();

if($accion == 'guardar'){
    $controller->guardar();
}

if($accion == 'listar'){
    $controller->listar();
}

if($accion == 'eliminar'){
    $controller->eliminar();
}

if($accion == 'editar'){
    $controller->editar();
}

if($accion == 'actualizar'){
    $controller->actualizar();
}
if($accion == 'login'){
    $controller->login();
}