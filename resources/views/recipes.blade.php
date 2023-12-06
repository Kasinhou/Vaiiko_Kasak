<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prehľad receptov</title>
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


<!--obrazok kuchyne, typu jedla plus informacie o nom-->
<main>
    <div>
        <h2 class="vpravo-zarovnanie bold">
            TYP RECEPTOV (napr. DEZERTY)
        </h2>
        <br>
    </div>

    <div class="container ">
        <div class="row g-4">
            <div class="col image-container">
                <img src="images/cuisines.jpg" alt="obrazok podla typu">
            </div>
            <div class="col">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Niečo málo o type jedla
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Dodatočné informácie
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--recepty-->
    <br><br>
    <div class="container mt-2">
        <h3 class="vpravo-zarovnanie bold">Ponuka receptov</h3>
        <div id="cardContainer" class="row g-2">
            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/cookie.jpg') }}" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>--}}

            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="images/cookie.jpg" class="card-img-top" alt="Konkretny recept">
                    <div class="card-body">
                        <h5 class="card-title bold">Názov receptu</h5>
                        <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                        <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                        <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                    </ul>
                    <div class="card-body">
                        <a href="recipes/recipe" class="card-link">Prezrieť</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
                </div>
            </div>--}}
        </div>
        <script>
            let cardContainer = document.getElementById('cardContainer');

            //doplnit pocet kolko ich je, z databazy asi
            for (let i = 0; i < 15; i++) {
                let divElement = document.createElement('div');
                divElement.className = 'col-12 col-sm-6 col-md-4 col-lg-3';

                divElement.innerHTML = `
                    <div class="card">
                        <img src="{{ asset('images/cookie.jpg') }}" class="card-img-top" alt="Konkretny recept">
                        <div class="card-body">
                            <h5 class="card-title bold">Názov receptu</h5>
                            <p class="card-text italic">Krátka veta o jedle, na zaujatie používateľa.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-question-circle"></i> Obtiažnosť</li>
                            <li class="list-group-item"><i class="bi bi-clock-history"></i> Dĺžka prípravy</li>
                            <li class="list-group-item"><i class="bi bi-globe-americas"></i> Pôvod jedla</li>
                        </ul>
                        <div class="card-body">
                            <a href="recipes/recipe" class="card-link">Prezrieť</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary heart-right">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                    </div>`;

                cardContainer.appendChild(divElement);
            }
        </script>

    </div>
</main>




<!--paticka-->
<footer class="d-flex flex-wrap  justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-body-secondary rec-f">Receptiky</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex vpravo-zarovnanie">
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter-x"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>
    </ul>
</footer>
</body>
</html>
