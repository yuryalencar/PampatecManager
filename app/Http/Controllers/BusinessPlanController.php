<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\BusinessPlan;
use App\Models\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessPlanController extends Controller
{

    public function index()
    {
        $allplans = BusinessPlan::all();
        return view('plano_de_negocio/planosexistentes', compact('allplans'));
    }

    public function novoplano()
    {
        $allhelp = Help::all();
        return view('plano_de_negocio/novoplano', compact("allhelp"));
    }

    public function store(Request $request)
    {
        $dataToStore = $request->except('_token', 'entrepreneursEmail');
        DB::beginTransaction();

        try {
            $result = BusinessPlan::create($dataToStore);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("store"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }

    public function edit($id)
    {
        $allhelp = Help::all();
        $plano = BusinessPlan::where('id', $id)->first();
        return view('plano_de_negocio/novoplano', compact('plano', 'allhelp'));
    }

    public function update(Request $request)
    {
        $dataToStore = $request->except('_token', 'entrepreneursEmail');
        DB::beginTransaction();

        try {
            $result = BusinessPlan::where('id', $request->id)->first()->update($dataToStore);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }

    public function destroy(Request $request)
    {

        DB::beginTransaction();

        try {
            $planDestroyed = BusinessPlan::findOrfail($request->id);
            $result = $planDestroyed->delete();
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.delete"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.delete"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.delete"));
        }
    }

}
