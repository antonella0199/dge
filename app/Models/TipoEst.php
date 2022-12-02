<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEst extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo'
    ];

    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class);
        
    }
}
