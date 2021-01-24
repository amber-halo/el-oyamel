<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoGrupo extends Model
{
    use HasFactory;

    protected $table = 'alumno_grupo';
    public $timestamps = false;

    public function docente() {
        return $this->hasOne(Docente::class);
    }

    public function alumnos() {
        return $this->hasMany(Alumno::class);
    }
}
