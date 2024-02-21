<x-layout>

    <div class="container revisor-message bg-gradient bg-primary shadow mb-5 border rounded">
        <div class="row">
            <div class="col-12 text-light">
                <h2 class="text-center py-2">
                    {{ $article_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci' }}
                </h2>
            </div>
        </div>
    </div>

    @if ($article_to_check)
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    @if ($article_to_check->images)
                    <div class="carousel-inner">
                        @forelse ($article_to_check->images as $images)
                        <div class="carousel-item d-flex justify-content-center @if ($loop->first) active @endif">
                            <img src="{{$images->getUrl(600,400)}}" class="rounded" width="400px">
                        </div>
                        @empty
                        <div class="container alert alert-warning text-center">
                            L'utente non ha inserito immagini
                        </div>
                        @endforelse
                    </div>

                    {{-- le frecce del carosello si vedono solo se c'è più di una immagine inserita dall' utente --}}
                    @if ($article_to_check->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <i class="fa-solid fa-arrow-left fa-2xl text-black"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <i class="fa-solid fa-arrow-right fa-2xl text-black"></i>
                    </button>
                    @endif
                    @endif
                </div>
                <h5 class="card-title text-center my-3">Titolo: {{ $article_to_check->name }}</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="tc-accent">Revisona Immagini</h5>
                    <p>Adulti: <span class="{{$images->adult}}"></span> </p>
                    <p>Violenza: <span class="{{$images->violance}}"></span> </p>
                    <p>Satira: <span class="{{$images->spoof}}"></span></p>
                    <p>Medicina: <span class="{{$images->medicine}}"></span></p>
                    <p>Contenuto ammiccante: <span class="{{$images->racy}}"></span></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex justify-content-center mb-1">
                    <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-6 d-flex justify-content-center mb-md-1">
                    <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout>