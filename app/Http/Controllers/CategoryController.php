<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        return view('welcome')->with('category', $category);
    }
}
