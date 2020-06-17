<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Mängude maailm') }} --}}
            <img src="{{asset('images/logo2.3.png')}}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav main-nav ml-auto">
                <!-- Authentication Links -->
                    <li class="nav-item item"><a class="nav-link active" href="/">AVALEHT</a></li>
                    @guest
                    <li class="nav-item item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('SISENEMINE') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTREERI') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav lang-nav ml-auto">
                <li class="nav-item lang"><a href="#" class="nav-link active">EST</a></li>
                <li class="nav-item lang"><a href="#" class="nav-link">ENG</a></li>
            </ul>
        </div>

    </div>
</nav>

