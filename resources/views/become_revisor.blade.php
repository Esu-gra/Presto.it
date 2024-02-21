<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif


    <div style="margin-top: 200px" class="container">
        <div class="row justify-content-center">
            <div class="col-7 d-flex justify-content-center">
                <h1 class="display-3">Lavora con noi</h1>
            </div>
            <div class="col-7">
                {{-- method post invia i dati al backend, action cosa succede al click su submit --}}
                <form method="POST" action="{{route('become.revisor')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="exampleInputPassword1"
                            value="{{old('name') ?? Auth::user()->name}}">
                    </div>
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 200px"></textarea>
                        <label for="floatingTextarea2">Messaggio</label>
                    </div>
                    <button id="submit" type="submit" class="btn btn-primary mt-3">Invia!</button>

                </form>
            </div>
        </div>
    </div>


</x-layout>
