<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use Illuminate\Http\Request;

class DecorationsController extends Controller
{
    public function index()
    {
        $decorations = Decoration::all();
        return view ('decorations.decorations',compact('decorations'));
    }

}
