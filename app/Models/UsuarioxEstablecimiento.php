<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioxEstablecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'establecimiento_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }
}
