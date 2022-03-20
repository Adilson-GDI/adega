<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartsController extends Controller
{
    public function ConsultaCarrinho($id)
    {
 
    $carrinho = Cart::with('cliente','produtos')->whereHas('cliente')->where('id_cliente', '=', $id)->Where('status','=','0')->get();

    return response($carrinho, 201)->header('Content-Type', 'application/json');

    }
}
