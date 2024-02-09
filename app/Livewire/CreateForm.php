<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{   
    public $name;
    public $price;
    public $description;
    public $category_id; // Aggiunta della variabile per memorizzare l'ID della categoria selezionata
    public $categories; // Variabile per memorizzare tutte le categorie

    protected $rules = [
        'name' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required', // Regola per la validazione della categoria
        'description' => 'required|max:255',
        'description' => 'required|min:5' // Aggiunta della regola per la lunghezza massima
         // Aggiunta della regola per la lunghezza massima
    ];
    
    protected $messages = [
        'name.required' => 'Il titolo è richiesto',
        'name.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'category_id.required' => 'Seleziona una categoria',
        'description.required' => 'La descrizione è richiesta',
        // 'description.max' => 'La descrizione non può superare i 255 caratteri'
    ];
    

    public function mount()
    {
        $this->categories = Category::all(); // Caricamento di tutte le categorie disponibili
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();

        Article::create([
            'name' => $this->name,
            'description'=>$this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,

            'user_id' => Auth::user()->id,
        ]);

        $this->reset();

        return redirect(route('create'))->with('message', 'Aggiunto');
    }

    
    public function render()
    {
        return view('livewire.create-form', [
            'categories' => $this->categories,
        ]);
    }
}
