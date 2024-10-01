<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramites extends Model
{
    use HasFactory;

    protected $table = 'trámites'; // Nombre de la tabla 
    protected $primaryKey = 'id'; // Llave primaria de la tabla

    protected $fillable = ['id_visita', 'id_usuario', 'descripcion', 'estado', 'fecha_creacion']; // Campos para asignación masiva
}
