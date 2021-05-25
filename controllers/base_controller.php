<?php

namespace controllers;

use \Exception;

interface IController
{
    public function index();
    public function detail($id);
    public function create($request);
    public function update($id, $request);
    public function delete($id);
}

class BaseController implements IController
{
    public function index(){
        throw new Exception("El metodo index no esta definido");
        
    }
    public function detail($id){
        throw new Exception("El metodo detail no esta definido");
    }
    public function create($request){
        throw new Exception("El metodo create no esta definido");
    }
    public function update($id, $request){
        throw new Exception("El metodo update no esta definido");
    }
    public function delete($id){
        throw new Exception("El metodo delete no esta definido");
    }
}