<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";
    protected $fillable = [
        'nome'
    ];

    public function produtos()
    {
        return $this->belongsTo(Produto::class,'id_produto','id');
    }

}
