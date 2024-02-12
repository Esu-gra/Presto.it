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
                                <img src="https://picsum.photos/200/100" class="card-img-top img-fluid" id="app" id="home_img"
                                    alt="...">
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
                    <button type="button" class="btn btn-primary" >
                        <a class="text-light recensione" href="{{route('create_review', $article)}}">Lascia una recensione</a>
                    </button>
                </div>
                   
                            
                        @endauth
                    
                </div>
            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    @foreach($article->reviews as $review)
                    <div class="col-12 col-md-6 text-center border border-dark rounded shadow">
                        <h4>{{$review->user->name}}</h4>
                        <p>{{$review->review}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout>
