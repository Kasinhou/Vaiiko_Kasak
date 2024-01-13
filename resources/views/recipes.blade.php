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
{{--
    <script type="module" src="{{ asset('js/heartanimation.js') }}" defer></script>
--}}
</head>
<body>

@include('navbar')

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
        <button type="button" class="btn btn-outline-info btn-lg bold vlavo-zarovnanie" onclick="moveToPridaj()">PRIDAŤ RECEPT</button>
        <h3 class="vpravo-zarovnanie bold">Ponuka receptov</h3>
        <div id="cardContainer" class="row g-2"></div>

    </div>
</main>



@include('foot')

<script>
    let cardContainer = document.getElementById('cardContainer');

    //doplnit pocet kolko ich je, z databazy
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
                            <a href="recipe" class="card-link">Prezrieť</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary heart-right" onclick="toggleHeartAnimation(this)">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                    </div>`;

        cardContainer.appendChild(divElement);
    }


    function toggleHeartAnimation(button) {
        let isClickedAlready = button.classList.contains('heartBeat');

        //prida triedu ktoru treba
        if (!isClickedAlready) {
            button.classList.add('heartBeat');
            button.classList.remove('heartBeatBack');

        } else {
            button.classList.add('heartBeatBack');
            button.classList.remove('heartBeat');
        }
    }

    function moveToPridaj() {
        window.location.href = 'http://localhost:8000/add';
    }
</script>
</body>
</html>
