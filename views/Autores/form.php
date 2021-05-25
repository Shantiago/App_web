<?php
use controllers\EstudianteController;
use models\Estudiante;

require_once dirname(__DIR__) . '/../db/conexion_db.php';
require_once dirname(__DIR__) . '/../utils/model_util.php';
require_once dirname(__DIR__) . '/../models/model.php';
require_once dirname(__DIR__) . '/../models/estudiante.php';
require_once dirname(__DIR__) . '/../controllers/base_controller.php';
require_once dirname(__DIR__) . '/../controllers/estudiante_controller.php';

$estudianteController = new EstudianteController();
$estudiante = empty($_GET['id'])? new Estudiante(): $estudianteController->detail($_GET['id']);
$titulo = empty($_GET['id'])? 'Registrar estudiante' : 'Modificar estudiante';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="views/styles.css">

</head>
<body>
    <div>
        <h1 style="color: white;display: flex; align-items: center; justify-content: center;"><?php echo $titulo; ?></h1>
    <div class="row justify-content-center">
        <form action="index.php?page=estudiantes&view=save" method="POST" class="col-8">
        <?php
            if(!empty($_GET['id'])){
                echo '<input type="hidden" name="id" id="id" value="'.$estudiante->get('id').'">';
            }
        ?>
               <a style="color: white;display: flex; align-items: center; justify-content: end;" href="index.php?page=estudiantes"><button type="button" class="btn btn-light">Volver</button></a> 
            <div style="color: white;" >
                <label for="codigo">Código</label>
                <input class="form-control" type="text" name="codigo" id="codigo" value="<?php echo $estudiante->get('codigo') ?>" required>
            </div>
            <div style="color: white;">
                <label for="nombres">Nombres</label>
                <input class="form-control " type="text" name="nombres" id="nombres" value="<?php echo $estudiante->get('nombres') ?>" required>
            </div>
            <div style="color: white;">
                <label for="apellidos">Apellidos</label>
                <input class="form-control " type="text" name="apellidos" id="apellidos" value="<?php echo $estudiante->get('apellidos') ?>" required>
            </div>
            <div style="color: white;">
                <label for="edad">Edad</label>
                <input class="form-control" type="number" name="edad" id="edad" value="<?php echo $estudiante->get('edad') ?>" required>
            </div>
            <br>
            <div style="color: white;">
                <button type="submit" type="button" class="btn btn-light">Guardar</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>