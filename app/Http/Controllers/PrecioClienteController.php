<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrecioCliente;
use App\Models\Cliente;
use App\Models\User;
use DB;

class PrecioClienteController extends Controller
{
    public function index(){
    
        return view('clienteesp.index',[
            'precios'=>PrecioCliente::latest(
                                'preciocliente.NoCliente',
                                'preciocliente.CodigoBarras',
                                'preciocliente.Precio',
                                'preciocliente.Credito',
                                'preciocliente.PrecioCredito',
                                'preciocliente.claveruta',
                                'clientes.nombre')
                                ->join('clientes','clientes.NoCliente','=','preciocliente.NoCliente')
                                ->when(request('search'), function($query){
                                    return $query->where('preciocliente.NoCliente','like', '%'. request('search'). '%')
                                                 ->orWhere('clientes.nombre','like', '%'. request('search'). '%');
        
                                })
                                ->paginate(10)
                            
        ]);
       
    }

    public function create(PrecioCliente $precio){
        return view('clienteesp.create', ['precio' => $precio, 
                                          'clientes' =>Cliente::all(), 
                                          'productos'=>DB::table('productos')->get(), 
                                          'rutas' =>DB::table('rutas')->get()]);
       
    }

    public function store(Request $request){
        $precio = $request->user()->precios()->create([
            'NoCliente'    => $request->NoCliente,
            'CodigoBarras' => $request->CodigoBarras,
            'Precio'       => $request->Precio,
            'Credito'      => $request->Credito,
            'PrecioCredito'=> $request->PrecioCredito,
            'claveruta'    => $request->claveruta,
            

        ]);

        return redirect()->route('clienteesp.index', $precio);
       
    }


    public function edit(PrecioCliente $precio){
        return view('clienteesp.edit', ['precios' => $precio, 'precio' =>PrecioCliente::get(
            'preciocliente.NoCliente',
            'preciocliente.CodigoBarras',
            'preciocliente.Precio',
            'preciocliente.Credito',
            'preciocliente.PrecioCredito',
            'clientes.nombre')
            ->join('clientes','clientes.NoCliente','=','preciocliente.NoCliente') ]);
       
    }
   
  

    public function destroy(PrecioCliente $precio)
    {
        $precio->delete();
        return back();
    }
    
}
