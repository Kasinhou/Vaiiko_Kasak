<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obľúbené</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('navbar')

<main>
    <h3 class="vpravo-zarovnanie bold">Obľúbené</h3><br>
    <div id="favContainer" class="row g-2 mt-2 px-2"></div>
</main>

@include('foot')
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let fav = document.getElementById('favContainer');

        //spracovanie a zobrazenie vsetkych oblubenych receptov
        fetch(`/getFavorites`)
            .then(response => response.json())
            .then(data => {
                if (data.favorites.length > 0) { //ci ma nejake oblubene
                    data.favorites.forEach(favorite => {
                        let divElement = document.createElement('div');
                        divElement.className = 'col-12 col-sm-6 col-md-3 col-lg-2';
                        let timeCheck = favorite.recipe.time ? favorite.recipe.time : "";
                        let originCheck = favorite.recipe.origin ? favorite.recipe.origin : "";

                        divElement.innerHTML = `
                            <div class="card shadowCard">
                                <div class="card-body">
                                    <h5 class="card-title bold infocardfav text-center">${favorite.recipe.name}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="bi bi-clock-history"></i> ${timeCheck}</li>
                                    <li class="list-group-item italic"><i class="bi bi-question-circle"></i> ${favorite.recipe.difficulty}</li>
                                    <li class="list-group-item italic"><i class="bi bi-globe-americas"></i> ${originCheck}</li>
                                </ul>
                                <div class="card-body d-flex justify-content-between align-items-end">
                                    <a href="#" data-recipe-id="${favorite.recipe.id}" class="recipelink bold">Celý recept...</a>
                                    <a class="btn btn-sm btn-outline-secondary heartBeat">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                </div>
                            </div>`;

                        fav.appendChild(divElement);
                    });//presmerovanie na konkretny recept
                    fav.addEventListener('click', function (event) {
                        if (event.target.classList.contains('recipelink')) {
                            event.preventDefault();
                            let favoriteId = event.target.getAttribute('data-recipe-id');
                            window.location.href = `/recipe/${favoriteId}`;
                        }
                    });
                }
                else {
                    let divElement = document.createElement('div');
                    divElement.className = "stred";
                    divElement.innerHTML = `<p class="bold">Nemáte žiadne obľúbené recepty.</p>`;
                    fav.appendChild(divElement);
                }
            })
            .catch(error => console.error('Error:', error));
    });

</script>
