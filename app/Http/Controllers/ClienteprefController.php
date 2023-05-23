<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientepref;
use App\Models\PrecioCliente;
use App\Models\Cliente;
use App\Models\User;
use DB;


class ClienteprefController extends Controller
{
    public function index(){
        return view('clienteesp.index',[
            'precios'=>Clientepref::latest(
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
                                ->paginate(100)
               
                            
        ]);
       

    }
    public function create(Clientepref $precio){
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

    
    //FUNCIÓN ELIMINAR CLIENTES ESPECIALES
    public function destroy($CodigoBarras){
        Clientepref::destroy($CodigoBarras);
        return redirect(route('clienteesp.index'))->with('message','Precio eliminado');
    }

}
