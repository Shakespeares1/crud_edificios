<?php

class EliminarEdificio {

    private $repo;

    public function __construct($repo){
        $this->repo = $repo;
    }

    public function ejecutar($id){
        $this->repo->eliminar($id);
    }
}