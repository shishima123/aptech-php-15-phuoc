<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $post = Category::with('Posts')->get();
        return $post;
        // dd($post);
    }

}
