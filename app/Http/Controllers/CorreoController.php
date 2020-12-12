<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CorreoController extends Controller{
    
    public function correo(Request $request){
        $data = array(
            'contacto' => 'CONTACTO DISATOYS',
            'nombre'   => $request->get('nombre'),
            'correo'   => $request->get('correo'),
            'asunto'   => $request->get('asunto'),
            'mensaje'   => $request->get('mensaje')
        );

        Mail::send('correo.email',$data, function($message) use($data){
            $message->from('eriksalazar3@gmail.com', 'Erik Sahian Salazar');
            $message->to($data['correo'], $data['nombre']);
            $message->subject($data['asunto']);
        });
        if(Mail::failures()){
            return "Error!";
        }
        else{
            return view('content.home');
        }
    }
}
