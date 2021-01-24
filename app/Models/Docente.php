<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    #protected $table = 'docente';
    public $timestamps = false;

    public function persona() {
        return $this->belongsTo(Persona::class);
    }

    public function alumnoGrupo() {
        return $this->belongsTo(AlumnoGrupo::class);
    }
}
