<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\ProductosModel;
use App\UsuariosModel;
use App\TiposModel;

class SistemController extends Controller{

    // INICIO
    public function home(){
        $usus  = UsuariosModel::all();
        $productos = ProductosModel::all();

        return view('content.home')
        ->with(['usus' => $usus])
        ->with(['productos' => $productos]);
    }
    // CONOCENOS
    public function conocenos(){
        return view('content.conocenos');
    }
    // INDEX
    public function index(){
        return view('content.index');
    }
}
