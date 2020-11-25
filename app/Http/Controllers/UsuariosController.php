<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\UsuariosModel;
use App\TiposModel;

class UsuariosController extends Controller{

    public function usuario(){
        $usus = UsuariosModel::all();
        $tipos = TiposModel::all();
        
        return view("content.usuarios")
            ->with(['tipos' => $tipos])
            ->with(['usus' => $usus]);
    }
}
