<form action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button type="submit0" class="nav-link">
        {{-- <span class="flag-icon flag-icon-{{$nation}}"></span> --}}
        <img src="{{asset ('vendor/blade-flags/language-'. $lang . '.svg')}}" height="32" width="32">

    </button>

</form>