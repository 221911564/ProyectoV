<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
              'nombre',
              'precio',
              'tamaño',
              'img'
    ];
}
