<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Tutti i nostri articoli!</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($articles as $item)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://laravel-livewire.com/img/twitter.png" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$item->name}}</h5>
                        <div class="d-flex justify-content-center mt-5">
                            <a href="{{route('show', $item)}}" class="btn btn-primary">Vuoi saperne di più?</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
