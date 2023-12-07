<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recepty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

<!--pozadie obrazky-->
<div id="bgImageContainer"></div>

<div class="bg-text">RECEPTY</div>

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

<!--odseky textu-->
<main>
    <div class="bg-text-secondary bg-text1">1. OBJAVUJTE<br>
        <p class="bg-text-secondary-smaller">nové chute, vône, krajiny</p>
    </div>
    <div class="bg-text-secondary bg-text2">2. ZDOKONAĽUJTE<br>
        <p class="bg-text-secondary-smaller">seba, svoje výtvory</p>
    </div>
    <div class="bg-text-secondary bg-text3">3. VYTVÁRAJTE<br>
        <p class="bg-text-secondary-smaller">vlastné recepty</p>
    </div>
    <div class="bg-text-secondary bg-text4">4. UKLADAJTE<br>
        <p class="bg-text-secondary-smaller">si obľúbené jedlá</p>
    </div>
    <div class="bg-text-secondary bg-text5">5. SLEDUJTE<br>
        <p class="bg-text-secondary-smaller">tipy ostatných ľudí</p>
    </div>
    <div class="bg-text-secondary bg-text6">6. MAJTE<br>
        <p class="bg-text-secondary-smaller">radosť z varenia, pečenia</p>
    </div>


</main>
<script>
    let bgImageContainer = document.getElementById('bgImageContainer');

    for (let i = 0; i < 14; i++) {
        let divElement = document.createElement('div');
        divElement.className = 'bg-image';
        let imgElement = document.createElement('img');


        imgElement.src = "{{ asset('images/bg') }}" + (i % 4 + 1) + ".jpg";

        // Append child
        divElement.appendChild(imgElement);
        bgImageContainer.appendChild(divElement);
    }
</script>
</body>
</html>
