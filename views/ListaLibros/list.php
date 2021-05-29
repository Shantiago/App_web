<?php

require_once dirname(__DIR__) . '/../db/conexion_db.php';
require_once dirname(__DIR__) . '/../utils/model_util.php';
require_once dirname(__DIR__) . '/../models/model.php';
require_once dirname(__DIR__) . '/../models/listaLibros.php';
require_once dirname(__DIR__) . '/../controllers/base_controller.php';
require_once dirname(__DIR__) . '/../controllers/listaLibros_controller.php';

use controllers\ListaLibrosController;

$cursoEstudianteController = new ListaLibrosController;
?>
<!Doctype html>
<html>
    <head>
    <title>Cursos del estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
    </head>

    <body class="container-fluid">
    <h1 style= "color: white;display: flex; align-items: center; justify-content: center;">LISTA DE LIBROS</h1>
        <a href="index.php?page=ListaLibros&view=form"><button type="button" class="btn btn-light">Registrar</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th Style = "color: white;">Id </th>
                    <th Style = "color: white;">NOMBRE</th>
                    <th Style = "color: white;">DESCRIPCION</th>
                    <th Style = "color: white;">FECHA PUBLICACION</th>
                    <th Style = "color: white;">EDICION</th>
                    <th Style = "color: white;">EDITORIAL ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = $cursoEstudianteController->index();
                foreach($rows as $row){
                    echo '<tr Style = "color: white;">';
                    echo '<td Style = "color: white;">',$row->get('nombre'),'</td>';
                    echo '<td Style = "color: white;">',$row->get('descripcion'),'</td>';
                    echo '<td Style = "color: white;">',$row->get('fecha_publicacion'),'</td>';
                    echo '<td Style = "color: white;">',$row->get('edicion'),'</td>';
                    echo '<td Style = "color: white;">',$row->get('editorial_id'),'</td>';
                ?>
                    <td style="width: 15%;">
                        <a href="index.php?page=ListaLibros&view=delete&id=<?php echo $row->get('id'); ?>"><button type="button" class="btn btn-light">Eliminar</button></a>
                        <a href="index.php?page=ListaLibros&view=form&id=<?php echo $row->get('id'); ?>"><button type="button" class="btn btn-light">Actualizar</button></a>
                    </td>
                <?php
                    echo '</tr>';
                }
                ?>
                
            </tbody>
        </table>
        <a href="index.php"><button type="button" class="btn btn-light">Volver</button></a>
    </body>
    
</html>