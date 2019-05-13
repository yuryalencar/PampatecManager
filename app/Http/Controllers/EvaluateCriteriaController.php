<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\EvaluateCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluateCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criterias = EvaluateCriteria::paginate();
        return view('evaluate.criteria.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluate.criteria.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param HDCategoryRequest $request
     * @return Helper
     */
    public function store(Request $request)
    {
//        $category = $request->except('_token', 'levels');
//
//        DB::beginTransaction();
//
//        try {
//            $categoryResult = Category::create($category);
//            if(!is_null($request->levels)){
//                for ($i = 0;  $i < count($request->levels); $i++){
//                    $categoryResult->levels()->attach($request->levels[$i]);
//                }
//            }
//        } catch (\Exception $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.save"));
//        } catch (\Error $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.save"));
//        }
//
//        DB::commit();
//
//        if ($categoryResult) {
//            return Helper::throwSuccess(Helper::msg("create"), redirect()->route('helpdesk.category.index'));
//        } else {
//            return Helper::throwError(Helper::msg("error.save"));
//        }
    }

    /**
     * Display the specified resource.
     * @TODO
     * @param  \App\HDCategory $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\HDCategory $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        try {
//            $category = Category::findOrfail($id);
//            $allLevels = Level::all();
//
//            return view('manager.helpdesk.categories.form', compact('category', 'allLevels'));
//        } catch (\Exception $e) {
//            return Helper::throwError(Helper::msg("error"));
//        }

    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  \App\HDCategory $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $category = $request->except('_token', 'levels');
//
//        $categoryDatabase = Category::find($request->id);
//
//        DB::beginTransaction();
//
//        try {
//            $categoryDatabase->update($category);
//            $categoryDatabase->levels()->detach();
//
//            if(!is_null($request->levels)){
//                for ($i = 0;  $i < count($request->levels); $i++){
//                    $categoryDatabase->levels()->attach($request->levels[$i]);
//                }
//            }
//
//        } catch (\Exception $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.update"));
//        } catch (\Error $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.update"));
//        }
//        DB::commit();
//
//        if ($categoryDatabase) {
//            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('helpdesk.category.index'));
//        } else {
//            return Helper::throwError(Helper::msg("error.update"));
//        }

    }


    /**
     * Remove the specified resource from storage.
     * @param  \App\HDCategory $category
     * @return \Illuminate\Http\Response
     * Notificacao ao ser excluida automaticamente passa para desativada
     */
    public function destroy($id)
    {
//
//        $category = Category::findOrfail($id);
//
//        try {
//
//            $res = $category->delete();
//
//            if ($res) {
//                return Helper::throwSuccess(Helper::msg("delete"));
//            } else {
//                return Helper::throwError(Helper::msg("error.delete"));
//            }
//        } catch (\Exception $e) {
//            return Helper::throwError(Helper::msg("error.restore"));
//        }
//
    }

    /**
     * @param $id
     * @return mixed
     */
    public function restore($id)
    {
//        DB::beginTransaction();
//        try {
//            $res = Category::withTrashed()->find($id)->restore();
//        } catch (\Exception $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.update"));
//        } catch (\Error $e) {
//            DB::rollback();
//            return Helper::throwError(Helper::msg("error.update"));
//        }
//        DB::commit();
//
//        if ($res) {
//            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('helpdesk.category.index'));
//        } else {
//            return Helper::throwError(Helper::msg("error.update"));
//        }
    }
}
