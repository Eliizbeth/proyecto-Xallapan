<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecioCliente extends Model
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
}
