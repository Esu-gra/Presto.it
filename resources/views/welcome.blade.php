<x-layout>
    <header class="header d-flex align-items-center ">
        <div class="container mb-4">
            <div class="row justify-content-center ">
                <div class="col-12  text-center text-danger">
                    <h1 class="display-2 fw-bold text-white">{{__('ui.welcome')}}</h1>
                    <h4 class="text-white">Dall'essenziale all'eccezionale: trova tutto qui</h4>
                </div>
                {{-- <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div> --}}
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
    <div class="container-fluid mt-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center fs-4">
                    <i class="fa-solid fa-cart-shopping me-2 pb-2 " style="color: #74AFC9;"></i>
                    <h3>FREE DELIVERY</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quam unde cum qui minima,</p>
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center fs-4">
                    <i class="fa-solid fa-medal me-2 pb-2" style="color: #74AFC9;"></i>
                    <h3>QUALITY GUARANTEE</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quam unde cum qui minima,</p>
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center fs-4">
                    <i class="fa-solid fa-tag me-2 pb-2" style="color: #74AFC9;"></i>
                    <h3>DAILY OFFERS</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quam unde cum qui minima,</p>
            </div>
            <div class="col-12 col-md-3">
                <div class="d-flex align-items-center fs-4">
                    <i class="fa-solid fa-shield me-2 pb-2" style="color: #74AFC9;"></i>
                    <h3>100% SECURE PAYMENT</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quam unde cum qui minima,</p>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <div class="row text-center">
            <div class="col-12">
                <h2>Gli ultimi articoli</h2>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-cards name="{{ $article->name}}"
                        image="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : 'https://picsum.photos/1000/300'}}" 
                        {{-- price="{{$article->price}}" --}} {{-- description="{{$article->description}}" --}}
                        {{-- category="{{$article->category->name}}" --}} link="{{ route('show', $article) }}" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
