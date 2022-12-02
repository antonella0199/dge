<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'barrio_id',
        'asunto',
        'descripcion',
        'imagen_url',
        'fechaIni'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barrio()
    {
        return $this->belongsTo(Barrio::class);
    }

}
