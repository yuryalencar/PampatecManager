<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function update(Request $request)
    {
        try {
            $helpUpdate = $request->except('_token', 'id');
            $result = Help::where('id', $request->id)->update($helpUpdate);
            if ($result) {
                return Helper::throwSuccess(Helper::msg("update"), redirect()->route('listar.ajuda'));
            } else {
                return Helper::throwError(Helper::msg("error.update"));
            }
        } catch (\Exception $exception) {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }

    public function abrirForm($id)
    {

        $help = Help::where('id', $id)->first();
        return view('plano_de_negocio/help/form', compact('help'));
    }

    public function listar()
    {
        $allhelps = Help::all();
        return view('plano_de_negocio/help/index', compact('allhelps'));
    }

}
