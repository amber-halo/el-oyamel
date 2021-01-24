<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    #protected $table = 'aviso';
    public $timestamps = false;

    public function grupo() {
        try {
            return $this->hasOne(Grupo::class);
        }catch (Error $er) {
            echo "error".$er;
        }
    }
}
