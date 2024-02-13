<x-layout>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12 text-center text-danger">
                <h1>Presto.it</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-cards
                        name="{{$article->name}}"
                        {{-- price="{{$article->price}}" --}}
                        {{-- description="{{$article->description}}" --}}
                        {{-- category="{{$article->category->name}}" --}}
                        link="{{route('show', $article)}}"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
