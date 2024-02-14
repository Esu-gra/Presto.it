<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');
    }

    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
    }

    public function becomeRevisor(Request $request){
        $message= $request->message;
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $message));
        return redirect()->back()->with('message', 'Hai richiesto di diventare revisore.');
        
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Sei diventato un revisore');
    }

    public function request(){
        return view('become_revisor');
        
    }

    // public function submit(Request $request) 
    // {
    //     // $email = $request->input('email');
    //     // $name = $request->input('name');
    //     // $message = $request->input('message');

    //     Mail::to('admin@presto.it')->send(new becomeRevisor(Auth::user()));
        


    //     return redirect('welcome');

    //     }

}
