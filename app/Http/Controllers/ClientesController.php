<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{

    public function ListaClientes()
    {
    $clientes = Cliente::all();

    return response($clientes, 201)->header('Content-Type', 'application/json');

    }
}
