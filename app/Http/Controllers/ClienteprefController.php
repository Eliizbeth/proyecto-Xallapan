<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientepref;
use App\Models\Cliente;
use App\Models\User;
use DB;


class ClienteprefController extends Controller
{
    public function index(){
        return view('clientepref.index',[
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
                                                 ->orWhere('clientes.nombre','like', '%'. request('search'). '%')
                                                 ->orWhere('precioCliente.CodigoBarras','like', '%'. request('search'). '%');
        
                                })
                                ->paginate(100)
               
                            
        ]);
       

    }
    public function create(Clientepref $precio){
        return view('clientepref.create', ['clientepref' => $precio, 
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

        return redirect()->route('clientepref.index', $precio)->with('message','Agregado Correctamente');
       
    }
    public function edit(Clientepref $clientepref){

        
        return view('clientepref.edit', ['clientepref' => $clientepref,
                                          'clientes' =>Cliente::all(),
                                          'productos'=>DB::table('productos')->get(), 
                                          'rutas' =>DB::table('rutas')->get() ]);
       
    }
    public function update(Request $request,Clientepref $clientepref){
        $clientepref->update([
            'CodigoBarras' => $request->CodigoBarras,
            'Precio'       => $request->Precio,
            'Credito'      => $request->Credito,
            'PrecioCredito'=> $request->PrecioCredito,
            'claveruta'    => $request->claveruta,
            

        ]);

        return redirect(route('clientepref.index', $clientepref))->with('message','Actualizado Correctamente');
       
    }
   


    
    //FUNCIÓN ELIMINAR CLIENTES ESPECIALES
    public function destroy($precio){
        $precios = Clientepref::findOrFail($precio)->delete();
        return redirect(route('clientepref.index'))->with('message','Precio eliminado');
        
        
        /*
        Clientepref::destroy($CodigoBarras);
        return redirect(route('clienteesp.index'))->with('message','Precio eliminado');*/
    }

}
