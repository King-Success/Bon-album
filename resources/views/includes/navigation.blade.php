<nav class="navbar navbar-expand-lg bg-primary fixed-top" color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Go-To Home Page" data-placement="bottom">
            HOME
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('img/blurred-image-1.jpg') }}">
        <ul class="navbar-nav">
        <li class="nav-item">
            @if( null != Auth::User() )
            <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" rel="tooltip" title="Logout" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <p>Logout</p>
                <p class="d-lg-none d-xl-none"></p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Login or Create An Account"  data-toggle="modal" data-placement="bottom" href="#loginModal">
                <p>Login</p>
                <p class="d-lg-none d-xl-none"></p>
            </a>
            </li>
            @endif
            <a class="nav-link" rel="tooltip" title="Create An Album"  data-placement="bottom" href="/create_album">
                <p>Create Album</p>
                <p class="d-lg-none d-xl-none"></p>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Privacy and Policy" data-placement="bottom" href="#" target="_blank">
                <p>About App</p>
                <p class="d-lg-none d-xl-none"></p>
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>

