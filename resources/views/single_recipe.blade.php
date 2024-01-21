<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jsfunction.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!--navbar-->
@include('navbar')

<!--postup pripravy receptu, ingrediecie, info-->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 id="rid" data-recipeid="{{ $recipe->id }}" class="bold">{{ $recipe->name }}</h2>
                <br>
                <div id="authorInfo" data-userid="{{ $recipe->user_id }}" data-username="{{ optional($recipe->author)->name }}">
                    <i class="bi bi-person-add"></i> {{ optional($recipe->author)->name }}</div>
                <div><i class="bi bi-calendar3"></i> {{ $recipe->getDate() }}</div>
                <br>
               {{-- <div class="row">
                    <div class="col-3">--}}
                        <div><i class="bi bi-clock-history"></i> {{ $recipe->getTime() }}</div>
                        <div><i class="bi bi-question-circle"></i> {{ $recipe->difficulty }}</div>
                        <div><i class="bi bi-globe-americas"></i> {{ $recipe->origin }}</div><br>
                    {{--</div>
                    <div class="col-9">--}}
                        <div><i class="bi bi-info-circle"></i> {{ $recipe->info }}</div>
                        <div><i class="bi bi-code"></i> {{ $recipe->type }}</div>
                    {{--</div>--}}
                {{--</div>--}}
            </div>
                {{--<h5 class="bold"><i class="bi bi-list-task"></i> Ingrediencie</h5>
                <div class="row">
                    <div class="col-12 col-lg-6">
                    <p class="ingrediencie">
                        {!! nl2br(str_replace(" ", " &nbsp;", $recipe->ingredients)) !!}
                    </p>
                    </div>
                </div>
                <br>--}}


            <div class="col-12 col-lg-6">
                @if($recipe->imgpath)
                    <br><img class="image-container img-fluid img-recept" src="{{ asset('uploads/recipe/' . $recipe->imgpath) }}" alt="nahlad receptu">
                @endif
            </div>
        </div><br>
        @if($favorite)
            <button type="button" class="btn btn-sm btn-outline-secondary heart-right heartBeat" onclick="toggleHeartAnimation(this)">
                <i class="bi bi-heart"></i> Obľúbené
            </button>
        @else
            <button type="button" class="btn btn-sm btn-outline-secondary heart-right heartBeatBack" onclick="toggleHeartAnimation(this)">
                <i class="bi bi-heart"></i> Obľúbené
            </button>
        @endif<br><hr>


        <div class="row">
            <div class="col-12 col-lg-4">
                <h5 class="bold"><i class="bi bi-list-task"></i> Ingrediencie</h5>
                <p class="ingrediencie">
                    {!! nl2br(str_replace(" ", " &nbsp;", $recipe->ingredients)) !!}
                </p>
                <br>
            </div>
            <div class="col-12 col-lg-8">
            {{--<div class="col">--}}
                <h5 class="bold"><i class="bi bi-list-columns-reverse"></i> Postup prípravy</h5>
            {{--</div>--}}

            {{--<div class="col-11">--}}
                <p class="steps">{!! nl2br(str_replace(" ", " &nbsp;", $recipe->steps)) !!}<br></p>
            {{--</div>--}}
            </div>
        </div>
        <hr>
        <div>
            <div>
                <h6 class="bold">Poznámka autora</h6>
                <div>{!! nl2br(str_replace(" ", " &nbsp;", $recipe->addinfo)) !!}</div>
            </div><hr>
            <div id="poznamkyContainer" data-username="{{ auth()->user()->name }}" data-userid="{{ auth()->user()->id }}"><p class="bold">Diskusia</p></div>

            <br><div>
                <textarea id="nazor" class="form-control" name="tip" rows="3" placeholder="Podeľte sa o váš názor..."></textarea>
            </div><br>
            <div class="vpravo-zarovnanie">
                <button type="button" class="btn btn-outline-info btn-md bold" onclick="pridajTip()">Pridať</button>
            </div>
        </div>

    </div>
