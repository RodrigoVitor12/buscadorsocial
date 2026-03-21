<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        $userTotalCount = User::count();
        $userTotalCountActive = User::where('status', 'ativo')->count();
        $users = User::all();
        return view('admin.index', [
            "userTotalCount" => $userTotalCount,
            'userTotalCountActive' => $userTotalCountActive,
            'users' => $users
        ]);
    }

    public function updateInfoUser($id) {
        $user = User::find($id);
        return view('admin.update', [
            'user' => $user
        ]);
    }

    public function update(Request $request) {
        
    }
}