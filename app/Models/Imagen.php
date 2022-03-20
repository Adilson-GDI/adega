<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagens";
    protected $fillable = [
        'nome'
    ];

 

    public function produtos()
    {
        return $this->belongsTo(Produto::class,'id_produto','id');
    }
}
