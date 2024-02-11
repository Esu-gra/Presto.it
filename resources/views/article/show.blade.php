<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h2>Dettaglio <span class="text-danger text-center">{{$article->name}}</span></h2>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mt-5">
                    <div class="swiper mySwiper mt-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top img-fluid" id="app" id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app" id="home_img" alt="...">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-3">Euro: {{ $article->price }}</p>
                        <p class=" fs-3">Descrizione: {{ $article->description }}</p>
                        <p class=" fs-3">Categoria: {{ $article->category->name }}</p>
                        <button type="button" class="btn btn-primary mb-1">
                            <a href="/" class="button_back"><span>Torna Indietro</span></a>
                        </button>
                        @auth
                            <button type="button" class="btn btn-primary mb-1">
                                <a class="text-light recensione" href="{{route('create_review', $article)}}">Lascia una recensione</a>
                            </button>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
