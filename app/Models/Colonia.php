<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    use HasFactory;

    #protected $table = 'colonia';
    public $timestamps = false;

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
}
