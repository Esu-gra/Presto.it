<x-layout>
    <header class="header d-flex justify-content-start">
        <div class="col-10 ms-3">
            <h1 class="display-3 fw-bold text-black">{{__('ui.welcome')}}</h1>
            <h4 class="text-black">{{__("ui.Dall'essenziale all'eccezionale: trova tutto qui")}}</h4>
        </div>
        <div class="container mb-4">
            <div class="row justify-content-center ">
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
    <div class="container-fluid mt-5  ">
        <div class="row ">
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center  justify-content-center fs-4">
                    <i class="fa-solid fa-cart-shopping me-2 pb-2 " style="color: black;"></i>
                    <h6>{{__("ui.SPEDIZIONE GRATUITA")}}</h6>
                </div>
             
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center justify-content-center fs-4">
                    <i class="fa-solid fa-medal me-2 pb-2" style="color: black;"></i>
                    <h6>{{__("ui.QUALITÀ GRATANTITA")}}</h6>
                </div>
                
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center justify-content-center fs-4">
                    <i class="fa-solid fa-tag me-2 pb-2" style="color: black;"></i>
                    <h6>{{__('ui.OFFERTE GIORNALIERE')}}</h6>
                </div>
              
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center justify-content-center fs-4">
                    <i class="fa-solid fa-shield me-2 pb-2" style="color: black;"></i>
                    <h6>{{__('ui.100% PAGAMENTI SICURI')}}</h6>
                </div>
             
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-4">
        <div class="row text-center">
            <div class="col-12">
                <h3>{{__("ui.Gli Ultimi Articoli")}}</h3>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-cards name="{{ $article->name}}"
                        image="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(600,400) : 'https://picsum.photos/1000/300'}}" 
                        {{-- price="{{$article->price}}" --}} {{-- description="{{$article->description}}" --}}
                        {{-- category="{{$article->category->name}}" --}} link="{{ route('show', $article) }}" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>