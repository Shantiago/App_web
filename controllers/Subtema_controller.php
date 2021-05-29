<?php
namespace controllers;

use controllers\SubtemaController;
use models\Subtema;

class SubtemaController extends BaseController
{

    public function index(){
        $model = new Subtema();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new Subtema();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){


        $model = new Subtema();
        $model-> set('nombre',$request['nombre']);
        $model-> set('tema_id',$request['tema_id']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){



        $model = new Subtema();
        $model-> set('id',$id);
        $model-> set('nombre',$request['nombre']);
        $model-> set('tema_id',$request['tema_id']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new Subtema();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}