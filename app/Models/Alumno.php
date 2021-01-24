<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    #protected $table = 'alumno';
    public $timespams = false;

    public function persona() {
        return $this->belongsTo(Persona::class);
    }

    public function grupo() {
        return $this->belongsTo(Grupo::class);
    }

    public function alumnoGrupo() {
        return $this->belongsTo(AlumnoGrupo::class);
    }
}
