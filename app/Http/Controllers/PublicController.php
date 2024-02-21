<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function home()
{
    $articles = Article::where('is_accepted', true)->orderByDesc('created_at')->take(6)->get();
    return view('welcome', compact('articles'));
}

    public function searchArticles(Request $request)
    {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(5);
        return view('article.index', compact('articles'));
    }

    public function setLanguage($lang)
    {
        
        session()->put('locale', $lang);
        return redirect()->back();
        

    }
}
