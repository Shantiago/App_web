<?php
namespace controllers;

use controllers\BaseController;
use models\Tema;

class TemaController extends BaseController
{

    public function index(){
        $model = new Tema();
        $rows = $model->all();
        return $rows;
    }
    public function detail($id){
        $model = new Tema();
        $row = $model->find($id);
        return $row;
    }
    public function create($request){
        $modelValidation = new Tema();
        $data = $modelValidation->where([
            ['codigo', '=', $request['codigo']]
        ]);
        if (count($data) > 0) {
            return "El iD ya se encuentra registrado";
        }



        $model = new Tema();
        $model-> set('codigo',$request['codigo']);
        $model-> set('nombre',$request['nombre']);
        $status = $model->save();
        return $status ? 'Registro guardado':'Error al guardar el registro';
    }
    public function update($id, $request){
        $modelValidation = new Tema();
        $data = $modelValidation->where([
            ['codigo', '=', $request['codigo']],
            ['id', '<>', $id]
        ]);
        if (count($data) > 0) {
            return "El código ya se cuentra registrado";
        }


        $model = new Tema();
        $model-> set('id',$id);
        $model-> set('codigo',$request['codigo']);
        $model-> set('nombre',$request['nombre']);
        $status = $model->update();
        return $status ? 'Registro actualizado':'Error al guardar el actualizado';
    }
    public function delete($id){
        $model = new Tema();
        $model-> set('id',$id);
        $status = $model->delete();
        return $status ? 'Registro eliminado':'Error al eliminar el registro';
    }
}