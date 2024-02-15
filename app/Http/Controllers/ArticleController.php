<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{       public function __construct()
    {
        $this->middleware('auth')->except('home','login','register','show', 'article', 'index');
    } 
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('is_accepted', true)
                            ->orderBy('created_at', 'desc')
                            ->paginate(6);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {   
        
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
