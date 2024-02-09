<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create')}}">Inserisci Annuncio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user())
                            Benvenuto {{Auth::user()->name}}
                            @else 
                            Azioni
                            @endif
                    </a>
                        <ul class="dropdown-menu">
                            @guest
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            @endguest
                            @auth
                            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a></li>
                            <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                            @endauth
                        </ul>
                    </li>

            </ul>
        </div>
    </div>
</nav>