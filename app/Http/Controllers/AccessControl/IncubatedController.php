<?php

namespace App\Http\Controllers\AccessControl;

use App\Models\EvaluateCriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IncubatedController extends Controller
{
    public function indexCompany()
    {
        $criterias = EvaluateCriteria::paginate();
        return view('control_access.companies.index', compact('criterias'));
    }

    public function indexResearch()
    {
        $criterias = EvaluateCriteria::paginate();
        return view('control_access.researchs.index', compact('criterias'));
    }
}
