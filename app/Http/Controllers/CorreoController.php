<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CorreoController extends Controller{
    
    public function correo(){
        $data = array(
            'ejemplo' => ''
        );
        return view();
    }
}
