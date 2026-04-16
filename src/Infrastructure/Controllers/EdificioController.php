<?php

require_once __DIR__ . '/../Persistence/MySQLEdificioRepository.php';
require_once __DIR__ . '/../../Application/UseCase/CrearEdificio.php';
require_once __DIR__ . '/../../Application/UseCase/ListarEdificios.php';
require_once __DIR__ . '/../../Application/UseCase/EliminarEdificio.php';
require_once __DIR__ . '/../../Application/UseCase/ActualizarEdificio.php';

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
public function editar(){

    $repo = new MySQLEdificioRepository();

    $edificio = $repo->buscarPorId($_GET['id']);

    require __DIR__ . '/../../Interfaces/Web/editar_edificio.php';
}
public function actualizar(){

    $repo = new MySQLEdificioRepository();
    $casoUso = new ActualizarEdificio($repo);

    $casoUso->ejecutar($_POST);

    header("Location: index.php?accion=listar");
}
public function login(){

    $conexion = Database::conectar();

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre=?");
    $stmt->execute([$_POST['nombre']]);

    $usuario = $stmt->fetch();

    if($usuario && password_verify($_POST['clave'], $usuario['clave'])){
        
        session_start();
        $_SESSION['usuario'] = $usuario;

        header("Location: index.php?accion=listar");

    } else {
        echo "Credenciales incorrectas";
    }
}
public function cambiarPassword(){

    session_start();

    $conexion = Database::conectar();

    $hash = password_hash($_POST['nueva_clave'], PASSWORD_BCRYPT);

    $stmt = $conexion->prepare("UPDATE usuarios SET clave=? WHERE id=?");
    $stmt->execute([
        $hash,
        $_SESSION['usuario']['id']
    ]);

    echo "Contraseña actualizada correctamente 🔥";
}
}