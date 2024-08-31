<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        $data = request()->validate(['title' => 'string|required']);
        category::create($data);
        return redirect()->route('category.index');
    }
}
