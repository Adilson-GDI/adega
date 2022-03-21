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


    public function AddCarrinho(Request $data)
    {

   
   $carrinho=Cart::create([
        'id_cliente'=>$data->id_cliente,
        'id_produto'=>$data->id_produto,
         'qtd'=>$data->qtd
    ]);
  
    return response($carrinho, 201)->header('Content-Type', 'application/json');

    }
}
