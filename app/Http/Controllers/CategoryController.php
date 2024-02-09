<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    
    public function categoryShow(Category $category)
    {
       
        return view('categoryShow',compact('category'));
    } 
}
