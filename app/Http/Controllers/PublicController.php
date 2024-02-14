<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function home()
{
    $articles = Article::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
    return view('welcome', compact('articles'));
}

public function searchArticles (Request $request)
{   //!da aggiungere paginazione
    $articles = Article::search($request->searched)->where('is_accepted', true)->get();
    return view('article.index', compact('articles'));
}



}
