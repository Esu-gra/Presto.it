<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>{{__("ui.Articoli")}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
            <div class="col-10 col-md-4 mb-5 d-flex justify-content-center">
                <div class="card shadow">
                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(600,400) : 'https://picsum.photos/1000/300'}}" class="card-img-top p-2 img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$article->name}}</h5>
                        <div class="d-flex justify-content-center mt-5">
                            <a href="{{route('show', $article)}}" class="btn btn-primary">{{__("ui.Vuoi saperne di piú?")}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="d-flex justify-content-center">
                <p class="display-6 text-danger">{{__("ui.Nessun articolo trovato")}}</p> <br>
            </div>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>
    {{-- <nav class="d-flex justify-content-center mt-5" aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{route('index')}}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ $articles->PageUrl(2)}}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ $articles->PageUrl(3)}}">3</a></li>
        </ul>
    </nav> --}}
</x-layout>