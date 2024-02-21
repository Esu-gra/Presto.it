<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateForm extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $description;
    public $category_id;
    public $categories;
    public $images = [];
    public $temporary_images;
    public $article;
    public $category;

    protected $rules = [
        'name' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required',
        'description' => 'required|min:5|max:255',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'name.required' => 'Il titolo è richiesto',
        'name.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'category_id.required' => 'Seleziona una categoria',
        'description.required' => 'La descrizione è richiesta',
        'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
        'description.max' => 'La descrizione non può superare i 255 caratteri',
        'temporary_images.required' => 'L`immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L`immagine deve essere massimo di 1 MegaByte',
        'images.image' => 'L`immagine deve essere un`immagine',
        'images.max' => 'L`immagine deve essere massimo di 1 MegaByte',
    ];

    public function updatedTemporaryImages()
    {
        $this->validateOnly('temporary_images.*');

        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }

    public function removeImage($key)
    {
        if (array_key_exists($key, $this->images)) {
            unset($this->images[$key]);
        }
    }

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $validatedData = $this->validate();

        $article = Article::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
            'user_id' => Auth::user()->id,
        ]);

        if(count($this->images)){
            foreach ($this->images as $image) {
                // dd($this->article);
                // $article->images()->create(['path' => $image->store('img', 'public')]);
                $newFileName = "articles/{$article->id}";
                $newImage = $article->images()->create(['path'=>$image->store($newFileName , 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 600, 400),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);

                
                


                
    
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
            session()->flash('message', 'Grazie. Il tuo articolo sarà revisionato a breve');
            return redirect()->route('create');
        }

    public function render()
    {
        return view('livewire.create-form', [
            'categories' => $this->categories,
        ]);
    }
}