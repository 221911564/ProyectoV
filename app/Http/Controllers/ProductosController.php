<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\ProductosModel;
use App\Http\Requests\ValidarProductoRequest;

class ProductosController extends Controller{

    // PRODUCTOS
    public function producto(){
        $prods = ProductosModel::all();

        return view("productos.productos")
            ->with(['prods' => $prods]);
    }

    // AGREGAR PRODUCTO
    public function nuevo(){
        return view("productos.agregar_producto");
    }
    
    public function guardar(ValidarProductoRequest $request){
        $file = $request->file('img'); 

        $img = $file->getClientOriginalName();

        $ldate = date('Ymd_His_');
        $img2 = $ldate . $img; 

    \Storage::disk('local')->put($img2, \File::get($file)); 
    $usu = ProductosModel::create(array(
        'id_tam' => $request->input('id_tam'),
        'clave' => $request->input('clave'),
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio'),
        'tamaño' => $request->input('tamaño'),
        'img'    => $img2
    ));
       
        return redirect()->route('producto');
    }
    
    //EDITAR PRODUCTO
    public function editar(ProductosModel $id){
        return view("productos.editar_producto")
            ->with(['prod' => $id]);
    }
    public function salvar(ProductosModel $id, Request $request){
        if($request->file('img1') != ''){
            
            $file = $request->file('img1');
            $img = $file->getClientOriginalName();
    
            $ldate = date('Ymd_His_');
            $img2 = $ldate . $img;

            \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
            $img2 = $request->img2; 
        }


        $con = ProductosModel::find($id->id_producto);
           $con -> clave = $request -> clave;
           $con -> nombre = $request -> nombre; 
           $con -> precio = $request -> precio; 
           $con -> img    = $img2; 
           $con -> tamaño = $request -> tamaño; 
        $con -> save();
        
        return redirect()->route("producto");
       
    }


    //BORRAR PRODUCTO
    public function borrar(ProductosModel $id){
        $id->delete();
        return redirect()->route('producto');
    }
}
