<?php

namespace App\Http\Controllers;

use App\Models\BusinessPlan;
use App\Models\PlanoNegocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanoNegocioController extends Controller
{
    public function novoplano()
    {
        return view('plano_de_negocio/novoplano');
    }

    public function salvar(Request $request)
    {
//        dd($request);

        $plano = $request->except('_token');

        DB::beginTransaction();
        $planResult = BusinessPlan::create(['name' => 'example']);
//        dd($planResult);
        try {
//            $planResult = PlanoNegocio::create(['customerSegment' => 'example']);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

    }
}
