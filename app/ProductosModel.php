<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
            'clave',
            'nombre',
            'precio',
            'tamaño',
            'img'
    ];


    public function scopeBuscar($query, $buscar){
        if(trim($buscar) != ""){
            $query->where(\DB::raw("nombre"), "like", "%$buscar");
        }
    }

}
