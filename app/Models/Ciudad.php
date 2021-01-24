<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';
    public $timestapms = false;

    public function estado() {
        return $this->belongsTo(Estado::class);
    }
    public function colonias() {
        return $thsi.hasMany(Colonia::class);
    }
}