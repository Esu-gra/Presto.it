<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
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
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('categoryShow', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Inserisci Annuncio</a>
                </li>
                @auth
                    {{-- revisor buttons & co. --}}
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item me-4">
                            <a class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page" href="{{ route('revisor.index') }}">
                                Zona Revisore
                                <span class="position-absolute top-0 start-100 transale-middle badge rounded-pill bg-danger">
                                    {{ App\Models\Article::toBerevisionedCount() }}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </li>
                    @endif
                @endauth
                {{-- chiusura bottone revisore --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Tutti gli Articoli</a>
                </li>
                @auth
                @if (!Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('request') }}">Lavora con noi</a>
                    </li>
                @endif
                @endauth
            </ul>
            <form action="{{ route('articles.search') }}" method="GET" class="d-flex">
                <input name="searched" type="text" class="form-control me-2" placeholder="Cosa stai cercando?" aria-label="Search" >
                <button class="btn btn-outline-search ps-0" type="submit">Cerca</button>
            </form>
        </div>
        <li class="nav-item dropdown  nav-item-user list-unstyled me-2 ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::user())
                    Benvenuto {{ Auth::user()->name }}
                @else 
                    Ciao registrati o accedi!
                @endif
            </a>
            <ul class="dropdown-menu">
                @guest
                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><hr class="dropdown-divider"></li>
                @endguest
                @auth
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a></li>
                    <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @endauth
            </ul>
        </li>
        <x-_locale lang="en" />
        <x-_locale lang="es" />
        <x-_locale lang="it" />
    </div>
</nav>
