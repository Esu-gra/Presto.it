<x-layout>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($category->articles as $article)
                <div class="col-12 col-md-4 ms-4">
                    <x-cards
                    id="{{$article->id}}"
                    name="{{$article->name}}"
                    price="{{$article->price}}"
                    description="{{$article->desciption}}"
                    category="{{$article->category->name}}"
                    link="{{route('show', $article)}}"
                    />
                </div>
            @endforeach
        </div>
    </div>

    
</x-layout>