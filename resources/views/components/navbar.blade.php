<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <i class="fa-solid me-1 fa-house"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu me-0">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('categoryShow', $category) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Inserisci Annuncio</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle p-0 px-1" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                @guest
                <p class="">Login/Registrati</p>
                @endguest
                @auth
                <p class="text-center m-0">Ciao</p>
                <p class="m-0">{{ Auth::user()->name }}</p>
                @endauth
            </a>
            <ul class="dropdown-menu text-center">
                @guest
                <li><a class="btn btn-outline-warning" href="{{ route('register') }}">Registrati</a></li>
                <li><a class="btn btn-outline-info my-1" href="{{ route('login') }}">Login</a></li>
                @endguest
                <li>
                    <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                    <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <div class=" d-flex flex-row align-items-center">
    <p class="ms-0 mt-3 mx-2 text-center">Benvenuto {{ Auth::user()->name }}</p>
    @guest
    <div class="">
        <a class="btn btn-outline-warning" href="{{ route('register') }}">Registrati</a><br>
    </div>
    <div class="col-auto">
        <a class="btn btn-outline-info mx-2" href="{{ route('login') }}">Login</a>
    </div>
    @endguest
    @auth

        <a class="btn btn-outline-danger mx-1" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
        <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
        </form>

    @endauth
</div> --}}
