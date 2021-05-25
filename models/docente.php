<?php
namespace models;

use models\Model;

class Docente extends Model
{
    protected $id;
    protected $codigo;
    protected $nombre;

    public function __construct()
    {
        $this->superClass($this);
        $this->table = 'docentes';
    }
}