<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'id_usuario',
        'id_clase',
        'estado',
    ];

    // Relación inversa con usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    // Relación inversa con clase
    public function clase()
    {
        return $this->belongsTo(Clase::class, 'id_clase');
    }
}