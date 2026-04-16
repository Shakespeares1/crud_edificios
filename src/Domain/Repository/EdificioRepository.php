<?php

interface EdificioRepository {

    public function guardar(Edificio $edificio);

    public function listar();

    public function eliminar($id);

    public function actualizar(Edificio $edificio);

    public function buscarPorId($id);
}