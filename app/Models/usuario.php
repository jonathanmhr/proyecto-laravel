<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{
    use HasFactory;

    protected $table = 'usuarios'; // Si el nombre de la tabla no sigue la convención plural

    protected $fillable = [
        'nombre',
        'correo_electronico',
        'contrasena',
        'rol',
        'telefono',
        'direccion',
    ];

    // Relación de uno a muchos con reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_usuario');
    }

    // Relación de uno a muchos con pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_usuario');
    }

    // Relación de uno a muchos con comentarios
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }
}