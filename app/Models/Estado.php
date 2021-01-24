<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    #protected $table = 'estado';
    public $timestamps = false;

    public function ciudades() {
        return $this->hasMany(Ciudad::class, 'estado_id', 'id');
    }
}
