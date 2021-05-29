<?php
namespace controllers;

use controllers\BaseController;
use models\ListaLibros;

class ListaLibrosController extends BaseController
{

    public function index(){
        $model = new ListaLibros();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new ListaLibros();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){
        $model = new ListaLibros();
        $model-> set('nombre',$request['nombre']);
        $model-> set('descripcion',$request['descripcion']);
        $model-> set('fecha_publicacion',$request['fecha_publicacion']);
        $model-> set('edicion',$request['edicion']);
        $model-> set('editorial_id',$request['editorial_id']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){
        $model = new ListaLibros();
        $model-> set('id',$id);
        $model-> set('nombre',$request['nombre']);
        $model-> set('descripcion',$request['descripcion']);
        $model-> set('fecha_publicacion',$request['fecha_publicacion']);
        $model-> set('edicion',$request['edicion']);
        $model-> set('editorial_id',$request['editorial_id']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new ListaLibros();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}