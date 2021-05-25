<?php
namespace models;

use models\Model;

class Curso extends Model
{
    protected $id;
    protected $nombre;
    protected $docente_id;

    public function __construct()
    {
        $this->superClass($this);
        $this->table = 'cursos';
    }
}