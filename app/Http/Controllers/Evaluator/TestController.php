<?php

namespace App\Http\Controllers\Evaluator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        return view("evaluator.index");
    }
}
