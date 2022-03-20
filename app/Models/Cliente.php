<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = [
        'nome',
        'cpf'
    ];


    public function cart()
    {
        return $this->belongsTo(Cart::class,'id_cliente','id');
    }



}
