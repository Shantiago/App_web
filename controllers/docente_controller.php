<?php
namespace controllers;

use models\Docente;
use controllers\BaseController;

class DocenteController extends BaseController
{

    public function index(){
        $model = new Docente();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new Docente();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){
        $model = new Docente();
        $model-> set('nombre',$request['nombre']);
        $model-> set('codigo',$request['codigo']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){
        $model = new Docente();
        $model-> set('id',$id);
        $model-> set('nombre',$request['nombre']);
        $model-> set('codigo',$request['codigo']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new Docente();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}