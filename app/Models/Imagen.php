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

    public function imagen()
    {
       
       
        return $this->hasOne(Imagen::class, 'id_produto', 'id');
    }


    public function produto()
    {
        return $this->hasOne(Produto::class,'id','id_produto');
    }

}
