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
    let recipeid = document.getElementById('rid').dataset.recipeid;

    //prida triedu ktoru treba
    if (!isClickedAlready) {
        //kod na pridanie do db
        $.ajax({
            type: 'POST',
            url: '/addFavorite',
            data: {
                recipe_id: recipeid
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log("Response", response);
                button.classList.add('heartBeat');
                button.classList.remove('heartBeatBack');
            },
            error: function (error) {
                console.error("ERROR", error);
                alert("Nepodarilo sa pridať do obľúbených.");
            }
        });

    } else {
        //kod na vymazanie z db
        $.ajax({
            type: 'DELETE',
            url: '/deleteFavorite/' + recipeid,
            data: {
                recipe_id: recipeid
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                button.classList.add('heartBeatBack');
                button.classList.remove('heartBeat');
            },
            error: function () {
                alert("Nepodarilo sa odstrániť z obľúbených.");
            }
        });
    }
}

function moveToPridaj() {
    window.location.href = '/add';
}

function pridajTip() {
    let nazor = document.getElementById('nazor').value;
    let recipeid = document.getElementById('rid').dataset.recipeid;

    if (nazor.trim() !== "") {
        let notes = document.getElementById('poznamkyContainer');
        let divElement = document.createElement('div');
        let userName = document.getElementById('authorInfo').dataset.username;
        let userid = document.getElementById('authorInfo').dataset.userid;
        //console.log(notes, " ", userid, " ", recipeid);
        alert(nazor + " " + userid  + " " + recipeid);

        $.ajax({
            type: 'POST',
            url: '/addTip',
            data: {
                text: nazor,
                //user_id: userid,
                recipe_id: recipeid
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                divElement.innerHTML = `<p>${userName} : ${nazor}</p>`;
                notes.appendChild(divElement);

                document.getElementById('nazor').value = "";

            },
            error: function (error) {
                console.error('Error :', error);
                alert("Niečo sa pokazilo. Skúste prosím znova.");
            }
        });

    } else {
        alert("Nezdieľate svoj názor.");
    }
}
