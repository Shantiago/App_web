<?php
use controllers\ListaLibrosController;
use models\ListaLibros;

require_once dirname(__DIR__) . '/../db/conexion_db.php';
require_once dirname(__DIR__) . '/../utils/model_util.php';
require_once dirname(__DIR__) . '/../models/model.php';
require_once dirname(__DIR__) . '/../models/listaLibros.php';
require_once dirname(__DIR__) . '/../controllers/base_controller.php';
require_once dirname(__DIR__) . '/../controllers/listaLibros_controller.php';

$cursoEstudianteController = new ListaLibrosController();
$request = [
    'nombre'=> $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'fecha_publicacion'=> $_POST['fecha_publicacion'],
    'edicion' => $_POST['edicion'],
    'editorial_id'=> $_POST['editorial_id'],

];

$estado = empty($_POST['id'])? $cursoEstudianteController->create($request) : $cursoEstudianteController->update($_POST['id'], $request);
$url = 'index.php?page=ListaLibros';
if ($estado != 'Registro actualizado' &&  !empty($_POST['id'])) {
    $url .= '&view=form&id=' . $_POST['id'];
}
?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="views/style.css">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro guardado</title>
   
</head>
<body>
    <div>
      
        <h1 style="height: 50vh;color: white;display: flex; align-items: center; justify-content: center;">
            <?php echo $estado;?>
            
</h1>
        <a style="color: white;display: flex; align-items: center; justify-content: center;" href="<?php echo $url; ?>"><button type="button" class="btn btn-light">Volver</button></a>
    </div>
</body>
</html>