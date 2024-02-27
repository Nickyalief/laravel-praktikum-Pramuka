<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/img/PRAKARSAicon.png" alt="" class="navbar-brand" width="40"><span
                class="text-warning">SCOUT</span>PRAKARSA</a> <button aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}#profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tentang')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="submit" href="{{ route('login') }}"
                        style="position: relative; padding-right: 15px; padding-left: 15px;">
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Login"
                            style="position: relative;">
                            <span class="text-decoration-none" style="cursor: pointer;" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-content="Login">
                                Login
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar ends -->
