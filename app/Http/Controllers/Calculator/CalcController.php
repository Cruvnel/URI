<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function soma(int $v1, int $v2)
    {

        $soma = $v1 + $v2;
        
             // dd($soma); 

        return view('calculator.soma', ['valor1' => $v1, 'valor2' => $v2, 'soma' => $soma]);
    }
}
