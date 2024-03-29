<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuchyňa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jsfunction.js') }}"></script>
</head>
<body>

@include('navbar')

<!--obrazok kuchyne plus informacie o nom-->
<main>
    <div>
        <div>
            <h1 class="vpravo-zarovnanie-nazov bold">{{ $cousine->name }} kuchyňa</h1>
            <br>
        </div>

        <div class="container ">
            <div class="row g-4">
                <div class="col image-container">
                    <img class="cousine-img" src="{{ asset('images/cousines/'.$cousine->img_path) }}" alt="obrazok podla typu">
                </div>
                <div class="col">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Niečo málo o kuchyni
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse accordion-info">
                                <div class="accordion-body cousine-info">
                                    {!! $cousine->info !!}
                                </div>
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
        @auth
            <button type="button" class="btn btn-outline-info btn-lg bold vlavo-zarovnanie" onclick="moveToPridaj()">PRIDAŤ RECEPT</button>
        @endauth
        <h3 class="vpravo-zarovnanie bold">Ponuka receptov</h3>
        <div id="cardContainer" data-base-url="{{ asset('uploads/recipe/') }}" class="row g-2"></div>

    </div>
</main>



@include('foot')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cardContainer = document.getElementById('cardContainer');
        let cousineID = {{ $cousine->id }};
        //definovana cesta k obrazkom
        let baseUrl = cardContainer.dataset.baseUrl;

        //nacitania a zobrazenie receptov konkretnych kuchyn
        fetch(`/getRecipesCards/${cousineID}`)
            .then(response => response.json())
            .then(data => { //prejde vsetky
                if (data.recipes.length > 0) { //ci su nejake
                    data.recipes.forEach(recipe => {
                        let divElement = document.createElement('div');
                        divElement.className = 'col-12 col-sm-6 col-md-4 col-lg-3';
                        let infoCheck = recipe.info ? recipe.info : "";
                        let timeCheck = recipe.time ? recipe.time : "";
                        let originCheck = recipe.origin ? recipe.origin : "";
                        let recipeId = recipe.id;
                        //let image = recipe.imgpath ? recipe.imgpath : "";

                        divElement.innerHTML = `
                            <div class="card shadowCard">
                                ${recipe.imgpath ? `<img src="${baseUrl}/${recipe.imgpath}" class="card-img-top cardimage">` : `<img src="{{ asset('images/nophoto.jpg') }}" class="card-img-top cardimage">`}

                                <div class="card-body">
                                    <h5 class="card-title bold infocard text-center">${recipe.name}</h5>
                                    <p class="card-text italic infocard text-center">${infoCheck}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="bi bi-clock-history"></i> ${timeCheck}</li>
                                    <li class="list-group-item italic"><i class="bi bi-question-circle"></i> ${recipe.difficulty}</li>
                                    <li class="list-group-item italic"><i class="bi bi-globe-americas"></i> ${originCheck}</li>
                                </ul>
                                <div class="card-body text-end">
                                    @auth
                                    <a href="#" data-recipe-id="${recipeId}" class="recipelink bold">Celý recept</a>
                                    @endauth
                                </div>
                            </div>`;

                        cardContainer.appendChild(divElement);
                    });
                    //presmerovanie na konkretne recepty
                    cardContainer.addEventListener('click', function (event) {
                        if (event.target.classList.contains('recipelink')) {
                            event.preventDefault();
                            let recipeId = event.target.getAttribute('data-recipe-id');
                            window.location.href = `/recipe/${recipeId}`;
                        }
                    });


                }
                else {
                    cardContainer.innerHTML = `<p>Žiadne recepty v tejto kategórií ešte nie sú pridané. Buďte prvý!</p>`;
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>
