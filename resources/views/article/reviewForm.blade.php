<x-layout>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Recensione articolo {{$article->name}}</h1>
      </div>
    </div>
    <div class="col-12">
      @if (session('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
      @endif
    </div>
  </div>
<div class="container-fluid mt-5">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('store_review', compact('article'))}}">
                @csrf
                <div class="mb-3">
                  <div class="form-floating">
                    <textarea class="form-control" name="review" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">La tua recensione</label>
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Invia Recensione</button>
              </form>
        </div>
    </div>
</div>
</x-layout>