</main>


@include('foot')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let poznamky = document.getElementById('poznamkyContainer');
        let currUser = document.getElementById('poznamkyContainer').dataset.userid;
        //console.log("current id user ", currUser);
        let recipeId = document.getElementById('rid').dataset.recipeid;
        //console.log("111111111111111");

        fetch(`/getRecipeTips/${recipeId}`)
            .then(response => response.json())
            .then(data => {
                //console.log("222222222");
                if (data.tips.length > 0) { //ak uz su nejake
                    data.tips.forEach(tip => {
                        let divElement = document.createElement('div');
                        divElement.className = "row";
                        //let tipByWho = tip.user_id;

                        //console.log("333333333333");
                        divElement.innerHTML = `
                            <div class="col-8 col-lg-10">
                                <p>${tip.author.name}: ${tip.text}</p>
                                <div id="${tip.id}" class="row hiddenEdit">
                                    <div class="col-9 col-lg-11">
                                        <textarea id="ta${tip.id}" class="form-control" data-tipid="${tip.id}" name="edit" rows="2"></textarea>
                                    </div>
                                    <div class="col-3 col-lg-1 text-end">
                                        <button type="button" class="btn btn-outline-dark btn-sm bold" data-tipid="${tip.id}" data-recipeid="${recipeId}" onclick="upravTip(this)">Upraviť</button>
                                    </div>
                                </div>
                            </div>
                            ${tip.author.id == currUser
                                ? `<div class="col-4 col-lg-2 text-end">
                                       <button class="btn" data-recipeid="${recipeId}" data-tipid="${tip.id}" data-tiptext="${tip.text}" onclick="zobraz(this)"><i class="fa fa-edit"></i></button>
                                       <button class="btn" data-recipeid="${recipeId}" data-tipid="${tip.id}" onclick="zmazTip(this)"><i class="fa fa-trash"></i></button>
                                   </div>`
                                : ``}`;

                        poznamky.appendChild(divElement);
                    });
                }
            }).catch(error => console.error('Error:', error));
    });

    function zobraz(button) {
        let tipid = button.getAttribute('data-tipid');
        let divUprava = document.getElementById(tipid);
        if (divUprava.classList.contains("hiddenEdit")) {
            divUprava.classList.remove("hiddenEdit");
            document.getElementById('ta' + tipid).value = button.getAttribute('data-tiptext');
        } else {
            divUprava.classList.add("hiddenEdit");
        }
    }

    function upravTip(button) {
        //event.preventDefault();

        let tipid = button.getAttribute('data-tipid');
        let recipeid = button.getAttribute('data-recipeid');
        if (document.getElementById('ta' + tipid).value.trim() === "") {
            alert("Nie je možné zdieľať prázdny názor.");
            return;
        }
        $.ajax({
            type: 'PUT',
            url: `/updateTip/${tipid}`,
            data: {
                text: document.getElementById('ta' + tipid).value,
                //user_id: userid,
                recipe_id: recipeid
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                let id = response.tip;
                //console.log("som tuuu a asi to ide");
                //window.location.href = `/recipe/${recipeid}#ta` + id;
               // location.reload();
                window.location.href = `/recipe/${recipeid}`;
                alert("Upravene");
                //window.location.href = `/recipe/${recipeid}#poznamkyContainer`;

            },
            error: function (error) {
                console.error('Error :', error);
                alert("Niečo sa pokazilo. Skúste prosím znova.");
            }
        });
    }

    function zmazTip(button) {
        if (!confirm("Váš príspevok bude odstránený!")) {
            return;
        }
        let tipid = button.getAttribute('data-tipid');
        let recipeid = button.getAttribute('data-recipeid');

        fetch(`/deleteTip/${tipid}`, {
            method: 'DELETE',
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Content-Type': 'application/json', },
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`NOK odpoved: ${response.status}`);
                }
                window.location.href = `/recipe/${recipeid}`;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
</body>
</html>
