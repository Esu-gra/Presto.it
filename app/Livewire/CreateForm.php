<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateForm extends Component
{   use WithFileUploads;
    public $name;
    public $price;
    public $description;
    public $category_id; // Aggiunta della variabile per memorizzare l'ID della categoria selezionata
    public $categories; // Variabile per memorizzare tutte le categorie
    public $images = [];
    public $temporary_images;
    public $article;
    public $category;

    protected $rules = [
        'name' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required', // Regola per la validazione della categoria
        'description' => 'required|max:255',
        'description' => 'required|min:5', // Aggiunta della regola per la lunghezza massima
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
        
    ];
    
    protected $messages = [
        'name.required' => 'Il titolo è richiesto',
        'name.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'category_id.required' => 'Seleziona una categoria',
        'description.required' => 'La descrizione è richiesta', // 'description.max' => 'La descrizione non può superare i 255 caratteri'
        'temporary_images.required'=>'L`immagine é richiesta',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'L`immagine deve essere  massimo di 1 MegaByte',
        'images.image'=>'L`immagine deve essere un`immagine',
        'images.max'=>'L`immagine deve essere  massimo di 1 MegaByte',
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        };
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

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

        if ($this->category) {
            $this->article = Category::find($this->category)->articles()->create($this->validate());
            if(count($this->images)){
                foreach($this->images as $image){
                    $this->article->images()->create(['path'=>$image->store('images', 'public')]);
                }
            }
        }
        

        

        
        // Article::create([
        //     'name' => $this->name,
        //     'description'=>$this->description,
        //     'price' => $this->price,
        //     'category_id' => $this->category_id,
        //     'user_id' => Auth::user()->id,
        // ]);
        
        

        

        return redirect(route('create'))->with('message', 'Aggiunto');
    }

    
    public function render()
    {
        return view('livewire.create-form', [
            'categories' => $this->categories,
        ]);
    }
}
