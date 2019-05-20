<?php

namespace App\Http\Controllers;

use App\Models\BusinessPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessPlanController extends Controller
{
    public function novoplano()
    {
        return view('plano_de_negocio/novoplano');
    }

    public function salvar(Request $request)
    {

        $plano = $request->except('_token');

        DB::beginTransaction();


        try {
            $planResult = BusinessPlan::create($plano);
        } catch (\Exception $e) {
            DB::rollback();
            //return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            //return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        if($planResult){
            return redirect()->route('novo.plano');
        }

    }

    public function planosexistentes(){
        $allplans = BusinessPlan::all();
        return view('plano_de_negocio/planosexistentes', compact('allplans'));
    }


    public function editarplano(Request $request){

        $plano = BusinessPlan::where('id', $request->id)->first();
        return view('plano_de_negocio/novoplano', compact('plano'));

    }

    public function update(Request $request){

        $planUpdate = $request->except('_token', 'id');
        BusinessPlan::where('id', $request->id)->update($planUpdate);
        return redirect()->route('listar.plano');
    }

    public function destroy(Request $request){
        $planDestroyed = BusinessPlan::findOrfail($request->id);
        $planDestroyed->delete();
        return redirect()->route('listar.plano');
    }

}
