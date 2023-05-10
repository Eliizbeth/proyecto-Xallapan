<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\PrecioCliente;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('auth.login');
        
    }
    public function clientes()
    {
        $cliente = Cliente::get();
        return view('clientes',['clientes' => $cliente]);
        @dump($cliente);
    }
    public function precioCliente()
    {
        $precioCliente = PrecioCliente::get();
        return view('agregarCliente');
        @dump($precioCliente);
    }
    public function aquabonos()
    {
        return view('aquabonos');
        
    }
    public function agregarcliente()
    {
        return view('agregarcliente');
        
    }
   




}
