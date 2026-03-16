<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index () {
        $myFavorites = Favorite::where('user_id', Auth::id())->get();
        return view('myfavorite', ['favorites' => $myFavorites]);
    }
}