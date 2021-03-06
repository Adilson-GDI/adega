<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Marca;
use App\Models\Produto;


class ProdutosController extends Controller
{


    public function ConsultaProduto($id)
    {

   $produtos = Produto::with('marca','imagem')->where('id', '=', $id)->get();


    return response($produtos, 201)->header('Content-Type', 'application/json');

    }
    
    public function ListaProdutos()
    {
    $produtos = Produto::with('marca','imagem')->get();
 //   $marcas = $produtos->marca()->first(); 


    return response($produtos, 201)->header('Content-Type', 'application/json');

    }

    public function ListaImagens()
    {
    $produtos = Imagen::all();

    return response($produtos, 201)->header('Content-Type', 'application/json');

    }

    public function ListaMarcas()
    {
    $marcas = Marca::all();

    $produtos = $marcas->produtos;
    return response($produtos, 201)->header('Content-Type', 'application/json');

    }
}
