<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\ProductosModel;

class SistemController extends Controller{

    // INICIO
    public function home(){
        return view('content.home');
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
