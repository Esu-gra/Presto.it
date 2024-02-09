<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    
    public function categoryShow(Category $category)
    {
       
        return view('article.categoryShow',compact('category'));
    } 
}
