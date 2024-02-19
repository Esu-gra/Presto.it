<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Tutti i nostri articoli!</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
            <div class="col-10 col-md-4 mb-2 d-flex justify-content-center">
                <div class="card shadow">
                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/1000/300'}}" class="card-img-top p-2 img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$article->name}}</h5>
                        <div class="d-flex justify-content-center mt-5">
                            <a href="{{route('show', $article)}}" class="btn btn-primary">Vuoi saperne di più?</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="d-flex justify-content-center">
                <p class="display-6 text-danger">Nessun articolo trovato</p> <br>
            </div>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>
</x-layout>