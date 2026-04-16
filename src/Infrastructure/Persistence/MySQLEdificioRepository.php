<?php

require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../Domain/Model/Edificio.php';
require_once __DIR__ . '/../../Domain/Repository/EdificioRepository.php';

class MySQLEdificioRepository implements EdificioRepository {

    private $conexion;

    public function __construct(){
        $this->conexion = Database::conectar();
    }

    public function guardar(Edificio $e){

        $sql = "INSERT INTO edificios 
        (nombre, metrosCuadrados, altura, numPisos, numApartamentos, numOficinas, nombreParqueadero, numPiscinas, pais, departamento, ciudad, tieneAscensor, valorAdministracion, tieneZonaSocial)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([
            $e->getNombre(),
            $e->getMetrosCuadrados(),
            $e->getAltura(),
            $e->getNumPisos(),
            $e->getNumApartamentos(),
            $e->getNumOficinas(),
            $e->getNombreParqueadero(),
            $e->getNumPiscinas(),
            $e->getPais(),
            $e->getDepartamento(),
            $e->getCiudad(),
            $e->getTieneAscensor(),
            $e->getValorAdministracion(),
            $e->getTieneZonaSocial()
        ]);
    }

    public function listar(){
        return $this->conexion->query("SELECT * FROM edificios")->fetchAll();
    }

    public function eliminar($id){
        $stmt = $this->conexion->prepare("DELETE FROM edificios WHERE id=?");
        $stmt->execute([$id]);
    }

    public function actualizar(Edificio $e){

        $sql = "UPDATE edificios SET 
        nombre=?, metrosCuadrados=?, altura=?, numPisos=?, numApartamentos=?, 
        numOficinas=?, nombreParqueadero=?, numPiscinas=?, pais=?, 
        departamento=?, ciudad=?, tieneAscensor=?, valorAdministracion=?, 
        tieneZonaSocial=?
        WHERE id=?";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([
            $e->getNombre(),
            $e->getMetrosCuadrados(),
            $e->getAltura(),
            $e->getNumPisos(),
            $e->getNumApartamentos(),
            $e->getNumOficinas(),
            $e->getNombreParqueadero(),
            $e->getNumPiscinas(),
            $e->getPais(),
            $e->getDepartamento(),
            $e->getCiudad(),
            $e->getTieneAscensor(),
            $e->getValorAdministracion(),
            $e->getTieneZonaSocial(),
            $e->getId()
        ]);
    }

    public function buscarPorId($id){
        $stmt = $this->conexion->prepare("SELECT * FROM edificios WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

}