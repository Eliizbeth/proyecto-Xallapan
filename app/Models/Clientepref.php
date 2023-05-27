<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientepref extends Model
{   
    use HasFactory;
    protected $fillable = [
        'NoCliente',
        'CodigoBarras',
        'Precio',
        'Credito',
        'PrecioCredito',
        'claveruta'
    ];
    protected $table = 'preciocliente';
    protected $primaryKey = 'id_precio';


}
