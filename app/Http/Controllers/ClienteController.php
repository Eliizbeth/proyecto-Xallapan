<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Cliente;
use App\Models\ListaPrecio;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.index',[
            'clientes' => Cliente::latest('id')
            ->when(request('search'), function($query){
                return $query->where('NoCliente','like', '%'. request('search'). '%');

            })
            ->paginate(5)

           
        ]);
    }

    public function create(Cliente $cliente)
    {
        return view('clientes.create', ['cliente' => $cliente, 'listas'=>ListaPrecio::all(), 'ultimocliente'=>DB::table('clientes')->get()->last()]);
        @dump($request);
    }

    public function store(Request $request)
    {
        $cliente = $request->user()->clientes()->create([
            'NoCliente'=>$request->NoCliente,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono_fijo' => $request->telefono_fijo,
            'CodigoListaPrecio' => $request->CodigoListaPrecio,

        ]);
       return redirect()->route('clientes.index', $cliente);
       
    }


    public function edit(Cliente $cliente)
    {
       return view('clientes.edit', ['cliente' => $cliente, 'listas'=>ListaPrecio::all(), 'ultimocliente'=>DB::table('clientes')->get()->last()]);
    }


    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono_fijo' => $request->telefono_fijo,
            'CodigoListaPrecio' => $request->CodigoListaPrecio,

        ]);

        return redirect()->route('clientes.index', $cliente);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back();
    }
        
}
