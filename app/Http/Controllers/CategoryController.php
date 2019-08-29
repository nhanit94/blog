<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data=[];
        $data['categories'] = Category::all();
        return view('frontend.categories.list', $data);
    }
}
