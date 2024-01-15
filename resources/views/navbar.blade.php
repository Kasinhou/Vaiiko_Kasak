<!--navbar-->
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex-shrink-0 dropstart ms-2 vpravo-zarovnanie profil">
            @if (Route::has('login'))
                @auth
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle bold" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-check"></i>
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Odhlásiť sa</a>
                            <form id="logout-form" action="{{ route('logout', ['url' => 'home']) }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                @else
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="login">Prihlásiť sa</a></li>
                        <li><a class="dropdown-item" href="register">Registrovať sa</a></li>
                    </ul>
                @endauth
            @endif
        </div>

        <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">MENU</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <div>
                    <div class="position-static border-0 pt-0 mx-0 rounded-3 shadow overflow-hidden" data-bs-theme="dark">
                        <form class="p-2 mb-2 bg-dark border-bottom border-dark">
                            <label>
                                <input type="search" class="form-control bg-dark" autocomplete="false" placeholder="Search...">
                            </label>
                        </form>
                    </div>
                </div>

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <ul class="list-unstyled mb-0">
                        <li class="dropdown">
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-success rounded-circle p-1"></span>
                                Kuchyne
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="recipes">mexická</a></li>
                                <li><a class="dropdown-item" href="recipes">čínska</a></li>
                                <li><a class="dropdown-item" href="recipes">slovenská</a></li>
                                <li><a class="dropdown-item" href="recipes">talianská</a></li>
                                <li><a class="dropdown-item" href="recipes">indická</a></li>
                                <li><a class="dropdown-item" href="recipes">grécka</a></li>
                                <li><a class="dropdown-item" href="recipes">španielska</a></li>
                                <li><a class="dropdown-item" href="recipes">francúzska</a></li>
                                <li><a class="dropdown-item" href="recipes">iné...</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                                Jedlá
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="recipes">raňajky</a></li>
                                <li><a class="dropdown-item" href="recipes">hlavné jedlá</a></li>
                                <li><a class="dropdown-item" href="recipes">polievky</a></li>
                                <li><a class="dropdown-item" href="recipes">dezerty</a></li>
                                <li><a class="dropdown-item" href="recipes">zdravé</a></li>
                                <li><a class="dropdown-item" href="recipes">večere</a></li>
                                <li><a class="dropdown-item" href="recipes">vegánske</a></li>
                                <li><a class="dropdown-item" href="recipes">iné...</a></li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-info rounded-circle p-1"></span>
                                Tipy
                            </button>
                        </li>
                        @auth
                            <li>
                                <a class="btn text-white btn-hover" href="/favourites">
                                    <span class="d-inline-block bg-danger rounded-circle p-1"></span>
                                    Obľúbené
                                </a>
                            </li>
                            <li>
                                <a class="btn text-white btn-hover" href="/my_recipes">
                                    <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                                    Moje recepty
                                </a>
                                {{--<button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>--}}
                            </li>
                        @endauth
                        <li>
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                                O nás
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>
