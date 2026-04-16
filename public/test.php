<?php
require_once "../config/database.php";

$conexion = Database::conectar();

if($conexion){
    echo "Conectado correctamente 🔥";
}