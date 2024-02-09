<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Home</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <x-cards
                id="{{$article->id}}"
                name="{{$article->name}}"
                price="{{$article->price}}"
                description="{{$article->description}}"
                category="{{$article->category->name}}"
                link="{{route('show', $article)}}"
                />
            </div>
        @endforeach
    </div>
</div>

</x-layout>