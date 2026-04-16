<?php

require_once __DIR__ . '/../Persistence/MySQLEdificioRepository.php';
require_once __DIR__ . '/../../Application/UseCase/CrearEdificio.php';
require_once __DIR__ . '/../../Application/UseCase/ListarEdificios.php';
require_once __DIR__ . '/../../Application/UseCase/EliminarEdificio.php';

class EdificioController {

    public function guardar(){

        $repo = new MySQLEdificioRepository();
        $casoUso = new CrearEdificio($repo);

        $casoUso->ejecutar($_POST);

        echo "Edificio guardado correctamente 🔥";
    }

    public function listar(){

        $repo = new MySQLEdificioRepository();
        $casoUso = new ListarEdificios($repo);

        $edificios = $casoUso->ejecutar();

        require __DIR__ . '/../../Interfaces/Web/listar_edificios.php';
    }

    public function eliminar(){

    $repo = new MySQLEdificioRepository();
    $casoUso = new EliminarEdificio($repo);

    $casoUso->ejecutar($_GET['id']);

    header("Location: index.php?accion=listar");
}
