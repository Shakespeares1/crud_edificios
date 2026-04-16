<h2>Editar Edificio</h2>

<form action="/public/index.php?accion=actualizar" method="POST">

<input type="hidden" name="id" value="<?= $edificio['id'] ?>">

<input name="nombre" value="<?= $edificio['nombre'] ?>"><br>
<input name="metrosCuadrados" value="<?= $edificio['metrosCuadrados'] ?>"><br>
<input name="altura" value="<?= $edificio['altura'] ?>"><br>
<input name="numPisos" value="<?= $edificio['numPisos'] ?>"><br>
<input name="numApartamentos" value="<?= $edificio['numApartamentos'] ?>"><br>
<input name="numOficinas" value="<?= $edificio['numOficinas'] ?>"><br>
<input name="nombreParqueadero" value="<?= $edificio['nombreParqueadero'] ?>"><br>
<input name="numPiscinas" value="<?= $edificio['numPiscinas'] ?>"><br>
<input name="pais" value="<?= $edificio['pais'] ?>"><br>
<input name="departamento" value="<?= $edificio['departamento'] ?>"><br>
<input name="ciudad" value="<?= $edificio['ciudad'] ?>"><br>
<input name="tieneAscensor" value="<?= $edificio['tieneAscensor'] ?>"><br>
<input name="valorAdministracion" value="<?= $edificio['valorAdministracion'] ?>"><br>
<input name="tieneZonaSocial" value="<?= $edificio['tieneZonaSocial'] ?>"><br>

<button type="submit">Actualizar</button>

</form>