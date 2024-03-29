<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Decoration;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function index()
    {
        $decorations = Decoration::all();
        return view ('components.prices.prices',compact('decorations'));
    }


}
