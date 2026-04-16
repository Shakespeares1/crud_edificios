<?php

class ListarEdificios {

    private $repo;

    public function __construct($repo){
        $this->repo = $repo;
    }

    public function ejecutar(){
        return $this->repo->listar();
    }
}