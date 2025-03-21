<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    protected $table = 'clases';

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_instructor',
        'hora_inicio',
        'hora_fin',
        'capacidad_maxima',
        'precio',
    ];

    // Relación de uno a muchos con reservas
    public function reservas(){
        return $this->hasMany(Reserva::class, 'id_clase');
    }

    // Relación de uno a muchos con pagos
    public function pagos(){
        return $this->hasMany(Pago::class, 'id_clase');
    }

    // Relación de uno a muchos con comentarios
    public function comentarios(){
        return $this->hasMany(Comentario::class, 'id_clase');
    }

    // Relación inversa con instructor
    public function instructor(){
        return $this->belongsTo(Usuario::class, 'id_instructor');
    }
}