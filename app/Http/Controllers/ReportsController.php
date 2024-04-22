<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\facades\App;

class ReportsController extends Controller
{
    //
    public function print_cardex($id){
        $mystudents=Student::find($id);
        $data=[
            'tittle'=> 'cardex del estudiante',
            'student'=>$mystudents
        ];
        //GENERANDO PDF
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex', $data);
        return $pdf->stream();
    }
}
