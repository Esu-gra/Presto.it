<x-layout>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-10 text-center">
            <h2>{{__("ui.Registrati!")}}</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__("ui.Nome")}}</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__("ui.Conferma password")}}</label>
                    <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary shadow">{{__("ui.Registrati")}}</button>
            </form>
        </div>
    </div>
</div>
    
</x-layout>

