<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
    protected $fillable = [
        'nome',
        'valor'
    ];




    public function marca()
    {
              
        return $this->hasOne(Marca::class, 'id','id_marcas');
    }

    public function imagem()
    {
              
        return $this->hasOne(Imagen::class, 'id','id_imagens');
    }



}



