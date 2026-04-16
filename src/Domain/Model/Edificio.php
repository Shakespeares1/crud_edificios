<?php

class Edificio {

    private $id;
    private $nombre;
    private $metrosCuadrados;
    private $altura;
    private $numPisos;
    private $numApartamentos;
    private $numOficinas;
    private $nombreParqueadero;
    private $numPiscinas;
    private $pais;
    private $departamento;
    private $ciudad;
    private $tieneAscensor;
    private $valorAdministracion;
    private $tieneZonaSocial;

    public function __construct(
        $id, $nombre, $metrosCuadrados, $altura, $numPisos,
        $numApartamentos, $numOficinas, $nombreParqueadero,
        $numPiscinas, $pais, $departamento, $ciudad,
        $tieneAscensor, $valorAdministracion, $tieneZonaSocial
    ){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->metrosCuadrados = $metrosCuadrados;
        $this->altura = $altura;
        $this->numPisos = $numPisos;
        $this->numApartamentos = $numApartamentos;
        $this->numOficinas = $numOficinas;
        $this->nombreParqueadero = $nombreParqueadero;
        $this->numPiscinas = $numPiscinas;
        $this->pais = $pais;
        $this->departamento = $departamento;
        $this->ciudad = $ciudad;
        $this->tieneAscensor = $tieneAscensor;
        $this->valorAdministracion = $valorAdministracion;
        $this->tieneZonaSocial = $tieneZonaSocial;
    }

    // GETTERS

    public function getId(){ return $this->id; }
    public function getNombre(){ return $this->nombre; }
    public function getMetrosCuadrados(){ return $this->metrosCuadrados; }
    public function getAltura(){ return $this->altura; }
    public function getNumPisos(){ return $this->numPisos; }
    public function getNumApartamentos(){ return $this->numApartamentos; }
    public function getNumOficinas(){ return $this->numOficinas; }
    public function getNombreParqueadero(){ return $this->nombreParqueadero; }
    public function getNumPiscinas(){ return $this->numPiscinas; }
    public function getPais(){ return $this->pais; }
    public function getDepartamento(){ return $this->departamento; }
    public function getCiudad(){ return $this->ciudad; }
    public function getTieneAscensor(){ return $this->tieneAscensor; }
    public function getValorAdministracion(){ return $this->valorAdministracion; }
    public function getTieneZonaSocial(){ return $this->tieneZonaSocial; }

}