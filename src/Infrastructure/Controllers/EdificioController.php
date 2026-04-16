<?php

require_once __DIR__ . '/../Persistence/MySQLEdificioRepository.php';
require_once __DIR__ . '/../../Application/UseCase/CrearEdificio.php';

class EdificioController {

    public function guardar(){

        $repo = new MySQLEdificioRepository();
        $casoUso = new CrearEdificio($repo);

        $casoUso->ejecutar($_POST);

        echo "Edificio guardado correctamente 🔥";
    }
}