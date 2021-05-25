<?php
use controllers\CursoEstudianteController;

require_once dirname(__DIR__) . '/../db/conexion_db.php';
require_once dirname(__DIR__) . '/../utils/model_util.php';
require_once dirname(__DIR__) . '/../models/model.php';
require_once dirname(__DIR__) . '/../models/cursoEstudiante.php';
require_once dirname(__DIR__) . '/../controllers/base_controller.php';
require_once dirname(__DIR__) . '/../controllers/cursoEstudiante_controller.php';

$cursoEstudianteController = new CursoEstudianteController();
$estado = $cursoEstudianteController->delete($_GET['id']);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar registro Curso Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="views/styles.css">
</head>
<body>
    <div>
       
        <h1 style="height: 50vh;color: white;display: flex; align-items: center; justify-content: center;">
            <?php echo $estado; ?>
</h1>
        <a style="color: white;display: flex; align-items: center; justify-content: center;" href="index.php?page=cursosEstudiantes"><button type="button" class="btn btn-light">Volver</button></a>
    </div>
</body>
</html>