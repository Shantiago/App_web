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
$cursoEstudiante = empty($_GET['id'])? new ListaLibros(): $cursoEstudianteController->detail($_GET['id']);
$titulo = empty($_GET['id'])? 'Registrar libro' : 'Modificar libro';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <title><?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
    
    <div>
            <h1 style="color: white;display: flex; align-items: center; justify-content: center;"><?php echo $titulo; ?></h1>
        <div  class="row justify-content-center">
            <form action="index.php?page=ListaLibros&view=save" method="POST" class="col-8">
            <?php
                if(!empty($_GET['id'])){
                    echo '<input type="hidden" name="id" id="id" value="'.$cursoEstudiante->get('id').'">';
                }
            ?>
                    <a href="index.php?page=ListaLibros"><button type="button" class="btn btn-light">Volver</button></a>
                <div style="color: white;">
                    <label for="estudiante_id">NOMBRE</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $cursoEstudiante->get('nombre') ?>" required>
                </div>
                <div style="color: white;">
                    <label for="estudiante_id">DESCRIPCION</label>
                    <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $cursoEstudiante->get('descripcion') ?>" required>
                </div>
                <div style="color: white;">
                    <label for="estudiante_id">FECHA PUBLICACION</label>
                    <input class="form-control" type="text" name="fecha_publicacion" id="fecha_publicacion" value="<?php echo $cursoEstudiante->get('fecha_publicacion') ?>" required>
                </div>
                <div style="color: white;">
                    <label for="estudiante_id">EDICION</label>
                    <input class="form-control" type="text" name="edicion" id="edicion" value="<?php echo $cursoEstudiante->get('edicion') ?>" required>
                </div>
                <div style="color: white;">
                    <label for="estudiante_id">EDITORIAL_ID</label>
                    <input class="form-control" type="text" name="editorial_id" id="editorial_id" value="<?php echo $cursoEstudiante->get('editorial_id') ?>" required>
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