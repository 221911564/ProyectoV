<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'fn',
        'genero',
        'celular',
        'correo',
        'contrasena',
        'img',
        'id_tipo',
        'activo'
    ];
}
