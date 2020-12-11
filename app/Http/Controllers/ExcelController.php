<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

use App\UsuariosModel;

class ExcelController extends Controller
{
    public function excel(Request $request){
        Excel::create('Excel de empleados', function($excel) use($request){
            $excel->sheet('Todos', function($sheet) use($request){
                $usuarios = UsuariosModel::all();
                $sheet->fromArray($usuarios);
            });
        })->export('xls');
    }
}
