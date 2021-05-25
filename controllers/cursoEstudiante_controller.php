<?php
namespace controllers;

use controllers\BaseController;
use models\CursoEstudiante;

class CursoEstudianteController extends BaseController
{

    public function index(){
        $model = new CursoEstudiante();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new CursoEstudiante();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){
        $model = new CursoEstudiante();
        $model-> set('curso_id',$request['curso_id']);
        $model-> set('estudiante_id',$request['estudiante_id']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){
        $model = new CursoEstudiante();
        $model-> set('id',$id);
        $model-> set('curso_id',$request['curso_id']);
        $model-> set('estudiante_id',$request['estudiante_id']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new CursoEstudiante();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}