<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function rules(){[
        'review'=>'required|string'
    ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)

    {
        $article = Article::findOrFail($article->id);
        return view('article.reviewForm', compact('article'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {


        $article->reviews()->create([
        'review'=>$request->review,
        'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('create_review', $article)->with('message','Grazie, la tua recensione è stata aggiunta!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
