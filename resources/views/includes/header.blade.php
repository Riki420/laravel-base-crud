<header>
    <div class="header-top"></div>
    <div class="container">
        <div class="header-bottom">
            <figure>
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC-logo">
            </figure>
            <ul class="main-nav">
                <li class="me-2"><a href="{{ route('home') }}" class="@if(request()->routeIs('home')) active @endif">Home</a>
                <li>
                <li><a href="{{ route('comics.index') }}" class="@if(request()->routeIs('comics.index')) active @endif">Comics</a></li>
            </ul>
        </div>
    </div>
</header>