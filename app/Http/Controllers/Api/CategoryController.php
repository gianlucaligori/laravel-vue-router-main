<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::select('strCategory')->groupBy('strCategory')->get();

        return response()->json($cocktails);
    }
}
