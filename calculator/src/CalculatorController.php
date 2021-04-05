<?php

namespace Dowi\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a, $b){
        $result= $a + $b;
        return view('forum::add', compact('result'));
    }
    public function subtract($a, $b){
        $result= $a - $b;
        return view('calculator::add', compact('result'));
    }
}
