<x-layout>

    <div class="container revisor-message  bg-gradient bg-primary shadow mb-5 border rounded">
        <div class="row">
            <div class="col-12 text-light ">
                <h2 class="text-center py-2">
                    {{ $article_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci' }}
                </h2>
            </div>
        </div>
    </div>

    @if ($article_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">ù
                        @if ($article_to_check->images)
                            <div class="carousel-inner ">
                                @foreach ($article_to_check->images as $images)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ Storage::url($images->path) }}" class="img-fluid p-3 rounded"
                                            alt="">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-item active d-flex justify-content-center align-items-center">
                                <img src="https://picsum.photos/1000/300" class="img-fluid" alt="">
                            </div>
                            <div class="carousel-item active d-flex justify-content-center align-items-center">
                                <img src="https://picsum.photos/1000/300" class="img-fluid" alt="">
                            </div>
                            <div class="carousel-item active d-flex justify-content-center align-items-center">
                                <img src="https://picsum.photos/1000/300" class="img-fluid" alt="">
                            </div>
                        @endif






                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <h5 class="card-title text-center my-3">Titolo: {{ $article_to_check->name }}</h5>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-md-6 d-flex justify-content-center mb-1">
                    <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center mb-md-1">
                    <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <button></button>
</x-layout>
