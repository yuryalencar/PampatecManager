<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function update(Request $request){
        $helpUpdate = $request->except('_token', 'id');
        Help::where('id', $request->id)->update($helpUpdate);
        return redirect()->route('listar.ajuda');
    }

    public function abrirForm($id){

        $help = Help::where('id', $id)->first();
        return view('plano_de_negocio/help/form', compact('help'));
    }

    public function listar(){
        $allhelps = Help::all();
        return view('plano_de_negocio/help/index', compact('allhelps'));
    }

}
