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
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p>{{ $article->description }}</p>
                        <p>{{ $article->category->name }}</p>
                        <button type="button" class="btn btn-primary">   
                            <a href="/" class="button">Torna indietro</a>
                        </button>
                        @auth
                            <button type="button" class="btn btn-primary">
                                <a class="text-light recensione" href="{{route('create_review', $article)}}">Lascia una recensione</a>
                            </button>
                        @endauth
                    </div>
                </div>
            </div>
            {{-- carosello --}}
            <div class="container my-5">
                <h3 class="text-center my-5">Recensioni</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner text-center">
                                @foreach($article->reviews as $review)
                                <div class="carousel-item active bg-danger rounded bg-light-subtle">
                                    <h5 class="p-3">Scritto da: {{$review->user->name}} </h5><br>
                                    <p class="fs-5 p-3">Commento: {{$review->review}}</p>
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <i class="fas fs-3 text-black fa-arrow-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <i class="fas fs-3 text-black fa-arrow-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fine carosello --}}
        </div>
    </div>
</x-layout>
