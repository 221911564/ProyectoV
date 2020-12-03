<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\UsuariosModel;

class LoginController extends Controller
{
    public function login(){
        $usus = UsuariosModel::all();

        return view('login.login');
    }

    public function enviar(Request $request){

        $correo = $request->input('correo');
        $pass = $request->input('contrasena');

        $consulta = UsuariosModel::where('correo', '=',$correo)
            ->where('contrasena', '=', $pass)
            ->get();

        if(count($consulta) == 0){
            return view('login.login');
        }
        else{
            $request->session()->put('session_id', $consulta[0]->id_usuario);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_tipo', $consulta[0]->id_tipo);

            $session_id   = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');
            
            if($session_tipo == 1){
                //return view('administrador');
                return 'admin';
            } else {
                if($session_tipo == 2){
                    //return view('empleados');
                    return 'empleados';
                }
            }
        }
    }
    public function logout(Request $request){
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');

        return view('login.login');
    }
}
