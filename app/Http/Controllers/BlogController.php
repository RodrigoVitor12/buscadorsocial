<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('blog.blog');
    }

    public function findLeads () {
        return view('blog.findLeads');
    }

    public function betterHotel () {
        return view('blog.betterHotel');
    }

    public function journey () {
        return view('blog.journey');
    }
    public function dica () {
        return view('blog.dica');
    }
}