<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('comments.comments', compact('comments'));
    }


    public function store(Request $request)
    {
        $request->validate([
             'name' => 'required|string|max:255',
             'comment'=> 'required|string'
            ]);

        Comment::create([
            'name' => $request->input('name'),
            'comment' => $request->input('comment')
        ]);

        return redirect()->route('home')->with('success', 'OK!');
    }
}
