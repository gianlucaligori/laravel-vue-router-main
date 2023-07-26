<?php

namespace App\Http\Controllers\Guest;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CocktailsController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::all();

        return view('cocktails.index', compact('cocktails'));
    }
}
