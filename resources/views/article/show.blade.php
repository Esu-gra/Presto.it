<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card mt-5">
                    <img src="https://picsum.photos/200/300" class="card-img-top" id="home_img" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p>{{$article->description}}</p>
                        <p>{{ $article->category->name }}</p>
                        <a href="/" class="button"><span>Torna indietro</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
