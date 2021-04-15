<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
use App\ProductosModel;
class CartController extends Controller
{
    public function add(Request $request){
        $producto = ProductosModel::find($request->id_producto);
        Cart::add(
            $producto->id_producto, 
            $producto->nombre, 
            $producto->precio, 
            1,
            $producto->img, 
        );
        return redirect('cart-checkout');
    }
    public function cart(){
        return view('productos.carrito');
    }
    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
        'id' => $request->id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }
    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }
}