<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';
    public $timestamps = false;

    public function colonia() {
        return $this->hasOne(Colonia::class);
    }

    public function persona() {
        return $this->belongsTo(Persona::class);
    }
}
