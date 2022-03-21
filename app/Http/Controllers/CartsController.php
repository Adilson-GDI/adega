<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Cliente;
use App\Models\Produto;

class CartsController extends Controller
{
    public function ConsultaCarrinho($id)
    {
 
    $carrinho = Cart::with('cliente','produtos')->whereHas('cliente')->where('id_cliente', '=', $id)->Where('status','=','0')->get();

    return response($carrinho, 201)->header('Content-Type', 'application/json');

    }


    public function AddCarrinho($id)
    {
 
    $cliente = Cliente::find(1);
    $produto = Produto::find(1);

    //$id_cliente=$produto->id;
   
    $carrinho=Cart::create([
         'id_cliente'=>$cliente->id,
         'id_produto'=>$produto->id,
        'qtd'=>'1'
    ]);
  
   // Cart::with('cliente','produtos')->whereHas('cliente')->where('id_cliente', '=', $id)->Where('status','=','0')->get();

    return response($carrinho, 201)->header('Content-Type', 'application/json');

    }
}
