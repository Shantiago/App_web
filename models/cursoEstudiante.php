<?php
namespace models;

use models\Model;

class CursoEstudiante extends Model
{
    protected $id;
    protected $curso_id;
    protected $estudiante_id;

    public function __construct()
    {
        $this->superClass($this);
        $this->table = 'cursos_estudiantes';
    }
}