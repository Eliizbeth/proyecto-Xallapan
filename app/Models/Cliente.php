<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Cliente extends Model
{
    use softDeletes;

    protected $fillable = [
        'NoCliente',
        'nombre',
        'direccion',
        'telefono_fijo',
        'CodigoListaPrecio',
    ];
    use HasFactory;
    protected $table = 'clientes';
    
}
