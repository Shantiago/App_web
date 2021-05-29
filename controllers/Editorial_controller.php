<?php
namespace controllers;

use models\Editorial;
use controllers\BaseController;

class EditorialController extends BaseController
{

    public function index(){
        $model = new Editorial();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new Editorial();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){
        $modelValidation = new Editorial();
        $data = $modelValidation->where([
            ['codigo', '=', $request['codigo']]
        ]);
        if (count($data) > 0) {
            return "El iD ya se encuentra registrado";
        }


        $model = new Editorial();
        $model-> set('codigo',$request['codigo']);
        $model-> set('nombre',$request['nombre']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){
        $modelValidation = new Editorial();
        $data = $modelValidation->where([
            ['codigo', '=', $request['codigo']],
            ['id', '<>', $id]
        ]);
        if (count($data) > 0) {
            return "El código ya se cuentra registrado";
        }

        
        $model = new Editorial();
        $model-> set('id',$id);
        $model-> set('codigo',$request['codigo']);
        $model-> set('nombre',$request['nombre']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new Editorial();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}