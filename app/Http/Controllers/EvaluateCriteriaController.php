<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\EvaluateCriteriaRequest;
use App\Models\EvaluateCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluateCriteriaController extends Controller
{
    public function index()
    {
        $criterias = EvaluateCriteria::paginate();
        return view('evaluate.criteria.index', compact('criterias'));
    }

    public function deleted()
    {
        $criterias = EvaluateCriteria::onlyTrashed()->paginate();
        return view('evaluate.criteria.deleted', compact('criterias'));
    }

    public function create()
    {
        return view('evaluate.criteria.form');
    }

    public function store(EvaluateCriteriaRequest $request)
    {
        $evaluateCriteria = $request->except('_token');
        $evaluateCriteria['user_id'] = auth()->user()->id;

        DB::beginTransaction();
        try {
            $evaluateCriteriaResult = EvaluateCriteria::create($evaluateCriteria);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        if ($evaluateCriteriaResult) {
            return Helper::throwSuccess(Helper::msg("create"), redirect()->route('evaluate.criteria.index'));
        } else {
            return Helper::throwError(Helper::msg("error.save"));
        }
    }

    /**
     * Display the specified resource.
     * @TODO
     * @param \App\HDCategory $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function edit($id)
    {
        try {
            $evaluateCriteria = EvaluateCriteria::findOrfail($id);
            return view('evaluate.criteria.form', compact('evaluateCriteria'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

    public function update(EvaluateCriteriaRequest $request)
    {
        $evaluateCriteriaData = $request->except('_token');
        $evaluateCriteriaDatabase = EvaluateCriteria::find($request->id);

        DB::beginTransaction();

        try {
            $result = $evaluateCriteriaDatabase->update($evaluateCriteriaData);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();

        if ($result) {
            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('evaluate.criteria.index'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }

    }


    public function destroy($id)
    {
        $evaluateCriteria = EvaluateCriteria::findOrfail($id);

        try {
            $result = $evaluateCriteria->delete();
            if ($result) {
                return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('evaluate.criteria.index'));
            } else {
                return Helper::throwError(Helper::msg("error.delete"));
            }
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.restore"));
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            $result = EvaluateCriteria::withTrashed()->find($id)->restore();
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('evaluate.criteria.deleted'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }
}
