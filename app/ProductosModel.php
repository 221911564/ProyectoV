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


    public function scopeClave($query, $clave){
        if(trim($clave) != ""){
            $query->where(\DB::raw("clave"), "LIKE", "%$clave");
        }
    }

    public function scopeNombre($query, $nombre){
        if(trim($nombre) != ""){
            $query->where(\DB::raw("nombre"), "LIKE", "%$nombre");
        }
    }

    public function scopeTama($query, $tama){
        $query->where("tamaño", $tama);
    }

}
