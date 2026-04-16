<?php

require_once __DIR__ . '/../src/Infrastructure/Controllers/EdificioController.php';

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