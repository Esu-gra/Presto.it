<x-layout>
    <header class="header d-flex align-items-center ">
        <div class="container mb-4">
            <div class="row justify-content-center ">
                <div class="col-12  text-center text-danger">
                    <h1 class="display-2 fw-bold text-white">Presto.it</h1>
                    <h4 class="text-white">Dall'essenziale all'eccezionale: trova tutto qui</h4>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('access.denied'))
        <div class="alert alert-danger">
            {{ session('access.denied') }}
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-cards name="{{ $article->name }}" 
                        {{-- price="{{$article->price}}" --}} {{-- description="{{$article->description}}" --}}
                        {{-- category="{{$article->category->name}}" --}} link="{{ route('show', $article) }}" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
