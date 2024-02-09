<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>
                    Dettaglio di {{$article->name}}
                </h2>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card shadow" style="">
                    <div class="card-body p-0">
                        <h5 class="card-title p-2 text-center">{{$article->name}}</h5>
                        <p class="card-text p-2 text-center">{{$article->description}}</p>
                        <p class="card-text p-2 text-center">Euro {{$article->price}}</p>
                        <div class="swiper mySwiper p-3 mb-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                                <div class="container">
                                    <div class="row mb-5 justify-content-center">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                    
 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout>
