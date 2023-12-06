<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex-shrink-0 dropstart ms-2 vpravo-zarovnanie profil">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="login">Prihlásiť sa</a></li>
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Odhlásiť sa</a></li>
            </ul>
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

                        <li>
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-danger rounded-circle p-1"></span>
                                Obľúbené
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn text-white btn-hover" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                                Moje recepty
                            </button>
                        </li>
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


<!--postup pripravy receptu, ingrediecie, info-->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3 class="bold">Cookies</h3>
                <br>
                <div>
                    <i class="bi bi-question-circle"></i> Obtiažnosť
                </div>
                <div>
                    <i class="bi bi-clock-history"></i> Dĺžka prípravy
                </div>
                <div>
                    <i class="bi bi-globe-americas"></i> Pôvod jedla
                </div><br>

                <h5 class="bold">Ingrediencie</h5>
                <p class="ingrediencie">180 g polohrubá múka<br>
                    130 g práškový cukor<br>
                    125 g maslo<br>
                    1 balíček vanilkový cukor<br>
                    1 ks vajce<br>
                    1 KL kypriaci prášok<br>
                    150 g tmavá čokoláda<br>
                </p>
                <br>

                <button type="button" class="btn btn-sm btn-danger">
                    <i class="bi bi-heart"></i> Uložiť do obľúbených receptov
                </button><br>

            </div>
            <div class="col-12 col-lg-6">
                <br><img class="image-container img-recept" src="{{ asset('images/cookie.jpg') }}" alt="nahlad receptu">
            </div>
        </div><br><hr>

        <div class="row">
            <div class="col">
                <h5 class="bold">Postup prípravy</h5>
            </div>
            <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce eget est dignissim, varius tellus sit amet, finibus orci.
                Donec imperdiet leo at ex tincidunt hendrerit.<br>
                2. Donec eleifend odio vel urna vestibulum, vitae lobortis mauris rhoncus.
                Ut luctus nisl id luctus porttitor.<br>
                3. Praesent hendrerit nulla et tellus dapibus, non convallis purus venenatis.
                Nunc suscipit nisl sed tellus vestibulum tempor.<br>
                4. Pellentesque egestas leo in justo sollicitudin, porta hendrerit velit ornare.
                Fusce id justo aliquet, gravida est faucibus, euismod erat.
                In et urna placerat, viverra mauris at, placerat quam.<br>
                5. Ut vestibulum orci quis dui egestas facilisis.
                Proin egestas odio sed lorem varius, euismod hendrerit mi aliquam.<br>
                6. Praesent ornare arcu eget pretium egestas.
                Vivamus porta sapien id justo scelerisque, sed posuere arcu ullamcorper.<br></p>
        </div>
        <!--pridat mozno nejake obrazky postupu-->

    </div>
</main>


<!--paticka-->
<footer class="d-flex flex-wrap  justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center rec-f">
        <span class="mb-3 mb-md-0 text-body-secondary">Receptiky</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex vpravo-zarovnanie">
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter-x"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>
    </ul>
</footer>
</body>
</html>
