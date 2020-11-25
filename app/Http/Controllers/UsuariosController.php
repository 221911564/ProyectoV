<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\UsuariosModel;
use App\TiposModel;

class UsuariosController extends Controller{


    // VISTA USUARIO

    public function usuario(){
        $usus = UsuariosModel::all();
        $tipos = TiposModel::all();
        
        return view("usuarios.usuarios")
            ->with(['tipos' => $tipos])
            ->with(['usus' => $usus]);
    }

    // VISTA EDITAR USUARIO
    public function nuevo(){
        return view("usuarios.nuevo");
    }

    //GUARDAR INFORMACION

    public function guardar(ValidarUsuarioRequest $request){
        $file = $request->file('img'); 

        $img = $file->getClientOriginalName();

        $ldate = date('Ymd_His_');
        $img2 = $ldate . $img; 

        \Storage::disk('local')->put($img2, \File::get($file)); 


            $usu = UsuariosModel::create(array(
                'matricula' => $request->input('matricula'),
                'nombre' => $request->input('nombre'),
                'app' => $request->input('app'),
                'apm' => $request->input('apm'),
                'fn' => $request->input('fn'),
                'gen' => $request->input(''),
                'tel' => $request->input(''),
                'img' => $img2,
                'email' => $request->input('email'),
                'pass' => $request->input('pass'),
                'grupo' => $request->input('grupo'),
                'activo' => 1
            ));
           
            return redirect()->route('usuarios.usuarios');
        }
    
        //BORRAR USUARIO
        public function borrar($id){
            $id = UsuariosModel::find($id);
            $id->delete();
            return redirect()->route('usuarios.usuarios');
        }
}
