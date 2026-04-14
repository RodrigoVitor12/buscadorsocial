<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index () {
        return view('search');
    }

    public function historyClick () {
        $histories = Auth::user()->clicks()->latest()->paginate(10);
        return view('historyClick', ['histories' => $histories]);
    }
}