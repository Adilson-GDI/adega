<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartsController extends Controller
{
    public function ConsultaCarrinho()
    {
    $carrinho = Cart::with('produtos','cliente')->get();

    return response($carrinho, 201)->header('Content-Type', 'application/json');

    }
}
