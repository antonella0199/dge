<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable =[
        'tipoEst_id',
        'barrio_id',
        'nombre',
        'numero',
        'direccion',
        'horarios',
        'telefono',
        'descripcion'
    ];

    public function tipoEst()
    {
        return $this->belongsTo(TipoEst::class);
    }

    public function barrio()
    {
        return $this->belongsTo(Barrio::class);
    }
    public function usuarioxestablecimientos()
    {
        return $this->hasMany(UsuarioxEstablecimiento::class);
    }
}
