<x-layout>
<div class="container mb-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1>STORE</h1>
        </div>
    </div>
</div>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="container ">
    <div class="row justyfi-content-beetwin">
        @foreach ($articles as $article)
            <div class="col-12 col-md-4 " >
                <x-cards
                id="{{$article->id}}"
                name="{{$article->name}}"
                price="{{$article->price}}"
                description="{{$article->desciption}}"
                category="{{$article->category->name}}"
                link="{{route('show', $article)}}"
                />
            </div>
        @endforeach
    </div>
</div>
<h2>CIAO</h2>

</x-layout>