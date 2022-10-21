<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container ">
        <a class="navbar-brand" href="/">GKI Palu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('aboutus') ? 'active' : '' }}" href="/aboutus">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('location') ? 'active' : '' }}" href="/locations">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hambatuhan') ? 'active' : '' }}" href="/hambatuhan">Hamba Tuhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('bulletin') ? 'active' : '' }}" href="/bulletin">Bulletin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('event') ? 'active' : '' }}" href="/event">Event</a>
                </li>
            </ul>
        </div>
    </div>
</nav>