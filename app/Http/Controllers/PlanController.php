<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    
    public function index () {
        return view('plan');
    }

    public function select($plan)
    {
        session(['selected_plan' => $plan]);

        return redirect()->route('register');
    }
}