<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    protected $fillable = [
        'qtd'
    ];



    public function produtos()
    {
              
        return $this->hasOne(Produto::class, 'id','id_produto');
    }
}
