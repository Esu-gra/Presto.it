<x-layout>
    <h1>pippo</h1>
<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('store_review', compact('article'))}}">
                @csrf
                <div class="mb-3">
                  
                  <div class="form-floating">
                    <label for="floatingTextarea"></label>
                    <textarea name="review" class="form-control" placeholder="Lasciaci una recensione" id="floatingTextarea"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Invia recensione</button>
              </form>
        </div>
    </div>
</div>
    
</x-layout>