/*let cardContainer = document.getElementById('cardContainer');
/!*let imageRecipe = "{{ asset('images/cookie.jpg') }}";*!/

//doplnit pocet kolko ich je, z databazy asi
for (let i = 0; i < 15; i++) {
    let divElement = document.createElement('div');
    divElement.className = 'col-12 col-sm-6 col-md-4 col-lg-3';

    divElement.innerHTML = `
                    <div class="card">
                        <!--<img src=imageRecipe class="card-img-top" alt="Konkretny recept">-->

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
                            <button type="button" class="btn btn-sm btn-outline-secondary heart-right" onclick="toggleHeartAnimation(this)">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                    </div>`;
    //let recipeDiv = document.getElementById('card');
    //let imgElement = document.createElement('img');

    /!*imgElement.src = imageRecipe;
    imgElement.className = 'card-img-top';
    imgElement.alt = 'Konkretny recept';

    recipeDiv.appendChild(imgElement);*!/

    cardContainer.appendChild(divElement);
}*/


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
