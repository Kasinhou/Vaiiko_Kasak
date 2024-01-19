function goToRecipe(button) {
    //event.preventDefault();
    let recipeId = button.getAttribute('data-recipe-id');

    window.location.href = `/recipe/${recipeId}`;
}

function editRecipe(button) {
    let recipeId = button.getAttribute('data-recipe-id');
    window.location.href = `/update/${recipeId}`;
}

/*function deleteRecipe(button) {
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
            console.error('Error:', error);
        });
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

function moveToPridaj() {
    window.location.href = '/add';
}
