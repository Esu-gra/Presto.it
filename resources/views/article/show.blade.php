<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card mt-5">
                    <div class="swiper mySwiper mt-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top img-fluid" id="app"
                                    id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app"
                                    id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app"
                                    id="home_img" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/200/100" class="card-img-top" id="app"
                                    id="home_img" alt="...">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p>{{ $article->description }}</p>
                        <p>{{ $article->category->name }}</p>
                        <button type="button" class="btn btn-primary">
                            <a href="/" class="button_back"><span>Torna Indietro</span></a>

                        </button>

                        @auth
                            <button type="button" class="btn btn-primary">
                                <a class="text-light recensione" href="{{ route('create_review', $article) }}">Lascia una
                                    recensione</a>
                            </button>
                        </div>
                        @endauth




                </div>
            </div>
        </div>
    </div>
    




</x-layout>
