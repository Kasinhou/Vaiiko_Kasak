<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moje recepty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jsfunction.js') }}"></script>
</head>
<body>

@include('navbar')

<main>
    <h3 class="vpravo-zarovnanie bold">Moje recepty</h3><br>
    <div id="myContainer" class="row g-2" data-base-url="{{ asset('uploads/recipe/') }}"></div>
</main>

@include('foot')

</body>
</html>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cardContainer = document.getElementById('myContainer');
        let baseUrl = cardContainer.dataset.baseUrl;

        fetch(`/getMyRecipes`)
            .then(response => response.json())
            .then(data => {
                if (data.recipes.length > 0) { //ci uz uzivatel nejake pridal
                    data.recipes.forEach(recipe => {
                        let divElement = document.createElement('div');
                        let infoCheck = recipe.info ? recipe.info : "-";
                        const updated = new Date(recipe.updated_at);
                        const days = Math.floor((new Date() - updated) / (3600000 * 24));

                        divElement.innerHTML = `
                            <div class="card mx-4">
                                <div class="row g-0">
                                    <div class="col-md-11">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title">${recipe.name}</h5>
                                                <a class="likes mb-2">${recipe.likes} <i class="bi bi-heart-fill likes bold"></i></a>
                                            </div>

                                            <p class="card-text">${infoCheck}</p>
                                            <div class="bottom-card d-flex justify-content-between align-items-center">
                                                <small class="text-body-secondary">Naposledy upravené ${days} dní dozadu.</small>

                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-outline-primary" data-recipe-id="${recipe.id}" onclick="goToRecipe(this)">Prezrieť</button>
                                                    <button type="button" class="btn btn-outline-success" data-recipe-id="${recipe.id}" onclick="editRecipe(this)">Upraviť</button>
                                                    <form id="deleteForm" action="/recipe/{recipe_id}" method="POST">
                                                        @csrf
                                                        <button type="button" class="btn btn-outline-danger" data-recipe-id="${recipe.id}" onclick="deleteRecipe(this)">Vymazať</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ${recipe.imgpath ?
                                        `<div class="col-md-1">
                                            <img src="${baseUrl}/${recipe.imgpath}" class="img-fluid rounded-start" alt="obrazok receptu">
                                        </div>` : ``}
                                </div>
                            </div>`;

                        cardContainer.appendChild(divElement);
                    });
                }
                else {
                    let divElement = document.createElement('div');
                    divElement.className = "stred";
                    divElement.innerHTML = `<p class="bold">Zatiaľ ste nepridali žiadne recepty. Podeľte sa s ostatnými o vaše kuchárske umenie.</p>`;
                    cardContainer.appendChild(divElement);
                }
            })
            .catch(error => console.error('Error:', error));
    });

    function deleteRecipe(button) {
        //let check = confirm("Naozaj si praješ vymazať recept?");
        if (!confirm("Naozaj si praješ vymazať recept?")) {
            return;
        }
        let recipeId = button.getAttribute('data-recipe-id');

        fetch(`/delete/${recipeId}`, {
            method: 'DELETE',
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Content-Type': 'application/json', },
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`NOK odpoved: ${response.status}`);
                }
                window.location.href = '/my_recipes';
            })
            .catch(error => {
                console.error('ERROR:', error);
            });
    }

</script>
