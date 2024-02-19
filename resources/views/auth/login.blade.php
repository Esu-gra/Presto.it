<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h2>{{__("ui.Bentornato")}}</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10 justify-content-center">
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary shadow">{{__("ui.Accedi")}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>