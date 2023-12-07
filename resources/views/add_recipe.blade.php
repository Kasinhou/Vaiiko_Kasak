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
</nav><br>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
            <h4 class="bold">PRIDAJ NOVÝ RECEPT</h4>

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            <form action="addRecipe" method="post">

            @csrf
                <div class="form-group">
                    <label for="exampleInputName">Zadajte názov receptu</label>
                    <input type="text" name="name" class="form-control" placeholder="Názov" value="{{ old('name') }}">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputInfo">Stručne popíšte recept</label>
                    <input type="text" name="info" class="form-control" placeholder="Info">
                </div>

                <div class="form-group">
                    <label for="exampleInputTime">Koľko času zaberie príprava</label>
                    <input type="number" name="time" class="form-control" placeholder="Minúty">
                </div>

                <div class="form-group">
                    <label for="exampleInputOrigin">Odkiaľ pochádza recept</label>
                    <input type="text" name="origin" class="form-control" placeholder="Pôvod">
                </div>

                <label for="exampleInputName">Vyberte obtiažnosť</label>
                <select class="custom-select" name="difficulty">
                    <option selected>Easy</option>
                    <option value="advanced">Advanced</option>
                    <option value="masterchef">Masterchef</option>
                </select>

                <label for="exampleInputName">Vyberte typ</label>
                <select class="custom-select" name="type">
                    <option value="slovenska">slovenská</option>
                    <option value="talianska">talianska</option>
                    <option value="azijska">ázijská</option>
                    <option value="grecka">grécka</option>
                    <option value="spanielska">španielska</option>
                    <option value="mexicka">mexická</option>
                </select>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrediencie</label>
                    <textarea class="form-control" name="ingredients" rows="5">{{ old('ingredients') }}</textarea>
                    <span style="color:red">@error('ingredients'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Príprava receptu</label>
                    <textarea class="form-control" name="steps" rows="10">{{ old('steps') }}</textarea>
                    <span style="color:red">@error('steps'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block w-100">Pridaj</button>
                </div>
            </form>
        </div>
    </div>
</div>




</body>
</html>
