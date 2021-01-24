<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    #protected $table = 'persona';
    public $timestamps = false;

    public function direccion() {
        return $this->hasOne(Direccion::class);
    }

    public function alumno() {
        return $this->hasOne(Alumno::class);
    }

    public function docente() {
        return $this->hasOne(Docente::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }

}
