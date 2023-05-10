<?php

namespace App\Http\Controllers;
use App\Models\Listaprecio;

use Illuminate\Http\Request;

class ListaprecioController extends Controller
{
    //
    public function index()
    {
        return view('clientes._form',[
            'listas' => Listaprecio::first()->paginate()

        ]);
    }
}
