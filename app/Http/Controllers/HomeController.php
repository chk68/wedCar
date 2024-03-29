<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Decoration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $decorations = Decoration::all();
        $comments = Comment::latest()->get();
        return view('home.home',compact('decorations','comments'));
    }
}
