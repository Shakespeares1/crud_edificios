<?php

require_once __DIR__ . '/../../Domain/Model/Edificio.php';

class CrearEdificio {

    private $repo;

    public function __construct($repo){
        $this->repo = $repo;
    }

    public function ejecutar($data){

        $edificio = new Edificio(
            null,
            $data['nombre'],
            $data['metrosCuadrados'],
            $data['altura'],
            $data['numPisos'],
            $data['numApartamentos'],
            $data['numOficinas'],
            $data['nombreParqueadero'],
            $data['numPiscinas'],
            $data['pais'],
            $data['departamento'],
            $data['ciudad'],
            $data['tieneAscensor'],
            $data['valorAdministracion'],
            $data['tieneZonaSocial']
        );

        $this->repo->guardar($edificio);
    }
}