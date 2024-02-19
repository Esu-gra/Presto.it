<x-layout>



   
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($category->articles as $article)
                <div class="col-12 col-md-4 ms-4">
                    <x-cards
                    id="{{$article->id}}"
                    name="{{$article->name}}"
                    price="{{$article->price}}"
                    description="{{$article->desciption}}"
                    category="{{$article->category->name}}"
                    link="{{route('show', $article)}}"
                    image="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(600,400) : 'https://picsum.photos/1000/300'}}" 
                   />
                </div>
            
            @empty

            <div class="container mt-5">
                <div class="row justify-content-center alert alert-warning">
                    <h3 class="text-center ">Non ci sono articoli con categoria {{$category->name}}</h3>
                </div>
            </div>
                
           
            @endforelse
        </div>
    </div>

    
</x-layout>