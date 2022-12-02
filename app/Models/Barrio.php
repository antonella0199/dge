<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $fillable = [
        'municipio_id',
        'nombre',
    ];
    protected $table = "barrios";
    
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class);
    }
}
