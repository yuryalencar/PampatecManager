<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoNegocioController extends Controller
{
    public function novoplano(){
        return view('plano_de_negocio/novoplano');
    }
}
