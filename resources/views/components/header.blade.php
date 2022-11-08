<header class="container flex ">
    {{-- <h1 class="visually-hidden">{{ $pageTitle }}</h1> --}}
    <h1>{{ $pageTitle }}</h1>
    <div class="logo">
        <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics Logo" class="img-fluid">
    </div>

    {{-- @dd($links) --}}
    <nav class="top-nav nav-bar" role="navigation" aria-label="Webpages navigation">
        <h2 class="visually-hidden">Webpages Navigation</h2>

        <button id="top-nav-open-menu" class="btn nav-toggle"><i class="fa-solid fa-bars"></i></button>

        <ul class="flex nav-list">
            @foreach ($links as $pageName => $link)

                <li class="nav-link {{ request()->is($pageName) ||  request()->is($link) ? 'active' : '' }}">
                    <a href="{{ $link }}">{{ $pageName }}</a>
                </li>
            @endforeach
        </ul>
    </nav>


    <form>
        <input type="text" class="search-bar" placeholder="search" />
    </form>
</header>
